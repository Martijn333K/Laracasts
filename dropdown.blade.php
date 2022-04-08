@props(['trigger'])

<!-- Alle Alpine.js code staat op deze pagina -->

<div x-data="{ show: false }" @click.away="show = false">
    <!-- Triggers --> 
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

<!-- Links --> 
<div x-show="show" class="py-2 absolute bg-gray-100 w-80 mt-2 rounded-xl z-50 overflow-auto max-h-24" style="display: none">
    {{ $slot }}
    </div>
</div>