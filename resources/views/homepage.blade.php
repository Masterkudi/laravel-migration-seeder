@extends("layouts.public")


@section("content")
    <div class="container mt-5">
        <div class="row">
            <div class="col">

                <div class="box">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Data partenza</th>
                            <th scope="col">Stazione partenza</th>
                            <th scope="col">Stazione arrivo</th>
                            <th scope="col">Orario partenza</th>
                            <th scope="col">Orario arrivo</th>
                            <th scope="col">Codice treno</th>
                            <th scope="col">Numero Carrozze</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>                      
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $trains as $train)  
                            
                                    @if ( $train->data_partenza >= date('Y-m-d'))
                                        <tr>
                                        <th scope="row">#</th>
                                        <td>{{$train->azienda}}</td>
                                        <td>{{$train->data_partenza}}</td>                           
                                        <td>{{$train->stazione_partenza}}</td>                           
                                        <td>{{$train->stazione_arrivo}}</td>                           
                                        <td>{{$train->orario_partenza}}</td>                           
                                        <td>{{$train->orario_arrivo}}</td>                           
                                        <td>{{$train->codice_treno}}</td>                           
                                        <td>{{$train->numero_carrozze}}</td>                           
                                        <td>{{($train->in_orario)? "SI" : "No"}}</td>                           
                                        <td>{{($train->cancellato)? "Si" : "No"}}</td>                           
                                        </tr>                                                           
                                    @endif
                            @endforeach     
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection