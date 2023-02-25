<?php include 'db-con.php';?>

<?php
// PHP program to pop an alert
// message box on the screen
  
// Display the alert box 

$id = $_GET['id']; // get id through query string


 // Taking all 5 values from the form data(input)
 $name =  $_REQUEST['name'];
 $description = $_REQUEST['description'];
 $weight =  $_REQUEST['weight'];
 $color = $_REQUEST['color'];
 $price = $_REQUEST['price'];
 $cost = $_REQUEST['cost'];
 $image = $_REQUEST['image'];
 $inventory = $_REQUEST['inventory'];
 $category = $_REQUEST['category'];


 if(count($_REQUEST)>0) {



 $sql = "UPDATE products SET  category_id=$category ,name='$name' ,description='$description',weight='$weight',color='$color',price='$price',cost='$cost',image='$image',inventory=$inventory WHERE product_id=$id";
 



if(mysqli_query($conn, $sql)){
    echo '<script>alert("Data Updated Successfully")</script>';
    header('Location: '."./manage-product.php");

   
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    echo '<script>alert("ERROR: Hush! Sorry")</script>';

}
}
// $conn->close();
  
?>