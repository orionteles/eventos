$(function(){
    $('.data').mask('99/99/9999');
    $('.hora').mask('99:99');
    $(".telefone").mask("(99) 99999-999?9");
    $(".telefone").change(function(event) {
        if($(this).val().length == 15){
            $('.telefone').mask('(99) 99999-999?9');
        } else {
            $('.telefone').mask('(99) 9999-9999?9');
        }
    });

    $('.datatable').DataTable({
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        },
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            { extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            {extend: 'pdf', title: 'ExampleFile'},

            {extend: 'print',
                customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                }
            }
        ]

    });

    $('.chosen').chosen({allow_single_deselect: true});

    $('.input-group.date').datepicker({
        todayBtn: "linked",
        autoclose: true,
        format: 'dd/mm/yyyy',
        language: 'pt-BR'
    });

    $('body').on('click', '.link-excluir', function(){
        var href = $(this).attr('href');
        swal({
                title: 'Atenção',
                text: 'Deseja realmente excluir o registro?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                closeOnConfirm: false,
                confirmButtonText: 'Sim, tenho certeza!',
                cancelButtonText:'Não',
            },
            function(){
                window.location = href;
            }
        );
        return false;
    });

})