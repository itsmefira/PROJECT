<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <form action="hasilLatihan1.php" method="post">
        <h1>Form HTML Pada PHP</h1>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>

        <label for="lokasi">Lokasi : </label>
        <select id="lokasi" name="lokasi">
            <option value="Surakarta">Surakarta</option>
            <option value="Yogyakarta">Yogyakarta</option>
            <option value="Bandung">Bandung</option>
        </select><br>

        <label for="jenis_kelamin">jenis kelamin:</label>
        <input type="radio" id="jenis_kelamin" name="jeniskel" value="Laki-laki"><label for="pria">Laki-Laki</label>
        <input type="radio" id="jenis_kelamin" name="jeniskel" value="Perempuan"><label for="wanita">Perempuan</label><br>
        <label for="skills">Skill</label>
        <div>
        <label for="skill_php">PHP</label>
        <input type="checkbox" id="skill_php" name="skills[]" value="PHP">
        <br>
        <label for="skill_html">MySQL</label>
        <input type="checkbox" id="skill_html" name="skills[]" value="MySQL">
        <br>
        <label for="skill_css">Javascript</label>
        <input type="checkbox" id="skill_css" name="skills[]" value="Javascript">
        <br>
        <label for="skill_css">HTML</label>
        <input type="checkbox" id="skill_css" name="skills[]" value="HTML">
        <br>
        <label for="skill_css">CSS</label>
        <input type="checkbox" id="skill_css" name="skills[]" value="CSS">
        <br>
        </div>


        <input type="submit" value="Submit">

    </form>
</body>
</html>