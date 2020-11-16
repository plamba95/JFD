<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Article;

use JsValidator;

class ArticleController extends Controller
{

    private $validatorRules = [
        'title' => 'required|min:3|max:255',
        'content' => 'required',
        'image' => 'image'
    ];

    private $errorMessages = [

    ];

    public function index()
    {
        return view('articles.index')->with('articles', Article::orderby('created_at','desc')->paginate(10));
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        $this->authorize('create', Article::class);

        $this->validatorRules['image'] .= "|required";
        $validator = JsValidator::make($this->validatorRules);

        return view('articles.create')->with(['editing' => false, 'article' => new Article(), 'validator' => $validator]);
    }

    public function store()
    {
        $this->authorize('create', Article::class);
        $this->validatorRules['image'] .= "|required";
        $data = request()->validate($this->validatorRules, $this->errorMessages);
        $data['user_id'] = Auth::user()->id;

        $article = Article::create($data);

        $this->storeImage($article);

        return redirect()->route('articles.show',['id' => $article->id])->with('success','Article <strong>'. $article->title .'</strong> is created successfully!');;
    }

    public function edit(Article $article)
    {
        $this->authorize('update', $article);

        $validator = JsValidator::make($this->validatorRules);

        return view('articles.edit')->with(['editing' => true, 'article' => $article, 'validator' => $validator]);
    }

    public function update(Article $article)
    {
        $this->authorize('update', $article);

        $data = request()->validate($this->validatorRules, $this->errorMessages);
        unset($data['image']);

        $article->update($data);

        if(request()->image) {
            $this->storeImage($article, true);
        }

        return redirect()->route('articles.show',['id' => $article->id])->with('success','Article <strong>'. $article->title .'</strong> is updated successfully!');
    }

    public function destroy(Article $article)
    {
        $this->authorize('delete', $article);

        Storage::disk('public')->delete($article->image);

        $article->delete();

        return redirect()->route('articles.index')->with('success','Article <strong>'. $article->title .'</strong> is deleted successfully!');
    }

    private function storeImage($article, $deleteOld = false) {
        if($deleteOld === true) {
            Storage::disk('public')->delete($article->image);
        }
        $ext = request()->image->extension();
        $path = request()->image->storeAs('uploads/articles', 'article_' . $article->id . '.' . $ext,'public');
        $article->update(['image' => $path]);
    }

}
