<?php
// EventMesh — Sunset & Dusk
// PHP + Tailwind CSS version
// Members: Gabriel D. Castillo, Pauleen Marianne C. Balahadia,
//          Thristan Ian O. De Luna, Lou Juseve F. Evora

$page_title = "EventMesh — Where Every Event Begins";

$events = [
  ["emoji"=>"🎵","cat"=>"Music & Live Performance","title"=>"Neon Frequency Festival — Sound & Light Convergence","meta"=>"April 12, 2025 · Metro Arena, Pasay City","desc"=>"Multi-stage electronic music with immersive light art across 4 stages.","price"=>"₱1,200","badge"=>"Featured","vis"=>"ev-v1","main"=>true],
  ["emoji"=>"🎨","cat"=>"Visual Arts","title"=>"Modern Canvas Expo","meta"=>"April 20 · The Gallery Hub, Makati","desc"=>"","price"=>"₱500","badge"=>"Arts","vis"=>"ev-v2","main"=>false],
  ["emoji"=>"💼","cat"=>"Conference","title"=>"TechForward Summit 2025","meta"=>"May 3 · Innovation Hub, BGC","desc"=>"","price"=>"₱2,500","badge"=>"Business","vis"=>"ev-v3","main"=>false],
  ["emoji"=>"🌿","cat"=>"Festival","title"=>"Green Grounds Bazaar","meta"=>"May 18 · Greenfield Amphitheater","desc"=>"","price"=>"₱350","badge"=>"Outdoor","vis"=>"ev-v4","main"=>false],
  ["emoji"=>"🎬","cat"=>"Cinema","title"=>"CineNight Premiere Series","meta"=>"May 25 · CineVault, Ortigas","desc"=>"","price"=>"₱600","badge"=>"Film","vis"=>"ev-v5","main"=>false],
];

$features = [
  ["icon"=>"👤","num"=>"01","title"=>"User Profiles","text"=>"Secure accounts with full order history and personalised event recommendations."],
  ["icon"=>"🎪","num"=>"02","title"=>"Event Management","text"=>"Categories, dates, venue links — discover the right event with precision filters."],
  ["icon"=>"🏟️","num"=>"03","title"=>"Venue Directory","text"=>"Capacity, address, and contact info for every venue on the EventMesh network."],
  ["icon"=>"🎟️","num"=>"04","title"=>"Smart Ticketing","text"=>"Multiple tiers per event with real-time seat tracking and instant digital delivery."],
  ["icon"=>"💳","num"=>"05","title"=>"Secure Payments","text"=>"Multi-method checkout with transaction logs and order amount tracking built in."],
  ["icon"=>"⭐","num"=>"06","title"=>"Feedback System","text"=>"Verified attendee ratings and comments that help every subsequent event improve."],
];

$steps = [
  ["num"=>"01","title"=>"Create Account","text"=>"Register with your name, email, and phone. Your profile becomes the hub for all orders and tickets."],
  ["num"=>"02","title"=>"Browse & Discover","text"=>"Explore events by category, date, or venue. Filter by ticket type and price to find exactly what you want."],
  ["num"=>"03","title"=>"Book & Pay","text"=>"Choose your ticket tier and seat, then complete your order through our secure multi-method checkout."],
  ["num"=>"04","title"=>"Attend & Review","text"=>"Show your digital ticket at the gate. Leave a star rating and comment to help the community grow."],
];

$venues = [
  ["icon"=>"🏟️","name"=>"Metro Arena","info"=>"Pasay City · Concerts & Sports","cap"=>"20,000"],
  ["icon"=>"🌿","name"=>"Greenfield Amphitheater","info"=>"Mandaluyong · Open-air Festivals","cap"=>"5,000"],
  ["icon"=>"🏢","name"=>"Innovation Hub","info"=>"BGC, Taguig · Conferences","cap"=>"2,000"],
  ["icon"=>"🎭","name"=>"The Gallery Hub","info"=>"Makati · Art & Culture","cap"=>"500"],
  ["icon"=>"🎪","name"=>"The Grounds PH","info"=>"Quezon City · Fairs & Markets","cap"=>"8,000"],
  ["icon"=>"🎬","name"=>"CineVault","info"=>"Ortigas, Pasig · Film Events","cap"=>"800"],
];

$tickets = [
  ["type"=>"General Admission","price"=>"500","note"=>"Standard access · Any event","featured"=>false,"perks"=>["Standard seating area","Digital e-ticket delivery","Event program included","Basic amenities access"]],
  ["type"=>"VIP Access","price"=>"1,500","note"=>"Best value · Premium experience","featured"=>true,"perks"=>["Priority reserved seating","Complimentary drinks","Exclusive lounge access","Meet & greet opportunities","Souvenir package included"]],
  ["type"=>"Premium Package","price"=>"3,000","note"=>"Ultimate experience · All access","featured"=>false,"perks"=>["Front-row seating guaranteed","All VIP benefits included","Backstage access pass","Dedicated concierge service","Professional photo session"]],
];

$reviews = [
  ["av"=>"G","av_class"=>"fba","name"=>"Gabriel D. Castillo","event"=>"Neon Frequency Festival","stars"=>5,"text"=>"EventMesh completely changed how I experience events. Booking was instant, the seat tracker is brilliant, and my QR ticket worked flawlessly at the gate. I'll never go back to the old way.","wide"=>true],
  ["av"=>"P","av_class"=>"fbb","name"=>"Pauleen M. Balahadia","event"=>"Modern Canvas Expo","stars"=>5,"text"=>"\"Finding events near me has never been easier. The venue details and capacity info help me plan ahead perfectly.\"","wide"=>false],
  ["av"=>"T","av_class"=>"fbc","name"=>"Thristan I. De Luna","event"=>"TechForward Summit 2025","stars"=>4,"text"=>"\"The VIP experience at TechForward was seamless — fast payment and the seat tracker is a real game changer.\"","wide"=>false],
  ["av"=>"L","av_class"=>"fbd","name"=>"Lou Juseve F. Evora","event"=>"Green Grounds Bazaar","stars"=>5,"text"=>"\"Premium tickets for Green Grounds — the concierge service was above and beyond. Highly recommend!\"","wide"=>false],
];

