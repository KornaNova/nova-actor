<?php


namespace Visanduma\LaravelAuthSwitch;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class SwitchController extends Controller
{
    public function __invoke($key)
    {
        $this->middleware('web');
        $model = config('auth-switch.model');
        $model = new $model();
        $users = config('auth-switch.accounts', []);
        $u = $model::where(config('auth-switch.username_column', 'email'), $users[$key]['username'])->first();

        if ($u) {
            Auth::login($u);
            return redirect()->to($users[$key]['redirect_to'] ?? '/');
        }

        abort(404, 'User Not Found !');

    }
}
