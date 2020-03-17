<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        return view('user_list');
    }

    public function userFetchList() {
        $users = User::all();
        echo json_encode($users);  
    }

    public function active_deactive_user($id) {
            $user = User::find($id);
            if($user->status == 1) {
                $user->status = 0;
            } else {
            $user->status = 1;
            }
            if($user->save()) {
                echo json_encode('success');
            } else {
                echo json_encode('failed');
            }
    }
}
