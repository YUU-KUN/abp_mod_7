<!DOCTYPE html>
<html>
  <head>
  <title>Daftar Produk</title>
  <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="{{ asset('assets/jquery.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </head>
  <body style="width:95%">
  <div class="row justify-content-center" style="margin-top:13%">
    @extends('template')
    @section('title','Daftar Produk')
    @section('content')
    <div class="col-4">
    <h1>Indra Wahyu - 1301213135</h1>
        <span class="float-left">{{ session('msg') }}</span>
         <a href="/product/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
         <table class="table table-bordered table-striped">
         <tr>
         <th>Nama</th>
         <th>Harga</th>
         <th>Variant</th>
         <th>Aksi</th>
         </tr>
         @foreach($list as $d)
         <tr>
          <td>{{ $d->name }}</td>
          <td>{{ $d->price }}</td>
          <td>
            <ul>
            @foreach($d->variants()->get() as $var)
                <li>{{ $var->name }}</li>
                Desc: {{ $var->description }} <br />
            Proc: {{ $var->processor }} <br />
            RAM: {{ $var->memory }} <br />
            Strg: {{ $var->storage }} <br />
            Product: {{ $var->product->name }}
                @endforeach
              </ul>
          </td>
          <td>
          <a href="/product/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
          <form method="post" action="/product/{{ $d->id }}" onsubmit="return
confirm('Yakin hapus?')" style="display:inline">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">Hapus</button>
          </form>
          </td>
   </tr>
         @endforeach
         </table>
</div>
@endsection
  </div>
  </body>
</html>