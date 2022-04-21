<?php
    include_once "header.php";
    include_once "sidebar.php";
    include_once "class_pasien.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data BMI Pasien</h1>
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
                    <div class="container">
                        <h2 class="text-center mb-5">Data BMI Pasien</h2>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Tanggal Periksa</th>
                                    <th scope="col">Kode Pasien</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Umur</th>
                                    <th scope="col">Berat</th>
                                    <th scope="col">Tinggi</th>
                                    <th scope="col">BMI</th>
                                    <th scope="col">Hasil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $nomor = 1;
                                    foreach($ar_pasien as $pasien) {
                                        echo '<tr><td>'.$nomor.'</td>';
                                        echo '<td>'.$pasien['tgl'].'</td>';
                                        echo '<td>'.$pasien['kode'].'</td>';
                                        echo '<td>'.$pasien['nama'].'</td>';
                                        echo '<td>'.$pasien['kelamin'].'</td>';
                                        echo '<td>'.$pasien['umur'].'</td>';
                                        echo '<td>'.$pasien['berat'].'</td>';
                                        echo '<td>'.$pasien['tinggi'].'</td>';
                                        $BMI = $pasien["berat"] / (($pasien["tinggi"]/100)**2);
                                        echo '<td>'.number_format($BMI,1).'</td>';
                                        $status = new bmiPasien();
                                        echo $status->statusBMI($BMI);
                                        echo '</tr>';
                                        $nomor++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
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