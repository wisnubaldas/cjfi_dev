<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CekConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cek-koneksi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ceking koneksi ke database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Test database connection
        try {
            DB::connection()->getPdo();
            echo "sukses konek \n";
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
        return 0;
    }
}
