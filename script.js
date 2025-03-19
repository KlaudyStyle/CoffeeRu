document.addEventListener('mousemove', function(e) {
    const cards = document.querySelectorAll('.coffee-card');
    const mouseX = e.clientX;
    const mouseY = e.clientY;

    cards.forEach(card => {
        const rect = card.getBoundingClientRect();
        const cardX = rect.left + rect.width/2;
        const cardY = rect.top + rect.height/2;
        
        const angleX = (mouseY - cardY) / 30;
        const angleY = (mouseX - cardX) / -30;

        card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg)`;
    });
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});