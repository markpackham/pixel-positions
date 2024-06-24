@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">Laracasts</div>
    <div class="py-8">
        {{-- By using "group" in the parent div we can also make the h3 and no other element turn blue on hover --}}
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">Video Producer</h3>
        <p class="text-sm mt-4">Full Time - $60,000</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag :$tag size="small">Backend</x-tag>
            @endforeach
        </div>

        <x-employer-logo :width="42" />
    </div>
</x-panel>