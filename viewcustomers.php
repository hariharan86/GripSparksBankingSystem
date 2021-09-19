<?php
    $con = mysqli_connect("localhost", "root", "", "bank");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SmartBanks | Viewcustomers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body >

<nav class="navbar navbar-expand-md  navbar-light" style="background-color:#b3b3ff;">
  <a class="navbar-brand" href="index.php" style="color:#800000;font-family: 'Courgette', cursive;font-size:3em;" >SmartBank</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav " >
      <li class="nav-item">
       <a class="nav-link " href="index.php" style="color:#800000;font-weight:1em;">
                            <div style="padding-right:0px;" >
                                &nbsp;&nbsp;&nbsp;&nbsp;<img height="60"src="./images/hicon.png">
                            </div>
                            <span style="padding-right:20px;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</span>
                        </a> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transferrecords.php" style="color:#800000;font-weight:1em;">
                            <div style="padding-left:20px;" >
                                <img height="60"src="./images/transfer.png">
                            </div>
                            Transfer Records
                        </a> 
      </li>
         </ul>
  </div>  
</nav>
<br>

<div class="container">
  <h3 style="text-align:center;color:#800000;font-family: 'Courgette', cursive;font-size:2em;">Customers</h3>
    <table class="table table-bordered table-hover" style="text-align:center;"> 
        <thead   style="background-color:#e6e6ff;">
            <tr> 
               <th>Customer ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Current Balance</th>
            <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $sql = "SELECT * FROM `customers`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'acustomer.php'>";
            echo "<td>". $row['customer_id'] . "</td>
            <td>". $row['name'] . "</td>
            <td>". $row['email'] . "</td>
            <td>". $row['current_balance'] . "</td>";
           echo "<td> <a href='acustomer.php'><button type='submit' class='btn btn-info' name='user'  id='users1' value= '{$row['name']}' >View Customer</button></a></td>";
            echo "</form>";
           echo  "</tr>";
        }
        ?>
          
                    
        </tbody>
    </table>
</div>
<div class="footer" style=" position: fixed;

   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #9bb7d4;
   color: black;
   text-align: center; ">
   <span style="font-family:verdana;">©</span> 2021 SmartBank. All rights reserved.
</div>
</body>


</html>


