<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        $rules = [
            'name' => 'required',
        ];

        $validator = Validator::make(\request()->all(), $rules);
        $errors = $this->formatErrors($validator->errors());
        if ($validator->fails()) {
            return $this->errorResponse($errors);
        }

        $data = User::create(request()->all());

        $response = array(
        //        'status'  => TRUE,
                    'message' => "ok",
                    'data' => $data
                );
        return response()->json($response, 200);
    }
}
