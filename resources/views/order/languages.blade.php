<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
 <style type="text/css">
 .header{
                        	display: flex;

                        	justify-content: space-between;
                        	text-transform: uppercase;
                        	padding: 5px 100px 5px 125px;
                        	border-bottom: 5px solid black;
                        	background-color: rgb(255,192,203);
                        	color: white;
                        	width:80%;


                        }
                        </style>
 <div id="app">
    <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;text-decoration: none;">
                            @switch($locale)
                                @case('en')
                                <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" width="20" alt=""> English
                                @break
                                @case('kz')
                               <img src="https://www.akorda.kz/assets/media/flag.jpg" width="20" alt=""> Қазақ тілі
                                @break
                                @case('ru')
                                 <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/1200px-Flag_of_Russia.svg.png" width="20" alt=""> Русский язык
                                @break
                                @default
                                 <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" width="20" alt=""> English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en" style="text-decoration: none;"> <img src="https://cdn.britannica.com/33/4833-004-828A9A84/Flag-United-States-of-America.jpg" width="20" alt=""> English</a><br>
                            <a class="dropdown-item" href="kz" style="text-decoration: none;" ><img src="https://www.akorda.kz/assets/media/flag.jpg" width="20" alt=""> Қазақ тілі</a><br>
                            <a class="dropdown-item" href="ru" style="text-decoration: none;"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f3/Flag_of_Russia.svg/1200px-Flag_of_Russia.svg.png" width="20" alt=""> Русский язык</a>
                        </div>
                    </li>
                </ul>
                    <div class="header"; style="color:white;">
                                                <div><img class="card-img-top"style="width: 40px; height: 40px; " src="https://i.pinimg.com/originals/ab/8e/8d/ab8e8d3f8aab71818795ce2db4891c64.png"></div>
                                                   <div><img class="card-img-top"style="width: 40px; height: 40px; " src="https://cdn.icon-icons.com/icons2/1826/PNG/512/4202011emailgmaillogomailsocialsocialmedia-115677_115624.png"></div>
                                             <div><img class="card-img-top"style="width: 40px; height: 40px; " src="https://i.pinimg.com/originals/7b/7b/c6/7b7bc658d3fce83780679e84dc62f2fa.png"></div>
                                             <div><img class="card-img-top"style="width: 34px; height: 37px; " src="https://www.freepnglogos.com/uploads/lokasi-logo-png/lokasi-logo-location-poi-pin-vector-graphic-pixabay-30.png"></div>

</div>

                    </div>
            </div>
        </nav>


    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
