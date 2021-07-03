function aggiungiElementi(struttura) {
    for (let i of struttura) {
        let elemento=document.createElement("div");
        elemento.setAttribute("class", "tr");

        let titolo=document.createElement("h1");
        let testo=document.createTextNode(i.nome);
        titolo.appendChild(testo);

        let fototratt=document.createElement("img");
        fototratt.setAttribute("class", "fototrattamento");
        fototratt.src=i.immagine;

        let descr=document.createElement("p");
        descr.style.display= "none";
        let paragrafo=document.createTextNode(i.descrizione);
        descr.appendChild(paragrafo);

        let button=document.createElement("a");
        let span=document.createElement("span");
        let textspan=document.createTextNode("Mostra di più");
        span.appendChild(textspan);
        button.appendChild(span);

        elemento.appendChild(titolo);
        elemento.appendChild(fototratt);
        elemento.appendChild(descr); 
        elemento.appendChild(button);
        trattamento.appendChild(elemento);  
        
        button.addEventListener("click", mostrad);
    }
}

function cerca(Event){
    let filtro=Event.currentTarget.value.toUpperCase();
    let trat=trattamento.querySelectorAll(".tr");
    for (let c of trat){
        let titolo=c.querySelector("h1").textContent.toUpperCase(); 
        if (titolo.indexOf(filtro)>-1) {
            c.style.display="";
        } else c.style.display="none";
    }
}

function mostrad(Event) {
    let des=Event.currentTarget.parentNode.querySelector("p");
    let span2=Event.currentTarget.parentNode.querySelector("span");
    
    if (des.style.display === "none") {
        des.style.display="";
        span2.textContent="Mostra di meno";
    } else {
        des.style.display="none";
        span2.textContent="Mostra di più";
    }

}


function onJson(json) {
    console.log(json);
    aggiungiElementi(json); 
}

   
function onResponse(response){
    return response.json();
}

fetch(route('servizi')).then(onResponse).then(onJson);


const ricerca=document.querySelector(".search-txt");
ricerca.addEventListener("keyup", cerca);

const trattamento=document.querySelector(".trattamento");

