
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>experience</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/e8b8ffaaa7.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once('../../admin/experience/barmenu.php')?>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Tambah data</h1>
            </div>
            <form action="../../action/add_experience.php" method="post">
                <label for="">waktu mulai</label>
                <input type="date" name="date_start" placeholder="" required>
                <label for="">waktu selsai</label>
                <input type="date" name="date_end" placeholder="" required>
                <textarea name="title" rows="6" placeholder="Judul"></textarea>
                <textarea name="tools" rows="6" placeholder="Tools"></textarea>
                <textarea name="description" rows="6" placeholder="Deskripsi"></textarea>
                <button type="submit" class="btn btn2">Submit</button>
            </form>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright <i class="fa-sharp fa-regular fa-copyright"></i> Fahri. Made with <i class="fa-solid fa-heart"></i> by MFA Team</p>
    </div>
</div>
</body>
</html>