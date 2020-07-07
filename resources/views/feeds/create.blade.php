@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="card col-8">
			<div class="card-body">
				<form action="/f" method="POST" autocomplete="off">
					@csrf
					<div class="form-group">
						<label>Message</label>
						<textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="5" cols="3">	
						</textarea>
						<span class="invalid-feedback">
								@error('message')
								{{ $message }}
								@enderror
							</span>
					</div>
					<hr>
					<div class="row">
						<div class="col-4">
							<button class="btn btn-block btn-info"> Send feedback</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection