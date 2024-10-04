<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $view_path = resource_path('views/'.$name).'.blade.php';

        if(File::exists($view_path)) {
            $this->error('View already exists');
        }else {
            File::put($view_path, '');
            $this->info('View created successfully');
        }
    }
}
