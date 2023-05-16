            addEventListener("load", function () {
          setTimeout(hideURLbar, 0);
        }, false);
            
        function hideURLbar() {
          window.scrollTo(0, 1);
        } 
        function And(){
          alert("Scybernet Android Application not available");
          }
        window.onload = () => {
          let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
          bannerNode.parentNode.removeChild(bannerNode);
        }
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-138949097-1');

          $(document).ready(function(){
              jQuery('img').each(function(){
              jQuery(this).attr('src',jQuery(this).attr('src')+'?'+(new Date()).getTime());
              });
          });


