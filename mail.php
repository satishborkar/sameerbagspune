<?
  	$message = "<table>";
	
	$message .= "<tr><td>Name : </td><td>".$_POST[fullName]."</td></tr>";
  	$message .= "<tr><td>Email : </td><td>".$_POST[email]."</td></tr>";
	$message .= "<tr><td>Telephone : </td><td>".$_POST[phone]."</td></tr>";
	$message .= "<tr><td>Comment : </td><td>".$_POST[comment]."</td></tr>";
	$message .= "</table>";
	
  
	$to = "sameerbagspune@gmail.com";
  	$subject = "Sameer Bags And Printers Website Feedback";
  	 
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <borkarbhima@gmail.com>' . "\r\n";
	 

	$status = mail($to,$subject,$message,$headers);
	 

	//$status= mail($to, $subject, $message, $headers);
	 
	if($status)
	{
	header("Location:index.html?status=trye");
	}
	else
	{
	header("Location:index.html");
	}
	
  /* 	echo "
	 <tr>
         <td width='100%' colspan=3 valign='top'><br>
             <h1>";
             if($status){
                 echo "Thank you";
             }else{
                 echo "Sorry";
             }
             echo "</h1>
         </td>
     </tr>
	 <tr>
         <td width='100%' colspan=3 valign='top'><br><br><br><br>
             <p align='justify' style='text-align: justify'>";
             if($status){
                 echo "Your Query has been submitted successfully";
             }else{
                 echo "Fail to submit your query...! Please try again after some time";
             }
             echo "</p><br><br><br><br> 
         </td>
		 </tr>
		 <tr>
         <td width='100%' colspan=3 valign='top'><br><br>
		 	<form name = 'sad' action='clearcart.php' method='post'>
				<input type='submit' value='Back to Store'>
			</form>
			</td>
     </tr>";*/
?>
