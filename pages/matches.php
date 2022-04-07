<!-- CARD DISPLAY TEMPLATE -->
<div id="template" class="">
	<div id="card-template" class="row gx-1 mb-3">
		<!-- LEFT -->
		<div class="col-xl-5 text-center">
			<div id="card-display-left" class="card shadow-sm">
				<div class="card-body">
					<div class="row justify-content-center g-2">
						<div class="col-sm-3">
							<div class="card-body">
								<div class="logo-container">
									<img src="./images/mavericks-logo.png" alt="mavericks-logo">
								</div>
								<p id="team-1-name"></p> Mavericks
								<br>
								<p class="team-1-prescore">48-29</p>
							</div>
						</div>
						<div class="col-2  pt-4">
							<div class="text-decoration-underline  final-score">
								<p id="team-1-finalscore">120</p>
							</div>
						</div>
						<div class="col  pt-4">
							<div class="pt-3">
								FINAL
							</div>
						</div>
						<div class="col-2  pt-4">
							<div class=" final-score">
								<p id="team-2-finalscore">112</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card-body">
								<div class="logo-container">
									<img src="./images/cavaliers-logo.png" alt="cavaliers-logo">
								</div>
								<p id="team-2-name">Cavaliers</p>
								<br>
								<p id="team-2-prescore">48-29</p>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="row g-0">
						<div class="col-sm">
							<div class="foot-btn">
								<p id="match-date">04/05/2022</p>
							</div>
						</div>
						<div class="col-sm">
							<div class="foot-btn foot-btn-center">
								<!-- BOX SCORE -->
							</div>
						</div>
						<div class="col-sm">
							<div class="foot-btn">
								<a href="#">
									GAME DETAILS
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- RIGHT -->
		<div class="col-lg">
			<div class="card shadow-sm">
				<div class="card-body">
					<!-- <p class="text-dark fw-bold">Game Leaders</p> -->
					<table class="table table-responsive-sm table-hover align-middle caption-top">
						<caption class="fw-bold text-dark">Game Leaders</caption>
						<thead>
							<tr>
								<th scope="col">PLAYER</th>
								<th scope="col">PTS</th>
								<th scope="col">REB</th>
								<th scope="col">AST</th>
							</tr>
						</thead>
						<tbody>
							<!-- player-1 -->
							<tr>
								<td scope="row">
									<div class="row g-0">
										<div class="col-sm-1 me-2">
											<img id="player-1-pic" class="pic" src="./images/luka-pic.jpg" alt="Luka">
										</div>
										<div class="col-sm fw-normal">
											<div class="player-info">
												<div class="player-name">
													<p id="player-1-name">Luka Doncic</p>
												</div>
												<div class="player-details">
													<p id="player-1-details">DAL | #77 | F-C</p>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td id="player-1-pts">35</td>
								<td id="player-1-reb">9</td>
								<td id="player-1-ast">13</td>
							</tr>
							<!-- player-2 -->
							<tr>
								<td scope="row">
									<div class="row g-0">
										<div class="col-sm-1 me-2">
											<img id="player-2-pic" class="pic" src="./images/luka-pic.jpg" alt="Luka">
										</div>
										<div class="col-sm fw-normal">
											<div class="player-info">
												<div class="player-name">
													<p id="player-2-name">Luka Doncic</p>
												</div>
												<div class="player-details">
													<p id="player-2-details">DAL | #77 | F-C</p>
												</div>
											</div>
										</div>
									</div>
								</td>
								<td id="player-2-pts">35</td>
								<td id="player-2-reb">9</td>
								<td id="player-2-ast">13</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CARD DISPLAY TEMPLATE-->

<!-- benchmark to stack templates -->
<div id="toStack"></div>

<!-- js to handle dynamic content -->
<script src="./matches.js"></script>