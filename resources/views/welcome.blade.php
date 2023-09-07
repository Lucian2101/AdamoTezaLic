// view/index.blade.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
    <title>Spectrum</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo"><a style="text-decoration: none; color:#fff;"
                        href="{{ route('index') }}">Spectrum</a></div>

                <nav class="nav">
                    <a class="nav__link" href="#team">Team</a>
                    <a class="nav__link" href="#whatwedo">What we do</a>
                    <a class="nav__link" href="#contact">Contact Us</a>
                    <a href="/admin/dashboard" class="nav__link">Admin</a>
                    <a href="{{ route('auth.login') }}" class="nav__link">Login</a>
                    <a href="{{ route('auth.register') }}" class="nav__link">Register</a>
                </nav>
            </div>
        </div>
    </header>
    <div class="intro">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title">This is Spectrum</h1>
                <h2 class="intro__suptitle">Responsive.Retina Ready. Sketch Support</h2>

                <a class="btn" href="#">Start Now</a>
                <a class="btn" href="#">Learn More</a>
            </div>
        </div>
    </div>
    <!-- /.intro -->
    <section class="section" id="team">
        <div class="container">
            <div class="section__header">
                <h3 class="section__suptitle">Who we are</h3>
                <h2 class="section__title">Meet our team</h2>
                <div class="section__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/team/1.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">
                            <div class="social">
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card__info">
                        <div class="card__name">Matthew Dix</div>
                        <div class="card__prof">Graphic Design</div>
                    </div>
                </div>
                <!-- /.card__item -->
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/team/2.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">
                            <div class="social">
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card__info">
                        <div class="card__name">Christopher Campbell</div>
                        <div class="card__prof">Branding/UX design</div>
                    </div>
                </div>
                <!-- /.card__item -->
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/team/3.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">
                            <div class="social">
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                                <a class="social__item" href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card__info">
                        <div class="card__name">Michael Fertig</div>
                        <div class="card__prof">Developer</div>
                    </div>
                </div>
                <!-- /.card__item -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container -->
    </section>
    <section class="section" id="whatwedo">
        <div class="container">
            <div class="section__header">
                <h3 class="section__suptitle">What we do</h3>
                <h2 class="section__title">Story about us</h2>
                <div class="section__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/about/1.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">super team</div>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/about/2.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">super team</div>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/about/3.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">super team</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/about/1.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">super team</div>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/about/2.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">super team</div>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/about/3.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">super team</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/about/1.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">super team</div>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/about/2.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">super team</div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="{{ asset('images/about/3.jpg') }}" alt="" />
                        </div>
                        <div class="card__text">super team</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->
    <section class="section-margin--small">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Get In Touch</h2>
                <div class="section__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Address</h3>
                            <p style="font-size: 12px;">Str. Ciocana 12<br>Str. Ciocana 12</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                        <div class="media-body">
                            <h3>Phone Number</h3>
                            <p style="font-size: 12px;">(373) 69302350<br>(373) 69302350</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>Email</h3>
                            <p style="font-size: 12px;">adamocomputers@yandex.com<br>adamocomputers@yandex.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <form action="" method="POST" class="form-contact contact_form" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                        placeholder="Introdu numele tau">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                        placeholder="Introduceți adresa de e-mail">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        placeholder="Introduceți subiectul">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        placeholder="Introduceți subiectul">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <textarea class="form-control different-control w-100" name="message" id="message"
                                        cols="30" rows="5" placeholder="Introduceți mesajul"></textarea>
                                </div>
                            </div>
                        </div>
                        @csrf
                        <div class="form-group text-center text-md-left mt-3">
                            <button type="submit" class="button button--active button-contactForm">Trimite
                                mesajul</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center text-white" style="background-color: #000;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i
            ></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i
            ></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href=""></a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>
//

//

//MainController
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\diamond;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function save(Request $request)
    {
        //Validate requests
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:12'
        ]);
        //Insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if ($save) {
            return back()->with('success', 'New User has been successfuly added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    public function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $userInfo = Admin::where('email', '=', $request->email)->first();
        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your email address');
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    public function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    public function dashboard()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }
    public function settings()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }
    public function profile()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }
    public function diamond(){
        return view('admin.diamond', ['data' => diamond::all()]);
    }
}
//
//admin.php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\diamond;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function save(Request $request)
    {
        //Validate requests
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:5|max:12'
        ]);
        //Insert data into database
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if ($save) {
            return back()->with('success', 'New User has been successfuly added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    public function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $userInfo = Admin::where('email', '=', $request->email)->first();
        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your email address');
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    public function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    public function dashboard()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }
    public function settings()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }
    public function profile()
    {
        $data = ['LoggedUserInfo' => Admin::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }
    public function diamond(){
        return view('admin.diamond', ['data' => diamond::all()]);
    }
}
//
//diamond.php
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class diamond extends Model
{
    use HasFactory;
}
//


