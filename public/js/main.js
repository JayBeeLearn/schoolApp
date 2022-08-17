schoolFees = document.querySelectorAll(".schoolFees");
// console.log(schoolFees[0].innerHTML)

function getChildrenFees() {
    for (i = 0; i < schoolFees.length; i++) {
        childrenFees = schoolFees[i].innerHTML;
        fees = Number(childrenFees)
        console.log(fees)
        
    }
}

getChildrenFees();

