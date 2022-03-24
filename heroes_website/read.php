<?php
session_start();

if (isset($_SESSION['Logged_user'])) {
    if($_SESSION['Logged_user'][5] == 'admin'){
        header('Location:list_hereos.php');
    }    
}

// if (!isset($_SESSION['Logged_user'])) {
// 	header('Location:read.php');
// }else{

//     if($_SESSION['Logged_user'][5] == 'admin'){
//         header('Location:list_hereos.php');
//     }
// }
?>

<?php include "php/list.php" ?>
<?php require_once('./authentication/operations.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3c5d2d689a.js" crossorigin="anonymous"></script>
    <link href="css/read.css" rel="stylesheet" type="text/css">
    <title>Heroes website</title>
</head>

<body>
    <div class="outer-heading">
        <div class="heading">
            <div class="logo-container">
                <a href="#"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="nav-link">
                <div>
                    <a class="nav-link active text-white m-3 mt-0 mb-0" href="index.html">Home</a>
                </div>
                <?php if(isset($_SESSION['Logged_user'])):
                ?>
                <form method="post"> 
                    <button type="submit" name="logout" class="btn btn-md btn-dark">Logout</button>
                </form>
                <?php else: ?>
                <a href="authentication/login.php"><button class="btn btn-md btn-signup">Sign in</button></a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="box">
        <p class="display-6 text-center text-white fw-bold p-3" style="background-color: #000;">List of X-Men</p>
            <?php if (mysqli_num_rows($result)) { ?>
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-white" style="background-color: #BF1E1E;">
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
                        while ($row = mysqli_fetch_assoc($result)) {
                            $i++;
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><a class="text-underline view_more_link" data-bs-toggle="modal" data-bs-target="#view_more_<?php echo $row['id']?>"><?php echo $row['name']?></a></td>
                                <td><?php echo $row['real_name'] ?></td>
                                <td><?php echo $row['last_seen'] ?></td>
                                <td><?php echo $row['short_bio'] ?></td>
                                <div class="modal fade" id="view_more_<?php echo $row['id']?>" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-title"><?php echo $row['name']?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6>Real name: </h6>
                                                    <p><?php echo $row['real_name']?></p><br>
                                                    <h6>Last seen:</h6>
                                                    <p><?php echo $row['last_seen']?></p><br>
                                                    <h6>Long bio: </h6>
                                                    <p><?php echo $row['long_bio']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            <?php } ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-icons">
            <a href="https://www.instagram.com " target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
        </div>
        <p>&copy;2022 Heroes Evolved. All rights reserved</p>
    </div>
</footer>

</html>
