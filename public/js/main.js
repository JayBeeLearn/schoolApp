schoolFees = document.querySelectorAll(".schoolFees");
schoolFee = document.getElementById('schoolFee');
// console.log(schoolFees[0].innerHTML)

function getChildrenFees() {
    let sum = 0;

    for (i = 0; i < schoolFees.length; i++) {
        childrenFees = schoolFees[i].innerHTML;
        fees = Number(childrenFees);
        sum = sum + fees;
        console.log(fees);
    }

    schoolFee.innerHTML = sum

    console.log(sum);
}

getChildrenFees();
