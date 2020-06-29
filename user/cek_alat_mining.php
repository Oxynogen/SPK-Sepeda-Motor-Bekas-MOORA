<?php
include_once ('koneksi.php');
$motor = $_GET['query'];
$sql = "SELECT * from data_motor WHERE kondisi LIKE '%".$motor."%' OR harga LIKE '%".$motor."%' OR tahun LIKE '%".$motor."%' OR jarak LIKE '%".$motor."%' OR mesin LIKE '%".$motor."%' ORDER BY id_motor ASC";
$query = $konek->query($sql);
$result = $query->fetch_all(MYSQLI_ASSOC);

foreach($result as $data) {
    $response['suggestions'][] = [
        'value'         => $data['motor'],
        'id_alternatif' => $data['id_motor'],
        'motor'         => $data['motor'],
        'harga'         => $data['harga'],
        'kondisi'       => $data['kondisi'],
        'tahun'         => $data['tahun'],
        'jarak'         => $data['jarak'],
        'mesin'         => $data['mesin'],
    ];
}

echo json_encode($response);
