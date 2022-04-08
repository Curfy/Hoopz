<div class="card calendar mb-5 test">
	<!-- <input id="myCalendar" class="test" type="date" data-display-mode="block" data-close-on-select="true"> -->
	<div type="date"></div>
</div>

<!-- CARD DISPLAY TEMPLATE -->
<div id="template" class="">
	<div id="card-template" class="row gx-1 mb-4">
		<!-- LEFT -->
		<div class="col-xl-5 text-center">
			<div id="card-display-left" class="card shadow-sm">
				<div class="card-body">
					<div class="row justify-content-center g-2">
						<div class="col-3">
							<div>
								<div class="logo-container">
									<img src="./images/mavericks-logo.png" class="logo" alt="mavericks-logo">
								</div>
								<label id="team-1-name">Mavericks</label>
								<br>
								<label class="team-1-prescore">48-29</label>
							</div>
						</div>
						<div class="col-2  pt-5">
							<div class="final-score">
								<p id="team-1-finalscore" class="text-decoration-underline">120</p>
							</div>
						</div>
						<div class="col pt-5">
							<p class="pt-3  align-middle">
								FINAL
							</p>
						</div>
						<div class="col-2  pt-5">
							<div class="final-score">
								<p id="team-2-finalscore">112</p>
							</div>
						</div>
						<div class="col-3">
							<div>
								<div class="logo-container">
									<img src="./images/cavaliers-logo.png" class="logo" alt="cavaliers-logo">
								</div>
								<label id="team-2-name">Cavaliers</label>
								<br>
								<label id="team-2-prescore">48-29</label>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="row g-0 justify-content-between">
						<div class="col">
							<div class="foot-btn">
								<label id="match-date" class="align-middle">04/05/2022</label>
							</div>
						</div>
						<div class="col">
							<div class="foot-btn">
								<a href="#" class="align-middle">
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
			<div id="card-display-right" class="card shadow-sm">
				<div class="card-body">
					<table class="table table-responsive-sm align-middle caption-top">
						<caption>Game Leaders</caption>
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
										<div class="col fw-normal">
											<div class="player-info">
												<div class="player-name">
													<label id="player-1-name">Luka Doncic</label>
												</div>
												<div class="player-details">
													<label id="player-1-details">DAL | #77 | F-C</label>
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
										<div class="col fw-normal">
											<div class="player-info">
												<div class="player-name">
													<label id="player-2-name">Luka Doncic</label>
												</div>
												<div class="player-details">
													<label id="player-2-details">DAL | #77 | F-C</label>
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

<!-- js to handle dynamic content and calendar -->
<script src="./matches.js"></script>