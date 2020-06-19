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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut distinctio eum in odio, quaerat sapiente vitae.
            Aliquam deleniti, error, esse fuga, illum iure laborum nulla quis repudiandae similique vero voluptatem?</p>
        <h1 class="my-5 text-center font-weight-bold">Fale Conosco</h1>
        <form action="{{ route('contact') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="subject">Assunto</label>
                        <input type="text" id="subject" name="subject" class="form-control" required maxlength="30">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                        <p class="m-0 small text-danger">Para enviar uma mensagem aninima não informe o email</p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="text">Conteudo</label>
                <textarea name="text" id="text" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="text-center">
                <input type="submit" value="Enviar mensagem" class="w-25 btn" style="background-color: #FED605;">
            </div>
        </form>
    </div>
@endsection
