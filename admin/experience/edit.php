<?php

require_once('../../admin/experience/database.php');

if (isset($_GET['id'])) {
    $experience_id = strip_tags(mysqli_escape_string($connect, $_GET['id']));

    $query = "SELECT * FROM experience WHERE id_experience = {$experience_id}";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $experience = mysqli_fetch_assoc($result);

        $date_start = $experience['date_start'];
        $date_end = $experience['date_end'];
        $title = $experience['title'];
        $tools = $experience['tools'];
        $description = $experience['description'];
    } else {
        echo "Data Id Tidak Di Temukan.";
        exit();
    }
} else {
    
    echo "Id Tidak Ada";
    exit();
}
?>
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
                <h1 class="sub-title">Edit</h1>
            </div>
            <form action="../../action/edit_experience.php" method="post">
            <input type="hidden" name="experience_id" value="<?php echo $experience_id; ?>">
                <label for="">waktu mulai</label>
                <input type="text" name="date_start" id="date_start" value="<?php echo $date_start; ?>">
                <label for="">waktu selsai</label>
                <input type="text" name="date_end" id="date_endt" value="<?php echo $date_end; ?>">
                <textarea name="title" rows="6" placeholder="Judul"><?php echo $title; ?></textarea>
                <textarea name="tools" rows="6" placeholder="Tools"><?php echo $tools; ?></textarea>
                <textarea name="description" rows="6" placeholder="Deskripsi"><?php echo $description; ?></textarea>
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