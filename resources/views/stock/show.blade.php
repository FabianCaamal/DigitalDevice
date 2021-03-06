@extends('adminlte::Layouts.app')
    @section('main-content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">stock {{ $stock->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/stock') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/stock/' . $stock->id . '/edit') }}" title="Edit stock"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('stock' . '/' . $stock->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete stock" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $stock->id }}</td>
                                    </tr>
                                    <tr><th> Maquina Id </th><td> {{ $stock->maquina_id }} </td></tr><tr><th> Producto Id </th><td> {{ $stock->producto_id }} </td></tr><tr><th> Cantidad </th><td> {{ $stock->cantidad }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
