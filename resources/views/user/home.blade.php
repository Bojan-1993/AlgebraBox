@extends('layouts.index')

@section('title', 'AlgebraBox | The greatest cloud storage')

@section('content')
<div class="row">
  <ol class="breadcrumb">
    <li class="active">Home</li>
  </ol>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="list-group">
			<a href="#" class="list-group-item active">Folders &amp; Files </a>
			<a href="{{route('categories.index')}}" class="list-group-item">Categories</a>
			<a href="#" class="list-group-item">Shared</a>
	</div>
@stop
