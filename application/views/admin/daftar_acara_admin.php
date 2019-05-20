<html>
<head>
    <title>Halaman Daftar Acara Admin</title>
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
$("#tanggal2").datepicker();
}); 
</script> 


</head>
       

<body id="page5">
	<header class="header">

	<div class="menu-kelompok1">
 
		<ul>
			
			<li><a href="#">Daftar Stasiun</a></li>
			<li><a href="#">Daftar Sepeda</a></li>
			<li class="dropdown"><a href="#">Peminjaman</a>
				<ul class="isi-dropdown">
					<li><a href="#">Buat Peminjaman</a></li>
					<li><a href="#">Daftar Peminjaman</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Transaksi</a>
				<ul class="isi-dropdown">
					<li><a href="#">Topup Sharebike Pay</a></li>
					<li><a href="#">Riwayat Transaksi</a></li>
				</ul>
			</li>
			<li><a href="#">Daftar Acara</a></li>
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
                                                	<h3 class="p2">Halaman Admin - Daftar Acara</h3>
													

                  
<table>
<form name="register" id="contact-form" method="post" action="" enctype="multipart/form-data" onSubmit="return valregister()">
<fieldset><br></br>
<tr> 
	<td> No </td>
	<td> Judul </td>
	<td> Deskripsi</td>
	<td> Tanggal Mulai</td>
	<td> Tanggal Akhir</td>
	<td> Is Free </td>
	<td> Action</td>
</tr>

<?php
foreach ($data as $dd){?>
<tr>
	<td><?php echo $dd['nomor'];?></td>
	<td><?php echo $dd['merk'];?></td>
	<td><?php echo $dd['jenis'];?></td>
	<td><?php echo $dd['status'];?></td>
	<td><?php echo $dd['id_stasiun'];?></td>
	<td><?php echo $dd['no_kartu_penyumbang'];?></td>
	<td align="center">
	<a href="<?php echo base_url()."index.php/dbs/edit_data/".$dd['nomor'];?>">Pinjam</a> 
	</td>				
	</tr>

</tr>

</fieldset>		
</form>
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
</body>
</html>
