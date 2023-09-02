<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    public function create(UserRequest $request) {
       $request->validated();
       return 'oi';
    }

    public function get(Request $request) {
        $user = User::get();
        return response(['data' => $user], 200);

    }
    public function update(Request $request, int $id) {

    }
    public function delete(Request $request, int $id) {

    }
}
