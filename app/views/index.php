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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Records</title>
  <style>
    .page-wrap {
      max-width: 1100px;
      margin: 0 auto;
      padding: 6rem 1.5rem 3rem;
    }

    .card {
      border-radius: 1.25rem;
      overflow: hidden;
      border: 1px solid rgba(99,102,241,0.12);
    }

    .card-header {
      padding: 1.75rem 2rem 1.25rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid rgba(99,102,241,0.1);
    }

    html.dark .card { border-color: rgba(99,102,241,0.18); }
    html.dark .card-header { border-color: rgba(99,102,241,0.15); }

    table { width: 100%; border-collapse: collapse; }
    thead tr {
      background: #6366f1;
      color: #fff;
    }
    th {
      padding: 12px 16px;
      text-align: left;
      font-size: 0.75rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      font-weight: 600;
    }
    td {
      padding: 12px 16px;
      font-size: 0.875rem;
      border-bottom: 1px solid rgba(99,102,241,0.08);
    }
    html.dark td { border-color: rgba(99,102,241,0.12); color: #d4d4d8; }

    tbody tr { transition: background 0.15s; }
    tbody tr:hover { background: rgba(99,102,241,0.05); }
    html.dark tbody tr:hover { background: rgba(99,102,241,0.1); }

    .btn-edit {
      display: inline-block;
      padding: 4px 12px;
      border-radius: 6px;
      font-size: 0.78rem;
      font-weight: 500;
      background: rgba(99,102,241,0.12);
      color: #6366f1;
      text-decoration: none;
      transition: all 0.15s;
      border: 1px solid rgba(99,102,241,0.2);
    }
    .btn-edit:hover { background: #6366f1; color: #fff; }

    .btn-del {
      display: inline-block;
      padding: 4px 12px;
      border-radius: 6px;
      font-size: 0.78rem;
      font-weight: 500;
      background: rgba(239,68,68,0.1);
      color: #ef4444;
      text-decoration: none;
      transition: all 0.15s;
      border: 1px solid rgba(239,68,68,0.18);
    }
    .btn-del:hover { background: #ef4444; color: #fff; }

    .btn-add {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 8px 20px;
      border-radius: 8px;
      background: #6366f1;
      color: #fff;
      font-size: 0.875rem;
      font-weight: 500;
      text-decoration: none;
      transition: background 0.2s;
      letter-spacing: 0.02em;
    }
    .btn-add:hover { background: #4f46e5; }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      padding: 2px 8px;
      border-radius: 99px;
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.04em;
    }
    .badge-m { background: rgba(59,130,246,0.12); color: #3b82f6; }
    .badge-f { background: rgba(236,72,153,0.12); color: #ec4899; }

    .empty-state {
      padding: 4rem 2rem;
      text-align: center;
      color: #a1a1aa;
    }
  </style>
</head>
<body class="bg-gray-50 dark:bg-zinc-950 min-h-screen">

<div class="page-wrap">
  <div class="card bg-white dark:bg-zinc-900">

    <div class="card-header">
      <div>
        <p class="brand-font" style="font-size:0.7rem;letter-spacing:0.12em;text-transform:uppercase;color:#6366f1;margin-bottom:2px;">Database</p>
        <h1 class="brand-font" style="font-size:1.5rem;font-weight:800;" class="text-zinc-900 dark:text-white">User Records</h1>
      </div>
      <a href="insert" class="btn-add">+ Add Record</a>
    </div>

    <?php
      $stmt = $pdo->query('SELECT * FROM account');
      $rows = $stmt->fetchAll();
    ?>

    <?php if(count($rows) === 0): ?>
      <div class="empty-state">
        <p style="font-size:2rem;margin-bottom:0.5rem;">📭</p>
        <p style="font-size:1rem;font-weight:500;margin-bottom:0.5rem;" class="dark:text-zinc-400">No records found</p>
        <a href="insert" style="color:#6366f1;text-decoration:none;font-size:0.875rem;">Add your first record →</a>
      </div>
    <?php else: ?>
      <div style="overflow-x:auto;">
        <table>
          <thead>
            <tr>
              <th>User ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Password Hash</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($rows as $row): ?>
            <tr>
              <td style="color:#a1a1aa;font-size:0.78rem;">#<?= htmlspecialchars($row['user_id']) ?></td>
              <td style="font-weight:500;" class="dark:text-zinc-200"><?= htmlspecialchars($row['name']) ?></td>
              <td class="dark:text-zinc-300"><?= htmlspecialchars($row['email']) ?></td>
              <td style="color:#71717a;" class="dark:text-zinc-400"><?= htmlspecialchars($row['phone_number']) ?></td>
              <td class="dark:text-zinc-400" style="max-width:160px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"><?= htmlspecialchars($row['password']) ?></td>
              <td style="display:flex;gap:6px;align-items:center;">
                <a href="edit?id=<?= $row['user_id'] ?>" class="btn-edit">Edit</a>
                <a href="delete?id=<?= $row['user_id'] ?>" class="btn-del" onclick="return confirm('Delete this record?')">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div style="padding:0.85rem 2rem;text-align:right;font-size:0.78rem;color:#a1a1aa;border-top:1px solid rgba(99,102,241,0.08);">
        <?= count($rows) ?> record<?= count($rows) !== 1 ? 's' : '' ?> total
      </div>
    <?php endif; ?>

  </div>
</div>

</body>
</html>
