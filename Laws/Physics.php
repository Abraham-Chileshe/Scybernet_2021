<?php
  include "../includes/admin_posts.php";
  include "../includes/meta_data.php";
  include "../includes/header.php";
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Scybernet | Physics :: Laws and Theories</title>
    <!--meta tags -->
    <?php
      meta_Data("../");
    ?>
     <link rel="stylesheet" href="css/Laws.css">
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

      <!-- Slideshow 4 -->
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider4">
            <li>
              <div class="slider-img one-img">
                <div class="container">
                  <div class="slider-info text-center">
                    <h4 >Physics</h4>
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
                    <h4>Laws</h4>
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
                    <h4>Formula</h4>
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
          <h3 class="title mb-2"> About</h3>
          <div class="big-title"><span>A</span>
        </div>
          <div class="line-w3ls-title text-center mb-md-4 mb-sm-3 mb-3"></div>
          <p><b>Our aim</b> is to create a more easier way of studying and <b>Our vision</b> is to help build a better future for generations to come. Our Motto is <b>"Dreaming Big"</b>. We Provide Lessons in Mathematics, Chemistry, Biology and Physics.</p>
        </div>
      <!--LESSON NAVIGATION-->

        <div style="max-width:100%">
          <center>
          <img src="images/Quiz/Astro1.jpg" style=" width:25%; max-height:12em">
          <img src="images/Quiz/bulb.jpg"  style="width:30%; max-height:12em">
          <img src="images/Quiz/inventors.jpg"  style="width:25%; max-height:12em">
          </center>
        </div><br/>


          <center>
          <div class="row" style="width:100%">
            
            <a id="Quiz" href="index.php" class="col-lg-4 col-md-4 col-sm-12"><span><i class="fa fa-arrow-left"></i></span></a>
            <a id="Quiz" href="#Law" class="col-lg-4 col-md-4 col-sm-12">Laws</a>
            <a id="Quiz" href="#Form" class="col-lg-4 col-md-4 col-sm-12">Formula</a>
            
                     
           </div>
           </center><br>
    <!--//LESSON NAVIGATION-->
      
      </div>
      </section>
      
      <div class="container">
        <img src="img/elements.jpg" style="width:100%">
      </div>
      <section id="Laws">
        <div class="container">
        <div style="background-color:black; color:white" class="Acronyms">
          <h2 id="Law" style="font-family:broadway">Physics Laws</h2>
          </div><br/>

          <div class="whitesmoke">
            <center>
				<p> Table Below shows different laws which you need to master in Physics.</p><br/>
			</center>
		  </div>
			<table cellpadding="2" cellspacing="2" width="100%">
				<tr>
				<td style="font-family:broadway; color:darkorange" bgcolor="black"><center>Law</center></td>
                    <td style="font-family:broadway; color:darkorange" bgcolor="black"><center>States that</center></td>
				</tr>
				
				<tr>
				<td style="padding:25px 9px"><p class="Lefter">Ampere's law</p></td>
				<td style="padding:25px 9px"><p class="righter" style="margin-left:8px;">The magnetic field created by an electric current is proportional to the size of that electric current with a constant of proportionality equal to the permeability of free space.</p> </td>
				</tr>
				
				
				<tr>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="Lefter"><br/>Archimedes Principle</p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="righter" style="margin-left:8px;">The upward buoyancy or upthrust force exerted on an object immersed in a fluid, either fully or partially submerged is equal to the wait of the water that it displaces.</p>  </td>
				</tr>
				
				<tr>
				<td style="padding:25px 9px"><p class="Lefter">Avogadro's Hypothesis</p></td>
				<td style="padding:25px 9px"><p class="righter" style="margin-left:8px;">One mole of every gas will occupy the same volume at the same temperature and pressure.</p> </td>
				</tr>
				
								
				<tr>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="Lefter">Bernoulli's Principle</p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="righter" style="margin-left:8px;">When the speed of the fluid increases, its pressure reduces and vice-versa.</p>  </td>
				</tr>
				
				<tr>
				<td style="padding:25px 9px"><p class="Lefter">Boyle's law.</p></td>
				<td style="padding:25px 9px"><p class="righter" style="margin-left:8px;">For a fixed mass of a gas, volume is inversely proportional to pressure provided that temperature remains constant.</p>  </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="Lefter">Brownian Motion</p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="righter" style="margin-left:8px;">This is the random movement of microscopic particles suspended in a fluid, caused by them colliding with the surrounding media.</p>  </td>
				</tr>
				
				<tr>
				<td style="padding:25px 9px"><p class="Lefter">Coulomb's law</p></td>
				<td style="padding:25px 9px"><p class="righter" style="margin-left:8px;">The force of attraction or repulsion between two charged bodies is directly proportional to the product of their charges and inversely proportional to the square of the distance between them. It acts along the line joining the two charges considered to be point charges.</p> </td>
				</tr>
				
											
				<tr>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="Lefter">Hooke's Law</p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="righter" style="margin-left:8px;">The extension of a spring is directly proportional to the stretching force provided that the elastic limit is not exceeded.</p>  </td>
				</tr>
				
					<tr>
				<td style="padding:25px 9px"><p class="Lefter">Law of Flotation</p></td>
				<td style="padding:25px 9px"><p class="righter" style="margin-left:8px;">If an object is floating freely in a fluid, its weight is equal to the weight of the fluid it displaces.</p>  </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="Lefter">Law of Conservation of Energy</p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="righter" style="margin-left:8px;">Energy can neither be created nor destroyed but transformed from one form to another.</p>  </td>
				</tr>
				
				<tr>
				<td style="padding:25px 9px"><p class="Lefter">Law of Conservation of Mass</p></td>
				<td style="padding:25px 9px"><p class="righter" style="margin-left:8px;">Mass can neither be created nor destroyed but transformed from one form to another.</p>  </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="Lefter">Law of Conservation of Momentum</p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="righter" style="margin-left:8px;">When two or more bodies are involved in an impact such as a collision, their total momentum remains constant provided that no external force acts on the.</p>  </td>
				</tr>
			
				<tr>
				<td style="padding:25px 9px"><p class="Lefter">Newton's First law of motion</p></td>
				<td style="padding:25px 9px"><p  class="righter"style="margin-left:8px;">An object in motion will remain in motion and an object at rest will remain at rest provided that no external force acts on it to change its state of motion. <i>Law of inertia</i>.</p>  </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="Lefter">Newton's Second law of motion</p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="righter" style="margin-left:8px;">For a force applied to a body, the body will always accelerate in the direction in which the force acts.</p>  </td>
				</tr>
				
				<tr>
				<td style="padding:25px 9px"><p class="Lefter">Newton's Second law of motion according to momentum</p></td>
				<td style="padding:25px 9px"><p class="righter" style="margin-left:8px;">The rate of change of momentum is directly proportional to the external force and it takes place in the direction in which the force acts.</p>  </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="Lefter">Newton's third law of motion</p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="righter" style="margin-left:8px;">For every action force, there is an equal but opposite reaction force.</p>  </td>
				</tr>
				
				<tr>
				<td style="padding:25px 9px"><p class="Lefter">Ohms Law.</p></td>
				<td style="padding:25px 9px"><p class="righter" style="margin-left:8px;">The current passing through a metallic conductor is directly proportional to the potential difference across its ends provided that temperature remains constant.</p>  </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="Lefter">Pascals'Law<p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p class="righter" style="margin-left:8px;">The pressure exerted in a confined incompressible fluid is transmitted equally through the fluid provided that the pressure ratio remains constant..</p> </td>
				</tr>
				
				
				<tr>
				<td style="padding:25px 9px"><p class="Lefter">Snell's law</p></td>
				<td style="padding:25px 9px"><p class="righter" style="margin-left:8px;">For two particular mediums, the sine of the angle or incidence to the sine of the angle of refraction gives a constant value.</p>  </td>
				</tr>
											
				
				
			</table>
			<br/>
			
		<div style="background-color:black; color:white" class="Acronyms">
          <h2 id="Form" style="font-family:broadway">Physics Formula</h2>
         </div><br/>
                
        <div class="whitesmoke">
            <center>
				<p> Table Below shows different formulae which you need to master in Physics.</p><br/>
			</center>
		  </div>
			
