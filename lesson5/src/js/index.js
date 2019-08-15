$('#about').hide();

$('#about-button').click(function(){
    //let result = window.confirm('Серьезно?') 

    $('#about').toggle();

});
 
let nameColorSelect = false

$('#nameEdit').click(function(){

    $(nameColorSelect).toggle();

    switch(nameColorSelect) {
        case true: {$('#name').css('color', 'blue')}
        case false: {$('#name').css('color', 'black')}
    }
    
}) 

$(#button1).click(function(){

    let btn = $('#button1')

    switch(true){
        
        case btn.hasClass('btn-danger');
            btn.removeClass('btn-danger')
            btn.addClass('btn-default')
            break

        case btn.hasClass('btn-default');
            btn.removeClass('btn-default')
            btn.addClass('btn-danger')
            break
    }
})

/* $('#about-button').on('click', function() {
    
}) */



/* 
$('a#long-long-selector-id').nemoveClass() - получить один id 
                            .addClass()      и работать с ним 
                            .text()          все 
 */

/* $(...).attr('...', '...') - меняем атрибуты 
$(...).text(...) - меняем содержимое контейнера
$(...).html(...) - меняем содержимое контейнера */

/* this - тот же, применяется например внутри функции, 
          чтобы обратиться к элементу с которым работаем */

          