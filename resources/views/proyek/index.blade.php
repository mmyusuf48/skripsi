@extends('layout.main')

@section('title','Karyawan')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">

            <h1><i class="fas fa-tasks mr-3"></i>Data Proyek</h1><hr class="bg-dark">
            <a href="#" class="btn btn-primary my-3">Tambah data</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Proyek</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td ><h5 class="btn btn-info center">detail</h5></td>
                    </tr>
                    
                </tbody>
            </table>

            </div>
        </div>
    </div>     
   
   
@endsection