<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Gets users based on filters
     *
     * @param Request $request
     */
    public function getUsers(Request $request)
    {
        /**
         * Here we will get users and their respective relatives based on different
         * filters for users and relatives. These filters can be generated from post data.
         */

        $users = User::filter($request->all())->with(['relatives'])->get();

        return $users;
    }

}
