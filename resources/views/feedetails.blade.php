<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/admininside">FITZONE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </nav>
  </div>
<div style="background-image: url('images/lol.jpg');
                    min-height: 800px; 
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;"></div>
                    <br>
                    <br>

<div class="container">
<h2 class="card-title" style="text-align: center;">FEE DETAILS</h2><br><br>
<div class="card">
<table style="width:100%" class="table">
<thead class="thead-dark">
  <tr>
  	<th>Sl.No</th>
    <th>USER ID</th>
     <th>NAME</th>
    <th>FEES</th>
  </tr>
  </thead>
  @foreach($res as $value)
  <tr>
  <td>{{$loop->iteration}}</td>
<td>{{$value->user_id}}</td>
 <td>{{$value->gymregistrations->name}}</td>
 <td>{{$value->fees}}</td>
  </tr>
  @endforeach
  </table>
  </div>
  </div>
  <br>
  <br>
</body>
</html>