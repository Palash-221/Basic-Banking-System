<?php include 'header.html';?>
<!DOCTYPE html>
<html>
<title>Customers</title>

<head>
<style>
    
    body {

        background-image:url("bank.jpg");

    }

    .container {
        padding-top: 40px;
        
    }
    .navbar-brand{
    font-family: 'Sansita Swashed', cursive;
    font-size: 1.5rem;
    color:Red!important;
    }
    a:hover {
            opacity: 1;
            color:#dc3545!important;
        }
    </style>
</head>

    
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img src="bank-icon.png" style="height:40px; width:auto;">MT Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="transferh.php" style="color:white;">Transfer History</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    
         
  <div class="container">
        <div class="table-responsive">
        <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr class="table-danger">
                <th scope="col">S.No.</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Bank Balance(in $)</th>
                <th scope="col">Transfer Money</th>
                
            </tr>
        </thead>
     <tbody>


 <?php include 'dbconnect.php'; 

$sql = "SELECT * FROM `customers`";
$result= mysqli_query($conn, $sql);

while($row= mysqli_fetch_assoc($result))
{
$id = $row['custid'];
$name = $row['custname'];
$mail = $row['custmail'];
$bal = $row['balance'];


echo '<tr class="table-light">
        <td scope="row">'. $id . '</td>
        <td>'. $name .'</td>
        <td>'. $mail .'</td>
        <td><p id="BankBalance">'. $bal .'</p></td>
        <td><a class="btn btn-primary get-started" href="transfer.php?cusid='. $id .'" role="button">Transfer</a></td>
      </tr>
        ';

}


?>
</tbody>
        </table>
        </div>
        </div>

        
</body>
</html>
<?php include 'footer.html';?>