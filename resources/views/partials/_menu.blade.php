<li class="menu-item menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
    <a href="{{ route('home') }}" class="menu-link">
        <span class="menu-text">Dashboard</span>
    </a>
</li>
<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="menu-text">Setting</span>
        <span class="menu-desc"></span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu menu-submenu-classic menu-submenu-left">
        <ul class="menu-subnav">
            <li class="menu-item" aria-haspopup="true">
                <a href="{{ route('users.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="flaticon2-user text-success"></i>
                    </span>
                    <span class="menu-text">Users</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true">
                <a href="{{ route('roles.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="flaticon2-user text-success"></i>
                    </span>
                    <span class="menu-text">Roles</span>
                </a>
            </li>
        </ul>
    </div>
</li>