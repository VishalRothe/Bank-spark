<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Basic Banking Systerm</title>
  
<style>
    #footer
    {
      padding-top:7px;
      padding-bottom:27px;
      position:fixed;
      bottom:0px;
      width:100%;
      height:50px;
      color:white;
      background:#990011FF;
      text-align:center;
    }

   #text{
       padding-top:15px;
       padding-left:50px;
       padding-right:500px;
       font-family: serif; 
    }

   #title{
       padding-top:100px;
       padding-left:120px;
       padding-right:490px;
       font-family: raleway;
    }

     .btn {
           border-radius: 37px;
           padding-top:12px;
           padding-right:100px;
           padding-left:100px;
           margin-left: 90px;
           font-size:20px;
           background-color:#990011FF;
           color:white;
          }

    button:hover {
          background-color:#5b9aa0; 
          color: white;
           }
    body {
         width:1250px;
         background-image: url('cover.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;  
         background-size: cover;
        }

</style>

  </head>

  <body>
  
   <?php
  include 'navbar.php';
  ?> 

  <div class="container-fluid">
    <div class="row">

        <div class="heading text-right font-size-80px" id="title">
        <h style="font-size:48px;"><b>WELCOME TO<br></b></h>
            <h style="font-size:48px;"><b>SPARKS BANK!</b></h>
        </div>
    
        <div class="row activity text-center" id="text">
            <div class="col-md-10 act">
                 
                 <button onclick="location.href='transfermoney.php'" type="button" class="btn">View All Customers</button>
          </div>
      </div>      

</div>
  </div>
      
      <div id="footer">
      <pre style="color:white;font-family:Verdana;">&copy 2022. Made by Vishal Rothe || vishalrothe123@gmail.com  <a href="https://www.linkedin.com/in/vishal-rothe-032085229/" style="color:white;"> <i class="fa fa-linkedin-square icon fa-2x" ></i></a>  <a href="https://github.com/VishalRothe" style="color:white;"> <i class="fa fa-github icon fa-2x" ></i></a>
      
      </pre>
      
      </div>

      </body>
      </html>
