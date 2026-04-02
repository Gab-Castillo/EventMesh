<?php
// EventMesh — Login / Sign Up Page
// PHP + Tailwind CSS — Sunset & Dusk theme
// Members: Gabriel D. Castillo, Pauleen Marianne C. Balahadia,
//          Thristan Ian O. De Luna, Lou Juseve F. Evora

session_start();

$errors  = [];
$success = '';
$mode    = isset($_GET['mode']) && $_GET['mode'] === 'signup' ? 'signup' : 'login';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = $_POST['action'] ?? '';

  if ($action === 'login') {
    $email    = trim($_POST['email']    ?? '');
    $password = $_POST['password']      ?? '';
    if (empty($email))   $errors[] = 'Email is required.';
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email.';
    if (empty($password)) $errors[] = 'Password is required.';
    //22-26
    if (empty($errors)) {
  require_once 'config.php';
  try {
    $pdo = new PDO(
      'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET,
      DB_USERNAME, DB_PASSWORD,
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $stmt = $pdo->prepare('SELECT * FROM account WHERE email = ? LIMIT 1');
    $stmt->execute([$email]); 
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
      $_SESSION['user_id']   = $user['user_id'];
      $_SESSION['user_name'] = $user['name'];
      $_SESSION['user_email']= $user['email'];
      header('Location: /homepage'); exit;
    } else {
      $errors[] = 'Invalid email or password.';
    }
  } catch (PDOException $e) {
    $errors[] = 'Database error. Please try again.';
  }
}
  }

  if ($action === 'signup') {
    $name = strip_tags(trim($_POST['name'] ?? ''));
    $email    = trim($_POST['email']          ?? '');
    $phone = preg_replace('/[^\d\+\-\s]/', '', trim($_POST['phone'] ?? ''));
    $password = $_POST['password']            ?? '';
    $confirm  = $_POST['confirm_password']    ?? '';
    if (empty($name))    $errors[] = 'Full name is required.';
    if (!preg_match("/^[a-zA-Z\s\.\-']+$/", $name))
      $errors[] = 'Name must contain letters only.';
    if (empty($email))   $errors[] = 'Email is required.';
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email.';
    if (empty($phone))   $errors[] = 'Phone number is required.';
    if (!preg_match('/^[\d\+\-\s]{7,15}$/', $phone))
      $errors[] = 'Please enter a valid phone number.';
    if (strlen($password) < 8)  $errors[] = 'Password must be at least 8 characters.';
    if ($password !== $confirm)  $errors[] = 'Passwords do not match.';
    if (empty($errors)) {
  require_once 'config.php';
  try {
    $pdo = new PDO(
      'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET,
      DB_USERNAME, DB_PASSWORD,
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // Check if email already exists
    $check = $pdo->prepare('SELECT user_id FROM account WHERE email = ? LIMIT 1');
    $check->execute([$email]);
    if ($check->fetch()) {
      $errors[] = 'An account with this email already exists.';
    } else {
      $hashed = password_hash($password, PASSWORD_DEFAULT);
      $insert = $pdo->prepare(
        'INSERT INTO account (name, email, phone_number, password) VALUES (?, ?, ?, ?)'
      );
      $insert->execute([$name, $email, $phone, $hashed]);

      $newId = $pdo->lastInsertId();
      $_SESSION['user_id']   = $newId;
      $_SESSION['user_name'] = $name;
      $_SESSION['user_email']= $email;
      header('Location: /homepage'); exit;
    }
  } catch (PDOException $e) {
    $errors[] = 'Database error: ' . $e->getMessage();
  }
}
  }
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EventMesh — <?php echo $mode === 'signup' ? 'Create Account' : 'Sign In' ?></title>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  darkMode: ['attribute', '[data-theme="dark"]'],
  theme: {
    extend: {
      fontFamily: {
        display: ['"Cormorant Garamond"', 'serif'],
        body:    ['Jost', 'sans-serif'],
      },
      colors: {
        orange: { DEFAULT:'#e8632a', dim:'#c95020' },
        gold:   { DEFAULT:'#c9963a', light:'#e8b84b' },
        plum:   { DEFAULT:'#6b2460', dim:'#4a1942'  },
      },
      animation: {
        'orb-drift':  'orb-drift 16s ease-in-out infinite alternate',
        'orb-drift2': 'orb-drift2 12s ease-in-out infinite alternate',
        'fade-up':    'fade-up .6s both',
        'pulse-d':    'pulse-d 2.5s ease-in-out infinite',
      },
      keyframes: {
        'orb-drift':  { from:{transform:'translate(0,0) scale(1)'},      to:{transform:'translate(50px,40px) scale(1.1)'} },
        'orb-drift2': { from:{transform:'translate(0,0) scale(1)'},      to:{transform:'translate(-40px,30px) scale(1.08)'} },
        'fade-up':    { from:{opacity:'0',transform:'translateY(20px)'}, to:{opacity:'1',transform:'translateY(0)'} },
        'pulse-d':    { '0%,100%':{opacity:'1',transform:'rotate(45deg) scale(1)'}, '50%':{opacity:'.5',transform:'rotate(45deg) scale(1.6)'} },
      },
    }
  }
}
</script>

