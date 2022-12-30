<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class UserFormBody extends Component
{
    private $user;
    private $roles;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user = null, $roles = null)
    {
        if (is_null($user)) {
            $user = User::make([

            ]);
        }

        $this->user = $user;
        $this->roles = $roles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'user' => $this->user,
            'roles' => $this->roles
        ];
        return view('components.user-form-body', $params);
    }
}
