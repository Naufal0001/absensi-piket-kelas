@extends('layouts.main')
@section('content')
    <div class="sm:ml-64">
        <div class="container p-4 bg-blue-400">
            <form action="/asd" method="post">
                @csrf
                <table class="table w-full ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Alasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i <= 5; $i++)
                        <tr>
                            <td><input type="text" name="id[]" value="{{ $i }}" hidden>{{ $i }}</td>
                            <td>Ucup Usecase</td>
                            <td>
                                <select name="keterangan[]" id="">
                                    <option value="Piket">Piket</option>
                                    <option value="Tidak Piket">Tidak Piket</option>
                                </select>
                            </td>
                            <td><input name="alasan[]" type="text"></td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
                <button type="submit" class="mt-4">Konfirmasi</button>
            </form>
        </div>
    </div>
@endsection