<style>
:root {
  --orange:       #e8632a;
  --orange-dim:   #c95020;
  --orange-glow:  rgba(232,99,42,.22);
  --orange-ghost: rgba(232,99,42,.08);
  --gold:         #c9963a;
  --gold-glow:    rgba(201,150,58,.20);
  --gold-ghost:   rgba(201,150,58,.08);
  --ease:         cubic-bezier(.22,1,.36,1);
  --trans:        0.36s var(--ease);
}

[data-theme="dark"] {
  --bg:          #110d0a;
  --bg2:         #181210;
  --bg3:         #201810;
  --surface:     #1e1612;
  --surface2:    #261e18;
  --text:        #f0e6d6;
  --text-2:      #c8aa88;
  --text-3:      #9a7a58;
  --border:      rgba(201,150,58,.22);
  --border-soft: rgba(240,220,190,.10);
  --line:        rgba(240,220,190,.07);
  --nav-bg:      rgba(17,13,10,.88);
  --input-bg:    rgba(38,30,24,.8);
  --shadow-lg:   0 20px 64px rgba(0,0,0,.75);
  --card-glow:   0 0 0 1px rgba(201,150,58,.18), 0 12px 48px rgba(232,99,42,.10);
}

[data-theme="light"] {
  --bg:          #faf3e8;
  --bg2:         #f3e9d8;
  --bg3:         #ecddc8;
  --surface:     #fffdf8;
  --surface2:    #faf4e8;
  --text:        #1a0e08;
  --text-2:      #4a2e1a;
  --text-3:      #7a5030;
  --border:      rgba(120,70,20,.22);
  --border-soft: rgba(26,14,8,.10);
  --line:        rgba(26,14,8,.07);
  --nav-bg:      rgba(250,243,232,.92);
  --input-bg:    rgba(255,253,248,.9);
  --shadow-lg:   0 18px 56px rgba(26,14,8,.15);
  --card-glow:   0 0 0 1px rgba(180,110,40,.20), 0 12px 48px rgba(232,99,42,.08);
  --orange:      #bf4410;
  --orange-dim:  #9e3408;
  --orange-glow: rgba(191,68,16,.18);
  --orange-ghost:rgba(191,68,16,.07);
  --gold:        #8c6010;
  --gold-glow:   rgba(140,96,16,.18);
  --gold-ghost:  rgba(140,96,16,.07);
}

*, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
html { scroll-behavior:smooth; }

body {
  background:var(--bg); color:var(--text);
  font-family:'Jost',sans-serif; font-weight:300;
  min-height:100vh; overflow-x:hidden;
  transition:background var(--trans),color var(--trans);
}

body::before {
  content:''; position:fixed; inset:0; pointer-events:none; z-index:9999; opacity:.025;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)'/%3E%3C/svg%3E");
}

.t-bg      { background:var(--bg); }
.t-bg2     { background:var(--bg2); }
.t-bg3     { background:var(--bg3); }
.t-surface { background:var(--surface); }
.t-text    { color:var(--text); }
.t-text-2  { color:var(--text-2); }
.t-text-3  { color:var(--text-3); }
.t-orange  { color:var(--orange); }
.t-gold    { color:var(--gold); }
.t-border  { border-color:var(--border); }
.t-border-soft { border-color:var(--border-soft); }
.t-nav     { background:var(--nav-bg); }
.t-line    { border-color:var(--line); }
.theme-trans { transition:background var(--trans),color var(--trans),border-color var(--trans); }

