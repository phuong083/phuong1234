<?php
/*$cString = "Chào tất cả mọi người - Đây sẽ là một tiêu đề rất dài, rất dài đấy, dài lắm lắm lắm cơ"; // Temporary string   
$iChar = "100"; // Max number of character(s) for cutting 
$iOutput = "85"; // Max number of character(s) for the output 
if(strlen($cString) > $iChar) 
{ 
   $cOutput = mb_substr($cString, 0, $iOutput, "UTF-8"); 
   /*while(substr($cOutput, -1) != " ") 
   { 
      $cOutput = substr($cOutput, 0, strlen($cOutput)-1); 
   } 
   $cOutput = $cOutput." ...";
} 
echo $cOutput."...";*/
$string = "demo: cho 1 vd... Mình có 1 tiêu đề mẫu tin trên 20 ký tự..., vậy mình muốn khi xuất dữ liệu từ mysql ra ngoài thì cái 'tiêu đề mẫu tin' đó ko dc hiển thị trên 10 ký tự mà chỉ dc đúng 10 thôi... demo 2: qwe qwe qwe qwe qwe qwe qwe qwe ==> qwe qwe qw ... ho 1 vd... Mình có 1 tiêu đề mẫu tin trên 20 ký tự..., vậy mình muốn khi xuất dữ liệu từ mysql ra ngoài thì cái 'tiêu đề mẫu tin' đó ko dc hiển thị trên 10 ký tự mà chỉ dc đúng 10 thôi... ...";
$dem=strlen($string);
echo $dem;
?>