@extends('layouts.template')

@section('title', 'Carta de llamada')

@section('content')
<div class="row">
    <div class="col-md-8">
        {{-- Contenido de la carta --}}
        <div class="card border border-0 mb-3" >
            <div class="card-header border-0 bg-light text-center rounded-top">
                {{-- Contenido del header  --}}
                <div class="row fs-6 fw-light">
                    <div class="col">Tiempo</div>
                    <div class="col">ID Expediente</div>
                    <div class="col">ID llamada</div>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-4">
                        {{-- Identificación --}}
                        <h5 class="card-title fs-6"><strong>Identificación</strong></h5>
                        <div class="row">
                            <label for="save" class="col-9 text-secondary">Guardar interlocutor?</label>
                            <div class="col-3">
                                <input type="checkbox" name="save" id="save">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control w-100" id="telefono">
                        </div>
                        <div class="mb-2">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control w-100" id="nombre">
                        </div>
                        <div class="mb-2">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control w-100" id="apellido">
                        </div>
                        <div class="mb-2">
                            <label for="municipio" class="form-label">Municipio</label>
                            <input type="text" class="form-control w-100" id="municipio">
                        </div>
                        <div class="mb-2">
                            <label for="provincia" class="form-label">Provincia</label>
                            <input type="text" class="form-control w-100" id="provincia">
                        </div>
                        <div class="mb-2">
                            <label for="direccion" class="form-label">Direción</label>
                            <input type="text" class="form-control w-100" id="direccion">
                        </div>
                        <div class="mb-2">
                            <label for="antecedentes" class="form-label">Antecedentes del Telefóno</label>
                            <textarea class="form-control" id="antecedentes" rows="5" style="height: 148px"></textarea>
                        </div>
                    </div>
                    <div class="col-8">
                        {{-- Nota Comuna --}}
                        <h5 class="card-title fs-6 " ><strong>Nota Comuna</strong></h5>
                        <textarea class="form-control" id="antecedentes" style="height: 94px"></textarea>
                        <div class="mb-2" style="margin-top: 13px">
                            {{-- Incidentes --}}
                            <h5 class="fs-6" ><strong>Incidente</strong></h5>
                            <select class="form-select w-100 mb-2" aria-label="Default select example">
                                <option selected>Tipo de Incidente</option>
                                <option value="1">One</option>
                            </select>
                            <select class="form-select w-100 mb-2" aria-label="Default select example">
                                <option selected> Tipo en Concreto..</option>
                                <option value="1">One</option>
                            </select>
                            <textarea class="form-control" id="antecedentes" placeholder="Explicación del incidente.." style="height: 66px"></textarea>
                        </div>
                        {{-- Localización --}}
                        <h5 class="card-title fs-6"><strong>Localización</strong></h5>
                        <div class="row">
                            <div class="col">
                                <div class="row mt-2">
                                    <label for="cataluna" class="col-9 text-secondary mb-3">Esta en cataluña?</label>
                                    <div class="col-3">
                                        <input type="checkbox" name="cataluna" id="cataluna">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="comarca" class="form-label">Comarca</label>
                                    <input type="text" class="form-control w-100" id="comarca">
                                </div>
                                <div class="mb-2">
                                    <label for="provincia" class="form-label">Provincia</label>
                                    <input type="text" class="form-control w-100" id="provincia">
                                </div>
                                <div class="mb-2">
                                    <label for="municipio" class="form-label">Municipio</label>
                                    <input type="text" class="form-control w-100" id="municipio">
                                </div>
                                <div class="mb-2">
                                    <textarea class="form-control" id="antecedentes" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                {{-- Tipo de localización --}}
                                <select class="form-select w-100" aria-label="Default select example" style="margin-bottom: 9px">
                                    <option selected>Tipo de localización</option>
                                    <option value="1">Carretera</option>
                                </select>
                                <div class="mb-2">
                                    <label for="comarca" class="form-label">Nom Carretera</label>
                                    <input type="text" class="form-control w-100" id="comarca">
                                </div>
                                <div class="mb-2">
                                    <label for="provincia" class="form-label">Punto Kilometrico</label>
                                    <input type="text" class="form-control w-100" id="provincia">
                                </div>
                                <div class="mb-2">
                                    <label for="municipio" class="form-label">Sentido</label>
                                    <input type="text" class="form-control w-100" id="municipio">
                                </div>
                                <div class="mb-2">
                                    <textarea class="form-control" id="antecedentes" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card-footer border-0 bg-transparent border-success">Footer</div> --}}
        </div>
    </div>

    <div class="col-md-4 d-flex flex-column">
        <div class="h-50">
            {{-- Contenido de los expedientes --}}
        <table class="table bg-light rounded overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col">Incidente</th>
                        <th scope="col">Estado expediente</th>
                        <th scope="col">Asociar</th>
                        <th scope="col">Creado</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>
                    <tr>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                    </tr>

                </tbody>
                <caption><button class="btn btn-warning btn-sm float-end fw-bold">Nuevo Expediente</button></caption>
            </table>
        </div>
        <div class="h-50">
            {{-- Contenido del mapa --}}
        </div>
    </div>
</div>
@endsection
