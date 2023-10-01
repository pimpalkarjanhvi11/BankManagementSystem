<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="customer.css">
    <link rel="stylesheet" type="text/css" href="history.css">
</head>

<style>
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: orange;
    color: white;
  }
  .h2{
    color:orangered;
    top:100%;
    text-align: center;
    margin-top: 30px;
}
  </style>

<body>
    <!--Connects to MySQL database and Selects all the values from the table-->
    <?php 
            include 'config.php';
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn , $sql);
        ?>

        <nav>
            <div class="logo">
                <h1><p style="font-size: 35px; margin-top: 0px;">~</p>G<p>LOBUS</p></p></h1>   
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li class='active'><a href="#">CUSTOMERS</a></li>
                    <li><a href="history.php">TRANSACTION</a></li>
                    
                    </li>              
                </ul>
            </div>
        </nav>
        
              
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>GLOBUS Customers</h1>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="btn-toolbar">
</div>
</div>
        <div class="container">
            
        <div class='well' style='background-color:white;'>
    <table id="customers" >
      <thead>
        <tr>
          <th>Account Number</th>
          <th>Name</th>
          <th>Email Id</th>
          <th>Current Balance</th>
          <th style='width: 36px;'></th>
        </tr>
       </thead>
                                <tbody>
                                <?php 
                                    while($rows = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                <td class="py-2"><?php echo $rows['id'] ?></td>
                                <td class="py-2"><?php echo $rows['name'] ?></td>
                                <td class="py-2"><?php echo $rows['email'] ?></td>
                                <td class="py-2"><?php echo $rows['balance'] ?></td>
                                <td><a href="transaction.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transfer</button></a></td> 
                                </tr>
                                <?php 
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <div>    
        </div>

        

</body>
</html>
