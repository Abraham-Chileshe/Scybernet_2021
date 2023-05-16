<?php
  include "../includes/admin_posts.php";
  include "../includes/meta_data.php";
  include "../includes/header.php";
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Scybernet | About</title>
    <!--meta tags -->
    <?php
      meta_Data("../");
    ?>
     <link rel="stylesheet" href="css/About.css">
    <!--//meta tags -->
 </head>
  <body>

    <!--nav bar -->
    <div class="header-outs" id="header">
      <div class="header-w3layouts">
        <div class="container-fluid">
          <?php 
            navigation("../");
          ?>
          <div class="clearfix"> </div>
        </div>
      </div>
      <!--nav bar -->

      <!-- Slideshow -->
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider4">
            <li>
              <div class="slider-img one-img">
                <div class="container">
                  <div class="slider-info text-center">
                    <h4 >About</h4>
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
                    <h4>Developers</h4>
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
                    <h4>Contact Us</h4>
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
        <!-- SlideShow -->

      </div>
      <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- About-one -->
    <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <div class="title-sub text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
          <h3 class="title mb-2"> About</h3>
          <div class="big-title"><span>A</span>
        </div>
          <div class="line-w3ls-title text-center mb-md-4 mb-sm-3 mb-3"></div>
          <p><b>Our aim</b> is to create an easier way of studying and <b>Our vision</b> is to help build a better future for generations to come. Our Motto is <b>"Dreaming Big"</b>. We Provide Lessons in Mathematics, Chemistry, Biology and Physics.</p>
        </div>

        <div style="max-width:100%">
          <center>
          <img src="images/Quiz/astro1.jpg" alt="Label1" style=" width:25%; max-height:12em">
          <img src="images/Quiz/bulb.jpg" alt="Label3"  style="width:30%; max-height:12em">
          <img src="images/Quiz/inventors.jpg"  alt="Label3"  style="width:25%; max-height:12em">
          </center>
        </div><br>
      

      </div>

    </section>


    <div class="container member-section">
      <div class="container">
        <div class="member-head">
            <h3>Our Team</h3>
             <p><?php echo $year; //variable in meta_Data.php file ?> Board Members</p>
             </div><Br/>
            <div class="row members">

             <div class="w3-card-12 shadow mb-4 col-md-3 member-grids">
                <a href="images/m1.jpg"> <img class="w3-round-corners w3-hover-opacity" style="margin-top:2em" alt="developer" src="images/m1.jpg" class="img-responsive" alt="" /></a>
                <h6>Abraham Chileshe
                  <a href="https://www.facebook.com/abram.chileshe.7"><span style="margin-left:5px;"><i class="fab fa-facebook"></i></span></a>
                </h6>

                <h5 class="w3-blue">President/Team Leader</h5>
                <p style="color:#fff;">Abraham Chileshe is the Lead developer and also the President of Scybernet.</p><br/>
              </div>

               <div class="w3-card-12 shadow mb-4 col-md-3 member-grids">
                <a href="#"> <img style="margin-top:2em" alt="developer" src="images/not.jpg" class="img-responsive" alt="" /></a>
                <h6>.........
                  <a href=""><span style="margin-left:5px;"><i class="fab fa-facebook"></i></span></a>
                </h6>

                <h5 class="w3-blue">Position</h5>
                <p style="color:#fff;">...<br/>..<br/>...<br/>..<br/></p><br/>
              </div>

               <div class="w3-card-12 shadow mb-4 col-md-3 member-grids">
                <a href="#"> <img style="margin-top:2em" alt="developer" src="images/not.jpg" class="img-responsive" alt="" /></a>
                <h6>.........
                  <a href=""><span style="margin-left:5px;"><i class="fab fa-facebook"></i></span></a>
                </h6>

                <h5 class="w3-blue">Position</h5>
                <p style="color:#fff;">...<br/>..<br/>...<br/>..<br/></p><br/>
              </div>


               <div class="w3-card-12 shadow mb-4 col-md-3 member-grids">
                <a href="#"> <img style="margin-top:2em" alt="developer" src="images/not.jpg" class="img-responsive" alt="" /></a>
                <h6>.........
                  <a href=""><span style="margin-left:5px;"><i class="fab fa-facebook"></i></span></a>
                </h6>

                <h5 class="w3-blue">Position</h5>
                <p style="color:#fff;">...<br/>..<br/>...<br/>..<br/></p><br/>
              </div>
              <div class="clearfix"> </div>
             </div>
          </div>
      </div>
    </div>

    <div class="container">
      <img src="images/1.jpg" alt="Scybernet text Logo" class="rounded" style="margin-top:2em; margin-bottom:2em; width:100%">
    </div>
	
	<!--LOGO DESIGNERS-->
   <div class="container member-section">
      <div class="container">
        <div class="member-head">
           <h4 style="font-family:'times new roman'">Acknowledgement</h4>
             <p>Thank you!</p>
             </div>
                <p>Scybernet Team would like to give thanks to Abdul Moiz for the perfect designing of the Scybernet Logo. With his skill in adobe illustrator, he was able to design a beautiful logo that is now our official logo.
                <p>Scybernet Team would also like to acknowledge Md Sajib Biswas for the perfect designing of the Scybernet Cover Logo. He was able to design a beautiful logo that is now our official Cover logo.
          
		        <center><br/>
            <div style="background-color:black; width:100%">
                <div class="col-sm-12 col-lg-3 col-md-3 col-xl-3">
                <img class="rounded" src="images/scyber.png" alt="Logo" style="margin-top:3em; margin-bottom:3em; padding:9px 10px; width:100%">
              </div>
            </div>
          </center>

      </div>
	</div>
	<!--LOGO DESIGNERS-->
	  
	  <!--Teacher Acknowledgment-->
	<div class="container mt-4 member-section">
      <div class=" container">
        <div class="member-head">
            <h4 class="w3-text-blue" style="font-family:'times new roman'">Our Teacher</h4>
             <p>We would also like to acknowledge the following teachers for making the learning of Chemistry, Physics, Biology and mathematics possible; <b>Mr. Mbene</b>, <b>Mr. Banda</b>, <b>Mr. Sakala</b>, <b>Mrs. Mubanga</b>, <b>Mr. Ng'ambi</b>, <b>Mr Chabala</b>.</p>
             </div>
       
          </div>
      </div>
      
    </div>
	<!--Teacher Acknowledgment-->
	  
    <div style="background-color:white" class="container member-section">
      <div class="container">
        <div class="member-head">
            <h4 class="w3-text-blue" style="font-family:'times new roman'">What's Scybernet?</h4>
             <p>Scybernet info</p>
             </div>
            <p>Scybernet is a Zambian educational platform created in 2018 by Abraham Chileshe, with the goal of creating a set of online learning and educational tools that help educate students. The Platform produces short lessons in text and video form. It includes Examination Council of Zambia (ECZ) questions in each lesson. It also has sections for downloading Books (Zambian and some international) and past papers. It also has a search page called <b>Scybersearch</b> and a discussion forum called <b>Scyberforum</b>.
             </p>
               <div style="margin-top:1em; background-color:black; width:100%">
                <div>
                <img src="images/zambia.jpg" alt="Logo" style="padding:9px 10px; width:100%">
              </div>
            </div>
          </center>
          </div>
      </div>
    </div>

    <div class="container member-section">
      <div class=" container">
        <div class="member-head">
           <h4 class="w3-text-blue" style="font-family:'times new roman'">Why Scybernet?</h4>
             <p>Reason</p>
             </div>
             <p>Because Scybernet has almost everything in one place. Our website is such that When you want to read a certain topic in any of the subjects, each lesson will have it's own documentation (written text) and below that documentation there will be a video which will be attached to that same topic you are reading about. In addition, below that same video there will be some Examination question from different E.C.Z past papers which will be based on the same topic you are reading. In summary scybernet will merge Lessons, Videos and Question to give readers a better understanding.
            <br/>
			<img src="images/why.jpg" alt="banner" style="padding:9px 10px; width:100%">
      </div>
    </div>
      
        <div style="background-color:white" class="container member-section">
      <div class=" container">
        <div class="member-head">
           <h4 class="w3-text-blue" style="font-family:'times new roman'">Our Strategy</h4>
             <p>scybernet info</p>
             </div>
            <p> Our strategy is to make learning easier for students. We know people say that in classes there are two categories of learners. The <b>Fast</b> learners and the <b>Slow</b> learners. But we believe that there is no such thing as a slow learner and fast learner. The brain of every human being is the same in terms of data consumption. The only thing that differenciate the learners is that the so called slow learners don't adapt to new information due to boredom, laziness and lack of creativity. That's why our strategy is to build the creativity and logic in every student's brain.

              <center><img src="images/logic.jpg" alt="banner" style="width:700px; max-width:100%" ></center>
           
             </p>
          </div>
      </div>
    </div>

        <div class="container member-section">
          <div class=" container">
            <div class="member-head">
                <h4 class="w3-text-blue" style="font-family:'times new roman'">Our Mission</h4>
                <p>Mission statement</p>
                </div>
                <p>Our mission is to provide high quality education and empower every student to build their imagination; creativity and logic thinking which will help them solve current and future problems.</p><br/>
            </div><br/>
          </div>
        </div>

        <div style="background-color:white" class="container member-section">
         <div  class="container">
            <div class="member-head">
            <h4 style="font-family:'times new roman'">Our Vision</h4>
             <p>Vision statement</p>
             </div>
             <p>Our vision is to develop well confident and responsible students who will put in their all to unlock their greatest potential. This will be achieved by providing a stimulating learning environment which will help discover their interest and grow in their love for learning.</p><br/>   
            </div>
          </div>
        </div>      
