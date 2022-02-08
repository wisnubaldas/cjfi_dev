<!-- Header -->
<header class="site-header mo-left">
        <!-- Main Header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header mostion">
						<a href="index.html"><img src="images/logo.png" width="193" height="89" alt=""></a>
					</div>
                    <!-- Nav Toggle Button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- Extra Nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik Search -->
                    <div class="dez-quik-search bg-primary ">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                        </form>
                    </div>
                    <!-- Main Nav -->

                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        @include('cargo.layout.menu')
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header END -->
    </header>
    <!-- Header END -->