  
<style>
  
.login-box {
  position: relative;
  top: 50%;
  bottom: 50%;
  left: 50%;
  width: 590px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
    position: relative;
    top: 9px;
    display: inline-block;
    padding: 0px 11px;
    color: #fff;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: -15px;
    letter-spacing: 4px;
}

.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

a {
  color: white;
  text-decoration: none;
}
@media only screen and (max-width: 600px) {
.login-box {

    width: 100% !important;
    }
  }
</style>
<?php include "header.php"?>
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-12 mt-5 mb-5">
        <div class="login-box">
  <h2>Sign Up</h2>
  <form>
  <div class="user-box">
      <input type="text" name="name" required="" id="di_fname">
      <label>FullName</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required=""id="di_email" >
   
      <label>Email adress/Username</label>
      <span id="resultemail"></span>
    </div>
    <div class="user-box">
      <input type="password" id="di_password" name="password" required="">
      <label>Password</label>
      <span id="result" style="
    color: white;
    font-size: 10px;position: absolute;
    right: 19px;
    top: 43px;"></span>
    <span class="linep" style="    background: orange;
    display: block;
    height: 2px;
    width: 0%;
    /* margin-top: -26px; */
    position: absolute;
    top: 57px;"></span>
    </div>
    <div class="form-group  col-md-12 col-sm-12 col-xs-12">
      <label class="lblcls">Confirm Password</label>
                <input type="password" id="di_password" name="password" required="" style="width: 100%;">
                <span id="resultcp" style="font-weight:bold;
color:#FF0000;
/*font-size:10px;*/
font-size: 12px;
    position: absolute;
    right: 16px;"></span>
              </div>
              <label class="lblcls">Date of birth</label>
              <div class="row">
              <div class="form-group  col-md-2 col-sm-2 col-xs-2">
                <select class="form-control" id="di_dob_date">
                <?php
                $imatchdatetoday = date('d');
                for ($i=01; $i < 32; $i++) { 
                  if($imatchdatetoday == $i){
                    $imatchdatetoday_s = 'Selected';
                  }
                  else{
                    $imatchdatetoday_s = '';
                  }
                ?>
                <option <?php echo $imatchdatetoday_s;?> value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
              }
              ?>
              </select>
              </div>
                <!-- -----------day------------ -->




              <div class="form-group  col-md-2 col-sm-2 col-xs-2" style="float:left;">
                                                    <!-- <label class="lblcls">Confirm Password</label> -->
                <select class="form-control" id="di_dob_month">
                <?php
                $imatchmonthtoday = date('m');
                $imonths = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
                $imonthscount = 0;
foreach ($imonths as $imonth) {
  $imonthscount++;
  if($imatchmonthtoday == $imonthscount){
$imatchmonthtoday_s = 'Selected';
                  }
                  else{
                    $imatchmonthtoday_s = '';
                  }
                ?>
                <option <?php echo $imatchmonthtoday_s;?> value="<?php echo $imonthscount;?>"><?php echo $imonth;?></option>
                <?php
              }
              ?>
              </select>
              </div>
              <div class="form-group  col-md-2 col-sm-2 col-xs-2" style="">
                                                    <!-- <label class="lblcls">Confirm Password</label> -->
                <select class="form-control" id="di_dob_year">
                <?php
                $imatchyeartoday = date('Y');
                $firstYear = $imatchyeartoday;
