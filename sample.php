<?php 

//require '../../connect.php'; 

//require '../../user.php'; 

//require './PHPMailer/src/PHPMailer.php';

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require './PHPMailer/src/Exception.php';

require './PHPMailer/src/PHPMailer.php';

require './PHPMailer/src/SMTP.php';

//$id=$_SESSION['id'];

//echo $id; 

//$enquiry_id=$_SESSION['enquiry_id'];  echo $enquiry_id;

/* $candidateid=$_SESSION['candidateid'];

$userrole=$_SESSION['userrole'];

$deatsils=$con->query("SELECT e.id,e.company_name,e.client,e.mail,e.created_by,zud.full_name FROM enquiry e

JOIN z_user_master zud ON zud.candidate_id=e.created_by WHERE e.created_by='$candidateid'");

*/

/* SELECT e.id,e.date,e.company_name,e.client,e.mail, zud.full_name,zud.candidate_id FROM `enquiry` e join z_user_master zud on e.mail=zud.user_name where e.created_by='candidateid' AND e.id='id'"); */

/*	$data=$deatsils->fetch();

	$enquiry_id=$data['id'];

//	$candidate_id=$data['candidate_id']; 

	$client=$data['client'];

	$full_name=$data['full_name'];

	$company_name=$data['company_name'];

	$candidateid=$_SESSION['candidateid']; 

*/

  $client="client";

  $full_name="full_name";

  $candidateid="1";

//$date=$_REQUEST['date'];

$mail = new PHPMailer;

$mail->SMTPDebug = 2; 

$mail->Mailer = "smtp";

$mail->IsSMTP(true); 

$mail->Port = 587;

$mail->Host = 'mail2.ssinfo1rmation.in';                                    // Set mailer to use SMTP

$mail->SMTPAuth = true;                               // Enable SMTP authentication

$mail->Username = 'test2@ssinfo1rmation.in';                 // SMTP username

$mail->Password = 'gA952Hfj3K';                           // SMTP password

$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->SMTPOptions = [



    'ssl' => [



        'verify_peer' => false,



        'verify_peer_name' => false,



	'allow_self_singed' => true,



    ]



];



$mail->From = 'test2@ssinfo1rmation.in';

$mail->FromName = 'Enquiry Alert..';

$mail->AddAddress('subramanian.r@bluebase.in');		//Adds a "To" address

//$mail->addAddress("laxmipriya@bluebase.in");     // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->isHTML(true);                                 // Set email format to HTML

$subject="Enquiry Created..";			

/* $deatsil=$con->query("SELECT e.id,e.date,e.company_name,e.client,e.mail, zud.full_name,zud.candidate_id FROM `enquiry` e join z_user_master zud on e.mail=zud.user_name where e.created_by='candidateid' AND e.id='id'");

	$datas=$deatsil->fetch();

	$enquiry_id=$datas['id'];

	$candidate_id=$datas['candidate_id']; echo $candidate_id;

	$client=$datas['client']; echo $client;

	$full_name=$datas['full_name']; echo $full_name;

	$company_name=$datas['company_name']; echo $company_name;

	$candidateid=$_SESSION['candidateid']; echo $candidateid;

	 */

	$html_table = "Dear&nbsp;&nbsp; '.$client.' ,  <br> <br>

		&nbsp;&nbsp;	This Mail regarding your enquiry, Your enquiry created successfully..!";

		

	$html_table .=' </table>';

	$html_table .=' <h4>Thanks & Regards,</h4><br>

	'.$full_name.',

	<p>SS Information </p>';

	$mail->Subject =$subject;

	$mail->Body =$html_table;

	



 if($candidateid=='')

{

	$candidateid=0;//admin

}



 /* for($i=0;$i<$feedback_count;$i++)

{



$feedbacks= $feedback[$i];

$dates= $date[$i];

  $sql1=$con->query("insert into `feedback_enquiry_crm`(`enquiry_id`, `Feedback`, `feedback_date`, `created_by`)  values('$id','$feedbacks','$dates','$candidateid')");  





} */

if(!$mail->send()) {

    echo 'Message could not be sent.';

    echo 'Mailer Error: ' . $mail->ErrorInfo;

	//echo "0";

} 

else {

    echo 'Message has been sent';

	//echo "1";

	

}



?>

