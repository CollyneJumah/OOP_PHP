<?php
include "Database.php";

$db= new Database();

$db->query('SELECT * FROM post');
$rows= $db->resultset();
//print_r($row);

?>
<h2><u>POSTS</u></h2>
<div>
    <?php
    foreach ($rows as $row):
    ?>
    <div>
        <h4><?php echo $row['title']; ?></h4>
        <p><?php echo $row['body']; ?></p>
    </div>
    <?php endforeach;?>
</div>
