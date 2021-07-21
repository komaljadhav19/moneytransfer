<?php
include 'connection.php';
error_reporting(0);
$sid=$_GET['id'];
$select = "SELECT * FROM users where id=$sid";
$select_query = mysqli_query($con,$select);
$row = mysqli_fetch_assoc($select_query);
if(isset($_POST['submit'])){
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $select = "SELECT * from users where id=$from";
    $select_query = mysqli_query($con,$select);
    $row1 = mysqli_fetch_array($select_query);

    $receiver = "SELECT * from users where id=$to";
    $query = mysqli_query($con,$receiver);
    $row2 = mysqli_fetch_array($query);

    if(($amount) < 0){
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  
        echo '</script>';
    }
    else if($amount > $row1['balance']){
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! insufficent balance")';  
        echo '</script>';
    }
    else if($amount == 0){
        echo '<script type="text/javascript">';
        echo ' alert("Oops! zero balance")';  
        echo '</script>';
    }
    else{
        $newbalance = $row1['balance'] - $amount;
        $new = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($con,$new);
        $newbalance = $row2['balance'] + $amount;
        $new2 = "UPDATE users set balance=$newbalance where id=$to";
        mysqli_query($con,$new2);
        $sender = $row1['name'];
        $receivr = $row2['name'];
        $insert = "INSERT INTO transfer(`sender`, `receiver`, `amount`) VALUES ('$sender','$receivr','$amount')";
        $query=mysqli_query($con,$insert);
        if($query){
            echo "<script> alert('Transaction Successful');
            window.location='history.php';
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
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Basic Banking System</title>

    <!-- Goggle font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="index.php">BBA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaction.php">View Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transfer Money</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transition History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">Create New Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid color">
        <h2 class="text-center">Transaction</h2>
        <br>
        <br>
        <div class="row">
            <form method="POST" name="send">
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Id"><?php echo $row['id'] ?></td>
                            <td data-label="Name"><?php echo $row['name'] ?></td>
                            <td data-label="Email"><?php echo $row['email'] ?></td>
                            <td data-label="Balance"><?php echo $row['balance'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <label>Transfer To:</label>
                <select name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                        $sid = $_GET['id'];
                        $select = "SELECT * FROM users where id!=$sid";
                        $select_query = mysqli_query($con,$select);
                        while($row = mysqli_fetch_assoc($select_query)){
                    ?>
                    <option class="table" value="<?php echo $row['id'];?>">
                        <?php echo $row['name'];?>
                    </option>
                    <?php
                        }
                    ?>
                    <div>
                </select>
                <br>
                <br>
                <label>Amount:</label>
                <input type="number" class="form-control" step="0.01" name="amount" required>
                <br><br>
                <div class="text-center sub">
                    <button class="btn submit-btn " name="submit" type="submit">Transfer</button>
            </form>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>