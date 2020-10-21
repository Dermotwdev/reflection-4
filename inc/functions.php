<?php

function get_News() {
    include('connection.php');

    $sql = "SELECT * FROM news ;";
    $sql = "SHOW TABLES";
    try {
        $results = $db->query($sql);
    } catch (Exception $e) {
        echo "Unable to retrieve results" . $e->getMessage();
    }
        // //Prepare our SQL statement,
        // $statement = $pdo->prepare($sql);
        
        // //Execute the statement.
        // $statement->execute();
        
        // //Fetch the rows from our statement.
        $tables = $results->fetchAll(PDO::FETCH_NUM);
        
        //Loop through our table names.
    foreach($tables as $table){
    //Print the table name out onto the page.
    echo $table[0], '<br>';

    $news = $results->fetch(PDO::FETCH_ASSOC);
    while ($news) {
     
    }
    return $news;
}
}