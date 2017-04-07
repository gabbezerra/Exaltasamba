const c_nPasta = document.querySelector("#id_nPasta");
const c_caminho = document.querySelector("#id_caminho");
const tabela = document.querySelector('#statusTable tbody');
let path;
let shared;
let user;
let insertTable;
load_caminho();
function load_caminho() {
  let url ='http://localhost:8080/public/php/conteudo.php?info=shared';
  // ajax('get', url, load_caminho_Action);
  let xhr = new XMLHttpRequest();
  xhr.open('get', url);
  xhr.onload = function(){
    var getJson = JSON.parse(xhr.responseText);
    path = getJson.path;
    shared = getJson.shared;
    user = getJson.user;
    insertTable = `<tr><td>${shared}</td><td>${path}</td><td>${user}</td></tr>`;
    tabela.innerHTML += insertTable;
  }
  xhr.send();
}

// function load_caminho_Action(response) {
//   response = JSON.parse(response);
//   let lcaminho = <td>$(response.shared.id_caminho)</td>;
//   c_caminho.innerHTML = lcaminho;
// }
//
// function ajax(method, url, callback) {
//   let xhr = new XMLHttpRequest();
//   xhr.open(method, url);
//   xhr.onload = () => callback(xhr.responseText);
//   xhr.send();
// }
//
// if ($_GET) {
//
// }
// load_nPasta();
//
// function load_nPasta() {
//   let url ='http://localhost:8080/public/php/conteudo.php?info=nPasta';
//   ajax('get', url, load_nPasta_Action);
// }
//
// function load_nPasta_Action(response) {
//   response = JSON.parse(response);
//   let nPasta = <td>$(response.j_shared.id_nPasta)</td>;
//   c_nPasta.innerHTML = nPasta;
// }
