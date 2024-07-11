<!-- Chart pemasukkan -->
<script type="text/javascript">
    var ctx = document.getElementById("myChart3").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Bahan Baku", "Kemasan", "Gaji Karyawan", "Utilitas", "Sewa Tempat", "Transportasi", "Maintenance", "Administrasi"],
            datasets: [{
                label: 'Data Pengeluaran',
                data: [
                    <?php
                    $bahan = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Bahan Baku' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    echo mysqli_num_rows($bahan);
                    ?>,
                    <?php
                    $kemasan = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Kemasan' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    echo mysqli_num_rows($kemasan);
                    ?>,
                    <?php
                    $gaji = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Gaji Karyawan' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    echo mysqli_num_rows($gaji);
                    ?>,
                    <?php
                    $utilitas = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Utilitas' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    echo mysqli_num_rows($utilitas);
                    ?>,
                    <?php
                    $sewa = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Sewa Tempat' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    echo mysqli_num_rows($sewa);
                    ?>,
                    <?php
                    $transportasi = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Transportasi' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    echo mysqli_num_rows($transportasi);
                    ?>,
                    <?php
                    $maintenance = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Maintenance' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    echo mysqli_num_rows($maintenance);
                    ?>,
                    <?php
                    $administrasi = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Administrasi' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    echo mysqli_num_rows($administrasi);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132)',
                    'rgba(54, 162, 235)',
                    'rgba(255, 206, 86)',
                    'rgba(75, 192, 192)',
                    'rgba(153, 102, 255)',
                    '#2dc750'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    '#2dc750'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<!-- Chart pemasukkan -->
<script type="text/javascript">
    var ctx = document.getElementById("myChart4").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Bahan Baku", "Kemasan", "Gaji Karyawan", "Utilitas", "Sewa Tempat", "Transportasi", "Maintenance", "Administrasi"],
            datasets: [{
                label: 'Data Pengeluaran',
                data: [
                    <?php
                    $bahan = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Bahan Baku' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $bahanSum = mysqli_num_rows($bahan);
                    while ($dataMakan = mysqli_fetch_assoc($bahan)) {
                        $jumlahMakan[] = $dataMakan['jumlah'];
                        $jumlahConvertMakan = str_replace('.', '', $jumlahMakan);
                        $totalMakan = array_sum($jumlahConvertMakan);
                    }

                    if ($bahanSum != null) {
                        echo $totalMakan;
                    } elseif ($bahanSum == null) {
                        echo 0;
                    }
                    ?>,

                    <?php
                    $kemasan = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Kemasan' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $kemasanSum = mysqli_num_rows($kemasan);
                    while ($datakemasan = mysqli_fetch_assoc($kemasan)) {
                        $jumlahkemasan[] = $datakemasan['jumlah'];
                        $jumlahConvertkemasan = str_replace('.', '', $jumlahkemasan);
                        $totalkemasan = array_sum($jumlahConvertkemasan);
                    }

                    if ($kemasanSum != null) {
                        echo $totalkemasan;
                    } elseif ($kemasanSum == null) {
                        echo 0;
                    }
                    ?>,

                    <?php
                    $gaji = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Gaji Karyawan' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $gajiSum = mysqli_num_rows($gaji);
                    while ($datagaji = mysqli_fetch_assoc($gaji)) {
                        $jumlahgaji[] = $datagaji['jumlah'];
                        $jumlahConvertgaji = str_replace('.', '', $jumlahgaji);
                        $totalgaji = array_sum($jumlahConvertgaji);
                    }

                    if ($gajiSum != null) {
                        echo $totalgaji;
                    } elseif ($gajiSum == null) {
                        echo 0;
                    }
                    ?>,

                    <?php
                    $utilitas = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Utilitas' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $utilitasSum = mysqli_num_rows($utilitas);
                    while ($datautilitas = mysqli_fetch_assoc($utilitas)) {
                        $jumlahutilitas[] = $datautilitas['jumlah'];
                        $jumlahConvertutilitas = str_replace('.', '', $jumlahutilitas);
                        $totalutilitas = array_sum($jumlahConvertutilitas);
                    }

                    if ($utilitasSum != null) {
                        echo $totalutilitas;
                    } elseif ($utilitasSum == null) {
                        echo 0;
                    }
                    ?>,

                    <?php
                    $sewa = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Sewa Tempat' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $sewaSum = mysqli_num_rows($sewa);
                    while ($datasewa = mysqli_fetch_assoc($sewa)) {
                        $jumlahsewa[] = $datasewa['jumlah'];
                        $jumlahConvertsewa = str_replace('.', '', $jumlahsewa);
                        $totalsewa = array_sum($jumlahConvertsewa);
                    }

                    if ($sewaSum != null) {
                        echo $totalsewa;
                    } elseif ($sewaSum == null) {
                        echo 0;
                    }
                    ?>,

                    <?php
                    $transportasi = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='transportasi' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $transportasiSum = mysqli_num_rows($transportasi);
                    while ($datatransportasi = mysqli_fetch_assoc($transportasi)) {
                        $jumlahtransportasi[] = $datatransportasi['jumlah'];
                        $jumlahConverttransportasi = str_replace('.', '', $jumlahtransportasi);
                        $totaltransportasi = array_sum($jumlahConverttransportasi);
                    }

                    if ($transportasiSum != null) {
                        echo $totaltransportasi;
                    } elseif ($transportasiSum == null) {
                        echo 0;
                    }
                    ?>,

                    <?php
                    $maintenance = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Maintenance' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $maintenanceSum = mysqli_num_rows($maintenance);
                    while ($datamaintenance = mysqli_fetch_assoc($maintenance)) {
                        $jumlahmaintenance[] = $datamaintenance['jumlah'];
                        $jumlahConvertmaintenance = str_replace('.', '', $jumlahmaintenance);
                        $totalmaintenance = array_sum($jumlahConvertmaintenance);
                    }

                    if ($maintenanceSum != null) {
                        echo $totalmaintenance;
                    } elseif ($maintenanceSum == null) {
                        echo 0;
                    }
                    ?>,

                    <?php
                    $administrasi = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE username = '$username' AND keperluan='Administrasi' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $administrasiSum = mysqli_num_rows($administrasi);
                    while ($dataadministrasi = mysqli_fetch_assoc($administrasi)) {
                        $jumlahadministrasi[] = $dataadministrasi['jumlah'];
                        $jumlahConvertadministrasi = str_replace('.', '', $jumlahadministrasi);
                        $totaladministrasi = array_sum($jumlahConvertadministrasi);
                    }

                    if ($administrasiSum != null) {
                        echo $totaladministrasi;
                    } elseif ($administrasiSum == null) {
                        echo 0;
                    }
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132)',
                    'rgba(54, 162, 235)',
                    'rgba(255, 206, 86)',
                    'rgba(75, 192, 192)',
                    'rgba(153, 102, 255)',
                    'rgba(209, 149, 113)',
                    'rgba(147, 0, 0)',
                    '#2dc750'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(209, 149, 113, 1)',
                    'rgba(147, 0, 0, 1)',
                    '#2dc750'
                ],
                borderWidth: 1
            }]
        }
    });
</script>