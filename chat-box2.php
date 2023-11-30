
<style>
    body {
  margin: 0;
  padding: 0;
  font-family: "Lato", sans-serif;
  background-color: #f6f7f9;
}

h1 {
  margin: 0;
  font-size: 16px;
  line-height: 1;
}

button {
  color: inherit;
  background-color: transparent;
  border: 0;
  outline: 0 !important;
  cursor: pointer;
}
button.chatbox-open {
  position: fixed;
  bottom: 0;
  right: 0;
  width: 52px;
  height: 52px;
  color: #fff;
  background-color: #0360a5;
  background-position: center center;
  background-repeat: no-repeat;
  box-shadow: 12px 15px 20px 0 rgba(46, 61, 73, 0.15);
  border: 0;
  border-radius: 50%;
  cursor: pointer;
  margin: 16px;
}
button.chatbox-close {
  position: fixed;
  bottom: 0;
  right: 0;
  width: 52px;
  height: 52px;
  color: #fff;
  background-color: #0360a5;
  background-position: center center;
  background-repeat: no-repeat;
  box-shadow: 12px 15px 20px 0 rgba(46, 61, 73, 0.15);
  border: 0;
  border-radius: 50%;
  cursor: pointer;
  display: none;
  margin: 16px calc(2 * 16px + 52px) 16px 16px;
}

textarea {
  box-sizing: border-box;
  width: 100%;
  margin: 0;
  height: calc(16px + 16px / 2);
  padding: 0 calc(16px / 2);
  font-family: inherit;
  font-size: 16px;
  line-height: calc(16px + 16px / 2);
  color: #888;
  background-color: none;
  border: 0;
  outline: 0 !important;
  resize: none;
  overflow: hidden;
}
textarea::-moz-placeholder {
  color: #888;
}
textarea:-ms-input-placeholder {
  color: #888;
}
textarea::placeholder {
  color: #888;
}

.chatbox-popup {
  display: flex;
  position: absolute;
  box-shadow: 5px 5px 25px 0 rgba(46, 61, 73, 0.2);
  flex-direction: column;
  display: none;
  bottom: calc(2 * 16px + 52px);
  right: 16px;
  width: 377px;
  height: auto;
  background-color: #fff;
  border-radius: 16px;
}
.chatbox-popup .chatbox-popup__header {
  box-sizing: border-box;
  display: flex;
  width: 100%;
  padding: 16px;
  color: #fff;
  background-color: #0360a5;
  align-items: center;
  justify-content: space-around;
  border-top-right-radius: 12px;
  border-top-left-radius: 12px;
}
.chatbox-popup .chatbox-popup__header .chatbox-popup__avatar {
  margin-top: -32px;
  background-color: #0360a5;
  border: 5px solid rgba(0, 0, 0, 0.1);
  border-radius: 50%;
}
.chatbox-popup .chatbox-popup__main {
  box-sizing: border-box;
  width: 100%;
  padding: calc(2 * 16px) 16px;
  line-height: calc(16px + 16px / 2);
  color: #888;
  text-align: center;
}
.chatbox-popup .chatbox-popup__footer {
  box-sizing: border-box;
  display: flex;
  width: 100%;
  padding: 16px;
  border-top: 1px solid #ddd;
  align-items: center;
  justify-content: space-around;
  border-bottom-right-radius: 12px;
  border-bottom-left-radius: 12px;
}

.chatbox-panel {
  display: flex;
  position: absolute;
  box-shadow: 5px 5px 25px 0 rgba(46, 61, 73, 0.2);
  flex-direction: column;
  display: none;
  top: 0;
  right: 0;
  bottom: 0;
  width: 377px;
  background-color: #fff;
}
.chatbox-panel .chatbox-panel__header {
  box-sizing: border-box;
  display: flex;
  width: 100%;
  padding: 16px;
  color: #fff;
  background-color: #0360a5;
  align-items: center;
  justify-content: space-around;
  flex: 0 0 auto;
}
.chatbox-panel .chatbox-panel__main {
  box-sizing: border-box;
  width: 100%;
  padding: calc(2 * 16px) 16px;
  line-height: calc(16px + 16px / 2);
  color: #888;
  text-align: center;
  flex: 1 1 auto;
}
.chatbox-panel .chatbox-panel__footer {
  box-sizing: border-box;
  display: flex;
  width: 100%;
  padding: 16px;
  border-top: 1px solid #ddd;
  align-items: center;
  justify-content: space-around;
  flex: 0 0 auto;
}
</style>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <button class="chatbox-open">
    <i class="fa fa-comment fa-2x" aria-hidden="true"></i>
  </button>
