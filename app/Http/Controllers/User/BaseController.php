<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

/**
 *Base controller for all controller management user

 * should be parent all controller management user
 *
 * @package App\Http\Controllers\User
 */

class BaseController extends Controller
{
    /**
     * BaseController constructor
     *
     * Create a new controller instance.
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');

    }

}
