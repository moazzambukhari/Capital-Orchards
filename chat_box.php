<?php include "config.php";?>
<style>
body{
    font-family: poppins;
}
.main-chat::-webkit-scrollbar {
  width: 3px;
}

/* Track */
.main-chat::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.main-chat::-webkit-scrollbar-thumb {
  background: #f2f2f2; 
  border-radius: 10px;
}

/* Handle on hover */
.main-chat::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
        .main-chat{
            width: 23% !important;
            height: 497px;
            border: 1px solid transparent;
            position: fixed;
            bottom: 19px;
            right: 10px;
            padding: 0px !important;
            border-radius: 10px 10px 0px 0px;
            /* /overflow: scroll; */
            /* overflow: hidden; */
            z-index: 99999;
            overflow-y:scroll;
        }
        .chat-header{
            height: 200px;
            width: 100%;
            /* border: 1px solid #000;
            border-radius: 10px 10px 0px 0px; */
            /* background-color: #000D13; */
            color: #fff;
            background-image: url(images/bac.png);
            /* width: 100%;
            height: 219px; */
            background-size: cover;
}
        
        .chat-header img{
            height: 40px;
            width: 40px;
            margin: 10px;
            text-align: center;
    margin: auto;
    display: flex;
        }
        .chat-header h3{
            padding: 10px;
            font-size: 14px;
            font-family: poppins;
        }
        .question{
            height: auto;
            width: 70%;
            /* outline: 1px solid #f1f1f1; */
            position: absolute;
            top: 143px;
            left: 50px;
            /* box-shadow: inset 5em 1em gold; */
            /* box-shadow: rgb(0 0 0 / 10%) 0px 4px 15px 0px, rgb(0 0 0 / 10%) 0px 1px 2px 0px, rgb(0 30 43 / 50%) 0px 2px 0px 0px inset;
            transition: all 0.3s ease-out 0s; */
            /* overflow: visible; */
            box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
            0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
        }

        .question h5{
            height: 30px;
            width: 100px;
            /* border: 1px solid #fff; */
            /* border-radius: 30px 30px; */
            color: #fff;
            text-align: center;
            margin: 10px 70px;
        }
        .question p{
            height: 25px;
            width: 150px;
            border: 1px solid #000;
            border-radius: 30px 30px;
            color: #000;
            text-align: center;
            margin: 24px 48px;
            font-size: 13px;
        }
        .conversation{
            height: 100px;
            width: 90%;
            outline: 1px solid gold;
            position: absolute;
            top: 366px;
            left: 20px;
            box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
        }
        .conversation h5{
            height: 30px;
            width: 200px;
            border: 1px solid #000;
            border-radius: 30px 30px;
            color: #000;
            text-align: center;
            margin: 10px 70px;
        }
        .conversation p{
            height: 30px;
            width: 200px;
            border: 1px solid #000;
            border-radius: 30px 30px;
            color: #000;
            text-align: center;
            margin: 30px 70px;
        }
        .chat-icon{
            height: 58px;
            width: 58px !important;
            /* border: 1px solid #000;
            border-radius: 50% 50%; */
            position: fixed;
            bottom: 10px;
            right: 10px;
            z-index: 9999;
        }
        .chat-icon img{
            height: 58px;
            width: 58px;
            border: 1px solid #000;
            border-radius: 50% 50%;
            
        }
        .cross{
            display: none;
        }
        .cross i{
            height: 40px;
            width: 40px;
            border: 1px solid #000;
            border-radius: 50% 50%;
            position: fixed;
            bottom: -10px;
            right: 150px;
            text-align: center;
            margin: 10px 10px;
            padding: 11px;
            /* display: none; */
            background-color: #000;
            color: #fff;
            z-index: 99999;
        }
        .chat-header h3,h6{
            color: #fff;
        }
        .main-chat{
            display:none; 
            background-color: #fff;
        }
        .inbox {
    position: fixed;
    bottom: 20px;
    width: 23%;
    display: none;
        }
        .inbox input{
            border: 1px solid #f1f1f1;
        }

        .bnn{
            padding: 0px;
            width: 80%;
            margin-left: 11px;
            border-right:none;
        }
        .bn{
            border: 1px solid #f1f1f1;
            border-left:none;
            height: 44px;
            width: 51px;
            margin: 0px;
            background-color: #fff;
        }
        
        .bn img{
          width: 30px;
          height:30px;
        }
        .bn{
            padding: 0px;
        }
        @media only screen and (max-width: 600px) {
    .chat-icon {
    height: 58px;
    width: 58px !important;
    position: fixed;
    bottom: 49px;
    right: 10px;
    z-index: 9999;
}

/* .social-icons li{
    position: absolute;
   
} */


#wa-widget-send-button {

    bottom: 32px !important;
}

.main-chat{
    width: 95% !important;
}


        }
       .close{
        width: 50px;
        height: 50px;

       }
       .close i{
        width: 50px;
        height: 50px;
        position: absolute;
        left: 15px;
        top: 10px;
       }
       .starting-chat{
            height: auto;
            width: 100%;
            /* outline: 1px solid #f1f1f1; */
            position: absolute;
            }
            .starting-chat .me {
            height: auto;
            width: 78% !important;
            background-color: blue;
            color: #fff;
            border: 1px solid blue;
            border-radius: 5px 5px;
            float: right;
            /* position: fixed;
            bottom: 53px;
            right: 15px; */
}
            /* .starting-chat .reply{
            height: 39px;
            width: 78% !important;
            background-color: #b30000;
            color: #fff;
            border: 1px solid #b30000;
            border-radius: 5px 5px;
            float: left;
           
} */


