
const orderBtn = document.getElementById("addOrderBtn");
const confirmOrderBtn = document.getElementById("nextBtn");

let orders = [];
let listItemId = 0;
let price = 0;
let pizzaVal = "";
let baseVal = "";
let toppings = [];

const addToOrder = (e) => {
    e.preventDefault();

    getFormValues();

    let toppingsArray = new Array();
    if (toppings) {
        for (let i = 0; i < toppings.length; i++) {
            if (toppings[i].checked) {
                toppingsArray.push(setAmount(toppings[i].value));
            }
        }
    }
    
    let order = {
        id: listItemId,
        pizza: pizzaVal,
        base: baseVal,
        topping: toppingsArray,
        price: 10,
    }

    orders.push(order);

    document.querySelector('form').reset();

    let displayOrder = document.querySelector('#display');
    const orderList = document.querySelector('#orderList');
    const li = document.createElement("li");
    li.setAttribute("id", listItemId);
    let orderText = "";
    let toppingsString = "";

    order.topping.forEach(function (element) {
        Object.keys(element).forEach(key => {
            toppingsString += key + " ";
        })
    });

    li.innerText = orderText.concat(order.pizza, ", ", order.base, ", ", toppingsString);
    orderList.appendChild(li);
    const deleteBtn = document.createElement('button');
    deleteBtn.setAttribute("id", listItemId);
    deleteBtn.addEventListener("click", deleteOrder);
    deleteBtn.innerHTML = `<i class="fas fa-times"></i>`;
    deleteBtn.style.background = "none";
    deleteBtn.style.border = "none";
    li.appendChild(deleteBtn);
    displayPrice();

    listItemId++;
}

const displayPrice = () => {
    const priceText = document.getElementById('priceText');
    price += orders[0].price;
    priceText.innerText = "Order total: $" + price;
}

const deleteOrder = (e) => {
    e.preventDefault();
    console.log("LOOK AT MEEEEE");
    const orderId = e.target.parentElement.id;
    console.log("Id to be removed");
    console.log(orderId);
    console.log(" ");
    let index = 0;
    orders.forEach(function(element){
        if (element.id == orderId) {
            index = orders.findIndex(element => element.id == orderId);
            console.log("id found at index " + index);
        }
    });
    console.log(index);
    orders.splice(index, 1);
    document.getElementById(orderId).remove();
    orders.forEach(function(element){
        console.log(element);
    });
    price -= 10;
    document.getElementById('priceText').innerText = "Order total: $" + price;
}

const displayPayment = () => {
    if (orders.filter(e => e.pizza).length > 0) {
        const paymentForm = document.getElementById('payment');
        paymentForm.style.display = 'block';
    } else {
        alert("There are no pizzas in your order. Please add at least one to continue.");
    }
    

    const name = document.getElementById("name").required = true;
    const email = document.getElementById("email").required = true;
    const address = document.getElementById("address").required = true;
    const card = document.getElementById("card").required = true;
}


const addDetailsToOrder = () => {
     // Get payment details
     const name = document.querySelector('#name').value;
     const email = document.querySelector('#email').value;
     const address = document.querySelector('#address').value;
     let memberId = 34404;
     if (document.querySelector('#memberId') == null) {
        memberId = 0;
    } else {
        memberId = document.querySelector('#memberId').innerText;
        memberId = parseInt(memberId, 10);
        console.log(memberId);
    }
     
    
     orders.forEach((element, index, array) => {
         element.name = name;
         element.email = email;
         element.address = address;
         element.memberId = memberId;
     })

     console.log("LOGGING ADDED PROPS");
     orders.forEach((element, index, array) => {
        console.log(element.name);
        console.log(element.email);
    })
}

orderBtn.addEventListener("click", addToOrder);
nextBtn.addEventListener("click", displayPayment);


const setAmount = (value) => {
    switch (value) {
        case "tomatoes":
            return { tomatoes: 20 };
            break;
        case "onions":
            return { onions: 30 };
            break;
        case "spinach":
            return { spinach: 40 };
            break;
        case "capsicum":
            return { capsicum: 30 };
            break;
        case "basil":
            return { basil: 50 };
            break;
        case "pineapple":
            return { pineapple: 30 };
            break;
        case "ham":
            return { ham: 50 };
            break;
        default:
            return "FAIL";
    }
}

const submitOrder = (e) => {
    e.preventDefault();
    $.ajax({
        url: "../php_components/post_order.php",
        method: "POST",
        data: { orders: JSON.stringify(orders) },
        success: function (res) {
            console.log(res);
            window.location = "orderConfirmation.php";
        }
    })
}

const body = document.body;
body.addEventListener("submit", submitOrder);

const submitOrderBtn = document.getElementById('submitOrderBtn');
submitOrderBtn.addEventListener("click", addDetailsToOrder);
submitOrderBtn.addEventListener("submit", submitOrder);


const getFormValues = () => {


    if (document.querySelector('input[name="pizza"]:checked') == null) {
        alert("Please add a pizza to your order to continue.");
        pizzaVal = "";
        return;
    } else {
        pizzaVal = document.querySelector('input[name="pizza"]:checked').value;
    }
      
    if (document.querySelector('input[name="base"]:checked') == null) {
        alert("Please add a base to your order to continue.");
        baseVal = "";
        return;
    } else {
       baseVal = document.querySelector('input[name="base"]:checked').value;
    }
    
    if (document.querySelectorAll('input[type="checkbox"]').checked == false) {
        console.log("fail");
        toppings = [];
    } else {
        console.log("success");
        toppings = document.getElementsByName('topping');        
    }
}