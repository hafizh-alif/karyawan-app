<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Presensi</title>
    <!-- Tambahkan Bootstrap CSS untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Riwayat Presensi Hari Ini</h2>
        <h3>Total Karyawan Absen Hari Ini: {{ $presensis->count() }}</h3>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Waktu Masuk</th>
                    <th>Waktu Pulang</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($presensis as $presensi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $presensi->user->name }}</td> <!-- Menampilkan nama pengguna -->
                        <td>{{ $presensi->tanggal }}</td>
                        <td>{{ $presensi->masuk }}</td>
                        <td>{{ $presensi->pulang ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data presensi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Tambahkan Bootstrap JS dan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
