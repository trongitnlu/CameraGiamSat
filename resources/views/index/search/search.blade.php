@extends('layouts.subClient')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 pad-btm">
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<div class="article_header my-breadcrumb">
						<ol class="breadcrumb">
							<li><a href="./">Trang chủ</a></li>
						</ol>
					</div>
					<div class="clear"></div>
					<div class="description2">
					</div>
					<div class="product_list">
						<div class="row">
							@foreach ($product as $e)
							{{-- expr --}}
							<div class="col-xs-6 col-sm-4 col-lg-3">
								<div class="thumbnail products">
									<a href="{{url('/detail-product/'.$e->id)}}"><img alt="may-chieu-sony-VPL-DX-122" src="{{asset('public/images/san-pham/'.$e->img)}}"></a>
									<div class="caption">
										<a href="{{url('/detail-product/'.$e->id)}}">
											<h3>{{$e->name}}</h3>
										</a>
										<div class="clear"></div>
										<span class="new-price">{{number_format($e->price)}} đ</span>
										<span class="old-price">{{number_format($e->price*1.1)}} đ</span>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="clear"></div>
					<div class="pagination">
						{!!$product->render()!!}
					</div>
				</div>
				<div class="col-md-3 hidden-xs hidden-sm">
					<div class="header" style="margin-top:0;">
						<span>Sản phẩm bán chạy</span>
					</div>
					<div class="media products">
						<div class="media-left">
							<a href="#">
								<img class="media-object" alt="Camera IP Wifi Không Dây VANTECH VT-6300A" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/camera-ip-wifi-khong-day-vantech-vt-6300A.jpg">
							</a>
						</div>
						<div class="media-body">
							<a href="#">
								<h4 class="media-heading">Camera IP Wifi Không Dây VANTECH VT-6300A</h4>
							</a>
							<span class="media-price">1.250.000 đ</span>
						</div>
					</div>
					<div class="clear"></div>
					<div class="header">
						<span>Tin tức mới</span>
					</div>
					<div class="media news longer">
						<div class="media-left">
							<a href="#">
								<img class="media-object" alt="Lắp đặt camera" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/lap-dat-camera.jpg">
							</a>
						</div>
						<div class="media-body">
							<a href="#">
								<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Lắp đặt camera</h4>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.media-body {
		width: auto;
	}
</style>
@endsection