<?

	class t {

		public function __construct() {}

		// word
		public static function w($l, $lang) {
			$sql = db::query("select * from `word` where txt = '$l'");
			if (mysqli_num_rows($sql)) return mysqli_fetch_array($sql)['txt_'.$lang]; else return false;
		}

		// word block
		public static function wb($l) {
			$sql = mysqli_fetch_array(db::query("select * from `word_block` where txt = '$l'"));
			if (isset($_SESSION['lang'])) $lang = $_SESSION['lang']; else $lang = 'ru';
			return $sql['txt_'.$lang];
		}

		// 
		public static function info($id) {
			$sql = mysqli_fetch_array(db::query("select * from `info` where id = '$id'"));
			if (isset($_SESSION['lang'])) $lang = $_SESSION['lang']; else $lang = 'ru';
			return $sql['name_'.$lang];
		}
		
	}