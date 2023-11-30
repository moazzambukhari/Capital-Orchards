<style>
    

/* === BASE HEADING === */ 

.head-line {
  position: relative;
  padding: 0;
  margin: 0;
  font-family: "Raleway", sans-serif;
  font-weight: 300;
  font-size: 40px;
  color: #080808;
  -webkit-transition: all 0.4s ease 0s;
  -o-transition: all 0.4s ease 0s;
  transition: all 0.4s ease 0s;
  margin-bottom: 20px;
}


/* === HEADING STYLE #1 === */
.one .head-line {
  text-align: center;
  text-transform: uppercase;
  padding-bottom: 5px;
}
.one .head-line:before {
  width: 28px;
  height: 5px;
  display: block;
  content: "";
  position: absolute;
  bottom: 3px;
  left: 50%;
  margin-left: -14px;
  background-color: #000;
}
.one .head-line:after {
  width: 100px;
  height: 1px;
  display: block;
  content: "";
  position: relative;
  margin-top: 25px;
  left: 50%;
  margin-left: -50px;
  background-color: #000;
}

  body{
    font-family: var(--e-global-typography-accent-font-family);
  }
.second-div{
    text-align: center;
  }
  .icons-sports{
    list-style: none;
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
  }
  .icons-sports li{
    float: left;
  }
</style>
<?php include "header.php"?>
<body>
<div class="container-fluid">
  <div class="row mt-5">
    <div class="col-md-6" style="margin-top: 28px;     padding: 0;">
      <img src="images/green1.jpg" class="img-responsive" alt="" style="height:500px !important; width:100%;">
    </div>
    <div class="col-md-6 mt-5 mb-3 second-div">
    <!-- <img src="images/build.jpg" class="img-responsive" alt="" style=" height:500px; width:100% !important; "> -->
    <div class="one">
      <h1 class="head-line">GREEN COMMERTIAL</h1>
      </div> 
      <!-- <p>Introducing "JETSKI COMPITITION",First time in the history. Capital Orchards organizing a huge Event.</p> -->
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores earum totam necessitatibus nihil in tempora vero voluptates minima labore sunt. Nesciunt sequi sapiente ipsam eveniet, deserunt hic maiores eligendi impedit!</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, doloremque ea totam numquam magnam nesciunt nam. Molestiae sunt recusandae quam voluptates excepturi. Expedita iure eum porro voluptas, at deserunt aspernatur.</p>
      <ul class="icons-sports">
        <li><a href=""><img src="images/sports.png" alt="" style="width:100px; height:100px;"></a></li>
        <li><a href=""><img src="images/sports.png" alt="" style="width:100px; height:100px;"></a></li>
        <li><a href=""><img src="images/sports.png" alt="" style="width:100px; height:100px;"></a></li>
        <li><a href=""><img src="images/sports.png" alt="" style="width:100px; height:100px;"></a></li>
      </ul>
    </div>
  </div>

  <div class="row">
    
    <div class="col-md-6 mt-5 second-div">
    <!-- <img src="images/build.jpg" class="img-responsive" alt="" style=" height:500px; width:100% !important; "> -->
      <div class="one">
      <h1 class="head-line">GREEN HOUSING SCOCIETY</h1>
      </div>  
      <p>Introducing "SWIMMING COMPITITION". Capital Orchards organizing a huge Event.</p>
      <p>Sleek and sophisticated, Skyview Complex offers qualities always coveted, but rarely obtained in the finest New York rental residences – a unique blend of generously proportioned interiors and the enjoyment of Nassau Club over 10,000 square feet of indoor and outdoor amenities creatively conceived to enhance your exceptional FiDi lifestyle.</p>
      <ul class="icons-sports">
        <li><a href=""><img src="images/sports.png" alt="" style="width:100px; height:100px;"></a></li>
        <li><a href=""><img src="images/sports.png" alt="" style="width:100px; height:100px;"></a></li>
        <li><a href=""><img src="images/sports.png" alt="" style="width:100px; height:100px;"></a></li>
        <li><a href=""><img src="images/sports.png" alt="" style="width:100px; height:100px;"></a></li>
      </ul>
    </div>
    <div class="col-md-6 " style="padding: 0;">
      <img src="images/green2.jpg" class="img-responsive" alt="" style="height:500px !important; width:100%;">
    </div>
  </div>




</div>


<?php include "footer.php";?>
