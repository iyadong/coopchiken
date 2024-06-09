<!-- Sidebar -->
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html">
            <span>Kandang pintar</span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="line-menu half start"></div>
                <div class="line-menu"></div>
                <div class="line-menu half end"></div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-separator"></i><span>Home</span></li>
                <li id="menu-dashboard">
                    <a href="/dashboard" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Dashboard</span></a>
                </li>
                <li class="iq-menu-title"><i class="ri-separator"></i><span>Configuration Menu</span></li>
                <li id="menu-config-heater">
                    <a href="/config_heater" class="iq-waves-effect"><i class="ri-fire-line"></i><span>Config Heater</span></a>
                </li>
                <li id="menu-config-lamp">
                    <a href="/config_lamp" class="iq-waves-effect"><i class="ri-lightbulb-line"></i><span>Config Lamp</span></a>
                </li>
                @if (Auth::user()->hasRole('admin'))
                <li class="iq-menu-title"><i class="ri-separator"></i><span>Admin Menu</span></li>
                
                <li id="menu-manage-user">
                    <a href="/manage_user" class="iq-waves-effect"><i class="ri-user-line"></i><span>Manage User</span></a>
                    <ul id="manage-user" class="iq-submenu collapse" data-parent="#sidebar-menu">
                        <li><a href="user-settings.html">User Settings</a></li>
                        <li><a href="user-roles.html">User Roles</a></li>
                    </ul>
                </li>
               
                <li id="menu-manage-devices">
                    <a href="/manage_device" class="iq-waves-effect"><i class="ri-device-line"></i><span>Manage Devices</span></a>
                    <ul id="manage-devices" class="iq-submenu collapse" data-parent="#sidebar-menu">
                        <li><a href="device-settings.html">Device Settings</a></li>
                        <li><a href="device-schedule.html">Device Schedule</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
<!-- Script -->
