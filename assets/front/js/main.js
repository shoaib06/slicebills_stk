var questionData; 
var count = 0;
let score = 0; 
const total = 5;
let correct; 

$(document).ready(function() {
  startGame();
});
  
function startGame() {
  const apiUrl = 'https://opentdb.com/api.php?amount=' + total + '&category=18&difficulty=medium';
  $.getJSON(apiUrl, function(data) { 
    questionData = data;
  });
  $('#ready').on('click', function() {
    $('#display-question').show();
    displayQuestion(count);
    count++;
    $('.start').hide(); 
  });
  $('form').on('click', 'input', function() {
    console.log(count);
    let user = $($(this)).val(); 
    setScore(user, correct);
    if (count == total) {
      gameOver();
    } else {
      displayQuestion(count);
      count++;
    }
  });
}




function displayQuestion(num) {
  $('#display-question h4').html(questionData.results[num].question);
  $('#display-question form').html('');
  let arr = questionData.results[num].incorrect_answers;
  arr.push(questionData.results[num].correct_answer);
  arr.sort( (a, b) => 0.5 - Math.random());
  for (let i = 0; i < arr.length; i++) {
    $('#display-question form').append(
      '<input id="' + 'question' + i + 
      '" type="radio" name="questions" class="radio" value="' + 
      arr[i] + '">' + 
      '<label for="' + 'question' + i + '" class="radio">' + 
      arr[i] + '</label>'
    );
  }
  correct = questionData.results[num].correct_answer
  console.log('Correct answer: ' + questionData.results[num].correct_answer);
}


function setScore(userAns, correctAns) {
  if (userAns == correctAns) score++;
}

function gameOver() {
  $('#display-question').hide();
  $('#game-over').show();
  $('.final').html(score + ' out of ' + total);
  $('.play-again').on('click', function() { playAgain() });
}

function playAgain() {
  location.reload();
}