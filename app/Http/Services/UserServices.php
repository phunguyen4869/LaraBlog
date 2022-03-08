<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserServices
{
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
