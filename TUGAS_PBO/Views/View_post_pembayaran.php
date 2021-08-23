<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
  include '../Controllers/Controller_pembayaran.php';

  $pembayaran = new Controller_pembayaran();
  $GetPembayaran = $pembayaran->GetData_Petugas();
?>
<form action="../Config/Routes.php?function=create_pembayaran" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    
        <input type="hidden" name="id_pembayaran">
    

    <tr>
        <td>ID Petugas</td>
        <td>
        <select name="id_petugas">
            <option value="">Pilih Petugas</option>
                <option value="1">Badru</option>
                <option value="2">Kamal</option>
            </select>
        </td>
    </tr>
    
    <tr>
        <td>Nisn</td>
        <td>
            <select name="nisn">
                <option value="">Pilih Nisn</option>
                <option value="338012794">33801279</option>
                <option value="338012791">338012791</option>
                <option value="338012792">338012792</option>
                
            </select>
        </td>
    </tr>
    
    <tr>
        <td>Tanggal Bayar</td>
        <td><input type="text" name="tgl_bayar"></td>
    </tr>

    <tr>
        <td>Bulan Bayar</td>
        <td><input type="text" name="bulan_dibayar"></td>
    </tr>

    <tr>
        <td>Tahun Bayar</td>
        <td><input type="text" name="tahun_dibayar"></td>
    </tr>

    <tr>
        <td>ID Spp</td>
        <td>
            <select name="id_spp">
                <option value="">Pilih Nominal SPP</option>
                <option value="1">300000</option>
                <option value="2">350000</option>
                <option value="3">700000</option>
                <option value="4">150000</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>Jumlah Bayar</td>
        <td><input type="text" name="jumlah_bayar"></td>
    </tr>
    
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Update"></td>
    </tr>
</table
</form>
