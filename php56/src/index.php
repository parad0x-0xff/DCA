<!DOCTYPE html>

<html>
    <title>LFI PHP</title>
    <body>
        <br>
        <h1>Choose your file:</h1>

        <a href=index.php?page=file1.php>Arquivo 1</a><br>
        <a href=index.php?page=file2.php>Arquivo 2</a><br>
        <a href=index.php?page=file3.php>Arquivo 3</a><br>

       <?php 
        $page = $_GET['page'];
        if (isset($page) && $page != '') {
            include($page);
       }
       ?>
    </body>
    
</html>