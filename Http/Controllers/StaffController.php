<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Core\Models\Staff;
use Modules\Core\Models\Role;
use Modules\Core\Models\Permission;
use DB;
use Session;
use Hash;
use Input;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $staff = Staff::orderBy('id', 'desc')->paginate(10);
      return view('core::admincp.staff.index')->withStaffmembers($staff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles = Role::all();
      return view('core::admincp.staff.create')->withRoles($roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validateWith([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:staff'
      ]);

      if (!empty($request->password)) {
        $password = trim($request->password);
      } else {
        # set the manual password
        $length = 10;
        $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        $password = $str;
      }

      $staff = new Staff();
      $staff->name = $request->name;
      $staff->email = $request->email;
      $staff->password = Hash::make($password);
      $staff->save();

      if ($request->roles) {
        $staff->syncRoles(explode(',', $request->roles));
      }

      return redirect()->route('staff.show', $staff->id);

      // if () {
      //
      // } else {
      //   Session::flash('danger', 'Sorry a problem occurred while creating this staff.');
      //   return redirect()->route('staff.create');
      // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $staff = Staff::where('id', $id)->with('roles')->first();
      return view("core::admincp.staff.show")->withStaff($staff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $roles = Role::all();
      $staff = Staff::where('id', $id)->with('roles')->first();
      return view("core::admincp.staff.edit")->withStaffmember($staff)->withRoles($roles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validateWith([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:staff,email,'.$id
      ]);

      $staff = Staff::findOrFail($id);
      $staff->name = $request->name;
      $staff->email = $request->email;
      if ($request->password_options == 'auto') {
        $length = 10;
        $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }
        $staff->password = Hash::make($str);
      } elseif ($request->password_options == 'manual') {
        $staff->password = Hash::make($request->password);
      }
      $staff->save();

      $staff->syncRoles(explode(',', $request->roles));
      return redirect()->route('staff.show', $id);

      // if () {
      //   return redirect()->route('staff.show', $id);
      // } else {
      //   Session::flash('error', 'There was a problem saving the updated staff info to the database. Try again later.');
      //   return redirect()->route('staff.edit', $id);
      // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
