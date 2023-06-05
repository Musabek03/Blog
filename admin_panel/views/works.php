<a href="add_works.php">Add Works</a>
<?php
include_once "../controller/connect.php";
include_once "../controller/works_view.php";
$k == 0;

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
<!-- Update -->
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Img</th>
    </tr>
  </thead>
  <?php  
  foreach($data as $value): 
      if($value[2]==0): 
    ?>
  <tbody>
    <tr>
      <th scope="row"><?= ++$k ?></th>
      <td><?= $value[1]?> </td>
      <td><?= $value[3]?></td>
      <td> <img src="../../assets/img/<?=$value[4]?>" alt="" width="50px" height="50px"></td>
    <td>
         <form action="update_works.php" method="POST">
         <div class="col-md-4 offset-md-4">
<input type="submit" value="Update">
<input type="hidden" name="id" value="<?= $value[0]?>">
</div>
</form>
</td>

<!-- Delete -->
<td>
    <form action="../controller/delete_works.php" method="POST">
    <div class="col-md-4 offset-md-4">
        <input type="submit" value="Delete">
        <input type="hidden" name="id" value="<?= $value[0];  ?>">
        </div>
    </form>
</td> 


    </tr>
    
   
  </tbody>

          <?php   endif;
        endforeach;
        ?>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>