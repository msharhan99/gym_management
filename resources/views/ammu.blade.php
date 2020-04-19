
<form method="post" action="/registerpost">
@csrf
<!DOCTYPE html>
<html>
<head>
	<title>GYM | REGISTER</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class ="container">
<div class="card" style="width: 18rem;">
  
  <div class="card-body"style="padding-top: 2em">
    <h5 class="card-title">REGISTER</h5>
    <form>
  <div class="form-row">
    <div class="form-group ">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputname" placeholder="name">
    </div
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
   <label for="inputmobileno">Mobile NO</label>
    <input type="tel" class="form-control" id="inputtel" placeholder="mobileno">
  </div><br>
    
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</form>
    
  </div>
</div>
</div>

</body>
</html>
