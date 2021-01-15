@extends('layouts.frontendlayout')

@section('content')



    <div class="page-banner">

        <div class="page-banner-inr">

            <div class="banner-img">

                <img src="{{url('/')}}/assets/images/page-banner.jpg" alt="">

            </div>

            <div class="banner-heading">

                <h2> {{$names}}</h2>

            </div>


        </div>

    </div>



    <div class="expertise-content">

        <div class="container">

            <div class="row">

                <div class="expertise-inr">

                    {{--                <div class="expertise-heading">--}}

                    {{--                    <h3 id="expert">Vind Medische afkortingen</h3>--}}
                    {{--                </div>--}}

                    <div class="expertise-content">

                        <div class="row">

                            <div class="col-md-7 noPadding">

                                <div class="cascode-first">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <h4>Vind een diagnose</h4>

                                            <div class="form-group">

                                                <label>Kies medische expertise</label>

                                                <ul class="d-flex ">

                                                    @foreach($exp as $ex)

                                                        <li onclick="myFunction(<?php echo $ex->id; ?>,this)"
                                                            data_id="{{$ex->id}}">{{$ex->name}}</li>

                                                    @endforeach


                                                </ul>
<br />
                                                <label>Kies een diagnose</label>

                                                <select class="form-control select2 changedata" name="expertise">

                                                    <option value="" disabled selected>Selecteer/type...</option>

                                                    @foreach($experts as $expert)

                                                        <optgroup label="{{$expert->name}}"
                                                                  data-select2-id="{{$expert->id}}">

                                                            @foreach($shorts as $short)

                                                                @if($expert->id == $short->expertise_id)

                                                                    <option expert_name="{{$expert->name}}"
                                                                            ex_id="{{$expert->id}}"
                                                                            expert_d="{{$expert->description}}"
                                                                            short_id="{{$short->id}}"
                                                                            short_d="{{$short->description}}"
                                                                            value="{{$short->short_code}}">{{$short->short_code}} {{$short->value}}</option>

                                                                @endif



                                                            @endforeach

                                                        </optgroup>

                                                    @endforeach

                                                </select>

                                                <div class="loader" style="display: none;">

                                                    <div class="LoaderBalls">

                                                        <div class="LoaderBalls__item"></div>

                                                        <div class="LoaderBalls__item"></div>

                                                        <div class="LoaderBalls__item"></div>

                                                    </div>

                                                </div>

                                            </div>


                                        </div>

                                        <div class="col-md-6">

                                            <h4>Code</h4>

                                            <div class="code-list">


                                                <input type="text" class="" name="codeAndDiagnose"

                                                       id="codeAndDiagnose" value="" readonly>


                                                <button class="btn-blue" onclick="copyCode('codeAndDiagnose')">

                                                    <img src="{{url('/')}}/assets/images/feather-copy.png" alt="copy">

                                                </button>

                                            </div>

                                            <div class="code-list">

                                                <input class="short_code" type="text" id="code" name="code" value=""

                                                       readonly>

                                                <button class="btn-blue" onclick="copyCode('code')">

                                                    <img src="{{url('/')}}/assets/images/feather-copy.png" alt="copy">

                                                </button>

                                            </div>

                                            <div class="code-list">

                                                <input type="text" class="" name="diagnose" id="diagnose"

                                                       value="" readonly>

                                                <button class="btn-blue" onclick="copyCode('diagnose')">

                                                    <img src="{{url('/')}}/assets/images/feather-copy.png" alt="copy">

                                                </button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="cascode-second">

                                    <h4>Gebruiksaanwijzing</h4>

                                    <ul>

                                        <li>Kies een medische expertise gebied (e.g. Hart- en longziekten)</li>
                                        <li>Kies een diagnose door op de 'selectie/keuze' balk te klikken</li>

                                        <li>Vervolgens typt u enkele begin letters van de diagnose in het tekstveld.
                                        </li>

                                        <li>n de tekstvelden eronder ziet u de samengestelde code en diagnose, de code
                                            en diagnose apart
                                        </li>

                                        <li>Klik op de gewenste 'kopieer' icoon om de code en diagnose, code of alleen
                                            diagnose te kopieren
                                        </li>

                                        <li>U kunt nu de gekopieerde code en/of diagnose 'plakken' in uw rapportage</li>

                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-5 noPadding">

                                <h4>Toelichting</h4>

                                <div class="diagnose-dtl-heading">

                                <h5 id="expertname">Kies een medische expertise</h5>

                                </div>

                                <div  class="diagnose-dtl-list">
                                    <div id="short_d"></div>
                                    <div id="description"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



@endsection
