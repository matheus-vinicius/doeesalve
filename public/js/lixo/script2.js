    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }

      function validarCEP(cep){
      $("#cep").focusout(function(){
  //Início do Comando AJAX
  // Focusout quando sai do campo selecionado (clica fora do campo)
      $.ajax({
  //O campo URL diz o caminho de onde virá os dados
  //É importante concatenar o valor digitado no CEP
      url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
  //Aqui você deve preencher o tipo de dados que será lido,
  //no caso, estamos lendo JSON.
      dataType: 'json',
  //SUCESS é referente a função que será executada caso
  //ele consiga ler a fonte de dados com sucesso.
  //O parâmetro dentro da função se refere ao nome da variável
  //que você vai dar para ler esse objeto.
      success: function(resposta){
  //Agora basta definir os valores que você deseja preencher
  //automaticamente nos campos acima.
      $("#ender").val(resposta.logradouro);
      $("#bairro").val(resposta.bairro);
     	$("#city").val(resposta.localidade);
      $("#uf").val(resposta.uf);
  //Vamos incluir para que o Número seja focado automaticamente
  //melhorando a experiência do usuário
      $("#nuncasa").focus();
      }
     });
  });
  }

function funcao1()
    {
    alert("É necessário fazer login, para ter acesso a essas páginas.");
    }

// function Rg(v){
//     v=v.replace(/\D/g,"");
//     v=v.replace(/(\d{2})(\d{3})(\d{3})(\d{1})$/,"$1.$2.$3-$4");
//     return v;
// }

  // RG (99.999.999-0): /^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\-[0-9]{1}$/

  // https://www.youtube.com/watch?v=l9cZE1spkbs
  // https://www.youtube.com/watch?v=zID7E6MkWd0