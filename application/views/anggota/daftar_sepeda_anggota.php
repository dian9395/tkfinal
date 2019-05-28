<html>
<head>
    <title>Halaman Daftar Sepeda</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/grid.css')?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dropdown.css')?>" type="text/css" media="screen"> 
	<link rel="stylesheet" href="<?php echo base_url('assets/DataTables-1.10.18/css/jquery.dataTables.css ')?>" type="text/css" media="screen"> 
    <link type="text/css" href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.css')?>" rel="stylesheet"/>   	
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.1.min.js')?>"></script>  
	<script type="text/javascript" src="<?php echo base_url('assets/DataTables-1.10.18/js/jquery.dataTables.min.js')?>" ></script>  
</head>
       

<body id="page5">
	<header class="header">

	
		<div class="menu-kelompok1">
 
		<ul>
			<li><a href="#">Saldo Sharebike Pay: <?php echo $this->session->userdata('saldo')?></a></li>
			<li><a href="#">Daftar Stasiun</a></li>
			<li><a href="<?php echo base_url()."dbs/daftar_sepeda_anggota"; ?>">Daftar Sepeda</a></li>
			<li class="dropdown"><a href="#">Peminjaman</a>
				<ul class="isi-dropdown">
					<li><a href="#">Buat Peminjaman</a></li>
					<li><a href="<?php echo base_url()."dbs/daftar_peminjaman_anggota"; ?>">Daftar Peminjaman</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Transaksi</a>
				<ul class="isi-dropdown">
					<li><a href="<?php echo base_url()."dbs/topup"; ?>">Topup Sharebike Pay</a></li>
					<li><a href="<?php echo base_url()."dbs/riwayat_transaksi"; ?>">Riwayat Transaksi</a></li>
				</ul>
			</li>
			<li><a href="<?php echo base_url()."dbs/daftar_acara_anggota"; ?>">Daftar Acara</a></li>
			<li><a href="#">Daftar Voucher</a></li>
			<li><a href="<?php echo base_url()."dbs/logout"; ?>">Logout</a></li>
			
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
													<!-- <h3 class="p2"> <?php echo $this->session->userdata('nama')?></h3> -->
													<?php echo "<h2>".$this->session->flashdata('pesan')."</h2>"?>
													<h3 class="p2">Halaman Anggota - Daftar Sepeda</h3>
													<table id="tabel_sepeda" class="display" cellspacing="0" width="100%">
													<thead><th>
														<tr style="background:grey;">
															<td>No</td>
															<th>Nomor </th>
															<th>Merk</th>
															<th>Jenis</th>
															<th>Status</th>
															<th>ID Stasiun</th>
															<th>No. Kartu Penyumbang</th>
															<th> Action</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$i=1;
															foreach ($data as $col){?>
													
														<tr>
															<td><?php echo $i; $i++?></td>
															<td><?php echo $col['nomor'];?></td>
															<td><?php echo $col['merk'];?></td>
															<td><?php echo $col['jenis'];?></td>
															<td><?php if ($col['status'] == 1) {
                                                                echo 'Dipinjam';
                                                            }
                                                            else {
                                                                echo 'Tersedia';
															};?></td>
															<td><?php echo $col['id_stasiun'];?></td>
															<td><?php echo $col['no_kartu_penyumbang'];?></td>
															<td align="center">
																<a href="<?php echo base_url()."dbs/edit_data/".$col['nomor'];?>">Pinjam</a> 
															</td>				
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
    
	<script type="text/javascript">
	$(document).ready(function(){
        $('#tabel_sepeda').DataTable();
    }); </script>
	
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
</body>
</html>
