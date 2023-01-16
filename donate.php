<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment-Gateway</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style3.css">
   
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

        <div class="container1">

            <form method="POST" action="checkout.php">
                
        
                <div class="row">
        
                    <div class="col">
        
                        <h3 class="title">Billing Address</h3>
        
                        <div class="inputBox">
                            <span>Full name :</span>
                            <input type="text" name="Full_name" placeholder="Mahesh Boopathy" required>
                        </div>
                        <div class="inputBox">
                            <span>Email :</span>
                            <input type="email" name="Email" placeholder="example@example.com" required>
                        </div>
                        <div class="inputBox">
                            <span>Address :</span>
                            <input type="text" name="Address" placeholder="Door No;Area;Landmark;" required>
                        </div>
                        <div class="inputBox">
                            <span>City :</span>
                            <input type="text" name=" City" placeholder="Coimbatore" required>
                        </div>
        
                        <div class="flex">
                            <div class="inputBox">
                                <span>Country :</span>
                                <input type="text" name="Country" placeholder="India" required>
                            </div>
                            <div class="inputBox">
                                <span>Zip code :</span>
                                <input type="text" name="Zip" placeholder="123 456" required>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col">
        
                        <h3 class="title">PAYMENT</h3>
        
                        <div class="inputBox">
                            <span>Payment Method Accepted :</span>
                            <img src="card_img.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>Amount :</span>
                            <input type="text" name="Amount" placeholder="INR" required>
                        </div>
                        <div class="inputBox">
                            <span>Name on Card :</span>
                            <input type="text" placeholder="Mahesh Boopathy M" required>
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                            <span>Card number :</span>
                            <input type="text" placeholder="1111-2222-3333-4444" required>
                        </div>
                        <div class="inputBox">
                            <span>Exp month :</span>
                            <input type="text" placeholder="January" required>
                        </div>
                        </div>
                        
        
                        <div class="flex">
                            
                            <div class="inputBox">
                                <span>Exp year :</span>
                                <input type="number" placeholder="2023" required>
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="text" placeholder="123" required>
                            </div>
                        </div>
        
                    </div>
            
                </div>
        
                
                <input type="submit" value="proceed to checkout" class="submit-btn">
                
        
            </form>
        
        </div> 

</body>