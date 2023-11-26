<main class="main">
		<div class="container account-container custom-account-container">
				<div class="row">
					<div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
						<h2 class="text-uppercase my-5"> <?php                                  if(isset($_SESSION['user']) && ($_SESSION['user'] !=="")){
                                    $ten= $_SESSION['user']['ten'];
                                    echo $ten;
                                   } ?></h2>
						<ul class="nav nav-tabs list flex-column mb-0" role="tablist">
						  <li class="nav-item">
								<a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab"
									aria-controls="edit" aria-selected="false">Tài Khoản Của Tôi  </a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard"
									role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
							</li> -->

							<li class="nav-item">
								<a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab"
									aria-controls="order" aria-selected="true">Đơn Mua </a>
							</li>

							<!-- <li class="nav-item">
								<a class="nav-link" id="download-tab" data-toggle="tab" href="#download" role="tab"
									aria-controls="download" aria-selected="false">Downloads</a>
							</li> -->

							<!-- <li class="nav-item">
								<a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab"
									aria-controls="address" aria-selected="false">Addresses</a>
							</li> -->


							<!-- <li class="nav-item">
								<a class="nav-link" id="shop-address-tab" data-toggle="tab" href="#shipping" role="tab"
									aria-controls="edit" aria-selected="false">Shopping Addres</a>
							</li> -->
							<!-- <li class="nav-item">
								<a class="nav-link" href="wishlist.html">Wishlist</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" href="views/dangnhap/index.php">Logout</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-9 order-lg-last order-1 tab-content">
					
						<div class="tab-pane fade show active" id="dashboard" role="tabpanel">
							<div class="dashboard-content">
								<!-- <p>
									Hello <strong class="text-dark">Editor</strong> (not
									<strong class="text-dark">Editor</strong>?
									<a href="login.html" class="btn btn-link ">Log out</a>)
								</p>

								<p>
									From your account dashboard you can view your
									<a class="btn btn-link link-to-tab" href="#order">recent orders</a>,
									manage your
									<a class="btn btn-link link-to-tab" href="#address">shipping and billing
										addresses</a>, and
									<a class="btn btn-link link-to-tab" href="#edit">edit your password and account
										details.</a>
								</p> -->

								<div class="mb-4"></div>

								<div class="row row-lg">
									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#order" class="link-to-tab"><i
													class="sicon-social-dropbox"></i></a>
											<div class="feature-box-content">
												<h3>ORDERS</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#download" class="link-to-tab"><i
													class="sicon-cloud-download"></i></a>
											<div class=" feature-box-content">
												<h3>DOWNLOADS</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#address" class="link-to-tab"><i
													class="sicon-location-pin"></i></a>
											<div class="feature-box-content">
												<h3>ADDRESSES</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="#edit" class="link-to-tab"><i class="icon-user-2"></i></a>
											<div class="feature-box-content p-0">
												<h3>ACCOUNT DETAILS</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="wishlist.html"><i class="sicon-heart"></i></a>
											<div class="feature-box-content">
												<h3>WISHLIST</h3>
											</div>
										</div>
									</div>

									<div class="col-6 col-md-4">
										<div class="feature-box text-center pb-4">
											<a href="views/dangnhap/index.php"><i class="sicon-logout"></i></a>
											<div class="feature-box-content">
												<h3>LOGOUT</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						 </div>  <!-- End .tab-pane  -->
						<div class="tab-pane fade" id="order" role="tabpanel">
							<div class="order-content">
								<h3 class="account-sub-title d-none d-md-block"><i
										class="sicon-social-dropbox align-middle mr-3"></i>Đơn mua </h3>
								<div class="order-table-container text-center">
									<table class="table table-order text-left">
										<thead>
											<tr>
												<th class="order-id">STT</th>
												<th class="order-date">Tên sản phẩm </th>
												<th class="order-status">Ảnh</th>
												<th class="order-price">Số lượng</th>
												<th class="order-action">Tổng tiền</th>
												<th class="order-action">Quá trình </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="text-center p-0" colspan="5">
													<p class="mb-5 mt-5">
														No Order has been made yet.
													</p>
												</td>
											</tr>
										</tbody>
									</table>
									<hr class="mt-0 mb-3 pb-2" />

									<a href="category.html" class="btn btn-dark">Go Shop</a>
								</div>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="download" role="tabpanel">
							<div class="download-content">
								<h3 class="account-sub-title d-none d-md-block"><i
										class="sicon-cloud-download align-middle mr-3"></i>Downloads</h3>
								<div class="download-table-container">
									<p>No downloads available yet.</p> <a href="category.html"
										class="btn btn-primary text-transform-none mb-2">GO SHOP</a>
								</div>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="address" role="tabpanel">
							<h3 class="account-sub-title d-none d-md-block mb-1"><i
									class="sicon-location-pin align-middle mr-3"></i>Addresses</h3>
							<div class="addresses-content">
								<p class="mb-4">
									The following addresses will be used on the checkout page by
									default.
								</p>

								<div class="row">
									<div class="address col-md-6">
										<div class="heading d-flex">
											<h4 class="text-dark mb-0">Billing address</h4>
										</div>

										<div class="address-box">
											You have not set up this type of address yet.
										</div>

										<a href="#billing" class="btn btn-default address-action link-to-tab">Add
											Address</a>
									</div>

									<div class="address col-md-6 mt-5 mt-md-0">
										<div class="heading d-flex">
											<h4 class="text-dark mb-0">
												Shipping address
											</h4>
										</div>

										<div class="address-box">
											You have not set up this type of address yet.
										</div>

										<a href="#shipping" class="btn btn-default address-action link-to-tab">Add
											Address</a>
									</div>
								</div>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="edit" role="tabpanel">
							<h3 class="account-sub-title d-none d-md-block mt-0 pt-1 ml-1"><i
									class="icon-user-2 align-middle mr-3 pr-1"></i>Tài khoản </h3>
							<div class="account-content">
							
								<form action="index.php?act=capnhathoso" method="post">
									<?php extract($_SESSION['user']) ?>
									<div class="form-group mb-2">
										<label for="acc-text"> Họ và Tên  <span class="required">*</span></label>
										<input type="text" class="form-control" id="acc-text" name="ten"
											placeholder="Tên " required  value="<?=$_SESSION['user']['ten']?>"/>
										
									</div>


									<div class="form-group mb-4">
										<label for="acc-email"> Địa chỉ Email  <span class="required">*</span></label>
										<input type="email" class="form-control" id="acc-email" name="email"
											placeholder="editor@gmail.com" required value="<?=$_SESSION['user']['email']?>"/>
									</div>
									<div class="form-group mb-4">
										<label for="acc-email">Địa chỉ <span class="required">*</span></label>
										<input type="text" class="form-control" name="diachi"
											placeholder="địa chỉ cụ thể" required  value="<?=$_SESSION['user']['diachi']?>"/>
									</div>
									<div class="form-group mb-4">
										<label for="acc-email"> Số điện thoại <span class="required">*</span></label>
										<input type="number" class="form-control" id="acc-email" name="sodienthoai"
											placeholder="0xx,xxxx,xxx" required value="<?=$_SESSION['user']['sodienthoai']?>"/>
									</div>
									<div class="change-password">
										<h3 class="text-uppercase mb-2">Cập Nhật Mật Khẩu </h3>

										<div class="form-group">
											<label for="acc-password">Nhập mật khẩu cũ</label>
											<input type="password" class="form-control" id="acc-password"
												name="matkhau" />
										</div>

										<div class="form-group">
											<label for="acc-password">Nhập mật khẩu mới</label>
											<input type="password" class="form-control" id="acc-new-password"
												name="matkhaumoi" />
										</div>

										<div class="form-group">
											<label for="acc-password">Nhập lại mật khẩu mới</label>
											<input type="password" class="form-control" id="acc-confirm-password"
												name="nhaplaimatkhaumoi" />
										</div>
									</div>
								   			<a href="#">Bạn quên mật khẩu </a>
											   <p>Nội dung tên chỉ được thay đổi một lần duy nhất </p>
									<div class="form-footer mt-3 mb-0">
										<input type="submit" class="btn btn-dark mr-0" value="Lưu thay đổi" name="luuthaydoi">
											
									</div>

								</form>
							</div>
						</div><!-- End .tab-pane -->

						<div class="tab-pane fade" id="billing" role="tabpanel">
							<div class="address account-content mt-0 pt-2">
								<h4 class="title">Billing address</h4>

								<form class="mb-2" action="#">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>First name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Last name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Company </label>
										<input type="text" class="form-control">
									</div>

									<div class="select-custom">
										<label>Country / Region <span class="required">*</span></label>
										<select name="orderby" class="form-control">
											<option value="" selected="selected">British Indian Ocean Territory
											</option>
											<option value="1">Brunei</option>
											<option value="2">Bulgaria</option>
											<option value="3">Burkina Faso</option>
											<option value="4">Burundi</option>
											<option value="5">Cameroon</option>
										</select>
									</div>

									<div class="form-group">
										<label>Street address <span class="required">*</span></label>
										<input type="text" class="form-control"
											placeholder="House number and street name" required />
										<input type="text" class="form-control"
											placeholder="Apartment, suite, unit, etc. (optional)" required />
									</div>

									<div class="form-group">
										<label>Town / City <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>State / Country <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>Postcode / ZIP <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group mb-3">
										<label>Phone <span class="required">*</span></label>
										<input type="number" class="form-control" required />
									</div>

									<div class="form-group mb-3">
										<label>Email address <span class="required">*</span></label>
										<input type="email" class="form-control" placeholder="editor@gmail.com"
											required />
									</div>

									<div class="form-footer mb-0">
										<div class="form-footer-right">
											<button type="submit" class="btn btn-dark py-4">
												Save Address
											</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- End .tab-pane -->

						  <div class="tab-pane fade" id="shipping" role="tabpanel">
							<div class="address account-content mt-0 pt-2">
								<h4 class="title mb-3">Shipping Address</h4>

								<form class="mb-2" action="#">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>First name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Last name <span class="required">*</span></label>
												<input type="text" class="form-control" required />
											</div>
										</div>
									</div>

									<div class="form-group">
										<label>Company </label>
										<input type="text" class="form-control">
									</div>

									<div class="select-custom">
										<label>Country / Region <span class="required">*</span></label>
										<select name="orderby" class="form-control">
											<option value="" selected="selected">British Indian Ocean Territory
											</option>
											<option value="1">Brunei</option>
											<option value="2">Bulgaria</option>
											<option value="3">Burkina Faso</option>
											<option value="4">Burundi</option>
											<option value="5">Cameroon</option>
										</select>
									</div>

									<div class="form-group">
										<label>Street address <span class="required">*</span></label>
										<input type="text" class="form-control"
											placeholder="House number and street name" required />
										<input type="text" class="form-control"
											placeholder="Apartment, suite, unit, etc. (optional)" required />
									</div>

									<div class="form-group">
										<label>Town / City <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>State / Country <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-group">
										<label>Postcode / ZIP <span class="required">*</span></label>
										<input type="text" class="form-control" required />
									</div>

									<div class="form-footer mb-0">
										<div class="form-footer-right">
											<button type="submit" class="btn btn-dark py-4">
												Save Address
											</button>
										</div>
									</div>
								</form>
							</div>
						</div><!-- End .tab-pane -->
					</div><!-- End .tab-content -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-5"></div><!-- margin -->
		</main><!-- End .main -->
