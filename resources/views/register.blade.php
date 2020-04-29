@extends('layouts.app')

@section('content')
<div class="row register align-items-center justify-content-center">
    <div class="col-sm-11 col-md-8 col-lg-6">
        <div class="card card-container" style="border: solid 1px;">
            <div class="card-header">
                <p class="card-title">Register</p>
            </div>
            <div class="card-body">
                <form action="">
                    <div class=row>
                    <div class="col">
                      <div class="form-group">
                <!--<label for="fullName">Nombre completo</label>-->
                <validation-provider rules="required" v-slot="{ errors }">
                  <input
                    v-model="user.fullName"
                    minlength="10"
                    maxlength="100"
                    type="text"
                    class="form-control"
                    name="fullName"
                    id="fullName"
                    placeholder="Nombre Completo"
                  />
                
              </div>
              <div class="form-group">
                <!--<label for="address">Dirección</label>-->
                <validation-provider rules="required" v-slot="{ errors }">
                  <input
                    v-model="user.address"
                    type="text"
                    class="form-control"
                    name="address"
                    id="address"
                    placeholder="Dirección"
                  />
                 
              </div>
              <div class="form-group">
                <!--<label for="email">Email</label>-->
                <validation-provider rules="required|email" v-slot="{ errors }">
                  <input
                    v-model="user.email"
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Email"
                  />
                  
              </div>
              <div class="form-group">
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                   Acepto los terminos y condiciones
        </label>
      </div>
              </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                <!--<label for="document">Documento</label>-->
                <validation-provider rules="required" v-slot="{ errors }">
                  <input
                    v-model="user.document"
                    type="text"
                    class="form-control"
                    name="document"
                    id="document"
                    placeholder="Documento"
                  />
                 
              </div>
               
              <div class="form-group">
                <!--<label for="phone">Telefono</label>-->
                <validation-provider rules="required" v-slot="{ errors }">
                  <input
                    v-model="user.phone"
                    type="number"
                    class="form-control"
                    name="phone"
                    id="phone"
                    placeholder="Telefono"
                  />
                 
              </div>
              <div class="form-group">
                <!--<label for="password">Clave</label>-->
                <validation-provider rules="required" v-slot="{ errors }">
                  <input
                    v-model="user.password"
                    minlength="5"
                    maxlength="100"
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="Clave"
                  />
                  
              </div>
               
              <div class="form-group">
                <!--<label for="repeatedPassword">Confirmar clave</label>-->
                <validation-provider rules="required" v-slot="{ errors }">
                  <input
                    v-model="user.repeatedPassword"
                    minlength="5"
                    maxlength="100"
                    type="password"
                    class="form-control"
                    name="repeatedPassword"
                    id="repeatedPassword"
                    placeholder="repeatedPassword"
                  />
                 
              </div>
                    <button type="submit" class="btn btn-primary">Registrar usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
