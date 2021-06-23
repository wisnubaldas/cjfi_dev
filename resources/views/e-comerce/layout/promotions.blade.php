<div id="promotions" class="section-container bg-white">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN section-title -->
				<h4 class="section-title clearfix">
					<a href="#" class="pull-right">SHOW ALL</a>
					Exclusive promotions
					<small>from 25 September 2016 - 1 January 2017</small>
				</h4>
				<!-- END section-title -->
				<!-- BEGIN row -->
				<div class="row row-space-10">
					<!-- BEGIN col-6 -->
					<div class="col-lg-6">
						<!-- BEGIN promotion -->
						<div class="promotion promotion-lg bg-gradient-black">
							<div class="promotion-image text-right promotion-image-overflow-bottom estillo-slade">
								<img src="../src/img/product/estilo-1.png" alt="" />
							</div>
							<div class="promotion-caption promotion-caption-inverse">
								<h4 class="promotion-title">BLITTER</h4>
								<div class="promotion-price"><small>Size</small> 25x40 cm</div>
								<p class="promotion-desc">Color : LBG, LBL, LGN, LGS<br />Menampilkan bunga matahari untuk...</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
					</div>
					<!-- END col-6 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3 col-md-6">
						<!-- BEGIN promotion -->
						<div class="promotion bg-black-transparent-8">
							<div class="promotion-image promotion-image-overflow-bottom promotion-image-overflow-top simple-slide">
								<img src="../src/img/product/istambul-1.png" alt="" />
								<img src="../src/img/product/istambul-2.png" alt="" />
								<img src="../src/img/product/istambul-3.png" alt="" />
								<img src="../src/img/product/istambul-4.png" alt="" />
							</div>
							<div class="promotion-caption promotion-caption-inverse text-right">
								<h4 class="promotion-title m-l-m">Istambul</h4>
								<div class="promotion-price "><small>size</small> 60x40 cm</div>
								<p class="promotion-desc">Koleksi terbaik</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
						<!-- BEGIN promotion -->
						<div class="promotion bg-gradient-grey">
							<div class="promotion-image text-center promotion-image-overflow-bottom">
								<img src="../src/img/product/helm-cok.png" alt="" />
							</div>
							<div class="promotion-caption text-center">
								<h4 class="promotion-title">Estonia</h4>
								<div class="promotion-price"><small>size</small> 40x40 cm</div>
								<p class="promotion-desc">Natural tiles for inspiration</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
					</div>
					<!-- END col-3 -->
					<!-- BEGIN col-3 -->
					<div class="col-lg-3 col-md-6">
						<!-- BEGIN promotion -->
						<div class="promotion bg-gradient-grey">
							<div class="promotion-image promotion-image-overflow-right promotion-image-overflow-bottom text-right">
								<img src="../src/img/product/fluorite.png" alt="" />
							</div>
							<div class="promotion-caption text-center">
								<h4 class="promotion-title">Fluorite</h4>
								<div class="promotion-price"><small>size</small> 50x50 cm</div>
								<p class="promotion-desc">Mountain rock design give the natural color of the mountains</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
						<!-- BEGIN promotion -->
						<div class="promotion bg-black-transparent-8">
							<div class="promotion-image text-right golden-slide">
								<img src="../src/img/product/golden-1.png" alt="" />
							</div>
							<div class="promotion-caption promotion-caption-inverse">
								<h4 class="promotion-title">GOLDEN</h4>
								<div class="promotion-price"><small>size</small> 30x30cm</div>
								<p class="promotion-desc">make your home as luxurious as the palace of the kings.</p>
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
					</div>
					<!-- END col-3 -->
				</div>
				<!-- END row -->
			</div>
			<!-- END container -->
		</div>
@push('scripts')
	<script>
		jQuery(function(){
			$(".simple-slide > img:gt(0)").hide();

			setInterval(function() {
			$('.simple-slide > img:first')
				.fadeOut(2000)
				.next()
				.fadeIn(2000)
				.end()
				.appendTo('.simple-slide');
			}, 5000);

			let counter = 0;
			const arr = ['estilo-1.png','estilo-2.png','estilo-3.png','estilo-4.png']
			const gold = ['golden-1.png','golden-2.png','golden-3.png','golden-4.png']
			setInterval(function(){
				counter++;
				if(counter > 3)
				{
					counter = 0;
				}
				$('.estillo-slade').html(`<img src="../src/img/product/${arr[counter]}" alt="" />`);
				$('.golden-slide').html(`<img src="../src/img/product/${gold[counter]}" alt="" />`);

				// console.log(counter)
			},4000)
		})
	</script>
@endpush		