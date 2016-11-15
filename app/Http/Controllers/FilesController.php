<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Storage;
use App\File;
use App\Process;

class FilesController extends Controller {

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
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

    public function handleUpload(Request $request){

        // if($request->hasFile('file')){
            $file = $request->file('file');
            $allowedFileTypes = config('app.allowedFileTypes');
            $maxFileSize = config('app.maxFileSize');
            $rules = [
                'file' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
            ];
            $this->validate($request, $rules);
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));

            $process_id = $request->get('process_id');

            if($uploaded){
                $file = File::create(['filename' => $fileName]);
                $file->process_id = $process_id;
                $file->save();
                return redirect()->to('/processes/'.$process_id);
            }
        // }



        return redirect()->action('ProcessController@index');
    }

    public function upload(){
        $directory = config('app.fileDestinationPath');
        // $files = Storage::files($directory);
        $files = File::all();
        return view('files.upload')->with(array('files' => $files));
    }

    public function deleteFile($id){
        $file = File::find($id);
        Storage::delete(config('app.fileDestinationPath').'/'.$file->filename);
        $file->delete();
        $process_id = $file->process->id;
        return redirect()->to('/processes/'.$process_id);
    }
}
