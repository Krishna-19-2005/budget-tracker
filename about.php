<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome | Personal Budget Tracker</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #a18cd1, #fbc2eb);
    overflow-x: hidden;
    position: relative;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
    background: rgba(123, 44, 191, 0.7);
    backdrop-filter: blur(10px);
    color: white;
    position: relative;
    z-index: 10;
}

.header h1 {
    margin: 0;
    font-size: 22px;
}

.header .buttons a {
    color: white;
    background: #c77dff;
    text-decoration: none;
    padding: 10px 18px;
    border-radius: 8px;
    margin-left: 12px;
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
}

.header .buttons a:hover {
    background: #9d4edd;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.main {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    padding: 40px 20px;
}

.content {
    display: flex;
    align-items: center;
    gap: 40px;
    max-width: 1000px;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 40px;
    max-width: 450px;
    text-align: center;
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    animation: fadeIn 1s ease;
}

.card h2 {
    font-size: 32px;
    color: #fff;
    margin-bottom: 15px;
}

.card p {
    font-size: 16px;
    color: #f0f0f0;
    margin-bottom: 30px;
}

.card .get-started a {
    text-decoration: none;
    background: #8e6dfd;
    color: white;
    padding: 12px 26px;
    font-size: 16px;
    border-radius: 10px;
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
}

.card .get-started a:hover {
    background: #7b2cbf;
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.2);
}

.image-container img {
    max-width: 350px;
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    animation: fadeIn 1.5s ease;
}

.footer {
    text-align: center;
    padding: 15px;
    background: rgba(123, 44, 191, 0.7);
    backdrop-filter: blur(10px);
    color: white;
    font-size: 14px;
    position: relative;
    z-index: 10;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body>
<header class="header">
    <h1><i class="fas fa-wallet"></i> Personal Budget Tracker</h1>
    <div class="buttons">
        <a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
        <a href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a>
    </div>
</header>

<main class="main">
    <div class="content">
        <div class="card">
            <h2>Track Your Finances Easily</h2>
            <p>Visualize your budget, control your expenses, and manage your financial goals with ease using our clean and friendly tracker.</p>
            <div class="get-started">
                <a href="signup.php"><i class="fas fa-arrow-circle-right"></i> Get Started</a>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    © 2025 Personal Budget Tracker | Made with ❤️ by Krishna
</footer>
</body>
</html>
