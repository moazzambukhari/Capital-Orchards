<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<style>
    .main-slider{
        /* position: relative; */
        margin-top: 80px;
    }
 

</style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
  <div class="container-fluid main-slider">

<div class="row">
    <div class="col-md-12">
    <div id="text">

    </div>
    </div>
</div>


</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    var i=0, text;
    text = "Welcome To Capital Orchards";
    function typing(){
        // alert(text.length)
        if(i<text.length)
        {
            // alert(text)
            document.getElementById("text").innerHTML += text.charAt(i);
            i++;
            setTimeout(typing,50);
        }
    }
    typing();
</script>

  </body>
</html>


