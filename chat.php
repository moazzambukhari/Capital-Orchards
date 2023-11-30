<?php include "header.php"?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<style type="text/css">

.rightbox {
    color: white;
    background: #a50404b3;
    padding: 10px 10px 10px 10px;
    box-shadow: 0px 0px 15px 0px #ccc;
}

@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic);
@import url(https://zavoloklom.github.io/material-design-iconic-font/css/docs.md-iconic-font.min.css);

/*ul li{
  list-style: none;
}*/
.fabs {
  bottom: 0;
  position: fixed;
  margin: 1em;
  /* /right: 0;/ */
  right: 0px;
  z-index: 998;
 
}

.fab {
  display: block;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  text-align: center;
  color: #f0f0f0;
  margin: 25px auto 0;
  box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
  cursor: pointer;
  -webkit-transition: all .1s ease-out;
  transition: all .1s ease-out;
  position: relative;
  z-index: 998;
  overflow: hidden;
  background: #42a5f5;
}

.fab > i {
  font-size: 2em;
  line-height: 55px;
  -webkit-transition: all .2s ease-out;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

.fab:not(:last-child) {
  width: 0;
  height: 0;
  margin: 20px auto 0;
  opacity: 0;
  visibility: hidden;
  line-height: 40px;
}

.fab:not(:last-child) > i {
  font-size: 1.4em;
  line-height: 40px;
}

.fab:not(:last-child).is-visible {
  width: 40px;
  height: 40px;
  /* /margin: 15px auto 10;/ */
  opacity: 1;
  visibility: visible;
}

.fab:nth-last-child(1) {
  -webkit-transition-delay: 25ms;
  transition-delay: 25ms;
}

.fab:not(:last-child):nth-last-child(2) {
  -webkit-transition-delay: 20ms;
  transition-delay: 20ms;
}

.fab:not(:last-child):nth-last-child(3) {
  -webkit-transition-delay: 40ms;
  transition-delay: 40ms;
}

.fab:not(:last-child):nth-last-child(4) {
  -webkit-transition-delay: 60ms;
  transition-delay: 60ms;
}

.fab:not(:last-child):nth-last-child(5) {
  -webkit-transition-delay: 80ms;
  transition-delay: 80ms;
}

/* .fab(:last-child):active,
.fab(:last-child):focus,
.fab(:last-child):hover {
  box-shadow: 0 0 6px rgba(0, 0, 0, .16), 0 6px 12px rgba(0, 0, 0, .32);
} */
/* /Chatbox/ */
.chatingroom {
      /* z-index: 9999999999999999; */
    height: 100vh;
    background: white;
    position: fixed;
    display: none;
    right: 0px;
    bottom: 0px;
    width: 400px;
    font-size: 12px;
    line-height: 22px;
    font-family: 'Roboto';
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
    opacity: 0;
    box-shadow: 1px 1px 100px 2px rgb(0 0 0 / 22%);
    /* border-radius: 10px; */
    -webkit-transition: all .2s ease-out;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.chat {
  position: fixed;
  right: 405px;
  /* /right: 80px;/ */
  display: none;
  bottom: 25px;
  width: 400px;
  font-size: 12px;
  line-height: 22px;
  font-family: 'Roboto';
  font-weight: 500;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  opacity: 0;
  box-shadow: 1px 1px 100px 2px rgba(0, 0, 0, 0.22);
  border-radius: 10px;
  -webkit-transition: all .2s ease-out;
  -webkit-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}

.chat_fullscreen {
    position: fixed;
    right: 0px;
    bottom: 0px;
    top: 0px;
    width: 100% !important;
  }
.chat_header {
      /* margin: 10px; */
    font-size: 13px;
    font-family: 'Roboto';
    font-weight: 500;
    color: #f3f3f3;
    height: 55px;
    background: #42a5f5;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding-top: 8px;
}
.chat_header2 {
      /* margin: 10px; */
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}
.chat_header .span {
  float:right;
}

.chat_fullscreen_loader {
  display: none;
    float: right;
    cursor: pointer;
    /* margin: 10px; */
    font-size: 20px;
    opacity: 0.5;
    /* padding: 20px; */
    margin: -15px 30px;
}

.chat.is-visible {
  opacity: 1;
  -webkit-animation: zoomIn .2s cubic-bezier(.42, 0, .58, 1);
  animation: zoomIn .2s cubic-bezier(.42, 0, .58, 1);
}
.chatingroom.is-visible {
  opacity: 1;
  -webkit-animation: zoomIn .2s cubic-bezier(.42, 0, .58, 1);
  animation: zoomIn .2s cubic-bezier(.42, 0, .58, 1);
}
.is-hide{
  opacity: 0
}

.chat_option {
  float: left;
  font-size: 15px;
  list-style: none;
  position: relative;
  height: 100%;
  width: 100%;
  text-align: relative;
  /* /margin-right: 10px;/ */
  margin: 0px 0px 0px 15px;
      letter-spacing: 0.5px;
      font-weight: 400
}


.chat_option img {
    border-radius: 50%;
    width: 55px;
    float: left;
    margin: -30px 20px 10px 20px;
    border: 4px solid rgba(0, 0, 0, 0.21);
}

.change_img img{
    width: 35px;
    margin: 0px 20px 0px 20px;
}
.chat_option .agent {
  font-size: 12px;
    font-weight: 300;
}
.chat_option .online{
      opacity: 0.4;
    font-size: 11px;
    font-weight: 300;
}
.chat_color {
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  margin: 10px;
  float: left;
}


.chat_body {
  background: #fff;
  width: 100%;

  display: inline-block;
  text-align: center;
    overflow-y: auto;

}
#chat_body{
    height: 450px;
}
.chat_login p,.chat_body li, p, a{
    -webkit-animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
  animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
}
.chat_body p {
  padding: 20px;
  color: #888
}
.chat_body a {
  width: 10%;
  text-align: center;
  border: none;
  box-shadow: none;
  line-height: 40px;
  font-size: 15px;
}



.chat_field {
  position: relative;
  margin: 5px 0 5px 0;
  width: 50%;
  font-family: 'Roboto';
  font-size: 12px;
  line-height: 30px;
  font-weight: 500;
  color: #4b4b4b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  border: none;
  outline: none;
  display: inline-block;
}

.chat_field.chat_message {
  height: 30px;
  resize: none;
      font-size: 13px;
    font-weight: 400;
}
.chat_category{
  text-align: left;
}

.chat_category{
  margin: 20px;
  background: rgba(0, 0, 0, 0.03);
  padding: 10px;
}

.chat_category ul li{
    width: 80%;
    height: 30px;
    background: #fff;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    border-radius: 3px;
    border: 1px solid #e0e0e0;
    font-size: 13px;
    cursor: pointer;
    line-height: 30px;
    color: #888;
    text-align: center;
}

.chat_category li:hover{
    background: #83c76d;
    color: #fff;
}
.chat_category li.active{
    background: #83c76d;
    color: #fff;
}

.tags{
 margin: 20px;
    bottom: 0px;
    display: block;
    width: 120%
}
.tags li{
    padding: 5px 10px;
    border-radius: 40px;
    border: 1px solid rgb(3, 117, 208);
    margin: 5px;
    display: inline-block;
    color: rgb(3, 117, 208);
    cursor: pointer;

}
.fab_field {
  width: 100%;
  display: inline-block;
  text-align: center;
  background: #fff;
  border-top: 1px solid #eee;
  border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;

}
.fab_field2 {
    bottom: 0px;
    position: absolute;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
        z-index: 999;
  }

.fab_field a {
  display: inline-block;
  text-align: center;
}

#fab_camera {
  float: left;
  background: rgba(0, 0, 0, 0);
}

#fab_send {
  float: right;
  background: rgba(0, 0, 0, 0);
}

.fab_field .fab {
  width: 35px;
  height: 35px;
  box-shadow: none;
  margin: 5px;
}

.fab_field .fab>i {
  font-size: 1.6em;
  line-height: 35px;
  color: #bbb;
}
.fab_field .fab>i:hover {
  color: #42a5f5;
}
.chat_conversion {

}

.chat_converse {
  position: relative;
    background: #fff;
    margin: 0px 0 0px 0;
    /* /height: 300px;/ */
    height: 350px;
    min-height: 0;
    font-size: 12px;
    line-height: 18px;
    overflow-y: auto;
    width: 100%;
    float: right;
    /* /padding-bottom: 100px;/ */
}
.chat_converse2{
      height: 100%;
    max-height: 800px
}
.chat_list {
  opacity: 0;
  visibility: hidden;
  height: 0;
}

.chat_list .chat_list_item {
  opacity: 0;
  visibility: hidden;
}

.chat .chat_converse .chat_msg_item {
  position: relative;
  margin: 8px 0 15px 0;
  padding: 8px 10px;
  /* /max-width: 60%;/ */
  max-width: 90%;
  display: block;
  word-wrap: break-word;
  border-radius: 3px;
  -webkit-animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
  animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
  clear: both;
  z-index: 999;
}
.status {
    margin: 45px -50px 0 0;
    float: right;
    font-size: 11px;
    opacity: 0.3;
}
.status2 {
    margin: -10px 20px 0 0;
    float: right;
    display: block;
    font-size: 11px;
    opacity: 0.3;
}
.chat .chat_converse .chat_msg_item .chat_avatar {
  position: absolute;
  top: 0;
}

