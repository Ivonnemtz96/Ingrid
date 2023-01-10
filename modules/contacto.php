<div class="breadcrumb-section">
    <div class="breadcrumb-left-vec">
        <img src="/assets/images/icon/breadcumb-left-vec.svg" alt="breadcumb-left-vec" />
    </div>
    <div class="breadcrumb-right-vec">
        <img src="/assets/images/icon/breadcumb-right-vec.svg" alt="breadcumb-right-vec" />
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12">
                <h2 class="breadcrumb-title">¿Tienes alguna duda?</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Contáctame
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="contact-page pt-120">
    <div class="container-fluid">
        <div class="row justify-content-center g-4">
            <div class="col-md-6 col-sm-8">
                <div class="contact-wrap">
                    <div class="contact-img">
                        <img src="/assets/images/bg/contact-img-01.jpg" alt="contact-img-01" />
                    </div>
                    <div class="contact-content">
                        <h3>Cabo San Lucas
                        </h3>
                        <ul>
                            <li>
                                <div class="icon">
                                    <img src="/assets/images/icon/location.svg" alt="location" />
                                </div>
                                <div class="content">
                                    <a href="https://goo.gl/maps/wW5FzLfEeHMrm3YC6">Av. Leona Vicario 26, <br> Downtown, Juárez, 23460</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/assets/images/icon/phone.svg" alt="phone" />
                                </div>
                                <div class="content">
                                    <a href="tel:+526241328278">624 132 8278</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/assets/images/icon/envlope.svg" alt="envlope" />
                                </div>
                                <div class="content">
                                    <a href="mailto:dra.quintero2022@gmail.com"><span class="__cf_email__">dra.quintero2022@gmail.com</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xxl-6 col-xl-4 col-lg-5 col-md-6 col-sm-8">
                <div class="contact-wrap">
                    <div class="contact-img">
                        <img src="/assets/images/bg/contact-img-02.png" alt="contact-img-02" />
                    </div>
                    <div class="contact-content">
                        <h3>Italian Branch</h3>
                        <ul>
                            <li>
                                <div class="icon">
                                    <img src="/assets/images/icon/location.svg" alt="location" />
                                </div>
                                <div class="content">
                                    <a>Khikhet DOHS, House-169/177,<br />
                                        Road No-04, Avenue -02</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/assets/images/icon/phone.svg" alt="phone" />
                                </div>
                                <div class="content">
                                    <a href="#">+990-7782200</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/assets/images/icon/envlope.svg" alt="envlope" />
                                </div>
                                <div class="content">
                                    <a href="#"><span class="__cf_email__"
                                            data-cfemail="741d1a121b34110c15190418115a171b19">[email&#160;protected]</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="container">
    <div class="contact-form mb-120 mt-120">
        <div class="row d-flex align-items-center justify-content-center mb-40">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span>
                        <img class="left-vec" src="/assets/images/icon/sub-title-vec.svg" alt="sub-title-vec" />
                        Contáctame
                        <img class="right-vec" src="/assets/images/icon/sub-title-vec.svg"
                            alt="sub-title-vec" /></span>
                    <h2>¿Cómo puedo ayudarte?</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form method="post" action="/php/contact.php">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 mb-25">
                            <div class="form-group">
                                <input name="nombre" type="text" placeholder="Nombre*" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-25">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Correo*" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-25">
                            <div class="form-group">
                                <input name="tel" type="text" placeholder="Teléfono*" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-25">
                            <div class="form-group">
                                <input name="asunto" type="text" placeholder="Asunto*" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="msj" placeholder="Mensaje ..."></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-bottom: 3rem; margin-top:3rem;">
                            <div class="col-12 col-md-5">
                                <div class="g-recaptcha" data-sitekey="6Lf92OAfAAAAAEy9m8sf2kbU0ojkdDs5CNOnaNYS" required></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <button name="submit" value="submit" type="submit">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14702.039082577443!2d-109.9152524!3d22.894561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed0821e14391a2e9!2sDra.%20Ingrid%20Quintero!5e0!3m2!1ses-419!2smx!4v1673366194050!5m2!1ses-419!2smx"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>