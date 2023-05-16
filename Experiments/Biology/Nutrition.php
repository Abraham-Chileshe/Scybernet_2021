<?php
  include "../../includes/admin_posts.php";
  include "../../includes/meta_data.php";
  include "../../includes/header.php";
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Scybernet | Nutrition Activity</title>
    <!--meta tags -->
    <?php
      meta_Data("../../");
    ?>
     <link rel="stylesheet" href="../css/Experiments.css">
    <!--//meta tags -->
 </head>
  <body>

    <!--nav bar -->
    <div class="header-outs" id="header">
      <div class="header-w3layouts">
        <div class="container-fluid">
          <?php 
            navigation("../../");
          ?>
          <div class="clearfix"> </div>
        </div>
      </div>
      <!--nav bar -->

      <!-- Slideshow 4 -->
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider4">
            <li>
              <div class="slider-img one-img">
                <div class="container">
                  <div class="slider-info text-center">
                    <h4>Experiments</h4>
                    <p>Experience the best academic activities on our website. Enjoy Free Lesson tutorials, Online quiz, guided experiments....</p>
                    <div class="outs_more-buttn">
                      <a href="#" data-toggle="modal" data-target="#exampleModalLive">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="slider-img two-img">
                <div class="container">
                  <div class="slider-info text-center">
                    <h4>Reactions</h4>
                    <p>Experience the best academic activities on our website. Enjoy Free Lesson tutorials, Online quiz, guided experiments....</p>
                    <div class="outs_more-buttn">
                      <a href="#" data-toggle="modal" data-target="#exampleModalLive">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="slider-img three-img">
                <div class="container">
                  <div class="slider-info text-center">
                    <h4>Laboratory</h4>
                    <p>Experience the best academic activities on our website. Enjoy Free Lesson tutorials, Online quiz, guided experiments....</p>
                    <div class="outs_more-buttn">
                      <a href="#" data-toggle="modal" data-target="#exampleModalLive">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- This is here just to demonstrate the callbacks -->
        <!-- <ul class="events">
          <li>Example 4 callback events</li>
          </ul>-->
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- About-one -->
    <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
          <h3 class="title mb-2">Nutrition</h3>
          <div class="big-title"><span>N</span></div>
          <div class="line-w3ls-title text-center mb-md-4 mb-sm-3 mb-3"></div>
          <p>An experiment is a procedure carried out to support, refute or validate a Hypothesis. A hypothesis is a proposed explanation for a phenomenon.</p><br/>
       
       <div style="max-width:100%">
          <center>
          <img src="../images/Experiments/lab.jpg" style=" width:25%; max-height:12em">
          <img src="../images/Experiments/math1.jpg"  style="width:30%; max-height:12em">
          <img src="../images/Experiments/cups.jpg"  style="width:25%;  max-height:12em">
          </center>
        </div><br>
        <center>
      <div  class="row" style="width:100%">
        <a id="Quiz" href="#Iodine" class="col-lg-3 col-md-3 col-sm-12">Iodine</a>
        <a id="Quiz2" href="#Benedict" class="col-lg-3 col-md-3 col-sm-12">Benedict</a>
        <a id="Quiz" href="#Biuret" class="col-lg-3 col-md-3 col-sm-12">Biuret</a>  
        <a id="Quiz2" href="#Lipids" class="col-lg-3 col-md-3 col-sm-12">Lipids</a>       
       </div>
      </center>
      
        </div>
   
     <!--//LESSON NAVIGATION-->
 

   
      <div class="container">
        <h3 style="font-family:fantasy"><center>Nutrients in food samples.</center></h3>
        <br/>
        <p>
          <b>AIM</b>: Investigating the presence of nutrients in food samples.<br/>

          <br/><br/>
          <h4 id="Iodine" class="w3-teal pt-2 pb-2 p-2 pr-2">Iodine Test (<i>Starch</i>)</h4>
          <p class="mt-3">
           <b>(i)If the sample is in solid /powder form</b>
           <ol>
            <li><p>Place a small amount of sample on a white tile</p></li>
            <li><p>Add 2 drops of iodine solution to the sample; then observe and record what happens.</p></li>
          </ol>
            <b>(ii) If the sample is in solution/suspension form</b>
            <ol>
              <li><p>Place 2 cm<sup>3</sup> of sample solution into a clean and dry test tube.</p></li>
              <li><p>Add 2 drops of iodine solution to the test tube and shake;</p></li>
              <li><p>Then observe and record what happens.</p></li>
              <li><p>The possible observations and corresponding conclusions are given in the table below:</p></li>
            </ol>
        </p><br/>  
        <center><p><i>The possible observations and corresponding conclusions are given in the table below:</i></p></center>

        <table cellpadding="2" class="mt-3" cellspacing="2" width="100%">
          <tr>     
            <td style="color:black; border:2px solid black;padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Observation</td>
            <td style=" color:black; border:2px solid black; padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Conclusion</td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Solution remains yellowish-brown<p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Starch absent</p></center></td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Solution turns blue-black</p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Starch present</p></center></td>
          </tr>
        </table><br/><br/>
          

        <h4 id="Benedict" class="mt-4 w3-orange w3-text-white pt-2 pb-2 p-2 pr-2" id="">Benedict Test (<i>Reducing Sugars</i>)</h4>
         <p class="mt-2">
            This test requires the sample to be in solution form and may be performed on suspensions. If the sample is in solid form, it will first need to be ground /crushed/cut into very small pieces and to be shaken with distilled water for extraction of reducing sugars if they are present. Filter and then proceed with the following test method on the filtrate:
            <ol>
              <li><p>Place 2 cm<sup>3</sup> of sample solution into a clean and dry test tube.</p></li>
              <li><p> Add 2 cm<sup>3</sup>/an equal volume of Benedict’s solution to the sample solution and shake.</p></li>
              <li><p>Gently heat the mixture using a water bath; then observe and record what happens.</p></li>
            </ol>
         </p>
           <center><p><i>The possible observations and corresponding conclusions are given in the table below:</i></p></center>

         <table cellpadding="2" class="mt-3" cellspacing="2" width="100%">
          <tr>     
            <td style="color:black; border:2px solid black;padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Observation</td>
            <td style=" color:black; border:2px solid black; padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Conclusion</td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Solution remains blue</p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Reducing sugars absent</p></center></td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Solution turns green/yellow/orange/brick red</p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Reducing sugars present</p></center></td>
          </tr>
        </table><br/>
        <p class="w3-orange pt-2 pb-2 pl-2 pr-2 w3-text-white">*Only state the final colour observed and not all the colours mentioned in the table. The extent of the colour change indicates the quantity of reducing sugars present i.e. green and yellow colours indicate that little/traces/small amounts of reducing sugars are present, orange indicates that reducing sugars are present and brick red indicates high concentrations of reducing sugars present.</p>
          <br/> <br/>         


        <h4 id="Biuret" class="mt-4 w3-blue pt-2 pb-2 p-2 pr-2" id="">Biuret Test (<i>Proteins</i>)</h4>
         <p class="mt-2">
            This test also works best for solutions and suspensions. Extraction by grinding and shaking with distilled water is therefore necessary where samples are in solid form. The filtrate will then be tested as follows:
            <ol>
                <li><p>Place 2 cm<sup>3</sup> of sample solution into a clean and dry test tube.</p></li>
                <li><p>Either add 5 drops of sodium hydroxide solution to the sample solution followed by a 2 drops of copper (II) sulphate solution, drop by drop, shaking and observing after each drop.</p></li>
                <li><p>Or add an equal volume of Biuret solution; then observe and record what happens.</p></li>
            </ol>
         </p>
           <center><p><i>The possible observations and corresponding conclusions are given in the table below:</i></p></center>


            <table cellpadding="2" class="mt-3" cellspacing="2" width="100%">
          <tr>     
            <td style="color:black; border:2px solid black;padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Observation</td>
            <td style=" color:black; border:2px solid black; padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Conclusion</td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Solution remains blue</p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Proteins absent</p></center></td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Solution turns purple/violet</p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Proteins present</p></center></td>
          </tr>
        </table><br/><br/><br/>



        <h4 id="Lipids" class="w3-dark-grey w3-text-white pt-2 pb-2 p-2 pr-2">Testing for Lipids (<i>Fats & Oils</i>)</h4>
          <p class="mt-3">
           <b>(i) The Emulsion Test</b>
           <ol>
            <li><p>Shake a small sample/a drop of sample solution with 2 cm<sup>3</sup> absolute ethanol in a test tube.</p></li>
            <li><p>Add a few drops of distilled water to the test tube; then observe and record what happens.</p></li>
          </ol>
             <center><p><i>The possible observations and corresponding conclusions are given in the table below:</i></p></center>
           <center><table cellpadding="2" class="mt-3" cellspacing="2" width="700px" max-width="100%">
          <tr>     
            <td style="color:black; border:2px solid black;padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Observation</td>
            <td style=" color:black; border:2px solid black; padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Conclusion</td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Solution remains clear<p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Fats/oils absent</p></center></td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Emulsion formed/solution turns cloudy</p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Fats/oils present</p></center></td>
          </tr>
        </table></center><br/>

            <b>(ii) The Grease Spot Test.</b>
            <ol>
              <li><p>Place a drop of sample/sample solution on filter paper or brown paper.</p></li>
              <li><p>Place a drop of distilled water next to the drop of the sample.</p></li>
              <li><p>Hold the paper against light until the drop of water disappears; then observe and record what happens to the sample spot.</p></li>
            
            </ol>
        </p>
        <center><p><i>The possible observations and corresponding conclusions are given in the table below:</i></p></center>
         <center><table cellpadding="2" class="mt-3" cellspacing="2" width="700px" max-width="100%">
          <tr>     
            <td style="color:black; border:2px solid black;padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Observation</td>
            <td style=" color:black; border:2px solid black; padding-top:0.5em; padding-bottom:1em;" align="center" bgcolor="">Conclusion</td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Sample spot disappears<p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Fats/oils absent</p></center></td>
          </tr>
          <tr>
            <td style="margin-left:10px; margin-right:10px; border:2px solid black; padding:10px 4px;"><center><p>Permanent translucent/oily/greasy spot formed</p></center></td>
            <td style="margin-left:6px; margin-right:6px;  border:2px solid black; padding:10px 4px;"><center><p>Fats/oils present</p></center></td>
          </tr>
        </table></center><br/>
        

      </div>
    
    </section>


	
	<section class="container" id="vid">
		<iframe width="100%" height="415" src="https://www.youtube.com/embed/13H1urX3gxI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <iframe width="100%" height="415" src="https://www.youtube.com/embed/sLP8dcnWnJg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </section><br/><hr/>

     <center><p style="color:silver"><i> "You don't fail until you stop trying"</i></p></center><br/>
	      
    <a style="font-size:20px " href="../../index.php">
     <div class="homebtn">
      <center>
        <span><i class="fa fa-home"></i></span>
      </center>
     </div>
   </a>
    <!--//contact -->

    <!-- footer -->
      <?php 
      
        include "../../includes/footer.php"; 
        include "../../includes/js_data.php"; 
        js_data("../../");
      ?>
    <!-- //footer -->

  
  </body>
</html>