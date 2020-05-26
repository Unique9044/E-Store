<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ContactUs | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
     <div style="float:right;margin-right:300px"><img src="img/contact.png"></div> 
     <div style="margin-left:50px">  <h1>LIVE SUPPORT</h1>
    <div><h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
        <p>It is a long stablished fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem<br>lpsum is that it has amore-or-less normal distribution of letters.There are many variations of passages of Lorem lpsum available, but the majority<br>have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a<br>passage of Lorem lpsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
        
        </div> 
         </div> 
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row" >
                <div class="container">
                    <div Style="float:right;margin-right:100px">
                        <h2>Company Information:</h2><br>
                        <p>Awas Vikas No.1,<br>
                           Kalyanpur,Kanpur,<br>
                            India<br>
                            Phone:(+91)9044798562<br>
                            Fax:(000)2000 00 00 0<br>
                            Email:info@myestore.com<br>
                            Follow on:Facebook, Twitter
                        </p>
                    </div>
                    <div Style="float:left">
                        <h2>CONTACT US</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <label for="text">First Name:</label><br>
                                <input class="form-control" placeholder="Enter your First Name" name="first name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                               <label for="text">Last Name:</label><br>
                                <input class="form-control" placeholder="Enter your Last Name" name="last name"  required = "true"placeholder="Your last name.." pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label><br>
                                  <select id="country" name="country">
                                  <option value="Select Country">Select Country</option>
                                  <option value="India">India</option>
                                  <option value="canada">Canada</option>
                                  <option value="usa">USA</option>
                                  <option value="maxico">Maxico</option>
                                  <option value="italy">Italy</option>
                                  <option value="ireland">Ireland</option>
                                  <option value="netherland">Netherland</option>
                                  <option value="china">China</option>
                                  <option value="uk">UK</option>
                                  <option value="france">France</option>
                                  <option value="germany">Germany</option>
                                  </select>
                                  <label for="subject">Subject</label><br>
                                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include "includes/footer.php"; ?>
    </body>
</html>