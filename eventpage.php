<?php
include("php/sessionHandler.php");
include("header/htmlheader.php");
?>

<body id="eventpage">

  <header>
    <a class="name" href="index.php">AsTronK</a>
    <ul class="navigation">
      <li><a class="ahref" href="#"><i class="fa fa-bars" style="font-size:23px;"></i></a>
        <ul>
          <li><a class="ahref" href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;<span>Home</span></a></li>
          <li><a class="ahref" href="#"><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>&nbsp;<span>Profile</span></a></li>
          <li><a class="ahref" href="php/logoutHandler.php"><i class="fa fa-sign-out-alt fa-fw" aria-hidden="true"></i>&nbsp;<span>Sign Out</span></a></li>
        </ul>
      </li>
    </ul>
  </header>



    <div class="row-mt-4" id="upcoming-events-row">
      <!-- Dynamic Content upcoming-events-row (JS) -->
    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="js/navigationscript.js"></script>
  <script type="text/javascript" language="javascript" src="js/eventscript.js"></script>


</body>

<footer></footer>

</html>