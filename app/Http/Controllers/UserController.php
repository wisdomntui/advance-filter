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
         * filters for users and relatives.
         */

        //  User Filters
        $userFilter = [
            'age' => 2,
            'relationship' => 'married',
            'location' => 'Nairobi',
        ];

        // Relative Filters
        $relativeFilter = [
            'age' => 2,
            'employment_status' => 'unemployed',
        ];

        // Fetch Users
        $users = (new User)->filter($userFilter)->with(['relatives' => function ($query) use ($relativeFilter) {
            $query->filter($relativeFilter);
        }])->get();

        dd($users);
        // return $users;
    }

}
