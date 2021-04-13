<nav id='menu'>
  <input class="responsive" type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    <li><a class='dropdown-arrow' href='#'>@lang('pages.menus.collection')</a>
      <ul class='sub-menus'>
        <li><a href='{{route('koleksi.merek')}}'>Merek</a></li>
        <li><a href='{{route('koleksi.inspirasi')}}'>Inspirasi Desain</a></li>
        <li><a href='{{route('koleksi.produk')}}'>Produk Baru</a></li>
      </ul>
    </li>
    <li><a href='{{route('tentang')}}'>Tentang CJFi</a></li>
    <li><a href='{{route('berita')}}'>Berita Terbaru</a></li>
    <li><a href='{{route('dukungan')}}'>Dukungan</a></li>
    <form action="#" method="GET"> 
        <div class="input-group col-md-3 col-xs-3 float-right">
          <input type="text" class="form-control" placeholder="Search" id="txtSearch"/>
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </div>
        </div>
    </form>
  </ul>

</nav>