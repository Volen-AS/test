<?php

namespace App\Jobs;

use App\Exceptions\SmsException\SmsSendingException;
use App\Models\UserGroup;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\MsgTemplate;
use App\Services\SenderServices;
use App\Services\ModelServices\SendedServices;

class MassSendingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $group_id;
    protected $msg_id;
    protected $sender;

    /**
     * Create a new job instance.
     *
     * @param $group_id
     * @param $msg_id
     */
    public function __construct($group_id, $msg_id)
    {
        $this->group_id = $group_id;
        $this->msg_id = $msg_id;
        $this->sender = app(SenderServices::class);
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws SmsSendingException
     */
    public function handle()
    {
        $current_msg = MsgTemplate::find($this->msg_id)->msg_text;
        $current_users = UserGroup::where('group_id', $this->group_id)->get();


        foreach ( $current_users as $user ) {

            $phone = $user->getName->profile->phone;
            $this->sender->sendMessage( $current_msg, $phone );

        }
         (new SendedServices())->create( $this->group_id, $this->msg_id );
    }

    public function failed(Exception $exception)
    {
        logs()->warning($exception->getMessage());
    }
}
