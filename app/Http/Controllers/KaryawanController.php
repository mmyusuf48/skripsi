<?php

namespace App\Http\Controllers;

use App\karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        
        $request->validate([
            'nama_karyawan' => 'required',
            'tmpt_tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_karyawan' => 'required',
            'no_tlp_karyawan' => 'required'
            ]);
            
            // if ($request->file('foto_karyawan')) {
                //     $gambar = $request->file('foto_karyawan')->store('gambar','public');
                // }else{
                    //     $gambar = null;
                    // }
                    
         $foto = $request->file('foto_karyawan');
         $file_name_foto = time().'.png';
         $path = base_path() . "/assets/karyawan/";

         $foto->move($path, $file_name_foto);
        
         DB::table('karyawan')->insert([
            'nama_karyawan' => $request->nama_karyawan,
            'tmpt_tgl_lahir' => $request->tmpt_tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_karyawan' => $request->alamat_karyawan,
            'no_tlp_karyawan' => $request->no_tlp_karyawan,
            'foto_karyawan' => 'assets/karyawan/' . $file_name_foto,
            'created_at' => date('Y-m-d H:i:s')
            // 'is_delete' => '0'
        ]);


        // karyawan::create($request->all());
        return redirect ('/karyawan')->with('status','data berhasil dibuat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = DB::table('karyawan')->where('id_karyawan', $id)->get()->first();
        // echo "<pre>";
        //     print_r($karyawan);die();
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('id_karyawan', $id)->get()->first();
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'tmpt_tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_karyawan' => 'required',
            'no_tlp_karyawan' => 'required'
        ]);

        // $foto = $request->file('foto_karyawan');
        // $file_name_foto = time().'.png';
        // $path = base_path() . "/assets/karyawan/";

        // $foto->move($path, $file_name_foto);
        
        if ($request->file('foto_karyawan')){
            $foto = $request->file('foto_karyawan')->submit('assets/karyawan');
            $data = User::findOfail($id);
            if ($data->foto){
                Submit::delete('asset/'. $data->foto);
                $data->foto = $foto;
            }else{
                $data->foto = $foto;
            }
            $data->save();
        }

        karyawan::where('id_karyawan', $id)
        ->update([
            'nama_karyawan' => $request->nama_karyawan,
            'tmpt_tgl_lahir' => $request->tmpt_tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_karyawan' => $request->alamat_karyawan,
            'no_tlp_karyawan' => $request->no_tlp_karyawan,
            'foto_karyawan' => $request->foto_karyawan
        ]);
        return redirect('/karyawan')->with('status','data berhasil di ubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(karyawan $karyawan)
    {
        karyawan::destroy($karyawan->id_karyawan);
        return redirect ('/karyawan')->with('status','data berhasil di Hapus !');
    }

    //public function submit(Request $request)
    //{
      //  $file = $request->file('foto_karyawan');
 
		//$nama_file = time()."_".$file->getClientOriginalName();

		//$tujuan_upload = 'public/gambar';
        //$file->move($tujuan_upload,$nama_file);

        //$file -> save();
        
        //return redirect ('/karyawan')->with('status','data berhasil dibuat !');
    //}
}
