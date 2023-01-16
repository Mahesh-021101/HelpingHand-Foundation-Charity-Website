<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment-Gateway</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
   
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


    <section class="contact">
        <div class="contact-box">
            <div class="container2">
            <form action="index.php" method="POST" class="order">
                <div class="contact-label">Message </div>
                <textarea name="message" rows="5" style="width: 420px"
                placeholder="Your message for us!" class="input-responsive" required></textarea>
                <br><br>
                <div class="contact-label">Full Name</div>
                <input type="text" name="full-name" style="width: 420px" placeholder="E.g. Mahesh Boopathy" class="input-responsive" required>

                <br><br>
                <div class="contact-label">Email</div>
                <input type="email" name="email" style="width: 420px" placeholder="E.g. abc@gmail.com" class="input-responsive" required>
                
                <br><br>
                <input type="submit" name="submit" value="Submit"class="btn btn-primary">
            </form>
            </div>
        </div>
    </section>
</body>