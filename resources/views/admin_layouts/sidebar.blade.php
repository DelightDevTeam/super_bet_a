<div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">

  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link text-white " href="{{ route('home') }}" style="font-szie:large;">
        <span class="sidenav-mini-icon"> <i class="material-icons-round opacity-10">dashboard</i> </span>
        <span class="sidenav-normal  ms-2  ps-1"> Dashboard </span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('admin.profile.index')}}">
        <span class="sidenav-mini-icon"> <i class="fa-solid fa-user"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1"> Profile </span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('admin.report.index')}}">
        <span class="sidenav-mini-icon"> <i class="fa-solid fa-chart-column"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1"> Win/lose Report </span>
      </a>
    </li>
    @can('payment_type')
        <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.userPayment.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-panorama"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1">Bank Account</span>
            </a>
          </li>
    @endcan
    @can('withdraw_requests')
    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('admin.agent.withdraw')}}">
        <span class="sidenav-mini-icon"> <i class="fa-solid fa-user"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1">WithDraw Requests</span>
      </a>
    </li>
    @endcan
    @can('deposit_requests')
    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('admin.agent.deposit')}}">
        <span class="sidenav-mini-icon"> <i class="fa-solid fa-user"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1">Deposit Requests</span>
      </a>
    </li>
    @endcan
    @can('master_index')
    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('admin.master.index')}}">
        <span class="sidenav-mini-icon"> <i class="fa-solid fa-user"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1"> Master List</span>
      </a>
    </li>
    @endcan
    @can('agent_index')
    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('admin.agent.index')}}">
        <span class="sidenav-mini-icon"> <i class="fa-solid fa-user"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1">Agent List</span>
      </a>
    </li>
    @endcan
    @can('player_index')
    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('admin.player.index')}}">
        <span class="sidenav-mini-icon"> <i class="fa-solid fa-user"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1">Player List</span>
      </a>
    </li>
    @endcan
    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('admin.transferLog')}}">
        <span class="sidenav-mini-icon"> <i class="fas fa-right-left"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1">Transfer Log</span>
      </a>
    </li>
    <hr class="horizontal light mt-0">

    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white " aria-controls="dashboardsExamples" role="button" aria-expanded="false">
        <i class="material-icons py-2">settings</i>
        <span class="nav-link-text ms-2 ps-1">General Setup</span>
      </a>
      <div class="collapse " id="dashboardsExamples">
        <ul class="nav ">
        @can('payment_type')
        <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.paymentType.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-panorama"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Payment Type </span>
            </a>
          </li>
        @endcan
        @can('contact')
        <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.contact.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-panorama"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Contact </span>
            </a>
          </li>
        @endcan
        @can('admin_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.banners.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-panorama"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Banner </span>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.adsbanners.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-panorama"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Ads Banner </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.text.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-panorama"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Banner Text </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.promotions.index') }}">
              <span class="sidenav-mini-icon"> <i class="fas fa-gift"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Promotions </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.products.index') }}">
            <span class="sidenav-mini-icon">P</span>
              <span class="sidenav-normal  ms-2  ps-1"> Product </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.gametypes.index') }}">
            <span class="sidenav-mini-icon">G</span>
              <span class="sidenav-normal  ms-2  ps-1"> GameType </span>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.gameLists.index') }}">
            <span class="sidenav-mini-icon">G L</span>
              <span class="sidenav-normal  ms-2  ps-1"> gameList </span>
            </a>
          </li>
        </ul>
      </div>
    </li>
    @endcan

    <li class="nav-item">
      <a href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" class="nav-link text-white">
        <span class="sidenav-mini-icon"> <i class="fas fa-right-from-bracket text-white"></i> </span>
        <span class="sidenav-normal ms-2 ps-1">Logout</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </li>
  </ul>
