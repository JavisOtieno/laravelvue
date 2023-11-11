@extends('layout')
@section('content')
 @foreach ($clothes as $clothe)
<h1>{{$clothe['name']}}</h1>
@endforeach 
@endsection