<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{ $nilai }}</h1>
        <br>
        @if (($nilai >= 0) and ($nilai < 50))
            <div class="alert alert-danger d-inline-block">Maaf, anda tidak lulus</div>
        @elseif (($nilai >= 50) and ($nilai <= 100))
            <div class="alert alert-success d-inline-block">Selamat, anda lulus</div>
        @else
            <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
        @endif
    </div>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <?php foreach ($mahasiswa as $nama) {
            echo "<li> $nama </li>";
        }
        ?>
    </ol>
</body>
</html>