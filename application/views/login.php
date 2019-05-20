<html>
<head>
    <title>Login User</title>
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
                                                    <h3 class="p2">Form Login</h3>
                                                    
<? php 
$ktp = $_POST['ktp'];
$email = ($_POST['email']);
 
$login = mysql_query("select * from person where ktp='$ktp' and email='$email'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['ktp'] = $ktp;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php");	
} ?>

                                               
<table>
<form name="register" id="contact-form" method="post" action="" enctype="multipart/form-data" onSubmit="return valregister()">
<fieldset><br></br>
<tr> 
	<td> <b>Nomor KTP</b> </td>
	<td> : </td>
	<td> <input type="text" size="60" maxlength="60" name="isinama"></td>
</tr>

<tr>
	<td> <b>Email</b> </td>
	<td> : </td>
	<td> <input type="text" size="60" maxlength="60" name="isiemail"></td>
</tr>


<tr>
	<td cols="3"> <input class="button" type="submit" name="tombol" value="LOGIN"></a></td>
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
