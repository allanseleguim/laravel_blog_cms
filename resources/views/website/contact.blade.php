@extends('website.template.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ asset('website/img/contact-bg.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Contato</h1>
                        <span class="subheading">Alguma dúvida?</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>Iremos responder assim que possível!</p>

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session('message')}}
                    </div>
                @endif
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                {!! Form::open(['route' => 'contact.submit']) !!}
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Nome</label>
                        <input type="text" name="name" class="form-control" placeholder="Nome" id="name" required
                               data-validation-required-message="Digite corretamente seu nome.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" id="email" required
                               data-validation-required-message="Digite um e-mail válido.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Telefone</label>
                        <input type="tel" name="tel" class="form-control" placeholder="Telefone" id="phone" required
                               data-validation-required-message="Digite seu Telefone.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Mensagem</label>
                        <textarea rows="5" name="message" class="form-control" placeholder="Mensagem" id="message" required
                                  data-validation-required-message="Digite corretamente sua mensagem."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection()