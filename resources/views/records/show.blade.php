<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Laravel CRUD</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="/css/app.css" rel="stylesheet">		
	</head>
	<body>
		<div class="jumbotron text-center">
			<h1>List of records</h1>
		</div>
		<div  class="text-center" >
			<a href="/records/add" class="btn btn-primary">Add Record</a>
		</div>
		
		<div class="card-body col-md-10 "></div>
		
		<div class="container mt-12">
			@foreach($records as $record)
				<div class="card">
					<div class="row " >
						<div class="card-body col-md-10">
							
							<h4 class="card-title">{{ $record->title }}</h4>
							<p class="card-text">{{ $record->content }}</p>
							
						</div>
						<div class="col-md-1 mt-4 ">
							<form action="/records/{{ $record->id }}/edit">	
								<button class="btn btn-sm">
									<span class="text-info"><i class="fa fa-pencil fa-2x card-link"></i></span>
								</button>
							</form>	
						</div>
						<div class="col-md-1  mt-4 ">		
							<form method="POST" action="/records/{{ $record->id }}">
								@csrf
								@method('DELETE')
								<button class="btn btn-sm" title="DELETE">
									<span class="text-danger"><i class="fa fa-times fa-2x card-link text-danger"></i></span>
								</button>
							</form>	
						</div>
					</div>

				</div>
			@endforeach
		</div>
	</body>
</html>
