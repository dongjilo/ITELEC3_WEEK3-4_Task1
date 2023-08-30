<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <style>
        .card-cstm {
            margin: 13% auto !important;
            float: none !important;
        }
    </style>
    <title>Voters Form</title>
</head>
<body>
<div class="card card-cstm p-5" style="width: 35rem">
    <div class="container my-3"><h1 class="h1 text-center">Voters Form</h1></div>
    <div class="container">
        <form action="<?php $_PHP_SELF; ?>" method="post">
            <div class="form-floating">
                <input type="number" name="ageValue" id="floatingInputValue" class="form-control" placeholder="100">
                <label for="floatingInputValue">Enter your age here</label>
            </div>

            <div class="container-fluid mt-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
            <br>
<?php
if (!empty($_POST['ageValue'])){
    $age = $_POST['ageValue'];
    if ($age >= 18 && $age <= 90) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button>
              You are allowed to vote.
              </div>';
    } elseif ($age >= 90) {
        echo '<div class="alert alert-warning fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button> 
              You are over-age.
              </div>';
    } elseif($age >= 1 && $age <=17){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button>
              You are under-age.
              </div>';
    } elseif($age <= 0) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button>
              Invalid age.
              </div>';
    } else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button>
              You are not allowed to vote.
              </div>';
    }
}
?>
        </form>
    </div>
</div>
</body>
</html>
