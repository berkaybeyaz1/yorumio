@extends('admin.master')
@section('content')
    <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h2>Sezonlar</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="card">
        <div class="card-block">
            <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="width: 2%;">#</th>
                    <th style="width: 2%;">#dizi</th>
                    <th>Dizi Adi</th>
                    <th>Afiş</th>
                    <th>Sezon Numarasi</th>
                    <th style="width: 15%;">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($seasons as $season)
                    <tr>
                        <td>{{ $season->id }}</td>
                        <td>{{ $season->series->id }}</td>
                        <td>{{ $season->series->title }}</td>
                        <td style="text-align: center"><img src="{{ url('/uploads/'.$season->series->image) }}" alt="" class="img-responsive img-thumbnail series-img" height="150"></td>
                        <td><h2 style="text-align: center">{{ $season->season_number }}</h2></td>
                        <td><a href="{{ route('admin.seasons.delete',$season->id) }}" onclick="return confirm('Eğer Silerseniz Bütün Sezon ve Bölümler Silinecek');" class="btn btn-danger-outline">Sil</a><button class="btn btn-warning-outline" style="margin-left: 5px;">Düzenle</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
@section('plugins')
    <style>
        .series-img{
            margin-top: 5px !important;
            margin-bottom:5px !important;
            height: 150px !important;
        }
    </style>
    <script src="js/lib/datatables-net/datatables.min.js"></script>
    <script>
        $(function() {
            $('#example').DataTable({
                "order" : [[0,"desc"]]
            });
        });
    </script>
@endsection