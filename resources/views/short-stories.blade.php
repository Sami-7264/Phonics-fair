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
                        <h1 class="lesson-heading">Short Stories<span>(Level 1-4)</span> <img class="image-icon" src="images/abc.png">
                        </h1>
                        <p class="letters-text">
                            Over 60 short stories streamlined to develop essential vocabulary and grammar patterns.
                            Ideal for elementary and EFL learners. Each story includes a comprehension exercise and fun
                            activity to help reinforce reading skills and engage students.
                        </p>
                    </div>
                    <div class="col-md-auto pe-3">
                        <div class="letters-groups">
                            <a href="{{route('group-letter')}}"><img src="https://phonicsfair.com/images/lessons/logo_sample.png"></a>
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
                        {{-- Render the image from $groupImage --}}
                            <div class="col-6 col-md">
                                <a class="" href="{{ asset('upload/'. $groupImage) }}" target="_blank"> <img alt="" class="img-fluid" src="{{ asset('upload/' . $groupImage) }}"></a>
                            </div>
                        {{-- Render the next four images from the loop --}}
                        @php
                            $imageCounter = 0; // Initialize image counter
                        @endphp

                        @foreach ($groupedLesson as $lesson)
                            @if ($imageCounter % 4 == 0 && $imageCounter != 0)
                    </div><div class="row align-items-center gx-md-0 list-lessons">
                        @endif
                            <div class="col-6 col-md">
                                <a href="#" onclick="submitPdfForm('{{ $lesson['attach_file'] }}')" class="btn-link p-0">
                                        <img alt="" class="img-fluid" src="{{ asset('upload/' . $lesson['img']) }}">
                                    </a>

                                    <form id="pdfForm" method="get" action="{{ route('pdf.show') }}">
                                        @csrf <!-- Add CSRF token for security -->
                                        <input type="hidden" name="filename" id="filenameInput" value="">
                                    </form>

                                    <script>
                                        function submitPdfForm(filename) {
                                            document.getElementById('filenameInput').value = filename;
                                            document.getElementById('pdfForm').submit();
                                        }
                                    </script>
                            </div>
                        @php
                            $imageCounter++; // Increment image counter
                        @endphp
                        @endforeach

                        {{-- Add empty columns if necessary --}}
                        @php
                            $emptyColumns = 4 - ($imageCounter % 4);
                        @endphp
{{--                        @for ($i = 0; $i < $emptyColumns; $i++)--}}
{{--                            <div class="col-6 col-md"></div>--}}
{{--                        @endfor--}}
                        @if($lesson['group_video'])
                        <div class="col-6 col-md">
{{--                            <a href="{{ asset('upload/'. $lesson['group_video']) }}" target="_blank"> <img src="{{ asset('images/video.png') }}"></a>--}}
                            <a href="{{ route('video-manager', ['video_url' => asset('upload/'. $lesson['group_video'])]) }}" target="_blank">
                                <img src="{{ asset('images/video.png') }}">
                            </a>
                        </div>
                        @endif
                    </div>
                @endforeach


            </div>

        </div>

    </div>
@endsection
