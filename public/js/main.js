// let schoolFees = document.querySelectorAll(".schoolFees");
// let schoolFee = document.getElementById("schoolFee");
// alert('hi')
// console.log(schoolFees[0].innerHTML)

function getChildrenFees() {
    let sum = 0;

    for (i = 0; i < schoolFees.length; i++) {
        childrenFees = schoolFees[i].innerHTML;
        fees = Number(childrenFees);
        sum = sum + fees;
        // console.log(fees);
    }
    schoolFee.innerHTML = sum;

    // console.log(sum);
}
getChildrenFees();

amountPaid = document.getElementById("moneyPaid");
perChild = document.querySelectorAll("#perChildPaid");
// console.log(perChild)
let numberOfChildren = document.getElementById("numberOfChildren").value;

// let children = numberOfChildren.value

console.log(numberOfChildren);
function distributeAmount() {
    // formula for dividing what the parent pays to the number of children
    result = Math.floor(amountPaid.value / children);
    // A Loop to go through all the children input box value
    for (i = 0; i < children; i++)
        // Going through all the children input box value and putting the divided value
        perChild[i].value = result;
}

// distributeAmount()

payBut = document.querySelectorAll('#autoPay');
// console.log(payBut[i])
function payFees() {
for (i = 0; i < payBut.length; i++)
payBut[i].click()
}
