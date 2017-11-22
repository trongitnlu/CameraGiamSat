 <!-- Login / Register Modal-->
 <div class="modal fade login-register-form" role="dialog">
 	<div class="modal-dialog modal-md">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal">
 					<span class="fa fa-remove"></span>
 				</button>
 				<ul class="nav nav-tabs ">
 					<li class="active"><a data-toggle="tab" href="#login-form"> Đăng nhập <span class="fa fa-user"></span></a></li>
 					<li><a data-toggle="tab" href="#registration-form"> Đăng kí <span class="fa fa-pencil"></span></a></li>
 				</ul>
 			</div>
 			<div class="modal-body">
 				<div class="tab-content">
 					<div id="login-form" class="tab-pane fade in active">
 						<form action="/">
 							<div class="form-group">
 								<label for="email">Email:</label>
 								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
 							</div>
 							<div class="form-group">
 								<label for="pwd">Mật khẩu:</label>
 								<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
 							</div>
 							<div class="form-group">
 								<div class="checkbox">
 									<label><input type="checkbox" name="remember"> Ghi nhớ</label>
 									<a data-toggle="tab" href="#forgot-form" for="pwd">Quên mật khẩu</a>
 								</div>
 								
 							</div>
 							<button type="submit" class="btn btn-default">Đăng nhập</button>
 						</form>
 					</div>
 					<div id="forgot-form" class="tab-pane fade in fade">
 						<form action="/">
 							<div class="form-group">
 								<label for="email">Email:</label>
 								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
 							</div>
 							<button type="submit" class="btn btn-default">Xác nhận</button>
 						</form>
 					</div>
 					<div id="registration-form" class="tab-pane fade">
 						<form action="/">
 							<div class="form-group">
 								<label for="name">Tên bạn:</label>
 								<input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
 							</div>
 							<div class="form-group">
 								<label for="newemail">Email:</label>
 								<input type="email" class="form-control" id="newemail" placeholder="Enter new email" name="newemail">
 							</div>
 							<div class="form-group">
 								<label for="newpwd">Mật khẩu:</label>
 								<input type="password" class="form-control" id="newpwd" placeholder="New password" name="newpwd">
 							</div>
 							<div class="form-group">
 								<label for="newpwd">Số điện thoại:</label>
 								<input type="text" class="form-control" id="newpwd" placeholder="Số điện thoại" name="newpwd">
 							</div>
 							<div class="form-group">
 								<label for="newpwd">Địa chỉ:</label>
 								<input type="text" class="form-control" id="newpwd" placeholder="Số điện thoại" name="newpwd">
 							</div>
 							<div class="form-group">
 								<label for="newemail">Thành phố:</label>
 								<select class="form-control" id="sel1">
 									<?php $__currentLoopData = DB::select('SELECT * from thanhpho'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 									<option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
 									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 								</select>
 							</div>
 							<button type="submit" class="btn btn-default">Đăng kí</button>
 						</form>
 					</div>

 				</div>
 			</div>
 			<!--                                    <div class="modal-footer">-->
 				<!--                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
 				<!--                                    </div>-->
 			</div>
 		</div>
 	</div>
 	<style type="text/css">
 	.modal-header {
 		padding: 0;
 	}
 	.modal-header .close {
 		padding: 10px 15px;
 	}
 	.modal-header ul {
 		border: none;
 	}
 	.modal-header ul li {
 		margin: 0;
 	}
 	.modal-header ul li a {
 		border: none;
 		border-radius: 0;
 	}
 	.modal-header ul li.active a {
 		color: #e12f27;
 	}
 	.modal-header ul li a:hover {
 		border: none;
 	}
 	.modal-header ul li a span {
 		margin-left: 10px;
 	}
 	.modal-body .form-group {
 		margin-bottom: 10px;
 	}

 </style>