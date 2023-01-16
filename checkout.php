<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/SMTP.php';




// Initialize the session
session_start();
       
// Store the submitted data sent
// via POST method, stored 
  
// Temporarily in $_POST structure.
$_SESSION['Full_name'] = $_POST['Full_name'];
$_SESSION['Email'] = $_POST['Email'];
$_SESSION['Address'] = $_POST['Address'];
$_SESSION['City'] = $_POST['City'];
$_SESSION['Country'] = $_POST['Country'];
$_SESSION['Zip'] = $_POST['Zip'];
$_SESSION['Amount'] = $_POST['Amount']; 


$to_email = $_SESSION['Email'];
$subject = "Invoice for Donation to HelpingHand";
$body = "Thank you for your Contribution."."<br>"."<br>"." Please find attached the invoice to your donation."."<br>"."<br>"."
Name: " .$_SESSION['Full_name']."<br>"." Email: ".$_SESSION['Email']."<br>"." Address: " .$_SESSION['Address']."<br>"." City: " .$_SESSION['City']."<br>"."Country: " .$_SESSION['Country']."<br>"." Zip: " .$_SESSION['Zip']."<br>"."Donation Amount: ₹ " .$_SESSION['Amount']."<br>"."<br>"."Best Wishes"."<br>"."HelpingHand Foundation";


$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'maheshboopathy21101@gmail.com'; // email
$mail->Password = 'dllqiwcnbiqbhxgt'; // password
$mail->setFrom('maheshboopathy21101@gmail.com', 'Mahesh Boopathy'); // From email and name
$mail->addAddress($to_email, $_SESSION['Full_name']); // to email and name
$mail->Subject = $subject;
$mail->msgHTML("test body"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->Body = $body;
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
$mail->send();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment-Gateway</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style4.css">
   
</head>
<body>
    <section class="navbar"> 
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="Helping hand Logo" class="img-responsive"> 
            </div>

            <div class="menu">
                <ul>
                    <li> 
                    
                        <a href="index.php">Home</a>
                    </li>
                    <li> 
                        <a href="donate.php">Donate</a>
                    </li>
                    <li> 
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class= "clearfix"></div>
        </div>
    </section>
    <section>

        
        <div class="card">
            <div style="border-radius:50px; height:50px; width:50px; background: #F8FAF5; margin:0 auto;">
              <!-- <i class="checkmark">✓</i> -->
              <span style='font-size:38px; color: #88B04B;'>&#10003;</span>
            </div>
            <h1>Invoice</h1>
            <?php $hex = dechex(rand(0, 16777215));?>
            <p>Invoice No: <?php echo $hex ?> </p>
              <h5>Name: <p> <?php echo $_SESSION["Full_name"]  ?></p><br/>
              Email:<p> <?php echo $_SESSION["Email"]  ?></p><br/>
              Address: <p> <?php echo $_SESSION["Address"]  ?></p><br/>
              City: <p> <?php echo $_SESSION["City"]  ?></p><br/>
              Country: <p> <?php echo $_SESSION["Country"]  ?></p><br/>
              Zip code: <p> <?php echo $_SESSION["Zip"]  ?></p><br/>
              Donation: <p> ₹ <?php echo $_SESSION["Amount"]  ?></p></h5>
              <h1>Payment Successful</h1> 
              <p>Thank you for your Contribution!<br/> The Invoice has been sent to your mail</p>
            </div>
    </section>
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet"> -->
    </body>
</html>