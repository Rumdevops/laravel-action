<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
	    // $schedule->command('inspire')->hourly();
	    $schedule->command('app:crawl-data')->everyFifteenSeconds();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
    // Đăng ký công việc crawl dữ liệu mỗi 15 phút
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
