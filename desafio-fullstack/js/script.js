    function calcularMaiorIdade() {

        var input = document.getElementById("nascimento").value;
        var ano_usuario = new Date(input);
        var ano_atual = new Date();
        var dif = (ano_atual.getUTCFullYear())-(ano_usuario.getUTCFullYear())-1;
       
    
        if(ano_atual.getMonth()>ano_usuario.getMonth() || (ano_atual.getMonth()==ano_usuario.getMonth() && ano_atual.getDate()>=ano_usuario.getDate())){
            dif++;        
        }
    
        return (dif>=18)
    }



    

    function validarForm() {
        if(calcularMaiorIdade()){
            return true;
        }else{
            alert("Beneficiário menor de idade!");
            return false;
        }
          
    }
      


