<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5><i class="fas fa-map-marker-alt"></i> Grad Niš</h5>
                <p>
                    Niš je treći po veličini grad u Srbiji,<br>
                    poznat po bogatoj istoriji i kulturi.<br>
                    Sedište Nišavskog okruga.
                </p>
                <p>
                    <i class="fas fa-phone"></i> +381 18 123 456<br>
                    <i class="fas fa-envelope"></i> info@nis.rs
                </p>
            </div>

            <div class="col-md-4 mb-4">
                <h5><i class="fas fa-info-circle"></i> Korisni linkovi</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Početna</a></li>
                    <li><a href="{{ url('/dodaj-ocenu') }}"><i class="fas fa-plus-circle"></i> Dodaj ocenu</a></li>
                    <li><a href="{{ url('/admin/allProducts') }}"><i class="fas fa-box"></i> Proizvodi</a></li>
                    <li><a href="/about"><i class="fas fa-info"></i> O nama</a></li>
                    <li><a href="/contact"><i class="fas fa-envelope"></i> Kontakt</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h5><i class="fas fa-map"></i> Mapa Niša</h5>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46332.04810327359!2d21.865210261807068!3d43.32087424674215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0b7c1d5b7e9%3A0x400d79ce4b5b8e0!2z0J3QuNGI!5e0!3m2!1ssr!2srs!4v1698683285714!5m2!1ssr!2srs"
                        width="100%"
                        height="200"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
                <div class="mt-2">
                    <small><i class="fas fa-location-dot"></i> Centar grada: Trg kralja Milana</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <div class="social-icons">
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="row copyright">
            <div class="col-12 text-center">
                <p class="mb-0">
                    &copy; {{ date('Y') }} Moja Aplikacija. Sva prava zadržana. |
                    <a href="#">Uslovi korišćenja</a> |
                    <a href="#">Politika privatnosti</a>
                </p>
                <small class="text-muted">
                    <i class="fas fa-map-marker-alt"></i> Lokacija: Niš, Srbija
                </small>
            </div>
        </div>
    </div>
</footer>
