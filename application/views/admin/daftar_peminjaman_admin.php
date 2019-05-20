<html>
<head>
    <title>Halaman Admin - Daftar Peminjaman</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/grid.css')?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dropdown.css')?>" type="text/css" media="screen"> 
    <link type="text/css" href="jquery-ui-1.11.2/jquery-ui.css" rel="stylesheet"/>  	
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>  
	<script type="text/javascript" src="jquery-ui-1.11.2/jquery-ui.js"></script>  
	<script type="text/javascript" src="js/jquery.ui.datepicker-id.js"></script>  
<script type="text/javascript"> 
$("document").ready(function(){ 
$("#tanggal").datepicker();

}); 
</script> 


</head>
       

<body id="page5">
	<header class="header">

	
		<div class="menu-kelompok1">
 
		<ul>
			<li class="dropdown"><a href="#">Acara</a>
			<ul class="isi-dropdown">
					<li><a href="#">Tambah Acara</a></li>
					<li><a href="#">Daftar Acara</a></li>
				</ul></li>
			<li class="dropdown"><a href="#">Petugas</a>
			<ul class="isi-dropdown">
					<li><a href="#">Tambah Penugasan</a></li>
					<li><a href="#">Daftar Penugasan</a></li>
				</ul></li>
			<li class="dropdown"><a href="#">Stasiun</a>
				<ul class="isi-dropdown">
					<li><a href="#">Tambah Stasiun</a></li>
					<li><a href="#">Daftar Stasiun</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Sepeda</a>
				<ul class="isi-dropdown">
					<li><a href="#">Tambah Sepeda</a></li>
					<li><a href="#">Daftar Sepeda</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Voucher</a>
				<ul class="isi-dropdown">
					<li><a href="#">Tambah Voucher</a></li>
					<li><a href="#">Daftar Voucher</a></li>
				</ul>
			</li>
			<li><a href="#">Daftar Peminjaman</a></li>
			<li><a href="#">Daftar Laporan</a></li>
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
                                                	<h3 class="p2">Halaman Admin - Daftar Peminjaman</h3>
													
													<?php echo "<h2>".$this->session->flashdata('pesan')."</h2>"?>
													<table border="1" style="border-collapse:collapse; width:100%;">
														<tr style="background:grey;">
															<th>Nomor Kartu Anggota </th>
															<th>Sepeda </th>
															<th>Stasiun </th>
															<th>Waktu Kembali</th>
															<th>Biaya </th>
															<th>Denda</th>
														</tr>
														<?php
															foreach ($data as $col){?>
														<tr>
															<td><?php echo $col['no_kartu_anggota'];?></td>
															<td><?php echo $col['nomor_sepeda'];?></td>
															<td><?php echo $col['id_stasiun'];?></td>
															<td><?php echo $col['datetime_kembali'];?></td>
															<td><?php echo $col['biaya'];?></td>
															<td><?php echo $col['denda'];?></td>																		
														</tr>
															<?php }	?>
													</table>
													<a href="<?php echo base_url()."index.php/crud/add_data";?>">Tambah Data</a>									

                      
                                                       				
                                                 
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
</body>
</html>
