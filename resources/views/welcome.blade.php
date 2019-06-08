@extends('layout')

@section('title','Maulik Chaudhary')

@section('main-heading')
         Hello World, I'm {{$foo}}
@endsection

@section('playground')
<ul>
    @foreach ($tasks as $tasks) 
       <li> {{$tasks}} </li>
    @endforeach
</ul>
@endsection