@extends('app')

@section('title', 'Home')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<form method="POST" class="form-inline" role="form">
				<div style="display:table; margin: 0 auto;">
					<div class="form-group">
						<input type="text" placeholder="Tags" class="form-control" />
					</div>
					<button class="btn btn-primary" type="button">Search</button>
				</div>
			</form>
		</div>
	</div>
	@foreach($competitions->chunk(3) as $items)
	<div class="row">
		@foreach($items as $competition)
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					Zdr kp we
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@endsection
