<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/app.css">
        <script src="https://kit.fontawesome.com/0a66a0aac9.js" crossorigin="anonymous"></script>
        <title>Let's colonize Mars</title>
    </head>
    <body onload="javascript:updateGrid()"> 
        <header class="bg-light">
            <nav class="navbar navbar-expand-lg container-lg py-3">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Let's colonize Mars</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="/">Zones à éviter</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/mineral">Minerais</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/about">Fonctionnement</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
        <div class="container-fluid bg-dark p-5">
          
            <div class="row gx-5">
              <div class="col-6 d-flex flex-column align-items-center"> 
                <div class="w-100 d-flex justify-content-between px-5">
                  <p class="text-white">-</p>
                  <p class="text-white">Niveau de dangerosité</p>
                  <p class="text-white">+</p>
                </div>                
                <div class="row pb-5">
                  <div class="gradient"></div>
                  <div class="gradient"></div>
                  <div class="gradient"></div>
                  <div class="gradient"></div>
                  <div class="gradient"></div>
                  <div class="gradient"></div>
                  <div class="gradient"></div>
                  <div class="gradient"></div>
                  <div class="gradient"></div>
                  <div class="gradient"></div>
                </div>

                <div class="map-container">
                  <div class="row">
                    <div class="zone col-1" data-lat="1" data-lng="1">1-1</div>
                    <div class="zone col-1" data-lat="1" data-lng="2">1-2</div>
                    <div class="zone col-1" data-lat="1" data-lng="3">1-3</div>
                    <div class="zone col-1" data-lat="1" data-lng="4">1-4</div>
                    <div class="zone col-1" data-lat="1" data-lng="5">1-5</div>
                    <div class="zone col-1" data-lat="1" data-lng="6">1-6</div>
                    <div class="zone col-1" data-lat="1" data-lng="7">1-7</div>
                    <div class="zone col-1" data-lat="1" data-lng="8">1-8</div>
                    <div class="zone col-1" data-lat="1" data-lng="9">1-9</div>
                    <div class="zone col-1" data-lat="1" data-lng="10">1-10</div>
                    <div class="zone col-1" data-lat="1" data-lng="11">1-10</div>
                    <div class="zone col-1" data-lat="1" data-lng="12">1-8</div>
                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="2" data-lng="1">2-1</div>
                    <div class="zone col-1" data-lat="2" data-lng="2">2-2</div>
                    <div class="zone col-1" data-lat="2" data-lng="3">2-3</div>
                    <div class="zone col-1" data-lat="2" data-lng="4">2-4</div>
                    <div class="zone col-1" data-lat="2" data-lng="5">2-5</div>
                    <div class="zone col-1" data-lat="2" data-lng="6">2-6</div>
                    <div class="zone col-1" data-lat="2" data-lng="7">2-7</div>
                    <div class="zone col-1" data-lat="2" data-lng="8">2-8</div>
                    <div class="zone col-1" data-lat="2" data-lng="9">2-9</div>
                    <div class="zone col-1" data-lat="2" data-lng="10">2-10</div>
                    <div class="zone col-1" data-lat="2" data-lng="11">2-11</div>
                    <div class="zone col-1" data-lat="2" data-lng="12">2-12</div>
                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="3" data-lng="1">3-1</div>
                    <div class="zone col-1" data-lat="3" data-lng="2">3-2</div>
                    <div class="zone col-1" data-lat="3" data-lng="3">3-3</div>
                    <div class="zone col-1" data-lat="3" data-lng="4">3-4</div>
                    <div class="zone col-1" data-lat="3" data-lng="5">3-5</div>
                    <div class="zone col-1" data-lat="3" data-lng="6">3-6</div>
                    <div class="zone col-1" data-lat="3" data-lng="7">3-7</div>
                    <div class="zone col-1" data-lat="3" data-lng="8">3-8</div>
                    <div class="zone col-1" data-lat="3" data-lng="10">3-9</div>
                    <div class="zone col-1" data-lat="3" data-lng="10">3-10</div>
                    <div class="zone col-1" data-lat="3" data-lng="11">3-11</div>
                    <div class="zone col-1" data-lat="3" data-lng="12">3-12</div>
                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="4" data-lng="1">4-1</div>
                    <div class="zone col-1" data-lat="4" data-lng="2">4-2</div>
                    <div class="zone col-1" data-lat="4" data-lng="3">4-3</div>
                    <div class="zone col-1" data-lat="4" data-lng="4">4-4</div>
                    <div class="zone col-1" data-lat="4" data-lng="5">4-5</div>
                    <div class="zone col-1" data-lat="4" data-lng="6">4-6</div>
                    <div class="zone col-1" data-lat="4" data-lng="7">4-7</div>
                    <div class="zone col-1" data-lat="4" data-lng="8">4-8</div>
                    <div class="zone col-1" data-lat="4" data-lng="9">4-9</div>
                    <div class="zone col-1" data-lat="4" data-lng="10">4-10</div>
                    <div class="zone col-1" data-lat="4" data-lng="11">4-11</div>
                    <div class="zone col-1" data-lat="4" data-lng="12">4-12</div>
                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="5" data-lng="1">5-1</div>
                    <div class="zone col-1" data-lat="5" data-lng="2">5-2</div>
                    <div class="zone col-1" data-lat="5" data-lng="3">5-3</div>
                    <div class="zone col-1" data-lat="5" data-lng="4">5-4</div>
                    <div class="zone col-1" data-lat="5" data-lng="5">5-5</div>
                    <div class="zone col-1" data-lat="5" data-lng="6">5-6</div>
                    <div class="zone col-1" data-lat="5" data-lng="7">5-7</div>
                    <div class="zone col-1" data-lat="5" data-lng="8">5-8</div>
                    <div class="zone col-1" data-lat="5" data-lng="9">5-9</div>
                    <div class="zone col-1" data-lat="5" data-lng="10">5-10</div>
                    <div class="zone col-1" data-lat="5" data-lng="11">5-11</div>
                    <div class="zone col-1" data-lat="5" data-lng="12">5-12</div>
                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="6" data-lng="1">6-1</div>
                    <div class="zone col-1" data-lat="6" data-lng="2">6-2</div>
                    <div class="zone col-1" data-lat="6" data-lng="3">6-3</div>
                    <div class="zone col-1" data-lat="6" data-lng="4">6-4</div>
                    <div class="zone col-1" data-lat="6" data-lng="5">6-5</div>
                    <div class="zone col-1" data-lat="6" data-lng="6">6-6</div>
                    <div class="zone col-1" data-lat="6" data-lng="7">6-7</div>
                    <div class="zone col-1" data-lat="6" data-lng="8">6-8</div>
                    <div class="zone col-1" data-lat="6" data-lng="9">6-9</div>
                    <div class="zone col-1" data-lat="6" data-lng="10">6-10</div>
                    <div class="zone col-1" data-lat="6" data-lng="11">6-11</div>
                    <div class="zone col-1" data-lat="6" data-lng="12">6-12</div>
                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="7" data-lng="1">7-1</div>
                    <div class="zone col-1" data-lat="7" data-lng="2">7-2</div>
                    <div class="zone col-1" data-lat="7" data-lng="3">7-3</div>
                    <div class="zone col-1" data-lat="7" data-lng="4">7-4</div>
                    <div class="zone col-1" data-lat="7" data-lng="5">7-5</div>
                    <div class="zone col-1" data-lat="7" data-lng="6">7-6</div>
                    <div class="zone col-1" data-lat="7" data-lng="7">7-7</div>
                    <div class="zone col-1" data-lat="7" data-lng="8">7-8</div>
                    <div class="zone col-1" data-lat="7" data-lng="9">7-9</div>
                    <div class="zone col-1" data-lat="7" data-lng="10">7-10</div>
                    <div class="zone col-1" data-lat="7" data-lng="11">7-11</div>
                    <div class="zone col-1" data-lat="7" data-lng="12">7-12</div>
                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="8" data-lng="1">8-1</div>
                    <div class="zone col-1" data-lat="8" data-lng="2">8-2</div>
                    <div class="zone col-1" data-lat="8" data-lng="3">8-3</div>
                    <div class="zone col-1" data-lat="8" data-lng="4">8-4</div>
                    <div class="zone col-1" data-lat="8" data-lng="5">8-5</div>
                    <div class="zone col-1" data-lat="8" data-lng="6">8-6</div>
                    <div class="zone col-1" data-lat="8" data-lng="7">8-7</div>
                    <div class="zone col-1" data-lat="8" data-lng="8">8-8</div>
                    <div class="zone col-1" data-lat="8" data-lng="9">8-9</div>
                    <div class="zone col-1" data-lat="8" data-lng="10">8-10</div>
                    <div class="zone col-1" data-lat="8" data-lng="11">8-11</div>
                    <div class="zone col-1" data-lat="8" data-lng="12">8-12</div>
                  </div>     
                  <div class="row">
                    <div class="zone col-1" data-lat="9" data-lng="1">9-1</div>
                    <div class="zone col-1" data-lat="9" data-lng="2">9-2</div>
                    <div class="zone col-1" data-lat="9" data-lng="3">9-3</div>
                    <div class="zone col-1" data-lat="9" data-lng="4">9-4</div>
                    <div class="zone col-1" data-lat="9" data-lng="5">9-5</div>
                    <div class="zone col-1" data-lat="9" data-lng="6">9-6</div>
                    <div class="zone col-1" data-lat="9" data-lng="7">9-7</div>
                    <div class="zone col-1" data-lat="9" data-lng="8">9-8</div>
                    <div class="zone col-1" data-lat="9" data-lng="9">9-9</div>
                    <div class="zone col-1" data-lat="9" data-lng="10">9-10</div>
                    <div class="zone col-1" data-lat="9" data-lng="11">9-11</div>
                    <div class="zone col-1" data-lat="9" data-lng="12">9-12</div>
                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="10" data-lng="1">10-1</div>
                    <div class="zone col-1" data-lat="10" data-lng="2">10-2</div>
                    <div class="zone col-1" data-lat="10" data-lng="3">10-3</div>
                    <div class="zone col-1" data-lat="10" data-lng="4">10-4</div>
                    <div class="zone col-1" data-lat="10" data-lng="5">10-5</div>
                    <div class="zone col-1" data-lat="10" data-lng="6">10-6</div>
                    <div class="zone col-1" data-lat="10" data-lng="7">10-7</div>
                    <div class="zone col-1" data-lat="10" data-lng="8">10-8</div>
                    <div class="zone col-1" data-lat="10" data-lng="9">10-9</div>
                    <div class="zone col-1" data-lat="10" data-lng="10">10-10</div>
                    <div class="zone col-1" data-lat="10" data-lng="11">10-11</div>
                    <div class="zone col-1" data-lat="10" data-lng="12">10-12</div>
                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="11" data-lng="1">11-1</div>
                    <div class="zone col-1" data-lat="11" data-lng="2">11-2</div>
                    <div class="zone col-1" data-lat="11" data-lng="3">11-3</div>
                    <div class="zone col-1" data-lat="11" data-lng="4">11-4</div>
                    <div class="zone col-1" data-lat="11" data-lng="5">11-5</div>
                    <div class="zone col-1" data-lat="11" data-lng="6">11-6</div>
                    <div class="zone col-1" data-lat="11" data-lng="7">11-7</div>
                    <div class="zone col-1" data-lat="11" data-lng="8">11-8</div>
                    <div class="zone col-1" data-lat="11" data-lng="9">11-9</div>
                    <div class="zone col-1" data-lat="11" data-lng="10">11-10</div>
                    <div class="zone col-1" data-lat="11" data-lng="11">11-11</div>
                    <div class="zone col-1" data-lat="11" data-lng="12">11-12</div>                  </div>
                  <div class="row">
                    <div class="zone col-1" data-lat="12" data-lng="1">12-1</div>
                    <div class="zone col-1" data-lat="12" data-lng="2">12-2</div>
                    <div class="zone col-1" data-lat="12" data-lng="3">12-3</div>
                    <div class="zone col-1" data-lat="12" data-lng="4">12-4</div>
                    <div class="zone col-1" data-lat="12" data-lng="5">12-5</div>
                    <div class="zone col-1" data-lat="12" data-lng="6">12-6</div>
                    <div class="zone col-1" data-lat="12" data-lng="7">12-7</div>
                    <div class="zone col-1" data-lat="12" data-lng="8">12-8</div>
                    <div class="zone col-1" data-lat="12" data-lng="9">12-9</div>
                    <div class="zone col-1" data-lat="12" data-lng="10">12-10</div>
                    <div class="zone col-1" data-lat="12" data-lng="11">12-11</div>
                    <div class="zone col-1" data-lat="12" data-lng="12">12-12</div>
                  </div>          
                </div>            
                  
              </div>
              <div class="col-6">  
                
                @yield('content')

              </div>    

                
            </div>
        </div>      
        
    </body>
    <script src="/app.js"></script>
</html>