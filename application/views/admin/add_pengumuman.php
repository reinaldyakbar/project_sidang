<head>
    <title>Tambah Pengumuman</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

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

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<div id="layoutSidenav_content">
    <div class="container" style="margin-top: 70px; margin-bottom: 8px;">
        <h2>Tambah Pengumuman</h2>

        <form action="<?php echo base_url('pengumuman/add_pengumuman') ?>" method="POST">
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>

            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <label for="isi_pengumuman">Isi Pengumuman:</label>
            <textarea id="isi_pengumuman" name="isi_pengumuman" rows="4" required></textarea>

            <input type="submit" value="Tambah Pengumuman">
        </form>
    </div>
</div>