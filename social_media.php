<style>
    a {
  text-decoration: none;
}
.social-box {
  margin: 40px 0px;
  /* display: flex;
  justify-content: space-around;
  width: 80%; */
}

.sharer {
  display: flex;
  position: relative;
  width: 80px; 
  height: 80px;
  overflow: hidden;
  border-radius: 28%;
  box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.08);
  background-color: #fff;
  font-size: 28px;
}

.sharer, .sharer::before, .sharer::after {
  font-family: helvetica, arial, sans-serif;
}

.sharer:hover .face {
  display: none;
}

.sharer:hover::before {
  top: -40%;
}

.sharer.success::before {
  top: -208%;
}

.sharer:hover::after {
  display: flex;
}

.sharer.success.success::after {content: "Success!";}
.fb.sharer.success::after {color: #3B5998;}
.tr.sharer.success::after {color: #00ACED;}
.pi.sharer.success::after {color: #C92228;}


.sharer::before {
  display: block;
  content: "";
  z-index: 5;
  position: absolute;
  top: 127%;
  left: -40%;
  align-items: center;
  width: 180%;
  height: 180%;
  transition: all .65s cubic-bezier(.64,0,.34,1.5); 
  transform: rotate(45deg);
}

.fb.sharer::before {background-color: #3B5998;}
.tr.sharer::before {background-color: #00ACED;}
.pi.sharer::before {background-color: #C92228;}

.sharer::after {
  display: none;
  position: relative;
  margin: auto;
  z-index: 10;
  font-size: .45em;
  line-height: 1.3em;
  color: #fff;
  transition: all .3s cubic-bezier(.64,0,.34,1.5); 
}

.fb.sharer::after {content:"3k likes";}
.tr.sharer::after {content:"4.2k rets";}
.pi.sharer::after {content:"2.1k pins";}

.face {
  margin: auto;
}

.face {
  color: #3B5998;
  font-size: 20px;
}

@media only screen and (max-width: 480px) {
    .sharer {
        position: relative !important;
        left: 118px !important;
} 
.link{
    margin: 0px !important;
    padding: 0px !important;
    background: #DEBA51;
}

}


</style>

<?php include "header.php"?>
<div class="container">
    <div class="row mt-5" >
    <h1 class="mt-5  text-center">Social Media</h1>
    <div class="col-md-2"></div>    
    <div class="col-md-2 mt-2 " style="width: 118px;">
 <div class="social-box" style="margin-left:20px;">
    <a href="#">
      <div class="fb sharer">
        <i class="fa-brands fa-facebook face"style="font-size: 39px;"></i>
      </div>
    </a>
    
  </div>
    </div>
    <div class="col-md-2 mt-5 link">
        <p class="mt-4"><a href="https://www.facebook.com/search/top?q=capital%20orchards">www.facebook.com/capitalorchards</a></p>
    </div>
   
   
    
    <div class="col-md-2 mt-5 mx-5 link">
        <p class="mt-4 text-center"><a href="https://www.instagram.com/capitalorchards/">www.Instagram.com/capitalorchards</a></p>
    </div>
    

    <div class="col-md-2 mt-2 " style="width: 118px;">
 <div class="social-box mx-5">
    <a href="#">
      <div class="fb sharer">
        <i class="fa-brands fa-instagram face"style="font-size: 39px;"></i>
      </div>
    </a>
    
  </div>
    </div>
    </div>

<!-- ---------------------------------- -->
<div class="container" >
<div class="row" >
   
    <div class="col-md-2"></div>    
    <div class="col-md-2 mt-2 " style="width: 118px;">
 <div class="social-box" style="margin-left:20px;">
    <a href="#">
      <div class="fb sharer">
        <i class="fa-brands fa-twitter face"style="font-size: 39px;"></i>
      </div>
    </a>
    
  </div>
    </div>
    <div class="col-md-2 mt-5 link">
        <p class="mt-4"><a href="https://www.Twitter.com/capitalorchards">www.Twitter.com/capitalorchards</a></p>
    </div>
   
   
    
    <div class="col-md-2 mt-5 mx-5 link">
        <p class="mt-4 text-center" ><a href="https://www.youtube.com/channel/UCOvHgOVwuT8jZEeGx8ZOrqA">www.Youtube.com/capitalorchards</a></p>
    </div>
    

    <div class="col-md-2 mt-2 " style="width: 118px;">
 <div class="social-box mx-5">
    <a href="#">
      <div class="fb sharer">
        <i class="fa-brands fa-youtube face"style="font-size: 39px;"></i>
      </div>
    </a>
    
  </div>
    </div>
    </div>



    <!-- ---------------------------------- -->
<div class="container" >
<div class="row" >
   
   <div class="col-md-2"></div>    
   <div class="col-md-2 mt-2 " style="width: 118px;">
<div class="social-box" style="margin-left:20px;">
   <a href="#">
     <div class="fb sharer">
       <i class="fa-brands fa-linkedin face"style="font-size: 39px;"></i>
     </div>
   </a>
   
 </div>
   </div>
   <div class="col-md-2 mt-5 link">
       <p class="mt-4"><a href="https://www.Linkedin.com/capitalorchards">www.LinkedIn.com/capitalorchards</a></p>
   </div>
  
  
   
   <div class="col-md-2 mt-5 mx-5 link">
       <p class="mt-4 text-center" style="margin-left: 36px;"><a href="https://www.Pintrest.com/channel/UCOvHgOVwuT8jZEeGx8ZOrqA">www.Pinterest.com/capitalorchards</a></p>
   </div>
   

   <div class="col-md-2 mt-2 " style="width: 118px;">
<div class="social-box mx-5">
   <a href="#">
     <div class="fb sharer">
       <i class="fa-brands fa-Pinterest face"style="font-size: 39px;"></i>
     </div>
   </a>
   
 </div>
   </div>
   </div>

<!-- ----------------------------------- -->
</div>


<div class="container">
    <div class="row mt-5" >
    <h1 class="  text-center">Website & Email</h1>
    <div class="col-md-2"></div>    
    <div class="col-md-2 mt-2 " style="width: 118px;">
 <div class="social-box" style="margin-left:20px;">
    <a href="#">
      <div class="fb sharer">
        <!-- <i class="fa-brands fa-envelop face"style="font-size: 39px;"></i> -->
        <i class="fa fa-envelope" style="font-size: 39px; margin:20px 22px; color:#000;"></i>
      </div>
    </a>
    
  </div>
    </div>
    <div class="col-md-2 mt-5 link">
        <p class="mt-4"><a href="https://www.facebook.com/search/top?q=capital%20orchards">info@capitalorchards</a></p>
    </div>
   
   
    
    <div class="col-md-2 mt-5 mx-5 text-center link">
        <p class="mt-4 text-center" style="float:right; position:absolute; right:495px;"><a href="https://www.facebook.com/search/top?q=capital%20orchards">www.capitalorchards.com</a></p>
    </div>
    

    <div class="col-md-2 mt-2 " style="width: 118px;">
 <div class="social-box mx-5">
    <a href="#">
      <div class="fb sharer">
<i class="fa fa-earth-americas" style="font-size: 39px; margin:20px 22px; color:#000;"></i>
<!-- <i class="fa-duotone fa-earth-americas"></i> -->
      </div>
    </a>
    
  </div>
    </div>
    </div>

<!-- ---------------------------------- -->

<script>
    function addMsg(event) { 
    var clickedButton = event.target;
    clickedButton.classList.add("success");
}

var buttons = document.getElementsByClassName("sharer");

for(var i = 0; i < buttons.length; i += 1) {
    buttons[i].addEventListener("click", addMsg, false);
}   
</script>