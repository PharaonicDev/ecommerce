@extends('layout.master')

@section('title', 'category page')
    
@section('content')
    <h1>@section('title', 'category page' + {{$id}})  </h1>
   
@stop