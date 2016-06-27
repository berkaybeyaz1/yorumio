@extends('admin.master')
@section('content')
    @include('flash::message')
    <header class="section-header">
        <div class="tbl">
            <div class="tbl-row">
                <div class="tbl-cell">
                    <h2>Bolumler</h2>
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
                    <th>Dizi Adi</th>
                    <th>Bolum adi</th>
                    <th>Sezon Numarasi</th>
                    <th style="width: 15%;">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($series as $seri)
                    <tr>
                        <td>{{ $seri->id }}</td>
                        <td>{{ $seri->series->title }}</td>
                        <td>{{ $seri->episode }}</td>
                        <td>{{ $seri->seasons->season_number }}</td>
                        <td><button class="btn btn-danger-outline">Sil</button><button class="btn btn-warning-outline" style="margin-left: 5px;">Düzenle</button></td>
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
