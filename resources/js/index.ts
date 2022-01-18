let navbarShow: boolean = true

/*
 *  Get all sections
 */

let sectionElements: Array<Element> = new Array()

document.querySelectorAll('.nav-trigger')!.forEach((el: Element) => sectionElements.push(el))

/*
 *  Get all nav items
 */

let navElements: Array<HTMLElement> = new Array()

Array.prototype.forEach.call(document.getElementById('navbar')!.children, (el: HTMLElement) => {
    navElements.push(el)
})

let observer = new IntersectionObserver(entries => {
    if(entries.find(e => e.target.id === "home")?.isIntersecting){
        setActive(navElements[0])
    }else if(entries.find(e => e.target.id === "skill")?.isIntersecting){
        setActive(navElements[1])
    }else if(entries.find(e => e.target.id === "aboutme")?.isIntersecting){
        setActive(navElements[2])
    }else if(entries.find(e => e.target.id === "funfact")?.isIntersecting){
        setActive(navElements[3])
    }else if(entries.find(e => e.target.id === "cv")?.isIntersecting){
        setActive(navElements[4])
    }
}, {
    root: document,
    rootMargin: '0px',
    threshold: 0
})

document.addEventListener("scroll", () => {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        hideNavbar()
    }else{
        showNavbar()
    }
})

sectionElements.forEach(el => observer.observe(el))

let setActive = (el: HTMLElement) => {
    Array.prototype.forEach.call(document.getElementById('navbar')!.children, (e: HTMLElement) => {
        e.classList.remove('actif')
    })
    el.classList.add('actif')
}

let hideNavbar = () => {
    if(navbarShow){
        document.getElementById('nav')?.animate([
            {bottom: 0},
            {bottom: "-100%"}
        ], {duration: 1000, easing: "ease-in-out"})
        setTimeout(() => document.getElementById('nav')?.classList.add('hidden'), 1000)
        navbarShow = false
    }
}

let showNavbar = () => {
    if(!navbarShow){
        document.getElementById('nav')?.animate([
            {bottom: "-100%"},
            {bottom: 0}
        ], {duration: 1000, easing: "ease-in-out"})
        document.getElementById('nav')?.classList.remove('hidden')
        navbarShow = true
    }
}