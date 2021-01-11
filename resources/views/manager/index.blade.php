@extends('layout.main')

@section('title','Manager')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">
            <h1><i class="fas fa-user-tie mr-3"></i>Data manager</h1><hr class="bg-dark">
            <a href="{{ url('/manager/create')}}" class="btn btn-primary my-3">Tambah data</a>
            <ul class="list-group">
            @foreach ( $manager as $row)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $row->nama_manager}}
                    <h5><img width="160px" src="{{$row->foto_manager}}"></h5>
                    <a href="{{ url('/manager/show').'/'.$row->id_manager }}" class="btn btn-info">Detail</a>
                </li>
            @endforeach
            </ul>
            </div>
        </div>
    </div>     
   
@endsection