<?php


  function readMore($string) {

    if (strlen($string) > 1000) {
          $stringCut = substr($string, 0, 500);
          $endPoint = strrpos($stringCut, ' ');
          $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
       //    $string .= '... <a style="cursor: pointer; " class="submit"  href="post.php?id=http" > Detay</a>';
      }
      echo $string;
   }
   
