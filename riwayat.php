<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-Ladin | Riwayat Laporan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet">

	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="style2/css/animate.css">
	<link rel="stylesheet" href="style2/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="style2/css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="style2/css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="style2/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="style2/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="style2/css/owl.carousel.min.css">
	<link rel="stylesheet" href="style2/css/owl.theme.default.min.css">
	
	<!-- Theme style  -->
	<link rel="stylesheet" href="style2/css/style.css">

	<!-- Modernizr JS -->
	<script src="style2/js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body>
	<div id="page">

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container2">
				
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"><a href="index.html"><img src="images/2.jpg" alt="Free HTML5 Website Template by GetTemplates.co"></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul id="menu">
							<li>ADMIN<i class="fa fa-street-view"></i>
								<ul>
									<li><a href="aduan.php">Laporkan</a></li>
                  <li><a href="riwayat.php">Riwayat</a></li>
									<li><a href="index.php">LogOut</a></li>
								</ul>
							</li>
						</ul>
					</div>
					
				</div>
				
			</div>
		</nav>

		<div id="gtco-header" class="gtco-cover" role="banner">
      <h3 ><center>Riwayat Laporan</center></h3>
			<div class="gtco-container">
			
				<table id="myTable" class="table table-striped">  
        <thead>  
          <tr>  
            <th>NO</th>  
            <th>Nama</th>
            <th>NIM</th>  
            <th>Gedung</th>
            <th>Lantai</th>
            <th>Ruang</th>  
            <th>Jenis</th>
            <th>Laporan</th>
            <th >Action</th>
          </tr>  
        </thead>  
        <tbody>  
          <tr>  
            <td>001</td>  
            <td>Admin</td>  
            <td>A11.012</td>  
            <td>C</td>
            <td>2</td>  
            <td>2.4</td>  
            <td>Kehilangan</td>  
            <td>Jaket</td>
            <td><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Detail</a>
            </td>
          </tr>  
          <tr>  
            <td>002</td>  
            <td>Admin</td>  
            <td>A11.012</td>  
            <td>C</td>
            <td>3</td>  
            <td>3.4</td>  
            <td>Kehilangan</td>  
            <td>Flashdisk</td>
            <td><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Detail</a>
            </td>
          </tr>  
        </tbody>  
      </table>  

			</div>
		</div>

        <div class="gtco-container">
            <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Barang Sudah Ditemukan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <textarea name="deskripsi"  class="ckeditor" id="ckeditor" disabled="">Barang Sudah Berada di Operator Lantai 3</textarea>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
             <button type="button" class="btn btn-success" data-dismiss="modal">Kembali</button>
        </div>
        
      </div>
    </div>
  </div>
        </div>
        <div class="gtco-container">
            <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Barang Belum Ditemukan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h5></h5>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
             <button type="button" class="btn btn-success" data-dismiss="modal">Kembali</button>
          
        </div>
        
      </div>
    </div>
  </div>
        </div>
	

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="style2/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="style2/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="style2/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="style2/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="style2/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="style2/js/jquery.magnific-popup.min.js"></script>
	<script src="style2/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="style2/js/main.js"></script>
	<script type="text/javascript" src="style2/ckeditor/ckeditor.js"></script>
	



	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
	<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function(){
		    $('#myTable').dataTable();
		});
	</script>

</html>

