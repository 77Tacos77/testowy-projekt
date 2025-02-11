document.addEventListener("DOMContentLoaded", function () {

    const email = document.getElementById('email');
    const nazwisko = document.getElementById('nazwisko');
    const imie = document.getElementById('imie');
    const haslo = document.getElementById('haslo');
    const dane = [];

    const formularz = document.getElementById('formularz');

    formularz.addEventListener('submit', function (e) {
        e.preventDefault();
        dane.push({
            email: email.value,
            nazwisko: nazwisko.value,
            imie: imie.value,
            password: haslo.value
        })
        console.log(dane)
    }
    )


    pobieranie()

    function pobieranie() {
        fetch('apli.php')
            .then(resp => resp.json())
            .then(resp => {
                console.log(resp);
                document.getElementById('Flex').innerText = document.write(JSON.stringify(resp));
            })


    }
})