<template>
    <ul class="menu-nav">
        <li v-if="$page.props.permissions.home_dashboard" class="menu-item menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
            <inertia-link href="/home" class="menu-link">
                <span class="menu-text">Dashboard</span>
            </inertia-link>
        </li>
        <li v-if="$page.props.permissions.roles_index || $page.props.permissions.users_index" class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
                <span class="menu-text">Setting</span>
                <span class="menu-desc"></span>
                <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                <ul class="menu-subnav">
                    <li v-if="$page.props.permissions.users_index" class="menu-item" aria-haspopup="true">
                        <inertia-link href="/users" class="menu-link">
                            <span class="menu-icon">
                                <i class="flaticon2-user text-success"></i>
                            </span>
                            <span class="menu-text">Users</span>
                        </inertia-link>
                    </li>
                    <li v-if="$page.props.permissions.roles_index" class="menu-item" aria-haspopup="true">
                        <inertia-link href="/role" class="menu-link">
                            <span class="menu-icon">
                                <i class="flaticon2-user text-success"></i>
                            </span>
                            <span class="menu-text">Roles</span>
                        </inertia-link>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</template>