
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    fieldset{
      margin: auto;
      width: 600px;
    }
  
    h1{
      text-align: center;
    }
    table, td, tr{
      padding: 10px;
    }
  </style>
</head>

<body>
  <fieldset>
    <form action="tampil_bond.php" method="POST">
      <table style="width: 100%;">
        <thead>
          <td colspan="3">
            <h1>Toko Cat Guna Bangun Jaya</h1>
          </td>
        </thead>
        <tbody>
          <tr>  
            <td style="width: 30%;">
              Nama customer
            </td>
            <td>
              :
            </td>
            <td>                
              <input type="text" name="nama">
            </td>
          </tr>
          <tr>
            <td>
              Alamat 
            </td>
            <td>
              :
            </td>
            <td>
              <input type="text" name="Alamat">
            </td>
          </tr>
          <tr>
            <td>
              Jenis Cat
            </td>
            <td>
              :
            </td>
            <td>
              <select name="merek">
              <option value="Bituminous Paint">Bituminous Paint</option>
              <option value="Chlorinated Rubber">Chlorinated Rubber</option>
              <option value="Vinyl">Vinyl</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>
            warna
            </td>
            <td>
              :
            </td>
            <td>
            <input type="radio" name="warna" Value="Merah">Merah</input>
            <input type="radio" name="warna" value="Biru">Biru</input>
            <input type="radio" name="warna" value="Kuning">kuning</input>
            </td>
          </tr>
          <tr>
            <td>
              Jumlah beli
            </td>
            <td>
              :
            </td>
            <td>
            <input type="text" name="jmlh">
            </td>
          </tr>
        </tbody>

        <tfoot>
          <td>
            <button type="submit" name="hitung">Hitung</button>
            <button type="reset" name="batal">Batal</button>
          </td>
        </tfoot>
        </table>
      </form>
  </fieldset>
</body>

</html>
