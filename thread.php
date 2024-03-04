
<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDescuss Coding forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      #ques{
        min-height:433px;
      }
    </style>
  </head>
  <body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id =$id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $title= $row['thread_title'];
        $desc= $row['thread_desc'];
    }
    ?>

<?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
      //Insert into comment db
      $comment = $_POST['comment'];
      $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '0', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      $showAlert = true;
      if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Success! </strong> Your comment has been added!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }

    }
    ?>
    
    <!--  -->
    <div class="container my-3">
    <div class="jumbotron">
  <h1 class="display-4"><b><?php echo $title;?></b></h1>
  <p class="lead"><?php echo $desc;?></p>
  <hr class="my-4">
  <p>This is a perr to perr forum. No Spam / Advertising / Self-promote in the forums
  Do not post copyright-infringing material. Do not post “offensive” posts, links or images. Remain respectful of other members at all times.
  </p>
    <p>Posted by:<b> Yash Shinde</b></p>
</div>

<div class="container my-2">

    <label for="exampleInputEmail1"><h1>Post a Comment</h1></label>

    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">

  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label">Type Your Comment</label>
  <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-success my-2">Post Comment</button>
</form>
  </div>

  <div class="container" id="ques">
    <h1 class="my-2">Discussions</h1>
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `comments` WHERE thread_id=$id;";
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
        $id = $row['comment_id'];
        $comment = $row['comment_content'];
        $comment_time = $row['comment_time'];
       
   echo '<div class="d-flex my-3">
  <div class="flex-shrink-0">
    <img src="img/user.png" width="55px" alt="...">
  </div>
  <div class="flex-grow-1 ms-3">
  <p class="font-weight-bold my-0"><b>Anonymous User </b>at: '.$comment_time.'</p>
    '.$comment.'
  </div>
</div>';
}

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

    <!-- <?php include 'partials/_footer.php'; ?> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
