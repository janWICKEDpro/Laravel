@extends('layout.app')

@section('content')
        <h1>{{$title}}</h1>
        @if(count($hospitals) > 0)
        <ul class="list-group">
         @foreach($hospitals as $hospital)
         
         <li class="list-group-item">{{$hospital}}</li>
         @endforeach
    </ul>
        @endif
        
@endsection
