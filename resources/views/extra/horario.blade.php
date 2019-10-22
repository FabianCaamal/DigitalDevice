@extends('adminlte::Layouts.app')
    @section('main-content')

    <h3>
        <center><h1>Asignar trabajo a los empleados</h1></center><br><br>

        Empleado: <input type="text" name="emp">

        Maquina: <input type="text" name="maq">

        Hora de entrada: <input type="text" name="He"><br><br><br>

        Lugar de inicio de viaje: <input type="text" name="lugini">

        Lugar final de viaje: <input type="text" name="lugfin"><br><br><br>

        Hora de salida: <input type="text" name="Hs">
        
        <button class="btn btn-warning btn-sm">
            Enviar
        </button>


    </h3>
   	
   	@endsection