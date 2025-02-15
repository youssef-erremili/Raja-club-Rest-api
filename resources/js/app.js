let buttons = document.querySelectorAll('.fetch')
let containers = document.querySelectorAll('.data')
let copyBtn = document.querySelector('#copyBtn')
let alert = document.querySelector('#alert')


if (buttons) {
    buttons.forEach((button, index) => {
        button.addEventListener('click', () => {
            removeActiveClass()
            containers[index].classList.remove('hidden')
        })
    });

    function removeActiveClass() {
        containers.forEach((container) => {
            container.classList.add("hidden");
        })
    }
}

if (copyBtn) {
    copyBtn.addEventListener('click', () => {
        let text = copyBtn.getAttribute('data');
        async function copyContent() {
            try {
                await navigator.clipboard.writeText(text);
                alert.classList.remove('hidden')
                hideAlert()
            }
            catch (error) {
                console.log('Failed to copy');
            }
        }
        copyContent()
    })
}

function hideAlert() {
    if (alert) {
        setTimeout(() => {
            alert.classList.add('hidden')
        }, 5000);
    }
}


