@extends('adminlte::Layouts.app')
    @section('main-content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">maquina {{ $maquina->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/maquina') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/maquina/' . $maquina->id . '/edit') }}" title="Edit maquina"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('maquina' . '/' . $maquina->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete maquina" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $maquina->id }}</td>
                                    </tr>
                                    <tr><th> Codigo </th><td> {{ $maquina->codigo }} </td></tr><tr><th> Longitud </th><td> {{ $maquina->longitud }} </td></tr><tr><th> Latitud </th><td> {{ $maquina->latitud }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
