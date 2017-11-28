@extends('layouts.main')
@section('content')
  
  <div class="con">
   <div class="row">
   <div class="col-md-7 col-md-offset-3">
   <div class="se">
   <h1 style="text-align: center;color:forestgreen;">Search The User</h1>
	  <form action="{{route('users.serch') }}" method="POST">
	   
     {{ csrf_field() }} 
		   <div class="form-group">     
			    <label for="name" style="font-size: 15px;">User Name:</label>
			    <input type="text" class="form-control" id="name">
		  </div>
		  <button type="submit" class="btn btn-primary">Search User</button>
	</form>
	<div class="user">
        @include('users.users')
     </div>
   </div>
   </div>
  </div>

    
  </div>
  
  
  
@endsection