<?php
session_start();
$inputTitle = $_POST['inputTitle'];
$inputDescription = $_POST['inputDescription'];
$inputRefrenceLink = $_POST['inputRefrenceLink'];
$inputPdfFile = $_POST['inputPdfFile'];
$inputCoding = $_POST['inputCoding'];

$conn= mysqli_connect('localhost','root','123','Notebook');
$query = 'Insert into html_notes(`title`, `description`, `refrence_link`, `code`, `pdf_docs`) Values("'.$inputTitle.'","'.$inputDescription.'","'.$inputRefrenceLink.'","'.$inputCoding.'","'.$inputPdfFile.'")';

$result= mysqli_query($conn,$query);
if($result ==1)
{
    $_SESSION['html_notes_save']= "HTML Notes have been saved successfully.";
    echo $result;
}

?>