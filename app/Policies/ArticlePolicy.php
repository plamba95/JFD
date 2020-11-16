<?php

namespace App\Policies;

use App\User;
use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return $user->hasAnyRole('author');
    }

    public function update(User $user, Article $article)
    {
        return $user->hasAnyRoles(['admin','author']);
    }

    public function delete(User $user, Article $article)
    {
        return $user->hasAnyRole('admin');
    }

}
