<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Waundalust</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.js')}}">

    </head>
    <body>
       <div class="app">

           @include('partials/nav')

           <div class="head">
               <h2>Willkommen in den Bergen</h2>
                    <section id="#home" class="cover">
                        <form  class="flex-form">
                            <label for="from">
                                <i class="ion-search"></i>
                            </label>
                            <input type="search" placeholder="Suchbegriff eingeben">
                            <input type="submit" value="Suchen">
                        </form>
                    </section>
               <img style="width: 100%" src="/../images/home.png" alt="">
           </div>

           <section class="category">

               <h3>Die beliebtesten Wanderungen</h3>

               <div class="container">

                    <div class="item_1">
                        <img src="/../images/gasselhöhe_8.png" alt="">

                        <div class="box_1 box">
                            <h4>Spiegelsee</h4>
                            <p>Wunderschöne Wanderung zum Spiegelsee wo sich der Dachstein spiegelt. Wunderschöne Wanderung zum Spiegelsee wo sich der Dachstein spiegelt.
                                <i class="ion-arrow"></i>
                            </p>

                        </div>

                    </div>

                    <div class="item_2">
                        <img src="/../images/gasselhöhe_8.png" alt="">

                        <div class="box_2 box">
                            <h4>Spiegelsee</h4>
                            <p>Wunderschöne Wanderung zum Spiegelsee wo sich der Dachstein spiegelt.Wunderschöne Wanderung zum Spiegelsee wo sich der Dachstein spiegelt</p>
                        </div>

                    </div>

               </div>
           </section>

           <section class="category category_2">

               <h3>Alternative Aktivitäten</h3>

               <div class="container">

                   <div class="item_1">
                       <img src="/../images/gasselhöhe_8.png" alt="">

                       <div class="box_1 box">
                           <h4>Spiegelsee</h4>
                           <p>Wunderschöne Wanderung zum Spiegelsee wo sich der Dachstein spiegelt. Wunderschöne Wanderung zum Spiegelsee wo sich der Dachstein spiegelt.
                               <i class="ion-arrow"></i>
                           </p>

                       </div>

                   </div>

                   <div class="item_2">
                       <img src="/../images/gasselhöhe_8.png" alt="">

                       <div class="box_2 box">
                           <h4>Spiegelsee</h4>
                           <p>Wunderschöne Wanderung zum Spiegelsee wo sich der Dachstein spiegelt.Wunderschöne Wanderung zum Spiegelsee wo sich der Dachstein spiegelt</p>
                       </div>

                   </div>

               </div>
           </section>

       </div>

    @include('partials/footer')
    </body>
</html>
