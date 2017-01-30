@extends('layouts.index')

@section('title', 'Categories | AlgebraBox')

@extends('includes.nav')

@section('content')

@include('user.categories.status')



<div class="row">

	<ol class="breadcrumb">
		<li><a href="{{route('home')}}">Home</a></li>
	<li class="active">Categories</li>
		
		
		<div id="user-search" class="pull-right">
			<form class="navbar-form" role="search">
				<div class="input-group add-on">
					<input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
						<div class="input-group-btn">
							<button class="btn btn-default search-btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
				</div>
			</form>
		</div>
	
	</ol>

</div>


<div id="categories" class="user-data row" >	
	<div class="col-md-3">
		<div class="list-group">
			<a href="{{route('home')}}" class="list-group-item">Folders &amp; Files </a>
			<a href="#" class="list-group-item active">Categories</a>
			<a href="#" class="list-group-item">Shared</a>
		</div>	
	</div>
	<div class="col-md-9">
		<div class="panel-default">
			<div class="clearfix">
				
				<div class="col-md-4 background-blue">
						<div class="status-info">
								<div class="dropdown">
									<button id="options-btn" class="font-2 btn background-blue dropdown-toggle" type="button" data-toggle="dropdown">Sort By
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Date</a></li>
										<li><a href="#">Size</a></li>
										<li><a href="#">Type</a></li>
									</ul>
								</div>
						</div>	
				</div>
			</div>

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
		  <a href="{{ route('categories.edit', $category->id) }}"><span class="label label-success">Edit</span></a>
		  </td>
		  <td>
			<form class="delete" action="{{ route('categories.destroy', $category->id) }}" method="POST">
				<input type="hidden" name="_method" value="DELETE">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				
				<button type="submit" class="btn btn-default"><span class="label label-danger">Delete</span></button>
			</form>
		   </td>
        
      </tr>
	  
	@endforeach
      
    </tbody>
  </table>
			<div>

				
				<div class="col-md-4 background-orange">
						<div class="status-info">
								<div class="dropdown">
									<button id="options-btn" class="font-2 btn background-orange dropdown-toggle" type="button" data-toggle="dropdown">Share
										<span class="caret"></span>
									</button>
								  <ul class="dropdown-menu">
									<li><a href="#">All</a></li>
									<li><a href="#">Folder</a></li>
									<li><a href="#">File</a></li>
								  </ul>
								</div>
						</div>	
				</div>
				  
				<div class="col-md-4 background-green">
						<div class="status-info">
								<div class="dropdown">
									<button id="options-btn" class="font-2 btn background-green dropdown-toggle" type="button" data-toggle="dropdown">Create
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li class="disabled"><a href="#">PRO / Folder</a></li>
										<li class="active"><a href="#">Upgrade Acc</a></li>
										<li class="divider"></li>
										<li><a title="Create new folder" href="{{route('categories.create')}}">
											<span class="pull-right glyphicon glyphicon-folder-close" aria-hidden="true"></span>
											<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
											Folder
										</a>
										</li>
									</ul>
								</div>
						</div>	
				</div>
				
				
				
				


				<div class="clearfix loop-names">
					<div class="col-md-4">
						<div class="status-info">
								<h5 class="blue">ID</h5>
						</div>	
					</div>
							
					<div class="col-md-4">
						<div class="status-info">
							<h5 class="orange">Category name</h5>
						</div>	
					</div>
							  
					<div class="col-md-4">
						<div class="status-info">
							<h5 class="green">Section</h5>
						</div>	
					</div>	
				</div>
				
				<div class="inner-loop">	
				
				@foreach($categories as $category)

						
					<div class="clearfix loop-inner">
					<div class="col-md-4">
						<div class="loop-categories">
							<p>{{ $category->id }}</p>
						</div>	
					</div>
							
					<div class="col-md-4">
						<div class="loop-categories">
							<p>{{ $category->name }}</p>
						</div>	
					</div>
							  
					<div class="col-md-4">
						<div class="loop-categories">
							<p class="btn-edit">
								<a class="btn background-blue" href="#" role="button">Edit</a>
								<a class="btn background-orange" href="#" role="button">Delete</a>
							 </p>
						</div>	
					</div>	
				</div>
				  
				  
				@endforeach
      

		</div>
	</div>
</div>


@stop
