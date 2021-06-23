<div id="mobile-list" class="section-container p-t-0">
	<!-- BEGIN container -->
	<div class="container">
		<!-- BEGIN section-title -->
		<h4 class="section-title clearfix">
			<a href="#" class="pull-right">SHOW ALL</a>
			Keramik Dinding
			<small>Shop and get your favourite tiles at amazing prices!</small>
		</h4>
		<!-- END section-title -->
		<!-- BEGIN category-container -->
		<div class="category-container">
			<!-- BEGIN category-sidebar -->
			<div class="category-sidebar">
				<ul class="category-list">
					<li class="list-header">Top Size Categories</li>
					<li><a href="#">20x40</a></li>
					<li><a href="#">30x30</a></li>
					<li><a href="#">30x60</a></li>
					<li><a href="#">40x40</a></li>
					<li><a href="#">50x50</a></li>
					<li><a href="#">60x60</a></li>
					<li><a href="#">All Brands</a></li>
				</ul>
			</div>
			<!-- END category-sidebar -->
			<!-- BEGIN category-detail -->
			<div class="category-detail">
				<!-- BEGIN category-item -->
				<a href="#" class="category-item full">
					<div class="item">
						<div class="item-cover">
							<img src="../src/img/product/bg-keramik-dinding.png" alt="" />
						</div>
						<div class="item-info bottom">
							<h4 class="item-title">LONDON BEIGE</h4>
							<p class="item-desc">Best living with coll color..</p>
							<div class="item-price">60x60</div>
						</div>
					</div>
				</a>
				<!-- END category-item -->
				<!-- BEGIN category-item -->
				<div class="category-item list">
					<!-- BEGIN item-row -->
					<div class="item-row">
						@php($x = [
									['item-1','Cyprus'],
									['item-2','Agave'],
									['item-3','Bezhita']])
						@for ($i = 0; $i < count($x); $i++)
							<!-- BEGIN item -->
							<div class="item item-thumbnail">
								<a href="/cjfi-shop-blog/product_detail" class="item-image">
									<img src="../src/img/product/{{$x[$i][0]}}.png" alt="" />
									<div class="discount">15% OFF</div>
								</a>
								<div class="item-info">
									<h4 class="item-title">
										<a href="/cjfi-shop-blog/product_detail">{{$x[$i][1]}}</a>
									</h4>
									<div class="item-price">$649.00</div>
									<div class="item-discount-price">$739.00</div>
								</div>
							</div>
							<!-- END item -->
						@endfor
					</div>
					<!-- END item-row -->
					<!-- BEGIN item-row -->
					<div class="item-row">
						@php($y = [
							['item-4','Keramik Bagus'],
							['item-5','keramik-indah'],
							['item-6','Keramik Corak']
						])
						@for ($i = 0; $i < count($y); $i++)
							<!-- BEGIN item -->
							<div class="item item-thumbnail">
								<a href="/cjfi-shop-blog/product_detail" class="item-image">
									<img src="../src/img/product/{{$y[$i][0]}}.png" alt="" />
									<div class="discount">15% OFF</div>
								</a>
								<div class="item-info">
									<h4 class="item-title">
										<a href="/cjfi-shop-blog/product_detail">{{$y[$i][1]}}</a>
									</h4>
									<div class="item-price">$399.00</div>
									<div class="item-discount-price">$453.00</div>
								</div>
							</div>
							<!-- END item -->
						@endfor
					</div>
					<!-- END item-row -->
				</div>
				<!-- END category-item -->
			</div>
			<!-- END category-detail -->
		</div>
		<!-- END category-container -->
	</div>
	<!-- END container -->
</div>