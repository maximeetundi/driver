<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);

           // tttttttttttttttttttttttttttttttt
           DB::listen(function ($query) {
            // Liste des tables Telescope
            $telescopeTables = [
                'telescope_entries',
                'telescope_entries_tags',
                'telescope_monitoring',
                'business_settings',
                'users',
                'user_last_locations'
                // Ajoutez d'autres tables Telescope si nécessaire
            ];

            // Vérifiez si la requête est liée à Telescope
            $isTelescopeQuery = false;
            foreach ($telescopeTables as $table) {
                if (strpos($query->sql, $table) !== false) {
                    $isTelescopeQuery = true;
                    break;
                }
            }

            // Si ce n'est pas une requête Telescope, loguez-la
            if (!$isTelescopeQuery) {
                Log::info('SQL Query', [
                    'sql' => $query->sql,
                    'bindings' => $query->bindings,
                    'time' => $query->time,
                ]);
            }
        });
        //fgggggggggggggggggggggggggggggggggg
        if($this->app->environment('live')) {
            URL::forceScheme('https');
        }
        Paginator::useBootstrap();
    }
}
