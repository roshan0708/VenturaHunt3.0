<?php 
session_start();
include 'connections.php';
include 'includes/header.php'; 
$title="Hunt Arena!";
?>

<section>
  <div class="bg-img bg-overlay wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/bg-img/bg12.jpg);">
    <div class="container-fluid p-4" style="height:80px">
      <h3 class="appearHead" style="text-align:center;color:white"></h3>
  </div>
  <div class="container-fluid p-3">

<div id="wrapper">

        <!-- Sidebar -->
          <div id="sidebar-wrapper">
            <div id="spy">
              <ul class="sidebar-nav nav">
                  <!-- <li class="sidebar-brand">
                      <p class="fa fa-anchor solo"> Levels </p>
                  </li> -->
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 1 </span>
                      </a>
                  </li>
                  <li>
                      <a class="listItems" href="#anch2" data-scroll>
                          <span class="">Level - 2 </span>
                      </a>
                  </li>
                  <li>
                      <a class="listItems" href="#anch3" data-scroll>
                          <span class=>Level - 3 </span>
                      </a>
                  </li>
                  <li>
                      <a class="listItems" href="#anch4" data-scroll>
                          <span class="">Level - 4 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 5 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 6 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 7 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 8 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 9 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 10 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 11 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 12 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 13 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 14 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 15 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 16 </span>
                      </a>
                  </li>
                  <li>
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 17 </span>
                      </a>
                  </li>
                  <li style="margin-right:1rem">
                      <a  class="listItems" href="#anch1" data-scroll>
                          <span class="">Level - 18 </span>
                      </a>
                  </li>
              </ul>
            </div>
          </div>
          <div class="wrapperContent">
              <div class="imageQues"></div>
            <div  class="answerBox">
            <input type="text" name="" placeholder="Enter Your answer here...">
            </div>
            <div  id="answerbutton" >
        <button class=" btn btn-raised  btn-dark" style="color:#fff">Answer</button>
      </div>
      <div id="hintButton">
<button class="btn btn-raised  btn-dark" >Hint</button>
      </div>
    </div>
        </div>
    <!-- -->
</div>
  </div>
</section>


<?php
include 'includes/footer.php'
 ?>