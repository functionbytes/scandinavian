@extends('layouts.app')

@section('content')

<main class="cirqi">
    <div class="cjlpv c2ksj cxrsk c8syf c96ud cn2cr cxct7">

        <!-- Page header -->
        <div class="cpti8">

            <!-- Title -->
            <h1 class="text-slate-800 dark:text-slate-100 font-bold clxpd ctsdk">Image Gallery for car :  {{ $car->brand }} </h1>

        </div>

        <livewire:image-gallery :instance="$car">

       

    </div>
</main>


@endsection
