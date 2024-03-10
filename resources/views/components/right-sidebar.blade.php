@props(['recommendations', 'recommendations_2'])
<div class="hidden col-span-2 my-1 md:block">
    <div class="my-1 border border-gray-300 rounded-lg ">
        <img class="overflow-hidden" src="{{ asset('images/find_homes.jpg') }}">
    </div>
    <div class="flex border border-gray-300 rounded border-sky-950 justify-center items-center p-2 mt-2 hover:bg-sky-100 text-sky-950">
        <span class="material-icons">notifications</span>
        <span class="">ALERT ME ON NEW PROPERTIES</span>
    </div>
    <div class="justify-center bg-gray-100 mt-4 p-4 border-1 rounded">
        <div class="font-semibold">Recommended searches</div>
    </div>
    @foreach ($recommendations as $recommendation)
        <div class="pl-4"><a href="/" class="text-sm hover:underline">{{ $recommendation }}</a></div>
    @endforeach
    <div class="justify-center bg-gray-100 mt-4 p-4 border-1 rounded">
        <div class="font-semibold">Near Abu Dhabi</div>
    </div>
    @foreach ($recommendations_2 as $recommendation)
        <div class="pl-4"><a href="/" class="text-sm hover:underline">{{ $recommendation }}</a></div>
    @endforeach
</div>