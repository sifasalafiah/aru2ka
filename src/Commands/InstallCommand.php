<?php

declare(strict_types=1);

namespace Codakarta\Aru2ka\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'aru2ka:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prepare Arunika files';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->addEntries();
        Artisan::call('vendor:publish', ['--tag' => 'aru2ka-styles', '--force' => true]);
        Artisan::call('vendor:publish', ['--tag' => 'aru2ka-views']);
        $this->newLine();
        $this->info(sprintf('Aru2ka is ready'));

        return 1;
    }

    private function addEntries()
    {
        $entries = [
            base_path('.gitignore') => [
                '/public/vendor/aru2ka',
            ],
        ];
    }
}
