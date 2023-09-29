@extends('layouts.public')

@section('content')
    <div class="container m-5">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Stazione di partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Orario di partenza</th>
                            <th scope="col">Orario di arrivo</th>
                            <th scope="col">Codice treno</th>
                            <th scope="col">Numero Carrozze</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <th scope="row">#</th>
                                <td>{{ $train->azienda }}</td>
                                <td>{{ $train->stazione_di_partenza }}</td>
                                <td>{{ $train->stazione_di_arrivo }}</td>
                                <td>{{ $train->orario_di_partenza }}</td>
                                <td>{{ $train->orario_di_arrivo }}</td>
                                <td>{{ $train->codice_treno }}</td>
                                <td>{{ $train->numero_carrozze }}</td>
                                <td>{{ $train->in_orario ? 'Y' : 'N' }}</td>
                                <td>{{ $train->cancellato ? 'Y' : 'N' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
