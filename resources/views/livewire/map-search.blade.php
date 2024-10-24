<div>
    <div class="my-12">
        <input type="text" wire:mode.live="search" placeholder="Search agents/role ..." class="mb-4 p-2 rounded bg-white/50 border-black/5 w-full md:w-1/2 lg:w-1/3">
    </div>

   @foreach($maps as $map)
        <div class="list-none">
            <div>
                {{ $map->title }}
            </div>
        </div>
    @endforeach

</div>
