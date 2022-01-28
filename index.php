<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php require_once 'config.php'; ?>

    <?php 
    $mysqli = new mysqli ('localhost' , 'root' , '' , 'users') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * From registration") or die($mysqli->error);

    pre_r($result);
    pre_r($result->fetch_assoc());
    

    function pre_r( $array ) {
        echo '<pre>';
        print_r( $array );
        echo '</pre>';
    }
    ?>

      <div class="row justify-content-center">
          <form action="config.php" method="POST">
              <div class="form-group">
                  <labe>Firstname</lable>
                  <input type="text" name="fname" class="form-control" placeholder="Enter Your name">
                </div>
                  <div class="form-group">
                  <labe>Lastname</lable>
                  <input type="text" name="lname" class="form-control" placeholder="Enter Your lastname">
                  </div>
                  <div class="form-group">
                  <labe>Email</lable>
                  <input type="text" name="email" class="form-control" placeholder="Enter Your email">
                  </div>
                  <div class="form-group">
                  <labe>Number</lable>
                  <input type="text" name="number" class="form-control" placeholder="Enter Your number">
                  </div>
                  <div class="form-group">
                  <lable>Address</lable>
                  <input type="text" name="address" class="form-control" placeholder="Enter Your address">
                  </div>
                  <div class="form-group">
                  <lable>Address2</lable>
                  <input type="text" name="address2" class="form-control" placeholder="Enter Your address">
                  </div>
                  <div class="form-group">
                  <lable>City</lable>
                  <input type="text" name="City" class="form-control" placeholder="Enter Your city">
                  </div>
                  <div class="form-group">
                  <lable>State</lable>
                  <input type="text" name="state" class="form-control" placeholder="Enter Your state">
                  </div>
                  <div class="form-group">
                  <lable>Zip</lable>
                  <input type="text"name="zip" class="form-control" placeholder="Enter Your zip">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary" name="save">Save</button>
                      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>