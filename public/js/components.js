document.addEventListener('click', (event) => {
    const themeToggle = event.target.closest('[data-theme-toggle]');
    if (themeToggle) {
        document.documentElement.classList.toggle('dark');
    }

    const themeEditorialToggle = event.target.closest('[data-theme-editorial-toggle]');
    if (themeEditorialToggle) {
        document.documentElement.classList.toggle('theme-editorial');
    }

    const accordionHeader = event.target.closest('.accordion__header');
    if (accordionHeader) {
        accordionHeader.closest('.accordion__item')?.classList.toggle('accordion__item--open');
    }

    const modalOpen = event.target.closest('[data-modal-open]');
    if (modalOpen) {
        document.querySelector(modalOpen.dataset.modalOpen)?.classList.add('modal-backdrop--open');
    }

    const modalClose = event.target.closest('[data-modal-close]');
    if (modalClose) {
        modalClose.closest('.modal-backdrop')?.classList.remove('modal-backdrop--open');
    }
});
