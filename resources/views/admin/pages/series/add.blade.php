@extends('admin.master')
@section('content')
    @include('flash::message')
    <section class="card">
        <header class="card-header card-header-xl">
            Dizi Ekle
        </header>
        <div class="card-block">
            <form action="{{ route('admin.series.add.post') }}" method="post" role="form" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="title" id="" placeholder="Dizi Adi">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <textarea type="text" class="form-control" name="about" placeholder="Dizi Hakkinda">Dizi Bio</textarea>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="location" placeholder="Dizinin Çekim yeri">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="file" class="form-control" name="image" placeholder="Dizi Afisi">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="avarage_minute" placeholder="Dizinin Ortalama Bölüm Süresi">
                </div>

                <button type="submit" class="btn btn-primary">Gönder</button>
            </form>

        </div>
    </section>
    @endsection