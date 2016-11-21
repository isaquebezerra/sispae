<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;
use App\Process;
use App\File;
use DateTime;

class ProcessController extends Controller {

	// Display a listing of the users.
	public function index(Request $request) {

		$data = Process::orderBy('id','DESC')->paginate(5);
		return view('process.index',compact('data'))
			->with('i', ($request->input('page', 1) - 1) * 5);
	}

	public function create() {

		$campuses = Campus::pluck('name','id');
        $files = File::pluck('filename');
    	return view('process.create', compact('campuses','files'));
    }

    public function store(Request $request) {

        $this->validate($request, [
        	'name' => 'required',
        	'start_date' => 'required',
        	'final_date' => 'required',
        	'campus_id' => 'required',
        	'status' => 'required',
        ]);

		$input = $request->all();

        $initialDate = $input['start_date'];
        $finalDate = $input['final_date'];

        $input['start_date'] = DateTime::createFromFormat('d/m/Y', $initialDate);
        $input['final_date'] = DateTime::createFromFormat('d/m/Y', $finalDate);      
		$process = Process::create($input);
        
        $campus_id = $request->input('campus_id');
        $process->campus_id = $campus_id;

        $process->save();
		
		return redirect()->route('processes.index')
       		->with('success','Processo criado com sucesso');

    }

    public function show($id) {

        $process = Process::find($id);
        $files = $process->files;
        return view('process.show',compact('process','files'));
    }

    public function destroy($id) {
        Process::find($id)->delete();
        return redirect()->route('processes.index')
            ->with('success','Processo excluído com sucesso!');
    }
}