nav { backdrop-filter:blur(22px) saturate(1.5); border-color:var(--border-soft); transition:background var(--trans),border-color var(--trans); }

.tt-thumb { background:linear-gradient(135deg,var(--orange),var(--gold)); box-shadow:0 0 12px var(--orange-glow); transition:transform var(--trans); }
[data-theme="light"] .tt-thumb { transform:translateX(26px); }

.left-panel { background:var(--bg2); border-right:1px solid var(--border-soft); }
.panel-wash {
  background:
    radial-gradient(ellipse 80% 60% at 20% 40%,rgba(232,99,42,.11),transparent 65%),
    radial-gradient(ellipse 60% 60% at 80% 80%,rgba(107,36,96,.14),transparent 65%),
    radial-gradient(ellipse 50% 40% at 50% 10%,rgba(201,150,58,.08),transparent 60%);
}
.orb { border-radius:50%; filter:blur(80px); pointer-events:none; }
.orb-a { background:radial-gradient(circle,rgba(232,99,42,.14),transparent 70%); animation:orb-drift  16s ease-in-out infinite alternate; }
.orb-b { background:radial-gradient(circle,rgba(107,36,96,.16),transparent 70%); animation:orb-drift2 12s ease-in-out infinite alternate; }
.orb-c { background:radial-gradient(circle,rgba(201,150,58,.10),transparent 70%); animation:orb-drift  10s ease-in-out infinite alternate; animation-delay:-5s; }
.eyebrow-line    { background:linear-gradient(90deg,var(--orange),var(--gold)); }
.eyebrow-diamond { background:var(--gold); box-shadow:0 0 8px var(--gold-glow); animation:pulse-d 2.5s ease-in-out infinite; }
.feat-row { border-color:var(--border-soft); transition:border-color .2s,background .2s; }
.feat-row:hover { background:var(--orange-ghost); border-color:var(--border); }
.feat-dot { background:var(--orange); box-shadow:0 0 8px var(--orange-glow); }

.form-card { background:var(--surface); border:1px solid var(--border); box-shadow:var(--card-glow); transition:background var(--trans),border-color var(--trans); }

.em-input {
  background:var(--input-bg); border:1px solid var(--border-soft); color:var(--text);
  width:100%; padding:.82rem 1.1rem; border-radius:6px;
  font-size:.92rem; font-family:'Jost',sans-serif; font-weight:400; outline:none;
  transition:border-color .2s,box-shadow .2s,background var(--trans),color var(--trans);
}
.em-input:focus { border-color:var(--orange); box-shadow:0 0 0 3px var(--orange-glow); }
.em-input::placeholder { color:var(--text-3); }
.em-input.pr-10 { padding-right:2.8rem; }

.input-label {
  font-size:.72rem; font-weight:600; letter-spacing:.12em;
  text-transform:uppercase; color:var(--text-3); display:block;
  margin-bottom:.45rem; transition:color var(--trans);
}
.input-wrap { position:relative; }
.input-icon {
  position:absolute; right:.9rem; top:50%; transform:translateY(-50%);
  font-size:.9rem; color:var(--text-3); cursor:pointer; user-select:none; transition:color .2s;
}
.input-icon:hover { color:var(--orange); }

.btn-submit {
  background:var(--orange); color:#fff; width:100%;
  padding:.92rem; border-radius:6px;
  font-size:.9rem; font-weight:600; letter-spacing:.06em; text-transform:uppercase;
  border:none; cursor:pointer; box-shadow:0 0 22px var(--orange-glow);
  transition:background .2s,box-shadow .2s,transform .2s;
}
.btn-submit:hover { background:var(--orange-dim); box-shadow:0 0 40px var(--orange-glow); transform:translateY(-1px); }

.tab-btn {
  flex:1; padding:.7rem;
  font-size:.78rem; font-weight:600; letter-spacing:.1em; text-transform:uppercase;
  border:none; background:transparent; color:var(--text-3); cursor:pointer;
  border-bottom:2px solid transparent; transition:color .2s,border-color .2s;
}
.tab-btn.active { color:var(--orange); border-bottom-color:var(--orange); }
.tab-btn:not(.active):hover { color:var(--text-2); }

.or-divider {
  display:flex; align-items:center; gap:.8rem;
  font-size:.72rem; font-weight:600; letter-spacing:.12em; text-transform:uppercase; color:var(--text-3);
}
.or-divider::before,.or-divider::after { content:''; flex:1; height:1px; background:var(--border-soft); }