$sidebar_events = [
  ["emoji"=>"🎵","cat"=>"Music · Apr 12","title"=>"Neon Frequency Festival","venue"=>"Metro Arena","price"=>"₱1,200","thumb"=>"sbt-1"],
  ["emoji"=>"🎨","cat"=>"Arts · Apr 20","title"=>"Modern Canvas Expo","venue"=>"Gallery Hub","price"=>"₱500","thumb"=>"sbt-2"],
  ["emoji"=>"💼","cat"=>"Business · May 3","title"=>"TechForward Summit 2025","venue"=>"Innovation Hub","price"=>"₱2,500","thumb"=>"sbt-3"],
];

$stats = [
  ["n"=>"12K+","l"=>"Users"],
  ["n"=>"840+","l"=>"Events Hosted"],
  ["n"=>"250+","l"=>"Venues"],
  ["n"=>"98%","l"=>"Satisfaction"],
];

$ticker_items = ["Music","Arts & Culture","Business Summits","Sports Events","Food & Lifestyle","Film Screenings","Workshops","Concerts"];
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title); ?></title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

<!-- Tailwind CSS CDN with custom config -->
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
        orange:  { DEFAULT:'#e8632a', dim:'#c95020', light:'#bf4410' },
        gold:    { DEFAULT:'#c9963a', light:'#e8b84b', dark:'#8c6010' },
        plum:    { DEFAULT:'#6b2460', dim:'#4a1942' },
        // Dark theme surfaces
        night:   { 50:'#f0e6d6', 100:'#c8aa88', 200:'#9a7a58', 300:'#261e18', 400:'#1e1612', 500:'#181210', 600:'#110d0a' },
        // Light theme surfaces
        ivory:   { 50:'#fffdf8', 100:'#faf3e8', 200:'#f3e9d8', 300:'#ecddc8', 400:'#1a0e08', 500:'#4a2e1a', 600:'#7a5030' },
      },
      borderRadius: {
        sm: '6px', DEFAULT: '14px', lg: '22px',
      },
      boxShadow: {
        glow:    '0 0 22px rgba(232,99,42,.20)',
        'glow-lg':'0 0 40px rgba(232,99,42,.25)',
        gold:    '0 0 18px rgba(201,150,58,.22)',
        card:    '0 0 0 1px rgba(201,150,58,.18), 0 8px 40px rgba(232,99,42,.08)',
        'card-l':'0 0 0 1px rgba(180,110,40,.20), 0 6px 32px rgba(232,99,42,.08)',
        deep:    '0 20px 64px rgba(0,0,0,.75)',
      },
      animation: {
        'orb-float': 'orb-float 14s ease-in-out infinite alternate',
        'pulse-diamond': 'pulse-diamond 2.5s ease-in-out infinite',
        'ticker': 'ticker 28s linear infinite',
        'fadeUp': 'fadeUp .7s both',
      },
      keyframes: {
        'orb-float':       { from:{transform:'translate(0,0) scale(1)'}, to:{transform:'translate(40px,30px) scale(1.08)'} },
        'pulse-diamond':   { '0%,100%':{opacity:'1',transform:'rotate(45deg) scale(1)'}, '50%':{opacity:'.5',transform:'rotate(45deg) scale(1.5)'} },
        'ticker':          { from:{transform:'translateX(0)'}, to:{transform:'translateX(-50%)'} },
        'fadeUp':          { from:{opacity:'0',transform:'translateY(24px)'}, to:{opacity:'1',transform:'translateY(0)'} },
      },
    }
  }
}
</script>

<style>
/* ── CSS CUSTOM PROPERTIES (theme tokens) ── */
:root {
  --orange:       #e8632a;
  --orange-dim:   #c95020;
  --orange-glow:  rgba(232,99,42,.20);
  --orange-ghost: rgba(232,99,42,.08);
  --plum-dim:     #4a1942;
  --gold:         #c9963a;
  --gold-glow:    rgba(201,150,58,.22);
  --gold-ghost:   rgba(201,150,58,.08);
  --gold-light:   #e8b84b;
  --ease:         cubic-bezier(.22,1,.36,1);
  --trans:        0.38s var(--ease);
}

/* DARK THEME */
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
  --shadow-lg:   0 20px 64px rgba(0,0,0,.75);
  --card-glow:   0 0 0 1px rgba(201,150,58,.18), 0 8px 40px rgba(232,99,42,.08);
}

/* LIGHT THEME */
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
  --shadow-lg:   0 18px 56px rgba(26,14,8,.15);
  --card-glow:   0 0 0 1px rgba(180,110,40,.20), 0 6px 32px rgba(232,99,42,.08);
  --orange:      #bf4410;
  --orange-dim:  #9e3408;
  --orange-glow: rgba(191,68,16,.18);
  --orange-ghost:rgba(191,68,16,.07);
  --gold:        #8c6010;
  --gold-ghost:  rgba(140,96,16,.07);
  --gold-glow:   rgba(140,96,16,.18);
}

/* ── UTILITY CLASSES using CSS vars (Tailwind can't do dynamic CSS vars) ── */
body       { background:var(--bg); color:var(--text); font-family:'Jost',sans-serif; font-weight:300; overflow-x:hidden; transition:background var(--trans),color var(--trans); scroll-behavior:smooth; }
.t-bg      { background:var(--bg); }
.t-bg2     { background:var(--bg2); }
.t-surface { background:var(--surface); }
.t-surface2{ background:var(--surface2); }
.t-text    { color:var(--text); }
.t-text-2  { color:var(--text-2); }
.t-text-3  { color:var(--text-3); }
.t-border  { border-color:var(--border); }
.t-border-soft{ border-color:var(--border-soft); }
.t-nav     { background:var(--nav-bg); border-color:var(--border-soft); }
.t-line    { border-color:var(--line); }
.t-orange  { color:var(--orange); }
.t-gold    { color:var(--gold); }
.t-card-glow{ box-shadow:var(--card-glow); }

/* grain texture */
body::before { content:''; position:fixed; inset:0; pointer-events:none; z-index:9998; opacity:.028;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)'/%3E%3C/svg%3E"); }

