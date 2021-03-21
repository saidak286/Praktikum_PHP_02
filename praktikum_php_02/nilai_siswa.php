<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php
    $proses = $_POST['simpan'];
    $nama_siswa = $_POST['namalengkap']; 
    $mata_kuliah = $_POST['matakuliah'];
    $nilai_uts = $_POST['nilaiuts'];
    $nilai_uas = $_POST['nilaiuas'];
    $nilai_tugas = $_POST['nilaitugas/praktikum'];
    $nim = $_POST['nim'];
    $total_nilai = $nilai_uts + $nilai_uas + $nilai_tugas;
        $alphabet = $total_nilai / 3;
        if ($alphabet >= 85){
            $grade = "A (Sangat Memuaskan)";
        }elseif ($alphabet >= 70)
        {   $grade = "B (Memuaskan)";
        }elseif ($alphabet >= 56)
        {   $grade = "C (Cukup)";
        }elseif ($alphabet >= 36)
        {   $grade = "D (Kurang)";
        }else{
            $grade = "E (Sangat Kurang)";
        }

        if ($alphabet > 55){
            $lulus = "Lulus";
        }else {
            $lulus = "Tidak Lulus";
        }

    $ns1 = ['id'=>1,'nama'=>'yudis','nim'=>'01101','matkul'=>'UI/UX','uts'=>80,'uas'=>84,'tugas'=>78,'total'=>242,'grade'=>'B','keterangan'=>'Cukup'];
    $ns2 = ['id'=>2,'nama'=>'yoga','nim'=>'01121','matkul'=>'Jarkom','uts'=>70,'uas'=>50,'tugas'=>68,'total'=>188,'grade'=>'C','keterangan'=>'Kurang'];
    $ns3 = ['id'=>3,'nama'=>'riko','nim'=>'01130','matkul'=>'Jarkom','uts'=>60,'uas'=>86,'tugas'=>80,'total'=>146,'grade'=>'B','keterangan'=>'Cukup'];
    $ns4 = ['id'=>4,'nama'=>'ihsan','nim'=>'01134','matkul'=>'PWL','uts'=>90,'uas'=>91,'tugas'=>82,'total'=>263,'grade'=>'A','keterangan'=>'Lulus'];
    $ns5 = ['id'=>5,'nama'=>$nama_siswa,'nim'=> $nim,'matkul'=> $mata_kuliah,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas,'total'=>$total_nilai,'grade'=>$grade,'keterangan'=>$lulus];
    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
    ?>
  <div class="container shadow bg-light p-5 mt-5">
  <div class="row">
        <div class="col-md-6">
            <table class="table" border="2" width="100%" >
                <thead>
                    <tr>
                       <th>
                           No
                       </th>
                       <th>
                           Grade
                       </th>
                        <th>
                           Range Nilai 
                       </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                           1
                        </th>
                        <th>
                            A 
                        </th>
                        <th>
                            85 - 100
                        </th>
                    </tr>
                    <tr>
                        <th>
                           2
                        </th>
                        <th>
                            B 
                        </th>
                        <th>
                            70 -84
                        </th>
                    </tr>
                    <tr>
                        <th>
                           3
                        </th>
                        <th>
                            C
                        </th>
                        <th>
                            56-69
                        </th>
                    </tr>
                    <tr>
                        <th>
                           4
                        </th>
                        <th>
                            D
                        </th>
                        <th>
                            36 - 55
                        </th>
                    </tr>
                    <tr>
                        <th>
                           5
                        </th>
                        <th>
                            E
                        </th>
                        <th>
                            Kurang dari 35
                        </th>
                    </tr>
                </tbody>    
            </table>
        </div>        
        <div class="col-md-6">
            <table class="table" border="2" width="100%">
                 <thead>
                    <tr>
                       <th>No
                       </th> 
                       <th>
                           Grade
                       </th>
                       <th>
                           Predikat 
                       </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                           1
                        </th>
                        <th>
                            A 
                        </th>
                        <th>
                            Sangat Memuaskan
                        </th>
                    </tr>
                    <tr>
                        <th>
                           2
                        </th>
                        <th>
                            B 
                        </th>
                        <th>
                            Memuaskan
                        </th>
                    </tr>
                    <tr>
                        <th>
                           3
                        </th>
                        <th>
                            C 
                        </th>
                        <th>
                            Cukup 
                        </th>
                    </tr>
                    <tr>
                        <th>
                           4
                        </th>
                        <th>
                            D 
                        </th>
                        <th>
                            Kurang 
                        </th>
                    </tr>
                    <tr>
                        <th>
                           5
                        </th>
                        <th>
                            E 
                        </th>
                        <th>
                            Sangat Kurang 
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
  </div>
  </div>
                
  <div class="container shadow bg-light p-5 mt-5">
    <h3 class="text-center mb-5">Daftar Nilai Siswa</h3>
    <form action="nilai_siswa.php" method="POST">
      <table border="1" width="100%" class="m-auto">
        <thead class="text-center">
          <tr>
            <th>No</th><th>Nama</th><th>NIM</th><th>Mata Kluliah</th><th>UTS</th>
            <th>UAS</th><th>Tugas/Praktikum</th><th>Nilai Akhir</th><th>Total Nilai</th><th>Grade</th><th>Keterangan</th>
          </tr>
        </thead>
        <tbody class="text-center">
        <?php
        $nomor = 1;
        foreach($ar_nilai as $ns) {
            echo '<tr style = "text-align : center;"><td>'.$nomor.'</td>';
            echo '<td>'.$ns['nama'].'</td>';
            echo '<td>'.$ns['nim'].'</td>';
            echo '<td>'.$ns['matkul'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<td>'.$ns['total'].'</td>';
            echo '<td>'.$ns['grade'].'</td>';
            echo '<td>'.$ns['keterangan'].'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
        </tbody>
      </table>
    </form>
  </div>
    <!--Footer-->
    <hr>
    <div class="container-fluid">
     <span class="form-horizontal p-4" style="background-color:#f1f2f6;">Develop By Mahasiswa STT-NF @2020</span>
    </div>      
</body>
</html>