//
//style.css
body {
    margin: 0;
    font-family: 'Montserrat', sans-serif;

    font-size: 15px;
    line-height: 1.6;
    color: #333;
}

*,
*:before,
*:after {
    box-sizing: border-box;
}

h1, h2, h3, h4, h5, h6 {
    margin: 0;
}

hr {
    display: block;
    width: 100%;
    height: 1px;
    margin: 40px 0;

    border: 0;
    background-color: #e5e5e5;
}

/* Container */
.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

/* Intro */
.intro {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    height: 100vh;
    background: url("../images/intro.jpg") center no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
}

.intro__inner {
    width: 100%;
    max-width: 880px;
    margin: 0 auto;

    text-align: center;
}

.intro__title {
    color: #fff;
    font-size: 150px;
    font-weight: 700;
    text-transform: uppercase;
    line-height: 1;
}

.intro__title:after {
    content: "";
    display: block;
    width: 60px;
    height: 3px;
    margin: 60px auto;

    background-color: #fff;
}

.intro__suptitle {
    margin-bottom: 20px;

    font-family: 'Kaushan Script', cursive;
    font-size: 72px;
    color: #fff;
}

/* Header */
.header {
    width: 100%;
    padding-top: 30px;

    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
}

.header__inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header__logo {
    font-size: 30px;
    font-weight: 700;
    color: #fff;
}

/* Nav */
.nav {
    font-size: 14px;
    text-transform: uppercase;
}

.nav__link {
    display: inline-block;
    vertical-align: top;
    margin: 0 15px;
    position: relative;

    color: #fff;
    text-decoration: none;

    transition: color .1s linear;
}

.nav__link:after {
    content: "";
    display: block;
    width: 100%;
    height: 3px;

    background-color: #fce38a;
    opacity: 0;

    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1;

    transition: opacity .1s linear;
}

.nav__link:hover {
    color: #fce38a;
}

.nav__link:hover:after,
.nav__link.active:after {
    opacity: 1;
}

.nav__link.active {
    color: #fce38a;
}

/* Button */
.btn {
    display: inline-block;
    vertical-align: top;
    padding: 8px 30px;

    border: 3px solid #fff;

    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    text-decoration: none;

    transition: background .1s linear, color .1s linear;
}

.btn:hover {
    background-color: #fff;
    color: #333;
}

/* Section */
.section {
    padding: 80px 0;
}

.section--devices {
    margin-bottom: 40px;
    padding-bottom: 0;

    background: url("../images/devices-bg.jpg") center no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
}

.section--gray {
    background-color: #f8f8f8;
}

.section--clients {
    background: #f5f5f5 url("../images/clients-bg.jpg") center no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
}

.section__header {
    width: 100%;
    max-width: 950px;
    margin: 0 auto 50px;

    text-align: center;
}

.section__suptitle {
    font-family: 'Kaushan Script', cursive;
    font-size: 24px;
    color: #333;
}

.section__title {
    font-size: 30px;
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
}

.section__title:after {
    content: "";
    display: block;
    width: 60px;
    height: 3px;
    margin: 30px auto;

    background-color: #f38181;
}

.section__text {
    font-size: 15px;
    color: #999;
}



/* Card */
.card {
    margin-top: 30px!important;
    display: flex;
    justify-content: space-between;
}

.card__item {
    width: 380px;
}

.card__inner {
    position: relative;
    background-color: #95e1d3;
}

.card__inner:hover .card__img {
    transform: translate3d(-10px, -10px, 0);
}

.card__inner:hover .card__img img {
    opacity: .1;
}

.card__inner:hover .card__text {
    opacity: 1;
}

.card__img {
    background: linear-gradient(to bottom, #f38181, #fce38a);

    transition: transform .2s linear;
}

.card__img img {
    display: block;
    transition: opacity .1s linear;
}

.card__text {
    width: 100%;

    font-size: 18px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 700;
    text-align: center;
    opacity: 0;

    position: absolute;
    top: 50%;
    left: 0;
    z-index: 2;
    transform: translate3d(0, -50%, 0);

    transition: opacity .2s linear;
}

.card__info {
    margin-top: 20px;

    text-align: center;
}

.card__name {
    margin-bottom: 5px;

    font-size: 14px;
    color: #333;
    text-transform: uppercase;
}

.card__prof {
    font-size: 15px;
    font-style: italic;
    font-weight: 300;
    color: #999;
}
/* Social */
.social {
    display: flex;
    justify-content: center;
}

.social__item {
    width: 55px;
    height: 55px;
    padding: 12px 10px;

    background-color: #fce38a;
    border-right: 1px solid #f38181;

    font-size: 30px;
    text-decoration: none;
    color: #f38181;
    line-height: 1;

    transition: background .1s linear, color .1s linear;
}

.social__item:last-child {
    border-right: 0;
}

.social__item:hover {
    color: #fff;
    background-color: #f38181;
}

//