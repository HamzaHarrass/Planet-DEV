<?php
require_once "config/connection.php";
require_once "class/article.php";
session_start();
if(!isset($_SESSION["id"])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted"> Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h6>Planet.Dev</h6>
  </div>
</nav>


<!-- <div><a href="logout.php" class="btn btn-danger">Logout</a></div> -->
<div class="container float mt-4 text-end">
    <a id="show-button"  data-bs-toggle="modal" data-bs-target="#Modal" class="btn btn-primary"><i class="bi bi-folder-plus"></i>Add</a>
    </div>


<div class="container float mt-5">
<table class="table table-striped table-dark mx-auto ">
  <thead>
    <tr>
      <th scope="col">title</th>
      <th scope="col">author</th>
      <th scope="col">content</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody >
    <?php
    $articles = article::getAll();
    while($row = $articles->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["author"]."</td>";
        echo "<td>".$row["content"]."</td>";
        echo "<td><a id=".$row["id"]." onClick='edit(this);hidden()' data-bs-toggle='modal' data-bs-target='#Modal' class=' btn btn-primary'>Edit</a></td>";
        echo "<td><button id=".$row["id"]." name='delete_btn' class='btn btn-danger'>Delete</button></td>";
        echo "<td><a 'id=".$row["id"]."' class='btn btn-success'>View</a></td>";
        echo "</tr>";
    }
    ?>
  </tbody>
</table>
</div>

<!-- Modal -->
<div class=" modal fade " id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog " >
    <div id="StyleModal" class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Article</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="config/articleService.php" method="post">
            <div>
                <input type="hidden" name="id" id="id" >
            </div>
          <div class="form-group ">
            <label for="title" class="col-form-label">title</label>
            <input type="text" class="form-control" name="title" id="title">
          </div>
            <div class="form-group">
                <label for="author" class="col-form-label">author:</label>
                <input type="text" class="form-control" name="author" id="author">
        </div>
            <div class="form-group">
                <label for="content" class="col-form-label">content:</label>
                <textarea class="form-control" name="content" id="content"></textarea>
            </div>
             <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="create_btn" class="btn btn-primary" id="save_user">Save </button>
            <button type="submit" name="update_btn" class="btn btn-primary" id="update_user">Update </button>
            </div>
        </div>
        </form>
        </div>
       
    </div>
  </div>
</div>
  




    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>