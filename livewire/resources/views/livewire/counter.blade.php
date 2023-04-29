<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>
 
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach

        <button wire:click(eliminar())></button>
    </ul>
</div>