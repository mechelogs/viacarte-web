<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$title}}</title>
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/datepicker.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
	<!-- <link rel="stylesheet" href="{{ URL::asset('assets/css/filepond.min.css') }}"> -->
	<link href="https://unpkg.com/filepond/dist/filepond.min.css" rel="stylesheet">
	<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css" rel="stylesheet">


</head>
<body>
	<nav class="main-nav">
		<div class="container">
			<ul class="nav nav-fill d-flex align-items-center">
				<!-- <li class="nav-item text-left">
					<div class="user-image-container">
						<img src="{{ URL::asset('assets/imgs/user-image.jpg') }}" class="user-image">
					</div>
				</li> -->
				<li class="nav-item">
					<a href="#" class="navbar-brand"><img src="{{ URL::asset('assets/imgs/header-logo.png') }}" alt="Via Carte" class="header-logo"></a>
				</li>
				<!-- <li class="nav-item text-right">
					<img src="{{ URL::asset('assets/imgs/cog-icon.png') }}" class="icon">
				</li> -->
			</ul>
			
		</div>
	</nav>
	<main>

		<div class="main container">
			<div class="card with-boxshadow registration-card">
				<div class="row">
					<div class="col">
							<div class="row card-title">
								<div class="col">
									<span class="title">Card Application</span>
								</div>
								<div class="col text-right">
									<a href="#" class="text-link text-primary">Clear Fields</a>
								</div>
						</div>
					</div>
				</div>

				<form class="border-bottom">
				  <div class="form-row">
				    <div class="form-group col">
				      <label for="fname">Name*</label>
				      <input type="type" class="form-control" id="fname" placeholder="First Name" required>
				    </div>
				    <div class="form-group col">
				      <label for="lname">Last Name</label>
				      <input type="type" class="form-control" id="lname" placeholder="Last Name" required>
				    </div>
				  </div>

				  <div class="form-row">
				    <div class="form-group col with-icon">
				      <label for="inputPassword4">Date of Birth* </label>
						  <input type="text" class="form-control pick-datetime" data-language="en" placeholder="DD-MM-YY" required/>
						  <i class="far fa-calendar-alt icon"></i>
				    </div>
				    <div class="form-group col with-icon">
				      <label for="inputPassword4">Currency</label>
						  <select name="" id="" class="form-control" >
						  	<option value="1">USD</option>
						  </select>
				    </div>
				  </div>

				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label for="address">Address*</label>
				      <input type="type" class="form-control" id="address" placeholder="Address 01" required>
				    </div>
				  </div>

				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <input type="type" class="form-control" id="address02" placeholder="Address 02">
				    </div>
				  </div>

				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <input type="type" class="form-control" id="city" placeholder="City">
				    </div>
				    <div class="form-group col-md-6">
				      <input type="type" class="form-control" id="city" placeholder="State">
				    </div>
				  </div>

				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <input type="type" class="form-control" id="zipCode" placeholder="Postal / Zip Code">
				    </div>
				    <div class="form-group col-md-6">
				      <select name="" id="" class="form-control" placeholder="Country">
						  	<option value="1" selected disabled hidden>Country</option>
						  </select>
				    </div>
				  </div>

				  <p class="note"><b>PLEASE NOTE:</b> Due to various restrictions, we are not allowed to issue cards to residents of India or Japan or persons of the following nationalities: Balkans, Belarus, Burma (Myanmar), Crimea, Cote d’ Ivoire (Ivory Coast), Cuba, Congo (Democratic Republic of), Iran, Iraq, Lebanon, Liberia, Libya, North Korea, Somalia, Sudan, Syria, Zimbabwe</p>

				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="email">Email*</label>
				      <input type="type" class="form-control is-invalid" id="city" placeholder="name@web.com" required>
				      <div class="invalid-feedback">
			        	Email is required. Please enter a valid email.
			        </div>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="phone">Phone*</label>
				      <input type="type" class="form-control" id="city" placeholder="242-XXX-XXXX" required>
				    </div>
				  </div>

				</form>

				<div class="row">
					<div class="col">
						<div class="row card-title">
							<div class="col">
								<span class="title">Know Your Customer</span>
								<span class="description">To comply with our Issuing Bank and Card Association “Know Your Client” policies, We will require two pieces of identification to be included with your application and will be held on file in order to confirm your identity.</span>
							</div>
						</div>
					</div>
				</div>

				<form class="border-bottom">
					<div class="title">Proof of Identity</div>
					<div class="form-row mb-4">
				    <div class="form-group col-md-6">
				      <label for="typeIdentity">Type of Identity*</label>
				      <select name="" id="" class="form-control">
						  	<option value="1" selected>Passport</option>
						  </select>

						  <div class="form-row mt-3">
						    <div class="form-group col-md-6">
						      <label for="email">Country of Issue*</label>
						      <select name="" id="" class="form-control">
								  	<option value="1" selected hidden disabled>Country</option>
								  </select>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="idNumber">ID Number*</label>
						      <input type="type" class="form-control" id="idNumber" placeholder="XXXXXXXX">
						    </div>
						  </div>
				    </div>
				    <div class="form-group col-md-6">
						<input type="file"  class="filepond" name="filepond" data-max-file-size="10MB" data-max-files="1" />
				    </div>
				  </div>

				  <div class="title">Proof of Address</div>
					<div class="form-row">
				    <div class="form-group col-md-6">
				      <!-- <label for="typeIdentity">Type of Identity*</label>
				      <select name="" id="" class="form-control">
						  	<option value="1" selected>Passport</option>
						  </select> -->
						  <div class="form-row mt-3">
						    <div class="form-group col-md-6">
						      <label for="typeofBill">Type of Bill*</label>
						      <select name="typeofBill" id="typeofBill" class="form-control">
								  	<option value="0" selected hidden disabled>Bill</option>
								  	<option value="1">Utility Bill</option>
								  </select>
						    </div>
						    <div class="form-group col-md-6">
						      <label for="language">Language*</label>
						      <select name="language" id="language" class="form-control">
								  	<option value="0" selected hidden disabled>Language</option>
								  	<option value="1">English</option>
								  </select>
						    </div>
						  </div>
				    </div>
				    <div class="form-group col-md-6">
							<input type="file"  class="filepond" name="filepond" data-max-file-size="10MB" data-max-files="1" />
				    </div>
				  </div>
				</form>

				<div class="border-bottom agreement">
					<p>Applicant agrees that the use of any Mastercard Prepaid Card (“Card”) issued in response to this application will constitute my Agreement to be jointly and severally bound by the Term and Conditions of this Mastercard Prepaid Cardholder Agreement delivered with the Card. It is certified that the above information is complete and true, and is given to induce Madison Insurance Group, Inc. to issue said Card. Applicant authorizes you to make whatever credit and/or investigative inquiry deemed necessary in connection with this Application.</p>
					<div class="custom-radio-btn">
						<p>Applicant has read and agreed to the <a href="#" class="text-link text-primary">terms and conditions</a> set forth by way of signature.</p>

						<label class="content">Yes
						  <input type="radio" checked="checked" name="radio">
						  <span class="checkmark"></span>
						</label>
						<label class="content">No
						  <input type="radio" name="radio">
						  <span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="p-5 text-center">
					<button class="btn btn-primary form-btn">Submit</button>
				</div>

			</div>

		</div>
	</main>

	<footer class="">
		<div class="container">
			<div class="row">
				<div class="col text-center copyright">© 2018 ViaCarte Priveledge Services. All Rights Reserved.</div>
			</div>

		</div>
	</footer>

	<script src="{{ URL::asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
	<script src="{{ URL::asset('assets/js/i18n/datepicker.en.js') }}"></script>
	<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
	<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
	<!-- include FilePond plugins -->
	<!-- include FilePond jQuery adapter -->
	<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
	<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"></script>

	<script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>
</html>