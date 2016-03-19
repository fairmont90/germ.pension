var current_question = 0;

function nextQuestion() {
    var question_prev_div = document.getElementById('Question' + current_question);
    question_prev_div.classList.add('hidden');

    current_question++;

    var question_next_div = document.getElementById('Question' + current_question);
    question_next_div.classList.remove('hidden');

    var qn_div = document.getElementById('QuestionNumbers');
    var spans = qn_div.getElementsByTagName('span');
    var number_index = current_question + 1;

    for ( var i = 0; i < spans.length && i < number_index ;  i++ ) {
        spans[i].classList.add('red');
    }
}
