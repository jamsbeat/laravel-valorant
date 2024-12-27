<x-layout>
    <x-slot:heading>
        <div class="font-semibold font-outfit">Agents</div>
    </x-slot:heading>

    <section class="max-w-screen pb-16 border-b border-black pt-10">
        <div class="flex justify-between items-start">
            <x-description>
                Click on any agent to unveil their detailed profile, showcasing their backstory, tactical role, and an overview of their abilities.
                Each agent features three distinct abilities that can turn the tide of a match, along with one powerful ultimate ability that unleashes their full potential.
                Whether you’re looking to master a specific agent or simply learn about the different playstyles, this index is your gateway to the world of Valorant.
            </x-description>
            <div class="flex flex-col items-end">
                <div class="">
                    <img src="https://placeholder.com/450x200" alt="" class="rounded-2xl shadow-lg contrast-0 brightness-125">
                </div>
            </div>
        </div>
    </section>


    <div>
        @livewire('agent-search')
    </div>

</x-layout>
