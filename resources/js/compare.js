// Функционал лайков
document.addEventListener('DOMContentLoaded', function() {
    const likeButtons = document.querySelectorAll('.control_icons__icon.__compare');

    likeButtons.forEach(button => {
        const projectId = button.dataset.projectid;
        let compare = JSON.parse(localStorage.getItem('compare')) || [];

        if (compare.includes(projectId)) {
            button.classList.add('__compared');
        }

        button.addEventListener('click', function(event) {
            event.stopPropagation();
            event.preventDefault();

            const projectId = button.dataset.projectid;
            let compare = JSON.parse(localStorage.getItem('compare')) || [];

            const index = compare.indexOf(projectId);
            if (index !== -1) {
                compare.splice(index, 1);
                button.classList.remove('__compared');
            } else {
                compare.push(projectId);
                button.classList.add('__compared');
            }

            localStorage.setItem('compare', JSON.stringify(compare));
        });
    });

});
