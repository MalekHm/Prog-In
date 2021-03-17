window.onload = () => {
    //gestion des boutons supprimer
    let links = document.querySelectorAll("[data-delete]")

    // boucler sur links
    for(link of links){

        //ecouter le clic
        link.addEventListener("click" , function(e){

            //empecher la navigation
            e.preventDefault()

            //demander confirmation
            if(confirm("Voulez-vous supprimer cette image ?")){
                //envoyer requete ajax vers href du lien avec la methode delete
                fetch(this.getAttribute("href") , {
                    method: "DELETE" ,
                    headers: {
                        "X-Requested-With" : "XMLHttpRequest" ,
                        "Content-Type" : "application/json"
                    },
                    body : JSON.stringify({"_token" : this.dataset.token})
                }).then(
                    //recuperer la reponse en JSON
                    response => response.json()
                ).then(data => {
                    if (!data.success)
                     this.parentElement.remove()
                    else
                        alert(data.error)

                }).catch(e => alert(e))
            }
        })
    }
}