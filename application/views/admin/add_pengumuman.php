<head>
    <title>Tambah Pengumuman</title>
</head>
<style>
    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #666;
    }

    input[type="text"],
    input[type="date"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }

    textarea {
        height: 100px;
    }

    .input-group {
        display: flex;
        align-items: center;
    }

    .input-group .input-group-text {
        padding: 10px;
        background-color: #ccc;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        color: #666;
    }

    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border: none;
        background-color: #0d6efd;
        color: #fff;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #8A2BE2;
    }
</style>

<div id="layoutSidenav_content">
    <div class="container" style="margin-top: 70px; margin-bottom: 8px;">
        <h2>Tambah Pengumuman</h2>

        <form action="<?php echo base_url('pengumuman/add_pengumuman') ?>" method="POST">
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>

            <label for="koordinator">Koordinator:</label>
            <input type="text" id="koordinator" name="koordinator" required>

            <label for="isi_pengumuman">Isi Pengumuman:</label>
            <textarea id="isi_pengumuman" name="isi_pengumuman" rows="4" required></textarea>

            <!-- New label for the date input -->
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <input type="submit" value="Tambah Pengumuman">
        </form>
    </div>
</div>
<script src="https://unpkg.com/datepickerjs/dist/datepicker.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Datepicker("#tanggal", {
            format: 'dd mmmm yyyy',
            language: 'id-ID'
        });
    });
</script>