@extends('layouts.app')
@section('content')

    <div id="home" class="container-fluid">
        <section class="carrossel">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 zoom" src="img/maca.jpg" alt="maça">
                        <div class="carousel-caption d-md-block">
                            <h5>Maçã</h5>
                            <p class="paragrafo-home">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 zoom" src="img/cenoura.jpg" alt="cenoura">
                        <div class="carousel-caption d-md-block">
                            <h5>Cenoura</h5>
                            <p class="paragrafo-home">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 zoom" src="img/alface.jpg" alt="alface">
                        <div class="carousel-caption d-md-block">
                            <h5>Alface</h5>
                            <p class="paragrafo-home">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 zoom" src="img/pimentao.jpg" alt="pimentao">
                        <div class="carousel-caption d-md-block">
                            <h5>Pimentão</h5>
                            <p class="paragrafo-home">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>



    <section class="section section_oQueFazemos">
        <div class="container">
            <div class="section_div">
                <h2 class="text-center text-uppercase">O que fazemos</h2>
            </div>
            <div class="col-md-6 m-auto OqueFazemos-div">
                <p class="paragrafo-home text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quisquam totam
                reiciendis necessitatibus odio fuga aliquam.</p>
            </div>
        </div>
    </section>

    <section class="section section_QuemSomos">
            <div class="container">
                <div class="row section_div">
                    <div class="col-md-5">
                        <h2 class="text-uppercase center">Quem Somos</h2>
                        <div class="section_divp">
                            <p class="center paragrafo-home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quisquam totam reiciendis
                            necessitatibus odio fuga aliquam.</p>
                        </div>
                    </div>
                    <div col="col-md-7 image-center">
                        <img class="quem-somo__img" src="./img/deliveg1.png" alt="logo" >
                    </div>
                </div>
            </div>
    </section>



    <section class="section section_raio">
            <div class="container">
                <div class="row section_div">
                    <div class="col-md-5">
                        <h2 class="text-uppercase center">Raio de Entrega</h2>
                        <div class="section_divp">
                            <p class="center paragrafo-home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quisquam totam reiciendis
                            necessitatibus odio fuga aliquam.</p>
                        </div>
                    </div>
                    <div col="col-md-7">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14631.013926704016!2d-46.65606015!3d-23.541367349999998!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1554198050307!5m2!1spt-BR!2sbr"
                        width="375" height="218" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
    </section>


@endsection