.chat .chat_converse .chat_msg_item.chat_msg_item_admin .chat_avatar {
  left: -52px;
  background: rgba(0, 0, 0, 0.03);
}

.chat .chat_converse .chat_msg_item.chat_msg_item_user .chat_avatar {
  right: -52px;
  background: rgba(0, 0, 0, 0.6);
}

.chat .chat_converse .chat_msg_item .chat_avatar, .chat_avatar img{
  width: 40px;
  height: 40px;
  text-align: center;
  border-radius: 50%;
}

.chat .chat_converse .chat_msg_item.chat_msg_item_admin {
  /* /margin-left: 60px;/ */
  margin-left: 20px;
  float: left;
  background: rgba(0, 0, 0, 0.03);
  color: #666;
}

.chat .chat_converse .chat_msg_item.chat_msg_item_user {
  margin-right: 20px;
  float: right;
  background: #42a5f5;
  color: #eceff1;
}

.chat .chat_converse .chat_msg_item.chat_msg_item_admin:before {
  content: '';
  position: absolute;
  top: 15px;
  left: -12px;
  z-index: 998;
  border: 6px solid transparent;
  border-right-color: rgba(255, 255, 255, .4);
}

.chat_form .get-notified label{
    color: #077ad6;
    font-weight: 600;
    font-size: 11px;
}

