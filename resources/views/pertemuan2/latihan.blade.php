<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>
<body>
    <h1>Test halaman</h1>
    <h1>{{$siswa[0]['nama']}}</h1>
    @if ($siswa[0]['kelas']==12)
        <h1>Fitriyan sebentar lagi lulus</h1>
    @else
        <h1>Fitriyan masih lama lulusnya</h1>
    @endif

    @foreach ($siswa as $item)
        <h2>Nama Siswa : {{$item['nama']}}, kelas : {{$item['kelas']}}, Jurusan : {{$item['jurusan']}}</h2>
    @endforeach
</body>
</html>