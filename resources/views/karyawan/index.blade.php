@extends('layout.main')

@section('title','Karyawan')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">
            <h1><i class="fas fa-users mr-3"></i>Data karyawan</h1><hr class="bg-dark">
            <a href="{{ url('/karyawan/create')}}" class="btn btn-primary my-3"><i class="fas fa-plus-square mr-3"></i>Tambah data</a>
            <ul class="list-group" >
            @foreach ( $karyawan as $row)
                <li class="list-group-item d-flex justify-content-between align-items-center" >
                    
                    <div class="polaroid">
                    <img width="160px" src="{{$row->foto_karyawan}}" style="border-radius: 8px;">
                    <div class="container">
                        {{ $row->nama_karyawan}}
                    </div>
                    </div>
                    <!-- <h5><img width="160px" src="{{$row->foto_karyawan}}"></h5>
                    {{ $row->nama_karyawan}} -->
                    <a href="{{ url('/karyawan/show').'/'.$row->id_karyawan }}" class="btn btn-info">
                    <i class="fas fa-info mr-2"></i>Detail</a>
                </li>
            @endforeach
            </ul>
            </div>
        </div>
    </div>     
   
@endsection