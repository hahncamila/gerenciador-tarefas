$(document).ready(function (){
    $('.edit-button').on('click', function () {
        var $tarefa = $(this).closest('.tarefa');
        $tarefa.find('.tarefa-descricao').addClass('hidden');
        $tarefa.find('.tarefa-acao').addClass('hidden');
        $tarefa.find('.editar-tarefa').removeClass('hidden');
    });
})
