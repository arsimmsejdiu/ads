<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../assets/images/logo.png" type="image/png" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" type="image/jpg" href="assets/img/favicon.png" />
  <link rel="stylesheet" href="../assets/css/reset.css" />
  <link rel="stylesheet" href="../assets/css/layout.css" />
  <link rel="stylesheet" href="../assets/css/skeletons.css" />
  <link rel="stylesheet" href="../assets/css/dashboard.css" />
</head>

<body>
  <header class="fixed-topbar">
    <div class="search-wrapper">
      <input class="search-input" placeholder="Search" />
      <button class="search-button uil uil-search"></button>
    </div>
  </header>

  <label for="global-input" class="fixed-burger">
    <input type="checkbox" id="global-input" name="global-input" />
    <div class="fixed-overlay"></div>
    <aside class="fixed-drawer">
      Sidebar
    </aside>
    <span class="author-block">
      <img class="author-img" src="../assets/images/hacker.png" />
      <span class="author-stack">
        <span class="author-title">
          Arsim Sejdiu
        </span>
        <!-- <span class="author-subtitle">
            @frontendjoe
          </span> -->
      </span>
      <a href="../index.php"><span class="author-arrow-icon uil uil-angle-right"></span></a>
    </span>
  </label>

  <aside class="fixed-navbar">
    <header class="fixed-navbar-header">
      <span class="fixed-navbar-logo"><a href="../index.php"><img src="../assets/images/logo.png" /></a></span>
    </header>
    <nav class="fixed-navbar-nav">
      <button class="fixed-navbar-button">
        <span class="fixed-navbar-icon uil uil-pen"></span>
      </button>
      <button class="fixed-navbar-button">
        <span class="fixed-navbar-icon uil uil-plus"></span>
      </button>
      <button class="fixed-navbar-button">
        <span class="fixed-navbar-icon uil uil-setting"></span>
      </button>
    </nav>
    <footer class="fixed-navbar-footer">
      <button class="fixed-navbar-button">
        <span class="fixed-navbar-icon uil uil-sign-out-alt"></span>
      </button>
    </footer>
  </aside>

  <button class="fixed-scrolltop">
    <span class="fixed-scrolltop-icon uil uil-arrow-up"></span>
  </button>
</body>

</html>