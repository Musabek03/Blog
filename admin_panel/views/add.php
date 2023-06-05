<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body> <div class="container">

    <h1>Add Page</h1>
            
    <!-- Title -->
    <!-- <h4>Title</h4>
        <form action="../controller/home_page.php" method="POST">
            <label for="title"> Title</label>
        <input type="text" name="title" id="title" class="form-control"><br>
        <input type="submit" value="OK" class="btn btn-primary">
        </form> <br> <br>
<hr> -->
        <!-- Slogan  and text-->
        <h4>Slogan and text</h4>
        <form action="../controller/home_page.php" method="POST">
            <label for="Slogan"> Slogan</label>
        <input type="text" name="slogon" id="slogan" class="form-control"> <br>

        <label for="floatingTextarea"> Text</label>
        <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="text"></textarea>
  <label for="floatingTextarea">Text</label><br>
  <input type="submit" value="OK" class="btn btn-primary">
</div>
       
    

        </form>





    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>