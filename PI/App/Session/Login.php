<?php




// class Login{



//     private static function init(){
//         if(session_status() !== PHP_SESSION_ACTIVE){
//             session_start();
//         }

    
//     }
//     public static function loginCLiente($object){
//         self::init();
//         $_SESSION['cliente'] = [
//             'id_cliente' => $object->id_cliente,
//             'email' => $object->email
//         ];
//         header('location: ../../Pages/user/Home.php');
//         exit;
//     }

//     public static function loginAdm($object){
//         self::init();

//         $_SESSION['adm'] = [
//             'id_adm' => $object->id_adm,
//             'email' => $object->email
//         ];

//         header('location: ../../Pages/adm/dashboard_adm.php ');
//         exit;

//     }



//     public static function IsLogedCliente(){
//         self::init();
//         return isset($_SESSION['cliente']['id_cliente']);


//     }
//     public static function IsLogedAdm(){
//         self::init();
//         return isset($_SESSION['adm']['id_adm']);


//     }


//     public static function RequireLogin(){
//         var_dump(self::init());
  
//         // if(!self::IsLogedCliente()){
//         //     header('location: ../../Pages/user/login.php');
//         //     exit;
//         // }

//         // if(!self::IsLogedAdm()){
//         //     header('location: ../../Pages/user/login.php');
//         //     exit;
//         // }
        

//     }
    

//     public static function RequireLogout(){

//         self::init();

//         if(self::IsLogedCliente()){
//             return true;
//         }else{
//             return false;
//         }


//         if(self::IsLogedAdm()){
//             header('location: ../../Pages/adm/dashbord_adm.php');
//             exit;
//         }
//     }


//     public static function Logout(){
//         self::init();

//         session_unset();
//         session_destroy();
//         header('location: ../../Pages/user/Home.php');
//         exit;
//     }



// }







//TESTEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE//

class Login {

    public static function init() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            return session_start();
        }
    }

    public static function loginCLiente($object) {
        self::init();
        $result = $_SESSION['cliente'] = [
            'id_cliente' => $object->id_cliente,
            'email' => $object->email
        ];
        header('location: ../../Pages/user/Home.php');
        exit;
    }

    public static function loginAdm($object) {
        self::init();
        $_SESSION['administrador'] = [
            'id_administrador' => $object->id_administrador,
            'email' => $object->email
        ];
        header('location: ../../Pages/adm/dashbord_adm.php');
        exit;
    }

    public static function IsLogedCliente() {
        self::init();
        return isset($_SESSION['cliente']['id_cliente']);
    }

    public static function IsLogedAdm() {
        self::init();
        return isset($_SESSION['adm']['id_adm']);
    }

    public static function RequireLogin() {
        self::init();
        if (!self::IsLogedCliente() && !self::IsLogedAdm()) {
            header('location: ../../Pages/user/login.php');
            exit;
        }
    }

    public static function RequireLogout() {
        self::init();
        if (self::IsLogedCliente()) {
            header('location: ../../Pages/user/Home.php');
            exit;
        }

        if (self::IsLogedAdm()) {
            header('location: ../../Pages/adm/dashboard_adm.php');
            exit;
        }
    }

    public static function Logout() {
        self::init();
        session_unset();
        session_destroy();
        header('location: ../../Pages/user/Home.php');
        exit;
    }
}
