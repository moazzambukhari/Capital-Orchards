<?php include "header.php"?>
<style>
    .box-imgg #library{
        height: 70px;
        width: 120px;
    }
    .box-imgg #library2{
        height: 70px;
        width: 120px;
    }
    /* .box-imgg img:hover{
    background-image: url('images/chat-images/2nd.png');
    height: 70px;
    width: 120px;

    } */
</style>

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-3 mt-5 box-imgg">
            <img src="images/chat-images/1st.png" alt="" id=" library">
            <img src="images/chat-images/2nd.png" alt="" id=" library2" style="display:none;">
            <!-- <img src="images/chat-images/2nd.png" alt=""> -->
        </div>
    </div>
</div>
<?php include "footer.php"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

    $(document).on('hover','#library',function(){
        $('#library').hide();
        $('#library2').show();
    })
</script>