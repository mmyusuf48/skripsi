@extends('layout.main')

@section('title','Karyawan')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="mt-3"><i class="fas fa-users mr-3"></i>detail karyawan</h1><hr class="bg-dark">
                 <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $karyawan->id_karyawan }}</h5>
                        <h5 class="card-title">{{ $karyawan->nama_karyawan }}</h5>
                        <h5 class="card-title">{{ $karyawan->tmpt_tgl_lahir }}</h5>
                        <h5 class="card-title">{{ $karyawan->jenis_kelamin }}</h5>
                        <h5 class="card-title">{{ $karyawan->alamat_karyawan }}</h5>
                        <h5 class="card-title">{{ $karyawan->no_tlp_karyawan }}</h5>
                        <h5 class="card-title"><img width="160px" src="{{ url('').'/'.$karyawan->foto_karyawan }}">
                        </h5>

                        <a href="{{ url('/karyawan/edit').'/'.$karyawan->id_karyawan}}" class=" btn btn-success mr-3">
                        <i class="fas fa-user-edit mr-2"></i>Edit</a>

                        <form action="{{ $karyawan->id_karyawan}}" method="post" class="d-inline">
                        @method ('delete')
                        @csrf
                            <button type="submit" class=" btn btn-danger mr-3"><i class="fas fa-user-minus mr-2"></i>Hapus</button>
                        </form?>
                        <a href="{{url('/karyawan')}}" class="card-link btn btn-info">
                        <i class="far fa-arrow-alt-circle-left mr-2"></i>back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>     
   
   
@endsection