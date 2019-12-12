<?php $menu1 = "";

$menu2 = "";
$menu3 = "";
$menu4 = "";
$menu5 = "";
$submenu1 = "";
$submenu2 = "";
$submenu3 = "";


if ($_REQUEST["view"] == "paciente") {
    $menu1 = "active";
}
if ($_REQUEST["view"] == "cita") {
    $menu2 = "active";
}
if ($_REQUEST["view"] == "medicamento") {
    $menu3 = "active";
}
if ($_REQUEST["view"] == "inicio") {
    $menu4 = "active";
}
if ($_REQUEST["view"] == "usuario") {
    $menu5 = "active";
    $submenu2 = "active";
}

?>

<script type="text/javascript">
    try {
        ace.settings.loadState('main-container')
    } catch (e) {}
</script>

<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {}
    </script>

    <ul class="nav nav-list">



<?php 	if($_SESSION['tipo_sbp']=="admin"){?>
        <li class=" <?php echo $menu4; ?>  hover">
            <a href="#" onclick="location.href='inicio'" class="dropdown-toggle">
                <i class="menu-icon fa fa-home"></i>
                <span class="menu-text">
                    &nbsp&nbsp&nbsp&nbsp &nbspInicio&nbsp&nbsp&nbsp&nbsp&nbsp
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
        </li>


        <li class="<?php echo $menu1; ?> hover">
            <a href="#" onclick="location.href='paciente'" class="dropdown-toggle">
                <i class="menu-icon fa fa-group"></i>
                <span class="menu-text">
                    &nbspPacientes&nbsp
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>



        </li>

        <li class="<?php echo $menu2; ?>  hover">
            <a href="#" onclick="location.href='cita';" class="dropdown-toggle">
                <i class="menu-icon fa fa-calendar-check-o"></i>
                <span class="menu-text">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCitas&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>



        </li>

        <li class="<?php echo $menu3; ?>  hover">
            <a href="#" onclick="location.href='medicamento'" class="dropdown-toggle">
                <i class="menu-icon fa fa-medkit"></i>
                <span class="menu-text"> Medicamentos </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>


        </li>

        
        <li class="hover <?php echo $menu5; ?>" >
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-lock"></i>
                <span class="menu-text"> Seguridad </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class=" hover">
                    <a href="respaldo">
                        <i class="menu-icon fa fa-caret-right"></i> Respaldo de Información
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="hover <?php echo $submenu2; ?>">
                    <a href="usuario">
                        <i class="menu-icon fa fa-caret-right"></i> Usuarios
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="hover">
                    <a href="bitacora">
                        <i class="menu-icon fa fa-caret-right"></i> Bitacora
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="hover" data-toggle="modal" style="cursor: pointer" data-target="#modal-acerca">
            <a>
                <i class="menu-icon fa fa-info-circle"></i>

                <span class="menu-text">
                    Acerca de

                </span>
            </a>

            <b class="arrow"></b>
        </li>

<?php } ?>  

<?php 	if($_SESSION['tipo_sbp']=="secret"){?>
        <li class=" <?php echo $menu4; ?>  hover">
            <a href="#" onclick="location.href='inicio'" class="dropdown-toggle">
                <i class="menu-icon fa fa-home"></i>
                <span class="menu-text">
                    &nbsp&nbsp&nbsp&nbsp &nbspInicio&nbsp&nbsp&nbsp&nbsp&nbsp
                </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
        </li>


        

        <li class="<?php echo $menu2; ?>  hover">
            <a href="#" onclick="location.href='cita';" class="dropdown-toggle">
                <i class="menu-icon fa fa-calendar-check-o"></i>
                <span class="menu-text">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCitas&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>





        
                
              

        <li class="hover" data-toggle="modal" style="cursor: pointer" data-target="#modal-acerca">
            <a>
                <i class="menu-icon fa fa-info-circle"></i>

                <span class="menu-text">
                    Acerca de

                </span>
            </a>

            <b class="arrow"></b>
        </li>

<?php } ?>  






    </ul>
    <!-- /.nav-list -->
</div>