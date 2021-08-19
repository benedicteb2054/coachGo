<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use DB;
use Illuminate\Console\Command;

class DailyMarketOpen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:open';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to open a market';

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
        $latest_record = DB::table('markets')->latest('created_at')->first();
            if($latest_record==null){
                DB::table('markets')->insert(['created_at'=>Carbon::now()]);
            }else{
                // DB::table('markets')->where('id', $latest_record->id)
                // ->update([
                //     'updated_at'=>Carbon::now(),
                //     'closed'=>true
                // ]);
                DB::table('markets')->insert(['created_at'=>Carbon::now()]);
            }
        echo "Operation réussie";
    }
}
