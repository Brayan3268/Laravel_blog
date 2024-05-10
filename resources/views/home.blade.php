<!-- Whit this x-app-layout the component app-layout.blade.php is 
    called and the code is puted in the '{ { $slot } }' variable -->
<x-app-layout>

    <div class="max-w-4xl mx-auto px-4">
        <x-alert2 type="info" class="mb-4">
            <x-slot name="titlel">
                Titulo
            </x-slot>
            
            Texto prueba variable slot
        </x-alert2>

        <p>Hola mundo</p>
    </div>

</x-app-layout>