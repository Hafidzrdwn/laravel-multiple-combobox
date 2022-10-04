<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Kelas</th>
      <th scope="col">Absen</th>
    </tr>
  </thead>
  <tbody>
    @forelse($siswa as $key => $value)
    <tr>
      <th scope="row">{{ $key + 1 }}</th>
      <td>{{ $value->nama }}</td>
      <td>{{ $value->email }}</td>
      <td>{{ $value->jurusan->nama_jurusan }}</td>
      <td>{{ $value->kelas->nama_kelas }}</td>
      <td>{{ $value->absen->absen }}</td>
    </tr>
    @empty
    <tr>
      <td colspan="6" class="text-center">Data Tidak Ditemukan</td>
    </tr>
    @endforelse
  </tbody>
</table>
