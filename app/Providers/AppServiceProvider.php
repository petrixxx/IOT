<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Device;
use App\Models\Document;
use App\Moldes\DeviceType;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\DevicePolicy;
use App\Policies\DocumentPolicy;
use App\Policies\DeviceTypePolicy;
use App\Policies\PermissionPolicy;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }


    protected $policies = [
        Permission::class => PermissionPolicy::class,
        Role::class => RolePolicy::class,
        User::class => UserPolicy::class,
        DeviceType::class => DeviceTypePolicy::class,
        Device::class => DevicePolicy::class,
        Document::class => DocumentPolicy::class,
    ];

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
