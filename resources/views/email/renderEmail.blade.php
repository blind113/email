<div class="container">
    <div class="row ">
        <div class="col-md-10">
            <strong class="mb-1">{{$email->para}}</strong><br>
            <small class="mb-1">{{$email->de}}</small>
        </div>
        <div class="col-md-2">
            <small>{!! date('d/m/Y H:i:s', strtotime($email->dt_cadastro)) !!}</small>
        </div>
    </div>
    <div class="row">
        <div class="d-flex w-100 align-items-center justify-content-between card-body">
            {{ $email->assunto}}
        </div>
    </div>
</div>