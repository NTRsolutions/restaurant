<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?= Router::url("/admin/dashboard", true) ?>"><?= _APP_NAME?></a>
        <a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
            <span class="sr-only">Toggle navbar</span>
            <i class="icon-grid3"></i>
        </button>
        <button type="button" class="navbar-toggle offcanvas">
            <span class="sr-only">Toggle navigation</span>
            <i class="icon-paragraph-justify2"></i>
        </button></div>
    <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
        <li class="user dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><img src="<?= Router::url('/', true).$this->Session->read("credential.admin.User.profile_picture") ?>"/><span><?= $this->Session->read("credential.admin.User.username")?></span><i class="caret"></i></a>
            <ul class="dropdown-menu dropdown-menu-right icons-right">
                <li><a href="<?php echo Router::url("/admin/accounts/edit_profile", true) ?>"><i class="icon-user"></i> Profil</a></li>
                <li><a href="<?php echo Router::url("/admin/logout", true) ?>"><i class="icon-exit"></i> Keluar</a></li>
            </ul>
        </li>
    </ul>
</div>