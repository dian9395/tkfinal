<html>
<head>
    <title>Pendaftaran User Bike Sharing</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/grid.css')?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dropdown.css')?>" type="text/css" media="screen"> 
    <link type="text/css" href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.css')?>" rel="stylesheet"/>  	
	<script src="<?php echo base_url('assets/datepick/datepick.js')?>"></script>
	<script src="<?php echo base_url('assets/datepick/datepickui.js')?>"></script>

<script type="text/javascript"> 
$("document").ready(function(){ 
		$("#datepicker").datepicker();
		$("#datepicker1").datepicker();
}); 
</script> 


</head>
<body id="page5">
  	

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
                                                	<h3 class="p2">Form Pendaftaran Pengguna</h3>
													

                  
<table>
<form name="register" id="contact-form" method="post" action="<?php echo base_url()."dbs/do_pendaftaran"; ?>" enctype="multipart/form-data" onSubmit="return valregister()">
<fieldset><br>
<tr> 
	<!-- flash data -->
	<td> <b>No KTP</b> </td>
	<td> : </td>
	<td> <input type="text" size="60" maxlength="60" name="ktp"></td>
</tr>
<?php echo "<h2>".$this->session->flashdata('pesan')."</h2>"?>

<tr> 
	<td> <b>Nama Lengkap</b> </td>
	<td> : </td>
	<td> <input type="text" size="60" maxlength="60" name="nama"></td>
</tr>

<tr> 
	<td> <b>Pilih Role</b> </td>
	<td> : </td>
	<td>
	<select name="role">
	<option value="Anggota">Anggota</option>
	<option value="Petugas">Petugas</option>
	
	</select>
	</td>
	
</tr>

<tr> 
	<td> <b>Email</b> </td>
	<td> : </td>
	<td> <input type="text" size="60" maxlength="60" name="email"></td>
</tr>

<tr> 
	<td> <b>Tanggal Lahir<b> </td>
	<td> : </td>
	<td>  <input id="datepicker" type="text" size="60" maxlength="60" name="tgl_lahir">  </td>
</tr>

<tr> 
	<td> <b>Nomor Telepon<b> </td>
	<td> : </td>
	<td> <input type="text" size="60" maxlength="60" name="no_telp"></td>
</tr>

<tr> 
	<td> <b>Alamat<b> </td>
	<td> : </td>
	<td> <textarea cols="62" rows="4" name="alamat">
	</textarea></td>
</tr>

<tr>
	<td cols="3"> <input class="button" type="submit" name="tombol" value="SUBMIT"></a></td>
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
