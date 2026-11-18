document.addEventListener("DOMContentLoaded", function () {

    // SEARCH FUNCTION
    const searchInput = document.getElementById("searchInput");

    if (searchInput) {
        searchInput.addEventListener("keyup", function () {

            let filter = searchInput.value.toLowerCase();
            let cards = document.querySelectorAll(".card");

            cards.forEach(function (card) {

                let productName = card.querySelector("h3").textContent.toLowerCase();

                if (productName.includes(filter)) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }

            });

        });
    }

    // CART SYSTEM
    let cartCount = 0;
    let cartTotal = 0;

    const buyButtons = document.querySelectorAll(".card .buy-btn");

    buyButtons.forEach(function (button) {

        button.addEventListener("click", function () {

            let price = parseInt(button.dataset.price) || 0;

            cartCount++;
            cartTotal += price;

            document.getElementById("cartCount").textContent = cartCount;
            document.getElementById("cartTotal").textContent = cartTotal;

            alert("✅ Product Added To Cart");
        });

    });

});

// AI ASSISTANT
function askAI() {

    let msg = document.getElementById("aiInput").value.toLowerCase();
    let reply = "";

    if (msg.includes("farmer")) {
        reply = "👨‍🌾 Farmers are from Bangalore and nearby rural areas.";
    }
    else if (msg.includes("fresh")) {
        reply = "🥬 All products are freshly harvested within 24–48 hours.";
    }
    else if (msg.includes("tomato")) {
        reply = "🍅 Tomatoes are fresh and supplied directly from local farmers.";
    }
    else if (msg.includes("apple")) {
        reply = "🍎 Apples are sourced from trusted farms and are fresh.";
    }
    else {
        reply = "🤖 Ask about freshness, products, or farmer information.";
    }

    document.getElementById("aiReply").innerText = reply;
}

// CHECKOUT
function checkout() {

    let count = parseInt(document.getElementById("cartCount").textContent);
    let total = parseInt(document.getElementById("cartTotal").textContent);

    if (count === 0) {
        alert("🛒 Your cart is empty!");
        return;
    }

    let confirmOrder = confirm(
        "Order Summary\n\n" +
        "Items: " + count +
        "\nTotal: ₹" + total +
        "\n\nProceed with order?"
    );

    if (confirmOrder) {

        alert(
            "🎉 Order Placed Successfully!\n\n" +
            "Items: " + count +
            "\nTotal Amount: ₹" + total +
            "\n\nThank you for shopping with FarmFresh."
        );

        document.getElementById("cartCount").textContent = "0";
        document.getElementById("cartTotal").textContent = "0";
    }
}