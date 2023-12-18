<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class formpendaftaranController extends Controller
{
    public function index(Request $request){
        return view('component.formpendaftaran');
    }

    public function store(Request $request){
    $validator = Validator::make($request->all(), [
        'nama' => 'required',
        'email' => 'required|email',
        'nohp' => 'required',
        'semester' => 'required',
        'ipk' => 'required',
        'jenis_beasiswa' => $request->ipk >= 3 ? 'required' : '',
        'upload_file' => 'required|file|mimes:pdf,doc,docx',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $data = [
        'nama' => $request->nama,
        'email' => $request->email,
        'nohp' => $request->nohp,
        'semester' => $request->semester,
        'ipk' => $request->ipk,
        'jenis_beasiswa' => $request->jenis_beasiswa,
        'status_ajuan' => 'belum di verifikasi',
    ];

    if ($request->hasFile('upload_file')) {
        $file = $request->file('upload_file');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('uploads', $filename);
        $data['upload_file'] = $path;
    }

    // Assuming 'Student' model represents your database table for students
    Student::create($data);

    return redirect()->route('hasil');
}

    public function create(){

    }
}


