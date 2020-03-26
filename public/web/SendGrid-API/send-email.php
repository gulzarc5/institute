<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = $_POST['name'];
$email = $_POST['email'];
$messager = $_POST['message'];
$email_1="angshumanb73@gmail.com";
/*Content*/

$html = '<h1>Detail</h1>
 		<h3>Name: '.$name.'<h3>
		<h3>Email: '.$email.'<h3>

<h3>Message:</h3>
	<p>'.$messager.'</p>';
$froms = new SendGrid\Email($name, $email);
$subject = "Query";
$to = new SendGrid\Email("CareerOn", $email_1);
 $content = new SendGrid\Content("text/html",$html);

/*Send the mail*/
$mail = new SendGrid\Mail($froms, $subject, $to, $content);
$apiKey = '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';
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail);
if( $response) {
header('Location: ../../index.php');
        }else{           
            header('Location: ../../index.php');
        }
?>

<!--Print the response-->
<pre>
    <?php
    var_dump($response);

    ?>
</pre>
