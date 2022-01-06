<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Permission.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission = Permission::create([
            'name' => $request->sidebar,
            'display_name' => $request->sidebar,
            'parent_id' => 0,
            'key_code'=> '',
        ]);
        foreach ($request->permission_id as $value) {
            if($value == 'list') $name = 'Danh Sách';
            elseif ($value == 'create') $name = 'Thêm';
            elseif ($value == 'edit') $name = 'Chỉnh Sửa';
            elseif ($value == 'delete') $name = 'Xoá';
            Permission::create([
                'name' => $request->sidebar.' '.$value,
                'display_name' => $name.' '.$request->sidebar,
                'parent_id' => $permission->id,
                'key_code'=> $value.'_'.$request->sidebar,
            ]);
        }
        return redirect() -> route('permissions.create');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
