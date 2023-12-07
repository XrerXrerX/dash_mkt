<?php

namespace App\Console;

use App\Console\Commands\importAnalytic;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected $commands = [
        importAnalytic::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('export:analytic')->dailyAt('23:50');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
