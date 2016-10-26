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

				<form class="form-horizontal" action="{{ url('blog') }}" method="post" >
					{{ csrf_field() }}

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


					<div class="box-body">
						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-1 control-label" >Title</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
									<input name="title" placeholder="" class="form-control"  id="title" value="{{ old('title') }}" type="text">
								</div>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-1 control-label" >Permalink </label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-link"></i> {!! url('/blog/') !!}/</span>
									<input name="slug" placeholder="" class="form-control" id="permalink" value="{{ old('slug') }}" type="text">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-1 control-label" >Tags</label>
							<div class="col-md-6 inputGroupContainer">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-tags"></i></span>
									<input name="tags" placeholder="" class="form-control" value="{{ old('tags') }}" type="text">
								</div>
								<small class="help-block">Explode multi tag width , </small>
							</div>
						</div>	

						<div class="form-group">
                            <label class="col-md-1 control-label" >Categories</label>
                            <div class="col-md-6">

								<div class="box box-default box-solid">
									<div class="box-header with-border">
										<div class="form-inline">
											<h3 class="box-title">Category List</h3>
											<input class="form-control input-sm" type="text" id="category-new" value="" placeholder="new category">
											<button type="button" class="btn btn-primary btn-xs" id="new_category">
                                            	<i class="fa fa-plus-circle" aria-hidden="true"></i>
                                            	new
                                        	</button>

										</div>
											
										<div class="box-tools pull-right">
											<button type="button" class="btn btn-box-tool" data-widget="collapse">
												<i class="fa fa-minus"></i>
											</button>
										</div>
									</div>
									<div class="box-body" id="category-list">
										@foreach($categories as $category)
										<div class="col-md-4">
											<label class="checkbox-inline">
												<input type="checkbox" name="category[]" value="{{ $category->id }}">
												{{ $category->category }}
											</label>
										</div>
										@endforeach
									</div>
								</div>

                            </div>
                        </div>

{{--
						<div class="form-group">
							<label class="col-md-1 control-label" >Category</label>
							<div class="col-md-6">
								<div class="input-group" style="width: 100%;">
									<select class="form-control select2" multiple="multiple" data-placeholder="Select a State" name="categorys[]">
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
--}}


        			    <div class="form-group">
							<label class="col-md-1 control-label" >Option </label>
           				    <div class="col-sm-6">
			                	<div class="checkbox">
            			            <label>
			                            <input type="checkbox" name="active" {{ $user->published or old('published') ? 'checked':'' }} > Published
            			            </label>
 			                	</div>
								<div>
                                </div>
            			    </div>
			            </div>
												
						<div class="form-group">
							<label>Summary</label>
							<textarea id="summary" name="summary" rows="10" cols="80">
								Summary
							</textarea>
						</div>		
	
						<div class="form-group">
							<label>Content</label>
							<textarea id="content" name="content" rows="10" cols="80">
								Content
							</textarea>
						</div>	
	
						<div class="form-group">
                    		<button type="submit" class="btn btn-success" >
                		        <i class="fa fa-plus" aria-hidden="true"></i>
        		                Add
		                    </button>

						</div>	

					</div>
				</form>

			</div>
		</div>
	</div>
</div>
<meta name="_token" content="{!! csrf_token() !!}" />
@endsection

@section('script')
<!-- FastClick -->
<script src="{{ asset('/backend/plugins/ckeditor5/ckeditor.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('/backend/plugins/select2/select2.full.min.js') }}"></script>
<script>
	$(function () {
		$(".select2").select2();
        var config = {
            language: '{{ config('app.locale') }}',
            height: 100,
            filebrowserBrowseUrl: '{{ url('elfinder/ckeditor') }}',
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
            ],
        };
		CKEDITOR.replace('summary', config);
		config['height'] = 400;
		CKEDITOR.replace('content', config);

        function removeAccents(str) {
            var accent = [
                /[\300-\306]/g, /[\340-\346]/g, // A, a
                /[\310-\313]/g, /[\350-\353]/g, // E, e
                /[\314-\317]/g, /[\354-\357]/g, // I, i
                /[\322-\330]/g, /[\362-\370]/g, // O, o
                /[\331-\334]/g, /[\371-\374]/g, // U, u
                /[\321]/g, /[\361]/g, // N, n
                /[\307]/g, /[\347]/g // C, c
            ];
            var noaccent = ['A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n', 'C', 'c'];
            for (var i = 0; i < accent.length; ++i) {
                str = str.replace(accent[i], noaccent[i]);
            }
            return str;
        }

        $("#title").keyup(function () {
            var str = removeAccents($(this).val())
                .replace(/[^a-zA-Z0-9ก-ฮ\s]/g, "")
                .toLowerCase()
                .replace(/\s/g, '-');
            $("#permalink").val(str);
        });

		$('#new_category').click(function(){
			var category = $('#category-new').val();
			if(category.trim().length <= 0){
				$('#category-new').val('');
				return false;
			}
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
			$.ajax({
                url: '{!! url('categorynew') !!}',
                type: 'POST',
				dataType: "JSON",
                data: {
					'category': $('#category-new').val(),
					'_token': '{!! csrf_token() !!}'
				},
				success: function(data){
					alert(JSON.stringify(data));
					var tag = '<div class="col-md-4">'
							  +'<label class="checkbox-inline">'
							  +'<input type="checkbox" name="category[]" value="'+ data.id +'">'
							  + data.category
							  +'</label>'
							  +'</div>';
					$('#category-list').append(tag);
					$('#category-new').val('');
				},
				error: function(xhr, status, error) {
					$('#category-new').val('');
  					var err = eval("(" + xhr.responseText + ")");
  					alert(err.Message);
				}
            })
		});

	});
</script>
@endsection
