const animations = {
    sections: document.querySelectorAll('.slide-in'),

    init(){
        this.obServeImg();
    },
    obServeImg() {
        const observer = new IntersectionObserver(this.animateImg);
        for (const section of this.sections) {
            observer.observe(section);
        }
    },
    animateImg(entries, observer) {
        for (const entry of entries) {
            if (entry.isIntersecting) {
                entry.target.classList.add('active-section');
            } else {
                entry.target.classList.remove('active-section');
            }
        }
    }
}

animations.init();