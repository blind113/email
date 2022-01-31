@extends('components/layout')


@section('body.container')
        <div class="row" >
            <div class="col-md-3 " style='padding-top:10px'>
                
                    <input class ='form-control' placeholder="Buscar">
                    <div class="list-group list-group-flush border-bottom vh-100 overflow-auto gy-2" >
                        
                        @forelse ($listaEmails as $email)
                            <button class="list-group-item list-group-item-action py-3 lh-tight" id = 'email-{{$email->id_email}}' onclick="carregaEmail({{ $email->id_email }})" >
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">{{$email->para}}</strong>
                                    <small>{!! date('H:i', strtotime($email->dt_cadastro)) !!}</small>
                                </div>
                            <div class="col-10 mb-1 small">{{ $email->assunto }}</div>
                            </button>
                        @empty
                            <div class="col-10 mb-1 small">Sem E-mails</div>
                        @endforelse

                    </div>
                
            </div>
            <div class="col-md-9">
                <div class="container"  style='padding:10px'>
                    <div class="row">
                        <div class="col-md-12 card vh-100" style="padding-top:20px" id="div-leitor-email">
                                
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
@endsection

