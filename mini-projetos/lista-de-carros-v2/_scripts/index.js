const typed = new Typed('.name', {
    strings: ['As melhores marcas!', 'Os melhores preços!', 'As melhores condições!', 'Em um só lugar!'],
    typeSpeed: 120,
    backSpeed: 100,
    backDelay: 500,
    loop: true
  });

const imgs = document.getElementById("img");
const img = document.querySelectorAll("#img img");

let idx = 0;

function carrossel(){
    idx++;

    if(idx > img.length - 1){
        idx = 0;
    }

    imgs.style.transform = `translateX(${-idx * 500}px)`;
}

setInterval(carrossel, 1800);
