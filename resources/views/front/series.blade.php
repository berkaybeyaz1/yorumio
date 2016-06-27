<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Yorum io </title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/pace.css') }}">
</head>

<body>
<div id="loader"></div>
<div class="bg"></div>
<div id="wrapper">
    <div class="logo-header">
        <div class="logo">
            <img src="{{ url('img/logo.png') }}">
        </div>
    </div>
    <div class="search-header">
        <input class="search-header-input" type="text" placeholder="Aramak istediğiniz dizi/filmi bu alana yazınız..." onkeyup="up()" onkeydown="down()">
    </div>

    <div class="container">
        <div class="row content">
            <div class="col-md-2 series-content">
                <img src="{{ url('uploads/'.$series->image) }}">
                <span><b>Yapım Yeri:</b> {{ $series->location }}</span>
                <span><b>Sezon:</b> {{ count($series->seasons) }}</span>
                <span><b>Bölüm:</b> {{ count($series->parts) }}</span>
                <span><b>Dakika:</b> {{ $series->avarage_minute }}</span>
            </div>
            <div class="col-md-10">
                <h1 class="title">{{ $series->title }}</h1>
                <p class="about">{{ $series->about }}</p>
                <div class="pTabGenel pTab1">
                    <ul class="tab-list">
                        @foreach($series->seasons as $season)
                        <li><a href="#" data-season="{{ $season->id }}">{{ $season->season_number }}. Sezon</a></li>
                        @endforeach
                    </ul>
                    <!-- Sezonlar Listelendis -->
                    @foreach($series->seasons as $season)
                    <div class="tab-content">
                        <ul class="series-list">
                            <?php $i = 1; ?>
                            @foreach($series->parts as $parts)
                                @if($parts->seasons_id == $season->id)
                            <li class="series-links" data-part="{{ $i }}" data-season="{{ $season->season_number }}" data-links="{{ $parts->links }}">
                                <div class="col-md-4 series-part">Bölüm {{ $i++ }}</div>
                                <div class="col-md-4 series-title">{{ $parts->episode }}</div>
                                <div class="col-md-4 series-date">{{ $parts->date }}</div>
                            </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay modal-open"></div>
<div class="modal modal-open">
    <div class="close">X</div>
    <div class="modal-content">
        <div class="text">
            <div class="attention">
                <div class="rows"><b>Dikkat!</b> web sitemizden ayrılmak üzeresin.</div>
                <div class="rows modal-text">
                </div>
                <div class="rows buttons"><a href="#"><b>Gremots ile Izle</b></a> <a href="#"><b>YabanciDizi ile Izle</b></a></div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('js/pTab.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/blur.js') }}"></script>
<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
<script>


</script>
</body>

</html>
