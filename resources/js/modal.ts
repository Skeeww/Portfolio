let modals: Map<String, Element> = new Map()



const showModal = (e: Event) => {
    const targetedModal: Element|undefined = modals.get((e.target as Element).getAttribute('targeted-modal')!)
    if(targetedModal === undefined){return}
    targetedModal.classList.remove('hidden')
    document.body.style.overflowY = 'hidden'
    targetedModal.animate([
        {
            opacity: 0,
            top: "100%"
        },
        {
            opacity: 1,
            top: "0%"
        }
    ], {
        duration: 250,
        easing: "ease-in-out"
    })
}

const hideModal = (e: Event) => {
    const targetedModal: Element|null = (e.target as Element).parentElement!.parentElement
    if(targetedModal === null){return}
    targetedModal.animate([
        {
            top: "0%",
            opacity: 1
        },
        {
            display: "none",
            top: "100%",
            opacity: 0
        }
    ], {
        duration: 250,
        easing: "ease-in-out"
    })
    setTimeout(() => {
        document.body.style.overflowY = 'auto'
        targetedModal.classList.add('hidden')
    }, 200)
}

const getCloseButtons = (el: Element): Array<HTMLElement> => {
    return Array.prototype.filter.call(el.querySelectorAll("*"), (e) => (e instanceof HTMLElement) && (e.classList.contains("close_modal")))
}

/*
    Modal
 */
Array.prototype.forEach.call(document.getElementsByClassName("modal"), (el: Element) => {
    if(el.tagName === "DIV"){
        el.classList.add('hidden')
        modals.set(el.id, el);
        getCloseButtons(el).forEach(b => {
            b.addEventListener('click', hideModal)
        })
    }else if(el.tagName === "BUTTON"){
        el.addEventListener('click', showModal)
    }
})