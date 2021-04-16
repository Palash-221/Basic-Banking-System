<?php include 'header.html';
      include 'nav.html';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Transfer Money</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:200i,400&display=swap');

    :root {
        --color-white: #f3f3f3;
        --color-darkblue: #1b1b32;
        --color-darkblue-alpha: rgba(27, 27, 50, 0.8);
        --color-green: #37af65;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.4;
        color: var(--color-white);
        margin: 0;
    }

    /* mobile friendly alternative to using background-attachment: fixed */
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: -1;
        background-color: lightblue;
        background-image: linear-gradient(115deg,
                rgba(58, 58, 158, 0.8),
                rgba(136, 136, 206, 0.7));
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    h1 {
        font-weight: 400;
        line-height: 1.2;
    }

    p {
        font-size: 1.125rem;
    }

    h1,
    p {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }

    .container {
        width: 100%;
        margin: 3.125rem auto 0 auto;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    .header {
        padding: 0 0.625rem;
        margin-bottom: 1.875rem;
    }

    .description {
        font-style: italic;
        font-weight: 200;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
    }

    .text-center {
        text-align: center;
    }

    .image {
        display: flex;
        justify-content: center;
    }
    </style>
</head>

<body>

    <?php include 'dbconnect.php';

$sn=$_POST["Sname"];
$rn=$_POST["Rname"];
$re=$_POST["email"];
$amt=$_POST["amount"];


$sql = "SELECT `balance` FROM `customers` WHERE custname='$sn'";
$bal = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($bal);

if($row['balance'] > $amt)
{   
        $amount="SELECT `balance` FROM `customers` WHERE custname='$rn'";
        
        $result=mysqli_query($conn,$amount);
        $row2=mysqli_fetch_assoc($result);
        
            $totalamt = $amt + $row2['balance'];
            $q1 = "UPDATE `customers` SET balance=$totalamt WHERE custname ='$rn'";
            $r1 = mysqli_query($conn, $q1);

            $sub=$row['balance'] - $amt;
            $q2= "UPDATE `customers` SET balance='$sub' WHERE custname ='$sn'";
            $r2=mysqli_query($conn, $q2);

            $q3="INSERT INTO `transfer_data`(`sendname`, `custname`, `custmail`, `transm`) VALUES ('$sn','$rn','$re','$amt')";
            $r3=mysqli_query($conn, $q3);

            echo '<div class="container">
            <header class="header">
              <h1 id="title" class="text-center">Transfer Succesfull!</h1>
              <p id="description" class="description text-center">
                Thank you for using our bank.
              </p>
            </header>
          </div>
          <div class="image">
            <img src="mt1.jpg" height=500px width=800px>
          </div>';
        
}
else{
  
 echo '<div class="container">
 <header class="header">
   <h1 id="title" class="text-center">Insufficient Balance!</h1>
 </header>
</div>
<div class="image">
 <img src="mt1.jpg" height=500px width=800px>
</div>';
}
?>
</body>
</html>
<?php include 'footer.html';?>