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