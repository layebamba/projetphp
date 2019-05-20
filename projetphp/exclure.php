<?php     
 $code = $_GET['code'];
 echo $code;

 $modif = "";
 $monfic = fopen('liste.txt', 'r');
 while ($str = fgets($monfic)) {
     $b= explode(',', $str);

     if ($b[0] == $code) {
        if (($b[7]=="inscris") || ($b[7]=="inscris\n")) {
            $b[7]="exclure";
         }
          else {
            $b[7]="inscris";
         }
         
        //if (($b[7]=="inscris\n" && $b[0]==$code) || ($b[7]=="inscris" && $b[0]==$code)){
            
             echo $b[7];
         $ligne=$b[0].','.$b[1].','.$b[2].','.$b[3].','.$b[4].','.$b[5].','.$b[6].','.$b[7]."\n";
        //}else{
        // $ligne=$b[0].','.$b[1].','.$b[2].','.$b[3].','.$b[4].','.$b[5].','.$b[6].','.$b[7]."\n";
       // }
      } 
      else{
     $ligne=$str;
      }

      $modif=$modif.$ligne;
 }
 fclose($monfic);
 
 $monfic = fopen('liste.txt', 'w+');
 fwrite($monfic,$modif);
 fclose($monfic);
 header("location:liste.php");




?>