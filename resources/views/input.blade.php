<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>

<body>
    <h2>Input Biodata</h2>
    <form action="/proses" method="post">
        @csrf
        <label>Lokasi Sensor:</label>
        <input type="text" name="lokasisensor"><br><br>

        <label>Ketinggian Air:</label>
        <input type="number" name="ketinggianair"><br><br>

        <label>Curah Hujan:</label>
        <input type="number" name="curahhujan"><br><br>

        <label>Kelembapan Tanah:</label>
        <input type="number" name="kelembapantanah"><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>

</html>