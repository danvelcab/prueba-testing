<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserStoreRequest;
use App\Http\Requests\Users\UserUpdateRequest;
use App\Providers\ApiStatusCodeServiceProvider;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function index(){
        return User::all();
    }
    public function show($user_id){
        return User::find($user_id);
    }
    public function store(UserStoreRequest $userStoreRequest){
        $user = new User();
        $user->name = $userStoreRequest->get('name');
        $user->email = $userStoreRequest->get('email');
        $user->password = '$2y$10$Ur6ecNbZYoRRjQKnh81wOe3niesiflm4.cwzCCY8l96STadDmLqne';
        $user->save();

        return response($user, ApiStatusCodeServiceProvider::CREATION_SUCCESS_CODE);
    }
    public function update(UserUpdateRequest $userUpdateRequest, $user_id){
        $user = User::find($user_id);
        $user->name = $userUpdateRequest->get('name');
        $user->email = $userUpdateRequest->get('email');
        $user->password = '$2y$10$Ur6ecNbZYoRRjQKnh81wOe3niesiflm4.cwzCCY8l96STadDmLqne';
        $user->save();

        return response($user, ApiStatusCodeServiceProvider::SUCCESS_CODE);
    }
    public function delete($user_id){
        User::find($user_id)->delete();

        return response('', ApiStatusCodeServiceProvider::SUCCESS_CODE);
    }
}
