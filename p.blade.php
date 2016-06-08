<?php
   ob_start();
   session_start();
?>
   <?php
            $msg = '';
            
            if ( !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'buet' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'buet';
                  
                  echo 'You have entered valid use name and password';
			
               }else {
                  $msg = 'Wrong username or password';
		 header("location:fin1.php");
               }
            }
	   else {
                  $msg = 'Wrong username or password';
		 header("location:fin1.php");
              }

 ?>
