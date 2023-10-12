let input = document.getElementById("display");

function appendToInput(value) {
    input.value += value;
}

function clearInput() {
    input.value = "";
}

function calculateResult() {
    try {
        input.value = eval(input.value);
    } catch (error) {
        input.value = "Error";
    }
}

function backspace() {
    input.value = input.value.slice(0, -1);
}

function square() {
    input.value = Math.pow(parseFloat(input.value), 2);
}

