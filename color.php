<?php 


if(isset($_POST["a"])) {

  $cl1 = $_POST['cl1'];
  $cl2 = $_POST['cl2'];
  $mix = $cl1+$cl2;
  
  if ($mix == 4){
    echo ("Mixing red and yellow will get you ORANGE");
  }
  else if ($mix == 7){
    echo ("Mixing red and violet will get you RED-VIOLET");
  }
  else if ($mix == 10){
    echo ("Mixing red and orange will get you RED-ORANGE");
  }
  else if ($mix == 8){
    echo ("Mixing blue and yellow will get you GREEN");
  }
  else if ($mix == 11){
    echo ("Mixing blue and violet will get you BLUE-VIOLET");
  }
  else if ($mix == 14){
    echo ("Mixing blue and orange will get you YELLOW-GREEN");
  }
  else if ($mix == 13){
    echo ("Mixing green and yellow will get you YELLOW-GREEN");
  }
  else if ($mix == 16){
    echo ("Mixing green and violet will get you BLUE");
  }
  else if ($mix == 19){
    echo ("Mixing green and orange will get you YELLOW");
  }
  
  else {
    echo ("select more colors!");
  }
    

  

}



      // if(isset($_POST["a"])) {
      //   $n = $_POST['n'];
      //   $n2 = $_POST['n2'];
      //   $add = $n+$n2;
      //   $add = "green"
      //   echo "Addition Is " ;
      // }
    ?>