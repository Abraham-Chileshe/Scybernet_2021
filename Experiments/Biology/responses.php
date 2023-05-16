<?php
  include "../../includes/admin_posts.php";
  include "../../includes/meta_data.php";
  include "../../includes/header.php";
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Scybernet | Tropic & Taxic Responses</title>
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
          <h3 class="title mb-2">Responses</h3>
          <div class="big-title"><span>R</span></div>
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
        <h3 style="font-family:fantasy"><center>Response Activity</center></h3>
        <br/>
        
                    
          <br/>
          <h5 class="w3-purple pt-2 pb-2 pl-3 pr-3"><b>Experiment to Investigate the Effect of Light on Growth of Maize Coleoptiles </b></h5>
          
          <p class="mt-3"> <font class="w3-text-purple"><u>Materials:</u></font>Maize seedlings, cardboard box with a hole on one side and two tins.
          </p>
          <p class="mt-2">
            <font class="w3-text-purple"><u>Method</u>:</font>
           <ol>
            <li><p>Select seedlings with straight coleoptiles and place them in two separate tins. </p></li>
            <li><p>Place one tin of seedlings in the box with a hole on one side and put the box in the sunlight.</p></li>
            <li><p>Leave the other tin of seedlings in sunlight to act as a control. </p><br/>
            <li><p>Observe and record what happens after four days</p></li>
          </ol>

             <font class="w3-text-purple"><u>Observation: </u></font>
            <p>The coleoptiles placed in the box with a hole on one side grow towards the source/direction of
                light; those placed in sunlight continue growing straight upward as illustrated by the following
                diagram:</p>
            <br/>
            <center><img class="mt-2" src="img/coleo.jpg" style="width:650px; max-width:95%"><br/></center>
            <center><img class="mt-4" src="img/coleo1.jpg" style="width:650px; max-width:95%"><br/></center>
            <center><img class="mt-4" src="img/coleo2.jpg" style="width:250px; max-width:95%"><br/></center>
            
             <font class="w3-text-teal"><u>Conclusion</u></font>
            <p>Plant shoots are positively phototropic</p>

        </p><br/><br/>  
</div>
</div>
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