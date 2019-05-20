<html>
<head>
    <title>Halaman Admin - Daftar Acara</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/grid.css')?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dropdown.css')?>" type="text/css" media="screen"> 
    <link type="text/css" href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.css')?>" rel="stylesheet"/>  	
	<script type="text/javascript" href="<?php echo base_url('assets/js/jquery-2.1.1.min.js')?>"</script>  
	<script type="text/javascript" href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.js')?>"</script>  
	<script type="text/javascript" href="<?php echo base_url('assets/js/jquery.ui.datepicker-id.js')?>"</script>  
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
					<li><a href="<?php echo base_url()."dbs/add_data_acara";?>">Tambah Acara</a></li>
					<li><a href="<?php echo base_url()."dbs/daftar_acara_admin";?>">Daftar Acara</a></li>
				</ul></li>
			<li class="dropdown"><a href="#">Petugas</a>
			<ul class="isi-dropdown">
					<li><a href="<?php echo base_url()."dbs/add_data_penugasan";?>">Tambah Penugasan</a></li>
					<li><a href="<?php echo base_url()."dbs/daftar_penugasan_admin";?>">Daftar Penugasan</a></li>
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
                                                	<h3 class="p2">Form Penambahan Acara</h3>


	<form method="POST" action="<?php echo base_url()."/daftar_acara_admin/do_insert_acara"; ?>">
	<table>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul" /></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td><input type="text" name="deskripsi" /></td>
		</tr>
		<tr>
			<td>Gratis</td>
			<td><input type="text" name="is_free" /></td>
		</tr>
		<tr>
			<td>Tanggal Mulai</td>
			<td><input id="tanggal" type="text" size="50" maxlength="50" name="tgl_mulai"/></td>
		</tr>
		<tr>
			<td>Tanggal Selesai</td>
			<td><input id="tanggal" type="text" size="50" maxlength="50" name="tgl_akhir"/></td>
		</tr>
		<tr>
			<td>Stasiun</td>
			<td><input type="text" name="id_stasiun" /></td>
		</tr>
		<tr>
			<td></td>
			<td cols="3"><input class="button" type="submit" name="btnSubmit" value="SUBMIT" /></td>
		</tr>
	</table>
	</form>


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
