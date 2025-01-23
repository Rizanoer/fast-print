<!DOCTYPE html>  
<html>  
  <head>  
    <title>Edit Produk</title>  
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
    <h1>Edit Produk</h1>  
    <form action="<?php echo site_url('produkcontrollers/update'); ?>" method="post">  
      <input type="hidden" name="id_produk" value="<?php echo $produk->id_produk; ?>">

      <table>
        <tr>
          <th>
            <label for="nama_produk">Nama Produk:</label>
          </th>
          <td>
            <input type="text" name="nama_produk" value="<?php echo $produk->nama_produk; ?>" required><br>  
          </td>
        </tr>
        <tr>
          <th>
            <label for="kategori_id">Kategori:</label>
          </th>
          <td>
          <select name="kategori_id" required>
            <?php foreach ($kategori as $kat): ?>    
              <option value="<?php echo $kat->id_kategori; ?>" <?php echo ($produk->kategori_id == $kat->id_kategori) ? 'selected' : ''; ?>><?php echo $kat->nama_kategori; ?></option>  
            <?php endforeach; ?>
          </select>
          </td>
        </tr>
        <tr>
          <th>
            <label for="harga">Harga:</label>
          </th>
          <td>
            <input type="number" name="harga" value="<?php echo $produk->harga; ?>" required><br>  
          </td>
        </tr>
        <tr>
          <th>
            <label for="status_id">Status:</label>
          </th>
          <td>
            <select name="status_id" required>
              <?php foreach ($status as $stat): ?>    
                <option value="<?php echo $stat->id_status; ?>" <?php echo ($produk->status_id == $stat->id_status) ? 'selected' : ''; ?>><?php echo $stat->nama_status; ?></option>  
              <?php endforeach; ?>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2" id="submit">
            <input type="submit" value="Update Produk">
          </td>
        </tr>
      </table>  
    </form>  
  </body>  
</html>  
