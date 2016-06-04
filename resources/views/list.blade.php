@extends('app')

@section('title', Competitions)

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">View Profile</div>
				<div class="panel-body">
					<h1>{{ $user->name }}</h1>
					<p>E-mail: {{ $user->email }}</p>
					<p>Is a student: {{ $user->isStudent }}</p>
					<p>Grade: {{ $user->grade }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
