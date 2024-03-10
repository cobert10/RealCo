@extends('layout')

@section('content')
    <x-listings-container>
        {{-- Property preview images --}}
        <div class="col-span-8 md:col-span-5">
            <img src="{{ asset('images/'.$listing->type.'/'.$listing->image.'.jpg') }}" alt="" class="h-[38rem] w-[50rem] object-fit">
        </div>
        <div class="col-span-3 hidden md:block">
            <div class="flex flex-col my-auto">
                <div class="mb-4"><img src="{{ asset('images/Penthouse/moritz-bruder-gvCLog5Yv00-unsplash.jpg') }}" class="w-[28.5rem] h-[18.5rem] object-fit"></div>
                <div><img src="{{ asset('images/Penthouse/umit-yildirim-d362E_BDYkU-unsplash.jpg') }}" class="w-[28.5rem] h-[18.5rem] object-fit"></div>
            </div>
        </div>

        <div class="col-span-8 md:col-span-5">
            <div class="grid grid-cols-4">
                @php
                    $property_facts = [
                        'Property type' =>       [$listing->type, 'maps_home_work'],
                        'Property size' =>  [$listing->area, 'apps'],
                        'Bedrooms' =>       [$listing->beds, 'bed'],
                        'Bathrooms' =>      [$listing->baths,'bathtub'],
                        'Project' =>        ['Legacy', 'business']
                    ]
                @endphp
                @foreach ($property_facts as $key => $value)
                    <div class="col-span-1 flex p-1 m-1">
                        <span class="material-symbols-outlined">{{ $value[1] }}</span>
                        <span class="font-normal">{{ $key }}:</span>
                    </div>
                    <div class="col-span-1 p-1 m-1">
                        <span>{{ $value[0] }}</span>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="col-span-3 hidden md:block border border-gray-300 rounded-md ">

        </div>
    </x-listings-container>
@endsection