<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['user_email_address'])) {
    $user_first_name = $_SESSION['user_first_name'];
    $user_last_name = $_SESSION['user_last_name'];
    $user_email_address = $_SESSION['user_email_address'];
    $user_image = $_SESSION['user_image'];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/profesor/css/style.css">
</head>

<body>

    <header id="adaptable-page-header-wrapper">
        <div id="header1" class="above-header stickything">
            <div class="container">
                <nav class="navbar navbar-expand btco-hover-menu">
                    <div id="adaptable-page-header-nav-drawer" data-region="drawer-toggle" class="d-lg-none mr-3">
                        <button id="drawer" aria-expanded="false" aria-controls="nav-drawer" type="button"
                            class="nav-link float-sm-left mr-1" data-side="left">
                            <span class="fas fa-bars" aria-hidden="true"></span>
                            <span class="sr-only">Side panel</span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse">
                        <div class="my-auto m-1"></div>
                        <ul class="navbar-nav ml-auto my-auto">
                        
                            <li class="nav-item dropdown ml-3 ml-md-2 mr-2 mr-md-0">
                                <a class="nav-link my-auto" role="button" href="#" id="usermenu" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" aria-controls="usermenu-dropdown"
                                    aria-label="User menu" title="">
                                    <span
                                        class="d-none d-md-inline-block mx-1 <?php echo isset($userfirstname) && isset($userlastname) ? '' : 'd-none'; ?>">
                                        <?php echo $user_first_name. ' ' . $user_last_name; ?>
                                    </span>
                                    <img src="<?php echo $user_image; ?>" class="userinitials size-35" />
                                    <i class="fas fa-caret-down"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" role="menu" id="usermenu-dropdown"
                                    aria-labelledby="usermenu">
                                    <a class="dropdown-item" href="https://sistemaseducaciononline.uta.edu.ec/my"
                                        title="Dashboard">
                                        <i class="fas fa-tachometer-alt d-none d-md-inline"></i> Personal
                                    </a>
                                    <a class="dropdown-item"
                                        href="https://sistemaseducaciononline.uta.edu.ec/grade/report/overview/index.php"
                                        title="Grades">
                                        <i class="fas fa-book d-none d-md-inline"></i> Cursos
                                    </a>
                                    <a class="dropdown-item"
                                        href="https://sistemaseducaciononline.uta.edu.ec/calendar/view.php"
                                        title="Calendar">
                                        <i class="fas fa-bell d-none d-md-inline"></i> Notificaciones
                                    </a>
                                    <a class="dropdown-item" href="logout.php" title="Log out">
                                        <i class="fas fa-sign-out-alt d-none d-md-inline"></i> Cerrar Sesión
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div id="page-header" class="container d-none d-lg-block">
            <div class="row d-flex justify-content-start align-items-center h-100 ">
                <div class="col-lg-8 p-0">
                    <div class="bd-highlight d-flex">
                        <div class="pb-2 pr-3 pt-2 bd-highlight d-none d-lg-inline-block"><img
                                src="//sistemaseducaciononline.uta.edu.ec/pluginfile.php/1/theme_adaptable/logo/1702489518/sistemas.png"
                                id="logo" alt="Logo"></div>
                    </div>
                    <div id="course-header"></div>
                </div>
                <div class="col-lg-4">
                    <div class="headersearch pagelayoutoriginal d-none d-lg-block float-right">
                        <div id="searchinput-navbar-6591cc801d3596591cc8018f2a22" class="simplesearchform">
                            <div class="collapse" id="searchform-navbar">
                                <form autocomplete="off"
                                    action="https://sistemaseducaciononline.uta.edu.ec/course/search.php" method="get"
                                    accept-charset="utf-8" class="mform form-inline searchform-navbar">
                                    <input type="hidden" name="context" value="2">
                                    <div class="input-group">
                                        <label for="searchinput-6591cc801d3596591cc8018f2a22">
                                            <span class="sr-only">Buscar</span>
                                        </label>
                                        <input type="text" id="searchinput-6591cc801d3596591cc8018f2a22"
                                            class="form-control withclear" placeholder="Course search"
                                            aria-label="Course search" name="q" data-region="input" autocomplete="off">
                                        <a class="btn btn-close" data-action="closesearch" data-toggle="collapse"
                                            href="#searchform-navbar" role="button">
                                            <span class="fas fa-times" aria-hidden="true"></span>
                                            <span class="sr-only">Cerrar</span>
                                        </a>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-submit" data-action="submit">
                                                <span class="fas fa-search" aria-hidden="true"></span>
                                                <span class="sr-only">Buscar Curso</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <a class="btn btn-open rounded-0 nav-link" data-toggle="collapse" data-action="opensearch"
                                href="#searchform-navbar" role="button" aria-expanded="false"
                                aria-controls="searchform-navbar" title="Entrada de busqueda">
                                <i class="fas fa-search"></i>
                                <span class="sr-only">Entrada de busqueda</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="main-navbar" class="d-none d-lg-block">
            <div class="container">
                <div class="navbar navbar-expand btco-hover-menu">
                    <nav aria-label="Site links">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a title="Home" class="nav-link" href="inicioprofesor.php">
                                    <i class="fas fa-home"></i> Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a title="Área Personal" class="nav-link"
                                    href="https://sistemaseducaciononline.uta.edu.ec/my/index.php">
                                    <i class="fas fa-user"></i> Área Personal
                                </a>
                            </li>

                            <li class="nav-item">
                                <a title="Eventos" class="nav-link"
                                    href="https://sistemaseducaciononline.uta.edu.ec/calendar/view.php">
                                    <i class="fas fa-calendar-alt"></i> Eventos
                                </a>
                            </li>

                            <li class="nav-item dropdown my-auto">
                                <a href="#" class="nav-link dropdown-toggle my-auto" role="button" id="main-navigation0"
                                    aria-haspopup="true" aria-expanded="false" aria-controls="dropdownmain-navigation0"
                                    data-target="#" data-toggle="dropdown" title="My courses">
                                    <i class="fas fa-graduation-cap"></i> Mis cursos</a>
                                <ul role="menu" class="dropdown-menu" id="dropdownmain-navigation0"
                                    aria-labelledby="main-navigation0">
                                    <li><a title="CALCULO INTEGRAL - A" class="dropdown-item"
                                            href="https://sistemaseducaciononline.uta.edu.ec/course/view.php?id=230">CALCULO
                                            INTEGRAL - A</a></li>
                                    <li><a title="FUNDAMENTOS DE INGENIERIA DE SOFTWARE - A" class="dropdown-item"
                                            href="https://sistemaseducaciononline.uta.edu.ec/course/view.php?id=229">FUNDAMENTOS
                                            DE INGENIERIA DE SOFTWARE...</a></li>
                                    <li><a title="METODOLOGIA DE LA INVESTIGACION - A" class="dropdown-item"
                                            href="https://sistemaseducaciononline.uta.edu.ec/course/view.php?id=233">METODOLOGIA
                                            DE LA INVESTIGACION - A</a></li>
                                    <li><a title="PROGRAMACION ORIENTADA A OBJETOS - A" class="dropdown-item"
                                            href="https://sistemaseducaciononline.uta.edu.ec/course/view.php?id=231">PROGRAMACION
                                            ORIENTADA A OBJETOS - A</a></li>
                                    <li><a title="SISTEMAS OPERATIVOS - A" class="dropdown-item"
                                            href="https://sistemaseducaciononline.uta.edu.ec/course/view.php?id=268">SISTEMAS
                                            OPERATIVOS - A</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a title="Agregar Curso" class="nav-link"
                                    href="https://sistemaseducaciononline.uta.edu.ec/calendar/view.php">
                                    <i class="fas fa-plus-circle"></i> Agregar Curso
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="navbar-nav ml-auto d-flex flex-wrap">
                    </ul>
                </div>
            </div>
        </div>
    </header>

</body>

</html>