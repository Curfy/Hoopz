<?php
if (!isset($_COOKIE['isLogin'])) {
    header("location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href = "https://cdn.jsdelivr.net/npm/bulma-calendar@6.0.7/dist/css/bulma-calendar.min.css" rel="stylesheet">
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
                        <form action="search.php">
                            <div class="row g-1 mb-2">
                                <div class="col-auto">
                                    <label for="search-player" class="search-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="30" viewBox="0 0 30 30" style=" fill:#677483;">
                                            <path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z"></path>
                                        </svg>
                                    </label>
                                </div>
                                <div class="col">
                                    <div class="search-bar-container">
                                        <input id="search-player" type="text" placeholder="Search Player" class="search-bar search-width-100">
                                    </div>
                                </div>
                            </div>
                        </form>
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
                <h1 class="ps-5">Zenovain</h1>
                <!-- <div class="text">
                    <input type="text" placeholder="Search Player">
                </div> -->
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

            <div class="content">
                <div class="profile-header">
                    <div class="profile-header-content">
                        <div class="row">
                            <div class="col-auto">
                                <div class="profile-pic-container">
                                    <img class="search-profile-pic" src="images/zenovain.jpg" alt="Profile-pic">
                                    <div class="profile-icon-container">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <div class="profile-icon-badge">
                                                    <img src="./images/mythic-logo.png" alt="badge">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <br>
                                                <div class="profile-icon-num">
                                                    <span>5967</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm text-light">
                                <h1>Zenovain</h1>
                                <button class="btn btn-neutral">Up to Date</button>
                                <button class="btn btn-favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style=" fill:#ffbb55;">
                                        <path d="M 6.0097656 2 C 4.9143111 2 4.0097656 2.9025988 4.0097656 3.9980469 L 4 22 L 12 19 L 20 22 L 20 20.556641 L 20 4 C 20 2.9069372 19.093063 2 18 2 L 6.0097656 2 z M 6.0097656 4 L 18 4 L 18 19.113281 L 12 16.863281 L 6.0019531 19.113281 L 6.0097656 4 z"></path>
                                    </svg>
                                    Favorite
                                </button>
                                <br>
                                <div class="mt-3">
                                    Last Updated: 1 min ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-bottom">
                        <button class="profile-btn active">Overview</button>
                        <button class="profile-btn">Matches</button>
                    </div>
                </div>
                <div class="profile-details mt-2">
                    <div class="row g-2">
                        <div class="col">
                            <div class="card-body">
                                <div class="">
                                    <button class="sort-btn selected">All</button>
                                    <button class="sort-btn">1v1</button>
                                    <button class="sort-btn">2v2</button>
                                    <button class="sort-btn">3v3</button>
                                    <button class="sort-btn">4v4</button>
                                </div>
                                <hr>
                                <div>Match history (218 matches)</div>
                            </div>
                            <!-- CARDS TEMPLATE -->
                            <div id="template" class="d-none">
                                <div id="card-template" class="mt-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="card-accordion">
                                                <div class="card-display ps-5 card-body">
                                                    <div class="row justify-content-between">
                                                        <div class="col-auto">
                                                            <div class="row">
                                                                <div class="col-auto">
                                                                    <h2 class="status">default</h2>
                                                                    <h4>5V5</h4>
                                                                    <h4>04/04/2022</h4>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <img src="./images/zenovain.jpg" alt="profile-pic" class="card-pic">
                                                                </div>
                                                                <div class="col">
                                                                    <br>
                                                                    <h4 class="neutral fw-bold">Zenovain</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <!-- <h2 class="victory text-center pt-4">21-10</h2> -->
                                                            <h2 class="score text-center pt-4">
                                                                <span class="player-score">21</span>-<span class="enemy-score">10</span>
                                                            </h2>
                                                        </div>
                                                        <div class="col-md">
                                                            <div class="row row-cols-2 g-3 text-end">
                                                                <div class="col">
                                                                    <img src="images/phronex.png" alt="profile-pic" class="pic enemy-pic">
                                                                    White horse
                                                                </div>
                                                                <div class="col">
                                                                    <img src="images/phronex.png" alt="profile-pic" class="pic enemy-pic">
                                                                    White horse
                                                                </div>
                                                                <div class="col">
                                                                    <img src="images/phronex.png" alt="profile-pic" class="pic enemy-pic">
                                                                    White horse
                                                                </div>
                                                                <div class="col">
                                                                    <img src="images/phronex.png" alt="profile-pic" class="pic enemy-pic">
                                                                    White horse
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="mydropdown" value="card-template-collapse">
                                                <img src="https://img.icons8.com/ios/50/ffffff/expand-arrow--v1.png" class="dropdown-pic" alt="dropdown-icon" />
                                            </button>
                                        </div>
                                    </div>
                                    <div id="card-template-collapse" class="accordion-hidden">
                                        <div class="card-collapse card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime tempora laudantium rem? Temporibus totam nostrum necessitatibus, ab dolorem natus! Aliquam placeat vitae libero explicabo sint quod quidem aspernatur similique ipsa? Placeat blanditiis quo quos similique deserunt, est doloremque iure repellendus nemo ullam hic earum pariatur. Quos quasi labore, quas et laboriosam maiores soluta eaque ipsa eum accusamus incidunt nihil esse?</div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF CARDS TEMPLATE -->

                            <!-- benchmark to stack template  -->
                            <div id="toStack"></div>

                            <nav>
                                <ul class="page-group">
                                    <a href="#">
                                        <li class="group-item"> < </li>
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
                        </div>
                        <div id="column-stat" class="col-lg-3">
                            <div class="card-body">
                                <div class="row m-3">
                                    <div class="col-auto">
                                        <img src="./images/mythic-logo.png" class="rank-logo" alt="rank-logo">
                                    </div>
                                    <div class="col">
                                        <h4 class="fw-bold">Tier</h4>
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <h2 class="defeat">Mythic</h2>
                                            </div>
                                            <div class="col text-end">
                                                <h4>1814 LP</h4>
                                            </div>
                                        </div>
                                        <div class="bar">
                                            <div id="bar-tier" class="bar-fill"></div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <h4>0.000001%</h4>
                                            </div>
                                            <div class="col text-end">
                                                <h4>#1</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body statistics p-3 pt-0">
                                <div class="row row-cols-2 g-4 justify-content-between">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <h5 class="victory">Wins</h5>
                                            </div>
                                            <div class="col text-end">
                                                <h5 id="stat-wins">1814 LP</h5>
                                            </div>
                                        </div>
                                        <div class="bar">
                                            <div id="bar-wins" class="bar-fill"></div>
                                        </div>
                                        <h4 id="percent-wins">Top 69%</h4>
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <h5>Win Rate</h5>
                                            </div>
                                            <div class="col text-end">
                                                <h5 id="stat-win-rate">1814 LP</h5>
                                            </div>
                                        </div>
                                        <div class="bar">
                                            <div id="bar-win-rate" class="bar-fill bar-fill-dark"></div>
                                        </div>
                                        <h4 id="percent-win-rate">Top 69%</h4>
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <h5>Losses</h5>
                                            </div>
                                            <div class="col text-end">
                                                <h5 id="stat-losses">1814 LP</h5>
                                            </div>
                                        </div>
                                        <div class="bar">
                                            <div id="bar-losses" class="bar-fill bar-fill-dark"></div>
                                        </div>
                                        <h4 id="percent-losses">Top 69%</h4>
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <h5>Shoot Rate</h5>
                                            </div>
                                            <div class="col text-end">
                                                <h5 id="stat-shoot-rate">1814 LP</h5>
                                            </div>
                                        </div>
                                        <div class="bar">
                                            <div id="bar-shoot-rate" class="bar-fill bar-fill-dark"></div>
                                        </div>
                                        <h4 id="percent-shoot-rate">Top 69%</h4>
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <h5>Streak</h5>
                                            </div>
                                            <div class="col text-end">
                                                <h5 id="stat-streak">1814 LP</h5>
                                            </div>
                                        </div>
                                        <div class="bar">
                                            <div id="bar-streak" class="bar-fill bar-fill-dark"></div>
                                        </div>
                                        <h4 id="percent-streak">Top 69%</h4>
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <h5>Ave Rank</h5>
                                            </div>
                                            <div class="col text-end">
                                                <h5 id="stat-ave">1814 LP</h5>
                                            </div>
                                        </div>
                                        <div class="bar">
                                            <div id="bar-ave" class="bar-fill bar-fill-dark"></div>
                                        </div>
                                        <h4 id="percent-ave">Top 69%</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-5"><br></div>
        </main>
        <!-- END OF MAIN -->
    </div>

    <script src="./index.js"></script>
    <script src="../js/logout.js"></script>
    <script src="./search.js"></script>
</body>

</html>