<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Register</title>
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
						<h2>Register</h2><br><br>
                    </div>
					<div class="form-right-inf"> 
							<form method="post" action="/registerpost" class="signin-form">	
							@csrf
							 <div class="forms-gds">
								 <div  class="form-input">
									<input type="text" name="name" placeholder="Enter Name" required />
								</div>
								<div  class="form-input">
										<input type="text" name="address" placeholder="Enter Address" required />
									</div>
								<div  class="form-input">
									<input type="text" name="mobileno" placeholder="Enter Contact no." required />
								</div>
								<div  class="form-input"><button class="btn">Register</button></div>
							</div>
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