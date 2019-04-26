@extends('layouts.subClient')
@section('script')
<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/product.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/shopping.css')}}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="header">
				<span>Kiểm tra thông tin nhận hàng</span>
			</div>
			@if(!Auth::check())
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr class="hidden-xs hidden-sm">
						<td  width="45%" valign="top">
							@include('../../index.carts.loginForm')
						</td>
						<td valign="top" style="padding-left:20px;">
							@include('../../index.carts.inputForm')
						</td>
					</tr>
					<tr class="hidden-md hidden-lg">
						<td>
							@include('../../index.carts.loginForm')
						</td>
					</tr>
					<tr class="hidden-md hidden-lg">
						<td>
							@include('../../index.carts.inputForm')
						</td>
					</tr>
				</tbody>
			</table>
			@endif

			@if(($user = Auth::user())!=null)
			@include('../../index.carts.tableCart')
			@endif
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		@endsection