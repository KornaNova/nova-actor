<?php

namespace Visanduma\NovaActor\Http\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Visanduma\NovaActor\NovaActor;

class NovaActorTheatre
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (! app()->environment(config('nova-actor.environments')) || NovaActor::list()->isEmpty() || !auth()->check()) {
            return $response;
        }

        $body = $response->getContent();

        $content = Blade::render('nova-actor::theatre', [
            'users' => NovaActor::list()->map(fn ($el) => [
                ...$el,
                'url' => url('vendor/nova-actor/'.encrypt($el['username'])),
                'active' => $el['username'] == auth()->user()[config('nova-actor.username_column')],
            ]),
        ]);

        $body = str($body)->replace('</body>', $content.'</body>')
            ->toString();

        $response->setContent($body);

        return $response;
    }
}
