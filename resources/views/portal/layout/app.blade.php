@include('portal.layout.head')
@include('portal.layout.header')

@include('portal.layout.sidebar')

<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        @yield('title')
                        <div class="page-title-subheading">
                            @yield('subtitle')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>

    @include('portal.layout.footer')
    @include('portal.layout.foot')