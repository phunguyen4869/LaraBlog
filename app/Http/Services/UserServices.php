<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserServices
{
    public function getAll()
    {
        $users = User::all();

        return $users;
    }

    public function getById($id)
    {
        $user = User::find($id);

        return $user;
    }

    public function create($request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'intro' => $request->intro,
                'profile' => $request->profile,
                'avatar' => $request->avatar,
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return false;
        }

        return true;
    }

    public function update($request, $id)
    {
        try {
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'intro' => $request->intro,
                'profile' => $request->profile,
                'avatar' => $request->avatar,
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return false;
        }

        return true;
    }

    public function delete($id)
    {
        try {
            User::where('id', $id)->delete();
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return false;
        }

        return true;
    }

    public function insert($request)
    {
        try {
            User::create(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]
            );
        } catch (\Exception $error) {
            Log::error($error->getMessage());

            return  false;
        }

        return true;
    }
}
