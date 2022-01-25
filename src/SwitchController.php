<?php


namespace Visanduma\LaravelAuthSwitch;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class SwitchController extends Controller
{
    public function __invoke($key)
    {
        //Auth::logout();
        $users = config('laravel-auth-switch.accounts', []);
        $u = \App\Models\User::where(config('laravel-auth-switch.username_column', 'email'), $users[$key]['username'])->first();

        if ($u) {
            Auth::login($u);
            return redirect()->to($users[$key]['redirect_to'] ?? '/');
        }

        abort(401);

    }
}
