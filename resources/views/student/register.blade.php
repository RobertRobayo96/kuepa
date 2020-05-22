@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Suscribete según tu programa de interés') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.create') }}">
                        @csrf

                        <div class="form-group">
                            <label for="last_name">Apellido</label>
                            <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="email_address">E-Mail</label>
                            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="telephone">Teléfono</label>
                            <input type="text" class="form-control" id="telephone" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
                        </div>

                        
                        
                        
                        <div class="form-group ">
                            <label for="program" class="form-label">Programas </label>
                            
                            <select id="program"  class="form-control @error('program') is-invalid @enderror" name="program" title="Filter by Program">
                                @foreach (App\Program::all() as $program)
                                <option value="{{ $program->id }}" >{{ $program->description }}</option>
                                @endforeach
                            </select>
                            @error('program')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Suscribir') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
