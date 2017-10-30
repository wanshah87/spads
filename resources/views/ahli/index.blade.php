@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Senarai Ahli Darussyifa'</div>

                <div class="panel-body">
                  <a class="btn btn-primary" href="{{ route('tambahAhli') }}">
                    Tambah Ahli
                  </a>

<table class="table table-bordered">

  <thead>
    <tr>
      <td>Nama</td>
      <td>No. Kad Pengenalan</td>
      <td>No. Ahli</td>
      <td>No. Telefon</td>
      <td>Email</td>
      <td>Alamat</td>
      <td>Tindakan</td>
    </tr>
  </thead>

  <tbody>
    @foreach ($senarai_ahli as $ahli)
      <tr>
        <td>{{ $ahli->nama }}</td>
        <td>{{ $ahli->no_kp }}</td>
        <td>{{ $ahli->no_ahli }}</td>
        <td>{{ $ahli->no_telefon }}</td>
        <td>{{ $ahli->email }}</td>
        <td>{{ $ahli->alamat }}</td>
        <td></td>
    </tr>
      @endforeach
  </tbody>

</table>
{{ $senarai_ahli->links() }}
Jumlah Ahli Darussyifa {{ $senarai_ahli->total() }} orang
</div>
</div>
</div>
</div>
</div>
@endsection
