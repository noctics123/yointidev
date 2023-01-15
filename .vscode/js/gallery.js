const slider = document.querySelector("slider");
const carsObject = [
    {
        "img": "img/slide1.jpg",
        "model" : "FERRARI 296 GTS",
        "type" : "coupe"
    },
    {
        "img": "https://images.pexels.com/photos/10292234/pexels-photo-10292234.jpeg?cs=srgb&dl=pexels-yoshi-10292234.jpg&fm=jpg",
        "model" : "FERRARI SF90",
        "type" : "coupe"
    },
    {
        "img": "https://images.pexels.com/photos/11202306/pexels-photo-11202306.jpeg?cs=srgb&dl=pexels-prat-clement-11202306.jpg&fm=jpg",
        "model" : "FERRARI F60 America",
        "type" : "coupe"
    },
    {
        "img": "https://images.pexels.com/photos/8171898/pexels-photo-8171898.jpeg?cs=srgb&dl=pexels-eriks-abzinovs-8171898.jpg&fm=jpg",
        "model" : "FERRARI F8",
        "type" : "hatchback"
    }
];

window.addEventListener("load",iniliatizeSlider());

function iniliatizeSlider(){
    let cars = "";
    for (let car in carsObject){
        cars += `<div class="slide">
                  <img src="${carsObject[car].img}" alt="image">
                  <br><br>
                    <div>
                        <h3>${carsfotosObject[car].model}</h3>
                    <p>${cassObject[car].type}</p>
                    </div>
                  </div>`;
    }

    slider.innerHTML = cars;
}