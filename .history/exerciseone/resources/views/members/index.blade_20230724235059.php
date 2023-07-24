@extends('layouts/index')
@section('title','Child Page')


{{$header}}

@section('home','Home')

@section('aboutcontent')
 
  <p>
    @foreach($students as $std)
        <li> {{$std}} </li>

    @endforeach
  </p>
  <p>He is really hard working.</p>
  <p>He want to be  a best profectional programmer.</p>

@endsection


@section('footer')

Thanks for using our platform 

@endsection




