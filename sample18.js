function isConsecutive(arr) {
    
    if (arr.length === 0) return false;
    
    arr.sort((a,b) => a - b);
    
    for (let i = 1; i < arr.length; i++) {
        if (arr[i] !== arr[i - 1] + 1) {
            return false;
        }
    }
    return true;
}


console.log(isConsecutive([5, 4, 3, 2, 1])); // true
console.log(isConsecutive([1, 3, 2, 4, 5])); // false