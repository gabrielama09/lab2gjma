@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Ingreso de Productos') }}</div>
                    <div class="card-body">
                        <form method = "post" action = " {{ url('/productos/update/'.$productos->id)}}">
                            @csrf
                            @include('productos.formedit')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