.help{
            height: 280px;
            width: 90%;
            padding: 20px;
            position: absolute;
            top: 186px;
            left: 20px;
            box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
            display: none;
            cursor: pointer;
        }
        .help1{
            cursor: pointer;
        }
        .help2{
            cursor: pointer;
        }
        .help3{
            cursor: pointer;
        }

    </style>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

                <!-- <div class="help">
                    <img src="images/helper.gif" alt="">
                </div> -->
            <div class="main-chat transfer">
            <div class="chat-header">
            <img src="images/LOGO.png" alt="">
            <h6 class="text-center">Customer Information Center</h6>
            <div class="close">
            <i class="fa fa-arrow-left-long"></i>
            </div>
            </div>
            <div class="question">
                <h5>Sugession</h5>
                <p class="help1">How Can i Help You? <i class="fa fa-angle-right"></i></p>
                <p class="help2">How Can i Help You? <i class="fa fa-angle-right"></i></p>
                <p class="help3">How Can i Help You? <i class="fa fa-angle-right"></i></p>
            </div>
            <div class="starting-chat" style="display:none;">
            <p class="me">
            <?php      
                    $select ="SELECT * FROM message";
                    $result = mysqli_query($con,$select);
                    while($row = mysqli_fetch_assoc($result)){
                    $me = $row['me'];

                    echo "<ul style='list-style:none;'>
                    <li style='background-color:blue; color:#fff; border-radius:5px 5px;'>$me <br></li>
                    </ul>";
                    
                    }
                ?>   
            </p>
            <p class="reply">

            <?php      
                    $select ="SELECT * FROM message";
                    $result = mysqli_query($con,$select);
                    while($row = mysqli_fetch_assoc($result)){
                    $reply = $row['reply'];

                    echo "<ul style='list-style:none;'>
                    <li style='background-color:#b30000; color:#fff; border-radius:5px 5px;'>$me <br></li>
                    </ul>";
                    
                    }
                ?>
            </p>    
            </div>
                <div class="help">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta iusto quisquam quasi in earum cum sequi, perspiciatis enim nobis, voluptates corporis repellendus esse a sit eaque, quas assumenda natus id.</p>
                </div>
                    
            <div class="conversation">
                <h5>Start Conversation</h5>
                 <center><button class="btn btn-danger" type="button" id="conversation">Start Chat<i class="fa-brands fa-rocketchat"></i></button></center>
               </div>
               <div class="inbox">
                <div class="row">
                    <div class="col-md-10 bnn">
                    <input type="text" id="message" name="message" class="form-control" placeholder="Enter a Text">         
                   
                    </div>
                    <div class="col-md-2 bn">
                    <button class="btnn btn" id="btnn" ><img src="images/send.png" alt=""></button>
                    </div>
                </div>
               

            </div>
            </div>
            <div class="chat-icon">
            <img src="images/chat1.gif" alt="">
        
        </div>
        <div class="cross ui-state-default ui-corner-all">
        <i class="fa fa-angle-right"></i>
        </div>
    <!-- </div>
         </div> -->


<!-- <div class="cut"><i class="fa fa-xmark"></i></div> -->
<!-- --------------------end chat-------------- -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
    $(document).on('click','.chat-icon',function(){
        // $('.main-chat').show();
        setTimeout(function(){
            $('.cross').show();            
        },2000)

        $('.chat-icon').hide();
        $('.close').hide();
        $('.main-chat').show("slide", { direction: "right" }, 1500);
    })

    $(document).on('click','.cross',function(){
        $('.chat-icon').show();
        // $('.main-chat').hide();
        $('.cross').hide();
        $('.close').hide();
        $('.main-chat').hide("slide", { direction: "right" }, 1500);


        
    })

    $(document).on('click','#conversation',function(){
        $('.inbox').show();
        $('.close').show();
        $('.conversation').hide();
        $('.question').hide();    
        $('.starting-chat').show(); 
        $('.help').hide();
    })

    $(document).on('click','.close',function(){
        $('.main-chat').show();
        $('.conversation').show();
        $('.question').show();  
        $('.inbox').hide(); 
        $('.starting-chat').hide();
        $('.help').hide();
        $('.close').show();


    });
        $(document).on('click','#btnn',function(){
            let message = $('#message').val();
            $.ajax({
                url: "chat-ajax.php",
                type:'POST',
                data: {'status':'status','message':message},
                success:function(data){
                    
                }
            });
        });

        $(document).on('click','.help1',function(){
            $('.conversation').hide();
        $('.question').hide();  
        $('.inbox').hide(); 
        $('.help').show(); 
        $('.close').show();
        });

        $(document).on('click','.help2',function(){
            $('.conversation').hide();
        $('.question').hide();  
        $('.inbox').hide(); 
        $('.help').show(); 
        $('.close').show();
});
        $(document).on('click','.help3',function(){
        $('.conversation').hide();
        $('.question').hide();  
        $('.inbox').hide(); 
        $('.help').show(); 
        $('.close').show();
        });

  </script>
