function strReverse(str) {
  let splitStr = str.split("").reverse().join("");
  return splitStr;
}
console.log(strReverse("Reverse me"));

function strReverse2(str) {
  let newString = "";
  for (var i = str.length - 1; i >= 0; i--) {
    newString = newString + str[i];
    console.log(newString);
  }
  return newString;
}
console.log(strReverse2("123456"));


