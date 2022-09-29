@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Mis Datos') }}</div>

                    <div class="card-body ">

                        <div class="d-flex">

                            <div class="col-2">
                                <img src="{{ Auth::user()->path }}" alt="img-profile" class="img-fluid">
                            </div>
                            <div class="col-10">
                                <div class="px-4">
                                    <p>
                                        Nombre: {{ Auth::user()->name }}
                                    </p>
                                    <p>
                                        Email: {{ Auth::user()->email }}
                                    </p>
                                    <p>
                                        Teléfono: {{ Auth::user()->phone }}
                                    </p>
                                    <p>
                                        Ultimo inicio de sesión: {{ Auth::user()->last_login }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
