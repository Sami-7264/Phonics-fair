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
                        <h1 class="lesson-heading">Start Reading <span>(Level 30-36)</span> <img class="image-icon" src="images/abc.png">
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
                            <a class="" href="{{ asset('upload/'. $lesson['group_sound']) }}" target="_blank"> <img alt="" class="img-fluid" src="{{ asset('upload/' . $groupImage) }}"></a>
                        </div>

                        {{-- Render the sorted items --}}
                        @foreach ($sortedItems as $priority => $lessons)
                            @foreach ($lessons as $lesson)
                                <div class="col-6 col-md">
                                    <a class="" href="{{ asset('upload/'. $lesson['attach_file']) }}" target="_blank"> <img alt="" class="img-fluid" src="{{ asset('upload/' . $lesson['img']) }}"></a>
                                </div>
                            @endforeach
                        @endforeach

                        <div class="col-6 col-md">
                            <a href="{{ asset('upload/'. $lesson['group_video']) }}" target="_blank"> <img src="{{ asset('images/video.png') }}"></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
@endsection
