<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
  include '../Controllers/Controller_kelas.php';
?>
<form action="../Config/Routes.php?function=create_kelas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <input type="hidden" name="id_kelas">
    </tr>
    <tr>
        <td>Nama Kelas</td>
        <td><input type="text" name="nama_kelas"></td>
    </tr>
    <tr>
        <td>Kompetensi Keahlian</td>
        <td><input type="text" name="kompetensi_keahlian"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>
