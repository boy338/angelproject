@extends('layouts.angel')

@section('content')
	<div class="container">
		<div class="row wrapper-contact">
			<div class="col-sm-4 col-md-8 col-md-offset-2">

				<form class="well form-horizontal" action=" " method="post"  id="contact_form">
					<fieldset>

						<!-- Form Name -->
						<legend><strong>ติดต่อ</strong></legend>

                        <!-- Success message -->
                        <div class="alert alert-success" role="alert" id="success_message">
                                Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-4 control-label">เรื่องที่ต้องการติดต่อ</label>
                            <div class="col-md-7 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="state" class="form-control selectpicker" >
                                        <option value=" " >สอบถาม</option>
                                        <option>ซื้อขาย</option>
                                        <option>นัดหมาย</option>
                                    </select>
                                </div>
                            </div>
                        </div>
				
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" >ชื่อ-นามสกุลจริง</label> 
							<div class="col-md-7 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input name="last_name" placeholder="ชื่อ-นามสกุลจริง" class="form-control"  type="text">
								</div>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label">อีเมล์ที่ติดต่อได้</label>  
							<div class="col-md-7 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input name="email" placeholder="อีเมล์ที่ติดต่อได้" class="form-control"  type="text">
								</div>
							</div>
						</div>


						<!-- Text input-->
							   
						<div class="form-group">
							<label class="col-md-4 control-label">หมายเลขโทรศัพท์ที่ติดต่อได้</label>  
							<div class="col-md-7 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input name="phone" placeholder="0xxxxxxxxx" class="form-control" type="text">
								</div>
							</div>
						</div>

						<!-- Text area -->
						<div class="form-group">
							<label class="col-md-4 control-label">ข้อความ</label>
							<div class="col-md-7 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
									<textarea class="form-control" name="comment" placeholder="" rows="8"></textarea>
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


<script>

</script>

@endsection
