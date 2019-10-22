@extends('adminlte::Layouts.app')
    @section('main-content')
    <div class="container">
        <div class="row">
         

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Trabajo {{ $trabajo->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/trabajo') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/trabajo/' . $trabajo->id . '/edit') }}" title="Edit Trabajo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('trabajo' . '/' . $trabajo->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Trabajo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $trabajo->id }}</td>
                                    </tr>
                                    <tr><th> Empleado </th><td> {{ $trabajo->Empleado }} </td></tr><tr><th> UbicacionMaquina </th><td> {{ $trabajo->UbicacionMaquina }} </td></tr><tr><th> CantidadAsignada </th><td> {{ $trabajo->CantidadAsignada }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
