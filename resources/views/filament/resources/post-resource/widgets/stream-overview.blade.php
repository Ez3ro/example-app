<x-filament::widget class="grid grid-cols-3 gap-3">
    <x-filament::card>
        <h2 class="text-lg sm:text-xl font-bold tracking-light">
            Stream Views    
        </h2>
        <div class="flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
           {{ $Views }} </div>
        
        {{-- Widget content --}}
        {{-- Widget content --}}
    </x-filament::card>
    <x-filament::card>
        <h2 class="text-lg sm:text-xl font-bold tracking-light">
            Stream Likes    
        </h2>
        <div class="flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
          {{ $likes }} </div>
       
        {{-- Widget content --}}
        {{-- Widget content --}}
    </x-filament::card>
    <x-filament::card>
       
       
        <h2 class="text-lg sm:text-xl font-bold tracking-light">
            Stream Dislikes    
        </h2>
        <div class="flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
               {{ $dislikes }} </div>
        {{-- Widget content --}}
        {{-- Widget content --}}
    </x-filament::card>
</x-filament::widget>
