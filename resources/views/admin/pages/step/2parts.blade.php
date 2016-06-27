@extends('admin.master')
@section('content')
    @include('flash::message')
    <section class="card">
        <header class="card-header card-header-xl">
            Bolum Ekle
        </header>
        <div class="card-block">
            <form action="{{ route('admin.parts.add.post') }}" method="post" role="form">
                {!! csrf_field() !!}
                <div class="form-group">
                    <select class="select2-photo" name="series_id">
                        @foreach($series as $seri)
                            @if($seri->id == $id)
                                <option data-photo="{{ url('uploads/') }}/{{ $seri->image }}" value="{{ $seri->id }}" selected>{{ $seri->title }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Sezon Sec :</label>
                    <select class="select2" name="seasons_id">
                    @foreach($seasons as $season)
                            <option value="{{ $season->id }}">{{ $season->season_number }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="episode" placeholder="Bolum Adi">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="date" class="form-control" name="date" placeholder="Bolum Tarihi">
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleError"> Site Adı</label>
                            <input type="text" class="form-control" name="site_name1">
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label">Linki</label>
                            <div class="form-control-wrapper">
                                <input type="url" class="form-control" name="site_url1">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label"> Site Adı</label>
                            <input type="text" class="form-control" name="site_name2">
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label">Linki</label>
                            <div class="form-control-wrapper">
                                <input type="url" class="form-control" name="site_url2">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleError"> Site Adı</label>
                            <input type="text" class="form-control" name="site_name3">
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label">Linki</label>
                            <div class="form-control-wrapper">
                                <input type="url" class="form-control" name="site_url3">
                            </div>
                        </fieldset>
                    </div>
                </div>
                <button class="btn btn-primary">Ekle</button>
            </form>

        </div>
    </section>
@endsection
@section('plugins')
    <script src="js/lib/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="js/lib/select2/select2.full.min.js"></script>
    <script>
        $('.select2').select2();
        $('.add-link').click(function(){
           alert('tiklandi');
        });


    </script>
@endsection