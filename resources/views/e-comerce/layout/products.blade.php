<!-- BEGIN #page-header -->
<div id="page-header" class="section-container page-header-container {{ $bg_head ?? 'bg-silver' }}">
    <!-- BEGIN page-header-cover -->
    @if ($cover_head)
        <div class="page-header-cover">
            <img src="{!! $img_head ?? '/src/img/cover/cover-12.jpg' !!}" alt="" />
        </div>
    @endif
    <!-- END page-header-cover -->
    <!-- BEGIN container -->
    <div class="container">
        <h1 class="page-header">{!! $prod_title ?? '<b>Product</b> Product' !!}</h1>
    </div>
    <!-- END container -->
</div>
<!-- BEGIN #page-header -->

<!-- BEGIN search-results -->
<div id="search-results" class="section-container">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN search-container -->
        <div class="search-container">
            <!-- BEGIN search-content -->
            <div class="search-content">
                <x-search-content />
            </div>
            <!-- END search-content -->
            <!-- BEGIN search-sidebar -->
            <x-search-sidebar />
            <!-- END search-sidebar -->
        </div>
        <!-- END search-container -->
    </div>
    <!-- END container -->
</div>
<!-- END search-results -->