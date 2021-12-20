@extends('layouts.app')

@section('title')
      HOME  DPSIC EMPLOYES App 
@endsection

@section('content')
     <div class="container">
         <div class="row my-5">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="carder-header bg-light">
                        <h3 class="p-2"> HOME </h3>
</div>
                        <div class="card-body"> 
                            <form method="post" action="{{route('logout')}}">
                                @csrf
                                <button type="submit">
                                    Logout
                                </button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
         </div>
     </div>
     @endsection 