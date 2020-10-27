<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Services\CommandServies;
use Illuminate\Console\Command;
use App\Models\SmsSendin;
use Illuminate\Foundation\Bus\Dispatchable;

class SmsServiesCommand extends Command
{
    use Dispatchable;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms_list:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'look for new massage';

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
     * @return mixed
     */
    public function handle(): void
    {
        $smss = SmsSendin::where('processing', true)->where('send_time', '<=', Carbon::now())->get();
        if($smss){
            (new CommandServies)->processArray($smss);
        }
//        $time = Carbon::now();
//        \logs()->info("how often [{$time}]");
    }
}
