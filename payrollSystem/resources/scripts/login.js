function prepareDashboard() {

    const form = document.getElementById('form');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const submitButton = document.getElementById('submitButton');
    const spinner = document.getElementById('spinner');

    event.preventDefault();

    setTimeout(() => {
        email.disabled = true;
        password.disabled = true;
        submitButton.value = '';
        spinner.style.opacity = 1;

        form.submit();

    }, 3000);

}