@extends('app')

@section('title', 'Error')

@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Something weird happened</div>
				<div class="panel-body">
					{{ $exception }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
