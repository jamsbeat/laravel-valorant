<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit underline" style="color: {{ $agent->color }}">{{ $agent->name }}</div>
     </x-slot:heading>

     <section class="max-w-screen pb-12 border-b border-black pt-6">
        <div class="flex justify-between items-start">
            <div class="flex flex-col w-[600px] p-4 font-montserrat rounded border border-black/10" style="background-color: {{ $agent->color }};">
                <!-- Agent description -->
                {{ $agent->description }}
    
                <!-- Grid section directly under the description -->
                <div class="grid grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded border border-black/10">
                        <div class="grid grid-cols-1">
                            <img src="https://placehold.co/144" alt="">
                            <div class="pt-4 font-outfit">Grid Item 1</div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded border border-black/10">
                        <div class="grid grid-cols-1">
                            <img src="https://placehold.co/144" alt="">
                            <div class="pt-4 font-outfit">Grid Item 2</div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded border border-black/10">
                        <div class="grid grid-cols-1">
                            <img src="https://placehold.co/144" alt="">
                            <div class="pt-4 font-outfit">Grid Item 3</div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="flex flex-col items-end">
                <div class="rounded">
                    <img src="https://media.valorant-api.com/agents/a3bfb853-43b2-7238-a4f1-ad90e9e46bcc/fullportrait.png" alt="" class="w-auto h-[500px]">
                </div>
            </div>
        </div>
    </section>
    

    
</x-layout>