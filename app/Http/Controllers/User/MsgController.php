<?php

namespace App\Http\Controllers\User;

use App\Repositories\MsgRepositories;
use App\Http\Requests\MsgRequest;
use App\Services\ModelServices\MsgTemplateServices;

class MsgController extends BaseController
{
    protected $msgTemplate;
    protected $msgServices;

    public function __construct()
    {
        parent::__construct();
        $this->msgTemplate = app(MsgRepositories::class);
        $this->msgServices = app(MsgTemplateServices::class);
    }
    /**
     *show form with msg list| array $msgLists
     */
    public function index()
    {
        $msgLists = $this->msgTemplate->getAllUserMsgPaginator();

        return view('user.msgTemplate.index', compact('msgLists'));
    }

    /**
     * @param MsgRequest $request
     *store msg
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store( MsgRequest $request )
    {
        $store = $this->msgServices->create($request->input('msg_text'));

        if( $store ) {
            $msgLists = $this->msgTemplate->getAllUserMsgPaginator();
            return redirect()->route('msg_template', compact('msgLists'))
                ->with(['success' => 'You create a new massege template']);
        } else {
            return redirect()->back()
                ->withErrors(['msg' => 'some thong went wrong']);
        }
    }



}
