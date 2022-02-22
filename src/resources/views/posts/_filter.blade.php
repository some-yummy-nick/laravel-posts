<div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
    <!--  Category -->
    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl md:w-32 w-full">
        <x-category-dropdown/>
    </div>

    <!-- Search -->
    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
        <form method="GET" action="/">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}"/>
            @endif
            <input type="search" name="search" placeholder="Find something"
                   class="bg-transparent placeholder-black font-semibold text-sm" value="{{ request('search') }}">
        </form>
    </div>
</div>
