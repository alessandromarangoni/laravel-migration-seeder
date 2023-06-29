@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                @foreach ($trains as $item)
                    <div class="card">
                        <span class="p-2">
                            {{$item->company}}
                        </span>
                        <span class="p-2">
                            {{$item->starting_station}}
                        </span>
                        <span class="p-2">
                            {{$item->arrival_station}}
                        </span>
                        <span class="p-2">
                            {{$item->train_code_unique}}
                        </span>
                        <span class="p-2">
                            {{$item->carriages_number}}
                        </span>
                        <span class="p-2">
                            {{$item->in_time}}
                        </span>
                        <span class="p-2">
                            {{$item->deleted}}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection