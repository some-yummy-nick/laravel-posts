@props(['trigger'])
<div class="relative bg-gray-100 rounded-xl py-2 px-3 text-sm w-full"
     x-data="{show: false}" @click.away="show=false" >
    <div @click="show=!show">
        {{ $trigger }}
    </div>

    <div class="absolute bg-gray-100 rounded-xl mt-2 w-100  w-full d-none z-50 overflow-auto max-h-52"
         style="display: none; top:35px; left: 0;"
         x-show="show">
       {{ $slot }}
    </div>
</div>
