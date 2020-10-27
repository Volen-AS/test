<?php

namespace App\Http\Controllers\User;

use App\Repositories\GroupRepositories;
use App\Repositories\MsgRepositories;
use App\Http\Requests\SendRequest;
use App\Services\ModelServices\SmsSendingServices;
use App\Jobs\MassSendingJob;

class MassSendingController extends BaseController
{


    public function index()
    {
        $msgLists = (new MsgRepositories)->getAllUserMsgPaginator();
        $groups = (new GroupRepositories)->getAllWithPaginator();

        return view('user.send.index', compact('groups', 'msgLists'));
    }

    public function send( SendRequest $request )
    {
        if($request->input('time')) {

            (new SmsSendingServices())->create($request->input());

            return redirect()->route('mass-sending')
                ->with(['success' => 'your sending in queue']);
        } else {

            $jod = new MassSendingJob($request->input('group_id'), $request->input('msg_template_id'));
            $this->dispatch($jod);


            return redirect()->route('mass-sending')
                ->with(['success' => 'you send sms']);
        }
    }
}
