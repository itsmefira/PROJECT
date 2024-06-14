<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasilLatihan1</title>
</head>
<body>
    <br>Nama: <?= $_POST["nama"]; ?></br>
    <br>Email: <?= $_POST["email"]; ?></br>
    <br>Lokasi: <?= $_POST["lokasi"]; ?></br>
    <br>Jenis Kelamin: <?= $_POST["jeniskel"]; ?></br>
    <br>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "skills" array is set
    if (isset($_POST["skills"])) {
        // Loop through each selected skill
        echo "Skill:<br>";
        foreach ($_POST["skills"] as $skill) {
            echo $skill . "<br>";
        }
    } else {
        echo "No skills selected";
    }
}
?>
</br>
    <a href="latihan1.php">INPUT DATA LAGI</a> 
     
</body>
</html>