<style>
    * { 
  font-family: courier; 
  box-sizing:border-box;
}

html, body { 
  margin:0; 
  padding:0; 
  height:100%; 
  min-height:100%; 
}

/* Layout */
.grid {
	position: relative;
  width: 100vw;
  height: 100vh;
	display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.grid .column {
	position: relative;
	overflow: hidden;
  width: 50%;
	text-align: center;
	cursor: pointer;
}
.grid .column img {
	position: relative;
	display: block;
  height: 100%;
  object-fit: cover;
	width: 100%;
	opacity: 0.8;
}
.grid .column .content {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
	padding: 2em;
	color: #fff;
	text-transform: uppercase;
	font-size: 1.3rem;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}

.grid .column .content::before,
.grid .column .content::after {
	pointer-events: none;
}

.grid .column h2 {
	word-spacing: -0.15rem;
	font-weight: 300;
}

.grid .column h2 span {
  display: block;
	font-weight: 800;
  font-size: 2.8rem;
}

.grid .column h2,
.grid .column p {
	margin: 0;
}

.grid .column p {
	letter-spacing: 1px;
	font-size: 68.5%;
}

.logo{
  display: inline;
  position: absolute;
  top: 10%;
  left: 48%;
  text-align: center;
}
.logo img{
    max-width: 100px;
}
a{
  text-transform: uppercase;
  font-size: .6rem;
  text-decoration: none;
  color: #FFF;
  display: block;
  font-family: sans-serif;
}
#west{
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/927610/ISSlRnm.png) no-repeat center right;
  background-size: cover;
}
#east{
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/927610/man_guy_jumping_levitate_railing-1407739.jpg) no-repeat center bottom;
  background-size: cover;
}
#west .content{
  background: rgba(70,181,84, .5);
}
#east .content{
  background: rgba(207,172,49, .5);
  
}
/*-----------------*/
/***** Hover *****/
/*-----------------*/
.effect-hover h2,
.effect-hover h3,
.effect-hover p,
.effect-hover i{
	-webkit-transition: opacity 0.35s, 
    -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
}

.effect-hover .content::before {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 300px;
	height: 300px;
	border: 3px solid #fff;
	content: '';
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
  /* remove this bit if you want it to swing up */
	-webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
	transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
}

.effect-hover p:hover,
.effect-hover p:focus {
	opacity: 0.6;
} /* Keeps things consistent */


.effect-hover p,
.effect-hover h3{
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
}

.effect-hover:hover .content::before {
	opacity: 1;
	-webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(1,1,1);
	transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(1,1,1);
}

.effect-hover:hover h2 {
	opacity: 0;
	-webkit-transform:  scale3d(0.8,0.8,1);
	transform: scale3d(0.8,0.8,1);
}
.effect-hover:hover h3,
.effect-hover:hover p{
	opacity: 1;
}
.effect-hover:hover i{
  -webkit-transform:  scale3d(2.5,2.5,2);
	transform: scale3d(2.5,2.5,2);
}

/* Overlays */
.overlay{
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  height: 100vh;
  width: 100vw;
  display: none;
  z-index: 99;
  overflow-x: hidden;
  background: #eee; 
}
/* Block works too, but flex is more...flexible */
.overlay.open{
  display: flex;
  background-color: transparent;
}
.overlay .grid{
background-color: #f4f4f4;
}
.overlay .column{
  display: flex;
  height: 100%;
  align-items: center;
  justify-content: center;
}
.overlay img{vertical-align: bottom;}
.product-content{

  align-content: center;
  justify-content: center;
  font-size: 1.4rem;
 max-width: 400px;
}
.price{
  color: #34d5cf;
  margin: 1vw 0;
}
.currency{
  font-weight: 700;
  font-size: 1rem;
}
.amount{
  font-size: 1.6rem;
  vertical-align: top;
  font-family: sans-serif;
}
/* button */
.buy-button{
    height: 50px;
    margin: 2rem 0;
    position: relative;
    background: #eee;
    border: 3px solid #f9efb2;
}
.buy-button > span {
  display: block;
  position: relative;
  font-weight: 700;
  font-size: 1rem;
  text-transform: uppercase;
  color: #1f1f22;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
  z-index: 10;
  line-height: 60px;
}

