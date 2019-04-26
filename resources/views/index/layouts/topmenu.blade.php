 <div id="top-menu" class="hidden-sm hidden-xs">
 	<div class="container">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="row">
 					<div class="col-xs-7">
 						<div id="top-hotline">
 							<div class="name">
 								<a href="{{ url('/') }}">Camera giám sát</a>|
 								<div id="top-hotline" style="float:right;">
 									<div class="name">
 										<a class="dropdown-toggle" href="JavaScript::void(0)" id="menu1" type="button" data-toggle="dropdown">Kiểm tra đơn hàng
 											<span class="caret"></span></a>
 											<div class="dropdown-menu" role="menu" aria-labelledby="menu1" style="padding: 5px">
 												<input id="code_order_search" class="form-control" placeholder="Nhập mã đơn hàng" type="text" name="code_order" style="color: red">
 												<button type="button" class="form-control btn btn-danger" id="btnKiemTraDonHang"> Kiểm tra </button>
 											</div>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 						<div class="col-xs-5">
 							@if(($user = Auth::user())==null)
 							<div id="top-hotline" style="float:right;">
 								<div class="name">
 									<a class="fa fa-user aDangNhap" href="#" data-toggle="modal" data-target=".login-register-form"> Đăng nhập</a>
 								</div>
 							</div>
 							@else
 							<div id="top-hotline" style="float:right;">
 								<div class="name">
 									<a class="fa fa-user aDangNhap" href="{{ route('profile') }}" > {{ $user->name }}</a>
 								</div>
 								<div class="name">
 									<a class="fa fa-key" href="{{ route('logoutUser') }}" > Đăng xuất</a>
 								</div>
 							</div>
 							@endif
 							<div id="top-hotline" style="float:right;">
 								<div class="name">
 									<a class="name_cart" href="{{ route('cartDetail') }}">Giỏ hàng (<b>{{ Cart::count() }}</b> sản phẩm)</a>
 								</div>
 							</div>

 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="container hidden-xs hidden-sm">
 		<div class="row top-header" id="ScrollTo">
 			<div class="col-xs-12">
 				<div class="row">
 					<div class="col-xs-12 col-md-3">
 						<div id="logo">
 							<a href="{{url('/')}}">
 								<img title="LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ" alt="Camera NPC Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="{{ asset('public/images/ui_images/logo.jpg') }}">
 							</a>
 						</div>
 					</div>
 					<div class="col-xs-12 col-md-6">
 						<img style="width:100%;margin-top:25px;" alt="Cam kết dịch vụ" src="http://fptcamera.vn/resources/ui_images/client/background/promise.png">
 					</div>
 					<div class="col-xs-12 col-md-3">
 						<div id="hotline">
 							<div class="name">Tư vấn lắp đặt camera</div>
 							<div class="clear"></div>
 							<div class="phone">
 								<a href="tel:093 888 4835">093 888 4835</a>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<script type="text/javascript">
 		$('#btnKiemTraDonHang').click(function(){
 			location.href = '{{ url('kiem-tra-don-hang') }}/'+$('#code_order_search').val(); 		
 		})
 	</script>
 	@include('index.user.user')
