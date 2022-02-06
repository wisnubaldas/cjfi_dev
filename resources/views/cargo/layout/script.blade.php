
<!-- JavaScript files ========================================= -->
<script src="/cargo/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="/cargo/plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/cargo/plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="/cargo/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="/cargo/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="/cargo/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="/cargo/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="/cargo/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="/cargo/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="/cargo/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="/cargo/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="/cargo/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="/cargo/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="/cargo/js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="/cargo/js/dz.ajax.js"></script><!-- CONTACT JS  -->
<!-- REVOLUTI/cargo/ON JS FILES -->
<script src="/cargo/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/cargo/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider r/cargo/evolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="/cargo/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/cargo/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/cargo/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/cargo/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/cargo/plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/cargo/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/cargo/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/cargo/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/cargo/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script>
	var tpj=jQuery;
	
	var revapi1014;
	tpj(document).ready(function() {
		if(tpj("#rev_slider_1014_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_1014_1");
		}else{
			revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
				dottedOverlay:"none",
				delay:9000,
				startwidth:1200,
				startheight:750,
				hideThumbs:600,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
							style: "hermes",
							enable: true,
							hide_onmobile: false,
							hide_onleave: false,
							tmp: `<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">title</div>	</div>`,
							left: {
								h_align: "left",
								v_align: "center",
								h_offset: 0,
								v_offset: 0
							},
							right: {
								h_align: "right",
								v_align: "center",
								h_offset: 0,
								v_offset: 0
							}
						}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],

				lazyType:"none",
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "60px",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}


	});	/*ready*/
</script>
@stack('script')
