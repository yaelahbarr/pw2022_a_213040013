<?php
    include('functions.php');
    require_once("dompdf/autoload.inc.php");
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    $query = query("SELECT * FROM sertifikat, jenis_vaksin, tenaga_medis, alat_medis, pasien WHERE sertifikat.no_batch=jenis_vaksin.no_batch AND sertifikat.id_tenmed=tenaga_medis.id_tenmed AND sertifikat.no_alat=alat_medis.no_alat AND sertifikat.id_pasien=pasien.id_pasien");
    $html = '<center><h3>Data Sertifikat Vaksin</h3></center><hr/><br/>';
    // var_dump($query);
    $html .= '<table border="1" width="100%">
    <tr>
        <th>No Tiket</th>
        <th>Jenis Vaksin</th>
        <th>Tenaga Medis</th>
        <th>Alat</th>
        <th>Pasien</th>
        <th>Lokasi Vaksin</th>
        <th>Keterangan</th>
        <th>Tanggal Vaksin</th>
    </tr>';
    foreach ($query as $row) :
    $html .= "<tr>
        <td>".$row['no_tiket']."</td>
        <td>".$row['nama_vaksin']."</td>
        <td>".$row['nama_tenmed']."</td>
        <td>".$row['nama_alat']."</td>
        <td>".$row['nama_pasien']."</td>
        <td>".$row['lok_vaksin']."</td>
        <td>".$row['ket_vaksin']."</td>
        <td>".$row['tgl_vaksin']."</td>
    </tr>";
    $no++;
    endforeach;
    $html .= "</html>";
    $tes = $dompdf->loadHtml($html);
    // var_dump($tes);
    // Setting ukuran dan orientasi kertas
    $dompdf->setPaper('A4', 'potrait');
    // Rendering dari HTML Ke PDF
    $dompdf->render();
    // Melakukan output file Pdf
    $dompdf->stream('data_vaksin.pdf');
?>