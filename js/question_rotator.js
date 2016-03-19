var current_question = 1;

function nextQuestion() {
    // current_question ++;
    var question_prev_div = document.getElementById('Question' + current_question);
    question_prev_div.classList.add('hidden');

    current_question++;

    var question_next_div = document.getElementById('Question' + current_question);
    question_next_div.classList.remove('hidden');
}