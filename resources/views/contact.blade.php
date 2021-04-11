@extends('layouts.layout')
@section('title', __("Contacts"))
@section('content')
    @include('inc.header')
    <main class="main-contact">
        <section class="container qa-section">
            <div class="question">
                <h1>{{__("Frequently Asked Questions")}}</h1>
                <h3>{{__("Epsum factorial non deposit quid pro quo hic escorol?")}}</h3>
                <p>
                    {{__("Olypian quarrels et gorilla congolium sic ad nauseum. Souvlaki ignitus carborundum e pluribus unum. Defacto lingo est igpay atinlay. Marquee selectus non provisio incongruous feline nolo contendre.")}}
                </p>
                <h3>{{__("Gratuitous octopus niacin, sodium glutimate?")}}</h3>
                <p>
                {{__("Quote meon an estimate et non interruptus stadium. Sic tempus fugit esperanto hiccup estrogen. Glorious baklava ex librus hup hey ad infinitum. Non sequitur condominium facile et geranium incognito.")}}
                </p>
            </div>
            <div class="form-container">
                <form class="form" action="#" method="post">
                    <h1>{{__("Contact Me")}}</h1>
                    <h4>{{__("Please contact me using this form.")}}</h4>
                    <input type="text" name="name" value="" placeholder="{{__('Full Name')}}">
                    <input type="text" name="email" value="" placeholder="{{__('Email')}}">
                    <input type="text" name="number" value="" placeholder="{{__('Phone Number')}}">
                    <textarea name="name" rows="8" cols="50" placeholder="{{__('Your message...')}}"></textarea>
                    <input class="button-form" type="button" name="" value="{{__('Get In Touch')}}">
                </form>
            </div>
        </section>
    </main>
    @include('inc.footer')
@endsection