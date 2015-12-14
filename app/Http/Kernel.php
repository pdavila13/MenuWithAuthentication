<?php

namespace MenuWithAuthentication\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \MenuWithAuthentication\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \MenuWithAuthentication\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \MenuWithAuthentication\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \MenuWithAuthentication\Http\Middleware\RedirectIfAuthenticated::class,
        'role' => 'Zizaco\Entrust\Middleware\EntrustRole',
        'permission' => 'Zizaco\Entrust\Middleware\EntrustPermission',
        'ability' => 'Zizaco\Entrust\Middleware\EntrustAbility',
    ];
}
