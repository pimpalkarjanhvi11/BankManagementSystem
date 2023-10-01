<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }


  
    
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
    


   
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='customers.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" type="text/css" href="transaction.css">

<style>
    
    .table1 {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    left:-10%;
  }
  
  .table1 td, #table1 th {
    border: 1px solid #ddd;
    padding: 20px;
  }
  
  .table1 tr:nth-child(even){background-color: #f2f2f2;}
  
  .table1 tr:hover {background-color: orange;}
  
  .table1 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: orange;
    color: white;
  }
 
</style> 
</head>

<body>
<nav>
            <div class="logo">
                <h1><p style="font-size: 35px; margin-top: 0px;">~</p>G<p>LOBUS</p></p></h1>   
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li class='active'><a href="#">TRANSFER</a></li>
                    <li><a href="customers.php">CUSTOMERS</a></li>
                    <li><a href="history.php">TRANSACTION</a></li>
                    
                    </li>              
                </ul>
            </div>
        </nav>



    <header class="site-header clearfix">
        <div class="table1">

        <div class="text">
        <h2>SENDER's DETAILS</h2>
        <hr class="star-primary">
        </div>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div class="table1">
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Customer Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        
        <div class="login">
            <i class="fa fa-user-circle-o"></i>
            <h1>TRANSFER</h1>
        <br><br>
        <label>Transfer To:</label>
        <br>
        <br>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <br>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
            
            <button class="btn mt-3" name="submit" type="submit" id="myBtn">Transfer</button>    
        </form>
    </div>

    <div class="image">
            <img src="paying-online-bills-via-mobile-phone-receipt-billing-accounting-with-money-smartphone-cash-digital-payment-transaction-flat-cartoon-illustration_212005-152.jpg" class="image">
    </div>

   
    
</body>
</html>

