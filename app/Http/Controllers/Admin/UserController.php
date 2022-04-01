<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Services\UserServices;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserServices $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->getAll();

        return view('Admin.User.UserManage.list', [
            'title' => 'User Manage',
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.User.UserManage.create', [
            'title' => 'User Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $result = $this->user->create($request);

        if ($result) {
            return redirect()->route('user.index')
                ->with('success', 'Create user successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Create user failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Admin.User.UserManage.edit', [
            'title' => 'User Edit',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (!empty($request->input('password'))) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6',
                're-password' => 'required|string|same:password',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
            ]);
        }


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        }

        $result = $this->user->update($request, $user->id);

        if ($result) {
            return redirect()->route('user.index')
                ->with('success', 'Update user successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Update user failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $result = $this->user->delete($request->id);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Delete user successfully',
            ]);
        } else {
            return response()->json([
                'error' => true,
            ]);
        }
    }
}
