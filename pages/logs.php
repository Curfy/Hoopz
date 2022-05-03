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
        <div class="row gx-0 gy-3">
            <div class="col-lg-4">
                <div class="border-card">
                    <div class="logs-header">
                        <h1 class="pb-3">Admin-Logs</h1>
                        <div class="content-search-container mb-3">
                            <div class="content-search pt-2 ps-3">
                                <label for="username-search">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style=" fill:#7380ec;">
                                        <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
                                    </svg>
                                </label>
                            </div>
                            <div class="content-search">
                                <form class="d-flex" action="search.php">
                                    <input id="username-search" class="form-control" type="search" placeholder="Search Username" aria-label="Search">
                                </form>
                            </div>
                        </div>

                        <button class="logs-btn-tab selected">Admin</button>
                        <button class="logs-btn-tab">Exploit</button>
                        <button class="logs-btn-tab">Purchase</button>
                    </div>
                    <div class="logs-card-container">
                        <!-- END OF CARDS TEMPLATE -->
                        <div class="template d-none">
                            <div id="card-template-log" class="logs-card">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="images/phronex.png" class="card-pic" alt="player-pic">
                                    </div>
                                    <div class="col">
                                        <h4 class="fw-bold">OnlyTwentyCharacters</h4>
                                        <h4 class="defeat fw-bold">Banned: 1d</h4>
                                        <h4>Reason: Toxic Activity</h4>
                                        <div class="float-time">
                                            20m
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF CARDS TEMPLATE -->

                        <!-- benchmark to stack template for logs  -->
                        <div id="toStackLog"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border-card">
                    <div class="logs-header">
                        <h1 class="pb-3">Staff Moderator</h1>
                    </div>
                    <div class="logs-card-container">
                        <!-- END OF CARDS TEMPLATE -->
                        <div class="template d-none">
                            <div id="card-template-mod" class="logs-card ps-5 p-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="images/zenovain.jpg" class="card-pic" alt="player-pic">
                                    </div>
                                    <div class="col">
                                        <h3 class="fw-bold">WhiteHairs</h3>
                                        <h4 class="defeat fw-bold">Banned: 1d</h4>
                                        <h4>Reason: Toxic Activity</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF CARDS TEMPLATE -->

                        <!-- benchmark to stack template for mods  -->
                        <div id="toStackMod"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
<!-- END OF MAIN -->
</div>

<script src="./index.js"></script>
<script src="../js/logout.js"></script>
<script src="logs.js"></script>
</body>

</html>