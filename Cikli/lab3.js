function Рисунок() {
        function drawPicture() {
          var outputElement = document.getElementById('picture');
          var width = 9;
          for (var i = 0; i < 9; i++) {
              var row = '#';
              for (var j = 0; j < width; j++) {
                  row += '0';
              }
              row += '#';
              outputElement.innerHTML += row + '<br>';
              width--;
          }
      }
      drawPicture();
}

function Чётность() {
 function всеЧетные(arr) {
   for (let i = 0; i < arr.length; i++) {
     if (arr[i] % 2 !== 0) {
       return false; // Если хотя бы один элемент нечетный, возвращаем false
    }
   }
   return true; // Если все элементы четные, возвращаем true
 }
 const массив1 = [2, 4, 6, 8, 10, 12, 14];
 document.write(всеЧетные(массив1) + "<br>" + "<br>");
}

function Расстояние() {
 function расстояниеСГрузовиками(количествоГрузовиков) {

   const расстояниеНаГрузовике = 100;
   var общееРасстояние = 0;
   while(количествоГрузовиков !== 0) {
    общееРасстояние = общееРасстояние + (расстояниеНаГрузовике / количествоГрузовиков);
    количествоГрузовиков--; 
   }
   return parseInt(общееРасстояние);
 }

 const количество = parseInt(document.getElementById('road').value);

 const количествоГрузовиков = parseInt(количество);

 if (!isNaN(количествоГрузовиков) && количествоГрузовиков > 0) {

   const результат = расстояниеСГрузовиками(количествоГрузовиков);
   document.write(`С использованием ${количествоГрузовиков} грузовиков можно доставить груз на расстояние ${результат} км`);
 } else {
   document.write('Пожалуйста, введите корректное число грузовиков.');
 }
}

function TraLaLa(){
function countTwosInRange(n) {
  let count = 0;
  for (let i = 0; i <= n; i++) {
    const digits = i.toString();
    for (let j = 0; j < digits.length; j++) {
      if (digits[j] === '2') {
        count++;
      }
    }
  }
  return count;
}

const userInput = parseInt(document.getElementById('great').value);
const number = parseInt(userInput);

if (!isNaN(number)) {
  const result = countTwosInRange(number);
  document.write(`Количество цифр "2" от 0 до ${number} равно ${result}`);
} else {
  document.write("Вы ввели некорректное число.");
}
}


