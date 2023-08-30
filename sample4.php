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
    <title>Menu Form</title>
</head>
<body>
<div class="card card-cstm p-5" style="width: 35rem">
    <div class="container my-3"><h1 class="h1 text-center">Menu Form</h1></div>
    <div class="container">
        <form action="<?php $_PHP_SELF; ?>" method="post">
            <div class="form-floating">
                <select name="orderSelect" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                    <option selected value="00 d-none"></option>
                    <option value="1">Fresh Tea</option>
                    <option value="2">Milk Tea</option>
                    <option value="3">Coffee</option>
                    <option value="4">Fresh Milk</option>
                    <option value="5">Smoothie</option>
                </select>
                <label for="floatingSelectGrid">Select your order here</label>
            </div>
            <div class="container-fluid mt-3 text-center">
                <button type="submit" class="btn btn-primary">Check</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
            <br>
<?php
if (!empty($_POST['orderSelect'])) {
    $orderSelect = $_POST['orderSelect'];
    switch ($orderSelect) {
        case "1":
            echo '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button>
              You have selected <strong>Fresh Tea</strong>.
              </div>';
            break;
        case "2":
            echo '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button>
              You have selected <strong>Milk Tea</strong>.
              </div>';
            break;
        case "3":
            echo '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button>
              You have selected <strong>Coffee</strong>.
              </div>';
            break;
        case "4":
            echo '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button>
              You have selected <strong>Fresh Milk</strong>.
              </div>';
            break;
        case "5":
            echo '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
              <button class="btn-close" data-bs-dismiss="alert"></button>
              You have selected <strong>Smoothie</strong>.
              </div>';
            break;
        default:
            echo '<div class="alert alert-danger fade show" role="alert">
              Please select your order.
              </div>';
            break;
    }
}
?>

        </form>
    </div>
</div>
</body>
</html>
