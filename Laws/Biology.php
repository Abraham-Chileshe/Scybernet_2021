<?php
  include "../includes/admin_posts.php";
  include "../includes/meta_data.php";
  include "../includes/header.php";
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Scybernet | Biology :: Laws and Theories</title>
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
                    <h4 >Biology</h4>
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
                    <h4>Acronyms</h4>
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
            <a id="Quiz" href="#Laws" class="col-lg-4 col-md-4 col-sm-12">Acronyms</a>            
            <a id="Quiz" href="#Physics" class="col-lg-4 col-md-4 col-sm-12">Theories/Facts</a>
 
           </div>
           </center>
		   
    <!--//LESSON NAVIGATION-->
		
      </div>
	             
         <center><p style="color:silver"> <i>Knowledge is Power</i></center>
     <hr> 
      </section>
      
      <div class="container">
        <img src="img/ant.jpg" style="width:100%">
      </div>
      <section id="Laws">
        <div class="container">
        <div style="background-color:black; color:white" class="Acronyms">
          <h2 style="color:green; font-family:broadway">Word Meaning</h2>
          </div><br/>

          <div class="whitesmoke">
            <center>
				<p> Table Below shows different word meaning which you need to master in Biology.</p>
			</center>
		  </div>
			<table cellpadding="2" cellspacing="2" width="100%">
				<tr>
				<td style=" padding:10px 9px; font-family:broadway; color:lightgreen" bgcolor="black"><center>Word</center></td>
                <td style=" padding:10px 9px; font-family:broadway; color:lightgreen" bgcolor="black"><center>Meaning</center></td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Adaptation</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">Characteristic of organisms that improves its chance of surviving in its environment</p>  </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Tissue</p></td>
				<td bgcolor="#cccccc"  style="padding:25px 9px"><p style="margin-left:8px;">A group of cells with similar structures which work together to perform a specific function</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Diffusion</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The movement of particles from a region of a higher concentration to a region of a lower concentration, down a concentration gradient.</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc" style="color:green; padding:25px 15px"><p>Osmosis</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The net movement of water molecule from a solution of higher water potential to a solution of lower water potential, through a partially permeable membrane.</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Active Transport</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The process in which energy is used to move the particles of a substance across a membrane against its concentration gradient, from a region of lower concentration to a region of higher concentration.</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Hydrolysis</p></td>
				<td bgcolor="#cccccc" style=" padding:25px 9px"><p style="margin-left:8px;">A reaction in which a water molecule is needed to break up a complex molecule into its smaller molecules.</p> </td>
				</tr>
					
				<tr>
				<td style="color:green; padding:25px 9px"><p>Carbohydrates</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">Organic molecules made up of the elements, Carbon, Hydrogen and Oxygen. The hydrogen to oxygen atoms ratio is 2:1.</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Fats</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">Organic molecules made up of the elements carbon, hydrogen and oxygen. But unlike carbohydrates, fats contain much less oxygen in proportion to hydrogen.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Proteins</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">Organic molecule which is made up of the elements, carbon hydrogen and Nitrogen. Another element, Sulphur, may be also present.</p> </td>
				</tr>
					
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Catalyst</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">A substance that alters or speeds up a chemical reaction without itself taking part in that reaction or even being chemically changed at the end of the reaction.</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Enzyme</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">An enzyme is a biological catalyst, which is a protein in nature that speeds up a chemical reaction without itself being changed or taking part in the reaction.</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Denaturation</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The change in the three dimensional structure of an enzyme or any other soluble protein,caused by heat or chemicals such as acids or alkalis.</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Nutrition</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The process by which an organism obtains food and energy for growth, repair and maintenance of the body.</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Peristalsis</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The rhythmic, wave-like muscular concentration in the wall of the alimentary canal</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Digestion</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The process by which large food molecules are broken down into smaller, soluble molecules that can be absorbed into the blood cells (<i>Absorption</i>)</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Absorption</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The process whereby digested food substances are absorbed into the blood cell</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Assimilation</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The process whereby some of the absorbed food substances are converted into new protoplasm or used to provide energy</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Deamination</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The process by which amino groups are removed from amino acids and converted to urea</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Photosynthesis</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The process in which light energy absorbed by chlorophyll is transformed into chemical energy. The chemical energy is used to synthesis carbohydrates from water and carbon dioxide. Water and carbon dioxide are the raw materials for photosynthesis. Oxygen is released during this process.</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Phagocytosis</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The process of engulfing or ingesting foreign particles such as bacteria, by the white blood cells.</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Transpiration</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The loss of water vapour from a plant, mainly through the stomata of the leaves.</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Respiration</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The breakdown (<i>oxidation</i>) of food substances with the release of energy in living cells.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Aerobic respiration</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The breakdown of food substances in the presence of oxygen with the release of a large amount of energy. Carbon dioxide and water are released as waste products</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Anaerobic respiration</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The breakdown of food substances in the absence of oxygen with the release of less energy.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Gas exchange</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The exchange of gases between an organism and the environment</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Excretion</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">This is the removal of toxic substances from the body of an organism</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Osmoregulation</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The control of water and soluble concentration (levels) in the blood to maintain a constant potential in the body.</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Homeostasis</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">This is the maintenance of a constant internal environment</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Reflex action</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">An immediate response to a specific stimulus without conscious control</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Reflex arc</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">This is the path taken by an impulse during a reflex action.</p> </td>
				</tr>.
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Focusing</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The adjustment of the lens of the eye so that clear images at different distances are formed on the retina</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc"  style="color:green; padding:25px 9px"><p>Hormone</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">A chemical substance produced by the endocrine glands which is transported in the bloodstream to target organs where it exerts an effect and are eventually destroyed by the liver once they have performed their function.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Mitosis</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">A form of nuclear division that produces daughter nuclei containing the same number of chromosomes.</p> </td>
				</tr>
				
				<tr>
				<td  bgcolor="#cccccc"style="color:green; padding:25px 9px"><p>Meiosis</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">A form of nuclear division that produce daughter nuclei containing half the number of chromosomes as the parents.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Asexual Reproduction</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The process resulting in the production of genetically identical offspring from one parent, without the fusion of gametes.</p> </td>
				</tr>
				
				<tr>
				<td  bgcolor="#cccccc"style="color:green; padding:25px 9px"><p>Sexual Reproduction</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The fusion of two games to form a zygote. It produces genetically dissimilar offspring.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Pollination</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The transfer if pollen grains form the anther to the stigma.</p> </td>
				</tr>
				
				<tr>
				<td  bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Self-pollination</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The transfer of pollen grains from the anther to the stigma of the same flower or a different flower on the same plant</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Cross-pollination</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The transfer of pollen grains from one plant to the stigma of a flower in another plant of the same species</p> </td>
				</tr>				
				
				<tr>
				<td  bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Puberty</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The stage of human growth and development in which a person becomes physically mature.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Mono-hybrid inheritance</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">An inheritance involving only one pair of contrasting traits.</p> </td>
				</tr>
				
				<tr>
				<td  bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Chromosome</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">A thread-like structure in the nucleolus of a cell which is made up of deoxyribonucleic acid.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Gene</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">Is is a small segment of DNA in a chromosome that controls a particular characteristic or protein in an organisms.</p> </td>
				</tr>
				
				<tr>
				<td  bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Allele</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">These are genes that occupy the same position in a homologous chromosome and control the same characteristic.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Phenotype</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">This is the physical appearance of an organism.</p> </td>
				</tr>
				
				<tr>
				<td  bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Genotype</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The is the genetic constitution in an organism</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Multiple alleles</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">A term for a gene that exists in more than two alleles</p> </td>
				</tr>
				
				<tr>
				<td  bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Mutation</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">A sudden random change in the structure of a gene or in the chromosome number.</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Genetic engineering</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">A technique used to transfer genes from one organisms to another. Individual genes may be cut off from the cells of one organism and inserted into the cells of another organism of the same or different species. The transferred gene express itself in the recipient organism.</p> </td>
				</tr>
				
				<tr>
				<td  bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Habitat</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">A place where organisms live</p> </td>
				</tr>
				
				<tr>
				<td  style="color:green; padding:25px 9px"><p>Population</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">This refers to organisms of the same species occupying an area.</p> </td>
				</tr>
				
				<tr>
				<td  bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Community</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">This refers to organisms of different species that live together and interact with one another.</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Ecosystem</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">A natural unit made up of both Biotic and Abiotic factors</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Food Chain</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">A series of organisms through which energy is transferred in the form of food.</p> </td>
				</tr>
			
				<tr>
				<td style="color:green; padding:25px 9px"><p>Food web</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">A series of food chains or interconnection of food chains</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Carbon sink</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">An area that store carbon compound for an indefinite period. It store more carbon than it releases</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Pollution</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The addition of a substance to the environment that damage it, making it undesirable or unfit for life. Substances that cause pollution are called pollutants.</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Eutrophication</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The process where water receives excess nutrients like phosphate and nitrates, which causes excessive growth or algae and water</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p></p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;"></p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Bioaccumulation</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The process where certain chemicals like insecticides are not excreted, but are accumulated in the bodies of organisms</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Bioamplification</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The process where accumulated chemicals are passed along the food chain, increasing its concentration in the bodies of organisms along the trophic level</p> </td>
				</tr>
				
				<tr>
				<td bgcolor="#cccccc" style="color:green; padding:25px 9px"><p>Biodiversity</p></td>
				<td bgcolor="#cccccc" style="padding:25px 9px"><p style="margin-left:8px;">The range of species that are present in a particular ecosystem.</p> </td>
				</tr>
				
				<tr>
				<td style="color:green; padding:25px 9px"><p>Conservation</p></td>
				<td style="padding:25px 9px"><p style="margin-left:8px;">The protection and preservation of natural resources in the environment</p> </td>
				</tr>

			</table>
			<br/>
		<a class="w3-blue w3-text-white w3-hover-green w3-btn" href="Biology/Biology Definitions - Scybernet.pdf"> Download PDF Format (207KB)</a>
		<div style="background-color:black; color:white" class="Acronyms">
          <h2 style="font-family:broadway">Biology Formula</h2>
         </div><br/>


        
  </div>
      </section>
       
      
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
</html>