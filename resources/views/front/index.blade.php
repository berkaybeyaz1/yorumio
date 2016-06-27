<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <img src="img/logo.png">
        </div>
    </div>
    <div class="search-header">
        <input class="search-header-input" type="text" placeholder="Aramak istediğiniz dizi/filmi bu alana yazınız...">
    </div>
    <div class="container">
        <div class="row">
            @foreach($serieses as $series)
            <div class="col-md-2 series">
                <div class="series-dash">
                    <img src="{{ url('/uploads/'.$series->image) }}">
                    <div class="series-overlay"></div>
                    <h3>{{ $series->title }}</h3>
                    <div class="related-series">
                        <a href="{{ route('series',$series->slug) }}">İlgili <b>sayfa</b></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('js/pTab.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/blur.js') }}"></script>
<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
</body>

</html>
