<?php

echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="d-flex justify-content-between>

      <div class="p-2"><h3 class="navbar-brand">' . $_SESSION['given_name'] . " " . $_SESSION['family_name'] . '</h3></div>
    <div class="p-2"><a  href="logout.php"><button class="btn btn-outline-success my-2 my-sm-0" >logout</button></a></div>
    
    
    </div>
   

  </nav>';