<table cellpadding="2" cellspacing="2" width="100%">
				<tr>
                    	<td style="font-family:broadway; color:orangered" bgcolor="black"><center>Name</center></td>
                    <td style="font-family:broadway; color:orangered" bgcolor="black"><center>Formula</center></td>
    </tr>
    
            <tr>
				<td style="padding:9px 12px; border-bottom:2px solid black; border-right:2px solid black; border-left:2px solid black" ><center>Acceleration</center></td>
                <td  style="padding:20px 20px; border-bottom:2px solid black; border-right:2px solid black; "><center><img src="Physics/acceleration.jpg" style="width:150px"></center></td>
				</tr>
    
                <tr>
				<td style="padding:9px 12px; border-bottom:2px solid black; border-right:2px solid black; border-left:2px solid black" ><center>Force</center></td>
                <td  style="padding:20px 20px; border-bottom:2px solid black; border-right:2px solid black; "><center><img src="Physics/force.jpg" style="width:125px"></center></td>
				</tr>

              <tr>
				<td style="padding:9px 12px; border-bottom:2px solid black; border-right:2px solid black; border-left:2px solid black" ><center>Velocity</center></td>
                <td  style="padding:20px 20px; border-bottom:2px solid black; border-right:2px solid black; "><center><img src="Physics/velocity.jpg" style="width:125px"></center></td>
				</tr>
        
                <tr>
				<td style="padding:9px 12px; border-bottom:2px solid black; border-right:2px solid black; border-left:2px solid black" ><center>Velocity</center></td>
                <td  style="padding:20px 20px; border-bottom:2px solid black; border-right:2px solid black; "><center><img src="Physics/velocity1.jpg" style="width:125px"></center></td>
				</tr>
    
        <tr>
				  <td style="padding:9px 12px; border-bottom:2px solid black; border-right:2px solid black; border-left:2px solid black" ><center>Velocity</center></td>
          <td  style="padding:20px 20px; border-bottom:2px solid black; border-right:2px solid black; "><center><img src="Physics/velocity2.jpg" style="width:125px"></center></td>
				</tr>


        <tr>
          <td style="padding:9px 12px; border-bottom:2px solid black; border-right:2px solid black; border-left:2px solid black" ><center>Velocity</center></td>
          <td  style="padding:20px 20px; border-bottom:2px solid black; border-right:2px solid black; "><center><img src="Physics/velocity3.jpg" style="width:195px"></center></td>
        </tr>
    
        <tr>
				  <td style="padding:9px 12px; border-bottom:2px solid black; border-right:2px solid black; border-left:2px solid black" ><center>Weight</center></td>
            <td  style="padding:20px 20px; border-bottom:2px solid black; border-right:2px solid black; "><center><img src="Physics/weight.jpg" style="width:125px"></center></td>
				</tr>



        </table></div>
 
 
     <center><p style="color:silver"><i> "Creativity & Imagination are what build up perfection"</i></p></center><br/>  

      
   <!--//contact -->
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
</html