function filter(predicatFunc, input) {
    
    var result = [];

    for(i = 0; i < input.length; i++){
        var workElem = input[i];

        if(predicatFunc(workElem)){
            result.push(workElem);
        }
    }

    return result;
}


//demo
//alert (filter(function(a){return a%2==0}, [1,2,3,4,5,6,7,8,9,10,11,12,13,14]))