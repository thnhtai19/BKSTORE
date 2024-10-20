const heartButtons = document.querySelectorAll('.heart-button');

heartButtons.forEach((button) => {
    const heartIcon = button.querySelector('.heart-icon');

    if (heartIcon.classList.contains('isheart')) {
        heartIcon.setAttribute('fill', 'currentColor'); 
    } else {
        heartIcon.setAttribute('fill', 'none');
    }


    button.addEventListener('click', function () {
        const heartIcon = button.querySelector('.heart-icon');
        const isFilled = heartIcon.getAttribute('fill') === 'currentColor';
        if (isFilled) {
            heartIcon.setAttribute('fill', 'none');
        } else {
            heartIcon.setAttribute('fill', 'currentColor');
        }
    });
});
