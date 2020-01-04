<?php
session_start();
if (empty($_SESSION['username'])) {
    echo "<script type='text/javascript'>
	alert('Login first!')
	window.location='../index.php';
	</script>";
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <title>Form Register</title>
    </head>

    <body class="bg-secondary">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <form action="../process/inputProcess.php" method="post">
                                    <div class="form-group">
                                        <label for="Username">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="ex : Greggy Gianini Firmansyah" required>
                                    </div>
                                    <label for="Jenis Kelamin">Jenis Kelamin</label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label mr-3">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" checked>Laki-Laki
                                            </label>
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="ex : Malang" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="No HP">No HP</label>
                                        <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="ex : 087xxxxxx" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="name@company.com" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    <a href="../process/logout.php" class="btn btn-danger btn-block">Logout</a>
                                    <div id="parent-error" class="align-self-start mt-4">
                                        <?php
                                        if (isset($_GET["error"])) {
                                            $error = $_GET["error"];
                                        ?>
                                            <small class="rounded border border-danger text-danger align-self-start p-1 d-flex" id="error-handling2">
                                            <?php
                                            echo $error;
                                        } else if (isset($_GET["message"])) {
                                            $message = $_GET["message"];
                                            ?>
                                                <small class="rounded border border-success text-success align-self-start p-1 d-flex" id="error-handling2">
                                                <?php
                                                echo $message;
                                            }
                                                ?>
                                                </small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php } ?>