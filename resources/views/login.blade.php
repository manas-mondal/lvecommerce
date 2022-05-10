@extends('master')
@section('content')

<div class="container custom-login">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<form action="/login" method="post">
            @csrf
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control" id="email">
             </div>
             <div class="form-group">
                <label for="pwd">Password:</label>
               <input type="password" name="password" class="form-control" id="pwd">
            </div>
            
               <button type="submit" class="btn btn-default">Login</button>
          </form>
		</div>
	</div>
</div>
@endsection