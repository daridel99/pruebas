<?php
   $respuestas = array(
       "si",
       "no",
       "talvez",
       "sabra la madre de mandraque"
       );
   $random = array_rand($respuestas);
   echo $respuestas[$random];
?>