.buy-button::after, .buy-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    border: 3px solid #f9efb2;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s, ease-in-out .3s;
}
.buy-button::before {
    background: #FFF;
    margin: 0px 0 0 0px;
    top: 5px;
    left: 5px;
    width: calc(100% + 2px);
    height: calc(100% + 2px);
    z-index: 1;
}

.buy-button:hover span,
.buy-button:hover::before {
    transform: translate3d(-4px, -4px, 0px);
}
.buy-button:hover::before{
  background: #f9efb2;
}
.size-guide-link {
    display: inline-block;
    font-weight: 500;
    cursor: pointer;
    font-size: .8rem;
}
.underline-link {
    overflow: hidden;
    padding-bottom: .5vh;
    position: relative;
}
.underline-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background: #202023;
    -webkit-transform-origin: left;
    transform-origin: left;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transition: -webkit-transform .2s ease-in-out;
    transition: transform .2s ease-in-out;
    
}
.underline-link.active::before,
.underline-link.hovered::before,
.underline-link:hover::before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);    
}
/* Close Icon animated */
/* Thanks to @arthurhamon */
.close-icon{
  width: 36px;
  height: 36px;
  cursor: pointer;
  position: absolute;
  top: 4%;
  right: 2%;
}
/* Test your cubic beziers here http://cubic-bezier.com/ */
.close-icon div {
    display: block;
    height: 3px;
    position: relative;
    transition: transform 0.6s cubic-bezier(0.19, 1, 0.22, 1) 0s, opacity 0.4s cubic-bezier(0.19, 1, 0.22, 1) 0s;
    width: 36px;
  
}
.close-icon div:first-child {
    transform: translate3d(0px, 10px, 0px) rotate3d(0, 0, 1, -45deg);
}
.close-icon div:first-child::after, .close-icon div:first-child::before {
    transition: transform 0.6s cubic-bezier(0.19, 1, 0.22, 1) 0s, opacity 0.2s cubic-bezier(0.19, 1, 0.22, 1) 0s;
}
.close-icon div:last-child {
    transform: translate3d(0px, 8px, 0px) rotate3d(0, 0, 1, 45deg);
}
.close-icon div:last-child::after, .close-icon div:last-child::before {
    transition: transform 0.6s cubic-bezier(0.19, 1, 0.22, 1) 0.2s, opacity 0.2s cubic-bezier(0.19, 1, 0.22, 1) 0.18s;
}
.close-icon div::after, .close-icon div::before {
    content: "";
    display: block;
    height: 100%;
    pointer-events: none;
    position: absolute;
    width: 100%;
}
/* Now you see it */
.close-icon div::before {
    background: none repeat scroll 0 0 #34d5cf;
    opacity: 1;
    transform: translate3d(0px, 0px, 0px);
}
/* Now you don't */
.close-icon div::after {
    background: none repeat scroll 0 0 #ead918;
    opacity: 0;
    transform: translate3d(100%, 0px, 0px);
}
.close-icon:hover div::before {
    opacity: 0;
    transform: translate3d(-100%, 0px, 0px);
}
.close-icon:hover div::after {
    opacity: 1;
    transform: translate3d(0px, 0px, 0px);
}



</style>
<?php include "header.php"?>



<section class="about-seccion">
<div class="container">
<div class="row">

<div class="about-us-heading text-center">
<h1>Feature And Aminities</h1>
<!-- <p style="border: 2px solid #DCAE27; width:400px;margin: -13px 450px !important;"></p> -->
</div>


<div class="col-md-3 mt-4">
<div class="card" style="width: 100%;">
  <div class="card-header">
  Who We Are
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><a href="feature_aminities.php">Features & Aminities</a> </li>

    <li class="list-group-item"><a href="">Brain</a>
    <ul class="sub-sidebar">
        <li><a href="dxb.php">DXB</a></li>
        <li><a href="shaddock.php">SHADDOCK GROUP</a></li>
        </ul>
    </li>
    
  </ul>
