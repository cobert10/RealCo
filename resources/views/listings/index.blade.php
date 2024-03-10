@extends('layout')

@section('content')
    @unless(count($listings) == 0)
        <div id="search-filters" class="max-w-[1200px] grid grid-cols-8 md:grid-cols-12 gap-4 mx-auto my-4 cursor-pointer">
            <x-search-filters :residential_types="$residential_types"/>
        </div>

        <!-- container for property and right sidebar-->
        <x-listings-container>
            {{-- Property listings --}}
            <x-listing-card :listings="$listings" />    

            {{-- Right Side Notifications/Recommedations --}}
            <x-right-sidebar :recommendations="$recommendations" :recommendations_2="$recommendations_2" />
        </x-listings-container>

        @else
            <p>No listing found</p>
    @endunless
@endsection