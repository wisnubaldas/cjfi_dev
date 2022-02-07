<div class="header-nav navbar-collapse collapse nav-dark justify-content-start" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
        @foreach($cargo_menu as $menu)
        <li class="{{$menu['status']}}"> 
            <a href="{{$menu['url']}}">{{$menu['name']}}<i class="fa fa-chevron-down"></i></a>
            @if(isset($menu['sub-menu']))
                @include('cargo.layout.sub_menu',['sub_menu'=>$menu['sub-menu']])
            @endif
            
        </li>
        @endforeach
        <!-- <li class="active"> 
            <a href="javascript:;">Home<i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
                <li><a href="javascript:;">Cargo Home Page<i class="fa fa-chevron-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">Home 1</a></li>
                        <li><a href="#">Home 10</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">Cargo Home Page<i class="fa fa-chevron-down"></i></a>
                </li>
            </ul>
        </li>
        <li> <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
                <li> <a href="javascript:;">Header Style Light<i class="fa fa-chevron-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="#">Header 1</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="has-mega-menu "> <a href="javascript:;">Shortcodes<i class="fa fa-chevron-down"></i></a>
            <ul class="mega-menu">
                <li> <a href="javascript:;">Shortcodes</a>
                    <ul>
                        <li><a href="#">Buttons</a></li>
                        <li><a href="#">Icon box styles</a></li>
                    </ul>
                </li>
                <li> <a href="javascript:;">Shortcodes</a>
                    <ul>
                        <li><a href="##">Carousel sliders</a></li>
                        <li><a href="##">Image box content</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li> 
            <a href="javascript:;">Contact us <i class="fa fa-chevron-down"></i></a>
        </li> -->
    </ul>
</div>