$lastYear = $firstYear - 120;
for($iy=$firstYear;$iy>=$lastYear;$iy--){
                  if($imatchyeartoday == $iy){
$imatchyeartoday_s = 'Selected';
                  }
                  else{
                    $imatchyeartoday_s = '';
                  }
                ?>
                <option <?php echo $imatchyeartoday_s;?> value="<?php echo $iy;?>"><?php echo $iy;?></option>
                <?php
              }
              ?>
              </select>
              </div>
              </div>
              <div class="form-group  col-md-12 col-sm-12 col-xs-12" style="margin-bottom:0px;">
                <div class="alert alert-danger ds_msg_ageerror" style="display:none;" >“You must be at least 18 years of age.”
            </div>
              </div>
              <div class="form-group  col-md-12 col-sm-12 col-xs-12" style="justify-content: left;
    flex-wrap: wrap;
    display: flex;">
                                                    <!-- <label class="lblcls">Gender</label> -->
         <div class="radio_container mt-3">
         
        <input type="radio" class="di_gender" name="radio" value="Male" id="Male" checked style="width:33px; height:15px; ">
        <label class="labelr" for="male">male</label>
        <input type="radio" class="di_gender" name="radio" value="Female" id="Female" style="width:33px; height:15px; ">
        <label class="labelr" for="Female">Female</label>
    </div>
              </div>

              

              <div class="form-group  col-md-12 col-sm-12 col-xs-12" style="justify-content: center;
    flex-wrap: wrap;
    display: flex;
    margin-top: 0px !important;margin-bottom: 10px;">
    <div class="row text-center ds_msg_previous" style="display:none;">
              <h2 class="title-head" style="
    font-size: 25px;
">Data <span>Successfully Submited!</span></h2>
               
            </div>
            <div class="alert alert-success ds_msg" style="display: none;" >“Your account details have been saved.” Wait Now Log In <span class="countnowlogin">3</span>
            </div>

                       <!-- <button type="button" class="btn btn-warning" id="step1_next">Next</button> -->
                       <i class="fa fa-spinner fa-pulse loadersuccess" style="
    position: absolute;
    /* right: 25%; */
    /* top: 25%; */
    font-size: 40px;
    display:none;
    z-index: 99999999;
    color: black;
"></i>
                       <!-- <button type="button" class="btn btn-success waves-effect" id="dealer_signup">
                        <i class="fa fa-user-plus"></i>Sign Up</button -->
                        <div class="form-group  col-md-12 col-sm-12 col-xs-12">
                            <p style="text-align: center;"><a href=""> <i class="fa fa-user-plus"></i>Sign UP!</a></p>
                        </div>

              </div>

  <div class="form-group  col-md-12 col-sm-12 col-xs-12">
    <p style="color: white;font-size: 15px;font-family: inherit;text-align: center;">Already Dealer? Login yourself <a href="index.php?view=dealer_login">here!</a></p>
              </div>

            </div>

            </div>
            </div>

</div>
</div>
</section>
<div class="clearfix"></div> 


<script type="text/javascript">

$(document).on('click','.di_gender',function(){
   // $(this).next('.labelr').fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100)
   $(this).next('.labelr').delay(50).fadeOut().fadeIn('slow')
})
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
$(document).on('keyup blur','#di_email',function(){
    var di_email = $('#di_email').val();
    // alert('d')
    if(!validateEmail(di_email)){
  // $('#h_nic').focus();
  $('#resultemail').text('Please Enter Valid Email');
//   setTimeout(function(){
// $('#resultemail').text('');
//   },3000)
}
else{
    $('#resultemail').text('');
}
})


$(document).on('keyup','#di_cpassword',function(){
    var cp = $(this).val();
    var fp = $('#di_password').val();
    if(cp == fp){
$('#resultcp').text('')
    }
    else{
    $('#resultcp').text('Password Not Match')
//     setTimeout(function(){
// $('#resultcp').text('')
//     },3000)
}
})

