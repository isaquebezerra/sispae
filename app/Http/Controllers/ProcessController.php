<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;
use App\Process;
use App\File;
use App\Modality;
use DateTime;
use DB;

class ProcessController extends Controller {

	// Display a listing of the users.
	public function index(Request $request) {

		$data = Process::orderBy('id','DESC')->paginate(5);
		return view('processes.index',compact('data'))
			->with('i', ($request->input('page', 1) - 1) * 5);
	}

	public function create() {

		$campuses = Campus::pluck('name','id');
        $files = File::pluck('filename');
    	return view('processes.create', compact('campuses','files'));
    }

    public function store(Request $request) {

        $this->validate($request, [
        	'name' => 'required',
        	'start_date' => 'required',
        	'final_date' => 'required',
        	'campus_id' => 'required',
            'modalidades' => 'required',
        ]);

		$input = $request->all();

        $initialDate = $input['start_date'];
        $finalDate = $input['final_date'];

        $input['start_date'] = DateTime::createFromFormat('d/m/Y', $initialDate);
        $input['final_date'] = DateTime::createFromFormat('d/m/Y', $finalDate);

        $process = Process::create($input);
        
        $campus_id = $request->input('campus_id');
        $process->campus_id = $campus_id;

        $modalities = $input['modalidades'];

        foreach ($modalities as $modality) {
            $process->modalities()->attach($modality);
        }

        $process->save();
		
		return redirect()->route('processes.index')
       		->with('success','Processo criado com sucesso');

    }

    public function edit($id) {

        $process = Process::find($id);
        $processCampus = $process->campus->id;
        $startDate = $process->start_date;
        $finalDate = $process->final_date;

        $startDate = DateTime::createFromFormat('Y-m-d', $startDate);
        $finalDate = DateTime::createFromFormat('Y-m-d', $finalDate);

        $startDate = $startDate->format('d/m/Y');
        $finalDate = $finalDate->format('d/m/Y');
        $campuses = Campus::pluck('name','id');
        $modalities = Modality::get();
        $processModalities = DB::table("modality_process")
            ->where("modality_process.process_id",$id)
            ->pluck('modality_process.modality_id','modality_process.modality_id');

        return view('processes.edit', compact('process','modalities','processModalities','campuses', 'processCampus','startDate','finalDate'));
    }

    //Update the specified process in storage.
    public function update(Request $request, $id) {

        $this->validate($request, [
            'name' => 'required',
            'start_date' => 'required',
            'final_date' => 'required',
            'campus_id' => 'required',
            'modalities' => 'required',
        ]);

        $input = $request->all();

        $initialDate = $input['start_date'];
        $finalDate = $input['final_date'];

        $input['start_date'] = DateTime::createFromFormat('d/m/Y', $initialDate);
        $input['final_date'] = DateTime::createFromFormat('d/m/Y', $finalDate);

        $process = Process::find($id);
        $process->update($input);
        DB::table('modality_process')->where('process_id',$id)->delete();
  
        $modalities = $input['modalities'];

        foreach ($modalities as $modality) {
            $process->modalities()->attach($modality);
        }

        return redirect()
            ->route('processes.index')
            ->with('success','Processo alterado com sucesso!');
    }

    public function show($id) {

        $process = Process::find($id);
        $files = $process->files;
        return view('processes.show',compact('process','files'));
    }

    public function destroy($id) {
        Process::find($id)->delete();
        return redirect()->route('processes.index')
            ->with('success','Processo excluído com sucesso!');
    }
}