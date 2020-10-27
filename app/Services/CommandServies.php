<?php

namespace App\Services;
use App\Http\Controllers\Controller;
use App\Jobs\MassSendingJob;
use App\Models\SmsSendin;
use Illuminate\Foundation\Bus\DispatchesJobs;

class CommandServies
{
    use DispatchesJobs;

    public function processArray( $array )
    {
        foreach ( $array as $data){

            $jod = new MassSendingJob($data->group_id, $data->msg_templates_id);
            $this->dispatch($jod);

            SmsSendin::find($data->id)->delete();
        }
    }
}