.btn-social {
  flex:1; display:flex; align-items:center; justify-content:center; gap:.5rem;
  padding:.7rem .5rem; border-radius:6px; border:1px solid var(--border-soft);
  background:transparent; color:var(--text-2); font-size:.8rem; font-weight:500; cursor:pointer;
  transition:border-color .2s,color .2s,background .2s;
}
.btn-social:hover { border-color:var(--orange); color:var(--orange); background:var(--orange-ghost); }

.alert-error   { background:rgba(232,99,42,.10); border:1px solid rgba(232,99,42,.30); border-radius:6px; padding:.8rem 1rem; font-size:.84rem; color:var(--orange); }
.alert-success { background:rgba(201,150,58,.10); border:1px solid rgba(201,150,58,.30); border-radius:6px; padding:.8rem 1rem; font-size:.84rem; color:var(--gold); }

.strength-bar { height:3px; border-radius:2px; transition:width .4s var(--ease),background .4s; }

.em-checkbox {
  width:16px; height:16px; border:1.5px solid var(--border); border-radius:3px;
  background:var(--input-bg); cursor:pointer; flex-shrink:0;
  transition:border-color .2s,background .2s; appearance:none; -webkit-appearance:none; position:relative;
}
.em-checkbox:checked { background:var(--orange); border-color:var(--orange); }
.em-checkbox:checked::after {
  content:'✓'; position:absolute; top:50%; left:50%; transform:translate(-50%,-50%);
  color:#fff; font-size:.62rem; font-weight:700;
}

@keyframes orb-drift  { from{transform:translate(0,0) scale(1)}    to{transform:translate(50px,40px) scale(1.1)} }
@keyframes orb-drift2 { from{transform:translate(0,0) scale(1)}    to{transform:translate(-40px,30px) scale(1.08)} }
@keyframes fade-up    { from{opacity:0;transform:translateY(20px)} to{opacity:1;transform:translateY(0)} }
@keyframes pulse-d    { 0%,100%{opacity:1;transform:rotate(45deg) scale(1)} 50%{opacity:.5;transform:rotate(45deg) scale(1.6)} }
</style>
</head>
<body class="font-body">

<!-- NAV -->
<nav class="t-nav fixed top-0 left-0 right-0 z-50 h-16 flex items-center justify-between px-8 md:px-14 border-b t-border-soft">
  <a href="eventmesh.php" class="font-display font-bold text-2xl t-text no-underline flex items-baseline" style="letter-spacing:.02em">
    <span class="t-orange italic">Event</span><span class="t-gold">Mesh</span>
  </a>
  <div class="flex items-center gap-4">
    <button id="themeToggle" aria-label="Toggle theme"
      class="relative w-14 h-7 rounded-full border t-border cursor-pointer outline-none flex-shrink-0 t-bg2 theme-trans">
      <div class="absolute inset-0 flex items-center justify-between px-1.5 pointer-events-none text-xs">
        <span>☀️</span><span>🌙</span>
      </div>
      <div class="tt-thumb absolute top-[3px] left-[3px] w-[22px] h-[22px] rounded-full"></div>
    </button>
    <a href="eventmesh.php" class="text-xs font-semibold tracking-wider uppercase t-text-3 no-underline hover:t-orange transition-colors">← Back to Home</a>
  </div>
</nav>

