<?php include "php/list.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/list_heroes.css" rel="stylesheet" type="text/css">
    <title>Heroes website</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">List of Heroes</h4><hr><br>
            <!-- <?php if(isset($_GET['success'])) {?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['success'];?>
            </div>
            <?php }?> -->
            <?php if (mysqli_num_rows($result)) {?> 
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Real name</th>
                        <th scope="col">Last seen</th>
                        <th scope="col">Short bio</th>
                        <!-- <th scope="col">Long bio</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i = 0;
                        while($row = mysqli_fetch_assoc($result)) {
                            $i++;
                    ?>
                    <tr>
                        <th scope="row"><?=$i?></th>
                        <td><?=$row['name']?></td>
                        <td><?php echo $row['real_name']?></td>
                        <td><?php echo $row['last_seen']?></td>
                        <td><?php echo $row['short_bio']?></td>
                        <!-- <td><?php echo $row['long_bio']?></td> -->
                        <td>
                            <a href="update.php?id=<?=$row['id']?>" class="btn btn-success">Update</a>
                            <a href="php/delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
			</table>
            <?php } ?>
            <!-- <div class="link-right">
                <a href="index.php" class='link-primary'>Create</a>
            </div> -->
        </div>   
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
</html>
