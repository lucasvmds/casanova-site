import '../less/app.less';

document.addEventListener('DOMContentLoaded', () => {
    // Ouvinte de evento para fixar o menu na roalgem da página
    document.addEventListener('scroll', () => {
        if (window.innerHeight < document.scrollingElement.scrollTop) {
            document.querySelector('#page-header').classList.add('fixed');
        } else {
            document.querySelector('#page-header').classList.remove('fixed');
        }
    });

    document.querySelector('#menu-button').addEventListener('click', function() {
        const navClasses = document.querySelector('#page-header > nav').classList;

        if (navClasses.contains('open')) {
            navClasses.remove('open');
        } else {
            navClasses.add('open');
        }
    });
}, { once: true, } );