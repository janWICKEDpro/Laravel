@extends('layout.app')
                       //include begin html form the layout.app folder
@section('content')
@include('inc.css')//includes css form the /inc/css folder
<div class="loginbox">
	<img src="LoginIcon.png" class="avatar">
		<h1 style="">Login Here</h1>
		<form>
			<p style="">Username</p>
			<input type="text" name="" placeholder="Enter Username"> 
			<p style="">Password</p>
			<input type="password" name="" placeholder="Enter Password"></input>
			<input type="submit" name="" value="login">
			<p><a style="" href="#">Forgot your password? </a>	<a class="btn btn-primary" style="margin-left: 10px;" href="#"> Create account</a> </p>
		
			
		</form>
</div>

@endsection
