<x-main-layout>


    <!-- component -->
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">New Events</h1>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            @foreach ($events as $event )
            <div class="lg:flex">
                <img 
                class="object-cover w-full h-56 rounded-lg lg:w-64" 
                src="{{ asset('/storage/' . $event->image) }}" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="{{ route('eventShow' , $event->id) }}" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        {{ $event->title }}
                    </a>
                    <span class="text-sm text-gray-500 dark:text-gray-300">  {{ $event->country->name }}</span> 
                    <span class="flex flex-wrap space-x-2"> 
                        @foreach ( $event->tags as $tag)
                         <p class="text-sm px-1 bg-slate-200 rounded-md" >  {{ $tag->name }}</p>
                        @endforeach
                        </span>
                  
                </div>
            </div>
                
            @endforeach
            

            

           

           
        </div>
    </div>
</section>
    
</x-main-layout>