<!-- MAIN -->
<main class="flex min-h-screen pt-16">

  <!-- LEFT PANEL -->
  <div class="left-panel hidden lg:flex flex-col justify-between w-[45%] relative overflow-hidden px-16 py-20">
    <div class="panel-wash absolute inset-0 pointer-events-none"></div>
    <div class="orb orb-a absolute w-[500px] h-[500px] -top-24 -left-24 pointer-events-none"></div>
    <div class="orb orb-b absolute w-[380px] h-[380px] -bottom-20 -right-10 pointer-events-none"></div>
    <div class="orb orb-c absolute w-[240px] h-[240px] pointer-events-none" style="top:50%;left:33%"></div>

    <!-- Brand -->
    <div class="relative z-10" style="animation:fade-up .6s both">
      <a href="eventmesh.php" class="font-display font-bold text-4xl t-text no-underline flex items-baseline mb-3" style="letter-spacing:.02em">
        <span class="t-orange italic">Event</span><span class="t-gold">Mesh</span>
      </a>
      <div class="flex items-center gap-2 text-xs font-semibold tracking-widest uppercase t-gold">
        <div class="eyebrow-line w-6 h-px"></div>
        Where Every Event Begins
        <div class="eyebrow-diamond w-1.5 h-1.5 rotate-45"></div>
      </div>
    </div>

    <!-- Headline -->
    <div class="relative z-10" style="animation:fade-up .6s .1s both">
      <h2 class="font-display font-bold leading-none tracking-tight mb-6 t-text" style="font-size:clamp(2.8rem,4vw,4rem)">
        Your next<br>
        <em class="t-orange italic">unforgettable</em><br>
        event awaits.
      </h2>
      <p class="t-text-2 leading-relaxed theme-trans" style="font-size:.96rem;max-width:380px">
        Join thousands of event-goers discovering music, arts, culture, and business experiences across Metro Manila and beyond.
      </p>
    </div>

    <!-- Feature list -->
    <div class="relative z-10 flex flex-col gap-3" style="animation:fade-up .6s .2s both">
      <?php
      $panel_features = [
        ["icon"=>"🎟️","text"=>"Instant digital ticket delivery"],
        ["icon"=>"🏟️","text"=>"250+ verified venues nationwide"],
        ["icon"=>"💳","text"=>"Secure multi-method payments"],
        ["icon"=>"⭐","text"=>"Verified attendee reviews"],
      ];
      foreach ($panel_features as $pf): ?>
      <div class="feat-row flex items-center gap-3.5 border rounded-lg px-4 py-3 theme-trans">
        <div class="feat-dot w-1.5 h-1.5 rounded-full flex-shrink-0"></div>
        <span class="text-lg"><?php echo $pf['icon'] ?></span>
        <span class="t-text-2 text-sm theme-trans"><?php echo htmlspecialchars($pf['text']) ?></span>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Members -->
    <div class="relative z-10 text-xs t-text-3 leading-relaxed theme-trans" style="animation:fade-up .6s .3s both">
      Gabriel D. Castillo · Pauleen Marianne C. Balahadia<br>
      Thristan Ian O. De Luna · Lou Juseve F. Evora
    </div>
  </div>

  <!-- RIGHT PANEL -->
  <div class="flex-1 flex items-center justify-center px-5 py-12 t-bg theme-trans">
    <div class="w-full max-w-md" style="animation:fade-up .6s .15s both">

      <div class="form-card rounded-2xl overflow-hidden">

        <!-- Tabs -->
        <div class="flex border-b t-border-soft">
          <button class="tab-btn <?php echo $mode==='login'  ? 'active' : '' ?>" id="tab-login"  onclick="switchMode('login')">Sign In</button>
          <button class="tab-btn <?php echo $mode==='signup' ? 'active' : '' ?>" id="tab-signup" onclick="switchMode('signup')">Create Account</button>
        </div>

        <div class="px-8 py-8">

          <!-- Gradient bar -->
          <div class="h-0.5 rounded-full mb-6" style="background:linear-gradient(90deg,var(--orange),var(--gold),#6b2460)"></div>

          <!-- Alerts -->
          <?php if (!empty($errors)): ?>
          <div class="alert-error mb-5">
            <?php foreach ($errors as $err): ?>
            <div class="flex items-center gap-2"><span>⚠</span> <?php echo htmlspecialchars($err) ?></div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <?php if ($success): ?>
          <div class="alert-success mb-5">
            <div class="flex items-center gap-2"><span>✓</span> <?php echo htmlspecialchars($success) ?></div>
          </div>
          <?php endif; ?>

          <!-- ══ LOGIN FORM ══ -->
          <form id="form-login" method="POST" action="/Auth?mode=login"
                style="display:<?php echo $mode==='signup' ? 'none' : 'flex' ?>;flex-direction:column;gap:1.25rem">
            <input type="hidden" name="action" value="login">

            <div class="text-center mb-1">
              <h1 class="font-display font-bold t-text theme-trans" style="font-size:1.8rem;letter-spacing:-.01em">Welcome back</h1>
              <p class="t-text-3 text-sm mt-1 theme-trans">Sign in to your EventMesh account</p>
            </div>

            <div>
              <label class="input-label" for="login-email">Email Address</label>
              <div class="input-wrap">
                <input class="em-input" type="email" id="login-email" name="email"
                  placeholder="you@example.com"
                  value="<?php echo htmlspecialchars($_POST['email'] ?? '') ?>" autocomplete="email">
                <span class="input-icon">✉</span>
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between mb-1.5">
                <label class="input-label" style="margin-bottom:0" for="login-pass">Password</label>
                <a href="#" class="text-xs t-gold no-underline hover:t-orange transition-colors">Forgot password?</a>
              </div>
              <div class="input-wrap">
                <input class="em-input pr-10" type="password" id="login-pass" name="password"
                  placeholder="Enter your password" autocomplete="current-password">
                <span class="input-icon" onclick="togglePass('login-pass',this)">👁</span>
              </div>
            </div>

            <div class="flex items-center gap-2.5">
              <input type="checkbox" class="em-checkbox" id="remember" name="remember">
              <label for="remember" class="text-sm t-text-2 cursor-pointer theme-trans">Remember me for 30 days</label>
            </div>

            <button type="submit" class="btn-submit">Sign In to EventMesh</button>

            <div class="or-divider">or continue with</div>

            <div class="flex gap-3">
              <button type="button" class="btn-social">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                Google
              </button>
              <button type="button" class="btn-social">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                Facebook
              </button>
            </div>

            <p class="text-center text-sm t-text-3 theme-trans">
              Don't have an account?
              <button type="button" onclick="switchMode('signup')" class="t-orange font-semibold bg-transparent border-none cursor-pointer">Create one →</button>
            </p>
          </form>

          <!-- ══ SIGNUP FORM ══ -->
          <form id="form-signup" method="POST" action="/Auth?mode=signup"
                style="display:<?php echo $mode==='signup' ? 'flex' : 'none' ?>;flex-direction:column;gap:1rem">
            <input type="hidden" name="action" value="signup">

            <div class="text-center mb-1">
              <h1 class="font-display font-bold t-text theme-trans" style="font-size:1.8rem;letter-spacing:-.01em">Join EventMesh</h1>
              <p class="t-text-3 text-sm mt-1 theme-trans">Create your account in seconds</p>
            </div>

            <div>
              <label class="input-label" for="reg-name">Full Name</label>
              <div class="input-wrap">
                <input class="em-input" type="text" id="reg-name" name="name"
                  placeholder="Juan dela Cruz"
                  value="<?php echo htmlspecialchars($_POST['name'] ?? '') ?>" autocomplete="name">
                <span class="input-icon">👤</span>
              </div>
            </div>

            <div>
              <label class="input-label" for="reg-email">Email Address</label>
              <div class="input-wrap">
                <input class="em-input" type="email" id="reg-email" name="email"
                  placeholder="you@example.com"
                  value="<?php echo htmlspecialchars($_POST['email'] ?? '') ?>" autocomplete="email">
                <span class="input-icon">✉</span>
              </div>
            </div>

            <div>
              <label class="input-label" for="reg-phone">Phone Number</label>
              <div class="input-wrap">
                <input class="em-input" type="tel" id="reg-phone" name="phone"
                  placeholder="+63 912 345 6789"
                  value="<?php echo htmlspecialchars($_POST['phone'] ?? '') ?>" autocomplete="tel">
                <span class="input-icon">📱</span>
              </div>
            </div>

            <div>
              <label class="input-label" for="reg-pass">Password</label>
              <div class="input-wrap">
                <input class="em-input pr-10" type="password" id="reg-pass" name="password"
                  placeholder="Minimum 8 characters"
                  oninput="checkStrength(this.value)" autocomplete="new-password">
                <span class="input-icon" onclick="togglePass('reg-pass',this)">👁</span>
              </div>
              <div class="flex gap-1 mt-2">
                <div class="flex-1 h-0.5 rounded-full t-bg3 overflow-hidden"><div id="s1" class="strength-bar" style="width:0"></div></div>
                <div class="flex-1 h-0.5 rounded-full t-bg3 overflow-hidden"><div id="s2" class="strength-bar" style="width:0"></div></div>
                <div class="flex-1 h-0.5 rounded-full t-bg3 overflow-hidden"><div id="s3" class="strength-bar" style="width:0"></div></div>
                <div class="flex-1 h-0.5 rounded-full t-bg3 overflow-hidden"><div id="s4" class="strength-bar" style="width:0"></div></div>
              </div>
              <div id="strength-label" class="text-xs t-text-3 mt-1 theme-trans"></div>
            </div>

            <div>
              <label class="input-label" for="reg-confirm">Confirm Password</label>
              <div class="input-wrap">
                <input class="em-input pr-10" type="password" id="reg-confirm" name="confirm_password"
                  placeholder="Repeat your password"
                  oninput="checkMatch()" autocomplete="new-password">
                <span class="input-icon" onclick="togglePass('reg-confirm',this)">👁</span>
              </div>
              <div id="match-label" class="text-xs mt-1"></div>
            </div>

            <div class="flex items-start gap-2.5">
              <input type="checkbox" class="em-checkbox mt-0.5" id="terms" name="terms" required>
              <label for="terms" class="text-sm t-text-2 cursor-pointer leading-relaxed theme-trans">
                I agree to the <a href="#" class="t-orange no-underline">Terms of Use</a> and <a href="#" class="t-orange no-underline">Privacy Policy</a>
              </label>
            </div>

            <button type="submit" class="btn-submit">Create My Account</button>

            <div class="or-divider">or sign up with</div>

            <div class="flex gap-3">
              <button type="button" class="btn-social">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                Google
              </button>
              <button type="button" class="btn-social">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                Facebook
              </button>
            </div>

            <p class="text-center text-sm t-text-3 theme-trans">
              Already have an account?
              <button type="button" onclick="switchMode('login')" class="t-orange font-semibold bg-transparent border-none cursor-pointer">Sign in →</button>
            </p>
          </form>

        </div>
      </div>

      <p class="text-center text-xs t-text-3 mt-5 theme-trans">
        <a href="eventmesh.php" class="t-text-3 no-underline hover:t-orange transition-colors">← Return to EventMesh home</a>
      </p>
    </div>
  </div>
