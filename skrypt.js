document.addEventListener("DOMContentLoaded", function () {

    const email = document.getElementById('email');
    const nazwisko = document.getElementById('nazwisko');
    const imie = document.getElementById('imie');
    const haslo = document.getElementById('haslo');

    const formularz = document.getElementById('formularz');

    formularz.addEventListener('submit', function (e) {
        e.preventDefault();
        const dane = {
            email: email.value,
            nazwisko: nazwisko.value,
            imie: imie.value,
            haslo: haslo.value
        }
        console.log(dane)

        fetch('apli.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams(dane)
        })
            .then(resp => resp.json())
            .then(resp => {
                console.log(resp);
                document.getElementById('Flex').innerText = console.logJSON.stringify(resp);
            })
            .catch(error => {
                console.error("Fetch error:", error)
                document.getElementById('Flex').innerText = "Blad";
            }
            );



    });

}

);

