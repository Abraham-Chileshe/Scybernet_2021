<?php
$year = "2022";
$global_dots;

function navigation($dot){
  $global_dots = $dot;
  echo '
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="hedder-up">
      <h1><a class="navbar-brand" href="index.html">Scyber <span class="w3-text-white fab fa-staylinked"></span></a></h1>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="'.$dot.'index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a href="'.$dot.'Lessons/index.php" class="nav-link">Lessons</a>
        </li>
        <li class="nav-item">
          <a href="'.$dot.'Experiments/index.php" class="nav-link">Experiments</a>
        </li>
        <li class="nav-item">
          <a href="'.$dot.'Quiz/Quiz.html" class="nav-link">Quiz</a>
        </li>
        <li class="nav-item">
          <a href="'.$dot.'Papers/index.php" class="nav-link ">Papers</a>
        </li>
        <li class="nav-item">
          <a href="'.$dot.'Motivation/index.php" class="nav-link ">Motivation</a>
        </li> 
         <li class="nav-item">
          <a href="'.$dot.'Laws/index.php" class="nav-link ">Laws/Facts</a>
        </li>
        <li class="nav-item">
         <a style="color:white" href="'.$dot.'Bookstore/index.php"  class="nav-link " id="portal">Bookstore</a>
        </li>
        <li class="nav-item">
          <a href="'.$dot.'About/index.php" class="nav-link l">About</a>
        </li>
      </ul>

    </div>
  </nav>';
}

?>