<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Campus;

class CampusController extends Controller {
    
    // Display a listing of the campus.
    public function index(Request $request) {

    	$campuses = Campus::orderBy('id','DESC')->paginate(5);
        return view('campus.index',compact('campuses'))
        	->with('i', ($request->input('page', 1) - 1) * 5);
    }

    //Show the form for creating a new campus.
    public function create() {
    	return view('campus.create');
    }

    // Store a newly created campus in storage.
    public function store(Request $request) {

    	$this->validate($request, [
			'name' => 'required',
        ]);

        $campus = Campus::create($request->all());
        $linkname = str_replace(' ', '-', $campus->name);
        $linkname = strtolower($linkname);
        $campus->link_name = $linkname;
        $campus->save();
        return redirect()
        	->route('campuses.index')
            ->with('success','Campus criado com sucesso!');
    }


    // Display the specified campus.
    public function show($id) {

		$campus = Campus::find($id);
		return view('campus.show',compact('campus'));
    }

    //Show the form for editing the specified campus.
    public function edit($id) {

   		$campus = Campus::find($id);
        return view('campus.edit',compact('campus'));
    }

	// Update the specified campus in storage.
    public function update(Request $request, $id) {
    	
    	$this->validate($request, [
			'name' => 'required',
        ]);

        Campus::find($id)->update($request->all());
        return redirect()
        	->route('campuses.index')
			->with('success','Campus atualizado com sucesso!');
    }

    //Remove the specified resource from storage.
    public function destroy($id) {
    	Campus::find($id)->delete();
        return redirect()->route('campuses.index')
	        ->with('success','Campus excluído com sucesso!');
    }
}