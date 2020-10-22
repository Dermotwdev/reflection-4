<?php

function get_news_items() {
    include('connection.php');
    // Imagining scenario where database is huge table full of list items with newest news items added to the bottom
    $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3;";
    //$sql = "SHOW TABLES";
    try {
        $results = mysqli_query($db, $sql);
    } catch (Exception $e) {
        echo "Unable to retrieve results" . $e->getMessage();
    }
    $resultCheck = mysqli_num_rows($results);
    //print_r (mysqli_fetch_assoc($results));
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            $theme[] =  $row['theme'];
            $imgurl[] = $row['img'];
            $title[] = $row['title'];
            $comment[] = $row['comment'];
            $tag[] = $row['tag'];
            $author[] = $row['author'];
            $date[] = $row['date'];
            $authorimg[] = $row['author_img'];
        }
    }
    $news = array(
        'theme' => $theme,
       'imgurl' => $imgurl,
       'title' => $title,
       'comment' => $comment,
        'tag' => $tag,
       'author' => $author,
       'authorimg' => $authorimg,
        'date' => $date
    );
        // //Prepare our SQL statement,
        // $statement = $pdo->prepare($sql);
        
        // //Execute the statement.
        // $statement->execute();
        
        // //Fetch the rows from our statement.
        //$tables = $results->fetchAll(PDO::FETCH_NUM);
        
        //Loop through our table names.
    // foreach($tables as $table){
    // //Print the table name out onto the page.
    // echo $table[0], '<br>';

    //$news = $results->fetch(PDO::FETCH_ASSOC);
    // while ($news) {
    // }
    //echo $news;
    return $news;
}