const orderBtn = document.getElementById("addOrderBtn");
const confirmOrderBtn = document.getElementById("nextBtn");

let orders = [];

const addToOrder = (e) => {
    e.preventDefault();

    // TODO check if these are not null. Optional elements
    const pizzaVal = document.querySelector('input[name="pizza"]:checked').value;
    const baseVal = document.querySelector('input[name="base"]:checked').value;
    const toppings = document.getElementsByName('topping');

    let vals = "";
    let toppingsArray = new Array();
    for (let i = 0; i < toppings.length; i++) {
        if (toppings[i].checked) {
            // vals += "," + toppings[i].value;
            toppingsArray.push(setAmount(toppings[i].value));
        }
    }

    let order = {
        pizza: pizzaVal,
        base: baseVal,
        topping: toppingsArray,
        // email: "a",
        // address: "a",
    }

    orders.push(order);

    document.querySelector('form').reset();

    let displayOrder = document.querySelector('#display');
    const orderList = document.querySelector('#orderList');
    const li = document.createElement("li");
    let orderText = "";
    let toppingsString = "";
    // for (const [topping, value] of order.topping) {
    //     console.log(topping);
    // }
    order.topping.forEach(function (element) {
        Object.keys(element).forEach(key => {
            toppingsString += key + " ";
        })
    });

    li.innerText = orderText.concat(order.pizza, ", ", order.base, ", ", toppingsString);
    orderList.appendChild(li);

    // displayOrder.textContent = JSON.stringify(orders);
}

const displayPayment = () => {
    if (orders.filter(e => e.pizza).length > 0) {
        console.log("There is a pizza");
    } else {
        console.log("There is no pizza");
    }
    const paymentForm = document.getElementById('payment');
    paymentForm.style.display = 'block';

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
    
     orders.forEach((element, index, array) => {
         element.name = name;
         element.email = email;
         element.address = address;
         element.memberId = 0;
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
        }
    })
}

const submitOrderBtn = document.getElementById('submitOrderBtn');
submitOrderBtn.addEventListener("click", addDetailsToOrder);
submitOrderBtn.addEventListener("click", submitOrder);
