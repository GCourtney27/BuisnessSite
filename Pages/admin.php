<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Styles/styleOne.css" rel="stylesheet" />
    <!-- Run website with: http://localhost/<YourfolderName>/Pages/index.php -->
    
    <?php $pageName = "Admin Page"?>
    <title><?php echo $pageName?></title>
</head>
<body>
    <div class="mainContent">
        <h1><?php include "../PHP_Includes/header.php"?></h1>
        <?php include "../PHP_Includes/menu.php"?>

        <form name="CreatePage_Btn" action="../Framework/CreatePage.php" method="post">
            <input type="submit" value="Create Page" />
        </form>

        <!-- For each page have a delete button -->

        <table>
            <tr>
                <th>Page Id</th>
                <th>Page Title</th>
            </tr>

        <?php
        
            include "../Database/DatabaseManager.php";
            $query = "select * from pages";
            $result = $sql_inst->query ( $query );
            $num_db_rows = $result->num_rows;
            
            if($num_db_rows >= 1){

                while($row = $result->fetch_assoc()){
                    extract($row);

                    echo "<tr>";
                        echo "<td>{$page_index}</td>";
                        echo "<td>{$page_title}</td>";
                        echo "<td> <a href='../Framework/DeletePage.php?page_index={$page_index}'>Delete Page</a> </td>";
                    echo "</tr>";
                }

            }

        ?>
        </table>

        <?php include "../PHP_Includes/footer.php"?>
    <div>

</body>
</html>