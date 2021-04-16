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
  background-color:lightblue;
  background-image: linear-gradient(
      115deg,
      rgba(58, 58, 158, 0.8),
      rgba(136, 136, 206, 0.7)
    );
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

label {
  display: flex;
  align-items: center;
  font-size: 1.125rem;
  margin-bottom: 0.5rem;
}

input,
button,
select,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button {
  border: none;
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

.clue {
  margin-left: 0.25rem;
  font-size: 0.9rem;
  color: #e4e4e4;
}

.text-center {
  text-align: center;
}

/* form */

form {
  background: var(--color-darkblue-alpha);
  padding: 2.5rem 0.625rem;
  border-radius: 0.25rem;
}

@media (min-width: 480px) {
  form {
    padding: 2.5rem;
  }
}

.form-group {
  margin: 0 auto 1.25rem auto;
  padding: 0.25rem;
}

.form-control {
  display: block;
  width: 100%;
  height: 2.375rem;
  padding: 0.375rem 0.75rem;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}




.submit-button {
  display: block;
  width: 100%;
  padding: 0.75rem;
  background: var(--color-green);
  color: inherit;
  border-radius: 2px;
  cursor: pointer;
}

</style>
</head>
<body>

<?php include 'dbconnect.php';

$id= $_GET['cusid'];
$sql= "SELECT * FROM `customers` WHERE custid=$id";
$result = mysqli_query($conn, $sql);
while($row= mysqli_fetch_assoc($result)){
    $cname=$row['custname'];

    echo '
    <div class="container">
  <header class="header">
    <h1 id="title" class="text-center">Transfer Form</h1>
    
  </header>
  <form id="survey-form" action="res.php" method="POST">
    <div class="form-group">
      <label id="name-label" for="name">Sender\'s Name</label>
      <input
        type="text"
        name="Sname"
        id="Sname"
        value='.$cname.'
        class="form-control"
        
        required
      />
    </div>
    <div class="form-group">
      <label id="email-label" for="email">Reciever\'s Name</label>
      <input
        type="text"
        name="Rname"
        id="Rname"
        class="form-control"
        placeholder="Enter Reciever\'s Name"
        required
      />
    </div>
    <div class="form-group">
      <label id="number-label" for="number"
        >Reciever\'s Email
      </label>
      <input
        type="email"
        name="email"
        id="email"
        
        class="form-control"
        placeholder="Email"
      />
    </div>

    <div class="form-group">
      <label id="number-label" for="number"
        >Amount<span class="clue">(in $)</span></label
      >
      <input
        type="number"
        name="amount"
        id="amount"
       class="form-control"
        placeholder=".00"
      />
    </div>

    <div class="form-group">
      <button type="submit" id="send" class="submit-button">
        Transfer
      </button>
    </div>
  </form>
</div>';
} 

?>
</body>

</html>
<?php include 'footer.html';?>