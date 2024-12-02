const sidebarButton=document.getElementById('toggle-button')
const sidebar= document.getElementById('sidebar')
const links= document.querySelectorAll(".link")
const muter= document.getElementById('coachella')
const muteBut=document.getElementById('muted')
const unmuteBut=document.getElementById('unmute')
const artistCard=document.getElementById('artistCard')
const dialog1= document.getElementById('schedOne')
const dialog2=document.getElementById('schedTwo')


function showDialogFirst(){
    dialog1.showModal()
}
function showDialogSecond(){
    dialog2.showModal()
}
function closeDialogFirst(){
    dialog1.close()
}
function closeDialogSecond(){
    dialog2.close()
}



function toggleSideBar(){
    sidebar.classList.toggle('close')
    sidebarButton.classList.toggle('ikot')
    
    
    Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
        ul.classList.remove('show')
        ul.previousElementSibling.classList.remove('rotate')
    })
}


function toggleCard(link){
    link.parentElement.classList.toggle('expand');
}

function toggleFAQ(link){
    link.parentElement.parentElement.classList.toggle('xpandQuestion');
}



function openCoachellaPasses() {
    window.open("https://www.coachella.com/passes", '_blank');
}
function openCoachellaMerch() {
  window.open("https://coachellamerch.shop", "_blank");
}
function showMap(mapId) {
    const maps = document.querySelectorAll('.map');
    maps.forEach(map => {
        map.style.display = 'none';
    });
    const selectedMap = document.getElementById(mapId);
    if (selectedMap) {
        selectedMap.style.display = 'block';
    }
}

function showImage(imageSrc) {
    const mapHolder = document.querySelector('.map-holder');

    mapHolder.innerHTML = '';

    const img = document.createElement('img');
    img.src = imageSrc;
    img.alt = 'Coachella Map';
    img.style.width = 'auto';
    img.style.height = 'auto';

    mapHolder.appendChild(img);
}

document.addEventListener("click", (event) => {
    if (event.target.classList.contains("map-btn")) {
        const targetId = event.target.getAttribute("data-target");

        const images = document.querySelectorAll(".maps img");
        images.forEach((img) => {
            img.classList.remove("visible");
        });

        const targetImg = document.getElementById(targetId);
        if (targetImg) {
         
            targetImg.classList.add("visible");
        }
    }
});








