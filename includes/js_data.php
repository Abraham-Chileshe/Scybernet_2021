<?php 

function js_data($dot){

    echo'
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9329045550635685"
     crossorigin="anonymous"></script>
     
    <script src="'.$dot.'js/jquery-2.2.3.min.js"></script>
    <script src="'.$dot.'js/lightbox-plus-jquery.min.js"> </script> 
    <script src="'.$dot.'js/responsiveslides.min.js"></script>
    <script>
      $(function () {
      	$("#slider4").responsiveSlides({
      		auto: true,
      		pager:false,
      		nav:true ,
      		speed: 900,
      		namespace: "callbacks",
      		before: function () {
      			$(".events").append("<li>before event fired.</li>");
      		},
      		after: function () {
      			$(".events").append("<li>after event fired.</li>");
      		}
      	});
      
      });
    </script>
	  
    <!--About OnScroll-Number-Increase-JavaScript -->
    <script src="'.$dot.'js/jquery.waypoints.min.js"></script>
    <script src="'.$dot.'js/jquery.countup.js"></script>
    <script>
      $(".counter").countUp();
    </script>


    <script src="'.$dot.'js/jquery.magnific-popup.js"></script>
    <script>
      $(document).ready(function() {
      $(".popup-with-zoom-anim").magnificPopup({
      type: "inline",
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: "auto",
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: "my-mfp-zoom-in"
      });
      
      });
    </script>



      <script src="'.$dot.'js/move-top.js"></script>
      <script src="'.$dot.'js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$("html,body").animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>

  
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: "toTop", // fading element id
         		containerHoverID: "toTopHover", // fading element hover id
         		scrollSpeed: 1100,
         		easingType: "linear"
         	};
         
         
         	$().UItoTop({
         		easingType: "easeOutQuart"
         	});
         
         });
      </script>

    <script src="'.$dot.'js/jquery.flexslider.js"></script>
    <script>
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $(".flexslider").flexslider({
        animation: "slide",
        start: function(slider){
          $("body").removeClass("loading");
        }
      });
    });

    </script>


    <script src="'.$dot.'js/bootstrap.min.js"></script>

    ';
}
?>