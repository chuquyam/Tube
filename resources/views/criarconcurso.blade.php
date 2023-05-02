@extends('layouts.app')

@section('title','TubeConcurso')

@section('content')

@if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @can('aluno')
        Dados do Aluno
    @elsecan('admin')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Inserir Concursos') }}
                    </div>
                        <div class="card-body">
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-reader">

                                        </div>
                                            <div class="card-body">

                                                <form action="{{ route('registrar_concurso')}}" method="POST">
                                                    @csrf
                                                    <label for="">Código do Concurso</label><br/>
                                                    <input type="text" name="codconcurso" class="form-control"><br />

                                                    <label for="">Nome do Concurso</label><br/>
                                                    <input type="text" name="nomedoconcurso" class="form-control"><br />

                                                    <label for="">Número do edital</label><br/>
                                                    <input type="text" name="numerodoedital" class="form-control"><br />

                                                    <label for="">Nome do Instituto</label><br/>
                                                    <input type="text" name="nomedoinstituto" class="form-control"><br />

                                                    <label for="">Nome do cargo</label><br/>
                                                    <input type="text" name="nomedocargo" class="form-control"><br />

                                                    <label for="">Nome da Organizadora</label><br/>
                                                    <input type="text" name="nomedaorganizadora" class="form-control"><br />

                                                    <label for="">Data da prova</label><br/>
                                                    <input type="date" name="datadaprova" class="form-control"><br />

                                                    <label for="">Data de Início</label><br/>
                                                    <input type="date" name="datadeinicio" class="form-control"><br />

                                                    <label for="">Data Final</label><br/>
                                                    <input type="date" name="datafinal" class="form-control"><br />

                                                    <label for="">Nome Interno</label><br/>
                                                    <input type="text" name="nomeinterno" class="form-control"> <br />

                                                    <button class="btn btn-success btn-sm">Salvar</button>
                                                </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
     @endcan
@endsection
