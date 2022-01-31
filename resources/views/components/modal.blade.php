
<div class="modal " role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Novo E-mail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
                <label for='de'>De:</label>
                <input class='form-control form-control-sm' id='de' name='de' >
                <label for='de'>Para:</label>
                <input class='form-control form-control-sm' id='para' name='para' >
                <label for='de'>BCC:</label>
                <input class='form-control form-control-sm' id='bcc' name='bcc' >
                <label for='de'>Assunto:</label>
                <input class='form-control form-control-sm' id='assunto' name='assunto' >
                <label for="editor">Mensagem:</label>
                <textarea class="ckeditor form-control" name="mensagem" id="mensagem" >

                </textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" onclick='confirmacaoEnvio()'>Enviar</button>
          </div>
        </div>
    </div>
</div>
<script>
    tinymce.init({
        selector: '#mensagem',
        height : "480",
        branding: false,
        menubar:false,
        language: 'pt_BR'
      });
    
    function confirmacaoEnvio(){
        Swal.fire('confirmation?');
    }
</script>