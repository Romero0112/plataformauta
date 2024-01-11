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

                            <li class="nav-item navbarsearchsocial mx-md-1 my-auto d-md-block d-lg-none my-auto">
                                <div id="searchinput-navbar-6591cc801d1056591cc8018f2a21" class="simplesearchform">
                                    <div class="collapse" id="searchform-navbar">
                                        <form autocomplete="off"
                                            action="https://sistemaseducaciononline.uta.edu.ec/course/search.php"
                                            method="get" accept-charset="utf-8"
                                            class="mform form-inline searchform-navbar">
                                            <input type="hidden" name="context" value="2">
                                            <div class="input-group">
                                                <label for="searchinput-6591cc801d1056591cc8018f2a21">
                                                    <span class="sr-only">Course search</span>
                                                </label>
                                                <input type="text" id="searchinput-6591cc801d1056591cc8018f2a21"
                                                    class="form-control withclear" placeholder="Course search"
                                                    aria-label="Course search" name="q" data-region="input"
                                                    autocomplete="off">
                                                <a class="btn btn-close" data-action="closesearch"
                                                    data-toggle="collapse" href="#searchform-navbar" role="button">
                                                    <span class="fas fa-times" aria-hidden="true"></span>
                                                    <span class="sr-only">Close</span>
                                                </a>
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-submit" data-action="submit">
                                                        <span class="fas fa-search" aria-hidden="true"></span>
                                                        <span class="sr-only">Course search</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <a class="btn btn-open rounded-0 nav-link" data-toggle="collapse"
                                        data-action="opensearch" href="#searchform-navbar" role="button"
                                        aria-expanded="false" aria-controls="searchform-navbar"
                                        title="Toggle search input">
                                        <span class="fas fa-search" aria-hidden="true"></span>
                                        <span class="sr-only">Toggle search input</span>
                                    </a>
                                </div>
                            </li>

                            <li id="nav-popover-container" class="my-auto mx-md-1 d-flex">
                                <div class="popover-region collapsed popover-region-notifications"
                                    id="nav-notification-popover-container" data-userid="193"
                                    data-region="popover-region">
                                    <div class="popover-region-toggle nav-link icon-no-margin"
                                        data-region="popover-region-toggle" role="button"
                                        aria-controls="popover-region-container-6591cc801dddb6591cc8018f2a23"
                                        aria-haspopup="true"
                                        aria-label=" Show notification window with no new notifications   "
                                        tabindex="0">
                                        <span class="fas fa-bell" title="Toggle notifications menu" role="img"
                                            aria-label="Toggle notifications menu"></span>
                                        <div class="count-container hidden" data-region="count-container"
                                            aria-hidden=true>
                                            0
                                        </div>

                                    </div>
                                    <div id="popover-region-container-6591cc801dddb6591cc8018f2a23"
                                        class="popover-region-container" data-region="popover-region-container"
                                        aria-expanded="false" aria-hidden="true" aria-label="Notification window"
                                        role="region">
                                        <div class="popover-region-header-container">
                                            <h3 class="popover-region-header-text"
                                                data-region="popover-region-header-text">Notifications</h3>
                                            <div class="popover-region-header-actions"
                                                data-region="popover-region-header-actions"> <a
                                                    class="mark-all-read-button" href="#" title="Mark all as read"
                                                    data-action="mark-all-read" role="button"
                                                    aria-label="Mark all as read">
                                                    <span class="normal-icon"><span class="fas fa-check"
                                                            aria-hidden="true"></span></span>
                                                    <span class="loading-icon icon-no-margin"><span
                                                            class="fas fa-circle" title="Loading" role="img"
                                                            aria-label="Loading"></span></span>
                                                </a>
                                                <a href="https://sistemaseducaciononline.uta.edu.ec/message/notificationpreferences.php"
                                                    title="Notification preferences"
                                                    aria-label="Notification preferences">
                                                    <span class="fas fa-cog" aria-hidden="true"></span></a>
                                            </div>
                                        </div>
                                        <div class="popover-region-content-container"
                                            data-region="popover-region-content-container">
                                            <div class="popover-region-content" data-region="popover-region-content">
                                                <div class="all-notifications" data-region="all-notifications"
                                                    role="log" aria-busy="false" aria-atomic="false"
                                                    aria-relevant="additions"></div>
                                                <div class="empty-message" tabindex="0" data-region="empty-message">You
                                                    have no notifications</div>

                                            </div>
                                            <span class="loading-icon icon-no-margin"><span class="fas fa-circle"
                                                    title="Loading" role="img" aria-label="Loading"></span></span>
                                        </div>
                                        <a class="see-all-link"
                                            href="https://sistemaseducaciononline.uta.edu.ec/message/output/popup/notifications.php">
                                            <div class="popover-region-footer-container">
                                                <div class="popover-region-seeall-text">See all</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="pull-right popover-region popover-region-messages collapsed">
                                    <a id="message-drawer-toggle-6591cc801e6216591cc8018f2a24"
                                        class="nav-link d-inline-block popover-region-toggle position-relative" href="#"
                                        role="button">
                                        <span class="fas fa-comment" title="Toggle messaging drawer" role="img"
                                            aria-label="Toggle messaging drawer"></span>
                                        <div class="count-container hidden" data-region="count-container"
                                            aria-label="There are 0 unread conversations">0</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown ml-3 ml-md-2 mr-2 mr-md-0">
                                <a class="nav-link my-auto" role="button" href="#" id="usermenu" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" aria-controls="usermenu-dropdown"
                                    aria-label="User menu" title="">
                                    <span
                                        class="d-none d-md-inline-block mx-1 <?php echo isset($userfirstname) && isset($userlastname) ? '' : 'd-none'; ?>">
                                        <?php echo $user_first_name . ' ' . $user_last_name; ?>
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
                                            <span class="sr-only">Course search</span>
                                        </label>
                                        <input type="text" id="searchinput-6591cc801d3596591cc8018f2a22"
                                            class="form-control withclear" placeholder="Course search"
                                            aria-label="Course search" name="q" data-region="input" autocomplete="off">
                                        <a class="btn btn-close" data-action="closesearch" data-toggle="collapse"
                                            href="#searchform-navbar" role="button">
                                            <span class="fas fa-times" aria-hidden="true"></span>
                                            <span class="sr-only">Close</span>
                                        </a>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-submit" data-action="submit">
                                                <span class="fas fa-search" aria-hidden="true"></span>
                                                <span class="sr-only">Course search</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <a class="btn btn-open rounded-0 nav-link" data-toggle="collapse" data-action="opensearch"
                                href="#searchform-navbar" role="button" aria-expanded="false"
                                aria-controls="searchform-navbar" title="Toggle search input">
                                <i class="fas fa-search"></i>
                                <span class="sr-only">Toggle search input</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true"
            tabindex="-1">
            <div id="nav-drawer-inner">
                <nav class="list-group">
                    <ul class="list-unstyled components">
                        <li class="m-l-0">
                            <a class="list-group-item list-group-item-action"
                                href="https://sistemaseducaciononline.uta.edu.ec/?redirect=0" data-key=""
                                data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1"
                                data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0"
                                data-preceedwithhr="0" data-parent-key="main-navigation-drawer">
                                <div class="m-l-0">Inicio</div>
                            </a>
                        </li>
                        <li class="m-l-0">
                            <a class="list-group-item list-group-item-action"
                                href="https://sistemaseducaciononline.uta.edu.ec/my/index.php" data-key=""
                                data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1"
                                data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0"
                                data-preceedwithhr="0" data-parent-key="main-navigation-drawer">
                                <div class="m-l-0">Area Personal</div>
                            </a>
                        </li>
                        <li class="m-l-0">
                            <a class="list-group-item list-group-item-action"
                                href="https://sistemaseducaciononline.uta.edu.ec/calendar/view.php" data-key=""
                                data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="1"
                                data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0"
                                data-preceedwithhr="0" data-parent-key="main-navigation-drawer">
                                <div class="m-l-0">Eventos</div>
                            </a>
                        </li>
                        <li class="m-l-0">
                            <a href="#main-navigation-drawer1" class="list-group-item dropdown-toggle"
                                aria-haspopup="true" data-target="#" data-toggle="collapse" title="My courses">Mis
                                cursos</a>
                            <ul class="collapse" id="main-navigation-drawer1">
                                <li class="m-l-1">
                                    <a class="list-group-item list-group-item-action"
                                        href="https://sistemaseducaciononline.uta.edu.ec/course/view.php?id=230"
                                        data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0"
                                        data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1"
                                        data-isactive="1" data-hidden="0" data-preceedwithhr="0"
                                        data-parent-key="main-navigation-drawer1">
                                        <div class="m-l-1">CALCULO INTEGRAL - A</div>
                                    </a>
                                </li>
                                <li class="m-l-1">
                                    <a class="list-group-item list-group-item-action"
                                        href="https://sistemaseducaciononline.uta.edu.ec/course/view.php?id=229"
                                        data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0"
                                        data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1"
                                        data-isactive="1" data-hidden="0" data-preceedwithhr="0"
                                        data-parent-key="main-navigation-drawer1">
                                        <div class="m-l-1">FUNDAMENTOS DE INGENIERIA DE SOFTWARE...</div>
                                    </a>
                                </li>
                                <li class="m-l-1">
                                    <a class="list-group-item list-group-item-action"
                                        href="https://sistemaseducaciononline.uta.edu.ec/course/view.php?id=231"
                                        data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0"
                                        data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1"
                                        data-isactive="1" data-hidden="0" data-preceedwithhr="0"
                                        data-parent-key="main-navigation-drawer1">
                                        <div class="m-l-1">PROGRAMACION ORIENTADA A OBJETOS - A</div>
                                    </a>
                                </li>
                                <li class="m-l-1">
                                    <a class="list-group-item list-group-item-action"
                                        href="https://sistemaseducaciononline.uta.edu.ec/course/view.php?id=268"
                                        data-key="" data-isexpandable="0" data-indent="1" data-showdivider="0"
                                        data-type="1" data-nodetype="1" data-collapse="0" data-forceopen="1"
                                        data-isactive="1" data-hidden="0" data-preceedwithhr="0"
                                        data-parent-key="main-navigation-drawer1">
                                        <div class="m-l-1">SISTEMAS OPERATIVOS - A</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>

                        </li>
                    </ul>
                </nav>

                <nav class="list-group m-t-1">

                </nav>
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