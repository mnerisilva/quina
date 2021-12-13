const tabela = document.querySelector(".resultados");
const todas_as_linhas = tabela.querySelectorAll("tr");

console.log(todas_as_linhas);

let arr = [];

let concurso_string = "vazio";
let concurso_int = 1;
let data = "00/00/0000";
let resultado1 = 0;
let resultado2 = 0;
let resultado3 = 0;
let resultado4 = 0;
let resultado5 = 0;

todas_as_linhas.forEach(function (linha) {
  let todas_colunas = linha.querySelectorAll("td");
  concurso_string = todas_colunas[0].innerText;
  concurso_int = parseInt(concurso_string);
  data = todas_colunas[1].innerText;
  let resultado = todas_colunas[2].innerText;
  resultado_arr_split = resultado.split(" ");
  resultado1 = parseInt(resultado_arr_split[0]);
  resultado2 = parseInt(resultado_arr_split[1]);
  resultado3 = parseInt(resultado_arr_split[2]);
  resultado4 = parseInt(resultado_arr_split[3]);
  resultado5 = parseInt(resultado_arr_split[4]);

  $.ajax({
    type: "POST",
    url: "salva.php",
    data: {
      concurso_string: concurso_string,
      concurso_int: concurso_int,
      data: data,
      resultado1: resultado1,
      resultado2: resultado2,
      resultado3: resultado3,
      resultado4: resultado4,
      resultado5: resultado5,
    },
    success: function (data) {
      console.log("resposta arquivo salva.php: " + data);
      $("#Lista").append("<li>" + "concurso_string" + "</li>");
    },
  });
});

//console.log(typeof concurso_string);
//console.log(typeof concurso_int);

//console.log(arr);
