var fetch_cep = function (){
    $.ajax({
        type: "GET",
        url:'https://viacep.com.br/ws/'+document.getElementById('cep').value+'/json/',
        dataType: "json",
        success: function(data) {
            $("#cidade").val(data.localidade);
            $("#logradouro").val(data.logradouro);
            $("#bairro").val(data.bairro);
            $("#complemento").val(data.complemento);
            console.log(data);
            return data;
        }
    });
}
