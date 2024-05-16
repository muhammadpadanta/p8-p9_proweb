<!DOCTYPE html>
<html>
<head>
  <title>Add Produk</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>
<body>

  <div class="">
   <h1>Input Produk</h1>
  </div>

  <form method="POST" action="{{ route ('produk.simpan') }}">
    @csrf
    <table class="table">
        <tr>
            <td>Nama:</td>
            <td colspan="3"><input type="text" class="form-control input input-bordered input-secondary w-full max-w-xs" id="nama" name="nama"></td>
        </tr>

        <tr>
            <td>Deskripsi:</td>
            <td colspan="3"><textarea type="text" class="form-control textarea textarea-primary" id="deskripsi" name="deskripsi"></textarea></td>
        </tr>

        <tr>
            <td>Harga:</td>
            <td><input type="number" class="form-control input input-bordered input-secondary w-full max-w-xs" id="harga" name="harga"></td>
            <td></td>
            <td></td>
        </tr>
  
    </table>
  
    <button type="submit" class="form-control btn btn-accent" >Simpan </button>
   
    
  </form>
  <a href="/listproduk">
    <button  class=" btn btn-primary mt-5" >List Produk </button>
    </a>
</body>
</html>
