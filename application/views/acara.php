<html>
<head>
    <title>Acara Bike Sharing</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/grid.css')?>" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dropdown.css')?>" type="text/css" media="screen"> 
    <link rel="stylesheet" href="<?php echo base_url('assets/DataTables-1.10.18/css/jquery.dataTables.css ')?>" type="text/css" media="screen"> 
    <link type="text/css" href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.css')?>" rel="stylesheet"/>   	
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.1.min.js')?>"></script>  
	<script type="text/javascript" src="<?php echo base_url('assets/DataTables-1.10.18/js/jquery.dataTables.min.js')?>" ></script>  

<script type="text/javascript"> 
$("document").ready(function(){ 
$("#tanggal").datepicker();
$("#tanggal2").datepicker();
}); 
</script> 
</head>

<body>
       
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
                                                    <h3 class="p2">Form Penambahan Acara</h3>
                                                                                            
                                               
<table>
<form name="register" id="contact-form" method="post" action="" enctype="multipart/form-data" onSubmit="return valregister()">
<fieldset><br></br>
<tr> 
    <td> <b>Judul</b> </td>
    <td> : </td>
    <td> <input type="text" size="60" maxlength="60" name="isijudul"></td>
</tr>

<tr> 
    <td> <b>Deskripsi</b> </td>
    <td> : </td>
    <td> <input id="text" type="text" size="60" maxlength="60" name="isideskipsi"></td>
</tr>

<tr> 
    <td> <b>Gratis</b> </td>
    <td> : </td>
    <td> <select name="gratis">
    <option value="Ya">Ya</input>
    <option value="Tidak">Tidak</input>
    </select>
    </td>
</tr>

<tr> 
    <td> <b>Tanggal Mulai</b> </td>
    <td> : </td>
    <td> <input id="tanggal" type="text" size="60" maxlength="60" name="isitgl"></td>
</tr>

<tr> 
    <td> <b>Tanggal Selesai</b> </td>
    <td> : </td>
    <td> <input id="tanggal2" type="text" size="60" maxlength="60" name="isitgl"></td>
</tr>

<tr> 
    <td> <b>Stasiun<b> </td>
    <td> : </td>
    <td> <select name="petugas">
    <option value="Ya">Dropdown Petugas</input>
    </select>
    </td>
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
