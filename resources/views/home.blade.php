@extends('layouts.layout')
@section('title', __("Home"))
@section('content')
    @include('inc.header')
    <main class="main">
        <section class="container main-section">
            <div class="main-text">
                <h1 class="dynamic-text">
                    <a href="" class="typewrite" data-period="2000"
                    data-type='[ "Hello!", "你好!", "Salut!", "こんにちは。", "안녕하세요" ]'><span class="wrap"></span></a>
                </h1>
                <div class="text-container">
                    <h1>{{__("I'm")}} <span class="logo-mod">{{__("Omar Temirgali.")}}</span> {{__("I create")}} <br/> {{__("amazing things.")}}</h1>
                    <p>{{__("I am a programmer and web developer")}} <br/> {{__("based in Almaty, Kazakhstan.")}}</p>
                </div>
            </div>
        </section>
    </main>
    <section class="container sk-container">
        <div class="edu">
            <h1>{{__("Skills and Education")}}</h1>
            <p>
                {{__("I studied at lyceum N39 named after Sultan-Akhmet Kozhykov. Currently, I am a sophomore in Suleyman Demirel University and taking several courses about web programming (frontend and backend).")}}
            </p>
            <p>
                {{__("Gratuitous octopus niacin, sodium glutimate. Quote meon an estimate et non interruptus stadium. Sic tempus fugit esperanto hiccup estrogen. Glorious baklava ex librus hup hey ad infinitum. Non sequitur condominium facile et geranium incognito. Epsum factorial non deposit quid pro quo hic escorol. Marquee selectus non provisio incongruous feline nolo contendre Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum.")}}
            </p>
        </div>
        <div class="skills">
            <h2>HTML 99%</h2>
            <div class="light-gray ">
                <div class="progress-bar full"></div>
            </div>
            <h2>CSS 99%</h2>
            <div class="light-gray">
                <div class="progress-bar full"></div>
            </div>
            <h2>JavaScript 60%</h2>
            <div class="light-gray">
                <div class="progress-bar middle"></div>
            </div>
            <h2>Java/JavaFX 80%</h2>
            <div class="light-gray">
                <div class="progress-bar upper"></div>
            </div>
            <h2>SQL/Oracle 58%</h2>
            <div class="light-gray">
                <div class="progress-bar mid"></div>
            </div>
        </div>
    </section>
    @include('inc.footer')
@endsection