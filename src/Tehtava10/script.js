fetch("api.php")
    .then(response => response.json())
    .then(autot => {

        let teksti = "";

        autot.forEach(auto => {

            teksti += `
                <p>
                    🚗 ${auto.make} ${auto.model}
                    (${auto.year})
                </p>
            `;
        });

        document.getElementById("autot").innerHTML = teksti;
    });
 