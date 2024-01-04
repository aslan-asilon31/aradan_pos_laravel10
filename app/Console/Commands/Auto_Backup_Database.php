<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class Auto_Backup_Database extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:database';

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
        $backupPath = storage_path() . "/app/backup/";

        // Check if the backup directory exists, if not, create it
        if (!is_dir($backupPath)) {
            // The third parameter true specifies recursive mode to create nested directories
            mkdir($backupPath, 0755, true);
        }
        
        $filename = "backup-" . Carbon::now()->format('Y-m-d_H-i-s') . ".gz";
        $command = "mysqldump --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE') . "  | gzip > " . $backupPath . $filename;
        
        $returnVar = NULL;
        $output  = NULL;
        
        exec($command, $output, $returnVar);
    }
}
