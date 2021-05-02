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
			<h1>Update</h1>
		</div>
		<div class="container mt-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-body">
							<form method="POST" action="/records/{{ $record->id }}">
								@method('PUT')
								@csrf
								<div class="form-group">
									<label for="title">Title:</label>
									<input type="text" class="form-control" id="title" name="title" value="{{ $record->title }}" >
								</div>
								<div class="form-group">
									<label for="body">Content:</label>
									<input type="text" class="form-control" id="content" name="content" value="{{$record->content }}">
								</div>
								<button type="submit" class="btn btn-primary">Update</button>
								<a href="/records"  class="btn btn-primary">Cancel</a>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</body>
</html>


	