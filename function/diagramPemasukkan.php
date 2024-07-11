<!-- Chart pemasukkan -->
<script type="text/javascript">
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Qris", "Cash", "Piutang", "Laba Penjualan"],
            datasets: [{
                label: 'Data Pemasukkan',
                data: [
                <?php 
                $qris = mysqli_query($koneksi,"SELECT * FROM pemasukkan WHERE username = '$username' AND (sumber='Qris' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir')");
                echo mysqli_num_rows($qris);
                ?>, 
                <?php 
                $cash = mysqli_query($koneksi,"SELECT * FROM pemasukkan WHERE username = '$username' AND (sumber='Cash' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir')");
                echo mysqli_num_rows($cash);
                ?>, 
                <?php 
                $piutang = mysqli_query($koneksi,"SELECT * FROM pemasukkan WHERE username = '$username' AND (sumber='Piutang' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir')");
                echo mysqli_num_rows($piutang);
                ?>, 
                <?php 
                $laba = mysqli_query($koneksi,"SELECT * FROM pemasukkan WHERE username = '$username' AND (sumber='Laba penjualan' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir')");
                echo mysqli_num_rows($laba);
                ?>
                ],
                backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>

<!-- Chart pemasukkan -->
<script type="text/javascript">
    var ctx = document.getElementById("myChart2").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Qris", "Cash", "Piutang", "Laba Penjualan"],
            datasets: [{
                label: 'Data Pemasukkan',
                data: [
                <?php 
                    $qris = mysqli_query($koneksi,"SELECT * FROM pemasukkan WHERE username = '$username' AND sumber='Qris' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $qrisSum = mysqli_num_rows($qris);
                    while ($dataqris = mysqli_fetch_assoc($qris)) {
                        $jumlahqris[] = $dataqris['jumlah'];
                        $jumlahConvertqris = str_replace('.', '', $jumlahqris);
                        $totalqris = array_sum($jumlahConvertqris); 
                    }

                    if ($qrisSum != null) {
                        echo $totalqris;
                    } elseif ($qrisSum == null) {
                        echo 0;
                    }
                ?>, 

                <?php 
                    $cash = mysqli_query($koneksi,"SELECT * FROM pemasukkan WHERE username = '$username' AND sumber='Cash' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $cashSum = mysqli_num_rows($cash);
                    while ($datacash = mysqli_fetch_assoc($cash)) {
                        $jumlahcash[] = $datacash['jumlah'];
                        $jumlahConvertcash = str_replace('.', '', $jumlahcash);
                        $totalcash = array_sum($jumlahConvertcash);
                    }

                    if ($cashSum != null) {
                        echo $totalcash;
                    } elseif ($cashSum == null) {
                        echo 0;
                    }
                ?>, 

                <?php 
                    $piutang = mysqli_query($koneksi,"SELECT * FROM pemasukkan WHERE username = '$username' AND sumber='Piutang' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $piutangSum = mysqli_num_rows($piutang);
                    while ($dataPiutang = mysqli_fetch_assoc($piutang)) {
                        $jumlahPiutang[] = $dataPiutang['jumlah'];
                        $jumlahConvertPiutang = str_replace('.', '', $jumlahPiutang);
                        $totalPiutang = array_sum($jumlahConvertPiutang);
                    }

                    if ($piutangSum != null) {
                        echo $totalPiutang;
                    } elseif ($piutangSum == null) {
                        echo 0;
                    }
                ?>, 

                <?php 
                    $laba = mysqli_query($koneksi,"SELECT * FROM pemasukkan WHERE username = '$username' AND sumber='Laba penjualan' AND tanggal BETWEEN '$tanggalAwal' AND '$tanggalAkhir'");
                    $labaSum = mysqli_num_rows($laba);
                    while ($dataLaba = mysqli_fetch_assoc($laba)) {
                        $jumlahLaba[] = $dataLaba['jumlah'];
                        $jumlahConvertLaba = str_replace('.', '', $jumlahLaba);
                        $totalLaba = array_sum($jumlahConvertLaba);
                    }

                    if ($labaSum != null) {
                        echo $totalLaba;
                    } elseif ($labaSum == null) {
                        echo 0;
                    }
                ?>
                
                ],
                backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(153, 102, 255)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        }
    });
</script>