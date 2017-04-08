@extends('layouts.master')

@section('title')
    <title>Tes Page</title>

<h1>This my page</h1>

@if(count(  $Variabel) > 3)
    @foreach($Variabel as $Var)
        {{$Var}} <br>

        @endforeach
    @else
<h1>Sorry, nothing show</h1>
    @endif

    @endsection