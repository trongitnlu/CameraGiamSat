<?php $__env->startSection('content'); ?>

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <a href="#"><i class="fa fa-home"></i> Trang chủ</a>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Danh sách quản lý</h3>

                </div><!-- /.box-header -->
                <div class="box-body" style="min-height:450px">
                 <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
               <a href="<?php echo e(route('danhsachmenu')); ?>">  <span class="info-box-icon bg-red"><i class="fa fa-bars"></i></span></a>
                <div class="info-box-content">
                  <a href="<?php echo e(route('danhsachmenu')); ?>"><h3>Menu</h3></a>

                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="<?php echo e(route('danhsachsanpham')); ?>">  <span class="info-box-icon bg-green"><i class="fa fa-building-o"></i></span></a>
                <div class="info-box-content">
                  <a href="<?php echo e(route('danhsachsanpham')); ?>"><h3>Sản phẩm</h3></a>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
               <a href="danhsachUser.html">  <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span></a>
                <div class="info-box-content">
                  <a href="<?php echo e(route('danhsachUser')); ?>"><h3>Thành Viên</h3></a>

                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="<?php echo e(route('danhsachdonhang')); ?>">  <span class="info-box-icon bg-orange"><i class="fa fa-files-o"></i></span></a>
                <div class="info-box-content">
                  <a href="<?php echo e(route('danhsachdonhang')); ?>"><h3>Hóa đơn</h3></a>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="tkdoanhthu.html">  <span class="info-box-icon bg-blue"><i class="icon ion-pie-graph"></i></span></a>
                <div class="info-box-content">
                  <a href="tkdoanhthu.html"><h3>Thông kê</h3></a>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <a href="<?php echo e(route('quanlytintuc')); ?>">  <span class="info-box-icon bg-purple"><i class="icon ion-compose"></i></span></a>
                <div class="info-box-content">
                  <a href="<?php echo e(route('quanlytintuc')); ?>"><h3>Tin tức</h3></a>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">

                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>