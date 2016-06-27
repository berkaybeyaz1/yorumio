@extends('admin.master')
@section('content')
    @include('flash::message')
    <section class="card">
        <header class="card-header card-header-xl">
            Sezon Ekle
        </header>
        <div class="card-block">
            <form action="{{ route('admin.seasons.add.post') }}" method="post" role="form">
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
                    <label for=""></label>
                    <input type="number" class="form-control" name="season_number" placeholder="Sezon Numarasi">
                </div>
                <button type="submit" class="btn btn-primary">Ekle</button>
            </form>

        </div>
    </section>
@endsection
@section('plugins')
    <script src="js/lib/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="js/lib/select2/select2.full.min.js"></script>
@endsection