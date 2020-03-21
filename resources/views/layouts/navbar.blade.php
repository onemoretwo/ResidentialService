

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i class="fa fa-home"></i> KU Residential
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ url('/information') }}" class="nav-link">รายละเอียด</a>
                </li>
                @if(auth()->check())
                    @if(auth()->user()->isAdmin() or auth()->user()->isStaff())
                        <li class="nav-item">
                            <a href="{{ route('rooms.index', ['type' => 1]) }}" class="nav-link">ดูทุกห้อง</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/reports') }}" class="nav-link">รายงานจากทุกห้อง
                                @if($r > 0)
                                    <span class="badge badge-danger">
                                        {{  $r }}
                                    </span>
                                @endif

                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/requests') }}" class="nav-link">คำขอจองห้อง</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ url('/gallery') }}" class="nav-link">อัลบั้มภาพ</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/neighborhood') }}" class="nav-link">สถานที่ใกล้เคียง</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rooms.index', ['type' => 1]) }}" class="nav-link">ลงทะเบียนจองห้อง</a>
                        </li>
                    @endif
                @endif

{{--                @can('show', )--}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">สมัครสมาชิก</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
