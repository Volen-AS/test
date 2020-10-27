<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ProfileRepositories;


class ProfileController extends BaseController
{

    /**
     * @var ProfileRepositories
     */
    private $profileRepositories;

    public function __construct()
    {
        parent::__construct();
        $this->profileRepositories = app(ProfileRepositories::class);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profile = $this->profileRepositories->getProfile(Auth::id());

        if(!$profile) {
            $profile = Profile::make();

        }
        return  view('user.profile.profile', compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     * use observer for user_id
     * @param   ProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProfileRequest $request)
    {
        $data = $request->all();

        $item = Profile::create($data);

        if($item) {
            return redirect()->route('profile.user.index')
                ->with(['success' => 'you created your profile']);
        } else {
            return back()->withErrors(['msg'=> 'ERROR TO CREATING PROFILE'])
                ->withInput();
        }

    }

    public function update(ProfileRequest $request,$id)
    {

        $profile = $this->profileRepositories->getProfile($id);

        if(empty($profile)) {
            return back()
                ->withErrors(['msg' => 'Profile user_id=[{$id}] not founded'])
                ->withInput();
        }


        $data = $request->all();

        $result = $profile->update($data);

        if ($result) {
            return redirect()
                ->route('profile.user.index')
                ->with(['success' => 'profile was edit']);
        } else {
            return back()
                ->withErrors(['msg' => 'Error save'])
                ->withInput();
        }

    }
}
