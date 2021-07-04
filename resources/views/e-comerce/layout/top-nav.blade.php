<div id="top-nav" class="top-nav">
    <!-- BEGIN container -->
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-hover">
                        @if (session('locale'))
                            @foreach ($locale_option as $item)
                                @if ($item['code'] == session('locale'))
                                    <a href="#" data-toggle="dropdown">
                                        <img src="../src/img/flag/{{$item['image']}}" class="flag-img" alt="" /> {{$item['name']}} <b class="caret"></b>
                                    </a>
                                @endif
                            @endforeach
                        @else
                            <a href="#" data-toggle="dropdown">
                                <img src="../src/img/flag/flag-indonesia.png" class="flag-img" alt="" /> Indonesia <b class="caret"></b>
                            </a>
                        @endif
                    <ul class="dropdown-menu">
                        @foreach ($locale_option as $idx => $item)
                            <li><a href="/lang/{{$item['code']}}" class="dropdown-item"><img src="../src/img/flag/{{$item['image']}}" class="flag-img" alt="" /> {{__($item['name'])}}</a></li>
                        @endforeach
                    </ul>
                </li>
                {{-- <li><a href="#">Customer Care</a></li> --}}
                {{-- <li><a href="#">Order Tracker</a></li> --}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Career</a></li>
                {{-- <li><a href="#">Our Forum</a></li> --}}
                <li><a href="#">Newsletter</a></li>
                <li><a href="#"><i class="fab fa-facebook-f f-s-14"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter f-s-14"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram f-s-14"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble f-s-14"></i></a></li>
                <li><a href="#"><i class="fab fa-google f-s-14"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- END container -->
</div>