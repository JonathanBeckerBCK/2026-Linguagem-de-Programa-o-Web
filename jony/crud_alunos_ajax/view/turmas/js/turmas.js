const urlBase = document.getElementById("confUrlBase").dataset.urlBase;

const selDisc = document.querySelector("#selDisciplina"); // mais usado no CSS

listarDisciplinas();

function listarDisciplinas() 
{
  
  //Limpara as opções do select de disciplinas
  selDisc.innerHTML = "";
  //console.log("Chamou!");
  
  // Criar uma opcao vazia
  criarOpcao(0, "---Selecione---");
  
  const idCurso = document.getElementById("selCurso").value;
  const url = urlBase + "/api/lista_disciplinas.php?id_curso=" + idCurso;

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url, false);
    xhttp.send();
    
    var json = xhttp.responseText; 
  //console.log(json);
  
  var disciplinas = JSON.parse(json);
  
  // equivalente ao foreach(disciplinas as disc){ }
  disciplinas.forEach(disc => {
    criarOpcao(disc.id, disc.codigo + " - " + disc.nome);
  });
}

function criarOpcao(id, descricao)
{
    var option = document.createElement("option");
    option.value = id;
    option.innerHTML = descricao;
    selDisc.appendChild(option);
}