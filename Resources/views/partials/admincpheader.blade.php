<header class="app-header navbar">
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="nav-item dropdown d-md-down-none" style="padding-left:20px; padding-right: 20px;">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-building" aria-hidden="true"></i> Company Name
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
      <div class="dropdown-header text-center">
        <strong>Manage Companies</strong>
      </div>

      {{-- List all remaining companies here--}}
      <a class="dropdown-item" href="#">
        <div class="small mb-1">CompanyName
          <span class="float-right">
          </span>
        </div>
        <span class="progress progress-xs">
          <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
            aria-valuemax="100"></div>
        </span>
      </a>


      <div class="dropdown-divider"></div>

      {{-- Add Company--}}

      <a class="dropdown-item" href="#">
        <i class="fa fa-plus"></i> Add Company</a>

    </div>
  </div>
  <a class="navbar-brand" href="#">
    <img class="navbar-brand-full" src="/img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
    <img class="navbar-brand-minimized" src="/img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
  </a>
  <button class="sidebar-minimizer brand-minimizer" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" data-toggle="sidebar-lg-show" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>






  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item dropdown d-md-down-none" style="padding-left:20px; padding-right: 20px;">

      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Dashboard
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          <strong>Dashboard Menu (Header)</strong>
        </div>
        <a class="dropdown-item" href="#">
          <i class="icon-user-follow text-success"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-user-unfollow text-danger"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-chart text-info"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-basket-loaded text-primary"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-speedometer text-warning"></i> Dashboard Item</a>
      </div>
    </li>
    <li class="nav-item dropdown d-md-down-none" style="padding-left:20px; padding-right: 20px;">

      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Users
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          <strong>Dashboard Menu (Header)</strong>
        </div>
        <a class="dropdown-item" href="#">
          <i class="icon-user-follow text-success"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-user-unfollow text-danger"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-chart text-info"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-basket-loaded text-primary"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-speedometer text-warning"></i> Dashboard Item</a>
      </div>
    </li>
    <li class="nav-item dropdown d-md-down-none" style="padding-left:20px; padding-right: 20px;">

      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Settings
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          <strong>Dashboard Menu (Header)</strong>
        </div>
        <a class="dropdown-item" href="#">
          <i class="icon-user-follow text-success"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-user-unfollow text-danger"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-chart text-info"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-basket-loaded text-primary"></i> Dashboard Item</a>
        <a class="dropdown-item" href="#">
          <i class="icon-speedometer text-warning"></i> Dashboard Item</a>
      </div>
    </li>
  </ul>
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item dropdown d-md-down-none">
      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="icon-bell"></i>
        <span class="badge badge-pill badge-danger">5</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          <strong>You have 5 notifications</strong>
        </div>
        <a class="dropdown-item" href="#">
          <i class="icon-user-follow text-success"></i> New user registered</a>
        <a class="dropdown-item" href="#">
          <i class="icon-user-unfollow text-danger"></i> User deleted</a>
        <a class="dropdown-item" href="#">
          <i class="icon-chart text-info"></i> Sales report is ready</a>
        <a class="dropdown-item" href="#">
          <i class="icon-basket-loaded text-primary"></i> New client</a>
        <a class="dropdown-item" href="#">
          <i class="icon-speedometer text-warning"></i> Server overloaded</a>
        <div class="dropdown-header text-center">
          <strong>Server</strong>
        </div>
        <a class="dropdown-item" href="#">
          <div class="text-uppercase mb-1">
            <small>
              <b>CPU Usage</b>
            </small>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
              aria-valuemax="100"></div>
          </span>
          <small class="text-muted">348 Processes. 1/4 Cores.</small>
        </a>
        <a class="dropdown-item" href="#">
          <div class="text-uppercase mb-1">
            <small>
              <b>Memory Usage</b>
            </small>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
              aria-valuemax="100"></div>
          </span>
          <small class="text-muted">11444GB/16384MB</small>
        </a>
        <a class="dropdown-item" href="#">
          <div class="text-uppercase mb-1">
            <small>
              <b>SSD 1 Usage</b>
            </small>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0"
              aria-valuemax="100"></div>
          </span>
          <small class="text-muted">243GB/256GB</small>
        </a>
      </div>
    </li>
    <li class="nav-item dropdown d-md-down-none">
      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="icon-list"></i>
        <span class="badge badge-pill badge-warning">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          <strong>You have 5 pending tasks</strong>
        </div>
        <a class="dropdown-item" href="#">
          <div class="small mb-1">Upgrade NPM &amp; Bower
            <span class="float-right">
              <strong>0%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100"></div>
          </span>
        </a>
        <a class="dropdown-item" href="#">
          <div class="small mb-1">ReactJS Version
            <span class="float-right">
              <strong>25%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
              aria-valuemax="100"></div>
          </span>
        </a>
        <a class="dropdown-item" href="#">
          <div class="small mb-1">VueJS Version
            <span class="float-right">
              <strong>50%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
              aria-valuemax="100"></div>
          </span>
        </a>
        <a class="dropdown-item" href="#">
          <div class="small mb-1">Add new layouts
            <span class="float-right">
              <strong>75%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
              aria-valuemax="100"></div>
          </span>
        </a>
        <a class="dropdown-item" href="#">
          <div class="small mb-1">Angular 2 Cli Version
            <span class="float-right">
              <strong>100%</strong>
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
              aria-valuemin="0" aria-valuemax="100"></div>
          </span>
        </a>
        <a class="dropdown-item text-center" href="#">
          <strong>View all tasks</strong>
        </a>
      </div>
    </li>
    <li class="nav-item dropdown d-md-down-none" style="padding-left:20px; padding-right: 20px;">
      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-building" aria-hidden="true"></i> Company Name
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          <strong>Manage Companies</strong>
        </div>

        {{-- List all remaining companies here--}}
        <a class="dropdown-item" href="#">
          <div class="small mb-1">CompanyName
            <span class="float-right">
            </span>
          </div>
          <span class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100"></div>
          </span>
        </a>


        <div class="dropdown-divider"></div>

        {{-- Add Company--}}

        <a class="dropdown-item" href="#">
          <i class="fa fa-plus"></i> Add Company</a>

      </div>
    </li>
    <li class="nav-item dropdown d-md-down-none">
      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="icon-envelope-letter"></i>
        <span class="badge badge-pill badge-info">7</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          <strong>You have 4 messages</strong>
        </div>
        <a class="dropdown-item" href="#">
          <div class="message">
            <div class="py-3 mr-3 float-left">
              <div class="avatar">
                <img class="img-avatar" src="/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">Just now</small>
            </div>
            <div class="text-truncate font-weight-bold">
              <span class="fa fa-exclamation text-danger"></span> Important message</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a class="dropdown-item" href="#">
          <div class="message">
            <div class="py-3 mr-3 float-left">
              <div class="avatar">
                <img class="img-avatar" src="/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-warning"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">5 minutes ago</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a class="dropdown-item" href="#">
          <div class="message">
            <div class="py-3 mr-3 float-left">
              <div class="avatar">
                <img class="img-avatar" src="/img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-danger"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a class="dropdown-item" href="#">
          <div class="message">
            <div class="py-3 mr-3 float-left">
              <div class="avatar">
                <img class="img-avatar" src="/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-info"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">4:03 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a class="dropdown-item text-center" href="#">
          <strong>View all messages</strong>
        </a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img class="img-avatar" src="/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">{{ auth()->user()->name }}
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header text-center">
          <strong>Control Panel</strong>
        </div>
        <a class="dropdown-item" href="#">
          <i class="fa fa-user"></i> Profile</a>
        <a class="dropdown-item" href="{{  route('admincp.dashboard') }}">
          <i class="fa fa-wrench"></i> Control Panel</a>

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('staff.logout') }}">
          <i class="fa fa-lock"></i> Logout</a>
      </div>
    </li>
  </ul>
  <button class="navbar-toggler aside-menu-toggler d-md-down-none" data-toggle="aside-menu-lg-show" type="button">
    <span class="navbar-toggler-icon">
    </span>
  </button>
  <button class="navbar-toggler aside-menu-toggler d-lg-none" data-toggle="aside-menu-show" type="button">
    <span class="navbar-toggler-icon">
    </span>
  </button>
</header>