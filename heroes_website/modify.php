<?php 
session_start();
if (!isset($_SESSION['Logged_user'])) {
	header('Location:index.php');
}else{

    if($_SESSION['Logged_user'][5] != 'admin'){
        header('Location:index.php');
    }
}	

?>
<?php require_once('./authentication/operations.php') ?>
<?php include "php/list.php"?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/modify.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3c5d2d689a.js" crossorigin="anonymous"></script>
        <title>Heroes website</title>  
    </head>
    <body>
        <div class="navbar-container">
            <nav class="navbar navbar-expand-lg mt-4">
                <div class="logo-container">
                    <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-thumbnail bg-none border-0 bg-0" alt="logo"/></a>
                </div>
                <div class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <div class="collapse navbar-collapse  pt-0 pb-0 justify-content-end pr-4 pl-4" id="navbarNavAltMarkup">
                    <div class="navbar-nav text-center p-4 pt-0 pb-0">
                        <a class="nav-item nav-link active text-white m-3 mt-0 mb-0" href="list_hereos.php">View</a>
                        <a class="nav-item nav-link text-white m-4 mt-0 mb-0" href="add_hero.php">Add</a>
                        <a class="nav-item nav-link text-white  m-4 mt-0 mb-0" href="modify.php">Modify</a> 
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
            </nav>
        </div>
        <div class="container">
            <div class="box">
                <?php if(isset($_GET['success'])) {?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success'];?>
                </div>
                <?php }?>
                <?php if (mysqli_num_rows($result)) {?> 
                    <div class="table-responsive"> 
                        <table class="table table-striped bg-light">
                            <thead>
                                <tr class="text-white" style="background-color: #BF1E1E;">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Real name</th>
                                    <th scope="col">Last seen</th> 
                                    <th scope="col"> Action</th> 
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
                                        <td><a class="text-underline view_more_link" data-bs-toggle="modal" data-bs-target="#view_more_<?php echo $row['id']?>"><?php echo $row['name']?></a></td>
                                        <td><?php echo $row['real_name']?></td>
                                        <td><?php echo $row['last_seen']?></td>
                                        <td>
                                            <a href="update.php?id=<?=$row['id']?>" class="btn update-btn shadow mt-2" data-bs-toggle="modal" data-bs-target="#update_<?php echo $row['id']?>">Update</a>
                                            <a href="php/delete.php?id=<?=$row['id']?>" class="btn btn-dark shadow mt-2" >Delete</a>
                                        </td>
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

                                        <div class="modal fade" id="update_<?php echo $row['id']?>" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-dark">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-white" id="modal-title">Update Hero's details</h5>
                                                        <button type="button" class="btn-close" style="background-color: #fff;" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <form action="php/update.php" method="post">
                                                                <?php if (isset($_GET['error'])) { ?>
                                                                    <div class="alert alert-danger" role="alert">
                                                                    <?php echo $_GET['error']; ?>
                                                                    </div>
                                                                <?php } ?>
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label text-white">Name</label>
                                                                    <input type="text" 
                                                                        class="form-control"  
                                                                        id="name" 
                                                                        name="name" 
                                                                        value="<?=$row['name'] ?>" >
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="real_name" class="form-label text-white">Real name</label>
                                                                    <input type="text" 
                                                                        class="form-control"  
                                                                        id="real_name" 
                                                                        name="real_name" 
                                                                        value="<?=$row['real_name']?>" >
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="last_seen" class="form-label text-white">Last seen</label>
                                                                    <input type="text" 
                                                                        class="form-control"  
                                                                        id="last_seen" 
                                                                        name="last_seen" 
                                                                        value="<?=$row['last_seen']?>" >
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="short_bio" class="form-label text-white">Short bio</label>
                                                                    <input type="text" 
                                                                        class="form-control"  
                                                                        id="short_bio" 
                                                                        name="short_bio" 
                                                                        value="<?=$row['short_bio']?>" >
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="long_bio" class="form-label text-white">Long bio</label>
                                                                    <input type="text" 
                                                                        class="form-control"  
                                                                        id="long_bio" 
                                                                        name="long_bio" 
                                                                        value="<?=$row['long_bio']?>" >
                                                                </div>
                                                                
                                                                <input type="text"
                                                                    name='id' value='<?=$row['id']?>' 
                                                                    hidden>

                                                                <div class="button-container">
                                                                    <button type="submit" class="btn text-dark" name="update" style="background-color: #fff;">Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
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


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    <footer class="footer">
        <div class="footer-content mb-3">
            <div class="footer-icons">
                <a href="https://www.instagram.com " target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
                <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
            </div>
            <p>&copy;2022 Heroes Evolved. All rights reserved</p>
        </div>
    </footer>
</html>
