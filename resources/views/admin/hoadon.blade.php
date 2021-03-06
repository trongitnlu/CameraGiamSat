  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    @include('admin.link')
   <script src=" {{asset('public/admin/js/danhsachhoadon.js')}}" type="text/javascript"></script>
   <script src=" {{asset('public/admin/js/functionhoadon.js')}}" type="text/javascript"></script>
    <script src=" {{asset('public/admin/js/jquery.quicksearch.js')}}"></script>
    <link rel="stylesheet" type="text/css" href=" {{asset('public/admin/css/hoadon.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('public/admin/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('public/admin/css/bootstrap.min.css')}}">
</head>
<body>
	<body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <div id="top">
        @include('admin.layout.top')
      </div>
      <!-- Left side column. contains the logo and sidebar -->
      <div id="left">
         @include('admin.layout.left')
      </div>
      <!-- Content Wrapper. Contains page content -->
      <div id="content">
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Quản lí hóa đơn
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Danh sách hóa đơn</h3>

                  <div class="col-sm-offset-8 col-sm-4" style="margin-top:2%;padding-right:0px">

                  <input type="search" id="search" class="form-control" placeholder="Nhập từ cần tìm...">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body" style="min-height:400px">
                  <table id="example1" class="table table-bordered table-striped" style="width: 100%;">

                  </table>
                </div><!-- /.box-body -->

              </div><!-- /.box -->
            </div><!-- /.col -->
            <div  class="col-sm-offset-5 col-sm-4" style="margin-top:2%;margin-bottom:1%" id="phantrang">

                </div>

          </div><!-- /.row -->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->



      </div>
      <div id="bottom">
         @include('admin.layout.bottom')
      </div>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width:55%">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
                    <h4 class="modal-title">Chi tiết hóa đơn </h4>
        </div>
        <div class="modal-body">
        <div> <p><strong>3TP Camera Store</strong></p></div>
        	<table>

            <tr>
            <td>Mã hóa đơn: </td>
            <td><span id="mahoadon"></span></td>
            </tr>
            <tr>
            <td>Tên người dùng: </td>
            <td><span id="tennguoidung"></span></td>
            </tr>
            <tr>
            <td>Tên tài khoản: </td>
            <td><span id="tentaikhoan"></span></td>
            </tr>
            </table>

            <fieldset>
            <legend>Thông tin sản phẩm</legend>
            <table class="table" id="tbsp">
            <thead>
            <th >Tên sản phẩm</th>
            <th>Đơn giá (VNĐ)</th>
            <th>Số lượng</th>
            <th>KM (%)</th>
            <th>VAT (%)</th>
            <th>Tổng tiền (VNĐ)</th>
            </thead>
            <tbody></tbody>
            </table>
            </fieldset>
            <table  style="width:100%">

			<tr>
            <td >Thành Tiền</td>

            <td style="text-align:right"><span id="thanhtien" ></span></td>
            </tr>
			</table>


        </div>
        <div class="modal-footer">

        <button type="button" class="btn btn-default" onClick="printhd()">In hóa đơn</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>

        </div>
      </div>

    </div>
  </div>



    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->

    <!--    <script type="text/javascript">
      $('#top').load('top.html');
      $('#left').load('left.html');
      $('#bottom').load('bottom.html');

    </script> -->

</body>
</html>