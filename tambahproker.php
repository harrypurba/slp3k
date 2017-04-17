<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>

	<div class ="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">SLP3K</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="daftarproker.php?iddivisi=1">Home</a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </nav>
        <br><br>
    <h3 class="text-center">Tambah Program Kerja</h2>    
    </div>

	 <br>
	 <div class="container">
            <form action="server/tambahprokerserver.php" class="form-horizontal" role="form" method="post">
                <div class="form-group ">
                    <label for="firstName" class="col-sm-3 control-label ">Nama Program Kerja</label>
                    <div class="col-sm-9">
                        <input type="text" name="namaproker" id="firstName" placeholder="Program Kerja X" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="startdate" class="col-sm-3 control-label">Tanggal Mulai</label>
                    <div class="col-sm-9">
                        <input type="date" name="tglmulai" id="startdate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="enddate" class="col-sm-3 control-label">Tanggal Selesai</label>
                    <div class="col-sm-9">
                        <input type="date" name="tglselesai" id="enddate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="col-sm-3 control-label ">Deskripsi</label>
                    <div class="col-sm-9">
                        <input type="text" name="deskripsi" id="desc" placeholder="" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" class="btn btn-primary btn-block" data-toggle="modal" value="Daftarkan">
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Information</h4>
                </div>
                <div class="modal-body">
                    <p>Berhasil menambah proker</p>
                </div>
                <div class="modal-footer">
                    <a href="daftarproker.html"><button type="button" class="btn btn-primary">OK</button></a>
                </div>
            </div>
        </div>
	</div>




</body>
</html>