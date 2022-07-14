<section class="footer">
    <div class="container d-flex space-between">
        <div class="ft_left d-flex">
            <div class="ft_box1">
                <img src="{{asset('web_assets/frontend/img/ft-logo.svg')}}" width="auto" alt="footerlogo">
                <div class="ft-menu d-block">
                    <div class="ft-links"><a href="#">Home</a></div>
                    <div class="ft-links"><a href="#">About</a></div>
                    <div class="ft-links"><a href="#">Blog</a></div>
                    <div class="ft-links"><a href="#">Feature</a></div>
                </div>
            </div>
            <div class="ft-line"></div>
            <div class="ft-contact">
                <h3 class="mt-10">Contact Info</h3>
                <div class="address mt-36">Address : HR tower, Kohinoor City, Faisalabad, <br>
                    Punjab, Pakistan</div>
                <div class="phone_no mt-36">Phone : +1 (516) 243-7385</div>
                <div class="mail_add mt-36">
                    Email : help@reescribir.net
                </div>
            </div>
        </div>
        <div class="ft_right">
            <div class="appstore text-right d-block">
                <div><img src="{{asset('web_assets/frontend/img/google-play-badge.svg')}}" width="auto" alt="playstore"></div>
                <div><img src="{{asset('web_assets/frontend/img/app_store.svg')}}" width="auto" alt="applestore"></div>
            </div>
            <div class="social_links mt-36">
                <img src="{{asset('web_assets/frontend/img/fbft.svg')}}" width="auto" alt="">
                <img src="{{asset('web_assets/frontend/img/twitter.svg')}}" width="auto" alt="">
                <img src="{{asset('web_assets/frontend/img/linkedinft.svg')}}" width="auto" alt="">
                <img src="{{asset('web_assets/frontend/img/pintres.svg')}}" width="auto" alt="">
            </div>
        </div>
    </div>
</section>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
