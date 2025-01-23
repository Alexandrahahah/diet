
//  1ère animation en JS natif : 
//Au chargement de la page et au mouseenter : effet animate.css pulse pour les éléments suivants "Alexandra Jacob", partie "A propos", partie "formations":


let elemPulse = document.getElementsByClassName('pulse');
console.log(elemPulse.length);

for(let i = 0; i< elemPulse.length; i++) {

    elemPulse[i].addEventListener('mouseenter', function(e){
        e.preventDefault;
        this.classList.add("animate__animated", "animate__pulse");

        this.addEventListener('mouseout', function () { 

            this.classList.remove("animate__animated", "animate__pulse"); 
        })
    })
};


// 2ème animation en JS natif :
// Apparition de l'image dans la section "mais aussi" au scroll:

window.addEventListener('scroll', function(){
    if(window.scrollY > 1000){
        this.document.getElementById('appear').style.opacity = 1;
    } else{
        this.document.getElementById('appear').style.opacity = 0;
    }
    
    })


// 3ème animation en JS natif (facultatif) :
// Flêche pour revenir en haut de la page :

window.addEventListener('scroll', function(){
    if(window.scrollY > 600){
        this.document.getElementById('back-to-top').style.display = 'block';
    } else{
        this.document.getElementById('back-to-top').style.display = 'none';
    }
    
})





















