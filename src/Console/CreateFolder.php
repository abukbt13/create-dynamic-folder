<?php

namespace Abukbt2024\CreateFolderCommand\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateFolder extends Command
{
    protected $signature = 'make:folder {name}';
    protected $description = 'Create a folder with the given name';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $folderName = $this->argument('name');
        $path = base_path($folderName);

        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
            $this->info("Folder '{$folderName}' created successfully.");
        } else {
            $this->error("Folder '{$folderName}' already exists.");
        }
    }
}
