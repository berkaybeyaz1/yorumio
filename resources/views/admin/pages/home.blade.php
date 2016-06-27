@extends('admin.master')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    	<strong>Başarılı</strong> Başarıyla Giriş Yapmış Bulunuyorsun Kerim...
    </div>
    @endif
<a href="{{ route('admin.series.add') }}">
<section class="widget widget-simple-sm-fill">
    <div class="widget-simple-sm-icon">
        <i class="font-icon font-icon-pencil"></i>
    </div>
    <div class="widget-simple-sm-fill-caption">Dizi Ekle</div>
</section>
</a>
<a href="#">
    <section class="widget widget-simple-sm-fill orange">
        <div class="widget-simple-sm-icon">
            <i class="font-icon font-icon-cogwheel"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Sezon Ekle</div>
    </section>
</a>
<a href="#">
    <section class="widget widget-simple-sm-fill green">
        <div class="widget-simple-sm-icon">
            <i class="font-icon font-icon-picture-double"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Bölüm Ekle</div>
    </section>
</a>

    @endsection