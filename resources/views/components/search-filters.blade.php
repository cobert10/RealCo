@props(['residential_types'])

<div class="relative col-span-1">
    <div data-toggle="dropdown" class="border rounded p-2 border-sky-500 items-center justify-between flex cursor-pointer">
        <span>Rent</span>
        <span id="see-more" class="material-symbols-outlined pt-1">expand_more</span>
    </div>
    <div id="dropdown-menu" class="z-10 hidden mt-2 absolute left-0 w-60 bg-white items-center justify-center border border-gray-300 rounded-lg broder-white shadow-2xl">
        <div class="m-2 pl-1 font-semibold">Purpose</div>
        <div class="border border-gray-300 rounded border-gray w-fit p-2 mx-auto flex">
            <p class="p-1 bg-sky-100 w-24 rounded text-sky-700 font-medium text-center">Buy</p>
            <p class="p-1 w-24 text-center">Rent</p>
        </div>
        <div class="m-2 pl-1 font-semibold">Completion Status</div>
        <div class="m-2 grid-cols-12 grid gap-2 text-center ">
            <span class="border border-gray-300 rounded-xl bg-sky-100 text-sky-700 border-sky-900 col-span-3 p-1">All</span>
            <span class="border border-gray-300 rounded-xl col-span-4 p-1">Ready</span>
            <span class="border border-gray-300 rounded-xl col-span-5 p-1">Off-Plan</span>
        </div>
        <div class="flex mx-auto w-fit my-4">
            <p class="p-1 mx-2 bg-sky-100 w-24 rounded text-center border border-sky-950 text-sky-950 bg-white">Reset</p>
            <p class="p-1 mx-2 bg-sky-100 w-24 rounded text-center text-white bg-sky-950">Done</p>
        </div>
    </div>
</div>

<form action="/listings/" class="relative col-span-3 flex flex-shrink justify-end items-center">
    <input placeholder="Enter Location" name="search"  class="border-2 border-gray-400 rounded p-2 w-full"/>
    <span class="material-symbols-outlined absolute right-0 mr-2 w-5">location_on</span>
</form>

<div class="relative col-span-2">
    <div data-toggle="dropdown" class="border rounded p-2 border-sky-500 items-center justify-between flex">
        <span>Residential</span>
        <span id="see-more" class="material-symbols-outlined pt-1">expand_more</span>
    </div>
    <div id="dropdown-menu" class="z-10 hidden mt-2 p-4 absolute right-0 w-80 bg-white items-center grid grid-cols-2 gap-2 justify-between text-center border border-gray-300 rounded-lg broder-white shadow-2xl">
        <div>Residential
            <span class="block max-w-0 max-w-full h-0.5 bg-sky-500"></span>
        </div>
        <div>Commercial
            <span class="block max-w-0 max-w-full h-0.5 bg-sky-500"></span>
        </div>
        @foreach ($residential_types as $residential_type)
            <div class="mt-2 border border-gray-300 col-span-1 rounded-2xl border-gray">{{ $residential_type['name'] }}</div>
        @endforeach
        <div class="flex mx-auto w-fit mt-4">
            <p class="p-1 mr-6 bg-sky-100 w-32 rounded text-center border border-sky-950 text-sky-950 bg-white">Reset</p>
            <p class="p-1  bg-sky-100 w-32 rounded text-center text-white bg-sky-950">Done</p>
        </div>
    </div>
