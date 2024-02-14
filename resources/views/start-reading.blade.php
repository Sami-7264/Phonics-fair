<!-- resources/views/index.blade.php -->

@extends('layout')

@section('content')
    <div class="row">
        @include('partials.navbar')
        <!-- resources/views/partials/content.blade.php -->

        <div class="col-md-9 col-lg-10">
            <div class="content-sec ps-md-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="lesson-heading">Start Reading Menu <span>(Level 16-58)</span> <img class="image-icon" src="images/abc.png">
                        </h1>
                        <p class="letters-text">
                            Build listening, reading and writing skills. Follow the step-by-step
                            progression or easily find a particular sound pattern to study.
                            Just click on one of the groups below.</p>
                    </div>
                    <div class="col-md-auto pe-3">
                        <div class="letters-groups">
                            <a href="#"><img src="https://phonicsfair.com/images/lessons/logo_sample.png"></a>
                        </div>
                    </div>
                </div>
{{--                @foreach ($lessons as $lesson)--}}
{{--                    @if (!isset($groupedLessons[$lesson['group_image']]))--}}
{{--                        @php--}}
{{--                            $groupedLessons[$lesson['group_image']] = [];--}}
{{--                        @endphp--}}
{{--                    @endif--}}
{{--                    @php--}}
{{--                        $groupedLessons[$lesson['group_image']][] = $lesson;--}}
{{--                    @endphp--}}
{{--                @endforeach--}}

{{--                @foreach ($groupedLessons as $groupImage => $groupedLesson)--}}
{{--                    <div class="row align-items-center gx-md-0 list-lessons">--}}
{{--                        <div class="col-6 col-md">--}}
{{--                            <a class="" href="{{asset('upload/'. $lesson['attach_file'])}}"> <img alt="" class="img-fluid" src="{{ asset('upload/' . $groupImage) }}"></a>--}}
{{--                        </div>--}}
{{--                        @foreach ($groupedLesson as $lesson)--}}
{{--                            <div class="col-6 col-md">--}}
{{--                                <a class="" href="{{asset('upload/'. $lesson['attach_file'])}}"> <img alt="" class="img-fluid" src="{{asset('upload/' . $lesson['img']) }}"></a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                @endforeach--}}
                <article class="page-lessons-content">
                    <ul class="start-reading clearfix cal row justify-content-center">
                        <li class="col-md-4 lesson-list">
                            <div class="lesson-sample"></div>
                            <h3 class="text-center">Level 16-22</h3>
                            <ul class="text-center">
                                <li><a href="#" onclick="window.open('/start-reading(16-22)');">-ck</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(16-22)');">he she we</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(16-22)');">long-a</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(16-22)');">long-e</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(16-22)');">long-i</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(16-22)');">long-o</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(16-22)');">long-u</a></li>
                            </ul>
                        </li>
                        <li class="col-md-4 lesson-list">
                            <div class="lesson-sample"></div>
                            <h3 class="text-center">Level 23-29</h3>
                            <ul class="text-center">
                                <li><a href="#" onclick="window.open('/start-reading(23-29)');">an</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(23-29)');">ai  ay</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(23-29)');">ea  ee</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(23-29)');">oa  ow</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(23-29)');">oo (long-u)</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(23-29)');">short verbs</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(23-29)');">sh</a></li>
                            </ul>
                        </li>
                        <li class="col-md-4 lesson-list">
                            <div class="lesson-sample"></div>
                            <h3 class="text-center">Level 30-36</h3>
                            <ul class="text-center">
                                <li><a href="#" onclick="window.open('/start-reading(30-36)');">numbers 1</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(30-36)');">ch</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(30-36)');">plurals</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(30-36)');">th</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(30-36)');">th (voiced)</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(30-36)');">ou  ow</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(30-36)');">or</a></li>
                            </ul>
                        </li>
                        <li class="col-md-4 lesson-list">
                            <div class="lesson-sample"></div>
                            <h3 class="text-center">Level 37-43</h3>
                            <ul class="text-center">
                                <li><a href="#" onclick="window.open('/start-reading(37-43)');">oo (short-u)</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(37-43)');">body parts</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(37-43)');">opposites</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(37-43)');">ey  y</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(37-43)');">numbers 2</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(37-43)');">ar</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(37-43)');">sn  sp</a></li>
                            </ul>
                        </li>
                        <li class="col-md-4 lesson-list">
                            <div class="lesson-sample"></div>
                            <h3 class="text-center">Level 44-50</h3>
                            <ul class="text-center">
                                <li><a href="#" onclick="window.open('/start-reading(44-50)');">st  sw</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(44-50)');">br  tr</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(44-50)');">fr  gr</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(44-50)');">cr  dr</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(44-50)');">bl  cl</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(44-50)');">fl  pl</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(44-50)');">y  (long-i)</a></li>
                            </ul>
                        </li>
                        <li class="col-md-4 lesson-list">
                            <div class="lesson-sample"></div>
                            <h3 class="text-center">Level 51-58</h3>
                            <ul class="text-center">
                                <li><a href="#" onclick="window.open('/start-reading(51-58)');">er  ir  ur</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(51-58)');">er  or</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(51-58)');">oi  oy</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(51-58)');">air  are  ear</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(51-58)');">all  aw</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(51-58)');">-nk</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(51-58)');">-ng</a></li>
                                <li><a href="#" onclick="window.open('/start-reading(51-58)');">-nd  -nt</a></li>
                            </ul>
                        </li>
                        <!-- Add more <li> elements for subsequent rows -->
                    </ul>
                </article>
            </div>

        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("ul.start-reading li a").click(function(e){
                e.preventDefault(); // Prevent the default action of the link
                var url = $(this).attr("href"); // Get the href attribute of the clicked link
                // Make an AJAX request to the controller method
                $.ajax({
                    url: url,
                    method: "GET",
                    success: function(response){
                        // Handle the response from the controller method
                        console.log(response);
                    },
                    error: function(xhr, status, error){
                        // Handle any errors that occur during the AJAX request
                        console.error(error);
                    }
                });
            });
        });
    </script>
<style>
    .page-lessons-content .start-reading {
        display: flex;
        flex-wrap: wrap;
    }

    .page-lessons-content .start-reading li {
        padding: 10px;
    }
    /*.lesson-list li {*/
    /*    border: 1px solid #020000; !* Add border style *!*/
    /*    padding: 10px; !* Add padding for better spacing *!*/
    /*}*/

</style>
@endsection
