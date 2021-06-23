<div id="trending-items" class="section-container">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN section-title -->
				<h4 class="section-title clearfix">
					<a href="#" class="pull-right m-l-5"><i class="fa fa-angle-right f-s-18"></i></a>
					<a href="#" class="pull-right"><i class="fa fa-angle-left f-s-18"></i></a>
					Produk Terlaris
					<small>Produk-produk paling disukai oleh para konsumen</small>
				</h4>
				<!-- END section-title -->
				<!-- BEGIN row -->
				<div class="row row-space-10">
					@php($x = ['colombo-l','cerois-l','flamboyan-l','flow-green-l','product-terlaris','rok-l'])
					@for ($i = 0; $i < count($x); $i++)
						<!-- BEGIN col-2 -->
						<div class="col-lg-2 col-md-4">
							<!-- BEGIN item -->
							<div class="item item-thumbnail">
								<a href="/cjfi-shop-blog/product_detail" class="item-image">
									<img src="../src/img/product/{{$x[$i]}}.png" alt="" />
									<div class="discount">30x30cm</div>
								</a>
								<div class="item-info">
									<h4 class="item-title">
										<a href="/cjfi-shop-blog/product_detail">Flower Rock Light</a>
									</h4>
									<p class="item-desc">Matt Embossed Stone Wall</p>
									{{-- <div class="item-price">$649.00</div> --}}
									{{-- <div class="item-discount-price">$739.00</div> --}}
								</div>
							</div>
							<!-- END item -->
						</div>
						<!-- END col-2 -->
					@endfor
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>