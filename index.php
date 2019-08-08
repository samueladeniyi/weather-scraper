<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>samuel adeniyi weather scraper</title>
    <style>
       html,body { 
 height:100%;
background:url(weather2.jpg);
background-size:cover;
           background-position:center;
}


        .container{
           
           width:100%;
           height:100%;
           
            padding-top: 100px;
        
            
                }
       
       
       
        .center{
            text-align:center;
            color: white;
        }
        
        .alert{
            display:none;
            margin-top:20px;
        }
        
        .lead{
            color:green;
        }
        
        #myWeather{
            margin-top:20px;
        }
           </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
       
                <h1 class="center">Weather Forecast </h1>
                <p class="lead center"><b>Please enter a City to check the 3-Day Weather forecast</b></p>
                
                <form>
                 <div class="form-group">
                    <input type="text" class="form-control" name="city" id="city" placeholder="eg. London,Paris,Abuja" />
                    </div>
                    <button id="myWeather" class="btn btn-success btn-lg">check weather</button>
                </form>
                <div id="success" class="alert alert-success">Success!</div>
                <div id="fail" class="alert alert-danger">Sorry, could not get weather for that city, please check the city and try again</div>
                <div id="noCity" class="alert alert-danger">Please Enter a City </div>
            </div>
        </div>
     </div>    


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script>
     $("#myWeather").click(function(event){
         event.preventDefault();
  if($("#city").val()!=""){
  $.get("scraper.php?city="+$("#city").val(), function( data ){
      $(".alert").hide();
      
      if(data==""){
      
      $("#fail").fadeIn();
       
      }
      else{
          $("#success").html(data).fadeIn();
          
      }
   });  
      
  }
   else{
      $("#noCity").fadeIn();
  }
    });
  </script>
  
  </body>
</html>
