<?php include 'header.html';?>
<!doctype html>
<html lang="en">
<title>Transfer History</title>
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
.row{
    background-color: lightgray;
}
footer {
        display: flex;
        align-items: center;
        justify-content: space-around;
        background-color: black;
        color: #fff;
        padding: 20px 0;
    }

    ul,
    nav {
        list-style: none;
    }

    a:hover {
        opacity: 1;
        color:#dc3545!important;
    }

    footer {
        display: flex;
        align-items: center;
        justify-content: space-around;
        background-color: black;
        color: #fff;
        padding: 20px 0;
    }

    footer ul {
        display: flex;
    }

    footer ul li {
        margin-left: 16px;
    }

    footer p {
        text-transform: uppercase;
        font-size: 14px;
        opacity: 0.6;
        align-self: center;
    }

    footer a {
        color: white;
    }

    @media (max-width: 1100px) {
        footer {
            flex-direction: column;
            padding-top: 20px;
        }

        footer p {
            text-align: center;
            margin-bottom: 20px;
        }

        footer ul li {
            margin: 0 8px;
        }
    }
</style>

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
                        <a class="nav-link " href="customers.php" style="color:white;">Customers</a>
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
                <th scope="col">History</th>
                
                
            </tr>
        </thead>
     <tbody>


 <?php include 'dbconnect.php'; 

$sql = "SELECT * FROM `transfer_data`";
$result= mysqli_query($conn, $sql);

while($row= mysqli_fetch_assoc($result))
{
$id = $row['S.No.'];
$sname = $row['sendname'];
$rname = $row['custname'];
$bal = $row['transm'];


echo '<tr class="table-light">
        <td scope="row">'. $id . '</td>
        <td><p>$'.$bal.' has been transferred to '. $rname .'\'s account by '. $sname .'</td>
    </tr>';
}


?>
</tbody>
        </table>
        </div>
        </div>

    <footer class="fixed-bottom">
    <p>Have a nice day &#128512;</a></p>
    <p>&copy; PALASH MONE-2021</p>
    <ul style="list-style:none;">
        <li><a href="https://www.linkedin.com/in/palash-mone-aa6b2a200/" target="_blank"><i
                    class="fa fa-linkedin-square fa-2x"></i></a></li>
        <li><a href="https://github.com/Palash-221" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
        </li>
        <li><a href="https://twitter.com/_mpalash" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
        </li>
        <li><a href="mailto: palashmone321@gmail.com"><i class="fa fa-envelope-square fa-2x"></i></a></li>
    </ul>
</footer>


</body>
</html>