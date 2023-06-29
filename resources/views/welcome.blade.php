@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                @foreach ($trains as $item)
                    <div class="card mt-3">
                        <span class="p-2">
                            <strong>compagnia: </strong> {{$item->company}}
                        </span>
                        <span class="p-2">
                            <strong>stazione di partenza: </strong> {{$item->starting_station}}
                        </span>
                        <span class="p-2">
                            <strong>stazione d'arrivo: </strong> {{$item->arrival_station}}
                        </span>
                        <span class="p-2">
                            <strong>codice treno: </strong> {{$item->train_code_unique}}
                        </span>
                        <span class="p-2">
                            <strong>numero carrozze: </strong> {{$item->carriages_number}}
                        </span>
                        <span class="p-2">
                            @if ($item->in_time)
                                <strong>In orario</strong>
                            @else
                                <strong>In ritardo</strong>
                            @endif
                        </span>
                        <span class="p-2">
                            @if ($item->deleted)
                                <strong> cancellato</strong>
                            @else
                                <strong>non cancellato</strong>
                            @endif
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection