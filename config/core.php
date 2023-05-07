<? 

    require 'db.php';
    require 'fun.php';
    require 't.php';
    require "smsc_api.php";

    class core {
        public static $user_ph = false;
        public static $user_pm = false;
        public static $user_data = array();

        public function __construct() {
            new db; new fun; new t;
            session_start();
            date_default_timezone_set('Asia/Almaty');
            $this->authorize();
        }

        private function authorize() {
            $user_ph = false;
            $user_ps = false;
            // $user_pm = false;

            if ((isset($_SESSION['uph']) && isset($_SESSION['ups'])) || (isset($_SESSION['upm']) && isset($_SESSION['ups']))) {
                $user_ph = $_SESSION['uph'];
                $user_ps = $_SESSION['ups'];
                // $user_pm = $_SESSION['upm'];
            } else if ((isset($_COOKIE['uph']) && isset($_COOKIE['ups'])) || (isset($_COOKIE['upm']) && isset($_COOKIE['ups']))) {
                $user_ph = $_COOKIE['uph'];
                $user_ps = $_COOKIE['ups'];
                // $user_pm = $_COOKIE['upm'];
            }
            if (($user_ph && $user_ps) || ($user_pm && $user_ps)) {
                $user = db::query("SELECT * FROM user WHERE phone = '$user_ph'");
                if (mysqli_num_rows($user)) {
                    $user_data = mysqli_fetch_assoc($user);
                    if ($user_ps == $user_data['password']) {
                        self::$user_ph = $user_ph;
                        self::$user_data = $user_data;
                    } else $this->user_unset();
                } else $this->user_unset();

                // $user2 = db::query("SELECT * FROM user WHERE mail = '$user_pm'");
                // elseif (mysqli_num_rows($user2)) { 
                //     $user_data = mysqli_fetch_assoc($user2);
                //     if ($user_ps == $user_data['password']) {
                //         self::$user_pm = $user_pm;
                //         self::$user_data = $user_data;
                //     } else $this->user_unset();
                // }
            }
        }
    
        public function user_unset() {
            self::$user_ph = false;
            self::$user_data = array();
            unset($_SESSION['uph']);
            unset($_SESSION['ups']);
            setcookie('uph', '', time(), '/');
            setcookie('ups', '', time(), '/');
            // self::$user_pm = false;
            // unset($_SESSION['upm']);
            // setcookie('upm', '', time());
        }
        
    }


    // data
    $core = new core;
    $user = core::$user_data;
    $user_id = $user['id'];
    $user_right = $user['right'];
    $user_super_right = $user['super_right'];


    // lang
    $lang = 'kz';
    if (isset($_GET['lang'])) if ($_GET['lang'] == 'kz' || $_GET['lang'] == 'ru') $_SESSION['lang'] = $_GET['lang'];
    if (isset($_SESSION['lang'])) $lang = $_SESSION['lang'];


    // setting
    $ver = 1.001;
    $site = mysqli_fetch_array(db::query("select * from `site` where id = 1"));
    $site_set = [
        'header' => true,
        'menu'   => true,
        'footer' => true,
        'utopu' => true,
        'cl_wh' => false,
    ];
    $css = [];
    $js = [];
    $code = rand(1000, 9999);


    // date - time
    $date = date("Y-m-d", time());
    $time = date("H:m:s", time());
    $datetime = date('Y-m-d H:i:s', time());

    
    // url
    $url = $url_page = $url_full = $_SERVER['REQUEST_URI'];
    $url = (explode('?', $url))[0];
    $url_page = (explode('?&page=', $url_page))[0];