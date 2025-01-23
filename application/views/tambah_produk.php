<!DOCTYPE html>  
<html>  
  <head>  
    <title>Tambah Produk</title>  
    <style>
      th {
        text-align: left;
      }
      #submit {
        text-align: center;
      }
    </style>
  </head>  
  <body>  
    <h1>Tambah Produk</h1>  
    <form action="<?php echo site_url('produkcontrollers/tambah_produk'); ?>" method="post">  
      <table>
        <tr>
          <th>
            <label for="nama_produk">Nama Produk:</label>
          </th>
          <td>
            <input type="text" name="nama_produk" value="" required><br>    
          </td>
        </tr>
        <tr>
          <th>
            <label for="kategori_id">Kategori:</label>
          </th>
          <td>
            <select name="kategori_id" required>
              <?php foreach ($kategori as $kat): ?>    
                <option value="<?php echo $kat->id_kategori; ?>"><?php echo $kat->nama_kategori; ?></option>  
              <?php endforeach; ?>
            </select>
          </td>
        </tr>
        <tr>
          <th>
            <label for="harga">Harga:</label>
          </th>
          <td>
            <input type="number" name="harga" value="" required><br>
          </td>
        </tr>
        <tr>
          <th>
            <label for="status_id">Status:</label>
          </th>
          <td>
            <select name="status_id" required>
              <?php foreach ($status as $stat): ?>    
                <option value="<?php echo $stat->id_status; ?>"><?php echo $stat->nama_status; ?></option>  
              <?php endforeach; ?>
            </select><br>  
          </td>
        </tr>
        <tr>
          <td colspan="2" id="submit">
            <input type="submit" value="Tambah Produk">
          </td>
        </tr>
      </table>
    </form>  
  </body>  
</html>  
