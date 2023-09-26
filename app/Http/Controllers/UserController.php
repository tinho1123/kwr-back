<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

use App\Http\Controllers\Controller;

use App\Services\UserServices;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    private UserServices $userServices;

    public function __construct() {
        $this->userServices = new UserServices();
    }

    public function create(UserRequest $request) {
        if(!$this->userServices->insert($request->all())) {
            return response(['return' => false, 'message' => 'has a problem to insert this user'], 400);
        }

       return response(['return' => true, 'message' => 'success']);
    }

    public function get(Request $request) {
        return response(["return" => true, 'message' => 'success','data' => $this->userServices->get()], 200);
    }

    public function update(Request $request, int $id)
    {
        if(!$this->userServices->update([$request->all()], ['id' => $id])) {
            return response(['return' => true, 'message' => 'has a problem to update this user'], 400);
        }
        return response(['return' => true, 'message' => 'success'], 200);
    }

    public function delete(Request $request, int $id)
    {
        if(!$this->userServices->delete($id)) {
            return response(['return' => true, 'message' => 'has a problem to deletethis user'], 400);
        }
        return response(['return' => true, 'message' => 'success'], 200);
    }
}
