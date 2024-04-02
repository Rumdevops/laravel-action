<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CrawlData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:crawl-data';

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
        // Thực thi tệp test crawlOddTableTest.php bằng PHPUnit
    $output = shell_exec('phpunit /var/www/laravel/odds/tests/Browser/crawlOddTableTest.php');
    
    // Log kết quả hoặc xử lý dữ liệu từ output nếu cần
    $this->info($output);
    }
}
