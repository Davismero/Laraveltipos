<div>
<form action="">
@csrf

        <div>
            <label for="">Nombre</label>
            <input type="text" wire:model="nombre" class="border border-gray-300 rounded-md p-2">
        </div>

        <div>
            <button type="submit" wire:model="cantidad" class="bg-green-500" text-white >Guardar</button>
        </div>
        

</form>


</div>