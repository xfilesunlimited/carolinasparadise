<!DOCTYPE html>
<html>
<title>Carolina's Paradise</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

Button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body id="#">

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-large w3-light-grey">
    <div class="w3-dropdown-click">
      <button class="w3-button" onclick="myFunction()">
        More <i class="fa fa-caret-down"></i>
      </button>
      <div id="demo" class="w3-dropdown-content w3-bar-block w3-card">
        <a href="gallery.html" class="w3-bar-item w3-button">Gallery</a>
        <a href="pools.html" class="w3-bar-item w3-button">Pools</a>
        <a href="cottages.html" class="w3-bar-item w3-button">Cottages</a>
        <a href="food&drinks.html" class="w3-bar-item w3-button">Food & Drinks</a>
        <a href="pricing.html" class="w3-bar-item w3-button">Pricing</a>
        <a href="about.html" class="w3-bar-item w3-button">About</a>
        <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
      </div>
    </div>
    <a href="index.html" class="w3-bar-item w3-button w3-round">Home</a>
    <a href="gallery.html" class="w3-bar-item w3-button w3-round">Gallery</a>
    <a href="about.html" class="w3-hide-small w3-bar-item w3-button w3-round">about</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-round w3-blue">Contact</a>
  </div>
  </div>
</br></br></br></br>

<?php
$name =$_POST['name'];
$from =$_POST['email'];
$message =$_POST['message'];
$subject = $_POST['subject'];
$to = 'overhandknot86@gmail.com';

 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message

?>
<div class="container">
  <form action="" method="post">
  <div class="row">
    <div class="col-25">
      <label for="name">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mail">e-mail</label>
    </div>
    <div class="col-75">
     <input type="text" name="email" Placeholder="Your e-mail">
    </div>
    <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
     <input type="text" name="subject" Placeholder="Subject">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="message">Send e-mail</label>
    </div>
    <div class="col-75">
      <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
   
    <button style="background-color:#2196F3;" type="submit" name="submit">SEND MAIL</button>

  </div>
 
<?php
if (isset ($_POST['submit']))
{
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
}
?>
 </form>
</div>

</div>
</div>

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Visit our Pages</h4><br>
  <div class="col-md-24 text-center">
                    <a href="https://web.facebook.com/Carolinas-Paradise-101728322074363" target="_blank" rel="noopener" class="pr-5 rtl-flip" title="Our Facebook page"><i class="fa fa-facebook-official w3-hover-opacity" style="font-size:48px;color:#2196F3"></i></a>
                    <a href="https://www.instagram.com/carolinasparadise/" target="_blank" rel="noopener" title="Our Instagram page"><i class="fa fa-instagram w3-hover-opacity" style="font-size:48px;color:#2196F3"></i></a>
                    <a href="https://twitter.com/CarolinasParad1" target="_blank" rel="noopener" title="Our Instagram page"><i class="fa fa-twitter w3-hover-opacity" style="font-size:48px;color:#2196F3"></i></a>
                    <a href="https://www.instagram.com/kueez.official/" target="_blank" rel="noopener" title="Our Instagram page"><i class="fa fa-youtube w3-hover-opacity" style="font-size:48px;color:#2196F3"></i></a>
                </div>
            </div>
  <div class="container-fluid">
        <div class="container p-5">
            <div class="row social pb-5">
              <div style="text-align:justify;"class="w3-section">
                <p style="text-align:justify;"><i class="fa fa-map-marker fa-fw w3-text-blue w3-xxlarge w3-margin-right"></i>P-1 TabonTabon Sibagat Agusan del Sur</p>
                 <p><i class="fa fa-phone fa-fw w3-text-blue w3-xxlarge w3-margin-right"></i> Phone: 09101443437</p>
                 <p><i class="fa fa-envelope fa-fw w3-text-blue w3-xxlarge w3-margin-right"> </i> Email: carolinasparadise@gmail.com</p>
              </div><br>
              <a href="#" class="w3-button w3-blue w3-padding-large w3-margin-bottom w3-round-large "><i class="fa fa-arrow-up "></i></a>
                
                    <p>=Mars Dev= </p>
</footer>

<script>
  $(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
  function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>
  
  


</body>
</html>
