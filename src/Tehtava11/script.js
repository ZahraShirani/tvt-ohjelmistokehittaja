 class Product {
            constructor(name, price) {

                this.name = name;
                this.price = price;
            }
            printDetails() {
                return `<tr><td>${this.name}</td>
                        <td>${this.price}</td>
                        </tr>`;
            }
        }
 
 
        const productList = [];

            function addProduct() {
                const name = document.getElementById("name").value;
                const price = document.getElementById("price").value;
                const product = new Product(name, price);

                function updateProductList() {
                    fetch("api.php"){
                        method: "GET"
                    })
                    .then(response => response.json())
                    .then(data => {)
                }

                fetch("api.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(product)
                })

                .then(response => response.json())
                .then(data => {
                    const success
                    document.getElementById("msg").innerText = data.success;
            }
    /*   productList.push(product);
    let products = "";
                for (let i = 0; i < productList.length; i++) {
                    products += productList[i].printDetails();
                }



                document.getElementById("productTableBody").innerHTML = products;