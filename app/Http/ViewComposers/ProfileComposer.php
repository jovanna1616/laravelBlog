<?php

namespace App\Http\ViewComposers;
use App\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\View\View;

class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $user;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(User $user)
    {
        // Dependencies automatically resolved by service container...
        $this->user = $user;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('user', Auth::user());
    }
}