<button class="chatbox-close">
    <i class="fa fa-close fa-2x" aria-hidden="true"></i>
  </button>
<section class="chatbox-popup">
  <header class="chatbox-popup__header">
    <aside style="flex:3">
      <i class="fa fa-user-circle fa-4x chatbox-popup__avatar" aria-hidden="true"></i>
    </aside>
    <aside style="flex:8">
      <h1>Sussanah Austin</h1> Agent (Online)
    </aside>
    <aside style="flex:1">
      <button class="chatbox-maximize"><i class="fa fa-window-maximize" aria-hidden="true"></i></button>
    </aside>
  </header>
  <main class="chatbox-popup__main">
    We make it simple and seamless for<br> bussiness and people to talk to each<br> other. Ask us anything.
  </main>
  <footer class="chatbox-popup__footer">
    <aside style="flex:1;color:#888;text-align:center;">
      <i class="fa fa-camera" aria-hidden="true"></i>
    </aside>
    <aside style="flex:10">
      <textarea type="text" placeholder="Type your message here..." autofocus></textarea>
    </aside>
    <aside style="flex:1;color:#888;text-align:center;">
      <i class="fa fa-paper-plane" aria-hidden="true"></i>
    </aside>
  </footer>
</section>
<section class="chatbox-panel">
  <header class="chatbox-panel__header">
    <aside style="flex:3">
      <i class="fa fa-user-circle fa-3x chatbox-popup__avatar" aria-hidden="true"></i>
    </aside>
    <aside style="flex:6">
      <h1>Sussanah Austin</h1> Agent (Online)
    </aside>
    <aside style="flex:3;text-align:right;">
      <button class="chatbox-minimize"><i class="fa fa-window-restore" aria-hidden="true"></i></button>
      <button class="chatbox-panel-close"><i class="fa fa-close" aria-hidden="true"></i></button>
    </aside>
  </header>
  <main class="chatbox-panel__main" style="flex:1">
    We make it simple and seamless for<br> bussiness and people to talk to each<br> other. Ask us anything.
  </main>
  <footer class="chatbox-panel__footer">
    <aside style="flex:1;color:#888;text-align:center;">
      <i class="fa fa-camera" aria-hidden="true"></i>
    </aside>
    <aside style="flex:10">
      <textarea type="text" placeholder="Type your message here..." autofocus></textarea>
    </aside>
    <aside style="flex:1;color:#888;text-align:center;">
      <i class="fa fa-paper-plane" aria-hidden="true"></i>
    </aside>
  </footer>
</section>    


</body>
</html>


<?php //include "footer.php";?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    const chatbox = jQuery.noConflict();

chatbox(() => {
  chatbox(".chatbox-open").click(() =>
    chatbox(".chatbox-popup, .chatbox-close").fadeIn()
  );

  chatbox(".chatbox-close").click(() =>
    chatbox(".chatbox-popup, .chatbox-close").fadeOut()
  );

  chatbox(".chatbox-maximize").click(() => {
    chatbox(".chatbox-popup, .chatbox-open, .chatbox-close").fadeOut();
    chatbox(".chatbox-panel").fadeIn();
    chatbox(".chatbox-panel").css({ display: "flex" });
  });

  chatbox(".chatbox-minimize").click(() => {
    chatbox(".chatbox-panel").fadeOut();
    chatbox(".chatbox-popup, .chatbox-open, .chatbox-close").fadeIn();
  });

  chatbox(".chatbox-panel-close").click(() => {
    chatbox(".chatbox-panel").fadeOut();
    chatbox(".chatbox-open").fadeIn();
  });
});

</script>
