<x-slot name="header">
    <h1 class="text-gray-900">Alumnos</h1>
</x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <button wire:click="crear()" class="btn btn-primary" >Nuevo</button>
        @if($modal)
            @include('livewire.crear')   
        @endif  

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">CODIGO</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Direccion</th>
                <th class="px-4 py-2">Telefono</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">ACCIONES</th>    
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <td class="border px-4 py-2">{{$alumno->id}}</td>
                <td class="border px-4 py-2">{{$alumno->codigo}}</td>
                <td class="border px-4 py-2">{{$alumno->nombre0}}</td>
                <td class="border px-4 py-2">{{$alumno->direccion}}</td>
                <td class="border px-4 py-2">{{$alumno->telefono}}</td>
                <td class="border px-4 py-2">{{$alumno->email}}</td>
                <td class="border px-4 py-2 text-center">
                    <button wire:click="editar({{$alumno->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 btn btn-success">Editar</button>
              
                    <button wire:click="borrar({{$alumno->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 btn btn-danger">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</div>