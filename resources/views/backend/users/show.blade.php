@extends('backend.layouts.angel')

@section('content')

<div class="box box-solid">
	<div class="box-header with-border">
		<i class="fa fa-text-width"></i>

		<h3 class="box-title">Description User</h3>
	</div>
	
	<div class="box-body">
		<dl class="dl-horizontal">
			<dt>Username</dt>
				<dd>{{ $user->username }}</dd>
			<dt>Email</dt>
				<dd>{{ $user->email }}</dd>
			<dt>Role</dt>
				<dd>{{ $user->role->title }}</dd>
			<dt>Confirmed</dt>
				<dd>{!! $user->Confirmed? 'confirm':'not confirm' !!}</dd>
		</dl>
	</div>
</div>

@endsection

