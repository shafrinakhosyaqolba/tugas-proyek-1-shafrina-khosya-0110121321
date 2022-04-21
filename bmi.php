<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Pasien</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Fixed Layout</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal p-5 shadow h-100" style="background-color:#f1f2f6;" method="GET" action="BMI_Pasien.php">
                        <div class="text-center">
                        <h3 class="mb-5 text-primary text-mg">FORM PENGISIAN DATA INDEXS MASSA TUBUH (BMI)</h3>
                        </div>
                        <!------------>
                        <div class="form-group row">
                            <label for="tgl" class="col-sm-4 col-form-label"><b>Tanggal Periksa</b></label>
                            <div class="col-sm-8">
                            <input type="date" class="form-control" name="tgl__" required>
                            </div>
                        </div>
                        <br>
                        <!------------>
                        <div class="form-group row">
                            <label for="kode" class="col-sm-4 col-form-label"><b>Kode Pasien</b></label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="kode__" required>
                            </div>
                        </div>
                        <br>
                        <!------------>
                        <div class="form-group row">
                            <label for="namalengkap" class="col-sm-4 col-form-label"><b>Nama Lengkap</b></label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama__lengkap" required>
                            </div>
                        </div>
                        <br>

                        <!------------>
                        <div class="form-group row">
                            <label for="namalengkap" class="col-sm-4 col-form-label"><b>Berat</b></label>
                            <div class="col-sm-6">
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control" name="berat__" required>
                                <div class="input-group-prepend">
                                <div class="input-group-text">Kg</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <br>

                        <!------------>
                        <div class="form-group row">
                            <label for="namalengkap" class="col-sm-4 col-form-label"><b>Tinggi Badan</b></label>
                            <div class="col-sm-6">
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control" name="tinggi__" required>
                                <div class="input-group-prepend">
                                <div class="input-group-text">Cm</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <br>

                        <!------------>
                        <div class="form-group row">
                            <label for="namalengkap" class="col-sm-4 col-form-label"><b>Umur</b></label>
                            <div class="col-sm-6">
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control" name="umur__" required>
                                <div class="input-group-prepend">
                                <div class="input-group-text">Tahun</div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <br>

                        <!------------>
                        <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0"><b>Jenis Kelamin</b></legend>
                        <div class="col-sm-8">

                            <div class="form-check mr-auto">
                            <input class="form-check-input" type="radio" id="laki" name="jenis__kelamin" value="L" required>
                            <label class="form-check-label mr-5" for="laki">
                                L
                            </label>
                            <input class="form-check-input" type="radio" id="perempuan" name="jenis__kelamin" value="P" required>
                            <label class="form-check-label" for="perempuan">
                                P
                            </label>
                            </div>
                        </div>  <!---col-->
                        </div> <!---row-->
                        <br>
                        <!------------>
                        <div class="text-center">
                            <input class="btn btn-primary" type="submit" value="Simpan" name="proses"/>
                        </div>
                    </form>
                </div> <!--col--->
                <div class="col-6">

                <?php
                class bmiPasien {
                    public $tgl,
                        $kode,
                        $nama,
                        $berat,
                        $tinggi,
                        $umur,
                        $jenisKelamin;
                        
                    public function hasilBMI() {
                        return "<b>
                        Tanggal Periksa : $this->tgl <br><br>
                        Kode Pasien : $this->kode <br><br>
                        Nama : $this->nama <br><br>
                        Berat Badan : $this->berat <br><br> 
                        Tinggi Badan : $this->tinggi <br><br>
                        Umur : $this->umur <br><br>
                        Jenis Kelamin : $this->jenisKelamin
                        </b>";  
                    }
                }
                if (isset($_GET["nama__lengkap"])) {
                    $bmi = new bmiPasien;
                    $bmi->tgl = $_GET['tgl__'];
                    $bmi->kode = $_GET['kode__'];
                    $bmi->nama = $_GET["nama__lengkap"];
                    $bmi->berat = $_GET["berat__"];
                    $bmi->tinggi = $_GET["tinggi__"];
                    $bmi->umur = $_GET["umur__"];
                    $bmi->jenisKelamin = $_GET["jenis__kelamin"];
                    echo $bmi->hasilBMI();
                }
                ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
            </div>
        </div>
    </section>
</div>

<?php
    include_once "footer.php";
?>

