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
                        <h1 class="lesson-heading">Start Reading <span>(Level 44-50)</span> <img class="image-icon" src="images/abc.png">
                        </h1>
                        <p class="letters-text">
                            Start Reading includes over 850 pages of fun printable worksheets. You'll find a variety of exercises that continually develop your child's reading and writing skills.
                        </p>
                    </div>
                    <div class="col-md-auto pe-3">
                        <div class="letters-groups">
                            <a href="#"><img src="https://phonicsfair.com/images/lessons/logo_sample.png"></a>
                        </div>
                    </div>
                </div>
                @php
                    $counter = 1;
                @endphp
                @foreach ($lessons as $lesson)
                    @if (!isset($groupedLessons[$lesson['group_image']]))
                        @php
                            $groupedLessons[$lesson['group_image']] = [];
                        @endphp
                    @endif
                    @php
                        $groupedLessons[$lesson['group_image']][] = $lesson;
                    @endphp
                @endforeach

                @foreach ($groupedLessons as $groupImage => $groupedLesson)
                    <div class="row align-items-center gx-md-0 list-lessons">
                        {{-- Sort the grouped lessons based on the 'priority' key --}}
                        @php
                            // Create an array to hold the sorted items
                            $sortedItems = [];

                            // Populate the sortedItems array based on priority
                            foreach ($groupedLesson as $lesson) {
                                $priority = $lesson['priority'];
                                if (!isset($sortedItems[$priority])) {
                                    $sortedItems[$priority] = [];
                                }
                                $sortedItems[$priority][] = $lesson;
                            }

                            // Sort the items by priority
                            ksort($sortedItems);
                        @endphp
                        <div class="col-6 col-md">
                            <audio id="backgroundSound{{ $counter }}" src="{{ asset('upload/'. $lesson['group_sound']) }}" preload="auto"></audio>
                            <a class="playSound" href="#" data-soundId="{{ $counter }}">
                                <img alt="" class="img-fluid" src="{{ asset('upload/' . $groupImage) }}">
                            </a>
                        </div>
                        @php
                            $counter++;
                        @endphp

                        {{-- Render the sorted items --}}
                        @foreach ($sortedItems as $priority => $lessons)
                            @foreach ($lessons as $lesson)
                                <div class="col-6 col-md">
                                    <a class="" href="{{ asset('upload/'. $lesson['attach_file']) }}" target="_blank"> <img alt="" class="img-fluid" src="{{ asset('upload/' . $lesson['img']) }}"></a>
                                </div>
                            @endforeach
                        @endforeach

                        <div class="col-6 col-md">
{{--                            <a href="{{ asset('upload/'. $lesson['group_video']) }}" target="_blank"> <img src="{{ asset('images/video.png') }}"></a>--}}
                            <a href="{{ route('video-manager', ['video_url' => asset('upload/'. $lesson['group_video'])]) }}" target="_blank">
                                <img src="{{ asset('images/video.png') }}">
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>
    <script>
        var currentlyPlayingAudio = null;

        document.querySelectorAll('.playSound').forEach(function(anchor) {
            anchor.addEventListener('click', function() {
                var soundId = this.getAttribute('data-soundId');
                var audio = document.getElementById('backgroundSound' + soundId);

                if (currentlyPlayingAudio) {
                    currentlyPlayingAudio.pause();
                }

                audio.play();
                currentlyPlayingAudio = audio;
            });
        });
    </script>
@endsection
