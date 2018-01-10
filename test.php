<?php
   session_start();
   
   if( isset( $_SESSION['counts'] ) )
   {
      $_SESSION['counts'] += 1;
   }
   else
   {
      $_SESSION['counts'] = 1;
   }
   $msg = "Bạn đã truy cập trang này ".  $_SESSION['counts'];
   $msg .= " lần trong session này.";
?>
<html>
   
   <head>
      <title>Thiết lập session trong PHP</title>
   </head>
   
   <body>
      <?php  echo ( $msg ); ?>
   </body>
   
</html>