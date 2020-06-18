function flipArray(arr) {

    let newArr = {};

    for (let k in arr){

        if (!arr.hasOwnProperty(k)){
            continue;
        }
        newArr[arr[k]] = k;
    }
    return newArr;
}

let array = ['111', '222', '333', '444', '555'];
let obj = {
    "1lool": '111k',
    "2lool": '222l',
    "3lool": '333y',
    "4lool": '444i',
    "5lool": '555c'
};


let test1 = flipArray(array);
console.log(test1);

let test2 = flipArray(obj);
console.log(test2);