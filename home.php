<?php include 'header.html';
      include 'nav.html';?>
<!doctype html>
<html lang="en">
<title>Basic Banking System</title>
<style>

.navbar-brand{
    font-family: 'Sansita Swashed', cursive;
    font-size: 1.5rem;
    color:Red!important;
}
.row{
    background-color: lightgray;
}

</style>

<body>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="b-1.jfif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="b-2.jfif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="b-3.jfif" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container-fluid hero-content">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 text-center" data-aos="fade-up">
                <h1>Money Transaction Made Easy</h1>
                <p class="lead muted">Safe and Secure</p>
                <p>Welcome!</p>
                <br>
                <br>
                <a class="btn btn-primary get-started" href="customer.php" role="button">Customers</a>
                <a class="btn btn-primary get-started" href="transferh.php" role="button">Transfer History</a>
            </div>
            <div class="col-md-6 col-sm-12 text-center" data-aos="fade-left">
                <div class="hero-img-div">
                    <img class="hero-img" src="bank-icon.png" style="height:400px; width:auto;"
                        alt="img-showing-money-transfer">
                </div>
            </div>
        </div>
    </div>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>
<?php include 'footer.html';?>