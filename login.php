<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Simple App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-2xl">
        <div class="text-center mb-8">
            <a href="index.php" class="text-emerald-400 font-bold text-xl">SimpleApp</a>
            <h2 class="text-2xl font-bold mt-4 text-white">Welcome Back</h2>
            <p class="text-slate-400 text-sm mt-1">Please sign in to your account</p>
        </div>

        <form action="dashboard.php" method="GET" class="space-y-4">
            <div>
                <label class="block text-xs uppercase font-semibold text-slate-400 mb-1">Email Address</label>
                <input type="email" required placeholder="name@example.com" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 focus:outline-none focus:border-emerald-500">
            </div>
            <div>
                <label class="block text-xs uppercase font-semibold text-slate-400 mb-1">Password</label>
                <input type="password" required placeholder="••••••••" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-slate-100 focus:outline-none focus:border-emerald-500">
            </div>
            <button type="submit" class="w-full py-3.5 bg-emerald-600 hover:bg-emerald-500 text-slate-950 font-bold rounded-xl transition-all shadow-lg shadow-emerald-600/20 mt-2">
                Sign In
            </button>
        </form>

        <p class="text-center text-sm text-slate-400 mt-6">
            Don't have an account? <a href="register.php" class="text-emerald-400 font-semibold hover:underline">Register</a>
        </p>
    </div>

</body>
</html>