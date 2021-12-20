@extends('layouts.app')

@section('title')
      WELCOME  DPSIC EMPLOYES App 
@endsection

@section('content')
     <div class="container">
         <div class="row my-5">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="carder-header bg-light">
                        <h3 class="p-2"> Welcome back </h3>
                        <div class="card-body">
                            @guest
                            <a href="{{url('/login')}}" class="btn btn-outline-primary">Login</a>
                            @endguest
                            @auth 
                                <a href="{{url('admin/home')}}" class="btn btn-outline-primary">
                                    Home
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
     @endsection 