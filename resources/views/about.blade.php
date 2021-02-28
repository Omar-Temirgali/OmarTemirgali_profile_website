<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>About</title>
</head>
<body>
    @include('inc.header')
    <main class="main-about">
        <section class="container about-section">
            <div class="image-container">
                <img src="../img/photo.jpg" alt="" width="300px">
            </div>
            <div class="about-text">
                <h2>A little about me</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br/>
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <br/> nostrud
                    exercitation ullamco laboris.
                </p>
                <ul>
                    <li>Quias netus magni netsum eos qui ratione sequi.</li>
                    <li>Venis ratione sequi netus enim quia tempor magni.</li>
                    <li>Enim ipsam netus voluptatem quia voluptas.</li>
                </ul>
                <div class="about-info">
                    <h3 class="title">Location</h3>
                    <div class="line"></div>
                    <p class="grid-text">Almaty, Almaty, Kazakhstan</p>
                    <h3 class="title">Age</h3>
                    <div class="line"></div>
                    <p class="grid-text">19 yo</p>
                    <h3 class="title">Freelance</h3>
                    <div class="line"></div>
                    <p class="grid-text">Available</p>
                </div>
            </div>
        </section>
    </main>
    @include('inc.footer')
</body>
</html>
