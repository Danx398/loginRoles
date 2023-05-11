@extends('layouts/main_admin')
@section('contenido')
    <div class="container">
        <h1 class="text-center">Login de usuarios</h1>
        <div class="row justify-content-center">
                <div class="col-6 mt-5 p-2">
                    <form action="{{route('logear')}}" class="form-control" method="POST">
                        @csrf
                        @method('POST')
                        <label for="">Usuario</label>
                        <input type="text" name="name" class="form-control">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control">
                        <div class="row justify-content-center">
                            <div class="col-7 mt-2">
                                <button class="btn btn-primary container-fluid">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection
