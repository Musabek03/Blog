<?php  
    include_once "../controller/connect.php";
    include_once "../controller/works_view.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Page(works)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body> <div class="container">


  <h1>Update Page(works)</h1>
            
        <!-- Slogan  and text-->
       
        <h4>Title and Description</h4>
        <form action="../controller/update_works.php" method="POST">
            <label for="title"> Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= $data[0][1]?>"> <br>
        <input type="hidden" name="id" value="<?= ($_POST['id']);?>">

        <label for="floatingTextarea"> Description</label>
        <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description" ><?= $data[0][3]?></textarea>
  <input type="hidden" name="id" value="<?= $data[0][0];?>">
  <label for="floatingTextarea">Description</label><br>
  <input type="submit" value="OK" class="btn btn-primary">
</div>
       
    

        </form>
             




    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>