<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Hoopz</title>

	<!-- Bootstrap core CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- MATERIAL ICONS -->
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

	<!-- CUSTOM STYLESHEET -->
	<link rel="stylesheet" href="./style.css">

	<!-- JQUERY JAVASCRIPT -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- For Calendar Plugin -->
	<link href="https://cdn.jsdelivr.net/npm/bulma-calendar@6.0.7/dist/css/bulma-calendar.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bulma-calendar@6.1.18/dist/js/bulma-calendar.min.js"></script>
</head>

<body>
	<div class="mycontainer">
		<aside>
			<div class="top">
				<div class="logo">
					<img src="./images/hoopzlogo.png" alt="">
					<h2 class="danger" style="font-weight: bold">HO<span class="score">OPZ</span></h2>
				</div>
				<div class="close" id="close-btn">
					<span class="material-icons-sharp">close</span>
				</div>
			</div>

			<div class="sidebar">

				<a>
					<span>
						<label for="player-search" class="search-icon">
							<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="30" viewBox="0 0 30 30" style=" fill:#677483;">
								<path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"></path>
							</svg>
						</label>
						<div class="sidenav-search-container mb-3">
							<div class="content-search">
								<label for="player-search">
									<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style=" fill:#677483;">
										<path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
									</svg>
								</label>
							</div>
							<div class="content-search">
								<form class="d-flex" action="search.php">
									<input id="player-search" class="form-control" type="search" placeholder="Search Player" aria-label="Search">
								</form>
							</div>
						</div>
					</span>
				</a>

				<a href="dashboard.php">
					<span class="material-icons-sharp">grid_view</span>
					<h3>Dashboard</h3>
				</a>

				<a href="matches.php">
					<span class="material-icons-outlined">sports_esports</span>
					<h3>Matches</h3>
				</a>

				<a href="#">
					<span class="material-icons-outlined">shopping_bag</span>
					<h3>Purchases</h3>
				</a>

				<a href="logs.php">
					<span class="material-icons-outlined">book</span>
					<h3>Logs</h3>
				</a>

				<a href="#">
					<span class="material-icons-outlined">mail_outline</span>
					<h3>Messages</h3>
					<span class="message-count">26</span>
				</a>

				<a href="#">
					<span class="material-icons-outlined">trending_up</span>
					<h3>Analytics</h3>
				</a>

				<a href="#">
					<span class="material-icons-sharp">settings</span>
					<h3>Settings</h3>
				</a>

				<a id="logoutBtn" class="logout">
					<span class="material-icons-outlined">logout</span>
					<h3>Logout</h3>
				</a>
			</div>
		</aside>

		<!-- END OF ASIDE -->

		<main id="main-body">
			<div class="right">
				<div class="top">
					<button id="menu-btn">
						<span class="material-icons-round">menu</span>
					</button>
					<div class="theme-toggler">
						<span class="material-icons-round">light_mode</span>
						<span class="material-icons-round">dark_mode</span>
					</div>

					<div class="profile">
						<div class="info">
							<p>Welcome, <b>Zenovain</b></p>
							<small class="text-muted"><b class="success">Head of Staff</b></small>
						</div>
						<div class="profile-photo">
							<img src="./images/zenovain.jpg" alt="">
						</div>
					</div>
				</div>
			</div>