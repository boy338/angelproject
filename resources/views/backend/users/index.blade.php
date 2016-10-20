@extends('backend.layouts.angel')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			@if(session()->has('success'))
                <!-- Success message -->
	            @include('partials/alert', ['type' => 'success', 'message' => session('success')])
            @endif
	
			<div class="box-header">

				<div id="tri" class="btn-group btn-group-sm">
					<a href="{{ url('user/sort') }}" role="button" class="btn btn-default ">All 
						<span class="badge">{{  $counts['total'] }}</span>
					</a>
			        @foreach ($roles as $role)
		            <a href="{!! url('user/sort/' . $role->slug) !!}" 
					   role="button" 
					   class="btn btn-default">
						{{ $role->title . 's' }}
        		        <span class="badge">{{ $counts[$role->slug] }}</span>
            		</a>
        			@endforeach

				</div>

				<div class="box-tools">
					<a href="{{ url('/user/create') }}" class="btn btn-info">
						<i class="fa fa-user-plus" aria-hidden="true"></i>	
						Add user
					</a>
<!--	
					<div class="input-group input-group-sm" style="width: 150px;">
						<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

						<div class="input-group-btn">
							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</div>
					</div>
-->
				</div>

			</div>
			
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
		            <thead>
        		        <tr>
                		    <th>name</th>
                    		<th>role</th>
		                    <th>seen</th>
        		            <th></th>
                		    <th></th>
		                    <th></th>
        		        </tr>
		            </thead>
        		    <tbody>
                		@include('backend.users.table')
            		</tbody>
				</table>
			</div>

			<div class="pull-right link">{!! $users->links() !!}</div>
			
		</div>
	</div>
</div>
<meta name="_token" content="{!! csrf_token() !!}" />
@endsection

@section('script')
<script>
	$(function() {
		$(document).on('change', ':checkbox', function(){
			$(this).parents('tr').toggleClass('warning');
			$(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
			$.ajaxSetup({
            	headers: {
                	'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            	}
        	});
			$.ajax({
				url: '{!! url('userseen') !!}' + '/' + this.value,
				type: 'PUT',
				data: "seen=" + this.checked
			})
			.done(function() {
				$('.fa-spin').remove();
				$('input[type="checkbox"]:hidden').show();
			})
			.fail(function() {
				$('.fa-spin').remove();
				var chk = $('input[type="checkbox"]:hidden');
				chk.show().prop('checked', chk.is(':checked') ? null:'checked').parents('tr').toggleClass('warning');
                alert('Update seen false');
			});
		});
	});
</script>
@endsection


