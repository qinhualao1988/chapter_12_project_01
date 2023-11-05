<?php
//for aside country generate
function generateLink($url, $label, $class) {
    echo "<a href=\"$url\" class=\"$class\">$label</a>";
}

//for generate contents
function outputPostRow($posts, $i) {
    echo '<div class="row">';
    echo '<div class="col-md-4">'; 
       echo '<a href="post.php?id=' . $posts[$i]["postId"] . '" class=""><img src="images/' . $posts[$i]["thumb"] . '" alt="' . $posts[$i]["title"] . '" class="img-responsive"/></a>';
    echo "</div>";
    echo '<div class="col-md-8">'; 
       echo '<h2>' . $posts[$i]["title"] . '</h2>';
       echo '<div class="details">';
         echo 'Posted by <a href="user.php?id=' . $posts[$i]["userId"] . '">' . $posts[$i]["userName"] . '</a>';
         echo '<span class="pull-right">' . $posts[$i]["date"] . '</span>';
         echo '<p class="ratings">';
         review($posts[$i]["reviewsRating"]);
         echo ' ' . $posts[$i]["reviewsNum"] . ' Reviews</p>';
       echo "</div>";
       echo '<p class="excerpt">';
       echo '' . $posts[$i]["excerpt"] . '';
       echo "</p>";
       echo '<p class="pull-right"><a href="post.php?id=' . $posts[$i]["postId"] . '" class="btn btn-primary btn-sm">Read more</a></p>';
    echo "</div>";
echo "</div>";
echo "<hr/>";
}

//for rating generate
function review($rating) {
    for ($m=0; $m<$rating; $m++) {
        echo '<img src="images/star-gold.svg" width="16" />';
    }
    for ($m=0; $m<(5-$rating); $m++) {
        echo '<img src="images/star-white.svg" width="16" />';
    }
}

?>