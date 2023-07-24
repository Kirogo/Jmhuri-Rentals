<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up</title>
  <link rel="icon" type="image/x-icon" href="assets/img/jmhcar.png" />

  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <link rel="stylesheet" href="logsin.css">
  <meta name="robots" content="noindex, follow">
  <script
    nonce="7a363a1f-0495-4d55-852c-0f71a8589a3a">
    (function (w, d) { !function (f, g, h, i) { f[h] = f[h] || {}; f[h].executed = []; f.zaraz = { deferred: [], listeners: [] }; f.zaraz.q = []; f.zaraz._f = function (j) { return function () { var k = Array.prototype.slice.call(arguments); f.zaraz.q.push({ m: j, a: k }) } }; for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l); f.zaraz.init = () => { var m = g.getElementsByTagName(i)[0], n = g.createElement(i), o = g.getElementsByTagName("title")[0]; o && (f[h].t = g.getElementsByTagName("title")[0].text); f[h].x = Math.random(); f[h].w = f.screen.width; f[h].h = f.screen.height; f[h].j = f.innerHeight; f[h].e = f.innerWidth; f[h].l = f.location.href; f[h].r = g.referrer; f[h].k = f.screen.colorDepth; f[h].n = g.characterSet; f[h].o = (new Date).getTimezoneOffset(); if (f.dataLayer) for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({ ...t[1], ...u[1] })), {}))) zaraz.set(s[0], s[1], { scope: "page" }); f[h].q = []; for (; f.zaraz.q.length;) { const v = f.zaraz.q.shift(); f[h].q.push(v) } n.defer = !0; for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith("_zaraz_"))).forEach((x => { try { f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x)) } catch { f[h]["z_" + x.slice(7)] = w.getItem(x) } })); n.referrerPolicy = "origin"; n.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h]))); m.parentNode.insertBefore(n, m) };["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);
    </script>
    </head>

<body>
  <div class="main" >

    <section class="signup" style="margin-top: 25px;">
      <div class="container">
        <div class="signup-content">
          <div class="signup-form">
            <h2 class="form-title">Sign up</h2>

            <form method="POST" action="includes/signup.inc.php" class="register-form" id="register-form">
              <div class="form-group">
                <label for="phone"><i class="zmdi zmdi-car"></i></label>
                <input type="text" name="username" id="uid" placeholder="Your Name" />
              </div>
              <div class="form-group">
                <label for="email"><i class="zmdi zmdi-email"></i></label>
                <input type="email" name="email" id="email" placeholder="Your Email" />
              </div>
              <div class="form-group">
                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                <input type="password" name="pwd" id="pwd" placeholder="Password" />
              </div>
              <div class="form-group">
                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                <input type="password" name="repeatpwd" id="repeatpwd" placeholder="Repeat your password" />
              </div>
              <div class="form-group form-button">
                <button class="form-submit" type="submit" name="signup">Register</button>
              </div>
            </form>
          </div>
          <div class="signup-image">
            <figure><img src="assets/img/keys.jpg"alt="sing up image"></figure>
            <a href="login.php" class="signup-image-link">I am already member</a>
          </div>
          
        </div>
        
      </div>
    </section>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
    integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
    data-cf-beacon='{"rayId":"7e15bf9f6e3b1b5a","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
    crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jul 2023 07:45:12 GMT -->

</html>