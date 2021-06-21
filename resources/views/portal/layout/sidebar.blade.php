<div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="{{ url('/')}}" class="simple-text logo-mini">
          SMA
        </a>
        <a href="{{ url('/')}}" class="simple-text logo-normal">
          Harapan Bangsa
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="mb-4 mt-4">
            <a href="{{url('/')}}">
                <i class="metismenu-icon fa fa-arrow-left"></i>
                Kembali ke Homepage
            </a>
          </li>
          <li class="@yield('classdashboard')">
            <a href="{{ url('/dashbaord')}}">
              <i class="now-ui-icons design_app"></i>
              <p>Dasbor</p>
            </a>
          </li>
          <li class="@yield('classprofile')"> 
            <a href="{{ url('/profile')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Profile Pengguna</p>
            </a>
          </li>
          <li class="@yield('classtable')"> 
            <a href="{{ url('/table')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Tabel</p>
            </a>
          </li>
          <li class="@yield('class')">
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Posting</p>
            </a>
          </li>
        </ul>
      </div>
    </div>