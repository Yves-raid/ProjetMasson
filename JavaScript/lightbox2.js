console.log("js");

let imagePrincipale = document.querySelectorAll(".img-principale");
let miniatures = document.querySelectorAll(".miniature");

for (let i = 0; i < imagePrincipale.length; i++) {
    imagePrincipale[i].addEventListener("click", function () {
        let src = this.getAttribute("src");
        ouvrirlightbox(src);
    });
}

for (let i = 0; i < miniatures.length; i++) {
    miniatures[i].addEventListener("click", function () {
        let src = this.getAttribute("src");
        ouvrirlightbox(src);
    });
}

function ouvrirlightbox(source) {
    let ancienne = document.getElementById("lightbox");
    if (ancienne) {
        document.body.removeChild(ancienne);
    }

    let box = document.createElement("div");
    box.setAttribute("id", "lightbox");

    let img = document.createElement("img");
    img.setAttribute("src", source);
    box.appendChild(img);

    let fermer = document.createElement("img");
    fermer.setAttribute("id","images/fermer.svg")
    fermer.setAttribute("id", "fermer");
    box.appendChild(fermer);

    fermer.addEventListener("click", function () {
        document.body.removeChild(box);
    });

    document.body.appendChild(box);
}

