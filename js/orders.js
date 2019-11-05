
const orderBtn = document.getElementById("addOrderBtn");
const confirmOrderBtn = document.getElementById("nextBtn");

let orders = [];

const addToOrder = (e) => {
    e.preventDefault();

    let pizzaVal = "";
    let baseVal = "";
    let toppings = [];

    // TODO check if these are not null. Optional elements
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
    // toppings = document.getElementsByName('input[name="topping"]:checked').value; 

    let vals = "";
    let toppingsArray = new Array();
    if (toppings) {
        for (let i = 0; i < toppings.length; i++) {
            if (toppings[i].checked) {
                // vals += "," + toppings[i].value;
                toppingsArray.push(setAmount(toppings[i].value));
            }
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
    li.setAttribute("id", "1");
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
    const deleteBtn = document.createElement('button');
    deleteBtn.addEventListener("click", deleteOrder);
    deleteBtn.innerHTML = `<i class="fas fa-times"></i>`;
    deleteBtn.style.background = "none";
    deleteBtn.style.border = "none";
    li.appendChild(deleteBtn);

    // displayOrder.textContent = JSON.stringify(orders);
}

const deleteOrder = (e) => {
    e.preventDefault();
    console.log(e.target);
    console.log(e.target.parentElement);
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
     let memberId = 2112;
     if (document.querySelector('#memberId') == null) {
        alert("User not logged in or failure");
        return;
        memberId = 0;
        //function insert record......
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

const submitOrderBtn = document.getElementById('submitOrderBtn');
submitOrderBtn.addEventListener("click", addDetailsToOrder);
submitOrderBtn.addEventListener("click", submitOrder);