/* ── THEME TOGGLE ── */
.tt-thumb { background:linear-gradient(135deg,var(--orange),var(--gold)); box-shadow:0 0 12px var(--orange-glow); transition:transform var(--trans); }
[data-theme="light"] .tt-thumb { transform:translateX(26px); }

/* ── NAV ── */
nav { backdrop-filter:blur(22px) saturate(1.5); transition:background var(--trans),border-color var(--trans); }
.nav-link-item { color:var(--text-3); transition:color .2s; position:relative; padding-bottom:3px; }
.nav-link-item::after { content:''; position:absolute; bottom:0; left:0; right:0; height:1px; background:var(--orange); transform:scaleX(0); transform-origin:left; transition:transform .25s var(--ease); }
.nav-link-item:hover { color:var(--orange); }
.nav-link-item:hover::after { transform:scaleX(1); }

/* ── HERO ── */
.hero-wash { background: radial-gradient(ellipse 70% 60% at 20% 50%,rgba(232,99,42,.09),transparent 70%), radial-gradient(ellipse 50% 50% at 80% 80%,rgba(107,36,96,.12),transparent 65%), radial-gradient(ellipse 40% 40% at 60% 10%,rgba(201,150,58,.07),transparent 60%); }
.hero-lines { background-image:repeating-linear-gradient(0deg,transparent,transparent 48px,var(--line) 48px,var(--line) 49px); mask-image:linear-gradient(90deg,transparent 40%,rgba(0,0,0,.6) 100%); }
.orb { border-radius:50%; filter:blur(90px); pointer-events:none; animation:orb-float 14s ease-in-out infinite alternate; }
.orb-1 { background:radial-gradient(circle,rgba(232,99,42,.12),transparent 70%); animation-delay:0s; }
.orb-2 { background:radial-gradient(circle,rgba(107,36,96,.14),transparent 70%); animation-delay:-7s; }
.orb-3 { background:radial-gradient(circle,rgba(201,150,58,.10),transparent 70%); animation-delay:-4s; animation-duration:10s; }
.eyebrow-line { background:linear-gradient(90deg,var(--orange),var(--gold)); }
.eyebrow-diamond { background:var(--gold); box-shadow:0 0 8px var(--gold-glow); animation:pulse-diamond 2.5s ease-in-out infinite; }

/* Buttons */
.btn-orange { background:var(--orange); box-shadow:0 0 22px var(--orange-glow); transition:background .2s,box-shadow .2s,transform .2s; }
.btn-orange:hover { background:var(--orange-dim); box-shadow:0 0 40px var(--orange-glow); transform:translateY(-2px); }
.btn-ghost-styled { border-color:var(--border); color:var(--text-2); transition:border-color .2s,color .2s,transform .2s; }
.btn-ghost-styled:hover { border-color:var(--gold); color:var(--gold); transform:translateY(-2px); }

/* Sunset arc */
.sunset-arc { border-color:var(--orange-ghost); }
.sunset-arc::before { content:''; position:absolute; inset:16px; border:1px solid var(--gold-ghost); border-radius:50%; }
.sunset-arc::after  { content:''; position:absolute; inset:30px; border:1px solid rgba(107,36,96,.1); border-radius:50%; }

