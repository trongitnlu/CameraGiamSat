 <div class="container-fluid">
 	<div class="row hidden-md hidden-lg">
 		<nav class="navbar navbar-inverse navbar-fixed-top custom-navbar">
 			<div class="container-fluid">
 				<!-- Brand and toggle get grouped for better mobile display -->
 				<div class="navbar-header">
 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
 						<span class="sr-only">Toggle navigation</span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 					</button>
 					@if(($user = Auth::user())==null)
 					<a class="navbar-brand" href="http://fptcamera.vn/">
 						<img alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="http://fptcamera.vn/resources/ui_images/client/background/logo_mobile.png">
 					</a>
 					@endif
 					<div class="navbar-brand" id="top-hotline" style="float:right;">
 						<div class="name">
 							@if(($user = Auth::user())==null)
 							<a class="fa fa-user" href="#" data-toggle="modal" data-target=".login-register-form"> Đăng nhập</a>
 							@else
 							<a class="fa fa-user aDangNhap" href="#" > {{ $user->name }}</a>
 							<a class="fa fa-key" href="{{ route('logoutUser') }}" > Đăng xuất</a>
 							@endif
 						</div>
 					</div>
 				</div>
 				<!-- Collect the nav links, forms, and other content for toggling -->
 				<div class="collapse navbar-collapse" aria-expanded="false" id="bs-example-navbar-collapse-1">
 					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true" style="position: fixed; top:40px; right: 0; border: none; padding: 3px; margin-right: 5px;">
 						<i class="fa fa-times-circle" style="font-size: 25px;"></i>
 					</button>
 					<ul class="nav navbar-nav">
 						@foreach($category as $cate)
 						@if($cate->id_root == 0 && $cate->status==1)
 						<li><a href="{{url('/category/'.$cate->id.'/1')}}"><img src = "{{ asset('public/images/danh-muc-san-pham/'.$cate->icon) }}"/>&nbsp;&nbsp;{!!$cate->name!!}</a></li>
 						@endif
 						@endforeach
 					</ul>
 				</div>
 				<!-- /.navbar-collapse -->
 			</div>
 			<!-- /.container-fluid -->
 		</nav>
 	</div>
 </div>