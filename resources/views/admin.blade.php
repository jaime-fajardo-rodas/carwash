@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-header">
                    <p class="card-title">Acceso a la aplicación</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                  {{csrf_field()}}
                        <div class="form-group {{ $errors->has('email') ? 'has-error': ''}}"> 
                            <label for="email">Email</label>
                            <input class="form-control"
                                type="email"  
                                name="email"
                                placeholder="Ingrese su Email">
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group  {{$errors->has('password') ? 'has-error': ''}}">
                            <label for="password">Password</label>
                            <input class="form-control"
                                type="password"  
                                name="password"
                                placeholder="Ingrese su Password">
                                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                        </div>
                        <button class="btn btn-primary btn-lg btn-block">Acceder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  
@endsection