/* Sidebar cards */
.sb-thumb-styled { transition:border-color .25s,transform .25s,box-shadow .25s; }
.sb-thumb-styled:hover { border-color:var(--orange); transform:translateX(6px); box-shadow:var(--card-glow); }
.sbt-1 { background:linear-gradient(145deg,#160808,#2a100c); }
.sbt-2 { background:linear-gradient(145deg,#120814,#220c20); }
.sbt-3 { background:linear-gradient(145deg,#0e0a06,#1e1408); }

/* Event visuals */
.ev-v1 { background:linear-gradient(150deg,#120606 0%,#2a0e08 50%,#1a0e14 100%); }
.ev-v2 { background:linear-gradient(150deg,#0e0614 0%,#1e0c24 100%); }
.ev-v3 { background:linear-gradient(150deg,#100a04 0%,#241408 100%); }
.ev-v4 { background:linear-gradient(150deg,#060e08 0%,#0c1c0e 100%); }
.ev-v5 { background:linear-gradient(150deg,#0a0610 0%,#18091a 100%); }
.ev-vis-line::after { content:''; position:absolute; bottom:0; left:0; right:0; height:2px; background:linear-gradient(90deg,transparent,var(--orange),var(--gold),transparent); opacity:.4; }

/* Event cards */
.ev-card-styled { background:var(--surface); border-color:var(--border-soft); transition:transform .3s,box-shadow .3s,border-color .3s,background var(--trans); }
.ev-card-styled:hover { transform:translateY(-5px); box-shadow:var(--shadow-lg); border-color:var(--orange); }

/* Feature cards */
.feat-card-styled { background:var(--surface); border-color:var(--border-soft); position:relative; overflow:hidden; transition:transform .3s,border-color .3s,background var(--trans),box-shadow .3s; }
.feat-card-styled::after { content:''; position:absolute; top:0; right:0; width:3px; height:0; background:linear-gradient(180deg,var(--orange),var(--gold),#6b2460); transition:height .35s var(--ease); }
.feat-card-styled:hover::after { height:100%; }
.feat-card-styled:hover { transform:translateY(-4px); border-color:var(--orange); box-shadow:var(--card-glow); }
.feat-icon-box { background:var(--orange-ghost); border-color:var(--border); }

/* Step cards */
.step-styled { background:var(--surface); border-color:var(--border-soft); transition:background .25s,border-color var(--trans); }
.step-styled:hover { background:var(--surface2); }
.step-num { color:transparent; -webkit-text-stroke:1px var(--orange); opacity:.35; transition:opacity .25s; font-family:'Cormorant Garamond',serif; font-weight:700; }
.step-styled:hover .step-num { opacity:.7; }

/* Venue rows */
.venue-row-styled { background:var(--surface); border-color:var(--border-soft); position:relative; overflow:hidden; transition:border-color .2s,transform .2s,box-shadow .2s,background var(--trans); }
.venue-row-styled::before { content:''; position:absolute; left:0; top:0; bottom:0; width:3px; background:linear-gradient(180deg,var(--orange),#6b2460); transform:scaleY(0); transform-origin:bottom; transition:transform .28s var(--ease); }
.venue-row-styled:hover { border-color:var(--orange); transform:translateX(5px); box-shadow:var(--card-glow); }
.venue-row-styled:hover::before { transform:scaleY(1); }
.venue-icon-box { background:var(--orange-ghost); border-color:var(--border); }
.venue-cap-styled { color:var(--gold); background:var(--gold-ghost); border-color:var(--border); }

/* Ticket cards */
.t-card-styled { background:var(--surface); border-color:var(--border-soft); transition:transform .3s,box-shadow .3s,border-color .3s,background var(--trans); }
.t-card-styled:hover { transform:translateY(-5px); box-shadow:var(--shadow-lg); }
.t-card-featured { border-color:var(--orange); box-shadow:0 0 0 1px var(--orange-glow),0 8px 40px var(--orange-glow); }
.t-head-featured { background:linear-gradient(135deg,var(--orange-ghost),rgba(107,36,96,.08)); }
.t-price-featured { color:var(--orange); }
.t-perf-hole { background:var(--bg); }
.t-perf-line { border-color:var(--border); }
.t-btn-outline-styled { border-color:var(--border); color:var(--text-2); }
.t-btn-outline-styled:hover { border-color:var(--orange); color:var(--orange); background:var(--orange-ghost); transform:translateY(-1px); }
.t-btn-fill-styled { background:var(--orange); box-shadow:0 0 18px var(--orange-glow); }
.t-btn-fill-styled:hover { background:var(--orange-dim); box-shadow:0 0 32px var(--orange-glow); transform:translateY(-1px); }

/* Feedback */
.fb-card-styled { background:var(--surface); border-color:var(--border-soft); transition:border-color .25s,transform .25s,background var(--trans),box-shadow .25s; }
.fb-card-styled:hover { border-color:var(--gold); transform:translateY(-3px); box-shadow:var(--card-glow); }
.fb-quote { color:var(--orange); opacity:.3; }
.fb-stars { color:var(--gold); }
.fba { background:var(--orange); color:#fff; }
.fbb { background:var(--gold-ghost); color:var(--gold); border:1px solid var(--border); }
.fbc { background:rgba(107,36,96,.1); color:#6b2460; border:1px solid rgba(107,36,96,.2); }
.fbd { background:var(--orange-ghost); color:var(--orange); border:1px solid var(--border); }

/* CTA */
.cta-box-styled { background:var(--surface); border-color:var(--border); box-shadow:var(--shadow-lg); position:relative; overflow:hidden; }
.cta-box-styled::before { content:''; position:absolute; top:0; left:5%; right:5%; height:2px; background:linear-gradient(90deg,transparent,var(--orange),var(--gold),#6b2460,transparent); box-shadow:0 0 20px var(--orange-glow); }
.cta-box-styled::after { content:''; position:absolute; bottom:-60px; left:50%; transform:translateX(-50%); width:300px; height:120px; background:radial-gradient(ellipse,var(--orange-glow),transparent 70%); filter:blur(30px); pointer-events:none; }
.cta-input-styled { background:var(--bg2); border-color:var(--border); color:var(--text); transition:border-color .2s,box-shadow .2s,background var(--trans),color var(--trans); }
.cta-input-styled:focus { border-color:var(--orange); box-shadow:0 0 0 3px var(--orange-glow); outline:none; }
.cta-input-styled::placeholder { color:var(--text-3); }

/* Footer */
footer { border-color:var(--border-soft); transition:background var(--trans),border-color var(--trans); }
.f-bottom-line { border-color:var(--border-soft); }

/* Ticker */
.ticker-bg { background:var(--plum-dim); border-color:rgba(201,150,58,.15); }

/* Stats */
.stat-item { border-color:var(--border-soft); transition:background .25s,border-color var(--trans); }
.stat-item:hover { background:var(--orange-ghost); }

/* Scroll reveal */
.reveal { opacity:0; transform:translateY(26px); transition:opacity .65s var(--ease),transform .65s var(--ease); }
.reveal.visible { opacity:1; transform:translateY(0); }

/* Transitions */
.theme-trans { transition:background var(--trans),color var(--trans),border-color var(--trans); }

@keyframes orb-float { from{transform:translate(0,0) scale(1)} to{transform:translate(40px,30px) scale(1.08)} }
@keyframes pulse-diamond { 0%,100%{opacity:1;transform:rotate(45deg) scale(1)} 50%{opacity:.5;transform:rotate(45deg) scale(1.5)} }
@keyframes ticker { from{transform:translateX(0)} to{transform:translateX(-50%)} }
@keyframes fadeUp { from{opacity:0;transform:translateY(24px)} to{opacity:1;transform:translateY(0)} }
</style>
</head>
<body class="font-body">

<!-- ══ NAV ══ -->
<nav class="t-nav fixed top-0 left-0 right-0 z-50 h-16 flex items-center justify-between px-14 border-b">
  <a href="#" class="font-display font-bold text-2xl t-text no-underline flex items-baseline gap-0.5" style="letter-spacing:.02em">
    <span class="t-orange italic">Event</span><span class="t-gold">Mesh</span>
  </a>

  <ul class="hidden md:flex gap-10 list-none absolute left-1/2 -translate-x-1/2">
    <?php foreach(['events'=>'Events','venues'=>'Venues','tickets'=>'Tickets','feedback'=>'Reviews'] as $id=>$label): ?>
    <li><a href="#<?php echo $id ?>" class="nav-link-item text-xs font-semibold tracking-widest uppercase no-underline"><?php echo $label ?></a></li>
    <?php endforeach; ?>
  </ul>

  <div class="flex items-center gap-4">
    <!-- Theme Toggle -->
    <button id="themeToggle" aria-label="Toggle theme"
      class="relative w-14 h-7 rounded-full border t-border cursor-pointer outline-none flex-shrink-0 t-bg2 theme-trans hover:border-gold-DEFAULT">
      <div class="absolute inset-0 flex items-center justify-between px-1.5 pointer-events-none text-xs">
        <span>☀️</span><span>🌙</span>
      </div>
      <div class="tt-thumb absolute top-[3px] left-[3px] w-[22px] h-[22px] rounded-full"></div>
    </button>
    <a href="#" class="text-xs font-medium t-text-2 no-underline tracking-wide hover:text-orange-DEFAULT transition-colors">Sign In</a>
    <a href="#cta" class="btn-orange text-white text-xs font-semibold tracking-wider uppercase no-underline px-5 py-2 rounded-sm">Register</a>
  </div>
</nav>

<!-- ══ HERO ══ -->
<div class="hero grid md:grid-cols-2 min-h-screen pt-16 relative overflow-hidden">
  <div class="hero-wash absolute inset-0 pointer-events-none"></div>
  <div class="hero-lines absolute inset-0 pointer-events-none"></div>
  <div class="orb orb-1 absolute w-[500px] h-[500px] -top-20 -left-28"></div>
  <div class="orb orb-2 absolute w-[380px] h-[380px] -bottom-16 -right-16"></div>
  <div class="orb orb-3 absolute w-[260px] h-[260px] top-2/5 left-1/3"></div>

  <!-- Hero Left -->
  <div class="hero-left flex flex-col justify-center px-12 md:px-20 py-24 relative z-10 border-r t-border-soft theme-trans">
    <div class="hero-eyebrow flex items-center gap-2.5 text-xs font-semibold tracking-[.2em] uppercase t-gold mb-8" style="animation:fadeUp .7s both">
      <div class="eyebrow-line w-8 h-px"></div>
      Where Every Event Begins
      <div class="eyebrow-diamond w-1.5 h-1.5"></div>
    </div>

    <h1 class="font-display font-bold leading-none tracking-tight mb-7" style="font-size:clamp(3.2rem,6vw,5.6rem);animation:fadeUp .7s .1s both">
      <span class="block">Discover.</span>
      <span class="block italic t-orange">Connect.</span>
      <span class="block t-gold">Experience.</span>
    </h1>

    <p class="t-text-2 leading-relaxed max-w-md mb-10 theme-trans" style="font-size:1rem;animation:fadeUp .7s .2s both">
      EventMesh brings people, venues, and moments together — your gateway to music, culture, business, and every unforgettable event in between.
    </p>

    <div class="flex gap-3 flex-wrap" style="animation:fadeUp .7s .3s both">
      <a href="#events" class="btn-orange text-white font-semibold px-8 py-3.5 rounded-sm text-sm tracking-wide no-underline">Browse Events</a>
      <a href="#how" class="btn-ghost-styled border text-sm font-medium px-8 py-3.5 rounded-sm no-underline">How It Works</a>
    </div>

    <!-- Sunset arc -->
    <div class="sunset-arc absolute -bottom-10 -right-10 w-48 h-48 border-2 rounded-full pointer-events-none"></div>
  </div>

  <!-- Hero Right -->
  <div class="t-bg2 flex flex-col justify-center px-12 md:px-14 py-20 gap-4 relative z-10 theme-trans">
    <div class="text-xs font-semibold tracking-[.18em] uppercase t-text-3 theme-trans">Upcoming Highlights</div>
    <?php foreach($sidebar_events as $i => $se): ?>
    <?php if($i > 0): ?>
    <hr class="border-t t-line border-0 theme-trans">
    <?php endif; ?>
    <div class="sb-thumb-styled grid border rounded-sm overflow-hidden t-surface theme-trans" style="grid-template-columns:96px 1fr">
      <div class="<?php echo $se['thumb'] ?> flex items-center justify-center text-4xl" style="min-height:92px"><?php echo $se['emoji'] ?></div>
      <div class="p-3.5">
        <div class="text-xs font-semibold tracking-wider uppercase t-orange mb-1 theme-trans"><?php echo htmlspecialchars($se['cat']) ?></div>
        <div class="font-display font-semibold text-base leading-tight t-text mb-1 theme-trans"><?php echo htmlspecialchars($se['title']) ?></div>
        <div class="text-xs t-text-3 flex gap-3 theme-trans">
          <span><?php echo htmlspecialchars($se['venue']) ?></span>
          <span><?php echo htmlspecialchars($se['price']) ?></span>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- ══ TICKER ══ -->
<div class="ticker-bg overflow-hidden whitespace-nowrap border-t border-b py-2.5 theme-trans">
  <div class="inline-flex gap-12" style="animation:ticker 28s linear infinite">
    <?php $all_items = array_merge($ticker_items, $ticker_items); ?>
    <?php foreach($all_items as $item): ?>
    <span class="text-xs font-semibold tracking-[.14em] uppercase text-white/85 flex items-center gap-3">
      <?php echo htmlspecialchars($item) ?>
      <span class="opacity-40 text-xs">◆</span>
    </span>
    <?php endforeach; ?>
  </div>
</div>

<!-- ══ STATS ══ -->
<div class="t-bg2 border-b flex justify-center flex-wrap theme-trans" style="border-color:var(--border-soft)">
  <?php foreach($stats as $s): ?>
  <div class="stat-item text-center px-16 py-10 border-r last:border-r-0">
    <div class="font-display font-bold text-5xl leading-none tracking-tight t-orange"><?php echo $s['n'] ?></div>
    <div class="text-xs font-semibold tracking-[.14em] uppercase t-text-3 mt-1.5 theme-trans"><?php echo $s['l'] ?></div>
  </div>
  <?php endforeach; ?>
</div>

<!-- ══ EVENTS ══ -->
<section id="events" class="t-bg theme-trans py-28 px-5 md:px-20">
  <div class="max-w-6xl mx-auto">
    <div class="eyebrow reveal flex items-center gap-2 text-xs font-semibold tracking-[.2em] uppercase t-gold mb-3">
      <span class="inline-block w-5 h-px eyebrow-line"></span>Curated Experiences<span class="text-orange-DEFAULT opacity-60">◆</span>
    </div>
    <h2 class="reveal font-display font-bold tracking-tight mb-3 t-text theme-trans" style="font-size:clamp(2.2rem,3.8vw,3.4rem);line-height:1.06">Events Worth<br><em class="t-orange not-italic italic">Your Time</em></h2>
    <p class="reveal t-text-2 leading-relaxed max-w-xl mb-14 theme-trans" style="font-size:.97rem">Hand-picked across every category — verified venues, clear pricing, instant booking.</p>

    <div class="reveal grid gap-5" style="grid-template-columns:1.5fr 1fr 1fr;grid-template-rows:auto auto">
      <?php foreach($events as $ev): ?>
      <div class="ev-card-styled border rounded-xl overflow-hidden cursor-pointer <?php echo $ev['main'] ? 'row-span-2' : '' ?>">
        <div class="<?php echo $ev['vis'] ?> ev-vis-line flex items-center justify-center relative <?php echo $ev['main'] ? 'text-8xl' : 'text-5xl' ?>" style="height:<?php echo $ev['main'] ? '275px' : '185px' ?>">
          <?php echo $ev['emoji'] ?>
          <div class="absolute top-3 left-3 bg-orange-DEFAULT text-white text-xs font-bold tracking-wider uppercase px-3 py-1 rounded-sm" style="background:var(--orange)"><?php echo $ev['badge'] ?></div>
        </div>
        <div class="p-<?php echo $ev['main'] ? '8' : '6' ?>">
          <div class="text-xs font-semibold tracking-wider uppercase t-gold mb-1 theme-trans"><?php echo htmlspecialchars($ev['cat']) ?></div>
          <div class="font-display font-semibold t-text leading-snug mb-2 theme-trans" style="font-size:<?php echo $ev['main'] ? '1.55rem' : '1.1rem' ?>"><?php echo htmlspecialchars($ev['title']) ?></div>
          <div class="text-sm t-text-2 leading-relaxed mb-3 theme-trans"><?php echo htmlspecialchars($ev['meta']) ?><?php if($ev['desc']): ?><br><?php echo htmlspecialchars($ev['desc']) ?><?php endif; ?></div>
          <div class="flex items-center justify-between border-t t-line pt-3.5 theme-trans">
            <div class="font-display font-bold text-xl t-orange theme-trans"><?php echo $ev['price'] ?></div>
            <a href="#tickets" class="text-xs font-semibold tracking-wider uppercase t-gold no-underline hover:text-orange-DEFAULT transition-colors">
              <?php echo $ev['main'] ? 'Get Tickets →' : 'Book →' ?>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ FEATURES ══ -->
<section id="features" class="t-bg2 theme-trans py-28 px-5 md:px-20">
  <div class="max-w-6xl mx-auto">
    <div class="reveal flex items-start justify-between gap-12 mb-14 flex-wrap">
      <div>
        <div class="eyebrow flex items-center gap-2 text-xs font-semibold tracking-[.2em] uppercase t-gold mb-3">
          <span class="inline-block w-5 h-px eyebrow-line"></span>Platform<span class="text-orange-DEFAULT opacity-60">◆</span>
        </div>
        <h2 class="font-display font-bold tracking-tight t-text theme-trans" style="font-size:clamp(2.2rem,3.8vw,3.4rem);line-height:1.06">Built on a<br><em class="t-orange not-italic italic">Solid Foundation</em></h2>
      </div>
      <p class="t-text-2 leading-relaxed max-w-xs mt-16 theme-trans" style="font-size:.94rem">A robust 7-table schema powers every interaction — users, events, venues, tickets, orders, payments, and feedback.</p>
    </div>
    <div class="reveal grid grid-cols-1 md:grid-cols-3 gap-5">
      <?php foreach($features as $f): ?>
      <div class="feat-card-styled border rounded-xl p-8">
        <div class="feat-icon-box border w-12 h-12 rounded-md flex items-center justify-center text-2xl mb-5"><?php echo $f['icon'] ?></div>
        <div class="font-display font-semibold t-gold mb-1 theme-trans"><?php echo $f['num'] ?></div>
        <div class="font-display font-bold text-lg t-text mb-1.5 theme-trans"><?php echo htmlspecialchars($f['title']) ?></div>
        <p class="t-text-2 leading-relaxed theme-trans" style="font-size:.83rem"><?php echo htmlspecialchars($f['text']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ HOW IT WORKS ══ -->
<section id="how" class="t-bg theme-trans py-28 px-5 md:px-20">
  <div class="max-w-6xl mx-auto">
    <div class="eyebrow reveal flex items-center gap-2 text-xs font-semibold tracking-[.2em] uppercase t-gold mb-3">
      <span class="inline-block w-5 h-px eyebrow-line"></span>Process<span class="text-orange-DEFAULT opacity-60">◆</span>
    </div>
    <h2 class="reveal font-display font-bold tracking-tight mb-3 t-text theme-trans" style="font-size:clamp(2.2rem,3.8vw,3.4rem);line-height:1.06">Four Steps to<br><em class="t-orange not-italic italic">Your Next Event</em></h2>
    <p class="reveal t-text-2 leading-relaxed max-w-xl mb-14 theme-trans" style="font-size:.97rem">From discovery to doors opening — the EventMesh experience is seamless.</p>
    <div class="reveal grid grid-cols-1 md:grid-cols-4 border rounded-xl overflow-hidden t-border-soft">
      <?php foreach($steps as $i => $st): ?>
      <div class="step-styled border-r last:border-r-0 t-border-soft p-10 theme-trans">
        <div class="step-num text-6xl leading-none mb-5" style="font-size:3.8rem"><?php echo $st['num'] ?></div>
        <div class="font-display font-bold t-text mb-2 theme-trans" style="font-size:1.12rem"><?php echo htmlspecialchars($st['title']) ?></div>
        <p class="t-text-2 leading-relaxed theme-trans" style="font-size:.84rem"><?php echo htmlspecialchars($st['text']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ VENUES ══ -->
<section id="venues" class="t-bg2 theme-trans py-28 px-5 md:px-20">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
    <div class="reveal md:sticky top-20">
      <div class="eyebrow flex items-center gap-2 text-xs font-semibold tracking-[.2em] uppercase t-gold mb-3">
        <span class="inline-block w-5 h-px eyebrow-line"></span>Venues<span class="text-orange-DEFAULT opacity-60">◆</span>
      </div>
      <h2 class="font-display font-bold tracking-tight mb-3 t-text theme-trans" style="font-size:clamp(2.2rem,3.8vw,3.4rem);line-height:1.06">The Right Space<br>for <em class="t-orange not-italic italic">Every Crowd</em></h2>
      <p class="t-text-2 leading-relaxed mb-8 theme-trans" style="font-size:.97rem">From 500-seat studios to 20,000-capacity arenas — our venue network spans Metro Manila and beyond.</p>
      <a href="#events" class="btn-orange text-white font-semibold px-8 py-3.5 rounded-sm text-sm tracking-wide no-underline inline-block">Find an Event</a>
    </div>
    <div class="reveal flex flex-col gap-3">
      <?php foreach($venues as $v): ?>
      <div class="venue-row-styled border rounded-sm flex items-center gap-5 px-5 py-4">
        <div class="venue-icon-box border w-11 h-11 rounded-md flex items-center justify-center text-2xl flex-shrink-0"><?php echo $v['icon'] ?></div>
        <div>
          <div class="font-display font-bold t-text theme-trans" style="font-size:.95rem"><?php echo htmlspecialchars($v['name']) ?></div>
          <div class="text-xs t-text-3 theme-trans"><?php echo htmlspecialchars($v['info']) ?></div>
        </div>
        <div class="venue-cap-styled border ml-auto text-xs font-semibold tracking-wide px-3 py-1 rounded"><?php echo $v['cap'] ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ TICKETS ══ -->
<section id="tickets" class="t-bg theme-trans py-28 px-5 md:px-20">
  <div class="max-w-6xl mx-auto">
    <div class="eyebrow reveal flex items-center gap-2 text-xs font-semibold tracking-[.2em] uppercase t-gold mb-3">
      <span class="inline-block w-5 h-px eyebrow-line"></span>Ticket Types<span class="text-orange-DEFAULT opacity-60">◆</span>
    </div>
    <h2 class="reveal font-display font-bold tracking-tight mb-3 t-text theme-trans" style="font-size:clamp(2.2rem,3.8vw,3.4rem);line-height:1.06">Pick Your<br><em class="t-orange not-italic italic">Experience</em></h2>
    <p class="reveal t-text-2 leading-relaxed max-w-xl mb-14 theme-trans" style="font-size:.97rem">Every event features flexible tiers — from general admission to full premium packages.</p>
    <div class="reveal grid grid-cols-1 md:grid-cols-3 gap-6">
      <?php foreach($tickets as $t): ?>
      <div class="t-card-styled border rounded-xl overflow-hidden <?php echo $t['featured'] ? 't-card-featured' : '' ?>">
        <div class="t-head-<?php echo $t['featured'] ? 'featured' : 'default' ?> p-8 pb-6 border-b t-border" style="border-bottom-style:dashed">
          <div class="text-xs font-semibold tracking-[.18em] uppercase t-text-3 mb-3 theme-trans"><?php echo htmlspecialchars($t['type']) ?></div>
          <div class="font-display font-bold leading-none tracking-tight mb-2 theme-trans <?php echo $t['featured'] ? 't-price-featured' : 't-text' ?>" style="font-size:3.2rem">
            <sup class="text-lg font-light align-super mr-0.5 t-text-3" style="font-family:'Jost',sans-serif">₱</sup><?php echo $t['price'] ?>
          </div>
          <div class="text-xs t-text-3 theme-trans"><?php echo htmlspecialchars($t['note']) ?></div>
        </div>
        <!-- perforation -->
        <div class="flex items-center">
          <div class="t-perf-hole w-4 h-4 rounded-full flex-shrink-0 -ml-2"></div>
          <div class="t-perf-line flex-1 border-t" style="border-top-style:dashed"></div>
          <div class="t-perf-hole w-4 h-4 rounded-full flex-shrink-0 -mr-2"></div>
        </div>
        <div class="p-8">
          <ul class="list-none">
            <?php foreach($t['perks'] as $perk): ?>
            <li class="flex items-center gap-3 text-sm t-text-2 py-2 border-b t-line last:border-b-0 theme-trans">
              <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background:var(--gold)"></span>
              <?php echo htmlspecialchars($perk) ?>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="px-8 pb-8">
          <?php if($t['featured']): ?>
          <a href="#cta" class="t-btn-fill-styled block text-center text-white py-3.5 rounded-sm text-sm font-semibold tracking-wider uppercase no-underline transition-all"><?php echo 'Book Now' ?></a>
          <?php else: ?>
          <a href="#cta" class="t-btn-outline-styled block text-center border py-3.5 rounded-sm text-sm font-semibold tracking-wider uppercase no-underline transition-all"><?php echo 'Book Now' ?></a>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ FEEDBACK ══ -->
<section id="feedback" class="t-bg2 theme-trans py-28 px-5 md:px-20">
  <div class="max-w-6xl mx-auto">
    <div class="eyebrow reveal flex items-center gap-2 text-xs font-semibold tracking-[.2em] uppercase t-gold mb-3">
      <span class="inline-block w-5 h-px eyebrow-line"></span>Reviews<span class="text-orange-DEFAULT opacity-60">◆</span>
    </div>
    <h2 class="reveal font-display font-bold tracking-tight mb-3 t-text theme-trans" style="font-size:clamp(2.2rem,3.8vw,3.4rem);line-height:1.06">Voices from the<br><em class="t-orange not-italic italic">EventMesh Community</em></h2>
    <p class="reveal t-text-2 leading-relaxed max-w-xl mb-14 theme-trans" style="font-size:.97rem">Real ratings and comments from verified attendees.</p>
    <div class="reveal grid grid-cols-1 md:grid-cols-2 gap-5">
      <?php foreach($reviews as $r): ?>
      <div class="fb-card-styled border rounded-xl p-8 <?php echo $r['wide'] ? 'md:col-span-2 grid md:grid-cols-2 gap-10 items-center' : '' ?>">
        <?php if($r['wide']): ?>
        <div>
          <div class="fb-quote font-display font-bold leading-none mb-3" style="font-size:5rem">"</div>
          <p class="font-display italic t-text leading-relaxed mb-6 theme-trans" style="font-size:1.06rem"><?php echo htmlspecialchars($r['text']) ?></p>
        </div>
        <div>
          <div class="fb-stars text-base tracking-wider mb-4"><?php echo str_repeat('★',$r['stars']) . ($r['stars']<5 ? '☆' : '') ?></div>
          <div class="flex items-center gap-3">
            <div class="<?php echo $r['av_class'] ?> w-10 h-10 rounded-full flex items-center justify-center font-display font-bold text-lg flex-shrink-0"><?php echo $r['av'] ?></div>
            <div>
              <div class="font-semibold t-text theme-trans" style="font-size:.9rem"><?php echo htmlspecialchars($r['name']) ?></div>
              <div class="text-xs t-text-3 theme-trans"><?php echo htmlspecialchars($r['event']) ?></div>
            </div>
          </div>
        </div>
        <?php else: ?>
        <div class="fb-stars text-sm tracking-wider mb-4"><?php echo str_repeat('★',$r['stars']) . ($r['stars']<5 ? '☆' : '') ?></div>
        <p class="font-display italic t-text leading-relaxed mb-6 theme-trans" style="font-size:1.02rem"><?php echo htmlspecialchars($r['text']) ?></p>
        <div class="flex items-center gap-3">
          <div class="<?php echo $r['av_class'] ?> w-10 h-10 rounded-full flex items-center justify-center font-display font-bold text-lg flex-shrink-0"><?php echo $r['av'] ?></div>
          <div>
            <div class="font-semibold t-text theme-trans" style="font-size:.9rem"><?php echo htmlspecialchars($r['name']) ?></div>
            <div class="text-xs t-text-3 theme-trans"><?php echo htmlspecialchars($r['event']) ?></div>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ CTA ══ -->
<section id="cta" class="t-bg theme-trans py-32 px-5 md:px-20">
  <div class="max-w-6xl mx-auto">
    <div class="cta-box-styled border rounded-2xl px-8 md:px-14 py-20 max-w-2xl mx-auto text-align-center" style="text-align:center">
      <div class="eyebrow flex items-center justify-center gap-2 text-xs font-semibold tracking-[.2em] uppercase t-gold mb-3">
        <span class="inline-block w-5 h-px eyebrow-line"></span>Join the Community<span class="text-orange-DEFAULT opacity-60">◆</span>
      </div>
      <h2 class="font-display font-bold tracking-tight mb-3 t-text theme-trans" style="font-size:clamp(2rem,4vw,2.9rem);line-height:1.06">Your Next Favourite<br><em class="t-orange not-italic italic">Event Awaits</em></h2>
      <p class="t-text-2 leading-relaxed mb-10 max-w-md mx-auto theme-trans" style="font-size:1rem">Sign up to EventMesh and get early access to new events, exclusive pre-sale tickets, and personalised recommendations.</p>
      <div class="flex gap-3 max-w-md mx-auto flex-wrap justify-center">
        <input type="email" id="ctaEmail" placeholder="Your email address"
          class="cta-input-styled flex-1 min-w-48 border rounded-sm px-5 py-3.5 text-sm font-body">
        <button id="ctaBtn" class="btn-orange text-white font-semibold px-7 py-3.5 rounded-sm text-sm tracking-wide">Get Early Access</button>
      </div>
    </div>
  </div>
</section>

<!-- ══ FOOTER ══ -->
<footer class="t-bg2 border-t theme-trans px-5 md:px-20 pt-16 pb-10">
  <div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-10 mb-12">
      <div>
        <a href="#" class="font-display font-bold text-3xl no-underline block mb-3" style="letter-spacing:.02em">
          <span class="t-orange italic">Event</span><span class="t-gold">Mesh</span>
        </a>
        <p class="t-text-3 leading-relaxed theme-trans" style="font-size:.86rem;max-width:220px">Your gateway to unforgettable events — discover, book, and experience with ease.</p>
      </div>
      <?php foreach([
        'Platform' => ['Browse Events'=>'#events','Venues'=>'#venues','Tickets'=>'#tickets','Reviews'=>'#feedback'],
        'Account'  => ['Sign Up'=>'#','Log In'=>'#','My Orders'=>'#','My Tickets'=>'#'],
        'Support'  => ['Help Center'=>'#','Contact Us'=>'#','Privacy Policy'=>'#','Terms of Use'=>'#'],
      ] as $heading => $links): ?>
      <div>
        <h5 class="text-xs font-semibold tracking-[.18em] uppercase t-gold mb-5 theme-trans"><?php echo $heading ?></h5>
        <ul class="list-none">
          <?php foreach($links as $label => $href): ?>
          <li class="mb-2.5">
            <a href="<?php echo $href ?>" class="t-text-3 no-underline text-sm hover:text-orange-DEFAULT transition-colors theme-trans"><?php echo htmlspecialchars($label) ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="f-bottom-line border-t pt-8 flex items-center justify-between flex-wrap gap-4">
      <p class="text-xs t-text-3 theme-trans">© <?php echo date('Y') ?> EventMesh. All rights reserved.</p>
      <div class="text-xs t-text-3 text-right leading-relaxed theme-trans">
        Gabriel D. Castillo · Pauleen Marianne C. Balahadia<br>
        Thristan Ian O. De Luna · Lou Juseve F. Evora
      </div>
    </div>
  </div>
</footer>

<script>
// ── THEME TOGGLE ──
const toggle = document.getElementById('themeToggle');
const html   = document.documentElement;
const saved  = localStorage.getItem('em-theme') || 'dark';
html.setAttribute('data-theme', saved);

toggle.addEventListener('click', () => {
  const next = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
  html.setAttribute('data-theme', next);
  localStorage.setItem('em-theme', next);
});

// ── SCROLL REVEAL ──
const obs = new IntersectionObserver(entries => {
  entries.forEach((e, i) => {
    if (e.isIntersecting) {
      setTimeout(() => e.target.classList.add('visible'), i * 70);
      obs.unobserve(e.target);
    }
  });
}, { threshold: 0.07 });
document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

// ── CTA ──
document.getElementById('ctaBtn').addEventListener('click', () => {
  const input = document.getElementById('ctaEmail');
  if (input.value.includes('@')) {
    input.value = '';
    input.placeholder = '🎉 You\'re on the list!';
    setTimeout(() => input.placeholder = 'Your email address', 3000);
  } else {
    input.style.borderColor = '#e8632a';
    input.style.boxShadow = '0 0 0 3px rgba(232,99,42,.18)';
    setTimeout(() => { input.style.borderColor = ''; input.style.boxShadow = ''; }, 1500);
  }
});
</script>
</body>
</html>
