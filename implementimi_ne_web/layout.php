<?php
$current_page = isset($_GET["page"]) ? $_GET["page"] : "home"; ?>
<!-- layout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>fitness app</title>
</head>
<body>
<div class="dashboard">
    <aside class="search-wrap">
        <div class="search">
            <form id="searchForm" action="index.php" method="GET">
            <input type="hidden" name="page" value="programs">
            <label for="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
                <input type="text" id="search" name="search" placeholder="Search..." value="<?php echo isset(
                    $_GET["search"]
                )
                    ? htmlspecialchars($_GET["search"])
                    : ""; ?>">
            </label>
            </form>
        </div>
        
        <div class="user-actions">
            <button>
                <a href="logout.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"/><path d="M11 2h2v10h-2z"/></svg></a>
            </button>
        </div>
    </aside>
    
    <header class="menu-wrap">
        <figure class="user">
            <div class="user-avatar">
                <img src="https://ui-avatars.com/api/?name=root" alt="Root">
            </div>
            <figcaption>
                Root
            </figcaption>
        </figure>
    
        <nav>
            <section class="dicover">
                <h3>Dashboard</h3>
                
                <ul>
                    <li> 
                        <a class="<?php echo $current_page == "home"
                            ? "active"
                            : ""; ?>" href="index.php?page=home" href="index.php?page=home">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
                            Home
                        </a>
                    </li>
                    
                    <li>
                        <a class="<?php echo $current_page == "programs"
                            ? "active"
                            : ""; ?>" href="index.php?page=programs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.353 2.355-6.049-.002-8.416zm-1.412 7.002L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002 1.563 1.571 1.564 4.025.002 5.588z"/></svg>
                            Training Programs
                        </a>
                    </li>
                    
                    <li>
                        <a class="<?php echo $current_page == "excercises"
                            ? "active"
                            : ""; ?>" href="index.php?page=excercises">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 2.293A.996.996 0 0 0 12 2H3a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l9 9a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414l-9-9zM12 19.586l-8-8V4h7.586l8 8L12 19.586z"/><circle cx="7.507" cy="7.505" r="1.505"/></svg>
                            Excercise Library
                        </a>
                    </li>
                    
                    <li>
                        <a class="<?php echo $current_page == "clients"
                            ? "active"
                            : ""; ?>" href="index.php?page=clients">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.707 19.707L12 13.414l4.461 4.461L14.337 20H20v-5.663l-2.125 2.124L13.414 12l4.461-4.461L20 9.663V4h-5.663l2.124 2.125L12 10.586 5.707 4.293 4.293 5.707 10.586 12l-6.293 6.293z"/></svg>
                            Clients
                        </a>
                    </li>
                </ul>
            </section>
    
            
            <section class="dicover">
                <h3>Finance</h3>
                
                <ul>		
                    <li>
                        <a class="<?php echo $current_page == "payments"
                            ? "active"
                            : ""; ?>" href="index.php?page=payments">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21,3h-4V2h-2v1H9V2H7v1H3C2.447,3,2,3.447,2,4v17c0,0.553,0.447,1,1,1h18c0.553,0,1-0.447,1-1V4C22,3.447,21.553,3,21,3z M7,5v1h2V5h6v1h2V5h3v3H4V5H7z M4,20V10h16v10H4z"/><path d="M11,15.586l-1.793-1.793l-1.414,1.414l2.5,2.5C10.488,17.902,10.744,18,11,18s0.512-0.098,0.707-0.293l5-5l-1.414-1.414 L11,15.586z"/></svg>
                            Payment Records
                        </a>
                    </li>
                </ul>
            </section>
        </nav>
    </header>
    
    <div class="content-wrap">
        <?php include "content.php"; ?>
    </div>
</div>
</body>
</html>