<?php 
    $con = mysqli_connect('localhost', 'root', '', 'youtube');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/embed.css">
</head>
<style>
</style>
<body>
    <div class="grid">
        <?php 
            $sql = "SELECT * from videos";
            $res = mysqli_query($con, $sql);

            while($row = mysqli_fetch_assoc($res)){

                $data = $row['url'];
                $final = str_replace('watch?v=', 'embed/', $data);
                echo "
                    <iframe
                        src='$final'
                        frameborder='0'
                        allow='autoplay; encrypted-media'
                        allowfullscreen>
                    </iframe>
                ";
            }
        ?>
    </div>

</body>
</html>