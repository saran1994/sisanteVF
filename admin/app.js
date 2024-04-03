const links = document.querySelectorAll(".item li")
const ps = document.querySelectorAll("p")
const ul = document.getElementById("debouche")

links.forEach((item) =>{
    item.addEventListener("click" , (e) =>{
        // on enleve la classe active sur tous nos elts (links)
        links.forEach((elt) =>{
            elt.classList.remove("active")
        })
        // on ajoute la classe active sur l'onglet correspondant à mn click
        e.currentTarget.classList.add("active")

        // on masque tous tous nos elt (ps , ul)
        
        ps.forEach((elt) =>{
            elt.style.display = "none"
        })

        ul.style.display="none"
        //  getAttribute()
        const data = item.getAttribute("data")
        console.log(data);

        document.querySelector(data).style.display = "block"








    })
})