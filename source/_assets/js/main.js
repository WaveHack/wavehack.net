import tippy from 'tippy.js';

window.addEventListener('DOMContentLoaded', () => {

    tippy('.tippy');

    document.getElementById('toggle-ssh-key')
        .addEventListener('click', e => {
            // Don't scroll to top
            e.preventDefault();

            const el = document.getElementById('ssh-key');
            el.style.display = ((el.style.display === 'none') ? 'block' : 'none');
        });

    document.getElementById('ssh-key')
        .addEventListener('click', () => {
            const selection = window.getSelection();
            const range = document.createRange();

            range.selectNodeContents(document.getElementById('ssh-key'));
            selection.removeAllRanges();
            selection.addRange(range);
        });

    document.getElementById('toggle-ca')
        .addEventListener('click', e => {
            // Don't scroll to top
            e.preventDefault();

            const el = document.getElementById('ca');
            el.style.display = ((el.style.display === 'none') ? 'block' : 'none');
        });

    document.getElementById('ca-contents')
        .addEventListener('click', () => {
            const selection = window.getSelection();
            const range = document.createRange();

            range.selectNodeContents(document.getElementById('ca-contents'));
            selection.removeAllRanges();
            selection.addRange(range);
        });

});
