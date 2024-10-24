<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit">Maps</div>
    </x-slot:heading>

    <section class="max-w-screen pb-16 border-b border-black pt-10">
        <div class="flex justify-between items-start">
            <div class="bg-white/50 w-[600px] h-[220px] p-4 font-montserrat 
            rounded border border-black/10">
            Step into a world designed for tactical brilliance and unforgettable moments. 
            Each map is meticulously crafted to test your creativity, challenge your team’s synergy, and deliver pulse-pounding highlights. 
            Whether you’re setting up the perfect ambush, pulling off incredible plays, or securing the clutch your team needs, this is your stage to shine.
            The plays you make here will echo beyond the game — be the strategist, the innovator, the one they’ll remember and imitate for years to come.
            </div>
            <div class="flex flex-col items-end">
                <div class="rounded border border-black/10">
                    <img src="https://placeholder.com/450x220" alt="" class="w-[450px] h-[220px]">
                </div>
            </div>
        </div>
    </section>

    <div>
        @livewire('map-search')
    </div>



</x-layout>