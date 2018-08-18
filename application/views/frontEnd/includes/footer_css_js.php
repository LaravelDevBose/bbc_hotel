
		<script>
			var revapi1,
				tpj=jQuery;

			tpj(document).ready(function() {
				if(tpj("#rev_slider_1_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_1_1");
				}else{
					revapi1 = tpj("#rev_slider_1_1").show().revolution({
						sliderType:"standard",
						//jsFileLocation:"//localhost/wpmu/greek/wp-content/plugins/revslider/public/assets/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
			 							mouseScrollReverse:"default",
							onHoverStop:"off",
							arrows: {
								style:"zeus",
								enable:true,
								hide_onmobile:false,
								hide_onleave:false,
								tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
									v_offset:0
								}
							}
						},
						visibilityLevels:[1240,1024,778,480],
						gridwidth:1240,
						gridheight:890,
						lazyType:"none",
						scrolleffect: {
							fade:"on",
							blur:"on",
							maxblur:"100",
							on_slidebg:"on",
							on_parallax_layers:"on",
							direction:"top",
						},
						parallax: {
							type:"scroll",
							origo:"enterpoint",
							speed:400,
							speedbg:0,
							speedls:0,
							levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
						},
						shadow:0,
						spinner:"spinner0",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
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



		<script src="<?= base_url();?>libs/frontEnd/js/src/plugins/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?= base_url();?>/libs/backEnd/js/bootstrap-select.js"></script>
		<script src="<?= base_url();?>libs/frontEnd/modules/slick/slick.min.js"></script>
		<script src="<?= base_url();?>libs/frontEnd/js/src/plugins/jquery-migrate-1.4.1.min.js"></script>
		<script src="<?= base_url();?>libs/frontEnd/modules/rellax-master/rellax.min.js"></script>
		<script src="<?= base_url();?>libs/frontEnd/modules/Magnific-Popup/jquery.magnific-popup.js"></script>
		
		<script src="<?= base_url();?>libs/frontEnd/modules/jquery-datepicker/jquery-ui.min.js"></script>
		<!--Easy paginate script -->
	  <script src="<?= base_url();?>libs/frontEnd/modules/easyPaginate/jquery.easyPaginate.js"></script>
		<!-- Main template script -->
		<script src="<?= base_url();?>libs/frontEnd/js/src/script.js"></script>