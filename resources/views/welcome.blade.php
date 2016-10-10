@extends('layouts.angel')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-6 col-sm-12">
				<img src="{{ asset('images/BG-01v5-md.png') }}" class="img-responsive" alt="Responsive image">
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="{{ asset('images/banner-lg.png') }}" alt="branner">
							<!--
							<div class="carousel-caption">
								detail
							</div>
							-->
						</div>
						<div class="item">
							<img src="{{ asset('images/banner-lg.png') }}" alt="branner">
						</div>
						<div class="item">
							<img src="{{ asset('images/banner-lg.png') }}" alt="branner">
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>	
			</div>
		</div>
	</div>
@endsection
