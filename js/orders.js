const orderBtn = document.getElementById("addOrderBtn");
const confirmOrderBtn = document.getElementById("confirmOrderBtn");

let orders = [];

const addToOrder = (e) => {

    const pizzaVal = document.getElementById('pizzaRadioBtn').value;
    console.log(pizzaVal);

    const baseVal = document.getElementById('baseRadioBtn').value;
    console.log(baseVal);

    const toppings = document.getElementsByName('topping');
    // console.log(toppings);

    // Convert topping[tomatoes] to topping, value = "tomatoes"
    // Add amounts in js using key-value pairs??
    
    // console.log(toppings);
    let vals = "";
    let toppingsArray = new Array();
    for (let i = 0; i < toppings.length; i++) {
        if (toppings[i].checked) {
            // vals += "," + toppings[i].value;
            toppingsArray.push(setAmount(toppings[i].value));
        }
    }
  
    console.log(toppingsArray);


    let order = {
        pizza: pizzaVal,
        base: baseVal,
        topping: toppingsArray,
        // email: "a",
        // address: "a",
    }

    orders.push(order);

    // UNCOMMENT FOR RESET document.querySelector('form').reset();
    
    let displayOrder = document.querySelector('#display');
    // const ordersString = JSON.stringify(orders);
    // console.log(ordersString);
    displayOrder.textContent = JSON.stringify(orders);

    console.log("ORDER: ")
    console.log(order);

   
}

orderBtn.addEventListener("click", addToOrder);
confirmOrderBtn.addEventListener("click", addToOrder);


const setAmount = (value) => {
    switch(value) {
        case "tomatoes":
          return {tomatoes : 20};
          break;
        case "onions":
          return {onions : 30};
          break;
        case "spinach":
          return {spinach : 40};
          break;
        case "capsicum":
          return {capsicum : 30};
          break;
        case "basil":
          return {basil : 50};
          break;
        case "pineapple":
          return {pineapple : 30};
          break;
        case "ham":
          return {ham : 50};
          break;
        default:
          return "FAIL";
      }
}

const submitOrder = (e) => {
    e.preventDefault();
    $.ajax({
        // url: "../php_components/process_order.php",
        url: "../php_components/post_order.php",
        method: "POST",
        data: {orders: JSON.stringify(orders)},
        success: function(res) {
            console.log("HELLO FROM AJAX")
            console.log(res);
        }
    })
}

const submitOrderBtn = document.getElementById('submitOrderBtn');
submitOrderBtn.addEventListener("click", submitOrder);

