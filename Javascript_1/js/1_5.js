const age = parseInt(prompt("How old are you?"));

if(isNaN(age)) {
    alert("숫자로 입력해주세요.");
} else {
    if(age < 19) {
        alert("술 담배는 어른되고 ^^");
    } else {
        alert("술 한잔 하자");
    }
} 