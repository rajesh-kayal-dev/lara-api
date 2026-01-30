<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($flag)
    {
        $query = User::select('name', 'email');

        if($flag == 1){
            $query->where('status', 1);
        } else if($flag == 0){
            $query->where('status', 0);
        } else {
            return response()->json([
                "status" => false,
                "message" => "Invalid flag parameter it can be either be 0 or 1",
            ], 400);
        }
        $users = $query->get();


        if($users->count() > 0){
            $response = [
                "status" => true,
                "message" => "Users fetched successfully",
                "data" => $users
            ];
        } else {
            $response = [
                "status" => false,
                "message" => "No users found",
            ];
        }
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|min:8|confirmed",
            "password_confirmation" => "required|string|same:password"
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ];
        DB::beginTransaction();
        try {
            $user = User::create($data);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $user = null;
        }
        if ($user != null) {
            return response()->json([
                "status" => true,
                "message" => "User register sucessfully",
                "data" => $user
            ], 200);
        } else {
            return response()->json([
                "status" => false,
                "message" => "Internal server error",
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if(!$user){
            $response = [
                "status" => false,
                "message" => "User not found",
            ];
        }else{
            $response = [
                "status" => true,
                "message" => "User fetched successfully",
                "data" => $user
            ];
        }
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
