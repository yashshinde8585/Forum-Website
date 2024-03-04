
<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDescuss Coding forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE categories_id =$id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname= $row['categories_name'];
        $catdesc= $row['categories_description'];
    }
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
      //insert thread into db
      $th_title = $_POST['title'];
      $th_desc = $_POST['desc'];
      $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '0', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      $showAlert = true;
      if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Success! </strong> Your thread has been added! Please wait for community to respond.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }

    }
    ?>
    
    <!--category container start here  -->
    <div class="container my-3">
    <div class="jumbotron">
  <h1 class="display-4"><b>Welcome to <?php echo $catname;?> forums</b></h1>
  <p class="lead"><?php echo $catdesc;?></p>
  <hr class="my-4">
  <p>This is a perr to perr forum. No Spam / Advertising / Self-promote in the forums
  Do not post copyright-infringing material. Do not post “offensive” posts, links or images. Remain respectful of other members at all times.
  </p>

  <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
</div>

<!--discussion form start here  -->
  <div class="container my-2">
    <label for="exampleInputEmail1">Start a Discussion</label>
    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
      <div class="form-group">
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">keep your title as short and crisp as possible.</small>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label">Ellaborate Your Concern</label>
  <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-success my-2">Submit</button>
</form>
  </div>
<!--  -->

  <div class="container">
    <h1 class="my-3">Browse Questions</h1>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id;";
    $noResult = true;
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_time = $row['timestamp'];
       
    echo '<div class="d-flex my-3">
      <div class="flex-shrink-0">
        <img src="img/user.png" width="55px" alt="...">
        </div>
      <div class="flex-grow-1 ms-3">
      <p class="font-weight-bold my-0"><b>Anonymous User </b>at: '.$thread_time.'</p>
        <h5><a class="text-dark" href="thread.php?threadid='.$id.'">'.$title.'</a></h5>
          '.$desc.'
      </div>
    </div>';
  }
    // echo var_dump($noResult);
      if ($noResult) {
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <p class="display-4">No Threads Found</p>
          <p class="lead">Be the first person ask to a question.</p>
        </div>
      </div>';
      }
?>
 
<!-- use a for loop to iterate through categories  -->

    <?php include 'partials/_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
