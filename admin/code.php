<?php

include('../config/dbcon.php');
include('../functions/myfunctions.php');

//For Add-Category.php Code 
if(isset($_POST['add-category_btn'])) {

    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1' : '0';
    $popular = isset($_POST['popular']) ? '1' : '0';



    //Images Files 
    $image = $_FILES['image']['name'];
    $tempname = $_FILES["image"]["tmp_name"];
    //Images upload folder
    $path = "./uploads/";


    // Performing insert query execution
    $cate_query = "INSERT INTO categories (name,slug,description,image,meta_title,meta_description,meta_keywords,status,popular) 
    VALUES ('$name','$slug','$description','$image','$meta_title','$meta_description','$meta_keywords','$status','$popular')";

    $cate_query_run = mysqli_query($con, $cate_query);

    if ($cate_query_run) {

        move_uploaded_file($tempname, $path . $image);

        redirect("add-category.php", "Category Added Successfully!");
       
    } else {

        redirect("add-category.php", "Something Went Wrong!");
       
    }
}

//For Edit-Category.php Code 
else if (isset($_POST['update-category_btn'])) {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1' : '0';
    $popular = isset($_POST['popular']) ? '1' : '0';



    //Images Files 
    $image = $_FILES['image']['name'];
    $tempname = $_FILES["image"]["tmp_name"];

    $old_image = $_POST['old_image'];

    //Images upload folder
    $path = "./uploads/";

    if ($image != '') {
        $update_filename = $image = $_FILES['image']['name'];
    } else {
        $update_filename = $old_image;
    }

    // Performing update query code
    $update_query = "UPDATE categories SET name='$name',slug='$slug',description='$description',
    meta_title='$meta_title', meta_description='$meta_description',meta_keywords='$meta_keywords',
    status='$status',popular='$popular',image='$update_filename' WHERE id= '$category_id' ";

    $update_query_run = mysqli_query($con, $update_query);

    if ($update_query_run) {
        if ($image != '') {

            move_uploaded_file($tempname, $path . $image);
            if (file_exists('./uploads/' .$old_image)); {
                unlink('./uploads/' .$old_image);
            }
        }
        redirect("edit-category.php?id=$category_id", "Category Updated Successfully!");
       
    } 
    else
    {
        redirect("edit-category.php?id=$category_id", "Something Went Wrong!");
    }
}

//For Delete-Category.php Code 
 else if(isset($_POST['delete_category_btn'])){
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    $category_query = "SELECT * FROM categories WHERE id='$category_id'";
    $category_query_run = mysqli_query($con, $cate_query);
    $category_data = mysqli_fetch_array($cate_query_run);
    $image = $category_data['image']['name'];
    
    $delete_query ="DELETE FROM categories WHERE id='$category_id'";
    
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
         if (file_exists('./uploads/' .$old_image)); {
        
            unlink('./uploads/' .$image);
     }
        redirect("category.php", "Category deleted Successfully");
       

    }
    else
    {
        redirect("category.php", "Something Went Wrong!");

    }
}

//For Add-Product.php Code 
else if(isset($_POST['add_product_btn']))
{
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $small_description = $_POST['small_description'];
    $description = $_POST['description'];
    $original_price = $_POST['original_price'];
    $selling_price = $_POST['selling_price'];
    $qty = $_POST['qty'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1' : '0';
    $trending = isset($_POST['trending']) ? '1' : '0';

    //Images Files 
    $image = $_FILES['image']['name'];
    $tempname = $_FILES["image"]["tmp_name"];
    //Images upload folder
    $path = "./uploads/";


    $product_query = "INSERT INTO products (category_id,name,slug,small_description,description,original_price,selling_price,qty,meta_title,meta_description,meta_keywords,status,trending,image)
     VALUES('$category_id','$name','$slug','$small_description','$description','$original_price','$selling_price','$qty','$meta_title',
    '$meta_description','$meta_keywords','$status','$trending','$image')";
    
    $product_query_run = mysqli_query($con, $product_query);

    if($product_query_run)
    {
        move_uploaded_file($tempname, $path .$image);

        redirect("add-product.php", "Product Added Successfully!");
    }
    else
    {
        redirect("add-product.php", "Something Went Wrong!");
    }

    }
   
//For Edit-Product.php Code 
else if(isset($_POST['update_product_btn']))
{
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $small_description = $_POST['small_description'];
    $description = $_POST['description'];
    $original_price = $_POST['original_price'];
    $selling_price = $_POST['selling_price'];
    $qty = $_POST['qty'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1' : '0';
    $trending = isset($_POST['trending']) ? '1' : '0';

    //Images Files 
    $image = $_FILES['image']['name'];
    $tempname = $_FILES["image"]["tmp_name"];

    $old_image = $_POST['old_image'];

    //Images upload folder
    $path = "./uploads/";

    if ($image != '') {
        $update_filename = $image = $_FILES['image']['name'];
    } else {
        $update_filename = $old_image;
    }

    // Performing update query code
    $update_product_query = "UPDATE products SET name='$name',slug='$slug',small_description='$small_description',
    description='$description',original_price='$original_price',selling_price='$selling_price',qty='$qty',
    meta_title='$meta_title', meta_description='$meta_description',meta_keywords='$meta_keywords',
    status='$status',trending='$trending',image='$update_filename' WHERE id='$product_id' ";

    $update_product_query_run = mysqli_query($con, $update_product_query);

    if ($update_product_query_run) {
        if ($image != '') {

            move_uploaded_file($tempname, $path . $image);
            if (file_exists('./uploads/' .$old_image)); {
                unlink('./uploads/' .$old_image);
            }
        }
        redirect("edit-product.php?id=$product_id", "Product Updated Successfully!");
       
    } 
    else
    {
        redirect("edit-product.php?id=$product_id", "Something Went Wrong!");
    }
}

//For Delete-Product.php Code 
else if(isset($_POST['delete_product_btn'])){
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);

    $product_query = "SELECT * FROM products WHERE id='$product_id'";
    $product_query_run = mysqli_query($con, $product_query);
    $product_data = mysqli_fetch_array($product_query_run);
    $image = $product_data['image'];
    
    $delete_query ="DELETE FROM products WHERE id='$product_id'";
    
    $delete_query_run = mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
         if (file_exists('./uploads/' .$image)); {
        
            unlink('./uploads/' .$image);
     }
        //redirect("products.php", "product deleted Successfully");
        echo 200;
       

    }
    else
    {
       // redirect("products.php", "Something Went Wrong!");

       echo 500;
    }
}


else if(isset($_POST['update_Order_btn']))
{
    $track_no = $_POST['tracking_no'];
    $order_status = $_POST['order_status'];

    $updateOrder_query = "UPDATE orders SET status='$order_status' WHERE tracking_no='$track_no' ";
    $updateOrder_query_run = mysqli_query($con, $updateOrder_query);

    redirect("view-order.php?t=$track_no","Order status updated successfully");
}

else 
{
    header('Location: ../index.php');
}


?>