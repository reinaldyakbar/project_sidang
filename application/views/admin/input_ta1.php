<!DOCTYPE html>
<html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 20px;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    h3 {
        color: #555;
        margin-top: 15px;
    }

    form {
        margin-top: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-top: 10px;
    }

    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    input[type="submit"] {
        margin-top: 15px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <div id="layoutSidenav_content">
        <div class="container">
            <h2>Input Form for Tugas Akhir</h2>
            <form action="<?php echo base_url('informasi/insert'); ?>" method="post">
                <!-- Form input untuk Prosedur Tugas Akhir -->
                <div class="section">
                    <label for="syarat_akademik_ta1">Syarat Akademik Tugas Akhir 1:</label>
                    <textarea id="syarat_akademik_ta1" name="syarat_akademik_ta1" rows="4" cols="50"></textarea>
                </div>

                <!-- Form input untuk Syarat Administrasi Tugas Akhir -->
                <div class="section">

                    <label for="syarat_admin_ta1">Syarat Administrasi Tugas Akhir 1:</label>
                    <textarea id="syarat_admin_ta1" name="syarat_admin_ta1" rows="4" cols="50"></textarea>
                </div>

                <!-- Form input untuk Syarat Akademik Tugas Akhir -->
                <div class="section">
                    <label for="berkas_reguler">Berkas Pendaftaran Sidang TA 1 Jalur Reguler:</label>
                    <textarea id="berkas_reguler" name="berkas_reguler" rows="4" cols="50"></textarea>
                </div>

                <!-- Form input untuk Syarat Sidang Tugas Akhir -->
                <div class="section">
                    <label for="berkas_publikasi">Berkas Pendaftaran Sidang TA 1 Jalur Publikasi:</label>
                    <textarea id="berkas_publikasi" name="berkas_publikasi" rows="4" cols="50"></textarea>
                </div>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <script>
        // Get the query parameter from the URL to check if data is submitted successfully
        const urlParams = new URLSearchParams(window.location.search);
        const isDataSubmitted = urlParams.get('submitted');

        // If data is submitted successfully, show the success popup
        if (isDataSubmitted) {
            alert('Data submitted successfully!');
        }
    </script>

</body>

</html>