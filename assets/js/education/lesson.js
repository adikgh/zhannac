$(document).ready(function() {

   // 
	$('.question_56').on('click', function () { 
		if ($(this).parent().attr('data-sel') == 0) {
			$(this).addClass('form_radio_act')
			$(this).parent().attr('data-sel', 1)

			$.ajax({
				url: "/education/course/lesson/get.php?question_56",
				type: "POST",
				dataType: "html",
				data: ({ 
					answer: $(this).attr('data-val'),
					question_id: $(this).parent().attr('data-question-id'),
					lesson_id: $(this).parent().attr('data-lesson-id'),
					open_lesson_id: $(this).parent().attr('data-open-lesson-id'),
				}),
            beforeSend: function(){ },
            error: function(data){ },
				success: function(data){
               console.log(data);
            }
			})

		}
	})












	























}) // end jquery