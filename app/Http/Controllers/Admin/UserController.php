<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Role;
use  Illuminate\Support\Facades\Auth;
use JsValidator;
class UserController extends Controller
{

    private $validatorRules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users',
        'password' => [
            'min:8',
            'max:64',
            'regex:/^\S*(?=\S)(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/'
        ],
        'roles' => 'required'
    ];

    private $errorMessages = [
        'password.regex' => "Password must contain at least one lowercase letter, one capital letter, one digit and one special symbol (@$!%*#?&^)",
        'roles.required' => "Please choose at least one role"
    ];

    public function index()
    {
        return view('admin.users.index')->with('users', User::where('id','!=', Auth::user()->id)->paginate(10));
    }

    public function create()
    {
        $this->validatorRules['password'][] = 'required';
        $validator = JsValidator::make($this->validatorRules,$this->errorMessages);
        return view('admin.users.create')->with(['editing' => false, 'user' => new User(), 'roles' => Role::all(), 'validator' => $validator]);
    }

    public function store(Request $request)
    {
        $this->validatorRules['password'][] = 'required';
        $dataUser = request()->validate($this->validatorRules, $this->errorMessages);

        $user = User::create($dataUser);
        $user->roles()->sync($dataUser['roles']);

        return redirect()->route('admin.users.index')->with('success','User <strong>'. $user->name .'</strong> is created successfully!');;
    }

    public function edit($id)
    {
        $validator = JsValidator::make($this->validatorRules,$this->errorMessages);
        return view('admin.users.edit')->with(['editing' => true, 'user' => User::find($id), 'roles' => Role::all(), 'validator' => $validator]);
    }

    public function update(User $user)
    {
        if(request()->input('password') == '') {
            unset($this->validatorRules['password']);
        }

        if(request()->input('email') == $user->email) {
            $this->validatorRules['email'] = str_replace('|unique:users','', $this->validatorRules['email']);
        }


        $dataUser = request()->validate($this->validatorRules, $this->errorMessages);

        $user->update($dataUser);
        $user->roles()->sync($dataUser['roles']);

        return redirect()->route('admin.users.index')->with('success','User <strong>'. $user->name .'</strong> is updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index')->with('success','User <strong>'. $user->name .'</strong> is deleted successfully!');
    }

}
