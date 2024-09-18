<?php

namespace Abukbt2024\CreateFolderCommand;

use Illuminate\Support\ServiceProvider;
use Abukbt2024\CreateFolderCommand\Console\CreateFolder;

class CreateFolderCommandServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register the command
        $this->commands([
            CreateFolder::class,
        ]);
    }

    public function boot()
    {
        //
    }
}