</div>
</div>
<div class="col-md-9 col-sm-12 col-xs-12 mt-4">
<div class="row">

<div class="grid">
  <!--Left side-->
  <div id="west" class="column effect-hover">
    <div class="content">
      <i class="fa fa-venus" aria-hidden="true"></i>
      <h2>Go <span>West</span></h2>
      <h3>Do something amazing</h3>
      <p>And Click</p>
    </div>		    
  </div>
  <!--Right side-->
  <div id="east" class="column effect-hover">
    <div class="content">
      <i class="fa fa-mars" aria-hidden="true"></i>
      <h2>Go <span>East</span></h2>
      <h3>Do something amazing</h3>
      <p>And Click</p>
    </div>			
  </div>
  <!--Logo-->
  <div class="logo">
    <a href="http://webdesignerwall.com/tutorials/lively-splitscreen-layout-css3-animations" target="_blank">View Tutorial</a>
    <img src="https://assets.codepen.io/927610/logo24w.png" />
    </a>
  </div>
  
</div>

<!--Left side content-->
<div id="west-overlay" class="overlay">
     <div class="grid">      
       <div class="column">
         <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/927610/pexels-photo-14400.jpeg"/>
       </div>       
        <div class="column">  
          <div class="product-content">
             <h1>Rainbow Chasers</h1>
            <p>With these, you're the center of the Universe, floating in microgravity between distant stars. This is what you want.</p>
            <div class="price">
              <span class="currency">$</span>
              <span class="amount">89.99</span>
            </div>
            <a href="#" class="buy-button">           
              <span>Buy Me</span>
            </a>
            <div class="size-guide-link underline-link">Size guide</div>
          </div>
       </div>         
     </div><!--End Grid-->
  
     <div class="close-icon">
        <div></div>
        <div></div>
      </div> 
</div>
<!--Right side content-->
<div id="east-overlay" class="overlay">
     <div class="grid">      
       <div class="column">
         <img src="https://images.unsplash.com/photo-1552745026-b9c0536969d0?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ"/>
       </div>       
        <div class="column">  
          <div class="product-content">
             <h1>Path Makers</h1>
            <p>With these, you're the center of the Universe, floating in microgravity between distant stars. This is what you want.</p>
            <div class="price">
              <span class="currency">$</span>
              <span class="amount">149.99</span>
            </div>
            <a href="#" class="buy-button">           
              <span>Buy Me</span>
            </a>
               <div class="size-guide-link underline-link">Size guide</div>
          </div>
       </div>         
     </div><!--End Grid-->
  
     <div class="close-icon">
        <div></div>
        <div></div>
      </div> 
</div>

    </div>

</div>


</div>
</div>
</section>
<div class="clearfix"></div>
        <!-- </div>
    </div>
</div>
 -->

 
<?php 
include "footer.php";

include "social_icons.php";

?>


<script>
    // Animate CSS by Daniel Eden: https://github.com/daneden/animate.css

$(document).ready( function(){
  $("#west .content").click( function() {
    $("#west-overlay").addClass("animated fadeInLeft open").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass("animated fadeInLeft");
    });
    $("#west-overlay .product-content").addClass("animated flipInY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass("animated flipInY");
    }); 
  });
  $("#west-overlay .close-icon").click( function() {
      $("#west-overlay").addClass("animated flipOutY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass("animated flipOutY open");
      }); 
  });
  $("#east .content").click( function() {
    $("#east-overlay").addClass("animated fadeInRight open").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass("animated fadeInRight");
    }); 
    $("#east-overlay .product-content").addClass("animated flipInY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass("animated flipInY");
     }); 
  });
  $("#east-overlay .close-icon").click( function() {
    $("#east-overlay").addClass("animated flipOutY ").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass("animated flipOutY open");
    });     
  });  
});
</script>





























