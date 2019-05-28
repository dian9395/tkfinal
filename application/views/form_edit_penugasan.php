<html>
<head>
    <title>Halaman Admin - Daftar Penugasan</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/grid.css')?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dropdown.css')?>" type="text/css" media="screen"> 
    <link type="text/css" href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.css')?>" rel="stylesheet"/>  	
	<script src="<?php echo base_url('assets/datepick/datepick.js')?>"></script>
	<script src="<?php echo base_url('assets/datepick/datepickui.js')?>"></script>


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
			<li><a href="<?php echo base_url('dbs/logout'); ?>">Logout</a>>Logout</a></li>
			
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
                                                	<h3 class="p2">Form Update Penugasan</h3>


	<form method="POST" action="<?php echo base_url()."dbs/do_update_penugasan"; ?>">
	<table>
		<tr>
			<td>Petugas</td>
			<td><input type="text" name="ktp" value="<?php echo $ktp; ?>" readonly /></td>
		</tr>
		<tr>
			<td>Tanggal Mulai</td>
			<td><input id ="" type="date" name="start_datetime" value="<?php echo $start_datetime; ?>" readonly /></td>		</tr>
		<tr>
			<td>Tanggal Selesai</td>
			<td><input id="" type="date" name="end_datetime" value="<?php echo $end_datetime; ?>" /></td>		</tr>
		<tr>
			<td>Stasiun</td>
			<td><input type="text" name="id_stasiun" value="<?php echo $id_stasiun; ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td cols="3"><input class="button" type="submit" name="btnSubmit" value="UPDATE" /></td>
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
