<div class="sidebar">
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="/admincp">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-title">Staff, Roles, Permissions</li>
            <li class="nav-item">
                <a class="nav-link" href="/admincp/users">
                    <i class="nav-icon icon-user"></i> Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('roles.index')}}">
                    <i class="nav-icon icon-lock"></i> Roles &amp; Permissions
                </a>
            </li>
        </ul>
			<ul class="menu-list">
			<li><a href="#" class="{{Nav::isResource('users')}}">Manage Users</a></li>
			<li>
			<a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">Roles &amp; Permissions</a>
			<ul class="submenu">
			<li><a href="#" class="{{Nav::isResource('roles')}}">Roles</a></li>
			<li><a href="#" class="{{Nav::isResource('permissions')}}">Permissions</a></li>
			</ul>
			</li>
			<li>
			<a class="has-submenu">Example Accordion</a>
			<ul class="submenu">
			<li><a href="#">Roles</a></li>
			<li><a href="#">Permissions</a></li>
			</ul>
			</li>
			<li>
			<a class="has-submenu">Another Example</a>
			<ul class="submenu">
			<li><a href="#">Roles</a></li>
			<li><a href="#">Permissions</a></li>
			</ul>
			</li>
			</ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>