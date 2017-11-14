<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <!-- CSS and Jquery start here -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ UY TÍN TẠI FPT VN</title>
    <meta name="description" content="Công ty FPT Việt Nam cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc.">
    <meta property="fb:app_id" content="" />
    <meta name="DC.title" content="Camera FPT Việt Nam" />
    <meta name="geo.region" content="VN-HN" />
    <meta name="geo.placename" content="Hà nội" />
    <meta name="geo.position" content="20.984321;105.818546" />
    <meta name="ICBM" content="20.984321, 105.818546" />
    <?php echo $__env->make('../../link.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || [])
                .push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-66346872-1', 'auto');
        ga('send', 'pageview');
    </script>


    <script type="text/javascript">
        function lookup(keyword) {
            var keyword = document.getElementById("searchSgg")
            .value;
            if (keyword.length == 0) {
                $('#autoSuggestionsList')
                .fadeOut(400);
            } else {
                $.post("http://fptcamera.vn/ajaxhandle/client_products_ajaxhandler/Ajax_Get_All_Product_Client", {
                    keyword: keyword
                },
                function(data) {
                    if (data.length > 14) {
                        $('#autoSuggestionsList')
                        .fadeIn(400);
                            // var obj = jQuery.parseJSON(data);
                            var obj = JSON.parse(data);
                            var strhtml = '';
                            //$('#autoSuggestionsList').html(data['message']);
                            strhtml += '<div class="sgg-outer">';
                            for (var index in obj) {
                                //alert(obj.message[1].label);
                                //alert(obj.length());
                                for (var i = 0; i < obj[index].length; i++) {
                                    //alert(obj.message[i].value);
                                    //append
                                    strhtml += '<div class="sgg-row">';
                                    strhtml += '<div class="sgg-image"><img width="50" height="50" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/thumbs/' + obj.message[i].Image + '"/></div>';
                                    strhtml += '<div class="sgg-right">';
                                    strhtml += '<div class="sgg-title"><a href="http://fptcamera.vn/' + obj.message[i].Slug + '">' + obj.message[i].Title + '</a></div>';
                                    strhtml += '<div class="sgg-sellprice">' + parseFloat(obj.message[i].SellPrice)
                                    .toFixed()
                                    .replace(/./g, function(c, i, a) {
                                        return i && c !== "." && ((a.length - i) % 3 === 0) ? '.' + c : c;
                                    }) + ' đ</div>';
                                    strhtml += '</div>';
                                    strhtml += '</div>';
                                }
                            }
                            strhtml += '</div>';
                            $('#autoSuggestionsList')
                            .html(strhtml);
                        } else {
                            var strhtml = '';
                            strhtml += '<div class="sgg-outer">';
                            strhtml += '<div class="sgg-row">';
                            strhtml += '<div class="sgg-title"><a>Không có sản phẩm nào tương ứng</a></div>';
                            strhtml += '</div>';
                            strhtml += '</div>';
                            $('#autoSuggestionsList')
                            .html(strhtml);
                        }
                    });
                // Ajax_Suggestion(keyword);
            }
        }
    </script>
    <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/jquery.bootstrap-touchspin.css" />
    <script src="http://fptcamera.vn/resources/js/client/jquery.bootstrap-touchspin.min.js"></script>
    <!-- CSS and Jquery end here -->
</head>

<body lang="vi">
    <div id="wrapper">
        <!-- Top start here -->
        <?php echo $__env->make('../../index.topsub', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- Top end here -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row hidden-xs hidden-sm">
                        <div class="col-xs-12">
                            <div class="header">
                                <span>Giỏ hàng</span>
                            </div>
                            <form action="<?php echo e(route('updateCart')); ?>" method="post" accept-charset="utf-8">
                                <table id="cart">
                                    <tr>
                                        <th></th>
                                        <th>Mã - Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>

                                    <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a title="Xóa sản phẩm" style="font-size:20px;color:#000;" href="<?php echo e(route('removeCart', ['rowId' => $row->rowId])); ?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                        <td><b><?php echo e($row->name); ?></b>
                                        </td>
                                        <td><img class="cart_img" src="<?php echo e(asset('public/images/san-pham/'.$row->options->img)); ?>">
                                        </td>
                                        <td><?php echo e(number_format($row->price)); ?> VNĐ</td>
                                        <td style="width:92px;">
                                            <input class="cart_qty" type="text" name="<?php echo e($row->rowId); ?>" value="<?php echo e($row->qty); ?>" />
                                        </td>
                                        <td><?php echo e(number_format($row->subtotal)); ?> VNĐ</td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <td colspan="5">Tổng cộng</td>
                                    <td style="color:#ff0000;font-weight:bold;"><?php echo e(Cart::total()); ?> VNĐ</td>
                                </tr>
                                <tr class="no-border">
                                    <td colspan="6">
                                        <input class="btn1" type="button" value="Xóa giỏ hàng" onclick="clear_cart()" />
                                        <input style="margin-left:5px;" class="btn1" type="button" value="Tiếp tục mua hàng" onclick="location.href='<?php echo e(url('/')); ?>'" />
                                        <input style="float:right;margin-left:5px" class="btn2" type="button" value="Thanh toán" onclick="location.href='http://fptcamera.vn/don-hang'" />
                                        <input style="float:right;margin:5px" class="btn3" type="submit" value="Cập nhật số lượng" />

                                    </td>
                                </tr>
                            </table>
                        </form>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row hidden-lg hidden-md">
                    <div class="col-xs-12">
                        <div class="header">
                            <span>Giỏ hàng</span>
                        </div>
                        <form action="<?php echo e(route('updateCart')); ?>" method="post" accept-charset="utf-8">
                            <table id="cart">
                             <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                <td colspan="2"><b><?php echo e($row->name); ?></b>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><img class="cart_img" src="<?php echo e(asset('public/images/san-pham/'.$row->options->img)); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo e(number_format($row->price)); ?> VNĐ</td>
                                <td style="width:92px;">
                                    <input class="cart_qty" maxlength="3" size="1" name="<?php echo e($row->rowId); ?>" value="<?php echo e($row->qty); ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text_last" colspan="2"><?php echo e(number_format($row->subtotal)); ?> VNĐ</td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php echo e(csrf_field()); ?>


                            <tr>
                                <td colspan="2">Tổng cộng</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="color:#ff0000;font-weight:bold;"><?php echo e(Cart::total()); ?> VNĐ</td>
                            </tr>
                            <tr class="no-border">
                                <td colspan="2">
                                    <input class="btn1" type="button" value="Xóa giỏ hàng" onclick="clear_cart()" />
                                    <input class="btn1" type="button" value="Tiếp tục mua hàng" onclick="location.href='<?php echo e(url('/')); ?>'" />
                                    <input class="btn3" type="submit" value="Cập nhật số lượng" />
                                    <input class="btn2" type="button" value="Thanh toán" onclick="location.href='http://fptcamera.vn/don-hang'" />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<!-- Bottom end here -->
<?php echo $__env->make('../../index.bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('../../index.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div style="display: none">
    <!-- Histats.com  START  (standard)-->
    <script type="text/javascript">
        document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
    </script>
    <a href="http://www.histats.com" target="_blank" title="">
        <script type="text/javascript">
            try {
                Histats.start(1, 3313430, 4, 438, 112, 75, "00011111");
                Histats.track_hits();
            } catch (err) {};
        </script>
    </a>
    <noscript>
        <a href="http://www.histats.com" target="_blank"><img src="http://sstatic1.histats.com/0.gif?3313430&101" alt="" border="0">
        </a>
    </noscript>
    <!-- Histats.com  END  -->
</div>
<div class="clear"></div>
</div>
<!-- Bottom end here -->

</div>
<div class="sticky-container hidden-xs hidden-md">
        <!-- <ul class="sticky">
				<li>
					<a rel="no-follow" target="_blank" href="">
						<p>Facebook</p>
						<img src="http://fptcamera.vn/resources/ui_images/client/background/social/fb.jpg" />
					</a>
				</li>
				<li>
					<a rel="no-follow" target="_blank" href="">
						<p>Google+</p>
						<img src="http://fptcamera.vn/resources/ui_images/client/background/social/gplus.jpg" />
					</a>
				</li>
				<li>
					<a rel="no-follow" target="_blank" href="">
						<p>Twitter</p>
						<img src="http://fptcamera.vn/resources/ui_images/client/background/social/tt.jpg" />
					</a>
				</li>
				<li>
					<a rel="no-follow" target="_blank" href="">
						<p>Youtube</p>
						<img src="http://fptcamera.vn/resources/ui_images/client/background/social/yt.jpg" />
					</a>
				</li>
			</ul> -->
        </div>
        <div class="sticky-buttons hidden-xs hidden-md">
            <!-- <a data-toggle="modal" data-target="#supportonlineModal">Hỗ trợ trực tuyến</a> -->
            <!-- <a data-toggle="modal" data-target="#hotlineModal">HOTLINE</a> -->
        </div>
    <!-- <div class="modal fade" id="hotlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">HOTLINE</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div id="modal_hotline_list">
																	<div class="col-xs-4">
										<div class="hotline">
											<span class="phone">Hotline 1</span>
											<span class="title">024.6328.2964</span>
										</div>
									</div>
																	<div class="col-xs-4">
										<div class="hotline">
											<span class="phone">Hotline 2</span>
											<span class="title">0984 489 688</span>
										</div>
									</div>
															</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div> -->
        <div class="modal fade" id="supportonlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Hỗ trợ trực tuyến</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div id="modal_hotline_list">
                                <div class="col-xs-6 col-md-4">
                                    <div class="hotline">
                                        <p class="title">Mr: Xuân</p>
                                        <p>Tư vấn bán hàng</p>
                                        <p>Tel: 098 448 9688</p>
                                        <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-4">
                                    <div class="hotline">
                                        <p class="title">Mr: Thành</p>
                                        <p>Tư vấn bán hàng</p>
                                        <p>Tel: 0971.767.285</p>
                                        <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-4">
                                    <div class="hotline">
                                        <p class="title">Mr: Duy</p>
                                        <p>Chi nhánh Sài Gòn</p>
                                        <p>Tel: 0931.588.886</p>
                                        <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="go_top" class="hidden-xs hidden-sm"><i class="fa fa-arrow-circle-up"></i>
        </div>
        <div id="fixed-bottom" class="hidden-lg hidden-md">
            <div id="call-xs-sm"><a href="tel:0984 489 688"><i class="fa fa-phone">&nbsp;&nbsp;</i>Gọi 0984 489 688</a>
            </div>
        </div>
        <script type="text/javascript" charset="utf-8">
            $(window)
            .load(function() {
                equalheight('.thumbnail.products');
                equalheight('.thumbnail.news');
                equalheight('.equalheight1');
                equalheight('.equalheightbanner');
            });


            $(window)
            .resize(function() {
                equalheight('.thumbnail.products');
                equalheight('.thumbnail.news');
                equalheight('.equalheight1');
                equalheight('.equalheightbanner');
            });

            $('#menu ul > li')
            .hover(function() {
                $(this)
                .children('ul')
                .stop(true, true)
                .delay(200)
                .fadeIn(300);
            }, function() {
                $(this)
                .children('ul')
                .stop(true, true)
                .fadeOut(300);
            });

            $('#prd-cate-list .sub-page > ul > li')
            .hover(function() {
                $(this)
                .children('ul')
                .stop(true, true)
                .delay(200)
                .fadeIn(300);
            }, function() {
                $(this)
                .children('ul')
                .stop(true, true)
                .fadeOut(300);
            });

            $('#prd-cate-list')
            .hover(function() {
                $(this)
                .children('ul.sub-page')
                .stop(true, true)
                .delay(200)
                .slideDown(300);
            }, function() {
                $(this)
                .children('ul.sub-page')
                .stop(true, true)
                .slideUp(300);
            });

            $('ul.dropdown-menu [data-toggle=dropdown]')
            .on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                $(this)
                .parent()
                .siblings()
                .removeClass('open');
                $(this)
                .parent()
                .toggleClass('open');
            });

            $('.scrollfix')
            .scrollFix({
                fixTop: 40
            });

            if ($(window)
                .scrollTop() != "0")
                $("#go_top")
            .fadeIn("slow");
            var scrollDiv = $("#go_top");
            $(window)
            .scroll(function() {
                if ($(window)
                    .scrollTop() == "0")
                    $(scrollDiv)
                .fadeOut("slow")
                else
                    $(scrollDiv)
                .fadeIn("slow")
            });
            $("#go_top")
            .click(function() {
                $("html, body")
                .animate({
                    scrollTop: $("#ScrollTo")
                    .offset()
                    .top
                }, "slow")
            });

            $('.mobileslider')
            .flexslider({
                animation: "fade",
                animationLoop: true,
                directionNav: false,
                controlNav: false,
            });
            $(".cart_qty")
            .TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'glyphicon glyphicon-plus',
                verticaldownclass: 'glyphicon glyphicon-minus'
            });

            function clear_cart() {
                var result = confirm('Bạn muốn hủy giỏ hàng ?');
                if (result) {
                    window.location = "<?php echo e(route('deleteCartAll')); ?>";
                } else {
                return false; // cancel button
            }
        }
    </script>
</body>

</html>