<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_pembayaran.php';
// Membuat Object dari Class siswa
$pembayaran = new Controller_pembayaran();
$GetPembayaran = $pembayaran->GetData_Where($_GET['id_pembayaran']);
?>



<?php
    foreach($GetPembayaran as $Get) {
?>

<form action="../Config/Routes.php?function=put_pembayaran" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_pembayaran" value="<?php echo $Get['id_pembayaran']; ?>">
    <tr>
        <td>ID Petugas</td>
        <td>
            <select name="id_petugas">

                <!-- Logic combo Get database -->
                <option value="<?php echo $Get['id_petugas']; ?>">
                    <?php
                        if($Get['id_petugas']=="1"){
                            echo "Badru";
                        } elseif ($Get['id_petugas']=="2") {
                            echo "Kamal";
                        } elseif ($Get['id_petugas']=="3") {
                            echo "700000";
                        } else {
                            echo "150000";
                        }
                    ?>
                </option>
            <!-- Logic combo Get database -->

            <option value="1">Badru</option>
            <option value="2">Kamal</option>
            
            </select>
        </td>
    </tr>
    
    <tr>
        <td>Nisn</td>
        <td>
            <select name="nisn">

                <!-- Logic combo Get database -->
                <option value="<?php echo $Get['nisn']; ?>">
                    <?php
                        if($Get['nisn']=="33801279"){
                            echo "33801279";
                        } elseif ($Get['nisn']=="338012791") {
                            echo "338012791";
                        } elseif ($Get['nisn']=="338012792") {
                            echo "338012792";
                        } else {
                            echo "150000";
                        }
                    ?>
                </option>
                <!-- Logic combo Get database -->

                
                <option value="338012791">338012791</option>
                <option value="338012792">338012792</option>
                
            </select>
        </td>
    </tr>
    
    <tr>
        <td>Tanggal Bayar</td>
        <td><input type="text" name="tgl_bayar" value="<?php echo $Get['tgl_bayar']; ?>"></td>
    </tr>

    <tr>
        <td>Bulan Bayar</td>
        <td><input type="text" name="bulan_dibayar" value="<?php echo $Get['bulan_dibayar']; ?>"></td>
    </tr>

    <tr>
        <td>Tahun Bayar</td>
        <td><input type="text" name="tahun_bayar" value="<?php echo $Get['tahun_bayar']; ?>"></td>
    </tr>

    <tr>
        <td>ID Spp</td>
        <td>
            <select name="id_spp">

                <!-- Logic combo Get database -->
                <option value="<?php echo $Get['id_spp']; ?>">
                <?php
                    if($Get['id_spp']=="1"){
                        echo "300000";
                    } elseif ($Get['id_spp']=="2") {
                        echo "350000";
                    } elseif ($Get['id_spp']=="3") {
                        echo "700000";
                    } else {
                        echo "150000";
                    }
                ?>
                </option>
                <!-- Logic combo Get database -->
            
                <option value="1">300000</option>
                <option value="2">350000</option>
                <option value="3">700000</option>
                <option value="4">150000</option>
            </select>
        </td>
    </tr>

    <tr>
        <td>Jumlah Bayar</td>
        <td><input type="text" name="jumlah_bayar" value="<?php echo $Get['jumlah_bayar']; ?>"></td>
    </tr>

    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Update"></td>
    </tr>
</table
</form>

<?php
    }
?>