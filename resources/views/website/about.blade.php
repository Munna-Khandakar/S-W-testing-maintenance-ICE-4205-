@extends('website.layout')
@section('content')

<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">About foodgarage</h2>
        <p class="col-12 text-center">Food Garage is an online restaurant that has come to Palashbari to serve
            the flavor of online food delivery with local and exotic delicious food. At this moment it’s working
            just on food items, later it'll target all necessary products like grocery items and many more. This
            service will also create employment for local poor people as part-time delivery men.</p>
    </header>

    <div class="tm-container-inner tm-persons">
        <div class="row">
            <article class="col-lg-6">
                <figure class="tm-person">
                    <img src="website/img/about-02.jpg" alt="Image" class="img-fluid tm-person-img" />
                    <figcaption class="tm-person-description">
                        <h4 class="tm-person-name">Aditya Kumar Sarker </h4>
                        <p class="tm-person-title">Founder and CEO</p>
                        <p class="tm-person-about">Very excited to start this journey for my hometown. Hope and
                            believe that it’ll bring change to the area.</p>
                        <div>
                            <a href="https://www.facebook.com/adityakumar.sarker.1" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-6">
                <figure class="tm-person">
                    <img src="website/img/about-01.jpg" alt="Image" class="img-fluid tm-person-img" />
                    <figcaption class="tm-person-description">
                        <h4 class="tm-person-name">Tarikul Abir</h4>
                        <p class="tm-person-title">Founder and CEO</p>
                        <p class="tm-person-about">With a view to make my hometown more digitized, I started
                            this business.</p>
                        <div>
                            <a href="https://www.facebook.com/tarikul.abir" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-6">
                <figure class="tm-person">
                    <img src="website/img/about-03.jpg" alt="Image" class="img-fluid tm-person-img" />
                    <figcaption class="tm-person-description">
                        <h4 class="tm-person-name">Munna Khandakar</h4>
                        <p class="tm-person-title">Founder and CTO</p>
                        <p class="tm-person-about">I can’t speak for myself. You are my voice.First use it, then
                            comment it.</p>
                        <div>
                            <a href="https://www.facebook.com/munna.khandakar.14/" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                            <a href="https://www.instagram.com/munna_2577/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                            <a href="https://www.youtube.com/channel/UCD0qouh94NlVcWIwPzgGeAQ" class="
										tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
                            <a href="https://www.linkedin.com/in/munna-khandakar-a18068125/" class="
										tm-social-link"><i class="fab fa-linkedin tm-social-icon"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-6">
                <figure class="tm-person">
                    <img src="website/img/about-04.jpg" alt="Image" class="img-fluid tm-person-img" />
                    <figcaption class="tm-person-description">
                        <h4 class="tm-person-name">Riadul Islam</h4>
                        <p class="tm-person-title">Product Modarator</p>
                        <p class="tm-person-about">In Saa Allah, it will help the people of palashbari in their
                            day to day life.</p>
                        <div>
                            <a href="https://www.facebook.com/muhammadriadulislam.shahin" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                            <a href="https://www.instagram.com/riadulislaam/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </article>
        </div>
    </div>
    <div class="tm-container-inner tm-featured-image">
        <div class="row">
            <div class="col-12">
                <div class="placeholder-2">
                    <div class="parallax-window-2" data-parallax="scroll" data-image-src="website/img/about-05.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-container-inner tm-history">
        <div class="row">
            <div class="col-12">
                <div class="tm-history-inner">
                    <img src="website/img/history.svg" alt="Image" class="img-fluid tm-history-img" />
                    <div class="tm-history-text">
                        <h4 class="tm-history-title">History of this online restaurant</h4>
                        <p class="tm-mb-p">Three friends came together with a view to developing something new
                            for their hometown. Studying outside the hometown they found many scopes which can
                            develop the lifestyle of the people of their locality. They found the town is
                            advancing in the restaurant sector. So, they tried to develop an online restaurant
                            and food delivery system which would help the busy people of the town to get in
                            touch with the restaurants.
                        </p>
                        <p class="tm-mb-p">Their idea was also encouraging and helpful as it was built in Corona
                            Pandemic. This would help people not to go outside just for tasty food. As the town
                            is not economically good for all classes of people, it will create many scopes for
                            the poor people to engage with the team.
                        </p>
                        <p class="tm-mb-p" style="color: #008080;">In a nutshell, they are moving forward with a
                            great vision of creating a positive impact on the people of Palashbari. They are
                            expecting your support wholeheartedly...!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
