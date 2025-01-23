<!DOCTYPE html>  
<html>  
  <head>
    <title>Produk</title>  
  </head>  
  <body>  
    <h1>Produk</h1>
    <button onclick="window.location.href='<?php echo site_url('produkcontrollers/tambah/'); ?>'">Tambah Produk</button>
    <table border="1">  
        <tr>  
            <th>No</th>  
            <th>ID Produk</th>  
            <th>Nama Produk</th>  
            <th>Kategori</th>  
            <th>Harga</th>
            <th>Status</th>  
            <th></th>  
        </tr>  
        <?php foreach ($produks as $key => $produk): ?>  
        <tr>  
            <td><?php echo $key + 1 ?></td>  
            <td><?php echo $produk->id_produk; ?></td>  
            <td><?php echo $produk->nama_produk; ?></td>  
            <td><?php echo $produk->nama_kategori; ?></td>  
            <td><?php echo $produk->harga; ?></td>  
            <td><?php echo $produk->nama_status; ?></td>
            <td>
              <button onclick="window.location.href='<?php echo site_url('produkcontrollers/edit/' . $produk->id_produk); ?>'">Edit</button>
              <button onclick="return konfirmasiHapus('<?php echo site_url('produkcontrollers/hapus/' . $produk->id_produk); ?>');">Hapus</button>
            </td>  
        </tr>  
        <?php endforeach; ?>  
    </table>  
  </body>  
</html>  

<script>  
  function konfirmasiHapus(url) {  
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {  
      window.location.href = url;
    }  
    return false;  
  }  
</script>  