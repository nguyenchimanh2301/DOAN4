@extends('Home/_layout')
@section('content')
<section class="" >
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Danh Sách Sản Phẩm</span>
            <h2 class="mb-4">Sản Phẩm Của Chúng Tôi</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate" ng-repeat="item in sanphams|limitTo:8">
    				<div class="product ">
    					<a href="#" class="img-prod"><img class=" product-index" src="/upload/sanpham/@{{ item.image }}" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">@{{item.name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$80.00</span><span class="price-sale">@{{item.unit_price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="/detail/@{{item.id}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span ><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a  class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart" ng-click="addToCart(item)"></i></span>
	    							</a>
	    							<a  class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			
    			</div>
    		</div>
    	</div>
    </section>
@stop