<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$title}}</title>
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
</head>
<body>
	<nav class="main-nav">
		<div class="container">
			<ul class="nav nav-fill d-flex align-items-center">
				<li class="nav-item text-left">
					<div class="user-image-container">
						<img src="{{ URL::asset('assets/imgs/user-image.jpg') }}" class="user-image">
					</div>
				</li>
				<li class="nav-item">
					<a href="#" class="navbar-brand"><img src="{{ URL::asset('assets/imgs/header-logo.png') }}" alt="Via Carte" class="header-logo"></a>
				</li>
				<li class="nav-item text-right">
					<img src="{{ URL::asset('assets/imgs/cog-icon.png') }}" class="icon">
				</li>
			</ul>
			
		</div>
	</nav>
	<main>
		<div class="subnav">
			<div class="container">
				<div class="d-flex nav nav-fill">
					<!-- <ul class="navbar-nav nav nav-fill"> -->
					<ul class="nav-item nav">
			      <li class="nav-item">
			        <a class="nav-link active" href="#">Cards</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Send Money</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Rewards</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Alerts</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Statements & Activity</a>
			      </li>
			      <!-- <li class="nav-item align-self-end">
			        <a class="nav-link" href="#"><img src="{{ URL::asset('assets/imgs/icon-search.png') }}" class="icon"></a>
			      </li> -->
			    </ul>
			    <ul class="nav-item nav">
			      <li class="nav-item text-right">
			        <!-- <a class="nav-link" href="#"><img src="{{ URL::asset('assets/imgs/icon-search.png') }}" class="icon search"></a> -->
			        <img src="{{ URL::asset('assets/imgs/icon-search.png') }}" class="icon search">
			      </li>
			    </ul>
				</div>
			</div>
		</div>

		<div class="main container">
			<h1 class="page-title">Cards</h1>
			<div class="row align-self-stretch mb-5">
				<div class="col-12 col-lg-8">
					<div class="card with-boxshadow">
						<div id="cardsUI" class="carousel slide" data-ride="carousel">
							<div class="row">
								<div class="col border-right slider-indicator">
									<ul class="carousel-indicators">
								    <li data-target="#cardsUI" data-slide-to="0" class="active"></li>
								    <li data-target="#cardsUI" data-slide-to="1"></li>
								    <li data-target="#cardsUI" data-slide-to="2"></li>
								    <li data-target="#cardsUI" data-slide-to="3"></li>
								  </ul>
								  <button class="btn btn-outline-primary"><i class="fas fa-plus"></i></button>
								</div>
								<div class="col p-0">
									<div class="row">
										<div class="col p-0">
											<div class="carousel-inner">
										    <div class="carousel-item active">
										    	<div class="card-container">
											      <img class="d-block w-100" src="{{ URL::asset('assets/imgs/card-ui.png') }}">
											      <div class="d-flex">
											      	<div class="card-expiry-date"><div class="label">Expiry Date:</div><div class="data">12/2020</div></div>
											      	<div class="card-payment-due text-right"><div class="label">Payment Due:</div><div class="data">Dec 26</div></div>
											      </div>
										    	</div>
										      <div class="option">
										      	<a href="#" class="text-link card-detail">Card Details</a>
										      	<a href="#" class="text-link delete-card">Delete Card</a>
										      	<label class="toggle align-self-end">
															<input type="checkbox" name="allowNotif">
															<span></span>
														</label>
										      </div>
										    </div>
										    <div class="carousel-item">
										    	<div class="card-container">
											      <img class="d-block w-100" src="{{ URL::asset('assets/imgs/card-ui.png') }}">
											      <div class="d-flex">
											      	<div class="card-expiry-date"><div class="label">Expiry Date:</div><div class="data">12/2020</div></div>
											      	<div class="card-payment-due text-right"><div class="label">Payment Due:</div><div class="data">Dec 26</div></div>
											      </div>
										    	</div>
										      <div class="option">
										      	<a href="#" class="text-link card-detail">Card Details</a>
										      	<a href="#" class="text-link delete-card">Delete Card</a>
										      	<label class="toggle align-self-end">
															<input type="checkbox" name="allowNotif">
															<span></span>
														</label>
										      </div>
										    </div>
										    <!-- <div class="carousel-item">
										    	<div class="card-container">
											      <img class="d-block w-100" src="{{ URL::asset('assets/imgs/card-ui.png') }}">
											      <div class="d-flex">
											      	<div class="card-expiry-date"><div class="label">Expiry Date:</div><div class="data">12/2020</div></div>
											      	<div class="card-payment-due text-right"><div class="label">Payment Due:</div><div class="data">Dec 26</div></div>
											      </div>
										    	</div>
										      <div class="option">
										      	<a href="#" class="text-link card-detail">Card Details</a>
										      	<a href="#" class="text-link delete-card">Delete Card</a>
										      	<label class="toggle align-self-end">
															<input type="checkbox" name="allowNotif">
															<span></span>
														</label>
										      </div>
										    </div> -->
										    <!-- <div class="carousel-item">
										    	<div class="card-container">
											      <img class="d-block w-100" src="{{ URL::asset('assets/imgs/card-ui.png') }}">
											      <div class="d-flex">
											      	<div class="card-expiry-date"><div class="label">Expiry Date:</div><div class="data">12/2020</div></div>
											      	<div class="card-payment-due text-right"><div class="label">Payment Due:</div><div class="data">Dec 26</div></div>
											      </div>
										    	</div>
										      <div class="option">
										      	<a href="#" class="text-link card-detail">Card Details</a>
										      	<a href="#" class="text-link delete-card">Delete Card</a>
										      	<label class="toggle align-self-end">
															<input type="checkbox" name="allowNotif">
															<span></span>
														</label>
										      </div>
										    </div> -->
										  </div>
									  </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<div class="card with-boxshadow">
						<div class="info">
							<div class="label">Membership Rewards Points</div>
							<div class="data">763, 625</div>
						</div>
						<div class="offer">
							<div class="label">Suggested Offers</div>
							<div class="data">
								<div class="offer-logo"><img src="{{ URL::asset('assets/imgs/go-daddy.png') }}"></div>
								<p>Get 30% off on Domains, Websites and Hosting. Successful purchase entitles you to 200 reward points. Terms apply.</p>
								<button class="btn btn-tertiary btn-block">Explore</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mb-5">
				<div class="col">
					<div class="card with-boxshadow">
						<div class="row table-title">
							<div class="col">
								<span class="title">Latest Activity</span>
							</div>
							<div class="col text-right">
								<a href="#" class="text-link text-primary">View All Activity</a>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table">
								<thead>
							    <tr>
							      <th scope="col">Date</th>
							      <th scope="col">Transaction Details</th>
							      <th scope="col">Status</th>
							      <th scope="col" class="text-right">Amount</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td>Dec 15, 2018</td>
							      <td>Amazon.com</td>
							      <td>Pending</td>
							      <td class="text-right amount">$ 14.99</td>
							    </tr>
							    <tr>
							      <td>Dec 10, 2018</td>
							      <td>GoDaddy.com</td>
							      <td>Pending</td>
							      <td class="text-right amount">$ 52.99</td>
							    </tr>
							    <tr>
							      <td>Dec 05, 2018</td>
							      <td>WireCard</td>
							      <td>Pending</td>
							      <td class="text-right amount">$ 1.00</td>
							    </tr>
							    <tr>
							      <td>Nov 20, 2018</td>
							      <td>Adobe Websales</td>
							      <td>Completed</td>
							      <td class="text-right amount">$ 12.00</td>
							    </tr>
							    <tr>
							      <td>Nov 15, 2018</td>
							      <td>Adobe Websales</td>
							      <td>Completed</td>
							      <td class="text-right amount">$ 49.00</td>
							    </tr>
							  </tbody>
							</table>
						</div>
						<div class="row table-footer">
							<div class="col text-right">
								<a href="#" class="text-link text-primary">View Dec  15 Statement</a>
								<span class="sep">|</span>
								<a href="#" class="text-link text-primary">Previous Billing Statement</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mb-5">
				<div class="col ">
					<div class="card with-boxshadow promo-card">
						<div class="d-flex align-items-end">
							<div class="promo-image"><img src="{{ URL::asset('assets/imgs/go-daddy.png') }}"></div>
							<div class="promo-text">
								<div class="label">GoDaddy Special Promo Offer</div>
								<div class="data">Get 30% off on Domains, Websites and Hosting. Successful purchase entitles you to 200 reward points. Terms apply.</div>
							</div>
							<button class="btn btn-light">Avail Now</button>
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col ">
					<h2 class="section-title">ViaCarte Offers</h2>
					<div class="card with-boxshadow">
						<ul class="nav nav-tabs nav-pills flex-column flex-sm-row" id="viacarte-offers-tab" role="tablist">
						  <li class="nav-item flex-sm-fill text-center">
						    <a class="nav-link active" id="available-tab" data-toggle="tab" href="#available" role="tab" aria-controls="home" aria-selected="true">Available (100)</a>
						  </li>
						  <li class="nav-item flex-sm-fill text-center">
						    <a class="nav-link" id="addedCart-tab" data-toggle="tab" href="#addedCart" role="tab" aria-controls="addedCart" aria-selected="false">Added to Cart (0)</a>
						  </li>
						  <li class="nav-item flex-sm-fill text-center">
						    <a class="nav-link" id="savings-tab" data-toggle="tab" href="#savings" role="tab" aria-controls="savings" aria-selected="false">Savings</a>
						  </li>
						</ul>
						<div class="tab-content" id="viacarte-offers-tab-content">
						  <div class="tab-pane fade show active" id="available" role="tabpanel" aria-labelledby="available-tab">
						  	<div class="item-block">
						  		<div class="d-flex align-items-start">
										<div class="logo"><img src="{{ URL::asset('assets/imgs/zara.png') }}"></div>
										<div class="item-text">
											<div class="label">Get one additional Reward Points for each dollar you spend.</div>
											<div class="data">Zara</div>
										</div>
										<div class="item-expires">
											<div class="label">Expires</div>
											<div class="data">12/31/2018</div>
										</div>
										<button class="btn btn-light btn-outline-primary">Add to Card</button>
						  		</div>
						  	</div>
						  	<div class="item-block">
						  		<div class="d-flex align-items-start">
										<div class="logo"><img src="{{ URL::asset('assets/imgs/h&m.png') }}"></div>
										<div class="item-text">
											<div class="label">Get one 10 Reward Points for 50 dollar you spend.</div>
											<div class="data">H&M</div>
										</div>
										<div class="item-expires">
											<div class="label">Expires</div>
											<div class="data">12/31/2018</div>
										</div>
										<button class="btn btn-light btn-outline-primary">Add to Card</button>
						  		</div>
						  	</div>
						  	<div class="item-block">
						  		<div class="d-flex align-items-start">
										<div class="logo"><img src="{{ URL::asset('assets/imgs/zara.png') }}"></div>
										<div class="item-text">
											<div class="label">Get one additional Reward Points for each dollar you spend.</div>
											<div class="data">Zara</div>
										</div>
										<div class="item-expires">
											<div class="label">Expires</div>
											<div class="data">12/31/2018</div>
										</div>
										<button class="btn btn-light btn-outline-primary">Add to Card</button>
						  		</div>
						  	</div>
						  	<div class="item-block">
						  		<div class="d-flex align-items-start">
										<div class="logo"><img src="{{ URL::asset('assets/imgs/h&m.png') }}"></div>
										<div class="item-text">
											<div class="label">Get one 10 Reward Points for 50 dollar you spend.</div>
											<div class="data">H&M</div>
										</div>
										<div class="item-expires">
											<div class="label">Expires</div>
											<div class="data">12/31/2018</div>
										</div>
										<button class="btn btn-light btn-outline-primary">Add to Card</button>
						  		</div>
						  	</div>
						  	<div class="item-block">
						  		<div class="d-flex align-items-start">
										<div class="logo"><img src="{{ URL::asset('assets/imgs/zara.png') }}"></div>
										<div class="item-text">
											<div class="label">Get one additional Reward Points for each dollar you spend.</div>
											<div class="data">Zara</div>
										</div>
										<div class="item-expires">
											<div class="label">Expires</div>
											<div class="data">12/31/2018</div>
										</div>
										<button class="btn btn-light btn-outline-primary">Add to Card</button>
						  		</div>
						  	</div>

						  	<div class="pagination-footer">
						  		<ul class="pagination justify-content-center">
								    <li class="page-item active" aria-current="page">
								      <span class="page-link">
								        1
								        <span class="sr-only">(current)</span>
								      </span>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">4</a></li>
								    <li class="page-item"><a class="page-link" href="#">5</a></li>
								    <li class="page-item"><a class="page-link" href="#">6</a></li>
								  </ul>
						  	</div>
						  </div>
						  <div class="tab-pane fade" id="addedCart" role="tabpanel" aria-labelledby="addedCart-tab">
						  	
						  </div>
						  <div class="tab-pane fade" id="savings" role="tabpanel" aria-labelledby="savings-tab">Savings</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<div class="last-login-logged">
		<div class="d-flex justify-content-center">
			<div class="label">Your last login was:</div>
			<div class="data">Fri, Dec 14, 2018 @ 02:57 AM</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row border-bottom">
				<div class="col">
					<span>About</span>
					<ul>
						<li><a href="#">About ViaCarte</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Sitemap</a></li>
					</ul>
				</div>
				<div class="col">
					<span>Services & Products</span>
					<ul>
						<li><a href="#">Credit Cards</a></li>
						<li><a href="#">Corporate Cards</a></li>
						<li><a href="#">Priveledge Cards</a></li>
						<li><a href="#">Reward Cards</a></li>
					</ul>
				</div>
				<div class="col">
					<span>Useful Links</span>
					<ul>
						<li><a href="#">Membership Rewards</a></li>
						<li><a href="#">Credit Scire & Reports</a></li>
						<li><a href="#">Credit Secure</a></li>
					</ul>
				</div>
				<div class="col">
					<span>Additional Infos</span>
					<ul>
						<li><a href="#">Financial Education</a></li>
						<li><a href="#">Card Agreements</a></li>
						<li><a href="#">Financial Education</a></li>
						<li><a href="#">Terms & Policy</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col text-center pt-3 copyright">© 2018 ViaCarte Priveledge Services. All Rights Reserved.</div>
			</div>

		</div>
	</footer>

	<script src="{{ URL::asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>