<?php

$category = $_SESSION['category'] ?? '';
$photoURL = $_SESSION['photoURL'] ?? '';
$blogger = $_SESSION['blogger'] ?? '';
$bloggerEmail = $_SESSION['bloggerEmail'] ?? '';
$maintopic = $_SESSION['maintopic'] ?? '';
$mainContent = $_SESSION['mainContent'] ?? '';


$link = mysqli_connect("localhost", "root", "root", "amonblog");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "INSERT INTO blog (category, photoURL, blogger, bloggerEmail, maintopic, maincontent, views) VALUES ('" . $category . "','" . $photoURL . "','" . $blogger . "','" . $bloggerEmail . "','" . $maintopic . "','" . $mainContent . "',1)";
if (mysqli_query($link, $sql)) {
    echo "Records inserted successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>