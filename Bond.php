
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
  </style>
</head>

<body>
  <fieldset>
    <form action="tampil_bond.php" method="POST">
      <table>
        <tbody>
          <tr>
            <th style="font-size: 15px; column-span:3"><b>Toko Cat Guna Bangun Jaya</b></th>
          </tr>
          <tr>  
            <td style="width: 30%;">
              nama customer
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
        </table>
        <button type="submit" name="hitung">Hitung</button>
        <button type="reset" name="batal">Batal</button>
      </form>
  </fieldset>
</body>

</html>