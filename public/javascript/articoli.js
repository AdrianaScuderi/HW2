function AggEle(struttura){
  for (let i of struttura) {
    let elemento=document.createElement("div");
     elemento.setAttribute("class", "art");

    let titolo=document.createElement("h1");
    let testo=document.createTextNode(i.title);
     titolo.appendChild(testo);
     elemento.appendChild(titolo);
      if (i.image) {
        let fotoarticolo=document.createElement("img");
         fotoarticolo.setAttribute("class", "fotoart");
         fotoarticolo.src=i.image;
        elemento.appendChild(fotoarticolo);
       } 
    let descr=document.createElement("p");
    let paragrafo=document.createTextNode(i.description);
    let bottone=document.createElement("a");
    let textbottone=document.createTextNode("Clicca per saperne di più");
     bottone.href=i.url;
    bottone.appendChild(textbottone);
    descr.appendChild(paragrafo);
    descr.appendChild(bottone); 
    elemento.appendChild(descr); 
    articolo.appendChild(elemento);
   }
}


fetch (route('caricoarticoli')).then(onResponse).then(onJson);

function onJson(json) {
console.log(json);
AggEle(json.data); /*Carico gli elementi in un array 'data' */
  }

function onResponse(response){
   return response.json();
  }

const articolo=document.querySelector("#elencoarticoli");
