@extends('Home/_layoutcart')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
	<div class="container"  >
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
				<h1 class="mb-0 bread">My Cart</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-cart" >
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="cart-list">
					<table class="table">
						<thead class="thead-primary">
							<tr class="text-center">
							     <th>STT</th>
								<th>Image</th>
								<th>Product name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th>Delete</th>

							</tr>
						</thead>
						<tbody >
							<tr class="text-center" ng-repeat="item in listSP">
							     <td> @{{$index+1}}</td>

								<td class="image-prod">
									<div class="img"><img src="/upload/sanpham/@{{ item.image }}" class="img-fluid" alt=""></div>
								</td>

								<td class="product-name">
									<h3>@{{item.name}}</h3>
									<p>@{{item.mota}}</p>
								</td>

								<td class="price">@{{item.unit_price}}</td>

								<td class="quantity">
									<ul style="display:inline-flex;list-style:none">
										<li><input type="submit" value="-" ng-click="Giam(item)"></li>
										<li><input type="text" class="" value="@{{item.quantity}}" style="width:50px"></li>
										<li><input type="submit" value="+" ng-click="Tang(item)"></li>

									</ul>
								</td>

								<td class="total">@{{item.unit_price*item.quantity}}</td>
								<td class="product-remove"><span class="ion-ios-trash" ng-click=remove(item)></span></td>

							</tr><!-- END TR-->


						</tbody> 
					</table>
				</div>
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<div class="cart-total mb-3">
					<h3>Tên khách hàng</h3>
					<form action="#" class="info">
						<div class="form-group">
							<label for="">Nhập tên</label>
							<input type="text" class="form-control text-left px-3" placeholder="" ng-model="ban.kh_name">
						</div>
					</form>
				</div>
				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
			</div>
			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<div class="cart-total mb-3">
					<h3>Ước tính phí vận chuyển và thuế</h3>
					<p>Nhập điểm đến của bạn để nhận ước tính vận chuyển</p>
					<form action="#" class="info">
						<div class="form-group">
							<label for="">Country</label>
							<input type="date" class="form-control text-left px-3" placeholder="" ng-model="ban.date_order">
						</div>
						<div class="form-group">
							<label for="country">Thông tin</label>
							<input type="text" class="form-control text-left px-3" placeholder=""ng-model="ban.status">
						</div>
						<div class="form-group">
							<label for="country">Ghi chú</label>
							<input type="text" class="form-control text-left px-3" placeholder="" ng-model="ban.note">
						</div>
					</form>
				</div>
				<p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
			</div>
			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
				<div class="cart-total mb-3">
					<h3>Cart Totals</h3>
					<p class="d-flex">
						<span>Subtotal</span>
						<span>$20.60</span>
					</p>
					<p class="d-flex">
						<span>Delivery</span>
						<span>$0.00</span>
					</p>
					<p class="d-flex">
						<span>Discount</span>
						<span>$3.00</span>
					</p>
					<hr>
					<p class="d-flex total-price">
						<span>Total</span>
						<span>@{{total|number}}</span>
					</p>
				</div>
				<p><a class="btn btn-primary py-3 px-4" ng-click="updateData()">HOÀN TẤT THANH TOÁN</a></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
	<div class="container py-4">
		<div class="row d-flex justify-content-center py-5">
			<div class="col-md-6">
				<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
				<span>Get e-mail updates about our latest shops and special offers</span>
			</div>
			<div class="col-md-6 d-flex align-items-center">
				<form action="#" class="subscribe-form">
					<div class="form-group d-flex">
						<input type="text" class="form-control" placeholder="Enter email address">
						<input type="submit" value="Subscribe" class="submit px-3">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>



@stop