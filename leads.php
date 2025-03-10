<?php

// echo "<pre>";
// var_dump($_POST);
// var_dump($_POST['floating_first_name']);
// var_dump($_POST['floating_email']);
// var_dump($_POST['floating_phone']);
// if(isset($_POST) && isset($_POST['floating_first_name']) && $_POST['floating_first_name']!='' && isset($_POST['floating_email']) && $_POST['floating_email']!='' && isset($_POST['floating_phone']) && $_POST['floating_phone']!=''){
// 	echo 'hello';
// }
// die();

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die();

if(isset($_POST) && isset($_POST['floating_first_name']) && $_POST['floating_first_name']!='' && isset($_POST['floating_email']) && $_POST['floating_email']!='' && isset($_POST['floating_phone']) && $_POST['floating_phone']!=''){

	$first_name = (isset($_POST['floating_first_name']) && $_POST['floating_first_name']!='') ? $_POST['floating_first_name'] : '';
	$last_name = (isset($_POST['floating_last_name']) && $_POST['floating_last_name']!='') ? $_POST['floating_last_name'] : '';
	$email = (isset($_POST['floating_email']) && $_POST['floating_email']!='') ? $_POST['floating_email'] : '';
	$phone = (isset($_POST['floating_phone']) && $_POST['floating_phone']!='') ? $_POST['floating_phone'] : '';
	$business_name = (isset($_POST['business_name']) && $_POST['business_name']!='') ? $_POST['business_name'] : '';
	$registration_proof = (isset($_POST['registration_proof']) && $_POST['registration_proof']!='') ? $_POST['registration_proof'] : '';
	$monthly_sales = (isset($_POST['monthly_sales']) && $_POST['monthly_sales']!='') ? $_POST['monthly_sales'] : '';
	$business_year = (isset($_POST['business_year']) && $_POST['business_year']!='') ? $_POST['business_year'] : '';

	$utm_source = (isset($_POST['utm_source']) && $_POST['utm_source']!='') ? trim($_POST['utm_source']) : '';
	$utm_medium = (isset($_POST['utm_medium']) && $_POST['utm_medium']!='') ? trim($_POST['utm_medium']) : '';
	$utm_campaign = (isset($_POST['utm_campaign']) && $_POST['utm_campaign']!='') ? trim($_POST['utm_campaign']) : '';


	// Email settings
    $email_from = "info@zyzha.com";
    
    $email_subject = "Enquiry: Website";
    $email_body = "
        <h2>New Enquiry Received</h2>
        <p><strong>Name:</strong> {$first_name} {$last_name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Business Name:</strong> {$business_name}</p>
        <p><strong>Registration Proof:</strong> {$registration_proof}</p>
        <p><strong>Monthly Sales:</strong> {$monthly_sales}</p>
        <p><strong>Business Year:</strong> {$business_year}</p>
    ";

    //$to = "003animeshdey@gmail.com";
    $to = "info@zyzha.com";
    $headers = "From: Zyzha <$email_from>\r\n";
    $headers .= "Reply-To: $email_from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        //echo "Thank you! Your enquiry has been submitted successfully.";
        echo "<script language='javascript' type='text/javascript'> 
       
        window.location = '/thankyou';
        </script>";
    } else {
        echo "<script language='javascript' type='text/javascript'> 
        alert('Error: Unable to send email. Please try again later.')'
        window.location = 'https://zyzha.com/';
        </script>";
    }


}else{
	echo "<script language='javascript' type='text/javascript'>
		alert('Required fileds are not matched.');
		window.location = 'https://zyzha.com/';
	</script>";
}

?>