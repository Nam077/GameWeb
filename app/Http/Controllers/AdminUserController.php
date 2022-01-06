<?php

namespace App\Http\Controllers;

use App\Game;
use App\GameScore;
use App\Http\Requests\UserAddRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    private $user;
    private $role;
    public function __construct(User $user, Role $role, GameScore  $gameScore)
    {
        $this ->user = $user;
        $this ->role = $role;
        $this ->gameScore = $gameScore;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $this ->user ->search()->paginate(10);
        return  view('Admin.User.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = $this -> role ->all();
        return  view('Admin.User.add', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->create([
                'name' => $request ->name,
                'email' => $request ->email,
                'password' => Hash::make($request ->password),
            ]);
            $roleId = $request ->roles_id;
            $user -> roles() ->attach($roleId);
            DB::commit();
            return redirect()->route('users.index');
        } catch (\Exception $exception){
            DB::rollBack();
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this ->user->find($id);
        $role = $this ->role->all();
        $userRole = $user ->roles;

        return view('Admin.User.edit',compact('role','user','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
             $this->user->find($id)->update([
                'name' => $request ->name,
                'email' => $request ->email,
                'password' => Hash::make($request ->password),
            ]);
            $user =  $this->user->find($id);
            $roleId = $request ->roles_id;
            $user -> roles() ->sync($roleId);
            DB::commit();
            return redirect()->route('users.index');
        } catch (\Exception $exception){
            DB::rollBack();
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $this ->user->find($id)->delete();
            $this ->gameScore->where('user_id', $id)->delete();
            DB::table('role_user')->where('user_id',$id)->delete();


        } catch (\Exception $exception){
            Log::error('Messges' . $exception->getMessage() . 'Line' . $exception->getLine());
            return  response() -> json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
        return  response() -> json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }
}
