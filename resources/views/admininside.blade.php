<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/admin1">FITZONE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/feedetails">FEE DETAILS <span class="sr-only">(current)</span></a>
      </li>
</nav>
</div>
<div style="background-image: url('images/gal2.jpg');
                    min-height: 800px; 
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;"></div>
<div class="container">
<h2 class="card-title" style="text-align: center;">DETAILS</h2><br><br>
<div class="card">
<table style="width:100%" class="table">
<thead class="thead-dark">
  <tr>
  	<th>Sl.No</th>
    <th>NAME</th>
    <th>ADDRESS</th>
    <th>MOBILE NUMBER</th>
    <th>FEE PAID</th>
  </tr>
  </thead>
  @foreach($res as $value)
  <tr>
  <td>{{$loop->iteration}}</td>
  <td>{{$value->name}}</td>
  <td>{{$value->address}}</td>
  <td>{{$value->mobileno}}</td>
  <td>
    <form method="post" action="/feespayment/{{$value->id}}">
    @csrf
      <input type="number" name="fees">
      <button type="submit">Save</button>
    </form>
  </td>
  </tr>
  @endforeach
  </table>
  </div>
  </div>
  <br>
  <br>
  <form method="post" action="/alogout">
  @csrf
  <div class="text-center">
 <button class="btn btn-primary" type="submit">LOGOUT</button>
 </div>
 
  </form>
</body>
</html>