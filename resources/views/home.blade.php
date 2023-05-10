<x-app-layout>
<section class="w-full md:w-2/3 flex flex-col items-center px-3">

    <article class="flex flex-col shadow my-4">
        @foreach ($posts as $post)

        <x-post-item :post="$post"></x-post-item>
       
       @endforeach
    </article>

    

    {{ $posts->links() }}
  

</section>
</x-app-layout>