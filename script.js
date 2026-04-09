let expenses = [];

function addExpense() {
    let amount = document.getElementById("amount").value;
    let category = document.getElementById("category").value;

    if (amount === "" || category === "") {
        alert("Nhập đầy đủ!");
        return;
    }

    let item = {
        amount: amount,
        category: category
    };

    expenses.push(item);
    display();
}

function display() {
    let list = document.getElementById("list");
    list.innerHTML = "";

    expenses.forEach(e => {
        list.innerHTML += `<li>${e.amount} - ${e.category}</li>`;
    });
}