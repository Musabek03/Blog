<?php
include_once "../controller/connect.php";
include_once "../controller/admin_view.php";
$k == 0;

?>

<a href="add.php">Add Post</a>

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
    <table class="table">
        <tbody>
            <tr>
                <th>Title</th>
                <td><?= $data[0][1]?></td>
                <td>
         <form action="update_title.php" method="POST">
         <div class="col-md-4 offset-md-4">
<input type="submit" value="Update_Title">
<input type="hidden" name="id" value="<?= $data[0][0]?>">
</div>
</form>
</td>
            </tr>
           
        </tbody>

    </table>
 </div>

<br> <br>
<!-- Update -->
  <div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Slogan</th>
      <th scope="col">Text</th>
    </tr>
  </thead>
  <?php  foreach($data as $value): 
      if($value[4]==0):
    ?>
  <tbody>
    <tr>
      <th scope="row"><?= ++$k ?></th>
      <td><?= $value[2]?> </td>
      <td><?= $value[3]?></td>
    <td>
         <form action="update.php" method="POST">
         <div class="col-md-4 offset-md-4">
<input type="submit" value="Update">
<input type="hidden" name="id" value="<?= $value[0]?>">
</div>
</form>
</td>

<!-- Delete -->
<td>
    <form action="../controller/delete.php" method="POST">
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