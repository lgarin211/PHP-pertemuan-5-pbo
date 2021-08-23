<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
  include '../Controllers/Controller_petugas.php';
?>
<form action="../Config/Routes.php?function=create_petugas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <input type="hidden" name="id_petugas">
    </tr>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="text" name="password"></td>
    </tr>
    <tr>
        <td>Nama Petugas</td>
        <td><input type="text" name="nama_petugas"></td>
    </tr>
    <tr>
        <td>Pilih Level</td>
        <td>
            <select name="level">
                <option value="admin">Administrator</option>
                <option value="Petugas">Petugas</option>
            </select>
        </td>

    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>
