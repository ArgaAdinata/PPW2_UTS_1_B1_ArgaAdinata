<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-stripped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Pemain</th>
                <th>Nomor Pemain</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($pemains as $pemain)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
                <?php $i++ ?>
            @endforeach
        </tbody>
</html>
