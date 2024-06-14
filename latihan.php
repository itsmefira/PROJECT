<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>
    <center>
    <form action="hasil.php" method="post">
    <table>
        <tr>
            <td><input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda"></td>
        </tr> 
        <tr>
            <td><input type="number" class="form-control" name="nim" placeholder="Masukkan NIM Anda"></td>
        </tr>
        <tr>
            <td><input type="date" class="form-control" name="ttl" placeholder="Masukkan Tanggal Lahir Anda"></td>
        </tr> 
        <tr>
            <td><button type="submit" name="Kirim" class="btn btn-success">proses</button></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>