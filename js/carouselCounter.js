let carouselCounter = document.getElementById('carouselCounter');

let carousel = document.getElementById('carouselCheckUp')


carousel.addEventListener('slide.bs.carousel', function (event){
    carouselCounter.innerText = event.to + 1;
})

