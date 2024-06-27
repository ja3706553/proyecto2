@extends('layouts.app')

@section('template_title')
    {{ $customer->name ?? __('Show') . " " . __('Customer') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Customer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('customers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $customer->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellido Paterno:</strong>
                            {{ $customer->apellido_paterno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellido Materno:</strong>
                            {{ $customer->apellido_materno }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ci:</strong>
                            {{ $customer->CI }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion:</strong>
                            {{ $customer->direccion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $customer->telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Email:</strong>
                            {{ $customer->email }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $customer->fecha_nacimiento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nit:</strong>
                            {{ $customer->NIT }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
