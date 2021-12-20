@extends('adminlte::page')

@section('title')
      List of employes  DPSIC EMPLOYES App 
@endsection

@section('content_header')
  <h1>List of employes</h1>
@endsection

@section('content')
     <div class="container">
         <div class="row my-5">
            <div class="col-md-10 mx-auto">
                <div class="card My-3">
                    <div class="card-header">
                        <div class="text-center test-uppercase">
                            Employes
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-borded table-stripped">
                        <thead>
                            <tr>
                                <th >#</th>
                                <th >Fullname</th>
                                <th >Departement</th>
                                <th >hired</th>
                                <th >ffffff</th>

                            </tr>
                        </thead>
                    </table>
                </div>
           
            </div>
         </div>
     </div>
     @endsection 