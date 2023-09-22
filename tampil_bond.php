<?php
class transaksi
{
  protected $Harga,
            $JmlhBeli,
            $Jenis,
            $DiskonV;

  function __construct($Jenis, $JumlhBeli){
    $this->JmlhBeli = $JumlhBeli;
    $this->Jenis = $Jenis;
    if($this -> Jenis == "Bituminous Paint"){
      $this -> Harga = 20000;
    }elseif($this -> Jenis == "Chlorinated Rubber"){
      $this -> Harga = 30000;
    }elseif($this -> Jenis == "Vinyl"){
      $this -> Harga = 40000;
    }
  }

  public function GetHarga(){
    return $this->Harga;
  }

  public function TotalHarga(){
    return $this->Harga * $this->JmlhBeli;
  }

  public function GetDiskon(){
    return $this->DiskonF();
  }
  
  public function DiskonF(){
    if($this->JmlhBeli >= 5 && $this->JmlhBeli <10){
      $this->DiskonV = $this->TotalHarga() * 5 / 100;
    }elseif($this->JmlhBeli >= 10){
      $this->DiskonV = $this->TotalHarga() *  10 / 100;
    }
  }

  
  public function Total(){
    return $this->TotalHarga() - $this->DiskonV;
  }
}

// class customer extends transaksi{
//     protected $Nama,
//               $Alamat;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tampil</title>
</head>

<body>
  <?php

  $Transaksi1 = new transaksi($_POST['merek'], ($_POST['jmlh']));

  ?>
</body>
  <p>---------------------------------------------------------------------------</p>
  <h1>Toko Cat Guna Bangun Jaya</h1>
  <p>---------------------------------------------------------------------------</p>
  <table>
    <tr>
      <td>
        Nama Customer
      </td>
      <td>
        :
      </td>
      <td>
        <?php echo $_POST["nama"]?>
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
        <?php echo $_POST["Alamat"]?>
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
        <?php echo $_POST["merek"]?>
      </td>
    </tr>
    <tr>
      <td>
        Warna
      </td>
      <td>
        :
      </td>
      <td>
      <?php echo $_POST["warna"]?>
      </td>
    </tr>
    <tr>
      <td>
        Harga
      </td>
      <td>
        :
      </td>
      <td>
      <?php echo "Rp. ". $Transaksi1->GetHarga()?>
      </td>
    </tr>
    <tr>
      <td>
        Jumlah Beli
      </td>
      <td>
        :
      </td>
      <td>
      <?php echo $_POST["jmlh"]?>
      </td>
      <tr>  <td>-------------------------------</td><td>-</td>
        <td>----------------------------(*)</td>
      </tr>
    </tr>
    <tr>
      <td>
        Total Harga
      </td>
      <td>
        :
      </td>
      <td>
      <?php echo "Rp. ". $Transaksi1->TotalHarga()?>
      </td>
    </tr>
    <tr>
      <td>
        Diskon
      </td>
      <td>
        :
      </td>
      <td>
      <?php echo "Rp. ". $Transaksi1->GetDiskon()?>
      </td>
      <tr>  <td>-------------------------------</td><td>-</td>
        <td>----------------------------(-)</td>
      </tr>
    </tr>
    <tr>
      <td>
        Total Bayar
      </td>
      <td>
        :
      </td>
      <td>
      <?php echo "Rp. ". $Transaksi1->Total()?>
      </td>
    </tr>
  </table>
  <p>---------------------------------------------------------------------------</p>
</html>