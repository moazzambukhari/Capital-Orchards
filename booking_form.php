<style>
.booking{
    box-shadow: 0px 3px 5px rgb(0 0 0 / 34%);
}
.booking h3{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
INPUT:hover {
   border: 1px solid #000 !important;
}
.btttn button{
    width: 100% !important;
    height: 45px;
    border-radius: 5px 5px;
}
@media only screen and (max-width: 600px) {
     .booking{
        width: 90% !important;
    padding: 7px;
    height: 195px;
}
  }
</style>
<?php 
include "header.php";
?>
<div class="container">
    <div class="row mt-5" style="justify-content:center; display:flex; flex-wrap:wrap;">
        <div class="col-md-8 mt-5 mb-5 border border-1 booking">
            <h3 class="text-center">BOOKING FORM VERIFICATION</h3>
    <form action="" method="" class="mt-3 mb-5">
        <fieldset>
            <label for="">Enter Booking Serial Number</label>
            <div class="row">
            <div class="field col-md-10">
            <input type="text" class="form-control" name="serial_num" id="serial_num">
            </div>
            <div class="btttn col-md-2" >
                <button class="btn btn-primary"> search</button>
            </div>
            </div>
        </fieldset>
    </form>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>