<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <form action="" method="post">
        <table align=center>
            <th>no</th>
            <th></th>
            <th>Destinasi</th>
            <tr>
                <td>1</td>
                <td>.</td>
                <td>Bukit bintang</td>
            </tr>
            <tr>
                <td>2</td>
                <td>.</td>
                <td>pantai sadrana</td>
            </tr>
            <tr>
                <td>3</td>
                <td>.</td>
                <td>candi borobudur</td>
            </tr>
            <tr>
                <td>4</td>
                <td>.</td>
                <td>candi prambanan</td>
            </tr>
            <tr>
                <td>5</td>
                <td>.</td>
                <td>keraton yogyakarta</td>
            </tr>
            <tr>
                <td>6</td>
                <td>.</td>
                <td>marioboro</td>
            </tr>
            <tr>
                <td>7</td>
                <td>.</td>
                <td>pendopo lawas => cafe</td>
            </tr>
            <tr>
                <td>8</td>
                <td>.</td>
                <td>goa pindul</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><select name="destinasi" id="">
                    <option value="0">--pilih destinasi--</option>
                    <option value="bukit bintang">bukit bintang</option>
                    <option value="pantai sadrana">pantai sadrana</option>
                    <option value="candi borobudur">candi borobudur</option>
                    <option value="candi prambanan">candi prambanan</option>
                    <option value="keraton yogyakarta">keraton yogyakarta</option>
                    <option value="marioboro">marioboro</option>
                    <option value="pendopo lawas">pendopo lawas</option>
                    <option value="goa pindul">goa pindul</option>
                </select></td>
                <td><input type="submit" value="kirim" name="proses"></td>
            </tr>
        </table>
        <?php
            if(isset($_POST['proses'])){
                $destinasi=$_POST['destinasi'];
                if($destinasi == "bukit bintang"){
                    echo "Bukit bintang <br>";
                    echo "Harga Pertiket:Rp10.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>total:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="kirim" value="proses"></td></tr><br>';
                    echo '</table>';             
                }elseif($destinasi == "pantai sadrana"){
                    echo "<h2>pantai sadrana</h2>";
                    echo "Harga Pertiket:Rp15.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="submit" value="proses"></td></tr><br>';
                    echo '</table>';
                    
                }elseif($destinasi == "candi borobudur"){
                    echo "<h2>candi borobudur</h2>";
                    echo "Harga Pertiket:Rp50.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="ok" value="proses"></td></tr><br>';
                    echo '</table>';
                    
                }
                elseif($destinasi == "candi prambanan"){
                    echo "<h2>candi prambanan</h2>";
                    echo "Harga Pertiket:Rp50.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="ok" value="proses"></td></tr><br>';
                    echo '</table>';
                } 
                elseif($destinasi == "keraton yogyakarta"){
                    echo "<h2>keraton yogyakarta</h2>";
                    echo "Harga Pertiket:Rp5.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="ya" value="proses"></td></tr><br>';
                    echo '</table>';
                   
                }   
                elseif($destinasi == "marioboro"){
                    echo "<h2>marioboro</h2>";
                    echo "Harga Pertiket:Rp5.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="ya" value="proses"></td></tr><br>';
                    echo '</table>';
                }   
                elseif($destinasi == "pendopo lawas"){
                    echo "<h2>pendopo lawas</h2>";
                    echo "Kopi:Rp3.000";
                    echo "Mie:Rp5.000";
                    echo "Ayam geprek:Rp10.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="ya" value="proses"></td></tr><br>';
                    echo '</table>';
                }   
                elseif($destinasi == "goa pindul"){
                    echo "<h2>goa pindul</h2>";
                    echo "Harga Pertiket:Rp100.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="goa" value="proses"></td></tr><br>';
                    echo '</table>';
                    
                }
            }
            if(isset($_POST['kirim'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*10000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "total bayar: $totalakhir<br>";
                echo "diskon: $diskon<br>";
                echo "bayar : $bayar<br>";
                echo "kembalian :$kembalian<br>";
            }
            if(isset($_POST['submit'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*15000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "total bayar: $totalakhir<br>";
                echo "diskon: $diskon<br>";
                echo "bayar : $bayar<br>";
                echo "kembalian :$kembalian<br>";
            }
            if(isset($_POST['ok'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*50000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "total bayar: $totalakhir<br>";
                echo "diskon: $diskon<br>";
                echo "bayar : $bayar<br>";
                echo "kembalian :$kembalian<br>";
            }
            if(isset($_POST['ya'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*5000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "total bayar: $totalakhir<br>";
                echo "diskon: $diskon<br>";
                echo "bayar : $bayar<br>";
                echo "kembalian :$kembalian<br>";
            }
            if(isset($_POST['goa'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*100000;
                if ($jumlah >= 6) {
                    $diskon=$total*0.15;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah >=4) {
                    $diskon=$total*0.1;
                    $totalakhir=$total-$diskon;
                }elseif ($jumlah<4) {
                    $diskon=$total*0.05;
                    $totalakhir=$total-$diskon;
                }
                else {
                    $diskon=0;
                    $totalakhir=$total;
                }
                $kembalian=$bayar-$totalakhir;
                echo "<br>";
                echo "total bayar: $totalakhir<br>";
                echo "diskon: $diskon<br>";
                echo "bayar : $bayar<br>";
                echo "kembalian :$kembalian<br>";
            }
        ?>
    </form>    
</body>
</html>