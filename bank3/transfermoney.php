<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      
      button{
          background-color:#990011FF;
          color:white;
      }
      button:hover{
        background-color:#5b9aa0;
        color: white;
      }
      .table{
          background-color:#C1E1D2;
          border: 3px solid black;
          text-align: center;
      }
      #button1 {
           padding:10px;
           margin-left:420px;
           margin-top:7px;
           margin-bottom:20px;
           padding-right:20px;
           padding-left:20px;
           font-size:17px;
           background-color:#990011FF;
           color:white; 
          }

      #button1:hover {
          background-color:#5b9aa0; 
          color: white;
           }
    </style>
</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="font-family: serif;font-size:39px;"><b>TRANSFER MONEY</b></h2>
        <button onclick="location.href='transactionhistory.php'" type="button" class="btn" id="button1">Go To Transaction History</button>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="font-family:serif;font-size:18.5px;">
                        <thead>
                            <tr>
                            <th class="text-center py-2">ID</th>
                            <th class="text-center py-2">CUSTOMER NAME</th>
                            <th class="text-center py-2">EMAIL</th>
                            <th class="text-center py-2">ACCOUNT BALANCE</th>
                            <th class="text-center py-2">TRANSACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="font-size:19px;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>

