<!-- EventMesh shared auth style -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  darkMode: ['attribute', '[data-theme="dark"]'],
  theme: {
    extend: {
      fontFamily: { display: ['"Cormorant Garamond"','serif'], body: ['Jost','sans-serif'] },
      colors: { orange:{DEFAULT:'#e8632a',dim:'#c95020'}, gold:{DEFAULT:'#c9963a',light:'#e8b84b'}, plum:{DEFAULT:'#6b2460',dim:'#4a1942'} },
      animation: { 'orb-drift':'orb-drift 16s ease-in-out infinite alternate','orb-drift2':'orb-drift2 12s ease-in-out infinite alternate','fade-up':'fade-up .6s both','pulse-d':'pulse-d 2.5s ease-in-out infinite' }
    }
  }
}
</script>
<style>
:root{--orange:#e8632a;--orange-dim:#c95020;--gold:#c9963a;--bg:#faf3e8;--bg2:#f3e9d8;--surface:#fffdf8;--text:#1a0e08;--border:rgba(120,70,20,.22);--border-soft:rgba(226,188,128,.25);--line:rgba(149,85,33,.15);--input-bg:#fff;--shadow-lg:0 18px 40px rgba(180,110,40,.15);--card-glow:0 0 0 1px rgba(180,110,40,.20),0 10px 40px rgba(232,99,42,.08);}
[data-theme="dark"]{--bg:#110d0a;--bg2:#181210;--surface:#1e1612;--text:#f0e6d6;--border:rgba(201,150,58,.22);--border-soft:rgba(240,220,190,.10);--line:rgba(240,220,190,.07);--input-bg:rgba(38,30,24,.8);--shadow-lg:0 20px 64px rgba(0,0,0,.75);--card-glow:0 0 0 1px rgba(201,150,58,.18),0 12px 48px rgba(232,99,42,.10);}

*,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{background:var(--bg);color:var(--text);font-family:'Jost',sans-serif;font-weight:300;min-height:100vh;overflow-x:hidden;transition:background .36s,color .36s;}
.t-bg{background:var(--bg);} .t-bg2{background:var(--bg2);} .t-surface{background:var(--surface);} .t-text{color:var(--text);} .t-border{border-color:var(--border);} .form-card{background:var(--surface);border:1px solid var(--border);border-radius:24px;box-shadow:var(--card-glow);padding:1.5rem;}
.em-input{background:var(--input-bg);border:1px solid var(--border-soft);color:var(--text);width:100%;padding:.82rem 1.1rem;border-radius:6px;font-size:.92rem;outline:none;}
.btn-submit{background:var(--orange);color:#fff;padding:.92rem;border-radius:6px;font-size:.9rem;font-weight:600;letter-spacing:.06em;text-transform:uppercase;border:none;cursor:pointer;box-shadow:0 0 22px rgba(232,99,42,.22);} .btn-submit:hover{background:var(--orange-dim);}
.btn-add,.btn-edit,.btn-del{transition:.2s;}
.btn-add{background:var(--orange);color:#fff;display:inline-flex;padding:.6rem 1rem;border-radius:8px;text-decoration:none;font-weight:600;}
.btn-edit{background:rgba(99,102,241,.12);color:#6366f1;border:1px solid rgba(99,102,241,.2);padding:.3rem .75rem;border-radius:6px;text-decoration:none;}
.btn-del{background:rgba(239,68,68,.1);color:#ef4444;border:1px solid rgba(239,68,68,.18);padding:.3rem .75rem;border-radius:6px;text-decoration:none;}
</style>
