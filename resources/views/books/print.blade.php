<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="nofollow"
        href="https://justpaste.it/redirect/mkmj5/https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2Fbootstrap%404.6.0%2Fdist%2Fcss%2Fbootstrap.min.css">
</head>

<body>
    <h1 class="text-center">Data Buku</h1>
    <p class="text-center">Laporan Data Buku Tahun 2022</p>
    <br />
    <table id="table-data" class="table table-bordered" border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>PENULIS</th>
                <th>TAHUN</th>
                <th>PENERBIT</th>
                <th>COVER</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($books as $book)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td><img src="{{ public_path('storage/cover_buku/'. $book->cover) }}" alt="cover not found" width="50px"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>