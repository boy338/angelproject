@extends('backend.layouts.angel')

@section('content')
<div class="box box-info">
	
	<form class="form-horizontal" action="{{ route('user.update', ['user' => $user->id]) }}" method="post" >
		<div class="box-body">
		{{ csrf_field() }}
		{{ method_field('PUT') }}

			@if (count($errors) > 0)
			<!-- False message -->
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
			@endif

			@if(session()->has('success'))
			<!-- Success message -->
				@include('partials/alert', ['type' => 'success', 'message' => session('success')])
			@endif


			<!-- Text input-->
			<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
				<label class="col-md-3 control-label" >{{ trans('auth/login.username') }}</label>
				<div class="col-md-5 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input name="username" placeholder="" class="form-control" value="{{ $user->username or old('username') }}" type="text">
					</div>
				</div>
			</div>

			<!-- Text input-->
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label class="col-md-3 control-label" >{{ trans('auth/login.email') }}</label>
				<div class="col-md-5 inputGroupContainer">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						<input name="email" placeholder="" class="form-control" value="{{ $user->email or old('email') }}" type="email">
					</div>
				</div>
			</div>

			<!-- Select input-->
			<div class="form-group">
				<label class="col-md-3 control-label" >Role</label>
				<div class="col-md-5">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-university"></i></span>
						<select class="form-control" name="role">
						@foreach($roles as $role)
							<option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected':'' }} > 
								{{ $role->title }}
							</option>
						@endforeach
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-offset-3 col-sm-5">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="confirmed" value="" {{ $user->confirmed or old('confirmed') ? 'checked':'' }} > Confirmed
						</label>
					</div>
				</div>
			</div>
			
			<!-- Button -->
			<div class="form-group">
				<label class="col-md-3 control-label"></label>
				<div class="col-md-5">
					<button type="submit" class="btn btn-success" >
						<i class="fa fa-user-plus" aria-hidden="true"></i>
						update
					</button>
				</div>
			</div>
			
		</div>

	</form>
</div>

@endsection

@section('script')
<script>

</script>
@endsection
