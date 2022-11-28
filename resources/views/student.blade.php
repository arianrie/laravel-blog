

@extends('layouts.main')
@include('partials.navbar')

@section('container')
<h1>Page Stud
<table class="table table-sriped">
    ent</h1>
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
    @foreach ($students as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->class }}</td>
        </tr>
    @endforeach
</table>

@endsection