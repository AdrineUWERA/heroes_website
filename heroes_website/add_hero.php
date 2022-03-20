<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/add_hero.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/3c5d2d689a.js" crossorigin="anonymous"></script>
    <title>Heroes website</title>
</head>
    <body>
        <div class="container">
            <form action="php/add.php" method="post">
                <h1 class="display-5 text-center text-white font-weight-bold">Add Hero</h1>
                <?php if(isset($_GET['error'])) {?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error'];?>
                </div>
                <?php }?>
                <div class="mb-3">
                    <label for="name" class="form-label text-white">Name:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="name" 
                        name="name" 
                        value="<?php if(isset($_GET['name'])) echo($_GET['name']); ?>" >
                </div>

                <div class="mb-3">
                    <label for="real_name" class="form-label text-white">Real name:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="real_name"
                        name="real_name" 
                        value="<?php if(isset($_GET['real_name'])) echo($_GET['real_name']); ?>" >
                </div>

                <div class="mb-3">
                    <label for="last_seen" class="form-label text-white">Last seen:</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="last_seen"
                        name="last_seen" 
                        value="<?php if(isset($_GET['last_seen'])) echo($_GET['last_seen']); ?>">
                </div>

                <div class="mb-3">
                    <label for="short_bio" class="form-label text-white">Short bio:</label>
                    <textarea 
                        type="text" 
                        class="form-control" 
                        id="short_bio" 
                        name="short_bio" 
                        value="<?php if(isset($_GET['short_bio'])) echo($_GET['short_bio']); ?>" ></textarea>
                </div>

                <div class="mb-3">
                    <label for="long_bio" class="form-label text-white">Long bio:</label>
                    <textarea 
                        type="text" 
                        class="form-control" 
                        id="long_bio"
                        name="long_bio" 
                        value="<?php if(isset($_GET['long_bio'])) echo($_GET['long_bio']); ?>" ></textarea>
                </div>
                <div class="button-container">
                    <button 
                        type="submit" 
                        class="btn btn-white" 
                        name="create">Add hero</button>
                </div>
                <!-- <a href="modify.php" class='link-primary'>View</a> -->
            </form>
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