$('#di_password').keyup(function() {
$('#result').html(checkStrength($('#di_password').val()))
})
function checkStrength(password) {
var strength = 0
if (password.length < 6) {
$('#result').removeClass()
$('#result').addClass('short')
$('.linep').css('width','20%');
$('.linep').css('background','#FF0000');
return 'Too short'
}
if (password.length > 7) strength += 1
// If password contains both lower and uppercase characters, increase strength value.
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
// If it has numbers and characters, increase strength value.
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
// If it has one special character, increase strength value.
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// If it has two special characters, increase strength value.
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// Calculated strength value, we can return messages
// If value is less than 2
if (strength < 2) {
$('#result').removeClass()
$('#result').addClass('weak')
$('.linep').css('width','35%');
$('.linep').css('background','orange');
return 'Weak'
} else if (strength == 2) {
$('#result').removeClass()
$('#result').addClass('good')
$('.linep').css('width','70%');
$('.linep').css('background','#2D98F3');
return 'Good'
} else {
$('#result').removeClass()
$('#result').addClass('strong')
$('.linep').css('width','88%');
$('.linep').css('background','limegreen');
return 'Strong'
}
}
$(document).on('click','#dealer_signup',function(){
var di_fname = $("#di_fname").val();
var di_email = $("#di_email").val();
var di_password = $("#di_password").val();
var di_cpassword = $("#di_cpassword").val();
var di_dob_date = $('#di_dob_date').val();
var di_dob_month = $('#di_dob_month').val();
var di_dob_year = $('#di_dob_year').val();
var di_gender = $('.di_gender:checked').val();
var age = 18;
var mydate = new Date();
mydate.setFullYear(di_dob_year, di_dob_month-1, di_dob_date);

var currdate = new Date();
currdate.setFullYear(currdate.getFullYear() - age);
// alert(mydate)
$('#resultemail').text('');
if(di_fname == ''){
  $('#di_fname').focus();
}
else if(di_email == ''){
    $('#di_email').focus();
}
else if (!validateEmail(di_email) ) {
  $('#di_email').focus();
  $('#resultemail').text('Please Enter Valid Email');
  
}
else if(di_password == ''){
    $('#di_password').focus();
}
else if(di_cpassword == ''){
    $('#di_cpassword').focus();
}
else if(di_password != di_cpassword){
    $('#di_cpassword').focus();
$('#resultcp').text('Password Not Match')
    }
else if (currdate < mydate) {
  $('.ds_msg_ageerror').show();
  setTimeout(function(){
$('.ds_msg_ageerror').hide();
  },4000)
}
else{
    $('#dealer_signup ').attr('disabled','disabled')
     $('#dealer_signup').find('i').removeClass('fa-user-plus');
     $('#dealer_signup').find('i').addClass('fa-spinner fa-pulse');
    var formData = new FormData();
    formData.append("status","dealer_signup");
    formData.append("di_fname",di_fname);
    formData.append("di_email",di_email);
    formData.append("di_password",di_password);
    formData.append("di_cpassword",di_cpassword);
    formData.append("di_dob_date",di_dob_date);
    formData.append("di_dob_month",di_dob_month);
    formData.append("di_dob_year",di_dob_year);
    formData.append("di_gender",di_gender);
    $.ajax({
                        url: 'libraries/query.php',
                        // dataType: 'json',
                        data: formData,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function (data) {
                            console.log(data)
                            $('.progress-bar').css('width','100%')
                            
$('.ds_msg').show();
$('.loadersuccess').hide();
// $('#dealer_signup').hide();
var co = 3;
setInterval(function(){
  co--;
  $('.countnowlogin').text(co)
},1000)
                            setTimeout(function(){
location.href="index.php?view=dealer_login";
                            },3000)
                        }

                                            });
}
});
</script>
<?php include "footer.php"?>
<!-- 
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" value="Sign Up" name="login" class="btn" style="position: relative;color: #03e9f4;font-size: 16px;text-transform: uppercase;overflow: hidden;transition: .5s;letter-spacing: 4px;">
    </a>
    <a href="sign-up.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" value="Login" name="login" class="btn" style="position: relative;color: #03e9f4;font-size: 16px;text-transform: uppercase;overflow: hidden;transition: .5s;letter-spacing: 4px;">
      </a>
  </form>
</div>
        </div>
    </div>
</div> -->

