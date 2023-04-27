<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     <a href="{{ route('paciente.create') }}"
                         class="bnt btn-success w-25">Añadir</a> 
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID Paciente</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Fceha Nacimiento</th>
                                <th scope="col">Edad Paciente</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Correo</th>
                                <th scope="col">dir_Paciente</th>
                                <th scope="col">estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pacientes as $paciente)
                                <tr>
                                    <th scope="row">{{ $paciente->id_Paciente }}</th>
                                    <td>{{ $paciente->nom_Paciente }}</td>
                                    <td>{{ $paciente->ape_Paciente }}</td>
                                    <td>{{ $paciente->fecha_Nac_Paciente }}</td>
                                    <td>{{ $paciente->age_Paciente }}</td>
                                    <td>{{ $paciente->tel_Paciente }}</td>
                                    <td>{{ $paciente->email_Paciente }}</td>
                                    <td>{{ $paciente->dir_Paciente }}</td>
                                    <td>{{ $paciente->estado }}</td>
                                     <td>
                                        {{-- <form action="{{ route('paciente.edit', $paciente->id_Paciente) }}" method="GET">
                                            <button class="btn btn-warning btn-sm">
                                              <span class="fas fa-user-edit">editar</span>
                                            </button>
                                          </form> --}}

{{-- 
                                        <form action="{{ route('comunas.destroy', ['comuna' => $comuna->comu_codi]) }}"
                                            method='POST' style="display: inline-block">
                                            @method('delete')
                                            @csrf
                                            <input
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2"
                                                type="submit" value="Delete">
                                        </form> --}}
                                    </td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>