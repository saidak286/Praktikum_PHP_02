<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP_01</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h4 class="form-horizontal p-4" style="background-color:#f1f2f6;">Sistem Penilaian</h4>
    </div>
    <hr>
    
    <div class="container">    
    <form class="form-horizontal p-5 shadow" style="background-color:#f1f2f6;" method="POST" action="nilai_siswa.php">
    <fieldset>

    <div class="text-left">
        <h3 class="mb-5 text-mg">Form Nilai Siswa</h3>
    </div>

    <!-- Text input-->
    <div class="form-group row">
        <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>  
        <div class="col-md-6">
        <input id="textinput" name="namalengkap" type="text" class="form-control input-md" required="">
    
        </div>
    </div>
    <br>

    <!-- Text input-->
    <div class="form-group row">
        <label class="col-md-4 control-label" for="textinput">NIM</label>  
        <div class="col-md-4">
        <input id="textinput" name="nim" type="number" class="form-control input-md" required="">
    
        </div>
    </div>
    <br>

    <!-- Select Basic -->
    <div class="form-group row">
        <label class="col-md-4 control-label" for="selectbasic">Mata Kuliah</label>
        <div class="col-md-6">
        <select id="selectbasic" name="matakuliah" class="form-control">
            <option value="UI/UX">User Interface & User Experience</option>
            <option value="PWL">Pemrograman Web Lanjutan</option>
            <option value="JK">Jaringan Komputer</option>
        </select>
        </div>
    </div>
    <br>

    <!-- Text input-->
    <div class="form-group row">
        <label class="col-md-4 control-label" for="textinput">Nilai UTS</label>  
        <div class="col-md-4">
        <input id="textinput" name="nilaiuts" type="number" class="form-control input-md" required="">
    
        </div>
    </div>
    <br>

    <!-- Text input-->
    <div class="form-group row">
        <label class="col-md-4 control-label" for="textinput">Nilai UAS</label>  
        <div class="col-md-4">
        <input id="textinput" name="nilaiuas" type="number" class="form-control input-md" required="">
    
        </div>
    </div>
    <br>

    <!-- Text input-->
    <div class="form-group row">
        <label class="col-md-4 control-label" for="textinput">Nilai Tugas/Praktikum</label>  
        <div class="col-md-4">
        <input id="textinput" name="nilaitugas/praktikum" type="number" class="form-control input-md" required="">
    
        </div>
    </div>
    <br>

    <!-- Button -->
    <div class="form-group row">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
            <button id="singlebutton" name="simpan" class="btn btn-primary" type="submit" value="Disimpan">Simpan</button>
        </div>
    </div>
    <br>

    </fieldset>
    </form>
    </div>
    <!--Footer-->
    <hr>
    <div class="container-fluid">
     <span class="form-horizontal p-4" style="background-color:#f1f2f6;">Develop By Mahasiswa STT-NF @2020</span>
    </div> 
</body>
</html>