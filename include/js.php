<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!-- revolution slider plugin -->

<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

 <script type="text/javascript">

  var revapi;

  jQuery(document).ready(function() {

       revapi = jQuery('.tp-banner').revolution({

        dottedOverlay:"none",
        delay:9000,
        startwidth:1170,
        startheight:700,
        hideThumbs:200,
        
        thumbWidth:100,
        thumbHeight:50,
        thumbAmount:5,
        
        navigationType:"none",
        navigationArrows:"solo",
        navigationStyle:"",
        
        touchenabled:"on",
        onHoverStop:"on",
        
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,           
                    
        keyboardNavigation:"on",
        
        navigationHAlign:"center",
        navigationVAlign:"bottom",
        navigationHOffset:0,
        navigationVOffset:20,

        soloArrowLeftHalign:"left",
        soloArrowLeftValign:"center",
        soloArrowLeftHOffset:20,
        soloArrowLeftVOffset:0,

        soloArrowRightHalign:"right",
        soloArrowRightValign:"center",
        soloArrowRightHOffset:20,
        soloArrowRightVOffset:0,
            
        shadow:0,
        fullWidth:"on",
        fullScreen:"off",

        spinner:"spinner0",
        
        stopLoop:"off",
        stopAfterLoops:-1,
        stopAtSlide:-1,

        shuffle:"off",
                            
        forceFullWidth:"off",           
        fullScreenAlignForce:"off",           
        minFullScreenHeight:"400",            
                    
        hideThumbsOnMobile:"off",
        hideNavDelayOnMobile:1500,            
        hideBulletsOnMobile:"off",
        hideArrowsOnMobile:"off",
        hideThumbsUnderResolution:0,
        
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        startWithSlide:0,
        fullScreenOffsetContainer: ""

      });

  }); //ready

</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
var owl = $('.carousel-multiple');
owl.owlCarousel({
    items:5,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:false
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
 <script type="text/javascript">
              	$(document).ready(function(){
				  $(".click").click(function(){
				    $(".togg").toggle();
				  });

				   $(".click").click(function(){
				    $(".click1").show();
				     $(".click").hide();

				  });

				   $(".click1").click(function(){
				    $(".togg").toggle();
				  });
				});

				 $(".clickbtaa").click(function(){
				    $('.addadd').toggle();
				  });
				


				 $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

</script>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("stickys");
  } else {
    header.classList.remove("stickys");
  }
}
</script>


<script type="text/javascript">
    

    jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error

var owl = $('.owl-carousel');
owl.owlCarousel({
items:3,
loop:true, //HERE YOU ARE SAYING I WANT THE INFINITE LOOP
margin:0,
autoplay:true,
autoplayTimeout:1000,
autoplayHoverPause:true,
nav:false,
dots:false
});
$('.play').on('click',function(){
owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
owl.trigger('stop.owl.autoplay')
})
});
</script>