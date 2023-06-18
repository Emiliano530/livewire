<x-app-layout>
    <div>
        <h1>Informacion del edificio</h1>
        <h1>Departamentos</h1>
        @foreach ($departments as $item)
            <div>{{ $item->name }}</div>
        @endforeach
        <h1>Tramites</h1>
        @foreach ($formalities as $form)
            <div>{{ $form->name }}</div>
        @endforeach
        <h1>Personal</h1>
        @foreach ($staff as $sta)
            <div>{{ $sta->name }}</div>
        @endforeach
    </div>
</x-app-layout>
