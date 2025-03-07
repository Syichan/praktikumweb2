<?php
    $ns1 = [ "id" => 1, "nim" => "0110124104" , "uts" => 100, "uas" => 100, "tugas" => 100];
    $ns2 = [ "id" => 2, "nim" => "0110124105" , "uts" => 85, "uas" => 90, "tugas" => 80];
    $ns3 = [ "id" => 3, "nim" => "0110124106" , "uts" => 89, "uas" => 89, "tugas" => 90];
    $ns4 = [ "id" => 4, "nim" => "0110124107" , "uts" => 86, "uas" => 88, "tugas" => 89];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" width="1000">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
                <th>NILAI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach($ar_nilai as $ns){
                    echo '<tr><td>'.$nomor.'</td>';
                    echo '<td>'.$ns['nim'].'</td>';
                    echo '<td>'.$ns['uts'].'</td>';
                    echo '<td>'.$ns['uas'].'</td>';
                    echo '<td>'.$ns['tugas'].'</td>';
                    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                    echo '</tr>';
                    $nomor++;
                }
            ?>
    </tbody>
    </table>
</body>
</html>