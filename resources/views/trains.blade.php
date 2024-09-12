@extends('layouts.main')



@section('content')
    <div class="container my-5">
        <h2>Treni</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Numero Carrozze</th>
                    <th scope="col">Ritardo</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th>{{ $train->id }}</th>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->train_carriage }}</td>

                        <td>{{ $train->on_time === 1 ? 'in orario' : 'in ritardo' }}</td>

                        <td>{{ $train->deleted === 0 ? 'no' : 'si' }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    treni
@endsection
