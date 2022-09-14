import '../less/app.less';

// Ouvinte de evento para fixar o menu na roalgem da página
document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('scroll', () => {
        if (window.innerHeight < document.scrollingElement.scrollTop) {
            document.querySelector('#page-header').classList.add('fixed');
        } else {
            document.querySelector('#page-header').classList.remove('fixed');
        }
    });
}, { once: true, } );