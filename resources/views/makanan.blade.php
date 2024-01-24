@extends('template')

@section('judul', 'Makanan')

@section('content')
    <table>
        <thead>
            <tr>
                <td>Kode</td>
                <td>Nama</td>
                <td>Kategori</td>
                <td>Harga</td>
                <td>Ket</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                    <td>{{$food->kd_makanan}}</td>
                    <td>{{$food->nama}}</td>
                    <td>{{$food->kategori}}</td>
                    <td>{{$food->harga}}</td>
                    <td>{{$food->ket}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection