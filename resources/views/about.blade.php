@extends('layouts.layout')
@section('title', __("About Me"))
@section('content')
    @include('inc.header')
    <main class="main-about">
        <section class="container about-section">
            <div class="image-container">
                <img src="../img/photo.jpg" alt="" width="300px">
            </div>
            <div class="about-text">
                <h2>{{__("A little about me")}}</h2>
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
                    <h3 class="title">{{__("Location")}}</h3>
                    <div class="line"></div>
                    <p class="grid-text">{{__("Almaty, Almaty, Kazakhstan")}}</p>
                    <h3 class="title">{{__("Age")}}</h3>
                    <div class="line"></div>
                    <p class="grid-text">{{__("19 yo")}}</p>
                    <h3 class="title">{{__("Freelance")}}</h3>
                    <div class="line"></div>
                    <p class="grid-text">{{__("Available")}}</p>
                </div>
            </div>
        </section>
    </main>
    @include('inc.footer')
</body>
</html>
@endsection