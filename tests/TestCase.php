<?php

namespace Marcincook\LaravelRoles\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Marcincook\LaravelRoles\LaravelRolesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Marcincook\\LaravelRoles\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelRolesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-roles_table.php.stub';
        $migration->up();
        */
    }
}
