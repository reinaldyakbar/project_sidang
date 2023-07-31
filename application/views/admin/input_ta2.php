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
            <h2>Form Tugas Akhir 2</h2>
            <form action="<?php echo base_url('informasi/submit_formTA2'); ?>" method="post">
                <div class="section">
                    <label for="syarat_akademik_ta2">Syarat Akademik TA2:</label>
                    <textarea name="syarat_akademik_ta2" id="syarat_akademik_ta2" required></textarea>
                </div>

                <div class="section">
                    <label for="syarat_admin_ta2">Syarat Admin TA2:</label>
                    <textarea name="syarat_admin_ta2" id="syarat_admin_ta2" required></textarea>
                </div>

                <div class="section">
                    <label for="berkas_ta2_reguler">Berkas TA2 Reguler:</label>
                    <textarea name="berkas_ta2_reguler" id="berkas_ta2_reguler" required></textarea>
                </div>

                <div class="section">
                    <label for="berkas_ta2_publikasi">Berkas TA2 Publikasi:</label>
                    <textarea name="berkas_ta2_publikasi" id="berkas_ta2_publikasi" required></textarea>
                </div>

                <div class="section">
                    <label for="pasca_reguler">Pasca Reguler:</label>
                    <textarea name="pasca_reguler" id="pasca_reguler" required></textarea>
                </div>

                <div class="section">
                    <label for="pasca_publikasi">Pasca Publikasi:</label>
                    <textarea name="pasca_publikasi" id="pasca_publikasi" required></textarea>
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