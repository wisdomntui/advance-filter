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

        //  User Filters
        $userFilter = [
            'age' => 22,
            'relationship' => 'married',
            'location' => 'Mumbai',
        ];

        // Relative Filters
        $relativeFilter = [
            'employment_status' => 'employed',
        ];

        // Fetch Users
        $users = (new User)->filter($userFilter)->with(['relatives' => function ($query) use ($relativeFilter) {
            $query->filter($relativeFilter);
        }])->get();

        // dd($users);
        return $users;
    }

}
