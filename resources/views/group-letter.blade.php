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
                        <h1 class="lesson-heading">Letter Sounds<img class="image-icon" src="images/abc.png">
                        </h1>
                        <p class="letters-text" style="float:left; width:709px; margin-bottom:20px; font-size:24px;">
                            Click the letter to hear the sounds. Children develop strong phonemic awareness which is the basis for learning phonics.
                        </p>
                    </div>
                    <div class="click-hear">
                        <img src="images/abc1.jpg" />
                    </div>
                </div>

                <div class="click_listen">
                    <div class="sound"></div>
                    <table width="100%">
                        <tbody><tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">a</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">b</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">c</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">d</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">e</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">f</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">g</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">h</a></p>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">
                                <p class="audio_sound" style="color:#ff0000;"><a class="require-login" href="#">i</a></p>
                            </td>
                        </tr><tr>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#ffffff" width="30">					<div class="group-sample1" bis_skin_checked="1"></div>
                                <div class="position_p position-10" bis_skin_checked="1">
                                    <p class="click_sound audio_sound click_play_10" time="3" position="10" style="color:#f2032a; ">j</p>
                                    <input type="hidden" id="listen_10" value="/../upload/media/2013/11/29UXATsW1.mp3">
                                </div>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">				<div class="position_p position-11" bis_skin_checked="1">
                                    <p class="click_sound audio_sound click_play_11" time="3" position="11" style="color:#ff0000; ">k</p>
                                    <input type="hidden" id="listen_11" value="/../upload/media/2013/11/gEE2lbIMt.mp3">
                                </div>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">				<div class="position_p position-12" bis_skin_checked="1">
                                    <p class="click_sound audio_sound click_play_12" time="3" position="12" style="color:#f2032a; ">l</p>
                                    <input type="hidden" id="listen_12" value="/../upload/media/2013/11/hahlRzaSh.mp3">
                                </div>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">				<div class="position_p position-13" bis_skin_checked="1">
                                    <p class="click_sound audio_sound click_play_13" time="3" position="13" style="color:#f2032a; ">m</p>
                                    <input type="hidden" id="listen_13" value="/../upload/media/2013/11/iWI6AYgOF.mp3">
                                </div>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">				<div class="position_p position-14" bis_skin_checked="1">
                                    <p class="click_sound audio_sound click_play_14" time="3" position="14" style="color:#f2032a; ">n</p>
                                    <input type="hidden" id="listen_14" value="/../upload/media/2013/11/exgyFBLA9.mp3">
                                </div>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">				<div class="position_p position-15" bis_skin_checked="1">
                                    <p class="click_sound audio_sound click_play_15" time="3" position="15" style="color:#f2032a; ">o</p>
                                    <input type="hidden" id="listen_15" value="/../upload/media/2013/11/aPJOh1DkF.mp3">
                                </div>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">				<div class="position_p position-16" bis_skin_checked="1">
                                    <p class="click_sound audio_sound click_play_16" time="3" position="16" style="color:#f2032a; ">p</p>
                                    <input type="hidden" id="listen_16" value="/../upload/media/2013/11/fqzkgczUF.mp3">
                                </div>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">				<div class="position_p position-17" bis_skin_checked="1">
                                    <p class="click_sound audio_sound click_play_17" time="3" position="17" style="color:#ff0000; ">q</p>
                                    <input type="hidden" id="listen_17" value="/../upload/media/2013/11/1Wg2Ikexf.mp3">
                                </div>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">				<div class="position_p position-18" bis_skin_checked="1">
                                    <p class="click_sound audio_sound click_play_18" time="3" position="18" style="color:#f2032a; ">r</p>
                                    <input type="hidden" id="listen_18" value="/../upload/media/2013/11/4nhwT9urX.mp3">
                                </div>
                            </td>
                        </tr><tr>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">s</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">t</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">u</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">v</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">w</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">x</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">y</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">z</a></p>
                            </td>
                            <td class="letter" width="30">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#ffffff" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ck</a></p>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">long<br>
                                        a</a></p>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">long<br>
                                        e</a></p>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">long<br>
                                        i</a></p>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">long<br>
                                        o</a></p>
                            </td>
                            <td class="letter" style="background-color:#ffffff" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">long<br>
                                        u</a></p>
                            </td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">an<br>
                                    </a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ai<br>
                                    </a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ay<br>
                                    </a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ea</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ee</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">oa</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ow</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">oo</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sh</a></p>
                            </td>
                        </tr><tr>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ch</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">th</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">    th<br>
                                        voiced</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ou</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ow</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">or</a></p>
                            </td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">oo</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ey</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">y</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ar</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sn</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sp</a></p>
                            </td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">st</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sw</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">br</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">tr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">fr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">gr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">cr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">dr</a></p>
                            </td>
                            <td class="letter" width="30">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">bl</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">cl</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">fl</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">pl</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">y</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">er ir<br>
                                        ur</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">er<br>
                                        ar</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">oi<br>
                                        oy</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">air<br>
                                        are<br>
                                        ear</a></p>
                            </td>
                        </tr><tr>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">all</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">aw</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">nk</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">ng</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">nd</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">nt</a></p>
                            </td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">mp</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">gl</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">gr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">pr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sc</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sk</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sl</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sm</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sw</a></p>
                            </td>
                        </tr><tr>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">tw</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">wh</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">wr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sch</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">scr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">shr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">sph</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">spl</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">spr</a></p>
                            </td>
                        </tr><tr>
                        </tr>
                        <tr>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">squ</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">str</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">thr</a></p>
                            </td>
                            <td class="letter" style="background-color:#FFFFFF" width="30">
                                <p class="audio_sound" style="color:#f2032a;"><a class="require-login" href="#">tch</a></p>
                            </td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                            <td class="letter" width="30">&nbsp;</td>
                        </tr>
                        </tbody></table>
                </div>


            </div>

        </div>

    </div>
@endsection
