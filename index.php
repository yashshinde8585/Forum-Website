<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDescuss Coding forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
  </head>
  <body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <!-- slider starts here -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- <img src="/img/slid1..jfif" class="d-block w-100" alt="..."> -->
      <img src="https://source.unsplash.com/random/1620x400/?coding,code" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <!-- <img src="/img/slid3.jfif" class="d-block w-100" alt="..."> -->
      <img src="https://source.unsplash.com/random/1620x400/?programming,code" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <!-- <img src="/img/slid3.jfif" class="d-block w-100" alt="..."> -->
      <img src="https://source.unsplash.com/random/1620x400/?coder,code" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!--  -->
    <div class="container my-3">
      <!-- <h2 class="text-center my-3">iDescuss -TY.BBA-(Computer Application)</h2> -->
      <h2 class="text-center my-3">iDescuss -Browse Categories</h2>
      <div class="row my-3">
      <!-- fetch all categories  -->
      <?php 
      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        // echo $row['categories_id'];
        // echo $row['categories_name'];
        $id = $row['categories_id'];
        $cat = $row['categories_name'];
        $des = $row['categories_description'];
        echo '
        <div class="col-md-4 my-3">
        <div class="card" style="width: 18rem;">
    <img src="https://source.unsplash.com/random/200x100/?programmers, ' .$cat.',coding" class="card-img-top" alt="pythonimg">
      <div class="card-body">
      <h5 class="card-title"><a href="threadlist.php?catid=' .$id.'">' .$cat.'</a></h5>

      <p class="card-text">' .substr($des,0,90).'...</p>
      <a href="threadlist.php?catid=' .$id.'" class="btn btn-primary">View Threads</a>
          </div>
      </div>
    </div>';

      }
      ?>
      </div>
  </div>


<!-- use a for loop to iterate through categories  -->

    <?php include 'partials/_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>