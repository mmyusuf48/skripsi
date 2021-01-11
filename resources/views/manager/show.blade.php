@extends('layout.main')

@section('title','Manager')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col ">
            <h1 class="mt-3"><i class="fas fa-user-tie mr-3"></i>Detail Manager</h1><hr class="bg-dark">
                 <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">{{ $manager -> id_manager}}</h5>
                        <h5 class="card-title">{{ $manager -> nama_manager }}</h5>
                        <h5 class="card-title">{{ $manager -> username }}</h5>
                        <h5 class="card-title">{{ $manager -> password }}</h5>
                        <h5 class="card-title">{{ $manager -> alamat_manager }}</h5>
                        <h5 class="card-title">{{ $manager -> no_tlp_manager }}</h5>
                        <h5 class="card-title">{{ $manager -> email_manager }}</h5>
                        <h5 class="card-title"><img width="160px" src="{{ url('').'/'.$manager->foto_manager }}">
                        </h5>

                        <a href="{{ url('/manager/edit').'/'.$manager->id_manager}}" class=" btn btn-success mr-3">Edit</a>

                        <form action="{{ $manager -> id_manager}}" method="post" class="d-inline">
                        @method ('delete')
                        @csrf
                            <button type="submit" class=" btn btn-danger mr-3">Hapus</button>
                        </form?>
                        <a href="{{url('/manager')}}" class="card-link">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>     
   
   
@endsection