@extends('layouts.app')

@section('style')
    <style>
        .contact-page {
            width: 50%;
        }

        @media only screen and (max-width: 600px) {
            .contact-page {
                width: 90%;
            }
            input[type="submit"] {
                width: 100% !important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="m-5 mx-auto contact-page">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <h3 class="my-5 text-center font-weight-bold">Comprovante de participação em evento</h3>
        <form action="{{ route('receipt.store-event') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 email" style="transition: width 2s;">
                    <div class="form-group">
                        <label for="nameEvent">Nome do Evento</label>
                        <input type="text" id="nameEvent" name="nameEvent" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 subject" style="transition: width 2s;">
                    <div class="form-group">
                        <label for="date">Data</label>
                        <input type="date" id="date" name="date" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 email" style="transition: width 2s;">
                    <div class="form-group">
                        <label for="code">Código do aluno</label>
                        <input type="text" id="code" name="code" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 subject" style="transition: width 2s;">
                    <div class="form-group">
                        <label for="peopleName">Nome Completo</label>
                        <input type="text" id="peopleName" name="peopleName" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Enviar mensagem" class="w-50 btn" style="background-color: #FED605;">
            </div>
        </form>
    </div>
@endsection
