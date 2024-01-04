<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use ZipArchive;

class BackupSeeders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:backup-seeders';

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
        $backupPath = storage_path('app/backup/seeders');  // Specify seeders directory

            // Ensure directory exists
            if (!is_dir($backupPath)) {
                mkdir($backupPath, 0755, true);
            }

            $filename = "backup-seeders-" . Carbon::now()->format('Y-m-d_H-i-s') . ".zip";  // Use ZIP format

            $zip = new ZipArchive();
            $zip->open($backupPath . '/' . $filename, ZipArchive::CREATE);

            // Add seeders files to the ZIP archive
            $seedersPath = database_path('seeders');
            $files = File::files($seedersPath);

            foreach ($files as $file) {
                $relativePath = 'seeders/' . $file->getFilename();
                $zip->addFile($file->getPathname(), $relativePath);
            }

            $zip->close();
    }
}
