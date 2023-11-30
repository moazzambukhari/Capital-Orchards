<style>
   @media only screen and (max-width: 600px) {
      .hero-wrap {
    height: 264px !important;
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    z-index: 0;
}
.hero-wrap .slider-text .bread {
    font-weight: 700;
    color: #fff;
    font-size: 30px !important;
}
.sl-head {
   padding: 0px !important;
}
}
</style>

<?php 
include "header.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='dime180.dizinc.com';
    $mail->Port=465;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
   
   
    $mail->Username='CapitalOrchards';
    $mail->Password='Pakistan1947';
   
   
    $mail->setFrom($_POST['email'], 'CapitalOrchards');
    $mail->addAddress('info@Capitalorchards.com');
    $mail->addReplyTo($_POST['email']);
     
    $mail->isHTML(true);
    $mail->Subject= $_POST["subject"];
    $mail->Body="
    <style>
   .Heading {
       color: #000000;
       font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
       font-size: 24px;
       font-weight: 100;
       background-color: #ffffff;
       padding-top: 10px;
       padding-right: 10px;
       padding-bottom: 10px;
       padding-left: 10px;
       }
   .Details {
       color: #000000;
       font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
       font-size: 14px;
       font-weight: 100;
       padding-top: 10px;
       background-color: #ffffff;
       padding-right: 10px;
       padding-bottom: 10px;
       padding-left: 10px;
       }
   .DetailsMessage {
       color: #000000;
       font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
       font-size: 14px;
       font-weight: 100;
       background-color: #EEEEEE;
       padding-top: 10px;
       padding-right: 10px;
       padding-bottom: 10px;
       padding-left: 10px;
       }
   .Footer {
       color: #000000;
       font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
       font-size: 14px;
       font-weight: 100;
       background-color: #DBDBDB;
       padding-top: 10px;
       padding-right: 10px;
       padding-bottom: 10px;
       padding-left: 10px;
       }
   .Footer {
       color: #000000;
       font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
       font-size: 14px;
       font-weight: 100;
       background-color: #DBDBDB;
       padding-top: 10px;
       padding-right: 10px;
       padding-bottom: 10px;
       padding-left: 10px;
       }
   .Footer a {
       color: #FF0000;
       font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;
       font-size: 14px;
       font-weight: 100;
       }
   </style>
   
   <TABLE style='BORDER-RIGHT: #CCCCCC 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: #CCCCCC 1px solid; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; BORDER-LEFT: #CCCCCC 1px solid; PADDING-TOP: 0px; BORDER-BOTTOM: #CCCCCC 1px solid'
   height=238 cellSpacing='0' cellPadding='0' width='800'>
     <tr> 
      <td class='Heading'> <img src='http://Capitalorchards.com/_img/logo.svg'><br>
      Capitalorchards</td>
     </tr>
     <tr>
       <td height='37' class='DetailsMessage'>Contact Details</td>
     </tr>
     <tr>
       <td height='83' bgcolor='#EEEEEE' class='Details'><table width='100%' border='0'>
     <tbody>
       <tr>
         <td width='18%'>Name: </td>
         <td width='82%'>$name</td>
       </tr>
  
       <tr>
         <td>E-Mail:</td>
         <td>$email</td>
       </tr>
       <tr>
         <td>Subject:</td>
         <td>$subject</td>
       </tr>
     </tbody>
   </table></td>
     </tr>
     <tr>
       <td height='40' class='DetailsMessage'>Message: $message</td>
     </tr>
     <tr>
       <td height='40' class='Footer'>This E-Mail Powered by <a href=;http://CapitalOrchards.com;>Capital Orchards</a></td>
     </tr>
   </table>";
   
    if(!$mail->send()){
    $Message = "<div class='alert alert-danger'>FAILED - Pease fill all required fileds.</div>";
    }
    else{
   
     $Message = "<div class='alert alert-success'>SUCCESS - Your message successfully sent.</div>";
    }
   
}
   /*--------------------------------------------------------------------------*/
   
   
   
   ?>
<!-- <section class="hero-wrap hero-wrap-2">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 pt-5 text-center sl-head">
<h1 class="mb-0 bread">Contact us</h1>
</div>
</div>
</div>
</section> -->
<section class="ftco-section bg-light">
<div class="container">
<div class="row no-gutters justify-content-center">
<div class="col-md-12">
<div class="wrapper">
<div class="row g-0">
<div class="col-lg-6">
<div class="contact-wrap w-100 p-md-5 p-4">
<h3>Contact us</h3>
<p class="mb-4">We're open for any suggestion or just to have a chat</p>
<div class="row mb-4">
<div class="col-md-4">
<div class="dbox w-100 d-flex align-items-start">
<div class="text">
<p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 d-flex align-items-start">
<div class="text">
<p><span>Email:</span> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#5831363e371821372d2a2b312c3d763b3735"><span class="__cf_email__" data-cfemail="422b2c242d023b2d3730312b36276c212d2f">[email&#160;protected]</span></a></p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 d-flex align-items-start">
<div class="text">
<p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
</div>
</div>
</div>
</div>
<form id="contactForm" name="contactForm" class="contactForm" >
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="name" id="name" placeholder="Name">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Create a message here"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="button"value="Send Message"  class="btn btn-primary">
<div class="submitting"></div>
</div>
</div>
</div>
</form>
<div class="w-100 social-media mt-5">
<h3>Follow us here</h3>
<p>
<a href="#">Facebook</a>
<a href="#">Twitter</a>
<a href="#">Instagram</a>
<a href="#">Dribbble</a>
</p>
</div>
</div>
</div>
<div class="col-lg-6 d-flex align-items-stretch">
<div id="map" class="bg-white"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php 
include  "social_icons.php";
 include "footer.php";
 ?>


