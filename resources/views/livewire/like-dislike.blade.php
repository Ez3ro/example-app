<div class="flex gap-3 p-4">
    <button wire:click="likeDislike()" class="flex items-center gap-2 hover:text-blue-600 transition-all {{ $hasLike ? 'text-blue-700' : ''}}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          {{  $likes }}
    </button>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <button wire:click="likeDislike(false)" class="flex items-center gap-2 hover:text-blue-600 transition-all {{ $hasLike === false ? 'text-blue-700' : ''}}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          {{ $dislikes  }}
          
    </button>
</div>
