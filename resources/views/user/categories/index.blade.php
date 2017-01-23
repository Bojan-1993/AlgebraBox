@extends('layouts.index')

@section('title', 'Categories | AlgebraBox')

@section('content')
<div class="row">
  <ol class="breadcrumb">
<<<<<<< HEAD
	<li><a href="{{route('home')}}">Home</a></li>
    <li class="active">Categories</li>
=======
    <li><a href="{{route('home')}}">Home</a></li>
	<li class="active">Categories</li>
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
  </ol>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="list-group">
			<a href="{{route('home')}}" class="list-group-item">Folders &amp; Files </a>
<<<<<<< HEAD
			<a href="#" class="list-group-item">Categories</a>
			<a href="#" class="list-group-item">Shared</a>
		</div>
=======
			<a href="#" class="list-group-item active">Categories</a>
			<a href="#" class="list-group-item">Shared</a>
		</div>	
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
	</div>
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h3 class="pull-left panel-title">Categories</h3>
				<div class="pull-right">
<<<<<<< HEAD
				<a href="{{route('categories.create')}}">
					<span class="pull-right glyphicon glyphicon-tag" aria-hidden="true"></span>
					<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
=======
					<a href="{{route('categories.create')}}">
						<span class="pull-right glyphicon glyphicon-tag" aria-hidden="true"></span>
						<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
					</a>
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
				</div>
			</div>
			<div class="panel-body">
				
<<<<<<< HEAD
		   </div>
=======
			</div>
>>>>>>> 69a0515a584a7c3776696f7a01a0d672b419637c
		</div>
	</div>
</div>
@stop
