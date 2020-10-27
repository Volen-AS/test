<?php

namespace App\Observers;

use App\Models\MsgTemplate;
use Illuminate\Support\Facades\Auth;

class MsgTemplateObserver
{
    /**
     * Handle the msg template "creating" event.
     *
     * @param  \App\Models\MsgTemplate  $msgTemplate
     * @return void
     */
    public function creating(MsgTemplate $msgTemplate)
    {
        $this->setUser($msgTemplate);
    }

    protected function setUser(MsgTemplate $msgTemplate)
    {
        $msgTemplate->user_id = Auth::id();
    }


}
