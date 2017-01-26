@extends('layouts.index')

@section('title', 'Categories | AlgebraBox')

@section('content')

@include('user.categories.status')

<div class="row">
  <ol class="breadcrumb">
  </ol>
</div>

<div class="categories" class="row">	
	<div class="col-md-3">
		<div class="list-group">
			<a href="{{route('home')}}" class="list-group-item">Folders &amp; Files </a>
	</div>
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h3 class="pull-left panel-title">Categories</h3>
				<div class="pull-right">
				<a href="{{route('categories.create')}}">
					<span class="pull-right glyphicon glyphicon-tag" aria-hidden="true"></span>
					<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
				</div>
			</div>
<<<<<<< HEAD
			<div class="panel-body">	
=======

			<div class="panel-body">
				<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category name</th>
        <th>Section</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
		
		
	@foreach($categories as $category)

			
			
      <tr>
        <td>{{ $category->id }}</td>
		 <td>{{ $category->name }}</td>
		  <td>{{ $category->sections->name }}</td>
		  <td>
		  <span class="label label-success">Edit</span>
		  <span class="label label-danger">Delete</span> 
		  </td>
		  
        <td>
		</td>
        <td></td>
      </tr>
	  
	@endforeach
      
    </tbody>
  </table>
			<div>
				
			</div>
>>>>>>> c9908752499ed7431b9e3d84009ef9bcd9508bcf
		</div>
	</div>
</div>


@stop
