<html>
<head>
    <title>Login User</title>
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
                                                    
                                              
<table>
<form name="register" id="contact-form" method="post" action="<?php echo base_url('dbs/do_login'); ?>"  enctype="multipart/form-data" onSubmit="return valregister()">
<fieldset><br></br>
<tr> 
	<td> <b>Nomor KTP</b> </td>
	<td> : </td>
	<td> <input type="text" size="60" maxlength="60" name="noktp"></td>
</tr>

	<td> <b>Email</b> </td>
	<td> : </td>
	<td> <input type="text" size="60" maxlength="60" name="email"></td>
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
