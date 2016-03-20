var current_question = 0;

function nextQuestion() {
    $('#Question' + current_question).fadeOut(500);

    current_question++;

    $('#Question' + current_question).fadeIn(500);

    var qn_div = document.getElementById('QuestionNumbers');
    var spans = qn_div.getElementsByTagName('span');
    var number_index = current_question + 1;

    for ( var i = 0; i < spans.length && i < number_index ;  i++ ) {
        spans[i].classList.add('red');
    }
}
