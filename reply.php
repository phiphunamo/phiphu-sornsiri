<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relay</title>
</head>
<body>

<?php
    include "connect.php";
    $sq1= "SELECT * FROM blog WHERE id='$_GET[ref]' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "<h2> $row[title] </h2>";
    echo "<p> $row[content] </p>";
    echo "<p> $row[poster] date: $row[dmy]</p>";
    echo "<hr/>";
?>

<form action="reply_insert.php?ref=<?php echo $row['id'] ?>" method="post">
    ข้อความ <textarea name="reply" row="5" cols="30"> </textarea> <br/>
    ผู้ตอบ <input type ="text" name="user" /> <br/>
</form>
</body>
</html>