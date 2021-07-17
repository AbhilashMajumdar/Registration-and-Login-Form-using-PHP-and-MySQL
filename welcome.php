<?php
    session_start();

    if((!$_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
    {
        header("location: index.html");
        exit;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello <?php echo $_SESSION['username'] ?></title>
  </head>
  <body>
    <div class=" container alert alert-success mt-5" role="alert">
        <form action="logout.php" method="POST">
        <h4 class="alert-heading">Well done!</h4>
            <p>Well done, you successfully enter to my website. How are you, all ok nah? I thik you will be practice more and more, if you practice more you can earn a job easily so always believe in yourself and never give up !</p>
            <hr>
            <p class="mb-0">Whenever you need to log out you press this button -> 
                <button type="submit" class="btn btn-primary" name="logout">Log Out</button>
            </p>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>