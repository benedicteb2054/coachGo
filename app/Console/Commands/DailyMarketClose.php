<?php

namespace App\Console\Commands;

use App\Investments;
use App\Markets;
use App\Payments;
use Carbon\Carbon;
use DB;
use Illuminate\Console\Command;

class DailyMarketClose extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:close';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to  close a market';

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
            if($latest_record == null){
                return;
            }else{
                DB::table('markets')->where('id', $latest_record->id)
                ->update([
                    'updated_at'=>Carbon::now(),
                    'closed'=>true
                ]);
                // Payments::create([
                // ]);
                $payments=payment_service();
                // return $payments;
                // $invest=Investments::where('market_id',Markets::latest()->first());
                dd($payments);
            }
        echo "Operation success";
    }
}
