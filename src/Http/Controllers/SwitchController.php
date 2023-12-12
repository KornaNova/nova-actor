<?php

namespace Visanduma\NovaActor\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Visanduma\NovaActor\NovaActor;

class SwitchController extends Controller
{
    public function __invoke($key)
    {

        $user = app(config('nova-actor.model'));

        $account = NovaActor::list()->where('username', decrypt($key))->first();

        $user = $user::where([
            config('nova-actor.username_column', 'email') => decrypt($key),
        ])->first();

        if ($user && $account) {
            $provider = Auth::guard($account['guard'] ?? config('nova.guard'));

            $provider->login($user);

            return redirect()->to(url($account['redirect_to'] ?? config('nova.path')));
        }

        abort(404);

    }
}
