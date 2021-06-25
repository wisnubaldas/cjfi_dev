<div id="promotions" class="section-container bg-white">
			<!-- BEGIN container -->
			<div class="container">
				<!-- BEGIN section-title -->
				{{-- <h4 class="section-title clearfix">
					<a href="#" class="pull-right">SHOW ALL</a>
					Exclusive promotions
					<small>from 25 September 2016 - 1 January 2017</small>
				</h4> --}}
				<!-- END section-title -->
				<!-- BEGIN row -->
				<div class="row row-space-10">
					<!-- BEGIN col-6 -->
					<div class="col-lg-6">
						<!-- BEGIN promotion -->
						<div class="promotion promotion-lg bg-black-transparent-8">
							<div class="promotion-image text-right promotion-image-overflow-bottom">
								<img src="../src/img/slider/slider-1-product.png"  alt="" />
							</div>
							<div class="promotion-caption promotion-caption-inverse">
								<h4 class="promotion-title">CJFI</h4>
								<div class="promotion-price">Chang Jui Fang Indonesia</div>
								@if (!Agent::isMobile())
									<p class="promotion-desc">Ceramic Manufacturer, Importer & Distributor</p>
								@endif
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
								<img src="../src/img/product/istambul-1.png" alt=""  style="opacity: 0.5"/>
							</div>
							<div class="promotion-caption promotion-caption-inverse text-right">
								<h4 class="promotion-title m-l-m">Produk Baru</h4>
								{{-- <div class="promotion-price "><small>size</small> 60x40 cm</div> --}}
								<p class="promotion-desc">Koleksi produk terbaru <br>disini...</p>
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
								<h4 class="promotion-title">Inspirasi Desain</h4>
								<div class="promotion-price">Koleksi keramik yang akan menginspirasi anda...</div>
								{{-- <p class="promotion-desc">Natural tiles for inspiration</p> --}}
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
								<h4 class="promotion-title">Produksi Ramah Lingkungan</h4>
								<div class="promotion-price">Bagaimana CJFI melestarikan lingkungan...</div>
								{{-- <p class="promotion-desc">Mountain rock design give the natural color of the mountains</p> --}}
								<a href="#" class="promotion-btn">View More</a>
							</div>
						</div>
						<!-- END promotion -->
						<!-- BEGIN promotion -->
						<div class="promotion bg-black-transparent-8">
							<div class="promotion-image text-right">
								<img src="https://i.pinimg.com/originals/85/92/db/8592dbcd917f657977b5c76b71e05d70.jpg" style="opacity: 0.2;" alt="" />
							</div>
							<div class="promotion-caption promotion-caption-inverse">
								<h4 class="promotion-title">Berita Terkini</h4>
								<div class="promotion-price">Informasi seputar keramik dan perkemabngannya..</div>
								{{-- <p class="promotion-desc">make your home as luxurious as the palace of the kings.</p> --}}
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

			let counter = 0;
			const arr = ['estilo-1.png','estilo-2.png','estilo-3.png','estilo-4.png']
			const gold = ['golden-1.png','golden-2.png','golden-3.png','golden-4.png']
			const istambul = ['istambul-1.png','istambul-2.png','istambul-3.png','istambul-4.png']
			setInterval(function(){
				counter++;
				if(counter > 3){counter = 0;}
				$('.estillo-slade').html(`<img src="../src/img/product/${arr[counter]}" alt="" class="animate__animated animate__fadeIn"/>`);
			},4000)
			setInterval(function(){
				counter++;
				if(counter > 3){counter = 0;}
				$('.simple-slide').html(`<img src="../src/img/product/${istambul[counter]}" alt=""  style="opacity: 0.5"/>`);
			},3000)
			setInterval(function(){
				counter++;
				if(counter > 3){counter = 0;}
				$('.golden-slide').html(`<img src="../src/img/product/${gold[counter]}" alt="" class="animate__animated animate__fadeIn"/>`);
			},2000)
			
		})
	</script>
@endpush		