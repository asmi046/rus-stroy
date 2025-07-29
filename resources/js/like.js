// Функционал лайков
document.addEventListener('DOMContentLoaded', function() {
    // Ищем все элементы с классами control_icons__icon и __like
    const likeButtons = document.querySelectorAll('.control_icons__icon.__like');

    // Вешаем событие на каждый найденный элемент
    likeButtons.forEach(button => {
        // Проверяем избранное при загрузке страницы
        const projectId = button.dataset.projectid;
        let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

        // Если проект уже в избранном, добавляем класс __liked
        if (favorites.includes(projectId)) {
            button.classList.add('__liked');
        }

        button.addEventListener('click', function(event) {
            // Останавливаем распространение события
            event.stopPropagation();
            event.preventDefault();

            const projectId = button.dataset.projectid;
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

            const index = favorites.indexOf(projectId);
            if (index !== -1) {
                favorites.splice(index, 1);
                button.classList.remove('__liked');
            } else {
                favorites.push(projectId);
                button.classList.add('__liked');
            }

            localStorage.setItem('favorites', JSON.stringify(favorites));
        });
    });

});
