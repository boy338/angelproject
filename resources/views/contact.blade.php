@extends('layouts.angel')

@section('content')
	<div class="container">
		<div class="row wrapper-contact">
			<div class="col-sm-4 col-md-8 col-md-offset-2">

				<form class="well form-horizontal" action="{{ url('/contact') }}" method="post"  id="contact_form">
					{{ csrf_field() }}
					<fieldset>

						<!-- Form Name -->
						<legend><strong>ติดต่อ</strong></legend>

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


                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">เรื่องที่ต้องการติดต่อ</label>
                            <div class="col-md-7 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="title" class="form-control selectpicker" >
                                        <option value="question" selected>สอบถาม</option>
                                        <option value="message">วิเคราะห์เบอร์</option>
                                        <option value="appoint">นัดหมาย</option>
                                    </select>
                                </div>
                            </div>
                        </div>
				
						<!-- Text input-->
						<div class="form-group @if ($errors->has('name')) has-error @endif">
							<label class="col-md-4 control-label" >ชื่อ-นามสกุลจริง</label> 
							<div class="col-md-7 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input name="name" placeholder="ชื่อ-นามสกุลจริง" class="form-control" value="{{ old('name') }}" type="text">
								</div>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group @if ($errors->has('email')) has-error @endif">
							<label class="col-md-4 control-label">อีเมล์ที่ติดต่อได้</label>  
							<div class="col-md-7 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input name="email" placeholder="อีเมล์ที่ติดต่อได้" class="form-control" value="{{ old('email') }}" type="text">
								</div>
							</div>
						</div>


						<!-- Text input-->
							   
						<div class="form-group @if ($errors->has('tel')) has-error @endif">
							<label class="col-md-4 control-label">หมายเลขโทรศัพท์ที่ติดต่อได้</label>  
							<div class="col-md-7 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input name="tel" placeholder="0xxxxxxxxx" class="form-control" value="{{ old('tel') }}" type="text">
								</div>
							</div>
						</div>

						<!-- Text area -->
						<div class="form-group @if ($errors->has('message')) has-error @endif">
							<label class="col-md-4 control-label">ข้อความ</label>
							<div class="col-md-7 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
									<textarea class="form-control" name="message" placeholder="" rows="8">{{ old('message') }}</textarea>
								</div>
							</div>
						</div>

						<!-- Button -->
						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col-md-4">
								<button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
							</div>
						</div>

					</fieldset>
				</form>
			</div>
		</div>
	</div>

	@section('script')
	<script>
        $(function () {
		});
	</script>
	@endsection

@endsection

