<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="history.css">
   

    <style>
         body{
            background: #ffffff;
      }
      footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}
.table1 {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    left:0;
  }
  
  .table1 td, #table1 th {
    border: 1px solid #ddd;
    padding: 20px;
  }
  
  .table1 tr:nth-child(even){background-color: #f2f2f2;}
  
  .table1 tr:hover {background-color: #ddd;}
  
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
                    <li class='active'><a href="history.php">TRANSACTION</a></li>
                    <li><a href="customers.php">CUSTOMER</a></li>
                    
                    </li>              
                </ul>
            </div>
</nav>



        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>GLOBUS Transactions</h1>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="btn-toolbar">

</div>
<table class='table1' >
        <div class="container">
        <div class='well' style='background-color:#18bc9c;'>
   
                    <thead class="thead-dark">
                      <tr>
                      <th>SENDER</th>
                      <th>RECEIVER</th>
                      <th>TRANSACTIONS (AMOUNT)</th>
                      
                      </tr>
                    </thead>
                <tbody>
                    <?php 
                        include 'config.php';
                        $sql = "SELECT * FROM transaction";
                        $query = mysqli_query($conn , $sql);
                        while($rows = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['sender'] ; ?></td>
                        <td class="py-2"><?php echo $rows['receiver'] ; ?></td>
                        <td class="py-2"><?php echo $rows['balance'] ; ?></td>
                       
                        <?php } ?>
                    </tr>
                </tbody>
     </table>
        </div>
            

   
    </body>
</html>
