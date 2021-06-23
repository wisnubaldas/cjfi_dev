<h4 class="m-b-15 m-t-30">You Might Also Like</h4>
<div class="row row-space-10">
        @php($xx = ['golden-1','golden-2','golden-3','golden-4','item-1','item-2','item-3'])
        @for ($i = 0; $i < 6; $i++)
        <div class="col-lg-2 col-md-4">
            <!-- BEGIN item -->
            <div class="item item-thumbnail">
                <a href="#" class="item-image">
                    <img src="../src/img/product/{{$xx[$i]}}.png" alt="">
                    <div class="discount">15% OFF</div>
                </a>
                <div class="item-info">
                    <h4 class="item-title">
                        <a href="#">Special Tiles<br>16GB</a>
                    </h4>
                    <p class="item-desc">Stok terbatas</p>
                    <div class="item-price">$649.00</div>
                    <div class="item-discount-price">$739.00</div>
                </div>
            </div>
            <!-- END item -->
        </div>
        @endfor
</div>