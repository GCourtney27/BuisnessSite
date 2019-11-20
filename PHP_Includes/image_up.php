<?php
   if(isset($_FILES['image'])){

    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $extensions= array("jpeg","jpg","png");
   
    if(empty($errors)==true){
       move_uploaded_file($file_tmp, dirname(getcwd(), 1)."\\Images\\".$file_name);
       $page_image = $file_name;
    }
}
?>
 
 <?php if(!isset($page_image)): ?>

<form action "image_up.php" method="post" enctype="multipart/form-data">
    Select image:
    <br><input type="file" name="image"/>
    <input type="submit">
</form>

<?php else: ?>
<div id= imgDiv>
<img src="<?php echo "..\\Images\\".$page_image?>" />
</div>
<?php endif; ?> 