</div>

    <div>  
      <center>
        <img class="container w3-card-4" src="images/learn.jpg" alt="banner" style="padding:9px 10px; width:100%">
      </center>  
	  </div><br/><hr/>

    <!--Details and Contacts-->
    <section class="container" style="width:100%">
        <div style="width:100%" class="row contact-right">
          <div class="col-lg-4 col-md-5 footer_grid_left text-center">
            <div class="contact_footer_grid_left text-center mb-3">
              <span class="fas fa-map-marker-alt"></span>
            </div>
            <p> Tafuna Drive st, B5:01<br> Ndeke, Kitwe Zambia</p>
          </div>
          <div class="col-lg-4 col-md-3 footer_grid_left text-center">
            <div class="contact_footer_grid_left text-center mb-3">
              <span class="fas fa-phone-volume"></span>
            </div>
            <p>+260962510753<br>+260976888507</p>
          </div>
          <div class="col-lg-4 col-md-4 footer_grid_left text-center">
            <div class="contact_footer_grid_left text-center mb-3">
              <span class="fas fa-at"></span>
            </div>
            <p><a href="mailto:achileshe21@gmail.com">achileshe21@gmail.com</a> 
              <br><a href="mailto:scifly08@gmail.com">scifly08@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section><br/><Br/>
    <!--//Details and Contacts-->

    <center><p style="color:silver"><i>Knowledge is Power</i></p></center><br/>


    <a style="font-size:20px " href="../index.php">
     <div class="homebtn">
      <center>
        <span><i class="fa fa-home"></i></span>
      </center>
     </div>
   </a>
    <!--//contact -->

    <!-- footer -->
      <?php 
      
        include "../includes/footer.php"; 
        include "../includes/js_data.php"; 
        js_data("../");
      ?>
    <!-- //footer -->
    
  </body>
</html>