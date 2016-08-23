<!-­‐-­‐  resources/views/home/index.blade.php	 -­‐-­‐>	  
@extends('layouts.master')	 
@section('title',	 '⾸首⾴頁')	  
@section('content')	   	 	   
<h1>Home	 Page</h1>	  
@foreach(range(1,	 5)	 as	 $number)	  
<h2>⽂文章	 -­‐	 {{	 $number	 }}</h2>	  
@endforeach	  
@stop