input {
  position: relative;
  width: 90%;
  font-family: 'Roboto';
  font-size: 12px;
  line-height: 20px;
  font-weight: 500;
  color: #4b4b4b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  outline: none;
  background: #fff;
  display: inline-block;
  resize: none;
  padding: 5px;
  border-radius: 3px;
}
.chat_form .get-notified input {
  margin: 2px 0 0 0;
  border: 1px solid #83c76d;
}
.chat_form .get-notified i {
    background: #83c76d;
    width: 30px;
    height: 32px;
    font-size: 18px;
    color: #fff;
    line-height: 30px;
    font-weight: 600;
    text-align: center;
    margin: 2px 0 0 -30px;
    position: absolute;
    border-radius: 3px;
}
.chat_form .message_form {
  margin: 10px 0 0 0;
}
.chat_form .message_form input{
  margin: 5px 0 5px 0;
  border: 1px solid #e0e0e0;
}
.chat_form .message_form textarea{
  margin: 5px 0 5px 0;
  border: 1px solid #e0e0e0;
  position: relative;
  width: 90%;
  font-family: 'Roboto';
  font-size: 12px;
  line-height: 20px;
  font-weight: 500;
  color: #4b4b4b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  outline: none;
  background: #fff;
  display: inline-block;
  resize: none;
  padding: 5px;
  border-radius: 3px;
}
.chat_form .message_form button{
    margin: 5px 0 5px 0;
    border: 1px solid #e0e0e0;
    position: relative;
    width: 95%;
    font-family: 'Roboto';
    font-size: 12px;
    line-height: 20px;
    font-weight: 500;
    color: #fff;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
    outline: none;
    background: #fff;
    display: inline-block;
    resize: none;
    padding: 5px;
    border-radius: 3px;
    background: #83c76d;
    cursor: pointer;
}
strong.chat_time {
  padding: 0 1px 1px 0;
  font-weight: 500;
  font-size: 8px;
  display: block;
}

/* /Chatbox scrollbar/ */

#chat_converse::-webkit-scrollbar {
  width: 6px;
}

#chat_converse::-webkit-scrollbar-track {
  border-radius: 0;
}

#chat_converse::-webkit-scrollbar-thumb {
  margin: 2px;
  border-radius: 10px;
  background: rgba(0, 0, 0, 0.2);
}
/* /Element state/ */

.is-active {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
  -webkit-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}

.is-float {
  box-shadow: 0 0 6px rgba(0, 0, 0, .16), 0 6px 12px rgba(0, 0, 0, .32);
}

.is-loading {
  display: block;
  -webkit-animation: load 1s cubic-bezier(0, .99, 1, 0.6) infinite;
  animation: load 1s cubic-bezier(0, .99, 1, 0.6) infinite;
}
/* /Animation/ */

/*@-webkit-keyframes zoomIn {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0.0;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes zoomIn {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0.0;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
}*/

/*@-webkit-keyframes load {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0.0;
  }
  50% {
    -webkit-transform: scale(1.5);
    transform: scale(1.5);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0;
  }
}*/

/*@keyframes load {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
    opacity: 0.0;
  }
  50% {
    -webkit-transform: scale(1.5);
    transform: scale(1.5);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0;
  }
}*/
/* SMARTPHONES PORTRAIT */

@media only screen and (min-width: 300px) {
  .chat {
    width: 250px;
  }
}
/* SMARTPHONES LANDSCAPE */

@media only screen and (min-width: 480px) {
  .chat {
    width: 300px;
  }
  .chat_field {
    width: 65%;
  }
}
/* TABLETS PORTRAIT */

@media only screen and (min-width: 768px) {
  .chat {
    width: 300px;
  }
  .chat_field {
    width: 65%;
  }
}
/* TABLET LANDSCAPE / DESKTOP */

@media only screen and (min-width: 1024px) {
  .chat {
    width: 300px;
  }
  .chat_field {
    width: 65%;
  }
}
/* /Color Options/ */



.blue .fab {
  background: #42a5f5;
  color: #fff;
}



.blue .chat {
  background: #42a5f5;
  color: #999;
}


/* Ripple */

.ink {
  display: block;
  position: absolute;
  background: rgba(38, 50, 56, 0.4);
  border-radius: 100%;
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  webkit-transform: scale(0);
  -webkit-transform: scale(0);
          transform: scale(0);
}
/* /animation effect/ */

.ink.animate {
  -webkit-animation: ripple 0.5s ease-in-out;
          animation: ripple 0.5s ease-in-out;
}

@-webkit-keyframes ripple {
  /* /scale the element to 250% to safely cover the entire link and fade it out/ */
 
  100% {
    opacity: 0;
    -moz-transform: scale(5);
    -ms-transform: scale(5);
    webkit-transform: scale(5);
    -webkit-transform: scale(5);
            transform: scale(5);
  }
}

