function informErrorToUser(input, span) {
    const inputElement = document.getElementById(input);
    const spanElement = document.getElementById(span);

    inputElement.classList.add('error');
    spanElement.style.visibility = 'visible';

    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "There are errors in the form you submitted",
        showConfirmButton: true,
        confirmButtonText: "Recheck Form",
    });

}

function displayErrorPasswordMismatch() {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Password does not match with the email you provided. Please try again',
        showConfirmButton: true,
        confirmButtonText: 'Okay',
    });
}