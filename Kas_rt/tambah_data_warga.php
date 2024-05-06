<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Warga</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Input Data Warga</h2>
            <form action="proses_input.php" method="post">
                <div class="input-group">
                    <input type="text" name="nik" placeholder="NIK" required>
                </div>
                <div class="input-group">
                    <input type="text" name="nama" placeholder="Nama" required>
                </div>
                <div class="input-group">
                   <label>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                    </label>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                    </label>
                </div>
                <div class="input-group">
                    <input type="text" name="no_hp" placeholder="No HP" required>
                </div>
                <div class="input-group">
                    <input type="text" name="alamat" placeholder="Alamat" required>
                </div>
                <div class="input-group">
                    <input type="text" name="no_rumah" placeholder="No Rumah" required>
                </div>
                <div class="input-group">
                    <select name="status" required>
                        <option value="" disabled selected>Status</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>
                <button type="submit">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