</main>

<script>
// ── THEME TOGGLE ──
const html   = document.documentElement;
const toggle = document.getElementById('themeToggle');
const saved  = localStorage.getItem('em-theme') || 'dark';
html.setAttribute('data-theme', saved);
toggle.addEventListener('click', () => {
  const next = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
  html.setAttribute('data-theme', next);
  localStorage.setItem('em-theme', next);
});

// ── TAB SWITCH ──
function switchMode(mode) {
  const isSignup = mode === 'signup';
  const login    = document.getElementById('form-login');
  const signup   = document.getElementById('form-signup');
  login.style.display        = isSignup ? 'none'  : 'flex';
  login.style.flexDirection  = 'column';
  signup.style.display       = isSignup ? 'flex'  : 'none';
  signup.style.flexDirection = 'column';
  document.getElementById('tab-login').classList.toggle('active',  !isSignup);
  document.getElementById('tab-signup').classList.toggle('active',  isSignup);
}

// ── TOGGLE PASSWORD VISIBILITY ──
function togglePass(id, icon) {
  const input = document.getElementById(id);
  const isText = input.type === 'text';
  input.type = isText ? 'password' : 'text';
  icon.textContent = isText ? '👁' : '🙈';
}

// ── PASSWORD STRENGTH ──
function checkStrength(val) {
  let score = 0;
  if (val.length >= 8)            score++;
  if (/[A-Z]/.test(val))         score++;
  if (/[0-9]/.test(val))         score++;
  if (/[^A-Za-z0-9]/.test(val)) score++;
  const colors = ['#e8632a','#e8a020','#c9963a','#4caf78'];
  const labels = ['Weak','Fair','Good','Strong'];
  ['s1','s2','s3','s4'].forEach((id, i) => {
    const bar = document.getElementById(id);
    bar.style.width      = i < score ? '100%' : '0';
    bar.style.background = i < score ? colors[score-1] : 'transparent';
  });
  const lbl = document.getElementById('strength-label');
  lbl.textContent = val.length > 0 ? `Password strength: ${labels[score-1]||'Weak'}` : '';
  lbl.style.color = val.length > 0 ? colors[score-1] : 'var(--text-3)';
}

// ── PASSWORD MATCH ──
function checkMatch() {
  const pass  = document.getElementById('reg-pass').value;
  const conf  = document.getElementById('reg-confirm').value;
  const label = document.getElementById('match-label');
  if (!conf.length) { label.textContent = ''; return; }
  label.textContent = conf === pass ? '✓ Passwords match' : '✗ Passwords do not match';
  label.style.color = conf === pass ? '#4caf78' : 'var(--orange)';
}
</script>
</body>
</html>
