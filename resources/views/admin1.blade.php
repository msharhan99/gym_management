<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>ADMIN LOGIN</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Merged Forms Page Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
	 <link rel="stylesheet" href="css/register.css" type="text/css" media="all" /><!-- Style-CSS -->
</head>
<body>
   <!-- /form-26-section -->
   <section class="form-26-1">
         <div class="form-26-mian">
				<div class="layer">
			<div class="wrapper">
			<div class="form-inner-cont">
					<div class="forms-26-info">
						<h2>LOGIN</h2><br><br>
                    </div>
					<div class="form-right-inf"> 
							<form method="post" action="/adminLogin" class="signin-form">	
							@csrf
							
								 <div  class="form-input">
									<input type="text" name="name" placeholder="Enter Name"  required />
								</div>
								<br>
								<div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
  </div>
									<br>
								<a href="/admininside">
								<div  class="form-input"><button class="btn">LOGIN</button></div>
							</a>
						</form>
						
                    </div>
                </div>
			</div>
		</div>
		    </div>
		</section>
      <!-- //form-26-section -->
</body>
</html>