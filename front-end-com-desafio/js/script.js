
  function prepararStringResultado(){
      var nome = document.getElementById("nome").value;
      var documento = document.getElementById("documento").value;
      var nascimento = document.getElementById("nascimento").value;
      var input_sexo = document.getElementById("sexo");
      var sexo = input_sexo.options[input_sexo.selectedIndex].text;
      var input_situacao = document.getElementById("situacao");
      var situacao = input_situacao.options[input_situacao.selectedIndex].text;
      var logradouro = document.getElementById("logradouro").value;
      var bairro = document.getElementById("bairro").value;
      var cidade = document.getElementById("cidade").value;
      var estado = document.getElementById("estado").value;
      var email = document.getElementById("email").value;
      var telefone = document.getElementById("telefone").value;  




      var resultado = ` <div class="container w-50 p-3">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                        <h1><center>Beneficiário</center></h1>
                        <br><br><br>
                        <p>Nome: ` + nome + `</p>
                        <p>Documento: ` + documento + `</p> 
                        <p>Nascimento: ` + nascimento + `</p> 
                        <p>Sexo: ` + sexo + `</p>
                        <p>Situação: ` + situacao + `</p> 
                        <p>Logradouro: ` + logradouro + `</p>
                        <p>Bairro: ` + bairro + `</p>
                        <p>Cidade: ` + cidade + `</p>
                        <p>Estado: ` + estado + `</p>
                        <p>E-mail: ` + email + `</p> 
                        <p>Telefone: ` + telefone + `</p>                    
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>             
                    `;
    return resultado;
  }


    function calcularMaiorIdade() {
        var input = document.getElementById("nascimento").value;
        var ano_usuario = new Date(input);
        var ano_atual = new Date();
        var dif = (ano_atual.getUTCFullYear())-(ano_usuario.getUTCFullYear());

    return (dif>=18)
    }


    $(function () {
         $('#BtnCadastrar').on('click', function () {

            if(calcularMaiorIdade()){
                $('#Content').text('');
                alert("Beneficiário cadastrado, scrolldown para visualizar");
                $(prepararStringResultado()).appendTo('#Content');
            }else{
                alert("Beneficiário menor de idade!")
                $('#Content').text('');
            }
        });
    });



