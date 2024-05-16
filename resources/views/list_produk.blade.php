<!DOCTYPE html>
<html>
<head>
  <title>List Produk</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

  <div class="ml-10 mt-20">
    <a href="/addproduk">
      <button class="btn btn-primary">Tambah Produk</button>
    </a>
   <table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">No</th>
        <th class="px-4 py-2">Nama</th>
        <th class="px-4 py-2">Deskripsi</th>
        <th class="px-4 py-2">Harga</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($nama as $index => $item)
      <tr>
        <td class="border px-4 py-2">{{ $index + 1 }}</td>
        <td class="border px-4 py-2">{{ $item }}</td>
        <td class="border px-4 py-2">{{ $deskripsi[$index] }}</td>
        <td class="border px-4 py-2">{{ $harga[$index] }}</td>
      </tr>
      @endforeach
    </tbody>
   </table>
  </div>

</body>
</html>
