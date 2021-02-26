<?php
declare(strict_types=1);

require 'Post.php';
require 'PostLoader.php';

session_start();


    if(isset($_POST['title']) && isset($_POST['content'])!='' && $_POST['authorName']!='') {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $authorName = $_POST['authorName'];
        $date = $_POST['date'];
    }
    if (empty($_POST["title"])) {
    $titleErr = "Title is required";
    $isFormValid = false;}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Guestbook</title>
</head>
<body>

<h1>Welcome to my Guestbook</h1>
<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='POST'>
    Title<br>
    <label>
        <input type="text" name="title">
    </label><br><br>
    Comment:
    <br>
    <label>
        <textarea cols="55" rows="4" name="comment"></textarea>
    </label><br><br>
    Name<br>
    <label>
        <input type="text" name="authorName">
    </label><br><br>

    <br><br>
    <input type="submit" value="Submit">

</form>

<h3>Show Comments</h3>
</body>
</html>
