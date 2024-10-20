<?php
    // Get the current file name
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                <a class="nav-link" href="index.php">Dashboard</a>
            </li>
            <li class="nav-item <?php echo ($current_page == 'query.php') ? 'active' : ''; ?>">
                <a class="nav-link" href="query.php">For query</a>
            </li>
            <li class="nav-item <?php echo ($current_page == 'view.php') ? 'active' : ''; ?>">
                <a class="nav-link" href="view.php">Resources</a>
            </li>
            <li class="nav-item <?php echo ($current_page == 'add-photo.php') ? 'active' : ''; ?>">
                <a class="nav-link" href="add-photo.php">Add Resources</a>
            </li>
            <li class="nav-item <?php echo ($current_page == 'logout.php') ? 'active' : ''; ?>">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
