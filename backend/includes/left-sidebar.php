<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">


            <a class="nav-link collapsed pt-4 " href="index.php">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                <?php echo ($lang == "fr" ?  "Tableau de bord" : "Dashboard"); ?>

            </a>
            <a class="nav-link collapsed pt-4 " href="users.php">
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                <?php echo ($lang == "fr" ?  "Utilisateurs" : "Users"); ?>
            </a>
            <a class="nav-link collapsed pt-4" href="messages.php">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                 <?php echo ($lang == "fr" ?  "Messages" : "Messages"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Adult.php">
                <div class="nav-link-icon"><i data-feather="home"></i></div>
                <?php echo ($lang == "fr" ?  "Adultes" : "Adultes"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Classes.php">
                <div class="nav-link-icon"><i data-feather="book"></i></div>
                 <?php echo ($lang == "fr" ?  "Classes" : "Classes"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Club.php">
                <div class="nav-link-icon"><i data-feather="send"></i></div>
                <?php echo ($lang == "fr" ?  "Club" : "Club"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Evenement.php">
                <div class="nav-link-icon"><i data-feather="calendar"></i></div>
                <?php echo ($lang == "fr" ?  "Evenements" : "Events"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Kid.php">
                <div class="nav-link-icon"><i data-feather="smile"></i></div>
                <?php echo ($lang == "fr" ?  "Kid" : "Kid"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Formateur.php">
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                <?php echo ($lang == "fr" ?  "Formateurs" : "Trainers"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Cours.php">
                <div class="nav-link-icon"><i data-feather="book-open"></i></div>
                <?php echo ($lang == "fr" ?  "Cours" : "Course"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Livraison.php">
                <div class="nav-link-icon"><i data-feather="shopping-bag"></i></div>
                <?php echo ($lang == "fr" ?  "Livraison" : "Delivery"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Commandes.php">
                <div class="nav-link-icon"><i data-feather="shopping-cart"></i></div>
                <?php echo ($lang == "fr" ?  "Commandes" : "Orders"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Recette.php">
                <div class="nav-link-icon"><i data-feather="book-open"></i></div>
                <?php echo ($lang == "fr" ?  "Recettes" : "Recipes"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="Chefs.php">
                <div class="nav-link-icon"><i data-feather="star"></i></div>
                <?php echo ($lang == "fr" ?  "Chefs" : "Chefs"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="categorie.php">
                <div class="nav-link-icon"><i data-feather="book"></i></div>
                <?php echo ($lang == "fr" ?  "Categories" : "Categories"); ?>
            </a>
            <a class="nav-link collapsed pt-4 " href="reservation.php">
                <div class="nav-link-icon"><i data-feather="square"></i></div>
                <?php echo ($lang == "fr" ?  "Reservation" : "Booking"); ?>
            </a>

        </div>
    </div>




    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle"><?php echo ($lang == "fr" ?  "Connecté en tant que:" : "Logged in as:"); ?></div>
            <?php
            if (isset($_COOKIE['_uid_'])) {
                $user_id = base64_decode($_COOKIE['_uid_']);
            } else if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
            } else {
                $user_id = -1;
            }
            $sql = "SELECT * FROM users WHERE user_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':id' => $user_id
            ]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $user_name = $user['user_name'];
            ?>
            <div class="sidenav-footer-title"><?php echo $user_name; ?></div>
        </div>
    </div>



</nav>