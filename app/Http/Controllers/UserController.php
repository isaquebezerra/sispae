<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use Hash;
use App\Campus;

class UserController extends Controller {

	// Display a listing of the users.
	public function index(Request $request) {

		$data = User::orderBy('id','DESC')->paginate(5);
		return view('users.index',compact('data'))
			->with('i', ($request->input('page', 1) - 1) * 5);
	}

	// Show the form for creating a new user.
	public function create() {

		$campuses = Campus::pluck('name','id');
        $roles = Role::pluck('display_name','id');
		return view('users.create',compact('roles','campuses'));
	}


    //Store a newly created user in storage.
    public function store(Request $request) {

        $this->validate($request, [

        	'name' => 'required',
        	'email' => 'required|email|unique:users,email',
        	'password' => 'required|same:confirm-password',
        	'roles' => 'required',
            'campus_id' => 'required'
        ]);


		$input = $request->all();
        
		$input['password'] = Hash::make($input['password']);

		$user = User::create($input);

        foreach ($request->input('roles') as $key => $value) {
        	$user->attachRole($value);
        }

        $campus_id = $request->input('campus_id');

        $user->campus_id = $campus_id;

        $user->save();


        return redirect()->route('users.index')
       	->with('success','Usuário criado com sucesso');
    }

    //Display the specified user.
    public function show($id) {

    	$user = User::find($id);
        return view('users.show',compact('user'));
    }

    //Show the form for editing the specified user.
    public function edit($id) {


    	$user = User::find($id);
        $roles = Role::pluck('display_name','id');
        $campuses = Campus::pluck('name','id');
        $userRole = $user->roles->pluck('id','id')->toArray();
        $userCampus = $user->campus->id;
        return view('users.edit',compact('user','roles','userRole','campuses','userCampus'));
    }

	//Update the specified user in storage.
    public function update(Request $request, $id) {

    	$this->validate($request, [
    		'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();

        if(!empty($input['password'])) {
        	$input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('role_user')->where('user_id',$id)->delete();
  
        foreach ($request->input('roles') as $key => $value) {
        	$user->attachRole($value);
        }

        return redirect()
        	->route('users.index')
            ->with('success','Usuário alterado com sucesso!');
    }

    //Remove the specified user from storage.
    public function destroy($id) {

    	User::find($id)->delete();
        return redirect()
        	->route('users.index')
            ->with('success','User deleted successfully');
    }
}