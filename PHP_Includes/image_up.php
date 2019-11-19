<?php
   if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $extensions= array("jpeg","jpg","png");
    
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp, dirname(getcwd(), 1)."/Images/".$file_name);
       echo dirname(getcwd(), 2);
       echo "Success";
    }else{
       print_r($errors);
    }
 }
?>


 
 <?php if(!isset($_FILES['image]'])): ?>
<!-- <input type="file" accept="image" type="submit">Upload Image</input> -->
<form action="" method="post" enctype="multipart/form-data">
    Select image:
    <br><input type="file" name="image"/>
    <input type="submit">
</form>
<?php else: ?>
<img src="<?php echo $_GET.PHP; ?>" />;
<?php endif ?> 