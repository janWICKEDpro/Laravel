@extends('layout.app')

@section('content')
<div class="jumbotron text-center">

<h1> <?php echo $title; ?></h1>
<p><a href="/Login" class="btn btn-info">Login </a> <a href="" class="btn btn-primary"> Explore </a> <a class="btn btn-primary" href="/createAccount"> Sign Up</a></p>


@endsection
