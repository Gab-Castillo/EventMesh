<?php
require_once __DIR__ . '/../../config.php';
try {
    $pdo = new PDO(
        'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET,
        DB_USERNAME,
        DB_PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

$error = '';

if (isset($_POST['name'])) {
    $check = $pdo->prepare("SELECT user_id FROM account WHERE email = ?");
    $check->execute([$_POST['email']]);
    if ($check->fetch()) {
        $error = 'This email already exists. Please use a different one.';
    } else {
        $stmt = $pdo->prepare("INSERT INTO account (name, email, phone_number, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$_POST['name'], $_POST['email'], $_POST['phone_number'], password_hash($_POST['password'], PASSWORD_DEFAULT)]);
        echo "<script>alert('User added successfully');window.location='index';</script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Record</title>
  <style>
    .form-card {
      max-width: 480px;
      width: 100%;
      border-radius: 1.25rem;
      border: 1px solid rgba(99,102,241,0.12);
      overflow: hidden;
    }
    html.dark .form-card { border-color: rgba(99,102,241,0.2); }

    .form-card-header {
      padding: 1.75rem 2rem 1.25rem;
      border-bottom: 1px solid rgba(99,102,241,0.1);
    }
    html.dark .form-card-header { border-color: rgba(99,102,241,0.15); }

    .form-body { padding: 1.75rem 2rem; display: flex; flex-direction: column; gap: 1.1rem; }

    .field-label {
      display: block;
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: #71717a;
      margin-bottom: 5px;
    }
    html.dark .field-label { color: #a1a1aa; }

    .field-input {
      width: 100%;
      padding: 9px 13px;
      border-radius: 8px;
      border: 1.5px solid #e4e4e7;
      background: #fafafa;
      font-size: 0.875rem;
      color: #18181b;
      font-family: 'DM Sans', sans-serif;
      transition: border-color 0.15s, box-shadow 0.15s;
      box-sizing: border-box;
      outline: none;
    }
    html.dark .field-input {
      background: #18181b;
      border-color: #3f3f46;
      color: #e4e4f0;
    }
    .field-input:focus {
      border-color: #6366f1;
      box-shadow: 0 0 0 3px rgba(99,102,241,0.12);
    }
    html.dark .field-input:focus { box-shadow: 0 0 0 3px rgba(99,102,241,0.2); }

    .radio-group { display: flex; gap: 1.25rem; align-items: center; }
    .radio-label {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 0.875rem;
      cursor: pointer;
      color: #52525b;
    }
    html.dark .radio-label { color: #a1a1aa; }

    .error-box {
      padding: 10px 14px;
      border-radius: 8px;
      background: rgba(239,68,68,0.08);
      border: 1px solid rgba(239,68,68,0.2);
      color: #ef4444;
      font-size: 0.85rem;
    }

    .btn-cancel {
      flex: 1;
      padding: 10px;
      border-radius: 8px;
      border: 1.5px solid #d4d4d8;
      background: transparent;
      font-size: 0.875rem;
      font-weight: 500;
      color: #71717a;
      text-decoration: none;
      text-align: center;
      transition: all 0.15s;
      font-family: 'DM Sans', sans-serif;
      cursor: pointer;
    }
    html.dark .btn-cancel { border-color: #3f3f46; color: #a1a1aa; }
    .btn-cancel:hover { border-color: #6366f1; color: #6366f1; }

    .btn-save {
      flex: 1;
      padding: 10px;
      border-radius: 8px;
      border: none;
      background: #6366f1;
      font-size: 0.875rem;
      font-weight: 500;
      color: #fff;
      cursor: pointer;
      transition: background 0.15s;
      font-family: 'DM Sans', sans-serif;
    }
    .btn-save:hover { background: #4f46e5; }
  </style>
</head>
<body class="bg-gray-50 dark:bg-zinc-950 min-h-screen" style="display:flex;align-items:center;justify-content:center;padding-top:4.5rem;padding-bottom:2rem;">

<div class="form-card bg-white dark:bg-zinc-900">
  <div class="form-card-header">
    <p class="brand-font" style="font-size:0.7rem;letter-spacing:0.12em;text-transform:uppercase;color:#6366f1;margin-bottom:3px;">New Entry</p>
    <h2 class="brand-font" style="font-size:1.4rem;font-weight:800;color:#18181b;" class="dark:text-white">Add Record</h2>
  </div>

  <div class="form-body">
    <?php if ($error): ?>
      <div class="error-box"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form action="" method="post" style="display:flex;flex-direction:column;gap:1rem;">
      <div>
        <label class="field-label">Name</label>
        <input type="text" name="name" placeholder="e.g. Juan dela Cruz"
          value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
          class="field-input" required>
      </div>

      <div>
        <label class="field-label">Email</label>
        <input type="email" name="email" placeholder="e.g. juan@email.com"
          value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
          class="field-input" required>
      </div>

      <div>
        <label class="field-label">Phone Number</label>
        <input type="tel" name="phone_number" placeholder="e.g. +639661392042"
          value="<?= htmlspecialchars($_POST['phone_number'] ?? '') ?>"
          class="field-input" required>
      </div>

      <div>
        <label class="field-label">Password</label>
        <input type="password" name="password" placeholder="Enter password" class="field-input" required>
      </div>

      <div style="display:flex;gap:0.75rem;margin-top:0.5rem;">
        <a href="index" class="btn-cancel">Cancel</a>
        <button type="submit" class="btn-save">Save Record</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
