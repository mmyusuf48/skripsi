@extends('layout.main')

@section('title','Karyawan')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">
            <h1 class="mt-3"><i class="fas fa-users mr-3"></i>Tambah data Karyawan</h1><hr class="bg-dark">
                 <form method="post" action="{{ url('/karyawan/add')}}" enctype="multipart/form-data">
                 @csrf
                    <div class="form-group">
                        <label for="nama_karyawan">nama</label>
                        <input type="text" class="form-control @error ('nama_karyawan') is-invalid @enderror" 
                        id="nama_karyawan" placeholder="Masukan nama " name="nama_karyawan" value="{{old('nama_karyawan')}}">
                    @error('nama_karyawan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="tmpt_tgl_lahir">tanggal lahir</label>
                        <input type="date" class="form-control @error ('tmpt_tgl_lahir') is-invalid @enderror" 
                        id="tmpt_tgl_lahir" placeholder="Masukan tempat/tanggal lahir " name="tmpt_tgl_lahir"
                        value="{{old('tmpt_tgl_lahir')}}">
                    @error('tmpt_tgl_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">jenis kelamin</label>
                        <input type="text" class="form-control @error ('jenis_kelamin') is-invalid @enderror" 
                        id="jenis_kelamin" placeholder="Masukan jenis kelamin " name="jenis_kelamin"
                        value="{{old('jenis_kelamin')}}">
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_karyawan">alamat</label>
                        <input type="text" class="form-control @error ('alamat_karyawan') is-invalid @enderror" 
                        id="alamat_karyawan" placeholder="Masukan alamat " name="alamat_karyawan"
                        value="{{old('alamat_karyawan')}}">
                    @error('alamat_karyawan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_tlp_karyawan">nomer telpon</label>
                        <input type="text" class="form-control @error ('no_tlp_karyawan') is-invalid @enderror" 
                        id="no_tlp_karyawan" placeholder="Masukan nomer telpon " name="no_tlp_karyawan"
                        value="{{old('no_tlp_karyawan')}}">
                    @error('no_tlp_karyawan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group ">
                        <label for="foto_karyawan">foto</label>
                        <input type="file" class="form-control @error ('foto_karyawan') is-invalid @enderror" 
                        id="foto_karyawan" placeholder="Masukan foto " name="foto_karyawan"
                        value="{{old('foto_karyawan')}}">
                    @error('foto_karyawan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <button type="sumbit" class="btn btn-primary my-3"><i class="far fa-save mr-1"></i>Save</button>
                </form>
            </div>
        </div>
    </div>     
   
@endsection