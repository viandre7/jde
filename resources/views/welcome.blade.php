@extends('layouts.app')

@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                <h1>Listado jde</h1>
                @foreach($rta as $rt)

                {{ $rt -> placa}}
                @endforeach
        </div>
@endsection
