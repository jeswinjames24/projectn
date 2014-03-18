@extends('layouts.main')
@section('content')
   <h1>Hello, {{ Session::get('success') }}?></h1>
@stop
