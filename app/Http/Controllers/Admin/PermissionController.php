<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use App\Repositories\Interfaces\permission\PermissionInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Requests\PermissionRequest;

class PermissionController extends Controller
{
    /**
     * @var PermissionInterface
     */
    private $permission;

    /**
     * TodoController constructor.
     */
    public function __construct(PermissionInterface $permission)
    {
        $this->permission = $permission;
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = $this->permission->getAll();
        return view('admin.pages.permission.index',compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->permission->create($request->input());
        return redirect()->route('permission.index')->with('message','Permission has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = $this->permission->getById($id);
        return view('admin.pages.permission.show',['permission' => $permission]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = $this->permission->getById($id);
        return view('admin.pages.permission.edit',['permission' => $permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $this->permission->update($id,$request->input());
        return redirect()->route('permission.index')->with('message','Permission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->permission->delete($id);
        return redirect()->route('permission.index')->with('delete','Permission has been deleted successfully');
    }
}
