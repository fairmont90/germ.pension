function finishTest() {
    showLoadingScreen();
    
    var top_three = getTopThreeCategories();

    alert(top_three);
    
}

function showLoadingScreen() {
    alert('load has been started');
}

function getTopThreeCategories() {
    var form = document.getElementById('QuestionForm');
    var inputs = form.getElementsByTagName('input');
    var inputs_length = inputs.length;

    var category_points = [0,0,0,0,0,0,0,0];

    for ( var i=0; i < inputs_length; i++ ) {
        var input = inputs[i];

        if ( input.getAttribute('type') == 'radio' ) {
            if ( input.checked ) {
                var category_id = input.getAttribute('value').split(',')[0];
                category_points[category_id] ++;
            }
        }
    }

    var top_three = [];
    var max = 0;
    var counter = 3;
    while ( counter -- ) {
        for ( var i=category_points.length; i>=0; i-- ) {
            if ( category_points[i] > max ) {
                max = category_points[i];
            }
        }

        var category_top_id = category_points.indexOf(max);
        top_three.push(category_top_id);
        category_points[category_top_id] = 0;
        max = 0;
    }
}
