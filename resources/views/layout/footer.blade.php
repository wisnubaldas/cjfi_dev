<footer class="footer-bs">
    <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <img src="{{url('assets/img/logo_1.png')}}" width="50%" class="img-responsive" style="filter: sepia(100%); opacity: 0.5;" >
            <p>Our products will always be available for you in your local area.</p>
            {{-- <a href="#">© 2014 BS3 UI Kit, All rights reserved</a> --}}
        </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
            <h4>Menu —</h4>
            <div class="col-md-6">
                <ul class="pages">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Nature</a></li>
                    <li><a href="#">Explores</a></li>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">Advice</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
            <h4>Follow Us</h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">RSS</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-ns animated fadeInRight">
            <h4>Newsletter</h4>
            <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
            <br>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                    </span>
                </div>
                
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@stack('script')
<script>
    function updatemenu() {
        if (document.getElementById('responsive-menu').checked == true) {
            document.getElementById('menu').style.borderBottomRightRadius = '0';
            document.getElementById('menu').style.borderBottomLeftRadius = '0';
        }else{
            document.getElementById('menu').style.borderRadius = '4px';
        }
    }

  </script>