@extends('layouts.angel')

@section('content')
	<div class="container">

		<div class="row">
			<div class="col-sm-9 col-md-9">

				<div class="col-sm-4 col-md-4">
   	            	<div class="thumbnail">
                		<img src="{{ asset('/images/a1-lg.png') }}" alt="...">
                    	<div class="caption">
                        	<h5 class="text-center"><strong>เลขชิลชิล วัยเกษียณ</strong></h5>
                        	<small>เลขชิลชิล วัยเกษียณ วัยเกษียณ ใช้ตัวเลขอะไรดี?? นอกจากเดือนกันยายนจะเป็นฤดูกาลโยกย้าย เลื่อนขั้น...</small>
                        	<p class="text-center">
                           		<a href="#" class="btn btn-default" role="button">อ่านต่อ</a>
                        	</p>
                    	</div>
                	</div>
            	</div>

				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
					<img src="{{ asset('/images/a2-lg.png') }}" alt="...">
						<div class="caption">
							<h5 class="text-center"><strong>ศาสตร์ตัวเลข เรื่องง่ายๆ รอบตัวคุณ</strong></h5>
							<small>วันนี้เรามาเรียนรู้เรื่องราวเกี่ยวกับตัวเลขที่อยู่รอบๆ ตัวเรา ซึ่งสามารถนำมาใช้ให้เกิด...</small>
							<p class="text-center">
								<a href="#" class="btn btn-default" role="button">อ่านต่อ</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
					<img src="{{ asset('/images/a3-lg.png') }}" alt="...">
						<div class="caption">
							<h5 class="text-center"><strong>34 43 “ปากสร้างศัตรู”</strong></h5>
							<small>จะทำให้คนหลงรัก คนมาชอบก็อยู่ที่ลมปากของเรานี้แหละ ในบทความนี้จะพามารู้จักตัวเลขที่...</small>
							<p class="text-center">
								<a href="#" class="btn btn-default" role="button">อ่านต่อ</a>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
					<img src="{{ asset('/images/a4-lg.png') }}" alt="...">
						<div class="caption">
							<h5 class="text-center"><strong>ตัวเลข “พาเลื่อนขั้น เลื่อนตำแหน่ง”</strong></h5>
							<small>จะเป็นไปได้หรือ? ที่ทุกคนจะได้เลื่อนตำแหน่งหรือขึ้นเงินเดือน ถ้าจำนวนบุคลากรมีมากกว่าตำแหน่ง และคุณสมบัติของ...</small>
							<p class="text-center">
								<a href="#" class="btn btn-default" role="button">อ่านต่อ</a>
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
					<img src="{{ asset('/images/a5-lg.jpg') }}" alt="...">
						<div class="caption">
							<h5 class="text-center"><strong>58 85 “ฉลาดแบบมีเล่ห์เหลี่ยม</strong></h5>
							<small>ความหมายคู่เลข 58 และ 85 เป็นตัวเลขที่ผู้เขียนหาคำนิยามที่เหมาะสมได้ยากมากจึงจะได้ความหมาย...</small>
							<p class="text-center">
								<a href="#" class="btn btn-default" role="button">อ่านต่อ</a>
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-4 col-md-4">
					<div class="thumbnail">
					<img src="{{ asset('/images/a6-md.png') }}" alt="...">
						<div class="caption">
							<h5 class="text-center"><strong>48 84 เลขนี้ไม่น่าคบ และมีปัญหา คดีความ</strong></h5>
							<small>ขึ้นมาแบบนี้ หลายท่านคงสงสัยทำไมเลขคู่นี้จึงถูกให้คำนิยามรุนแรงแบบ...</small>
							<p class="text-center">
								<a href="#" class="btn btn-default" role="button">อ่านต่อ</a>
							</p>
						</div>
					</div>
				</div>
	
			</div>

			<div class="col-sm-3 col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">บทความล่าสุด</h3>
					</div>
					<div class="panel-body">
						Panel content
					</div>
				</div>
			</div>

		</div>
		
	</div>
@endsection
