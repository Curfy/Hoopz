<?php
if (!isset($_COOKIE['isLogin'])) {
    header("location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<!-- page content here -->
<div class="content">
    <div class="header">
        <div class="row mb-5 justify-content-between">
            <div class="col-auto">
                <div class="search-wrap">
                    <div class="page-search-expandable-container mb-3">
                        <div class="content-search pt-2 ps-3">
                            <label for="team-search">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style=" fill:#7380ec;">
                                    <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
                                </svg>
                            </label>
                        </div>
                        <div class="content-search">
                            <form class="d-flex" action="search.php">
                                <input id="team-search" class="form-control" type="search" placeholder="Search Team" aria-label="Search">
                            </form>
                        </div>
                        <div class="suggestions page-suggestions d-none">
                            <div class="suggestion-item ">
                                <a href="./search.php">
                                    <img src="./images/luka-pic.jpg" alt="profile-pic" class="suggestion-pic ">
                                    <label id="page-suggestion-1">hello</label>
                                </a>
                            </div>
                            <div class="suggestion-item ">
                                <a href="./search.php">
                                    <img src="./images/luka-pic.jpg" alt="profile-pic" class="suggestion-pic ">
                                    <label id="page-suggestion-2">hello</label>
                                </a>
                            </div>
                            <div class="suggestion-item ">
                                <a href="./search.php">
                                    <img src="./images/luka-pic.jpg" alt="profile-pic" class="suggestion-pic ">
                                    <label id="page-suggestion-3">hello</label>
                                </a>
                            </div>
                            <div class="suggestion-item ">
                                <a href="./search.php">
                                    <img src="./images/luka-pic.jpg" alt="profile-pic" class="suggestion-pic ">
                                    <label id="page-suggestion-4">hello</label>
                                </a>
                            </div>
                            <div class="suggestion-item ">
                                <a href="./search.php">
                                    <img src="./images/luka-pic.jpg" alt="profile-pic" class="suggestion-pic ">
                                    <label id="page-suggestion-5">hello</label>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="date-container">
                    <div type="date"></div>
                    <!-- <div placeholder="" readonly="readonly" class="" type="date"></div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- CARD DISPLAY TEMPLATE -->
    <div id="template" class="d-none">
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
                                            <div class="col-auto me-2">
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
                                            <div class="col-auto me-2">
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

    <nav>
        <ul class="page-group">
            <a href="#">
                <li class="group-item">
                    < </li>
            </a>
            <a href="#">
                <li class="group-item selected">1</li>
            </a>
            <a href="#">
                <li class="group-item">2</li>
            </a>
            <a href="#">
                <li class="group-item">3</li>
            </a>
            <a href="#">
                <li class="group-item"> > </li>
            </a>
        </ul>
    </nav>

    <div class="m-5"><br>
    </div>
</div>

</main>
<!-- END OF MAIN -->
</div>

<script src="./index.js"></script>
<script src="../js/logout.js"></script>
<script src="./matches.js"></script>
</body>

</html>