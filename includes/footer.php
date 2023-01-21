<style>
#whatsapp {
    position: fixed;
    z-index: 999;
    width: 4rem;
    bottom: 110px;
    right: 10px;
}

#face {
    position: fixed;
    z-index: 999;
    width: 3rem;
    bottom: 70px;
    right: 10px;
}

#insta {
    position: fixed;
    z-index: 999;
    width: 3rem;
    bottom: 30px;
    right: 10px;
}

.whats-float {
    position: fixed;
    transform: translate(108px, 0px);
    top: 250px;
    right: 0;
    width: 150px;
    overflow: hidden;
    background-color: #25d366;
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.whats-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.whats-float i {
    font-size: 30px;
    color: white;
    line-height: 30px;
    padding: 10px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.whats-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.whats-float:hover i {
    transform: rotate(360deg);
}


.insta-float {
    position: fixed;
    transform: translate(108px, 0px);
    top: 310px;
    right: 0;
    width: 150px;
    overflow: hidden;
    background: linear-gradient(2deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.insta-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.insta-float i {
    font-size: 30px;
    color: white;
    line-height: 30px;
    padding: 10px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.insta-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.insta-float:hover i {
    transform: rotate(360deg);
}


.fb-float {
    position: fixed;
    transform: translate(108px, 0px);
    top: 370px;
    right: 0;
    width: 150px;
    overflow: hidden;
    background-color: #3b5998;
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.fb-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.fb-float i {
    font-size: 30px;
    color: white;
    line-height: 30px;
    padding: 10px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.fb-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.fb-float:hover i {
    transform: rotate(360deg);
}

.margen-menu {
    margin: 0 150px;
}

.logo-home {
    max-width: 200px
}

@media (max-width: 800px) {
    .margen-menu {
        margin: 0px;
    }

    .logo-home {
        max-width: 200px
    }
}
</style>



<div class="whats-float">
    <a href="https://wa.me/+526241328278?text=Hola,%20me%20gustar%C3%ADa%20agendar%20una%20cita."
    
        target="_blank">
        <i class="fa-brands fa-whatsapp"></i><span>WhatsApp<br><small>624 137 8810</small></span>
    </a>
</div>

<div class="insta-float">
    <a href="https://www.instagram.com/dra.ingridquintero/" target="_blank">
    <i class="fa-brands fa-instagram"></i><span>Instagram<br><small>@dra.ingridquintero</small></span>
    </a>
</div>

<div class="fb-float">
    <a href="https://www.facebook.com/Dra-Ingrid-Quintero-108041385490272" target="_blank">
        <i style="margin: 0px -2px;" class="fa-brands fa-facebook"></i><span>Facebook<br><small>Dra. Ingrid</small></span>
    </a>
</div>

<footer>
    <!-- <div class="footer-top ">
        <div class="container">
            <div class="row justify-content-center align-items-center
                        gy-5">
                <div class="col-lg-4 col-md-6 order-md-1 order-2">
                    <div class="footer-widget one">
                        <div class="widget-title">
                            <h3>Our Facilities</h3>
                        </div>
                        <div class="menu-container">
                            <ul>
                                <li><a href="menu1.html">Indian Menu</a></li>
                                <li><a href="menu1.html">Menu Item</a></li>
                                <li><a href="reservation.html">Private
                                        Event</a></li>
                                <li><a href="menu1.html">Italian Menu</a></li>
                                <li><a href="category.html">Best Offer</a></li>
                            </ul>
                            <ul>
                                <li><a href="category.html">Popular Item</a></li>
                                <li><a href="menu1.html">Regular Menu</a></li>
                                <li><a href="menu1.html">New Food</a></li>
                                <li><a href="category.html">Special
                                        Offer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-md-2 order-1">
                    <div class="footer-widgetfooter-widget social-area">
                        <div class="footer-logo text-center">
                            <a href="index.html"><img src="assets/images/header1-logo.svg" alt=""></a>
                            <p>Established . 2022</p>
                            <span><img src="assets/images/icon/footer-shape.svg" alt=""></span>
                        </div>
                        <div class="footer-social">
                            <ul class="social-link d-flex
                                        align-items-center
                                        justify-content-center">
                                <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class='bx
                                                    bxl-instagram-alt'></i></a></li>
                                <li><a href="https://www.pinterest.com/"><i class='bx bxl-linkedin'></i></a></li>
                                <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-3">
                    <div class="footer-widget one">
                        <div class="widget-title">
                            <h3>Address Info</h3>
                        </div>
                        <div class="contact-info">
                            <div class="single-contact">
                                <span class="title">Phone:</span>
                                <span class="content"><a href="tel:+8801776766767">+880-1776-766-767</a></span>
                            </div>
                            <div class="single-contact">
                                <span class="title">Email:</span>
                                <span class="content"><a
                                        href="https://demo.egenslab.com/cdn-cgi/l/email-protection#650c0b030a25001d04081509004b060a08"><span
                                            class="__cf_email__"
                                            data-cfemail="6d04030b022d08150c001d0108430e0200">[email&#160;protected]</span></a></span>
                            </div>
                            <div class="single-contact">
                                <span class="title">Fax ID:</span>
                                <span class="content"><a href="fax:+9975667786">+99-75667-786</a></span>
                            </div>
                            <div class="single-contact">
                                <span class="title">Location:</span>
                                <span class="content"><a href="https://goo.gl/maps/2Q4gzMK8mNc1uYnL7">Mirpur
                                        DOHS,House-167/170,<br>
                                        Road-02 Avenue-01.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="footer-btm">
        <div class="container text-center">
            <div class="row border-ttop g-2 justify-content-center">
                <div class="col-md-12 justify-content-center
                            justify-content-center">
                    <div class="copyright-area">
                        <p>2023 Dra. Ingrid Quintero. Diseñado por <a target="_blank" href="https://bananagroup.mx"><strong>Banana Group Marketing</strong></a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>