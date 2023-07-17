<?php /** @noinspection ALL */

class Flasher extends Controller
{
    public static function header()
    {
        $urlMasuk = BASEURL . "/home/masuk";
        $urlKeluar = BASEURL . "/home/keluar";
        $headerLogin = <<<EOF
<button class="btn btn-round btn-instagram" data-toggle="modal" data-target="#loginModal">
                    Login<i class="material-icons">assignment</i>

                </button>
EOF;
        $headerRegister = <<<EOF
    <button class="btn btn-round" data-toggle="modal" data-target="#signupModal">
    <i class="material-icons">assignment</i>
    SignUp
</button>
EOF;


        if (isset($_SESSION['email'])) {
            echo <<<EOF
<div class="user">
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Test
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-normal"> Edit Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="$urlKeluar">
                    <span class="sidebar-normal"> lOGOUT </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
EOF;
        } else {
            echo $headerLogin . $headerRegister;
        }
    }

    public static function setFlash($icon, $tittle, $text)
    {
        $_SESSION['flash'] = [
            'icon' => $icon,
            'tittle' => $tittle,
            'text' => $text
        ];
    }

    public static function flash()
    {

        if (isset($_SESSION['flash'])) {

            echo <<<EOF
<script>
        Swal.fire({
          icon: "{$_SESSION['flash']['icon']}",
          title: '{$_SESSION['flash']['tittle']}',
          text: '{$_SESSION['flash']['text']}'
        })
</script>
EOF;

            unset($_SESSION['flash']);
        }
    }


}
