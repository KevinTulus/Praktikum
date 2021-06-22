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
            <a href="{{ url('/dashboard')}}">
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
          @if(auth()->id() == 1)
          <li class="@yield('classtable')"> 
            <a href="{{ route('student.index') }}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Student</p>
            </a>
          </li>
          <li class="@yield('classtable')"> 
            <a href="{{ route('teacher.index') }}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Teacher</p>
            </a>
          </li>
          <li class="@yield('classtable')"> 
            <a href="{{ route('job.index')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Job</p>
            </a>
          </li>
          <li class="@yield('classtable')"> 
            <a href="{{ route('post.index') }}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Post</p>
            </a>
          </li>
          @endif
          @if(auth()->id() <= 15)
          <li class="@yield('classtable')"> 
            <a href="{{ route('nilai.index') }}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Nilai</p>
            </a>
          </li>
          @endif
        </ul>
      </div>
    </div>