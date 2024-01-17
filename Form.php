<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<form action="" method="POST">
<div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" name="hobi1" type="checkbox" id="inlineCheckbox1" value="futsal">
  <label class="form-check-label" for="inlineCheckbox1">futsal</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="hobi2" type="checkbox" id="inlineCheckbox2" value="bola">
  <label class="form-check-label" for="inlineCheckbox2">bola</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="hobi3" type="checkbox" id="inlineCheckbox1" value="basket">
  <label class="form-check-label" for="inlineCheckbox1">basket</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="hobi4" type="checkbox" id="inlineCheckbox2" value="voly">
  <label class="form-check-label" for="inlineCheckbox2">voly</label>
</div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentar</label>
    <textarea class="form-control" name="comentar" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $hobi1 = $_POST['hobi1'];
            $hobi2 = $_POST['hobi2'];
            $hobi3 = $_POST['hobi3'];
            $hobi4 = $_POST['hobi4'];
            $Comentar = $_POST['comentar'];

            echo "$name";
            echo "<br>";
            echo "$email";
            echo "<br>";
            echo "$hobi1";
            echo "<br>";
            echo "$hobi2";
            echo "<br>";
            echo "$hobi3";
            echo "<br>";
            echo "$hobi4";
            echo "<br>";
            echo "$comentar";
        } else {
          null;
        }

    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

