$('#datatable').on('click', '.remove-registro', function(){
    var id = $(this).data('id');
    $('#id-protected').html('Você está prestes a remover um registro <br> Deseja prosseguir ?');
    $('#btn-remover-registro').show();
    $('#btn-remover-registro').data('id', id);
});

// remove um serviço \\

$('#btn-remover-registro').on('click', function () {
    var id = $(this).data('id');
    $.post(base_url+'remover-servico',{'id': id}, function (rs) {
        $('#btn_cancela_modal').trigger('click');
        if(rs == 1){
            $('#registro_tr_'+id).fadeOut();
            $.notify('Serviço Removido com Sucesso!', "success");
        }
    });
});
// fim remove um serviço \\

