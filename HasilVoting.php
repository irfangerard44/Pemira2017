<?php
$koneksi     = mysqli_connect("localhost", "root", "", "pemira2017");
$bulan       = mysqli_query($koneksi, "SELECT bulan FROM penjualan WHERE tahun='2016' order by id asc");
$penghasilan = mysqli_query($koneksi, "SELECT harga_penjualan FROM penjualan WHERE tahun='2016' order by id asc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Diagram pemilihan</title>
</head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flash Registration Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'></head>
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<body>

       <script src="Chart.js/Chart.bundle.js"></script>
        <style type="text/css">
            .container {
                width: 30%;
                margin: 30px auto;
            }
        </style>
    </head>
    <div class="header">
			<h1>Pemira 2017</h1><br>
      <h2>Keluarga Mahasiswa</h2><br>
      <h2>Institut Teknologi Sumatera</h2>
    <body>
    
        <div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [<?php while ($b = mysqli_fetch_array($bulan)) { echo '"' . $b['bulan'] . '",';}?>],// data  base yang di konekinnya kesini untuk nama kandidat
                    datasets: [{
                            label: '# of Votes',
                            data: [<?php while ($p = mysqli_fetch_array($penghasilan)) { echo '"' . $p['harga_penjualan'] . '",';}?>], // data dari hasil votiing di masukkin kesini yang kuran gua ga bisa buat koneksi ke data base sama
												//narik datanya dalam data labels dan data
                            backgroundColor: [
                                'rgba(255, 159, 64, 1)', //buat setting warna
                                'rgba(153, 102, 255, 1)',
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                            ],
                            borderWidth: 2
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
        <p><?php while ($b = mysqli_fetch_array($bulan)) { echo '"' . $b['bulan'] . '",';}?></p>
        <p><?php while ($p = mysqli_fetch_array($penghasilan)) { echo '"' . $p['harga_penjualan'] . '",';}?></p>
</body>
</html>