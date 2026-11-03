<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Simple App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans min-h-screen flex flex-col justify-between">

    <!-- Navbar -->
    <nav class="max-w-6xl mx-auto w-full px-6 py-6 flex justify-between items-center">
        <div class="text-xl font-bold tracking-tight text-emerald-400">SimpleApp</div>
        <div class="space-x-4">
            <a href="login.php" class="px-4 py-2 text-sm font-semibold text-slate-300 hover:text-white transition-colors">Log In</a>
            <a href="registration.php" class="px-4 py-2 text-sm font-semibold bg-emerald-600 hover:bg-emerald-500 text-slate-950 rounded-lg transition-colors">Get Started</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="max-w-4xl mx-auto px-6 text-center py-20">
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6">
            Build your next idea <span class="text-emerald-400">faster & cleaner</span>
        </h1>
        <p class="text-slate-400 text-lg mb-8 max-w-2xl mx-auto">
            A lightweight, frontend-ready template designed for seamless team collaboration and quick iteration.
        </p>
        <div class="flex justify-center gap-4">
            <a href="register.php" class="px-6 py-3 bg-emerald-600 hover:bg-emerald-500 text-slate-950 font-bold rounded-xl transition-all shadow-lg shadow-emerald-600/20">Create Free Account</a>
            <a href="login.php" class="px-6 py-3 bg-slate-900 hover:bg-slate-800 border border-slate-800 text-slate-200 font-bold rounded-xl transition-all">Sign In</a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-6 text-xs text-slate-600 border-t border-slate-900">
        &copy; 2026 SimpleApp. Collaboration Ready.
    </footer>

</body>
</html>