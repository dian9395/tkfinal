<html>
<head>
    <title>Halaman Petugas - Daftar Penugasan</title>
    <title>Halaman Daftar Laporan</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/grid.css')?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dropdown.css')?>" type="text/css" media="screen"> 
	<link rel="stylesheet" href="<?php echo base_url('assets/DataTables-1.10.18/css/jquery.dataTables.css ')?>" type="text/css" media="screen"> 
    <link type="text/css" href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.css')?>" rel="stylesheet"/>   	
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.1.min.js')?>"></script>  
	<script type="text/javascript" src="<?php echo base_url('assets/DataTables-1.10.18/js/jquery.dataTables.min.js')?>" ></script>  
	<script type="text/javascript" src="<?php echo base_url('assets/DataTables-1.10.18/js/dataTables.bootstrap.js')?>" ></script>
</head>
       

<body>
	<header class="header">
	<div class="menu-kelompok1">
		<ul>
			<li><a href="<?php echo base_url()."dbs/daftar_penugasan_petugas";?>">Daftar Penugasan</a></li>
			<li><a href="#">Daftar Stasiun</a></li>
			<li><a href="#">Daftar Sepeda</a></li>
			<li><a href="#">Daftar Acara</a></li>
			<li><a href="<?php echo base_url()."dbs/daftar_laporan_petugas";?>">Daftar Laporan</a></li>
			<li><a href="#">Daftar Peminjaman</a></li>
			<li><a href="#">Daftar Voucher</a></li>
			<li><a href="#">Logout</a></li>			
		</ul>
	</div>
</header>
    
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2">Halaman Petugas - Daftar Penugasan</h3>
													<?php echo "<h2>".$this->session->flashdata('pesan')."</h2>"?>
													<table id="tabel_penugasan" class="display" cellspacing="0" width="100%">
													<thead><th>
														<tr style="background:grey;">
															<th>Petugas</th>
															<th>Tanggal Mulai</th>
															<th>Tanggal Akhir</th>
															<th>Stasiun</th>
														</tr>
													</thead>
														<tbody>
														<?php
															foreach ($data as $col){?>
														<tr>
															<td><?php echo $col['ktp'];?></td>
															<td><?php echo $col['start_datetime'];?></td>
															<td><?php echo $col['end_datetime'];?></td>
															<td><?php echo $col['id_stasiun'];?></td>
														</tr>
														<?php }	?>
														</tbody>
													</table>
				
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
			</div>	
        </div>
 
    </section>
    <footer>
        <div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                	<div class="grid_4">
						<div>Copyright &copy; 2019 <a class="link color-3">Kelompok 1 - Matrikulasi Basdat</a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<script type="text/javascript">
	$(document).ready(function(){
        $('#tabel_penugasan').DataTable();
    }); </script>
</body>
</html>
