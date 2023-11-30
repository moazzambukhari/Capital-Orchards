<style>
    body{
        font-family:popins;
    }
    .main-box h1{
        text-align:center;
        color:#000;
        font-size:70px;
        margin-bottom:0px !important;
        margin-top:0px !important;  
        font-family:poppins-bold;  
    }
    .main-box h2{
        color:#033b38;
        font-size:60px;
        margin-bottom:0px !important;
        margin-top:0px !important;
        font-family:poppins-bold; 
    }
    
    .box-p {
        color:#000;
        width:74%;
        text-align:center;
        margin-left :160px;
        margin-top :60px;
        font-family:poppins-light;
    }
   
.the-segments{
    list-style: none;
    justify-content: center;
    display: flex;
}
.the-segments li{
float: left;
/* width: 100%; */
/* height: 100px; */
margin: auto;
margin: 12px;
}
.the-segments li img{
width: 100%;
height: 219px;
} 


@media only screen and (max-width: 600px) {
.box-p {
    color: #000;
    width: 100%;
    justify-content: center;
    font-family: poppins-light;
    margin-left: 0px;
    text-align: center;
    margin: auto;
}
.main-box h1{
        font-size:30px;
    }
    .main-box h2{
        font-size:30px;
    }

    .the-segments li{

margin: 0px !important;
}

}


</style>

<?php include "header.php";
 
include  "social_icons.php";
?>

<section class="about-seccion" style="background-image:url(_img/green.jpg);background-size:cover; min-height: 755px;">
<div class="container-xl">
<div class="row">
<div class="col-md-32 col-sm-12 col-xs-12 main-box mt-5" style="margin-top:100px !important;">
<h1 style="margin-top:50px;">The Segments</h1>
<!-- <p style="border-bottom:7px solid #DCAE27;    margin: 5px 540px;width: 278px;"></p> -->

<p class="box-p">Capital Orchards has divided its finest compartments of amenities into segments which branch off onto the provisions that make Capital Orchards standout from the rest. 

The segments elaborate the benefits of the elements provided in our vicinity which will engrave the experience of living into perfect memories!! 

All the segments are unique like flowers in their own way but represent one unit bridging all gaps in human society. 

Every part of the segment will prove to be self explanatory for the coverage of needs of all spheres of life; these fragments will bloom into a better way of living required for human beings at this stage. 
</p>
</div>
</div>

<div class="row " style="margin-top:80px;justify-content: center;">
<ul class="the-segments">
    <li><img src="images/1.svg" alt="" class="img-responsive"></li>
    <li><img src="images/2.svg" alt="" class="img-responsive"></li>
    <li><img src="images/3.svg" alt="" class="img-responsive"></li>
    <li><img src="images/4.svg" alt="" class="img-responsive"></li>
    <li><img src="images/5.svg" alt="" class="img-responsive"></li>
    <li><img src="images/6.svg" alt="" class="img-responsive"></li>
    <li><img src="images/7.svg" alt="" class="img-responsive"></li>
</ul>

</div>


</div>
</section>
<div class="clearfix"></div> 
<?php include "footer.php"?>
