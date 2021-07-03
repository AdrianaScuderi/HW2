function aggiungiDipendenti(struttura) {
    for (let i of struttura) {
        let elemento=document.createElement("div");
        elemento.setAttribute("class", "dip");

        let nominativo=document.createElement("h1");
        let testo=document.createTextNode(i.nome + ' ' + i.cognome);
        nominativo.appendChild(testo);
        
        let foto=document.createElement("div");
        foto.setAttribute("id", "foto");
        let fotodipendente=document.createElement("img");
        fotodipendente.setAttribute("class", "fotodipendente");
        fotodipendente.src=i.immagine;
        foto.appendChild(fotodipendente);

        let button=document.createElement("a");
        let span=document.createElement("span");
        let textspan=document.createTextNode("Mostra di più");
        span.appendChild(textspan);
        button.appendChild(span);

        let informazioni=document.createElement("div");
        informazioni.setAttribute("class", "infodip hidden");
       


        let ruolo=document.createElement("p");
        let testo1=document.createTextNode('Ruolo: '+ i.ruolo);
        ruolo.appendChild(testo1);

        elemento.appendChild(nominativo)
        elemento.appendChild(foto);
        elemento.appendChild(button);
        informazioni.appendChild(ruolo);

        for(let j of i.acquisizione){
            let nome_qualifica=document.createElement("p");
            let testo2=document.createTextNode('Qualifica: ' + j.nome);
            nome_qualifica.appendChild(testo2);

            informazioni.appendChild(nome_qualifica);
        }

        elemento.appendChild(informazioni);
        dipendente.appendChild(elemento); 
        
        button.addEventListener("click", mostrad);
    }
}


function mostrad(Event) {
    let informazioni2= Event.currentTarget.parentNode.querySelector('.infodip');
    let span2=Event.currentTarget.parentNode.querySelector("span");
    
    if (informazioni2.classList.contains('hidden')) {
        informazioni2.classList.remove('hidden');
        span2.textContent="Mostra di meno";
    } else {
        informazioni2.classList.add('hidden');
        span2.textContent="Mostra di più";
    }

}



function onJson(json) {
    console.log(json);
    aggiungiDipendenti(json); 
   }
   
   function onResponse(response){
       return response.json();
   }
   
   fetch (route('dipendenti')).then(onResponse).then(onJson);

const dipendente=document.querySelector(".dipendente");
