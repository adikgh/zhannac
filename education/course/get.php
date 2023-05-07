<? include "../../config/core.php";

	// 
	if(isset($_GET['add_item_photo'])) {
		$path = '../../assets/uploads/course/';
		$allow = array();
		$deny = array(
			'phtml', 'php', 'php3', 'php4', 'php5', 'php6', 'php7', 'phps', 'cgi', 'pl', 'asp', 
			'aspx', 'shtml', 'shtm', 'htaccess', 'htpasswd', 'ini', 'log', 'sh', 'js', 'html', 
			'htm', 'css', 'sql', 'spl', 'scgi', 'fcgi', 'exe'
		);
		$error = $success = '';
		$datetime = date('Ymd-His', time());

		if (!isset($_FILES['file'])) $error = 'Файлды жүктей алмады';
		else {
			$file = $_FILES['file'];
			if (!empty($file['error']) || empty($file['tmp_name'])) $error = 'Файлды жүктей алмады';
			elseif ($file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name'])) $error = 'Файлды жүктей алмады';
			else {
				$pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
				$name = mb_eregi_replace($pattern, '-', $file['name']);
				$name = mb_ereg_replace('[-]+', '-', $name);
				$parts = pathinfo($name);
				$name = $datetime.'-'.$name;

				if (empty($name) || empty($parts['extension'])) $error = 'Файлды жүктей алмады';
				elseif (!empty($allow) && !in_array(strtolower($parts['extension']), $allow)) $error = 'Файлды жүктей алмады';
				elseif (!empty($deny) && in_array(strtolower($parts['extension']), $deny)) $error = 'Файлды жүктей алмады';
				else {
					if (move_uploaded_file($file['tmp_name'], $path . $name)) $success = '<p style="color: green">Файл «' . $name . '» успешно загружен.</p>';
					else $error = 'Файлды жүктей алмады';
				}
			}
		}
		
		if (!empty($error)) $error = '<p style="color:red">'.$error.'</p>';  
		
		$data = array(
			'error'   => $error,
			'success' => $success,
			'file' => $name,
		);
		
		header('Content-Type: application/json');
		echo json_encode($data, JSON_UNESCAPED_UNICODE);

		exit();
	}
	
	// 
	if(isset($_GET['item_add'])) {
		$name = strip_tags($_POST['name']);
		$access = strip_tags($_POST['access']);
		$autor = strip_tags($_POST['autor']);
		$img = strip_tags($_POST['img']);
		$price = strip_tags($_POST['price']);
		$price_sole = strip_tags($_POST['price_sole']);
		$item = strip_tags($_POST['item']);
		$assig = strip_tags($_POST['assig']);
		$src = strip_tags($_POST['src']);

		$id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `course`")))['max(id)'] + 1;

		$ins = db::query("INSERT INTO `course`(`name_kz`, `name_ru`) VALUES ('$name', '$name')");

		if ($access) $upd = db::query("UPDATE `course` SET `access`='$access' WHERE `id`='$id'");
		if ($autor) $upd = db::query("UPDATE `course` SET `autor`='$autor' WHERE `id`='$id'");
		if ($img) $upd = db::query("UPDATE `course` SET `img`='$img' WHERE `id`='$id'");
		if ($price) $upd = db::query("UPDATE `course` SET `price`='$price' WHERE `id`='$id'");
		if ($price_sole) $upd = db::query("UPDATE `course` SET `price_sole`='$price_sole' WHERE `id`='$id'");
		if ($src) $upd = db::query("UPDATE `course` SET `src`='$src' WHERE `id`='$id'");

		if ($item || $assig) {
			$upd = db::query("UPDATE `course` SET `info`=1 WHERE `id`='$id'");
			$ins_info = db::query("INSERT INTO `course_info`(`course_id`) VALUES ('$id')");
			if ($item) $upd = db::query("UPDATE `course_info` SET `item`='$item' WHERE `course_id`='$id'");
			if ($assig) $upd = db::query("UPDATE `course_info` SET `assig`='$assig' WHERE `course_id`='$id'");
		}

		if ($ins) echo 'plus';
		exit();
	}

	// 
	if(isset($_GET['item_edit'])) {
		$id = strip_tags($_POST['id']);
		$name = strip_tags($_POST['name']);
		$access = strip_tags($_POST['access']);
		$autor = strip_tags($_POST['autor']);
		$img = strip_tags($_POST['img']);
		$price = strip_tags($_POST['price']);
		$price_sole = strip_tags($_POST['price_sole']);
		$item = strip_tags($_POST['item']);
		$assig = strip_tags($_POST['assig']);
		$src = strip_tags($_POST['src']);

		if ($name) $upd = db::query("UPDATE `course` SET `name_kz`='$name', `name_ru`='$name', `upd_dt`='$datetime' WHERE `id`='$id'");
		if ($access) $upd = db::query("UPDATE `course` SET `access`='$access', `upd_dt`='$datetime' WHERE `id`='$id'");
		if ($autor) $upd = db::query("UPDATE `course` SET `autor`='$autor', `upd_dt`='$datetime' WHERE `id`='$id'");
		if ($img) $upd = db::query("UPDATE `course` SET `img`='$img', `upd_dt`='$datetime' WHERE `id`='$id'");
		if ($price) $upd = db::query("UPDATE `course` SET `price`='$price', `upd_dt`='$datetime' WHERE `id`='$id'");
		if ($price_sole) $upd = db::query("UPDATE `course` SET `price_sole`='$price_sole', `upd_dt`='$datetime' WHERE `id`='$id'");
		if ($src) $upd = db::query("UPDATE `course` SET `src`='$src', `upd_dt`='$datetime' WHERE `id`='$id'");


		if ($item || $assig) {
			$upd = db::query("UPDATE `course` SET `info`=1 WHERE `id`='$id'");
			if (mysqli_num_rows(db::query("SELECT * FROM `course_info` where course_id = '$id'")) == 0) $ins_info = db::query("INSERT INTO `course_info`(`course_id`) VALUES ('$id')");
			if ($item) $upd = db::query("UPDATE `course_info` SET `item`='$item' WHERE `course_id`='$id'");
			if ($assig) $upd = db::query("UPDATE `course_info` SET `assig`='$assig' WHERE `course_id`='$id'");
		}

		echo 'plus';
		exit();
	}

	// 
	if(isset($_GET['course_arh'])) {
		$id = strip_tags($_POST['id']);
		$course = fun::course($id);

		if (!$course['arh']) $upd = db::query("UPDATE `course` SET `arh` = 1 WHERE `id` = '$id'");
		else $upd = db::query("UPDATE `course` SET `arh` = null WHERE `id` = '$id'");

		if ($upd) echo 'yes';
		exit();
	}

	// 
	if(isset($_GET['course_del'])) {
		$id = strip_tags($_POST['id']);
		$del = db::query("DELETE FROM `course` WHERE `id` = '$id'");
		
		if ($del) echo 'yes';
		exit();
	}










	// 
	if(isset($_GET['block_add'])) {
		$name = strip_tags($_POST['name']);
		$course_id = strip_tags($_POST['course_id']);
		$item = strip_tags($_POST['item']);
		$assig = strip_tags($_POST['assig']);
		$number = fun::block_next_number($course_id);
		$id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `course_block`")))['max(id)'] + 1;

		$ins = db::query("INSERT INTO `course_block`(`number`, `course_id`, `name_kz`, `name_ru`) VALUES ('$number', '$course_id', '$name', '$name')");

		if ($item || $assig) {
			if ($item) $upd = db::query("UPDATE `course_block` SET `item` = '$item' WHERE `id` = '$id'");
			if ($assig) $upd = db::query("UPDATE `course_block` SET `assig` = '$assig' WHERE `id` = '$id'");
		}

		if ($ins) echo 'yes';
		exit();
	}

	// 
	if(isset($_GET['block_copy'])) {
		$block_id = strip_tags($_POST['block']);
		$new_block_id = strip_tags($_POST['copy_block']);
		
		$block_d = fun::sblock($block_id);
		$new_block_d = fun::sblock($new_block_id);
		
		if ($block_d && $new_block_d) {

			$new_course_id = $new_block_d['course_id'];
			
			$lesson = db::query("select * from course_lesson where block_id = '$block_id' order by number asc");
			if (mysqli_num_rows($lesson)) {
				while ($lesson_d = mysqli_fetch_assoc($lesson)) {
					$lesson_id = $lesson_d['id'];

					$new_lesson_id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `course_lesson`")))['max(id)'] + 1;
					$nlesson_number = $lesson_d['number'];
					$nlesson_name = $lesson_d['name_ru'];
					$nlesson_open = $lesson_d['open'];
					$nlesson_arh = $lesson_d['arh'];

					$ins_item = db::query("INSERT INTO `course_lesson`(`id`, `course_id`, `block_id`, `number`, `name_ru`) VALUES ('$new_lesson_id', '$new_course_id', '$new_block_id', '$nlesson_number', '$nlesson_name')");
					if ($nlesson_open) $upd_item = db::query("UPDATE `course_lesson` SET `open` = '$nlesson_open' WHERE id = '$new_lesson_id'");
					if ($nlesson_arh) $upd_item = db::query("UPDATE `course_lesson` SET `arh` = '$nlesson_arh' WHERE id = '$new_lesson_id'");

					$item = db::query("select * from course_lesson_item where lesson_id = '$lesson_id' order by number asc");
					if (mysqli_num_rows($item)) {
						while ($item_d = mysqli_fetch_assoc($item)) {

							$new_item_id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `course_lesson_item`")))['max(id)'] + 1;
							$nitem_number = $item_d['number'];
							$nitem_type = $item_d['type'];
							$nitem_type_name = $item_d['type_name'];
							$nitem_type_video = $item_d['type_video'];
							$nitem_txt = $item_d['txt'];
							$nitem_question_id = $item_d['question_id'];
							$nitem_question_item_id = $item_d['question_item_id'];

							$ins_item = db::query("INSERT INTO `course_lesson_item`(`id`, `lesson_id`, `number`, `type`) VALUES ('$new_item_id', '$new_lesson_id', '$nitem_number', '$nitem_type')");
							if ($nitem_type_name) $upd_item = db::query("UPDATE `course_lesson_item` SET `type_name` = '$nitem_type_name' WHERE id = '$new_item_id'");
							if ($nitem_type_video) $upd_item = db::query("UPDATE `course_lesson_item` SET `type_video` = '$nitem_type_video' WHERE id = '$new_item_id'");
							if ($nitem_txt) $upd_item = db::query("UPDATE `course_lesson_item` SET `txt` = '$nitem_txt' WHERE id = '$new_item_id'");
							if ($nitem_question_id) $upd_item = db::query("UPDATE `course_lesson_item` SET `question_id` = '$nitem_question_id' WHERE id = '$new_item_id'");
							if ($nitem_question_item_id) $upd_item = db::query("UPDATE `course_lesson_item` SET `question_item_id` = '$nitem_question_item_id' WHERE id = '$new_item_id'");

							
						}
					}
					
				}
			}
			
		}
		
		echo 'yes';

		exit();
	}








	// 
	if(isset($_GET['lesson_add'])) {
		$name = strip_tags($_POST['name']);
		$course_id = strip_tags($_POST['course_id']);
		$block_id = strip_tags($_POST['block_id']);
		$open = strip_tags($_POST['open']);
		$youtube = strip_tags($_POST['youtube']);
		$txt = strip_tags($_POST['txt']);
				
		if (!$block_id) {
			$course = fun::course($course_id);
			$cours_name_kz = $course['name_kz'];
			$cours_name_ru = $course['name_ru'];
			$block_id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `course_block`")))['max(id)'] + 1;
			$ins_block = db::query("INSERT INTO `course_block`(`number`, `course_id`, `name_kz`, `name_ru`) VALUES (1, '$course_id', '$cours_name_kz', '$cours_name_ru')");
		}
		
		$id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `course_lesson`")))['max(id)'] + 1;
		$number = fun::lesson_next_number($block_id);
		$ins = db::query("INSERT INTO `course_lesson`(`course_id`, `block_id`, `number`, `name_kz`, `name_ru`, `open`) VALUES ('$course_id', '$block_id', '$number', '$name', '$name', '$open')");

		if ($youtube) $ins_li = db::query("INSERT INTO `course_lesson_item`(`lesson_id`, `number`, `type`, `type_name`, `type_video`, `txt`) VALUES ('$id', 1, 'video', 'Видео урок', 'youtube', '$youtube')");
		if ($txt) $ins_li = db::query("INSERT INTO `course_lesson_item`(`lesson_id`, `number`, `type`, `txt`) VALUES ('$id', 2, 'txt', '$txt')");
		
		if ($ins) echo 'yes';
		exit();
	}












		// 
		if(isset($_GET['add_file'])) {
			$path = '../../assets/uploads/lesson/';
			$allow = array();
			$deny = array(
				'phtml', 'php', 'php3', 'php4', 'php5', 'php6', 'php7', 'phps', 'cgi', 'pl', 'asp', 
				'aspx', 'shtml', 'shtm', 'htaccess', 'htpasswd', 'ini', 'log', 'sh', 'js', 'html', 
				'htm', 'css', 'sql', 'spl', 'scgi', 'fcgi', 'exe'
			);
			$error = $success = '';
			$datetime = date('Ymd-His', time());
	
			if (!isset($_FILES['file'])) $error = 'Файлды жүктей алмады';
			else {
				$file = $_FILES['file'];
				if (!empty($file['error']) || empty($file['tmp_name'])) $error = 'Файлды жүктей алмады';
				elseif ($file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name'])) $error = 'Файлды жүктей алмады';
				else {
					$pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
					$name = mb_eregi_replace($pattern, '-', $file['name']);
					$name = mb_ereg_replace('[-]+', '-', $name);
					$parts = pathinfo($name);
					$name = $datetime.'-'.$name;
	
					if (empty($name) || empty($parts['extension'])) $error = 'Файлды жүктей алмады';
					elseif (!empty($allow) && !in_array(strtolower($parts['extension']), $allow)) $error = 'Файлды жүктей алмады';
					elseif (!empty($deny) && in_array(strtolower($parts['extension']), $deny)) $error = 'Файлды жүктей алмады';
					else {
						if (move_uploaded_file($file['tmp_name'], $path . $name)) $success = '<p style="color: green">Файл «' . $name . '» успешно загружен.</p>';
						else $error = 'Файлды жүктей алмады';
					}
				}
			}
			
			if (!empty($error)) $error = '<p style="color:red">'.$error.'</p>';  
			
			$data = array(
				'error'   => $error,
				'success' => $success,
				'file' => $name,
			);
			
			header('Content-Type: application/json');
			echo json_encode($data, JSON_UNESCAPED_UNICODE);
	
			exit();
		}










			// 
	if(isset($_GET['lesson_edit'])) {
		$id = strip_tags($_POST['id']);
		$name = strip_tags($_POST['name']);
		$v1_txt1 = strip_tags($_POST['v1_txt1']);
		$v1_home1 = strip_tags($_POST['v1_home1']);

		// $open = strip_tags($_POST['open']);
		$youtube = strip_tags($_POST['youtube']);
		$youtube_id = strip_tags($_POST['youtube_id']);
		$txt = strip_tags($_POST['txt']);
		$txt_id = strip_tags($_POST['txt_id']);
		$url = strip_tags($_POST['url']);
		$url_id = strip_tags($_POST['url_id']);
		$mat = strip_tags($_POST['mat']);
		$mat_id = strip_tags($_POST['mat_id']);

		if ($name) $ins_li = db::query("UPDATE `course_lesson` SET `name_kz` = '$name' WHERE id = '$id'");
		if ($v1_txt1) $ins_li = db::query("UPDATE `course_lesson` SET `v1_txt1` = '$v1_txt1' WHERE id = '$id'");
		if ($v1_home1) $ins_li = db::query("UPDATE `course_lesson` SET `v1_home1` = '$v1_home1' WHERE id = '$id'");
		if ($youtube) $ins_li = db::query("UPDATE `course_lesson_item` SET `txt` = '$youtube' WHERE id = '$youtube_id'");
		if ($txt) $ins_li = db::query("UPDATE `course_lesson_item` SET `txt` = '$txt' WHERE id = '$txt_id'");
		if ($url) $ins_li = db::query("UPDATE `course_lesson_item` SET `txt` = '$url' WHERE id = '$url_id'");
		if ($mat) $ins_li = db::query("UPDATE `course_lesson_item` SET `txt` = '$mat' WHERE id = '$mat_id'");


		$youtube_new = strip_tags($_POST['youtube_new']);
		$txt_new = strip_tags($_POST['txt_new']);
		$url_new = strip_tags($_POST['url_new']);
		$mat_new = strip_tags($_POST['mat_new']);

		if ($youtube_new) $ins_li = db::query("INSERT INTO `course_lesson_item`(`lesson_id`, `number`, `type`, `type_name`, `type_video`, `txt`) VALUES ('$id', 1, 'video', 'Видео сабақ', 'youtube', '$youtube_new')");
		if ($txt_new) $ins_li = db::query("INSERT INTO `course_lesson_item`(`lesson_id`, `number`, `type`, `txt`) VALUES ('$id', 2, 'txt', '$txt_new')");
		if ($url_new) $ins_li = db::query("INSERT INTO `course_lesson_item`(`lesson_id`, `number`, `type`, `txt`) VALUES ('$id', 3, 'link', '$url_new')");
		if ($mat_new) $ins_li = db::query("INSERT INTO `course_lesson_item`(`lesson_id`, `number`, `type`, `txt`) VALUES ('$id', 4, 'mat', '$mat_new')");

		echo 'yes';
		exit();
	}



	
	// 
	if(isset($_GET['lesson_del'])) {
		$id = strip_tags($_POST['id']);
		$del = db::query("DELETE FROM `course_lesson` WHERE `id` = '$id'");
		
		if ($del) echo 'yes';
		exit();
	}
