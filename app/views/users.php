<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users List</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: linear-gradient(160deg, #0f0f1a 0%, #1a1a2e 100%);
            padding: 50px 20px;
            color: #f1f1f7;
            min-height: 100vh;
        }
        .container {
            max-width: 950px;
            margin: 0 auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .header h1 {
            font-size: 32px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        .badge {
            background: linear-gradient(135deg, #7c6cff, #4f46e5);
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            padding: 8px 18px;
            border-radius: 999px;
            box-shadow: 0 4px 14px rgba(124, 108, 255, 0.4);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 18px;
        }
        .user-card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 18px;
            padding: 22px;
            backdrop-filter: blur(10px);
            transition: transform 0.15s ease, border-color 0.15s ease;
        }
        .user-card:hover {
            transform: translateY(-3px);
            border-color: rgba(124, 108, 255, 0.5);
        }
        .top-row {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }
        .avatar {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: linear-gradient(135deg, #7c6cff, #4f46e5);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 800;
            color: #fff;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(124, 108, 255, 0.35);
        }
        .name {
            font-size: 19px;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
        }
        .username {
            font-size: 13px;
            font-weight: 600;
            color: #9b95ff;
            margin-top: 2px;
        }
        .divider {
            height: 1px;
            background: rgba(255, 255, 255, 0.08);
            margin: 14px 0;
        }
        .info-row {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #c4c4d6;
        }
        .info-row svg {
            flex-shrink: 0;
            opacity: 0.7;
        }
        .empty {
            text-align: center;
            padding: 60px;
            color: #8a8ba3;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Users</h1>
            <span class="badge"><?= count($users) ?> total</span>
        </div>

        <?php if (!empty($users)): ?>
        <div class="grid">
            <?php foreach ($users as $user): ?>
            <div class="user-card">
                <div class="top-row">
                    <div class="avatar"><?= strtoupper(substr($user['firstname'], 0, 1)) ?></div>
                    <div>
                        <div class="name"><?= htmlspecialchars($user['firstname'] . ' ' . $user['lastname']) ?></div>
                        <div class="username">@<?= htmlspecialchars($user['username']) ?></div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="info-row">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16v16H4z" stroke="none"/>
                        <path d="M22 6l-10 7L2 6"/>
                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                    </svg>
                    <?= htmlspecialchars($user['email']) ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <div class="empty">No users found.</div>
        <?php endif; ?>
    </div>
</body>
</html>