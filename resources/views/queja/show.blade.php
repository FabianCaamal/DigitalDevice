@extends('adminlte::Layouts.app')
    @section('main-content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Queja {{ $queja->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/queja') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/queja/' . $queja->id . '/edit') }}" title="Edit Queja"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('queja' . '/' . $queja->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Queja" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $queja->id }}</td>
                                    </tr>
                                    <tr><th> Usuario Id </th><td> {{ $queja->usuario_id }} </td></tr><tr><th> Empresa Id </th><td> {{ $queja->empresa_id }} </td></tr><tr><th> Detalles </th><td> {{ $queja->detalles }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
