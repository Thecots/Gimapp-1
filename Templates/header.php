<header>
    <div class="brand" onclick="window.location = 'index.php';">
        <img src="img/logo.png" alt="">
        <h1>WORKOTS</h1>
    </div>
    <div class="user-box">
        <div class="box">
            <div class="box-user">
                <img src="<?php echo $_SESSION['img'];?>" alt="">
                <p><?php echo $_SESSION['username'];?></p>
            </div>
            <div class="menu-user-option">
                <img src="img/perfil.png" alt="">
                <a href="">Mi perfil</a>
            </div>
            <div class="menu-user-option">
                <img src="img/editar_perfil.png" alt="">
                <a href="">Editar perfil</a>
            </div>
            <!-- <div class="menu-user-option">
                <img src="img/configure.png" alt="">
                <a href="">Configurar</a>
            </div> -->
            <?php
                if($_SESSION['user_type'] == 0){ ?>
                <div class="menu-user-option">
                    <img src="img/dashboard.png" alt="">
                    <a href="">Dashboard</a>
                </div>
                <?php
                }
            ?>
            <div class="menu-user-option" id="cerrar_sesion">
                <img src="img/exit.png" alt="">
                <a>Cerrar sesión</a>
            </div>
        </div>
    </div>
</header>