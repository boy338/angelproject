@extends('backend.layouts.angel')

@section('style')
<!-- select2 -->
<link rel="stylesheet" href="{{ asset('/backend/plugins/select2/select2.min.css') }}">
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title">CK Editor
					<small>Advanced and full of features</small>
				</h3>

				<form class="form-horizontal" action="" method="post" >
					<div class="box-body">
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-1 control-label" >Title</label>
							<div class="col-md-6 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
									<input name="username" placeholder="" class="form-control" value="" type="text">
								</div>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-1 control-label" >Permalink </label>
							<div class="col-md-6 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-link"></i> {!! url('/blog/') !!}/</span>
									<input name="email" placeholder="" class="form-control" value="" type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-1 control-label" >Category</label>
							<div class="col-md-6">
								<div class="input-group" style="width: 100%;">
									<select class="form-control select2" multiple="multiple" data-placeholder="Select a State">
										<option>Alabama</option>
										<option>Alaska</option>
										<option>California</option>
										<option>Delaware</option>
										<option>Tennessee</option>
										<option>Texas</option>
										<option>Washington</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-1 control-label" >Tags</label>
							<div class="col-md-6 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-tags"></i></span>
									<input name="username" placeholder="" class="form-control" value="" type="text">
								</div>
								<small class="help-block">Explode multi tag width , </small>
							</div>
						</div>

        			    <div class="form-group">
							<label class="col-md-1 control-label" >Option </label>
           				    <div class="col-sm-6">
			                	<div class="checkbox">
            			            <label>
			                            <input type="checkbox" name="published" value="" {{ $user->published or old('published') ? 'checked':'' }} > Published
            			            </label>
 			                	</div>
								<div>
                                </div>
            			    </div>
			            </div>
												
						<div class="form-group">
							<label>Summary</label>
							<textarea id="editor1" name="editor1" rows="10" cols="80">
								This is my textarea to be replaced with CKEditor.
							</textarea>
						</div>		
	
					</div>
				</form>

			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<!-- FastClick -->
<script src="{{ asset('/backend/plugins/ckeditor2/ckeditor.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('/backend/plugins/select2/select2.full.min.js') }}"></script>
<script>
	$(function () {
		$(".select2").select2();
        var config = {
            language: '{{ config('app.locale') }}',
            height: 100,
            //filebrowserBrowseUrl: '/elfinder/ckeditor',
            toolbarGroups: [
                {name: 'clipboard', groups: ['clipboard', 'undo']},
                {name: 'editing', groups: ['find', 'selection', 'spellchecker']},
                {name: 'links'},
                {name: 'insert'},
                {name: 'forms'},
                {name: 'tools'},
                {name: 'document', groups: ['mode', 'document', 'doctools']},
                {name: 'others'},
                //'/',
                {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi']},
                {name: 'styles'},
                {name: 'colors'}
            ]
        };
		config.colorButton_enableAutomatic = false;
		CKEDITOR.replace('editor1', config);
	});
</script>
@endsection