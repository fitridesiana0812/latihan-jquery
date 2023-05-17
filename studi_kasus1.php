<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div class="form-container">
        <h3>Form Biodata</h3>
        <form id="biodataForm">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="umur">Umur</label>
        <input type="number" id="umur" name="umur" required>

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" required>

        <button type="submit" id="submitButton" disabled>Simpan</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
        // Cek status form setiap kali input berubah
        $('#biodataForm input').on('input', function() {
            var isFormValid = true;
            $('#biodataForm input').each(function() {
            // Cek jika ada input yang masih kosong
            if ($(this).val() === '') {
                isFormValid = false;
                return false; // Hentikan loop jika ada input kosong
            }
            });

            // Mengubah status button Simpan sesuai dengan status form
            if (isFormValid) {
            $('#submitButton').prop('disabled', false);
            } else {
            $('#submitButton').prop('disabled', true);
            }
        });
        });
    </script>
</body>
</html>