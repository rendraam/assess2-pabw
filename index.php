<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Magang</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h2>Rendra Akbar Maulana 6701223049</h2>
    <h1>Daftar Lowongan Pekerjaan</h1>
    <div id="lowongan-table"></div>
    <script>
    $(document).ready(function() {
        $.ajax({
            url: 'get_lowongan.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var html = '<table border="1">';
                html += '<tr><th>ID</th><th>Nama Perusahaan</th><th>Alamat Perusahaan</th><th>Posisi Lowongan</th><th>Benefit</th><th>Aksi</th></tr>';
                for (var i = 0; i < data.length; i++) {
                    html += '<tr>';
                        html += '<td>' + data[i].id + '</td>';
                    html += '<td>' + data[i].nama_perusahaan + '</td>';
                    html += '<td>' + data[i].alamat_perusahaan + '</td>';
                    html += '<td>' + data[i].posisi_lowongan + '</td>';
                    html += '<td>' + data[i].benefit + '</td>';
                    html += '<td><button class="delete-btn" data-id="' + data[i].id + '">Hapus</button></td>';
                    html += '</tr>';
                }
                html += '</table>';
                $('#lowongan-table').html(html);
            }
        });
    });
    </script>
</body>
</html>
