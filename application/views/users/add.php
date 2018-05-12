<!DOCTYPE html>
<html>
<head>
<title>File Upload</title>
<!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="src/main.js"></script>
</head>
<body background="http://www.androidguys.com/wp-content/uploads/2016/05/Poly-Lakeside.jpg">

<div class="container" style="margin-top:  12%">

<div class="row">
<div class="col-lg-4"> </div>
<div class="col-lg-4">
<div class="col-lg-4"> </div>
<div class="row">

<?php
if($this->session->flashdata('success_msg'))
{
    echo '<div class="alert alert-success">';
    echo  $this->session->flashdata('success_msg');
    echo '</div>';
}

if($this->session->flashdata('error_msg'))
{
    echo '<div class="alert alert-danger">';
    echo  $this->session->flashdata('error_msg');
    echo '</div>';
}
?>
<center>

<form role="form" method="post" enctype="multipart/form-data">
<div class="panel text-center">
<div class="panel-body">
<div class="form-group">
	<h1 style="font-family: century gothic; font-weight: bold;">File Upload</h1> <br>

<label>Picture</label>
<input class="form-control" type="file" name="picture" />
</div>
<div class="form-group">
<label>Name</label>
<input class="form-control" type="text" name="name" />
</div>
<div class="form-group">
<label>Email</label>
<input class="form-control" type="text" name="email" />
</div>
<div class="form-group">
<input type="submit" class="btn btn-info" name="userSubmit" value="Add">
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</center>
</body>
</html>