/** Armazena o id retornado pelo `setInterval` dos slides  */
let slideInterval;
/**
 * Alterna os slides automaticamente
 * 
 * @returns {void}
 */
function autoAltSlides()
{
    altSlides(
        document.querySelector('#slides-selector > .selected').nextElementSibling ||
        document.querySelector('#slides-selector').firstElementChild
    );
}

/**
 * Inicia o slide automatico
 * 
 * @returns {void}
 */
function initAutoSlides()
{
    slideInterval = setInterval(autoAltSlides, 10000);
}
initAutoSlides();

/**
 * Alterna os slides da home
 * 
 * @param {Event|Element} event
 * @returns {void}
 */
function altSlides(event)
{
    const node = event instanceof Element ? event : event.target;
    if (event instanceof Event) {
        clearInterval(slideInterval);
        initAutoSlides();
    }
    document.querySelector('#slides-selector > .selected').classList.remove('selected');
    node.classList.add('selected');
    document.querySelector('#slides').style.left = ( parseInt(node.dataset.slide) * -100 ) + '%';
}
document.querySelectorAll('#slides-selector > li').forEach(item => item.addEventListener('click', altSlides));

/**
 * Rola até a seção dos links de mesma página
 * 
 * @param {Event} event
 * @returns {void}
 */
function linkScrollTo(event)
{
    event.preventDefault();
    const target = document.querySelector(
        event.currentTarget.getAttribute('href').replace(/^\//, '')
    );
    window.scrollTo({
        top: target.offsetTop,
        behavior: 'smooth',
    });
}
// Adiciona ouvinte de eventos nos links da home
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('a').forEach(link => {
        if (/#/.test(link.href)) link.addEventListener('click', linkScrollTo);
    });
}, { once: true });

// Ouvinte de evento para fixar o menu na roalgem da página
document.addEventListener('scroll', () => {
    if (document.querySelector('#empresa').offsetTop < document.scrollingElement.scrollTop) {
        document.querySelector('#page-header').classList.add('fixed');
    } else {
        document.querySelector('#page-header').classList.remove('fixed');
    }
});