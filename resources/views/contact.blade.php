<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Contact</title>
</head>
<body>
    @include('inc.header')
    <main class="main-contact">
        <section class="container qa-section">
            <div class="question">
                <h1>Frequently Asked Questions</h1>
                <h3>Epsum factorial non deposit quid pro quo hic escorol?</h3>
                <p>
                    Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki
                    ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay.
                    Marquee selectus non provisio incongruous feline nolo contendre.
                </p>
                <h3>Gratuitous octopus niacin, sodium glutimate?</h3>
                <p>
                    Quote meon an estimate et non interruptus stadium. Sic tempus fugit
                    esperanto hiccup estrogen. Glorious baklava ex librus hup hey ad infinitum.
                    Non sequitur condominium facile et geranium incognito.
                </p>
            </div>
            <div class="form-container">
                <form class="form" action="#" method="post">
                    <h1>Contact Me</h1>
                    <h4>Please contact me using this form.</h4>
                    <input type="text" name="name" value="" placeholder="Full Name">
                    <input type="text" name="email" value="" placeholder="Email">
                    <input type="text" name="number" value="" placeholder="Phone Number">
                    <textarea name="name" rows="8" cols="50" placeholder="Your message..."></textarea>
                    <input class="button-form" type="button" name="" value="Get In Touch">
                </form>
            </div>
        </section>
    </main>
    @include('inc.footer')
</body>
</html>