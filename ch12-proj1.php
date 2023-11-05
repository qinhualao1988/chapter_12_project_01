<!-- this is include() -->
<?php


include('data.inc.php');
include('functions.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 7</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />

</head>

<body>
<!-- this is header php  -->
<?php
    include('header.inc.php');
?>


    <!-- Page Content -->
    <main class="container">
        <div class="row">
<!-- this is aside php-->
<?php
    include('aside.inc.php');
?>
            <div class="col-md-10">

                <div class="jumbotron" id="postJumbo">
                    <h1>Posts</h1>
                    <p>Read other travellers' posts ... or create your own.</p>
                    <p><a class="btn btn-warning btn-lg">Learn more &raquo;</a></p>
                </div>        
      
                 <!-- start post summaries -->
                 <div class="postlist">

                   <!-- replace each of these rows with a func+tion call -->
                   <?php
                        for ($i=0; $i<count($posts); $i++) {
                            outputPostRow($posts, $i);
                        }
                   ?>
                     
                     
                 </div>   <!-- end post list -->         
                            
            </div>  <!-- end col-md-10 -->
        </div>   <!-- end row -->
    </main>
    
</body>

</html>