
<nav id='menu'>
  <input class="responsive" type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    <li><a class='dropdown-arrow' href='#'>@lang('pages.collection')</a>
      <ul class='sub-menus'>
        <li><a href='{{route('koleksi.merek')}}'>{{ __('pages.brands') }}</a></li>
        <li><a href='{{route('koleksi.inspirasi')}}'>@lang('pages.desaign')</a></li>
        <li><a href='{{route('koleksi.produk')}}'>@lang('pages.products')</a></li>
      </ul>
    </li>
    <li><a href='{{route('tentang')}}'>@lang('pages.about')</a></li>
    <li><a href='{{route('berita')}}'>@lang('pages.news')</a></li>
    <li><a href='{{route('dukungan')}}'>@lang('pages.support')</a></li>
    <form action="#" method="GET" id="frm-search" class="float-right"> 
      <input type="text" class="form-control-xs" placeholder="Search" id="txtSearch" style="margin-top: 2.5px"/>
      <button type="submit" class="btn btn-xs" style="margin-bottom: 1px; margin-right:2px;">
        <i class="fa fa-search"></i>
      </button>
    </form>
  </ul>
</nav>