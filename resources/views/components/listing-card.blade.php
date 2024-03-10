@props(['listings'])

{{-- temporary. will create a blade template later --}}
<div class="col-span-6">
    <div class="font-normal text-xl my-4">Properties for rent in Philippines</div>
    <div class="grid grid-cols-12 gap-x-4">
        <div class="flex col-span-8 items-center">
            <span class="pr-2">Furnish Type:</span>
            <div class="border rounded-md border-gray-300 grid grid-cols-3 text-center">
                <span class="col-span-1 border rounded bg-sky-100 m-1 ">All</span>
                <span class="col-span-1 m-1 ">Furnished</span>
                <span class="col-span-1 m-1 ">Unfurnished</span>
            </div>
        </div>
        <div class="relative flex col-span-3 border rounded border-gray-300  px-2 gap-x-1">
            <div class="flex items-center ">
                <span class=""><i class="fa-solid fa-arrow-down-wide-short text-[0.85rem]"></i></span>
                <span class="text-[1rem]">Popular</span>
                <span class="absolute right-2 top-0"><i class="fa-solid fa-sort-down text-[1.5rem]"></i></span>
            </div>
            <div id="popular-drawer" class="absolute z-20">

            </div>
        </div> 


        <div class="flex col-span-1 items-center ">
            {{-- <div class="border rounded-md border-gray-300 grid grid-cols-2 text-center"> --}}
                <span class="col-span-1 border rounded bg-sky-100 px-2 py-1"><i class="fa-solid fa-table-cells-large"></i></span>
                <span class="col-span-1 px-2 py-1"><i class="fa-solid fa-list"></i></span>
            {{-- </div> --}}
        </div>
    </div>
</div>

<div class=" col-span-6">
    <div class="grid grid-cols-1">
        @foreach($listings as $listing)
            <div class="flex my-2 border border-gray-300 rounded-lg ">
                <div class="w-2/5">
                    <img class="w-96 h-60 rounded-l-md" src="{{ asset('images/'. $listing->type. '/' .$listing->image. '.jpg') }}" />
                </div>
                <div class="w-3/5 pl-3">
                    <div class="flex font-semibold mt-2 my-2">
                        <span>PHP<span>
                        <span class="text-2xl">{{ $listing->price }}</span>
                        <span>Yearly</span>
                    </div>
                    <div class="flex items-center font-bold my-2">
                        <span class="font-bold"><a href="listings/{{ $listing->id }}">{{ $listing->type }}</a></span>
                        <span class="mx-3">|</span>
                        <span class="material-symbols-outlined">bed</span>
                        <span class="mx-2 font-bold">{{ $listing->beds }}</span>
                        <span class="material-symbols-outlined">bathtub</span>
                        <span class="mx-2 font-bold">{{ $listing->baths }}</span>
                        <span class="mx-3">|</span>
                        <span class="">Area:{{ $listing->area }} sqft<span>
                    </div>
                    <div class="flex items-center -ml-1.5 my-2">
                        <span class="material-symbols-outlined">location_on</span>
                        {{ $listing->location }}
                    </div>
                    <div class="truncate">
                        <span class="font-semibold">Details:</span>
                        <span>{{ $listing->description }}</span>
                    </div>
                    <div class="flex items-center -ml-1.5 my-2">
                        <span class="flex rounded-lg p-1 mx-2 bg-blue-100 text-blue-900">
                            <span class="material-symbols-outlined">badge</span>
                            Agent: {{ $listing->agent }}</span>
                    </div>
                    <div class="flex items-center -ml-1.5 my-2">
                        <div class="flex rounded-lg p-2 mx-2 bg-sky-100 text-sky-900">
                            <span class="material-symbols-outlined">phone</span>
                            <span>Call</span>
                        </div>
                        <div class="flex rounded-lg p-2 mx-2 bg-sky-100 text-sky-900">
                            <span class="material-symbols-outlined">email</span>
                            <span>Email</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>