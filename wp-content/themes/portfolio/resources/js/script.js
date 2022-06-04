const animations = {
    sections: document.querySelectorAll('.slide-in'),
    menuBar : document.querySelector('.menu'),
    navMenu : document.querySelector('.header__nav'),
    borderForeground : document.querySelector('.border-foreground'),
    menuIconOpen : document.querySelector('.header__hamburger--open'),
    menuIconClose : document.querySelector('.header__hamburger--close'),
    menuOpen : false,

    init(){
        this.obServeSection();
        this.burgerMenu()
    },
    obServeSection() {
        const observer = new IntersectionObserver(this.animateSection);
        for (const section of this.sections) {
            observer.observe(section);
        }
    },
    animateSection(entries, observer) {
        for (const entry of entries) {
            if (entry.isIntersecting) {
                entry.target.classList.add('active-section');
            } else {
                entry.target.classList.remove('active-section');
            }
        }
    },
    burgerMenu(){
        this.menuBar.addEventListener('click', (e) => {
            if(!this.menuOpen){
                this.menuBar.classList.add('open');
                this.navMenu.classList.add('menu__responsive');
                this.menuIconOpen.style.display = 'none';
                this.menuIconClose.style.display = 'block';
                this.borderForeground.classList.add('overflow-hidden');
                this.menuOpen = true;
            }
            else{
                this.menuBar.classList.remove('open');
                this.menuOpen = false;
                this.navMenu.classList.remove('menu__responsive');
                this.menuIconOpen.style.display = 'block';
                this.menuIconClose.style.display = 'none';
                this.borderForeground.classList.remove('overflow-hidden');
            }
        });
    }
}
animations.init();