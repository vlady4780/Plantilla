<div class="navbar-lateral full-reset">
    <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                sistema bibliotecario
            </div>
        <div class="nav-lateral-divider full-reset"></div>
        <div class="full-reset" style="padding: 10px 0; color:#fff;">
            <figure>
                <img src="<?= BASE_URL(); ?>Assets/img/book.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
            </figure>
            <p class="text-center" style="padding-top: 15px;">Sistema Bibliotecario</p>
        </div>
        <div class="nav-lateral-divider full-reset"></div>
        <div class="full-reset nav-lateral-list-menu">
            <ul class="list-unstyled">
                <li><a href="<?= BASE_URL(); ?>Admin"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    
                <li>
                    <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros y catálogo <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                    <ul class="list-unstyled">
                         <li><a href="<?= BASE_URL(); ?>Home/insertView"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Proyecto</a></li>
                        <li><a href="<?= BASE_URL(); ?>Home/listView"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Listado</a></li>
                    </ul>
                </li>

                <li><a href="advancesettings.html"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
                <li><a href="<?= BASE_URL(); ?>home/logout"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Cerrar Sesion</a></li>
            </ul>
        </div>
    </div>
</div>