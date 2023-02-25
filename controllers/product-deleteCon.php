<?php include 'db-con.php';?>

<?php
$id = $_GET['id']; // get id through query string
echo '<script>alert('.$id.')</script>';

$del = mysqli_query($conn,"delete from products where product_id = '$id'"); // delete query

if($del)
{
    echo '<script>alert("Product Deleted")</script>';
}


?>