<x-dropdown>
    <x-slot name="trigger">
        <button
            class="flex justify-between w-full font-semibold"
            type="button"
        >
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Category' }}
            <x-icon name="down-arrow"/>
        </button>
    </x-slot>
    <x-dropdown-item
        href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="request()->routeIs('home')">
        All
    </x-dropdown-item>
    @foreach($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="request()->is('categories/'. $category->slug )">
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
