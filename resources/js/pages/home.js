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
    document.querySelector('#page-header > nav').classList.remove('open');
}

/**
 * Adicione ouvintes de evento nos links locais
 * 
 * @returns {void}
 */
function addLinksListener()
{
    document.querySelectorAll('a').forEach(link => {
        if (/#/.test(link.href)) link.addEventListener('click', linkScrollTo);
    });
}

/**
 * Rola até a seção informada no hash da página, se houver
 * 
 * @returns {void}
 */
function initHashScroll()
{
    if (location.hash) {
        window.scrollTo({
            top: document.querySelector(location.hash).offsetTop,
        });
    }
}

function closeFormSuccessMessage()
{
    const message = document.querySelector('#contact-form-message');
    if (message) {
        setTimeout(
            () => message.remove(),
            10000
        );
    }
}

document.addEventListener('DOMContentLoaded', () => {
    addLinksListener();
    initHashScroll();
    closeFormSuccessMessage();
}, { once: true });