<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Post;
use App\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Post::class=>\App\Policies\PostPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */

    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

       
       /*
        //pega o user logado e verifica se o id do post e igual aos seus posts
        $gate->define('update-post',function(User $user, Post $post){
            return $user->id == $post->user_id;
        });
        */
    }
}
