<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Basic Banking System</title>

    <!-- Goggle font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <section id="one">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="index.php">BBA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view.php">View Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transaction.php">Transfer Money</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="history.php">Transition History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">Create New Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Section data -->
        <div class="data">
            <div class="data-text">
                <h1>Transfer money in easy secure steps</h1>
                <h2>basic banking system</h2>
                <p>
                    Fast and easy you want to be more secure send and <br />receives
                    money sort time for online payment and banking system.
                </p>
                <div class="btn">
                    <button class="btn1"><a href="user.php">get started</a></button>
                    <button class="btn2"><a href="transaction.php">Transfer Money</a></button>
                </div>
            </div>
        </div>
    </section>


    <div class="holdingcontainer">
        <div class="firstcol">
            <div class="col col-img">
                <img src="images/f1.png" alt="figure" class="image" />
            </div>
        </div>
        <div class="secondcol">
            <div class="viewcol">
                <h1 class="cust-head">View All Customers</h1>
                <p class="cust-para">
                    Banking Software solutions for gathering customer data <br />can
                    help to improve the customer services.<br />
                    the concept of creating customer view is for the banking industry.
                </p>
                <button class="cust-btn">
                    <a href="view.php">View all customers</a>
                </button>
            </div>
        </div>
    </div>
    <div class="holdingcontainer">
        <div class="firstcol">
            <div class="col col-img">
                <img src="images/f2.png" alt="figure" class="image" />
            </div>
        </div>
        <div class="secondcol">
            <div class="transfercol">
                <h1 class="cust-head">Transfer Money</h1>
                <p class="cust-para">

                    Anyone will be able to send money online using Bank Transfer
                    system<br />
                    online money transfer options have provided <br />
                    flexibility and convenience across the nation.
                </p>
                <button class="cust-btn"><a href="transaction.php">Transfer Money</a></button>
            </div>
        </div>
    </div>
    <div class="holdingcontainer">
        <div class="firstcol">
            <div class="col col-img">
                <img src="images/f3.png" alt="figure" class="image" />
            </div>
        </div>
        <div class="secondcol">
            <div class="historycol">
                <h1 class="cust-head">Transition History</h1>
                <p class="cust-para">
                    The Banking sector has seen a lot of transition.<br />
                    Banks have been doing these job for the long period of time.
                </p>
                <button class="cust-btn"><a href="history.php"> Transition History</a></button>
            </div>
        </div>
    </div>

    <footer class="text-center index-footer">
        <p>&copy 2021.Made by <span>Komal Jadhav</span><br> For the Project of <span>The Sparks Foundation</span></p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>