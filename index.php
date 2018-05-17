 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>


  <nav class="navbar navbar-expand-sm bg-light" style="background-color:black; ">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav>
<div class="container">

<br><br>

  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>

<br><br>

  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Peserta</th>
        <th>No.Peserta</th>
        <th>Nilai 1</th>
        <th>Nilai 2</th>
        <th>Nilai 3</th>
        <th>BN 1</th>
        <th>BN 2</th>
        <th>BN 3</th>
        <th>TotNil</th>
      </tr>
    </thead>
    <tbody>

	<tr>
			                <td>No</td>
	                  		<td></td>
	                  		<td></td>
	                  		<td></td>
	                  		<td></td>
	                  		<td></td>
	                  		<td></td>
	                  		<td></td>
	                  		<td></td>
	                  		<td></td>
	              		</tr>";
			}
		?>       
 	
    </tbody>
  </table>


<br><br>




<div class="col-md-12" >

 <form action="" method="post">
 <div class="row">
  <div class="form-group col-md-6">
    <label for="email">Nama Peserta</label>
    <input type="text" name="nama_RA" class="form-control" id="email">
  </div>

  <div class="form-group col-md-6">
    <label for="pwd">No.Peserta</label>
    <input type="text" name="no_RA" class="form-control" id="pwd">
  </div>


   <div class="form-group col-md-3">
    <label for="pwd">Nilai 1</label>
    <input type="text" name="nila1_RA" class="form-control" id="pwd">
  </div>

   <div class="form-group col-md-3">
    <label for="pwd">Nilai 2</label>
    <input type="text" name="nila2_RA" class="form-control" id="pwd">
  </div>

  <div class="form-group col-md-3">
    <label for="pwd">Nilai 3</label>
    <input type="text" name="nila3_RA" class="form-control" id="pwd">
  </div>
</div>
<br>
  <button type="submit" name="kirim" class="btn btn-primary">Submit</button>
</form> 

</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</body>
</html> 