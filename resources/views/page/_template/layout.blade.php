<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Ramon Castro Reis</title>

    <meta name="description" content="Psiciquiatria e Psicoterapia"/>
    <meta name="keywords" content="Tratamentos psciquiatricos, psicoterapias">
    <meta name="author" content="DevWev - Solucões em TI">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.ico') }}">


    @stack('styles')

</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky sticky-header">

        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand brand-logo mr-4" href="#">
                <img src="{{ URL::asset('assets/images/logo_ramon.png') }}" class="img-fluid logo-light" alt="">
                <img src="{{ URL::asset('assets/images/logo_ramon.png') }}" class="img-fluid logo-dark" alt="">
            </a>
            <div class="navbar-collapse collapse justify-content-center" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="#curriculum" class="nav-link">Currículo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#psico" class="nav-link">Psicoterapias</a>
                    </li>
                    <li class="nav-item">
                        <a href="#farmaco" class="nav-link">Farmacoterapia</a>
                    </li>
                    <li class="nav-item">
                        <a href="#question" class="nav-link">Dúvidas</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="contact_btn" >

                <a href="https://api.whatsapp.com/send?phone=5551984009796" class="btn btn-sm" style="padding: 5px;">(51) 98400-9796</a>

                <button class="navbar-toggler ml-2 p-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="icofont-navigation-menu"></i>

                </button>

            </div>
        </div>
    </nav>
    <div class="form-container outer">
        @section('content')
            content to main page
        @show
    </div>
    <!-- Link top -->
    <a href="#" class="back_top" style="display: inline;"> <i class="icofont-rounded-up"></i></a>
    @stack('scripts')
</body>
</html>

