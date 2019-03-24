<?php

namespace App\Console\Commands;

use Artisan;
use Illuminate\Console\Command;

/**
 * Class ClearAllCaches
 *
 * @package Continental\Sgi\Core\Console\Commands
 */
class ClearAllCaches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear-all-caches';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears all application caches';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('route:clear');
        $this->info('Route cache cleared!');

        Artisan::call('config:clear');
        $this->info('Configuration cache cleared!');

        Artisan::call('view:clear');
        $this->info('Compiled views cleared!');

        Artisan::call('cache:clear');
        $this->info('Cache cleared successfully.');
    }
}