</div>
<div class="relative col-span-2">
    <div data-toggle="dropdown" class="border rounded p-2 border-sky-500 items-center justify-between flex">
        <span>Beds&Baths</span>
        <span id="see-more" class="material-symbols-outlined pt-1">expand_more</span>
    </div>
    <div id="dropdown-menu" class="z-10 hidden mt-2 p-4 absolute right-0 w-60 bg-white items-center grid grid-cols-2 gap-2 justify-center text-center border border-gray-300 rounded-lg broder-white shadow-2xl">
        <div class="flex items-start mb-2">Beds</div>
        <div class="col-span-2">
            <div class="grid grid-cols-4 gap-2">
                @for($i=1; $i<5; ++$i)
                    <div class="rounded-full border border-gray-300 flex items-center justify-center">{{ $i }}</div>
                @endfor
                <div class="rounded-full border border-gray-300 flex items-center justify-center">5+</div>
            </div>
        </div>
        <div class="flex items-start mt-2">Baths</div>
        <div class="col-span-2">
            <div class="grid grid-cols-4 gap-2">
                @for($i=1; $i<5; ++$i)
                    <div class="rounded-full border border-gray-300 flex items-center justify-center">{{ $i }}</div>
                @endfor
                <div class="rounded-full border border-gray-300 flex items-center justify-center">5+</div>
            </div>
        </div>
        <div class="flex mx-auto w-fit mt-4">
            <p class="p-1 mr-4 bg-sky-100 w-24 rounded text-center border border-sky-950 text-sky-950 bg-white">Reset</p>
            <p class="p-1  bg-sky-100 w-24 rounded text-center text-white bg-sky-950">Done</p>
        </div>
    </div>
</div>
<div class="relative col-span-2 hidden md:block">
    <div data-toggle="dropdown" class="border rounded p-2 border-sky-500 items-center justify-between flex focus:ring-blue-600">
        <span class="">Price(PHP)</span>
        <span id="see-more" class="material-symbols-outlined pt-1">expand_more</span>
    </div>
    <form action="{{ url('/listings/') }}" method="GET" id="dropdown-menu" class="z-10 hidden my-2 p-4 absolute right-0 w-80 bg-white items-center grid grid-cols-2 gap-2 justify-center text-center border border-gray-300 rounded-lg shadow-2xl">
        <div>Minimum</div>
        <div>Maximum</div>
        <div class="mt-2 ">
            <input placeholder="0" class="p-2 w-32 border border-gray-300 rounded-lg border-gray" name="min"/>
        </div>
        <div class="mt-2">
            <input placeholder="Any" class="p-2 w-32 border border-gray-300 rounded-lg border-gray" name="max"/>
        </div>
        <div class="flex mx-auto w-fit mt-4 gap-6">
            <button class="p-1 ml-1 bg-sky-100 w-32 rounded text-center border border-sky-950 text-sky-950 bg-white">Reset</button>
            <button class="p-1 bg-sky-100 w-32 rounded text-center text-white bg-sky-950">Done</button>
        </div>
    </form>
</div>
<div class="relative col-span-2 hidden md:grid">
    <div data-toggle="dropdown" class="border rounded p-2 border-sky-500 items-center justify-between flex">
        <span>More Filters</span>
        <span id="see-more" class="material-symbols-outlined">expand_more</span>
    </div>
    <div id="dropdown-menu" class="z-10 hidden right-0 top-12 my-2 p-4 absolute w-80 bg-white grid grid-cols-2 gap-2 border border-gray-300 rounded-lg broder-white shadow-2xl">
        <div class="flex justify-start">Minimum</div>
        <div class="flex justify-start">Maximum</div>
        <div class="mt-2 ">
            <input placeholder="0" class="p-2 w-32 border border-gray-300 rounded-lg border-gray"/>
        </div>
        <div class="mt-2">
            <input placeholder="Any" class="p-2 w-32 border border-gray-300 rounded-lg border-gray"/>
        </div>
        <div class="justify-start flex col-span-2">Keyword</div>
        <div class="justify-start flex col-span-2">
            <input placeholder="Add relevant keywords" class="p-2 w-full border border-gray-300 rounded">
        </div>
        <div class="justify-start flex col-span-2">Agent or Agency</div>
        <div class="justify-start flex col-span-2">
            <input placeholder="Add an agent or agency" class="p-2 w-full border border-gray-300 rounded">
        </div>
        <div class="flex mx-auto w-fit mt-4 gap-6">
            <p class="p-1 ml-1 bg-sky-100 w-32 rounded text-center border border-sky-950 text-sky-950 bg-white">Reset</p>
            <p class="p-1 bg-sky-100 w-32 rounded text-center text-white bg-sky-950">Done</p>
        </div>
    </div>
</div>