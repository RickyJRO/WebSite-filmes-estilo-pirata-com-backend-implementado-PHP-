


function removerfavorito(idfilme,butao,icone){
    let element = document.getElementById(idfilme);
    element.remove();
    document.getElementById(butao).setAttribute('onclick', "adicionarfavfilme('"+idfilme+"','"+ butao+"','" +icone+ "')");
    let meuicone = document.getElementById(icone);
    meuicone.className = "far fa-heart text-danger";
}

function adicionarfavfilme(idfilme,butao,icone){
    document.getElementById(butao).setAttribute('onclick', "removerfavorito('"+idfilme+"','"+butao+"','"+icone+"')");
    let meuicone = document.getElementById(icone);
    meuicone.className = "far fa-trash-alt text-primary";
    const clone = document.getElementById(idfilme).cloneNode(true);
    document.getElementById('favfilmes').appendChild(clone);
}


function removerfavoritoator(idator,butao,icone){
    let element = document.getElementById(idator);
    element.remove();
    document.getElementById(butao).setAttribute('onclick', "adicionarfavator('"+idator+"','"+ butao+"','" +icone+ "')");
    let meuicone = document.getElementById(icone);
    meuicone.className = "far fa-heart text-danger";

}

function adicionarfavator(idator,butao,icone){
    document.getElementById(butao).setAttribute('onclick', "removerfavoritoator('"+idator+"','"+butao+"','"+icone+"')");
    let meuicone = document.getElementById(icone);
    meuicone.className = "far fa-trash-alt text-primary";
    const clone = document.getElementById(idator).cloneNode(true);
    document.getElementById("favatores").appendChild(clone);
}
function removerfavoritorealizador(idrealizador,butao,icone){
    let element = document.getElementById(idrealizador);
    element.remove();
    document.getElementById(butao).setAttribute('onclick', "adicionarfavrealizador('"+idrealizador+"','"+ butao+"','" +icone+ "')");
    let meuicone = document.getElementById(icone);
    meuicone.className = "far fa-heart text-danger";

}

function adicionarfavrealizador(idrealizador,butao,icone){
    document.getElementById(butao).setAttribute('onclick', "removerfavoritorealizador('"+idrealizador+"','"+butao+"','"+icone+"')");
    let meuicone = document.getElementById(icone);
    meuicone.className = "far fa-trash-alt text-primary";
    const clone = document.getElementById(idrealizador).cloneNode(true);
    document.getElementById("favrealizadores").appendChild(clone);
}

function removerfavoritoestudio(idestudio,butao,icone){
    let element = document.getElementById(idestudio);
    element.remove();
    document.getElementById(butao).setAttribute('onclick', "adicionarfavestudio('"+idestudio+"','"+ butao+"','" +icone+ "')");
    let meuicone = document.getElementById(icone);
    meuicone.className = "far fa-heart text-danger";

}

function adicionarfavestudio(idestudio,butao,icone){
    document.getElementById(butao).setAttribute('onclick', "removerfavoritoestudio('"+idestudio+"','"+butao+"','"+icone+"')");
    let meuicone = document.getElementById(icone);
    meuicone.className = "far fa-trash-alt text-primary";
    const clone = document.getElementById(idestudio).cloneNode(true);
    document.getElementById("favestudios").appendChild(clone);
}

