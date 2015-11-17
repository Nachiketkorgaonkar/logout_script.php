# Auto detect text files and perform LF normalization
* text=auto

# Custom for Visual Studio
*.cs     diff=csharp

# Standard to msysgit
*.doc	 diff=astextplain
*.DOC	 diff=astextplain
*.docx diff=astextplain
*.DOCX diff=astextplain
*.dot  diff=astextplain
*.DOT  diff=astextplain
*.pdf  diff=astextplain
*.PDF	 diff=astextplain
*.rtf	 diff=astextplain
*.RTF	 diff=astextplain
<?php

   session_start();
   unset($_SESSION["username"]);
   $msg="Please enter";
   unset($_SESSION["password"]);
   
  
   echo 'You have Logout Successfully';
   header('Refresh: 4; URL=login.php');
?>
