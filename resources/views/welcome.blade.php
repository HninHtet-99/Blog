<x-layout>
    
    <!-- hero section -->
    <x-heroSection />
    
    <!-- blogs section -->
    <x-blogs-section 
    :blogs="$blogs" 
    :categories="$categories" 
    :currentCategory="$currentCategory ?? null"
    />

    <!-- subscribe new blogs -->
    <x-subscribe/>
</x-layout>   