@keyframes ripple {
  /* /scale the element to 250% to safely cover the entire link and fade it out/ */
 
  100% {
    opacity: 0;
    -moz-transform: scale(5);
    -ms-transform: scale(5);
    webkit-transform: scale(5);
    -webkit-transform: scale(5);
            transform: scale(5);
  }
}
::-webkit-input-placeholder { /* Chrome */
  color: #bbb;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #bbb;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #bbb;
}
:-moz-placeholder { /* Firefox 4 - 18 */
  color: #bbb;
}

INPUT:hover {
    border: none;
}
.fabCollapse{
  display: none !important;
}

.call-animation {
/*    
    /width: 100px;/
    /height: 100px;/
    /position: relative;/
    /margin: 0 auto;/
    /border-radius: 100%;/ */
   
    animation: play 2s ease infinite;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
 
}
@keyframes play {

    0% {
        transform: scale(0.5);
    }
    15% {
        box-shadow: 0 0 0 5px rgba(255, 255, 255, 0.4);
    }
    25% {
        box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.4), 0 0 0 20px rgba(255, 255, 255, 0.2);
    }
    25% {
        box-shadow: 0 0 0 15px rgba(255, 255, 255, 0.4), 0 0 0 30px rgba(255, 255, 255, 0.2);
    }

}

.chatingroom-body ul li.queryli {
    display: block;
    width: 100%;
    position: relative;
    background: #f5f5f5;
    margin: 10px 0px 0px 2px;
    cursor: pointer;
}
.chatingroom-body ul li {
    list-style: none;
    margin: 15px 0;
}
.chatingroom-body ul{
/* /display: flex;/ */
    margin: 0px 0px 15px 0px;
    padding: 0px 0px 0px 5px;
  }
.chatingroom-body ul li.queryli p {
    color: #000;
    font-size: 10px;
    line-height: 1.5;
    font-weight: 400;
    padding: 15px;
    /* /background: #f5f5f5;/ */
    display: inline-block;
    border-bottom-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    margin-bottom: 0;
}
.time {
        display: block;
    color: white;
    font-size: 10px;
    line-height: 1.5;
    font-weight: bold;
    position: absolute;
    top: 40px;
    background: #373535;
    padding: 5px 5px 5px 5px;
    border-radius: 4px;
    text-transform: uppercase;
    /* right: 22px; */
    width: 80px;
    text-align: center;
    /* left: 30px;
}
</style>
<div class="fabs">
  <div class="chatingroom">
    <input type="text" style="border: none;
    width: 100%;
    margin-top: 5px;" id="filter" placeholder="search case chat......">
    <div class="chatingroom-body">
                    <ul class="chatingromfetch">
                     
                    </ul>
                  </div>
  </div>
  <div class="chat">
    <div class="chat_header">
      <div class="chat_option">
        <span id="chat_head">QuickFixMobiles</span> <br> <span class="agent"></span>
        <!-- <span class="online">(Online)</span> -->
        <span id="chat_fullscreen_loader" class="chat_fullscreen_loader" style="display: block;"><i class="fullscreen zmdi zmdi-window-maximize"></i></span>
      </div>

    </div>
    <div id="chat_converse" class="chat_conversion chat_converse" style="display:block">
         
    </div>
   
   
     
    <div class="fab_field">
      <!-- <a id="fab_camera" class="fab"><i class="zmdi zmdi-camera"></i></a> -->
      <a id="fab_send" class="fab"><i class="zmdi zmdi-mail-send"></i></a>
      <input id="chatSend" name="chat_message" placeholder="Send a message" class="chat_field chat_message">
    </div>
  </div>
    <a id="prime" class="fab"><i class="prime zmdi zmdi-comment-outline"></i></a>
</div>
<?php include "footer.php"?>