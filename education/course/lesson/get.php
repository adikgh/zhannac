<? include "../../../config/core.php";

	// 
	if(isset($_GET['question_56'])) {
		$answer = strip_tags($_POST['answer']);
		$question_id = strip_tags($_POST['question_id']);
		$lesson_id = strip_tags($_POST['lesson_id']);
      $open_lesson_id = strip_tags($_POST['open_lesson_id']);
      
		$sql = db::query("INSERT INTO `question_answer_item`(`question_item_id`, `user_id`, `lesson_id`, `answer`) VALUES ('$question_id', '$user_id', '$lesson_id', '$answer')");
      
      if ($answer == 1) {
         $question_item = db::query("select * from question_item where id = '$question_id'");
         $question_item_d = mysqli_fetch_assoc($question_item);
         $block_id = (fun::lesson($open_lesson_id))['block_id'];
         $ins2 = db::query("INSERT INTO `course_pay_lesson`(`user_id`, `block_id`, `lesson_id`, `open`) VALUES ('$user_id', '$block_id', '$open_lesson_id', 1)");
      }
      
      if ($answer == 1) {
         if ($sql) echo 'yes';
      } else {
         if ($sql && $ins2) echo 'yes';
      }

		exit();
	}