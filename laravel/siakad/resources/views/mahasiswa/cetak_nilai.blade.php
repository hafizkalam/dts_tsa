<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF </title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Nilai</h4>
    </center>
    <ul>
        <li><strong>Nama :</strong> {{ $mahasiswa->nama }}</li>
        <li><strong>NIM :</strong> {{ $mahasiswa->nim }}</li>
        <li><strong>Kelas :</strong> {{ $mahasiswa->kelas->nama_kelas }}</li>
    </ul>
    <table>
        <tr>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Nilai</th>
        </tr>
        @foreach ($mahasiswa->matakuliah as $mk)
            <tr>
                <td>{{ $mk->nama_matkul }}</td>
                <td>{{ $mk->sks }}</td>
                <td>{{ $mk->semester }}</td>
                <td>{{ $mk->pivot->nilai }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>