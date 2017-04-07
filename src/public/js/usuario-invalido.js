const entrar = document.querySelector("#entrar");

function load_click(){
      entrar.onclick = () => show_entrar();
}
function show_entrar (){
  let hostname = '<div>"Usuário Inválido"<div>';
  entrar.innerHTML = hostname;
  
}
