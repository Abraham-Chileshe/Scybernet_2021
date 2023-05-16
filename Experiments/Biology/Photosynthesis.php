<?php
  include "../../includes/admin_posts.php";
  include "../../includes/meta_data.php";
  include "../../includes/header.php";
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Scybernet | Photosynthesis Activity</title>
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
          <h3 class="title mb-2">Plants</h3>
          <div class="big-title"><span>P</span></div>
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
        <a id="Quiz" href="#PRO" class="col-lg-4 col-md-4 col-sm-12">Procedure</a>
        <a id="Quiz2" href="#QUE" class="col-lg-4 col-md-4 col-sm-12">Question</a>
        <a id="Quiz" href="#VID" class="col-lg-4 col-md-4 col-sm-12">Video</a>         
       </div>
      </center>
      
        </div>
   
     <!--//LESSON NAVIGATION-->
 

   
      <div class="container">
        <h3 style="font-family:fantasy"><center>Photosynthesis Activity</center></h3>
        <br/>
        <p>
          <b>AIM</b>: To determine whether photosynthesis has taken place, the leaves of plants are tested for starch.<br/>
          
          <br/><br/>
          <h5 class="w3-teal pt-2 pb-2 pl-3 pr-3"><b>The steps involved in testing a leaf for starch are:</b></h5>
          <p class="mt-2">
           <ol>
            <li><p>Boil the leaf in water (to kill the protoplasm and make it permeable to Iodine solution)</p></li>
            <li><p>Boil the leaf in alcohol using a water bath. This is to extract the chlorophyll so that it does not interfere with colour changes; a water bath is used because alcohol is highly flammable. However the alcohol also makes the leaf brittle.</p></li>
            <li><p> Place the leaf in warm water to soften it.</p></li>
            <li><p>Spread the leaf on a white tile and add a few drops of Iodine solution this is to test for starch. If the Iodine solution turns blue-black, starch is present and if it remains yellowish brown, starch is absent.</p></li>
          </ol>
        </p><br/><br/>  


        <h5 class="w3-green pt-2 pb-2 pl-3 pr-3"><b>Experiment to show that Carbon Dioxide is necessary for Photosynthesis:</b></h5>
          <p class="mt-2">
           <ol>
            <li><p>Destarch a well-watered potted plant by placing it in the dark for at least 24 hours. During this time, all the starch present in the potted plant is used up.</p></li>
            <li><p>Set up the experiment as shown in the following diagram:<br/><center><img src="img/setup.jpg" style="max-width:100%; width:500px"></center></p></li>
            <li><p class="mt-2">Place the potted plant in sunlight for 4-6 hours.</p></li>
            <li><p>Test leaves A and B for starch</p></li>
          </ol>
          <p><u><b>Observation:</b></u> Leaf A turns blue-black (showing the presence of starch), while leaf B turns yellowish brown (showing the absence of starch). This shows that carbon dioxide is necessary for photosynthesis.</p>
        </p><br/>
        <iframe width="100%" height="415" src="https://www.youtube.com/embed/Sc4efTPQpL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br/><br/>



        <h5 class="w3-lime pt-2 pb-2 pl-3 pr-3"><b>Experiment to show that light is necessary for Photosynthesis</b></h5>
          <p class="mt-2">
           <ol>
            <li><p>Destarch a well-watered potted plant by placing it in the dark for at least 24 hours. During this time, all the starch present in the potted plant is used up.</p></li>
            <li><p>Set up the experiment as shown in the following diagram:<br/><center><img src="img/setup2.jpg" style="max-width:100%; width:350px"></center></p></li>
            <li><p class="mt-2">Place the potted plant in sunlight for 4-6 hours. While the plant is in sunlight, draw the selected leaf showing the exposed parts and the covered parts.</p></li>
            <li><p>Test parts A (exposed part) and B (covered part) for starch</p></li>
          </ol>
          <p><u><b>Observation:</b></u>Part A turns blue-black (showing the presence of starch), while part B turns yellowish brown (showing the absence of starch). This shows that light is necessary for photosynthesis.</p>
        </p><br/>
        <iframe width="100%" height="415" src="https://www.youtube.com/embed/YtvyFOvbgu8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     
        <br/>
        <br/>  


         <h5 class="w3-yellow pt-2 pb-2 pl-3 pr-3"><b>Experiment to show that Chlorophyll is necessary for Photosynthesis</b></h5>
          <p class="mt-2">
           <ol>
            <li><p><p>Destarch a well-watered potted plant which has variegated leaves by placing it in the dark for at least 24 hours. During this time, all the starch present in the potted plant is used up.</p></p>
            <li><p>Place the potted plant in sunlight for 4-6 hours. While the plant is in sunlight, draw a selected leaf showing the green parts and the white parts so that they can easily be identified even after chlorophyll has been removed from the leaf. Label the green parts as A and the white parts as B.</p></li>
            <li><p>Test the parts A (green part) and B (white part/ yellow) for starch.</p></li>
          </ol>
          <p><u><b>Observation:</b></u>Part A turns blue-black (showing the presence of starch), while part B turns yellowish brown (showing the absence of starch). This shows that chlorophyll is necessary for photosynthesis.</p>
        </p><br/>  
           
        <iframe width="100%" height="415" src="https://www.youtube.com/embed/_bg32xXpfxQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  

          </div>
    </section>

    <section class="container">
       </section>
	
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