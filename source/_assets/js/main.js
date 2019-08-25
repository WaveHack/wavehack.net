window.addEventListener('DOMContentLoaded', () => {

    document.getElementById('toggle-ssh-key')
        .addEventListener('click', () => {
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

});
