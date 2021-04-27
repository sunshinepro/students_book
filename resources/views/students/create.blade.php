@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create new student</div>
               <div class="card-body">
                   <form action="{{ route('students.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Surname: </label>
                           <input type="text" name="surname" class="form-control">
                       </div>
                       <div class="form-group">
                            <label>Name: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone: </label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection