@extends('template.app')

@section('content')
    <main class="col-md-10 ms-sm-auto col-lg-12 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Historial de salidas</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>

                        <th scope="col">Codigo identificatorio</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Responsable</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($egresos as $salida)
                        <tr>
                            <td>{{ $salida->id }}</td>
                            <td>{{ $salida->fecha }}</td>
                            <td>{{ $salida->responsable }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal data -->
        <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="modalData" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalData">Entrega de Stock</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <form>
                            <!-- Section 1 -->
                            <h6 class="modal-title" id="modalData">Informacion </h6>

                            <div class="d-flex flex-row  justify-content-between flex-wrap flex-md-nowrap pt-2">


                                <div class="form-group col-4 p-1">
                                    <input type="number" class="form-control" id="ncentrocosto"
                                        placeholder="Codigo identificatorio" value="10-10-2022" disabled>
                                </div>

                                <div class="form-group col-4 p-1">
                                    <input type="number" class="form-control" id="ncentrocosto" placeholder="Fecha"
                                        value="10-10-2022" disabled>
                                </div>

                                <div class="form-group col-4 p-1">
                                    <input type="number" class="form-control" id="ncentrocosto" placeholder="Responsable"
                                        value="10-10-2022" disabled>
                                </div>


                            </div>

                            <!-- Fin Section 1 -->

                            <!-- Section 6 -->
                            <h6 class="modal-title mt-2" id="modalData">Stock</h6>

                            <div class="d-flex flex-row  justify-content-between flex-wrap flex-md-nowrap ">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Codigo Producto</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">003C000107</th>
                                            <td>Protector Facial Antideflagracion</td>

                                            <td>10</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">003C000107</th>
                                            <td>Tapas punto y toma</td>
                                            <td>10</td>

                                        </tr>
                                        <tr>
                                            <th scope="row">003C000107</th>
                                            <td>Protectores Oculares</td>
                                            <td>10</td>

                                        </tr>
                                    </tbody>

                                </table>
                            </div>


                            <!-- Fin Section 6 -->

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Cancelar
                        </button>
                        <button type="submit" class="btn btn-success">Descargar Remito</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
