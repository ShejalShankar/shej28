
<form action="modify.php" method="get">
         Id:<br> <input type="text" name="id">
         <br>
		 <input type="submit">
      </form>
	  <body>
	  <h2>Enter new values</h2>
	  <h4>Enter the new phone details</h4>
         Id:<br> <input type="text" name="id">
         <br>
	  <h4>Enter the new name</h4>
	  <form  action="modify.php" method="get">
         Field:<br> <input type="text" name="name1">
         <br>
		 <h4>Enter the new phone details</h4>
         Field:<br> <input type="text" name="phone">
         <br>
		 <h4>Enter the new mail details</h4>
         Field:<br> <input type="text" name="email">
         <br>
		 <h4>Enter the new location details</h4>
         Field:<br> <input type="text" name="loc">
         <br>
		 <h4>Enter the new password details</h4>
         Field:<br> <input type="text" name="Password">
         <br>
		 <input type="submit" name="edit">
      </form>

	
<?php
$handle=fopen("Customer1.txt","a+");
if(isset($_GET['edit'])) {
   while (!feof($handle) ) {
       $line = fgets($handle);
       $a = explode('|', $line); 

       if($_GET['id'] = $a[0]) { 
	        $cid=$_GET['id'];
			echo "$cid";
	   }
   }
}
            


?>
	  

	
