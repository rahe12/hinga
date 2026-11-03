<?php
/**
 * HingaSmart AI (Hinga) - Empowering Rwandan Farmers with Predictive Agricultural Intelligence
 * Single-file PHP Landing Page & Interactive Dashboard Preview
 */

// Sample dynamic dynamic data for Market Intelligence feed
$market_data = [
    [
        'crop' => 'Dry Beans (Kigali City Market)',
        'category' => 'Legumes',
        'current_price' => '850 RWF/kg',
        'forecast' => '920 RWF/kg (+8.2%)',
        'trend' => 'up',
        'recommendation' => 'Hold harvest 5-7 days for peak demand',
        'confidence' => '96%'
    ],
    [
        'crop' => 'Maize Grain (Nyagatare Hub)',
        'category' => 'Cereals',
        'current_price' => '420 RWF/kg',
        'forecast' => '450 RWF/kg (+7.1%)',
        'trend' => 'up',
        'recommendation' => 'Optimal selling window open',
        'confidence' => '94%'
    ],
    [
        'crop' => 'Irish Potatoes (Musanze Market)',
        'category' => 'Tubers',
        'current_price' => '380 RWF/kg',
        'forecast' => '350 RWF/kg (-7.8%)',
        'trend' => 'down',
        'recommendation' => 'Sell current stock to prevent post-harvest loss',
        'confidence' => '98%'
    ],
    [
        'crop' => 'Cassava Flour (Ruhango Hub)',
        'category' => 'Roots',
        'current_price' => '600 RWF/kg',
        'forecast' => '605 RWF/kg (+0.8%)',
        'trend' => 'stable',
        'recommendation' => 'Stable market price; regular supply flow',
        'confidence' => '92%'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HingaSmart AI - Predictive Agricultural Intelligence for Rwanda</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        hinga: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                            dark: '#0a2e18',
                            earth: '#78350f',
                            accent: '#f59e0b',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .glass-dark {
            background: rgba(10, 46, 24, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-hinga-500 selection:text-white">

    <!-- Sticky Navigation -->
    <header class="sticky top-0 z-50 glass-panel border-b border-emerald-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <a href="#" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-hinga-700 to-hinga-500 flex items-center justify-center text-white shadow-lg shadow-hinga-600/30 group-hover:scale-105 transition-transform">
                        <i class="fa-solid font-bold fa-wheat-awn text-xl"></i>
                    </div>
                    <div>
                        <span class="text-xl font-bold tracking-tight text-slate-900 block leading-tight">Hinga<span class="text-hinga-600">Smart AI</span></span>
                        <span class="text-[10px] font-semibold tracking-wider text-slate-500 uppercase block">Rwandan Market AgTech</span>
                    </div>
                </a>

                <!-- Desktop Nav Links -->
                <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                    <a href="#features" class="hover:text-hinga-600 transition-colors">Platform Features</a>
                    <a href="#market-intel" class="hover:text-hinga-600 transition-colors">Market Intelligence</a>
                    <a href="#whatsapp-demo" class="hover:text-hinga-600 transition-colors">WhatsApp Alert Demo</a>
                    <a href="#impact" class="hover:text-hinga-600 transition-colors">Impact & Insights</a>
                </nav>

                <!-- CTA Button -->
                <div class="hidden sm:flex items-center gap-4">
                    <a href="https://wa.me/" target="_blank" class="inline-flex items-center gap-2 bg-gradient-to-r from-hinga-600 to-hinga-700 hover:from-hinga-700 hover:to-hinga-800 text-white font-semibold text-sm px-5 py-2.5 rounded-full shadow-md shadow-hinga-600/20 hover:shadow-lg transition-all duration-200">
                        <i class="fa-brands fa-whatsapp text-lg"></i>
                        <span>Launch WhatsApp AI</span>
                    </a>
                </div>

                <!-- Mobile menu toggle button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg text-slate-600 hover:bg-slate-100 focus:outline-none">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-100 bg-white/95 backdrop-blur-md px-4 pt-3 pb-6 space-y-3">
            <a href="#features" class="block py-2 text-slate-700 font-medium hover:text-hinga-600">Platform Features</a>
            <a href="#market-intel" class="block py-2 text-slate-700 font-medium hover:text-hinga-600">Market Intelligence</a>
            <a href="#whatsapp-demo" class="block py-2 text-slate-700 font-medium hover:text-hinga-600">WhatsApp Alert Demo</a>
            <a href="#impact" class="block py-2 text-slate-700 font-medium hover:text-hinga-600">Impact & Insights</a>
            <a href="https://wa.me/" target="_blank" class="flex items-center justify-center gap-2 bg-hinga-600 text-white font-semibold py-3 rounded-xl w-full shadow-md">
                <i class="fa-brands fa-whatsapp text-lg"></i>
                <span>Launch WhatsApp AI</span>
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center bg-slate-900 overflow-hidden py-16 lg:py-24">
        <!-- Background Overlay Image -->
        <div class="absolute inset-0 z-0 opacity-40 mix-blend-overlay">
            <img src="https://images.unsplash.com/photo-1595838779038-f9b88cfd3c11?q=80&w=2000&auto=format&fit=crop" alt="Rwandan Agriculture Terraces" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-hinga-dark via-hinga-dark/90 to-transparent z-0"></div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-hinga-500/20 rounded-full blur-3xl"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Hero Text & Call to Actions -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-dark text-hinga-100 text-xs sm:text-sm font-medium border border-hinga-500/30">
                        <span class="flex h-2 w-2 rounded-full bg-hinga-500 animate-ping"></span>
                        <span>Powered by NISR Agricultural Datasets & AI Market Models</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight">
                        Empowering Rwandan Farmers with <span class="text-transparent bg-clip-text bg-gradient-to-r from-hinga-500 via-emerald-300 to-amber-300">Predictive Intelligence</span>
                    </h1>

                    <p class="text-slate-300 text-base sm:text-lg max-w-2xl leading-relaxed mx-auto lg:mx-0">
                        Hinga delivers real-time market price forecasts, post-harvest recommendations, and buyer connection directly via localized <strong>WhatsApp alerts & USSD</strong>. Minimize crop waste and maximize market profits across Rwanda.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="https://wa.me/" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-hinga-500 to-hinga-700 hover:from-hinga-600 hover:to-hinga-800 text-white font-bold px-8 py-4 rounded-xl shadow-xl shadow-hinga-600/30 hover:scale-[1.02] transition-all">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                            <span>Start WhatsApp Alert Free</span>
                        </a>
                        <a href="#market-intel" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 glass-dark hover:bg-slate-800/80 text-white font-semibold px-6 py-4 rounded-xl border border-white/20 transition-all">
                            <span>Explore Market Data</span>
                            <i class="fa-solid fa-arrow-down text-sm"></i>
                        </a>
                    </div>

                    <!-- Key Metrics Bar -->
                    <div class="pt-8 grid grid-cols-3 gap-4 border-t border-white/10 text-center lg:text-left">
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-white">98.4%</div>
                            <div class="text-xs sm:text-sm text-slate-400">Price Accuracy</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-hinga-500">+35%</div>
                            <div class="text-xs sm:text-sm text-slate-400">Farmer Profit Yield</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-amber-400">30 Districts</div>
                            <div class="text-xs sm:text-sm text-slate-400">Rwandan Coverage</div>
                        </div>
                    </div>
                </div>

                <!-- Right Hero Image Stack & Floating Badges -->
                <div class="lg:col-span-5 relative flex justify-center">
                    <div class="relative w-full max-w-md">
                        <!-- Main Hero Image Frame -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white/10 group">
                            <img src="https://images.unsplash.com/photo-1592417817098-8f3d6ef23a07?q=80&w=1000&auto=format&fit=crop" alt="Rwandan Farmer Holding Fresh Harvest" class="w-full h-[450px] object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                            
                            <div class="absolute bottom-6 left-6 right-6 text-white">
                                <span class="bg-hinga-600 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Nyagatare District</span>
                                <h3 class="text-lg font-bold mt-2">Harvest Price Optimization</h3>
                                <p class="text-xs text-slate-300">Maize surplus expected next week. Hold storage to gain +12% value.</p>
                            </div>
                        </div>

                        <!-- Floating Badge 1: Market Signal -->
                        <div class="absolute -top-6 -left-6 glass-panel rounded-2xl p-4 shadow-xl border border-white/40 flex items-center gap-3 animate-bounce shadow-emerald-950/20" style="animation-duration: 4s;">
                            <div class="w-10 h-10 rounded-full bg-emerald-100 text-hinga-700 flex items-center justify-center font-bold">
                                <i class="fa-solid fa-arrow-trend-up text-lg"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-medium">Beans Market Alert</div>
                                <div class="text-sm font-bold text-slate-900">+80 RWF/kg Profit</div>
                            </div>
                        </div>

                        <!-- Floating Badge 2: Local Language -->
                        <div class="absolute -bottom-6 -right-6 glass-panel rounded-2xl p-4 shadow-xl border border-white/40 flex items-center gap-3 shadow-slate-950/20">
                            <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center">
                                <i class="fa-solid fa-language text-lg"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-medium">Kinyarwanda Ready</div>
                                <div class="text-sm font-bold text-slate-900">Ubusobanuro mu Kinyarwanda</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Platform Features Grid Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-xs font-bold uppercase tracking-widest text-hinga-600 mb-2">Smart Agricultural Features</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Designed specifically for Rwandan supply chains & local markets</p>
                <p class="mt-4 text-slate-600">From post-harvest loss prevention to automated WhatsApp price alerts, Hinga connects smallholder farmers to sustainable profitability.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 hover:shadow-xl hover:border-hinga-500 transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-hinga-100 text-hinga-700 flex items-center justify-center mb-6 text-xl group-hover:scale-110 group-hover:bg-hinga-600 group-hover:text-white transition-all">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">AI Price Forecasting</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Predict commodity values 2-4 weeks in advance using spatial intelligence and seasonal NISR market historical trends.</p>
                </div>

                <!-- Feature Card 2 -->
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 hover:shadow-xl hover:border-hinga-500 transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center mb-6 text-xl group-hover:scale-110 group-hover:bg-amber-600 group-hover:text-white transition-all">
                        <i class="fa-solid fa-warehouse"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Post-Harvest Loss Prevention</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Tailored storage advice based on humidity forecasts, ensuring crops like Irish potatoes don't spoil prior to peak price dates.</p>
                </div>

                <!-- Feature Card 3 -->
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 hover:shadow-xl hover:border-hinga-500 transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-hinga-700 flex items-center justify-center mb-6 text-xl group-hover:scale-110 group-hover:bg-hinga-600 group-hover:text-white transition-all">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">WhatsApp & USSD Alerts</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">No smartphone needed. Receive updates directly in Kinyarwanda or English via automated SMS or simple WhatsApp chats.</p>
                </div>

                <!-- Feature Card 4 -->
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 hover:shadow-xl hover:border-hinga-500 transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 text-indigo-700 flex items-center justify-center mb-6 text-xl group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Direct Buyer Links</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Connect directly with verified aggregation centers and wholesalers in Kigali, Musanze, and Kayonza to avoid middlemen margin cuts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WhatsApp Interactive Demo / Preview Section -->
    <section id="whatsapp-demo" class="py-20 bg-gradient-to-b from-slate-900 to-hinga-dark text-white overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-6">
                    <span class="px-3 py-1 bg-hinga-500/20 text-hinga-400 font-semibold text-xs rounded-full border border-hinga-500/30">Seamless Local Experience</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Try the Hinga WhatsApp Assistant Mockup</h2>
                    <p class="text-slate-300 leading-relaxed">
                        Farmers receive timely signals without complex dashboards. Watch how Hinga advises a farmer on bean prices in Kinyarwanda & English in real time.
                    </p>
                    
                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-hinga-500/20 text-hinga-400 flex items-center justify-center shrink-0 mt-1">
                                <i class="fa-solid fa-check text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-base">Instant Query Response</h4>
                                <p class="text-slate-400 text-sm">Ask about market rates anywhere in Rwanda by sending just crop name and district.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-8 h-8 rounded-full bg-hinga-500/20 text-hinga-400 flex items-center justify-center shrink-0 mt-1">
                                <i class="fa-solid fa-check text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-base">Local Language Support</h4>
                                <p class="text-slate-400 text-sm">Full interaction available in Kinyarwanda for maximum accessibility.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="https://wa.me/" target="_blank" class="inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-bold px-6 py-3.5 rounded-xl shadow-lg transition-all">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                            <span>Test Live WhatsApp Bot</span>
                        </a>
                    </div>
                </div>

                <!-- Mockup Phone View -->
                <div class="lg:col-span-6 flex justify-center">
                    <div class="w-full max-w-sm bg-slate-950 rounded-[40px] p-4 shadow-2xl border-4 border-slate-800 relative">
                        <!-- Camera notch -->
                        <div class="w-32 h-4 bg-slate-800 rounded-b-xl mx-auto mb-3"></div>

                        <!-- Chat Header -->
                        <div class="bg-hinga-800 rounded-t-2xl p-3 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-white font-bold">
                                <i class="fa-solid fa-robot"></i>
                            </div>
                            <div>
                                <div class="font-bold text-sm text-white flex items-center gap-1">
                                    HingaSmart AI
                                    <i class="fa-solid fa-circle-check text-hinga-400 text-xs"></i>
                                </div>
                                <div class="text-[10px] text-emerald-200">Verified Agriculture Bot • Online</div>
                            </div>
                        </div>

                        <!-- Chat Window Stream -->
                        <div class="bg-[#0b141a] p-4 space-y-3 h-[380px] overflow-y-auto text-xs font-sans">
                            <!-- User message -->
                            <div class="flex justify-end">
                                <div class="bg-[#005c4b] text-white p-2.5 rounded-xl rounded-tr-none max-w-[80%] shadow">
                                    Muraho Hinga! Ni ryari byaba byiza kugurisha Ibigori mu Nyagatare? 🌽
                                    <span class="block text-[9px] text-emerald-200 text-right mt-1">10:14 AM</span>
                                </div>
                            </div>

                            <!-- Bot Response -->
                            <div class="flex justify-start">
                                <div class="bg-[#202c33] text-slate-100 p-3 rounded-xl rounded-tl-none max-w-[85%] shadow border border-slate-700/50 space-y-2">
                                    <p class="font-semibold text-emerald-400">🤖 HingaSmart Forecast Summary:</p>
                                    <p><strong>District:</strong> Nyagatare</p>
                                    <p><strong>Ibiciro by' ubu:</strong> 420 RWF/kg</p>
                                    <p class="text-amber-300 font-medium">📈 Prédication: Igiciro kizamuka kurenga 450 RWF/kg mu nsi 10!</p>
                                    <div class="bg-slate-900/80 p-2 rounded border border-emerald-500/30 text-[11px] text-emerald-300">
                                        💡 <strong>Inama:</strong> Bika Umusaruro wawe icyumweru 1. Ibiciro bizaba byazamutse +7.1%!
                                    </div>
                                    <span class="block text-[9px] text-slate-400 text-right">10:15 AM</span>
                                </div>
                            </div>

                            <!-- User second prompt -->
                            <div class="flex justify-end">
                                <div class="bg-[#005c4b] text-white p-2.5 rounded-xl rounded-tr-none max-w-[80%] shadow">
                                    Request buyer contact details.
                                    <span class="block text-[9px] text-emerald-200 text-right mt-1">10:16 AM</span>
                                </div>
                            </div>
                        </div>

                        <!-- Chat Input bar -->
                        <div class="bg-[#202c33] rounded-b-2xl p-2.5 flex items-center gap-2 border-t border-slate-800">
                            <input type="text" disabled placeholder="Type 'Price Beans' or ask in Kinyarwanda..." class="w-full bg-slate-900 text-slate-300 text-xs px-3 py-2 rounded-full border border-slate-700 focus:outline-none">
                            <button class="w-8 h-8 rounded-full bg-hinga-600 text-white flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-paper-plane text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Market Intelligence Live Dashboard Section -->
    <section id="market-intel" class="py-20 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-widest text-hinga-600 mb-2">Real-Time Data Feed</h2>
                    <h3 class="text-3xl font-extrabold text-slate-900">Rwandan Crop Market Intelligence</h3>
                </div>
                <p class="text-slate-600 text-sm mt-2 md:mt-0 max-w-md">
                    Microdata synced with seasonal harvests, weather patterns, and NISR agricultural statistics.
                </p>
            </div>

            <!-- Dynamic PHP Table -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-200">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-900 text-white text-xs uppercase tracking-wider">
                                <th class="py-4 px-6">Commodity & Region</th>
                                <th class="py-4 px-6">Category</th>
                                <th class="py-4 px-6">Current Spot Price</th>
                                <th class="py-4 px-6">14-Day AI Forecast</th>
                                <th class="py-4 px-6">Confidence Score</th>
                                <th class="py-4 px-6">Actionable Recommendation</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-sm">
                            <?php foreach ($market_data as $row): ?>
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-4 px-6 font-bold text-slate-900 flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full <?php echo $row['trend'] === 'up' ? 'bg-emerald-500' : ($row['trend'] === 'down' ? 'bg-rose-500' : 'bg-amber-500'); ?>"></div>
                                    <?php echo htmlspecialchars($row['crop']); ?>
                                </td>
                                <td class="py-4 px-6 text-slate-500">
                                    <span class="px-2.5 py-1 bg-slate-100 text-slate-700 text-xs rounded-full font-medium">
                                        <?php echo htmlspecialchars($row['category']); ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6 font-semibold text-slate-900">
                                    <?php echo htmlspecialchars($row['current_price']); ?>
                                </td>
                                <td class="py-4 px-6 font-bold">
                                    <span class="<?php echo $row['trend'] === 'up' ? 'text-hinga-600' : ($row['trend'] === 'down' ? 'text-rose-600' : 'text-slate-700'); ?>">
                                        <?php echo htmlspecialchars($row['forecast']); ?>
                                    </span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-2">
                                        <div class="w-16 bg-slate-200 rounded-full h-2 overflow-hidden">
                                            <div class="bg-hinga-600 h-2 rounded-full" style="width: <?php echo $row['confidence']; ?>"></div>
                                        </div>
                                        <span class="text-xs font-semibold text-slate-600"><?php echo $row['confidence']; ?></span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-slate-600 font-medium text-xs">
                                    <?php echo htmlspecialchars($row['recommendation']); ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="bg-slate-50 px-6 py-4 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-arrows-rotate text-hinga-600"></i>
                        <span>Updated today based on National Institute of Statistics Rwanda microdata trends.</span>
                    </div>
                    <a href="https://wa.me/" target="_blank" class="text-hinga-700 font-bold hover:underline flex items-center gap-1">
                        <span>Subscribe for instant SMS/WhatsApp alerts</span>
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact & Testimonial Section -->
    <section id="impact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1590682680695-43b964a3ae17?q=80&w=1000&auto=format&fit=crop" alt="Rwandan Agronomist in field" class="w-full h-[480px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <div class="text-amber-400 text-lg mb-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <blockquote class="text-sm italic text-slate-200 mb-3">
                                "With Hinga's WhatsApp alerts, our cooperative delayed selling bean stock in Musanze by 10 days. We gained over 450,000 RWF extra profit that season."
                            </blockquote>
                            <div class="font-bold text-base">Jean-Paul Habimana</div>
                            <div class="text-xs text-hinga-300">Cooperative Leader, Northern Province</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 space-y-6">
                    <h2 class="text-xs font-bold uppercase tracking-widest text-hinga-600">Socio-Economic Impact</h2>
                    <h3 class="text-3xl sm:text-4xl font-extrabold text-slate-900">Transforming Rwanda's Agricultural Value Chain</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Smallholder agriculture accounts for a substantial share of livelihood in Rwanda. By mitigating asymmetric market information and post-harvest spoilage, Hinga increases climate resilience and family incomes.
                    </p>

                    <div class="grid sm:grid-cols-2 gap-6 pt-4">
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="w-10 h-10 rounded-lg bg-hinga-100 text-hinga-700 flex items-center justify-center font-bold mb-3">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <h4 class="font-bold text-slate-900 text-lg">Risk Reduction</h4>
                            <p class="text-slate-600 text-xs mt-1">Shields farmers from predatory middleman rates through transparent price discovery.</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200">
                            <div class="w-10 h-10 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center font-bold mb-3">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <h4 class="font-bold text-slate-900 text-lg">Post-Harvest Security</h4>
                            <p class="text-slate-600 text-xs mt-1">Smart storage advice minimizes grain and tuber rot prior to transport.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Call To Action Footer Banner -->
    <section class="py-16 bg-gradient-to-r from-hinga-700 via-hinga-800 to-hinga-dark text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold">Ready to Boost Your Harvest Profits?</h2>
            <p class="text-slate-200 max-w-2xl mx-auto text-base">
                Join thousands of Rwandan farmers receiving automated predictive price insights today.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-2">
                <a href="https://wa.me/" target="_blank" class="inline-flex items-center justify-center gap-3 bg-white text-slate-900 font-bold px-8 py-4 rounded-xl shadow-xl hover:bg-slate-100 transition-all">
                    <i class="fa-brands fa-whatsapp text-hinga-600 text-xl"></i>
                    <span>Connect via WhatsApp Now</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                
                <!-- Col 1: Brand -->
                <div class="space-y-4">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-hinga-600 flex items-center justify-center text-white font-bold">
                            <i class="fa-solid fa-wheat-awn"></i>
                        </div>
                        <span class="text-lg font-bold text-white">Hinga<span class="text-hinga-500">Smart AI</span></span>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-400">
                        Predictive Agricultural Intelligence tailored for Rwandan farming communities, market hubs, and cooperatives.
                    </p>
                </div>

                <!-- Col 2: Navigation -->
                <div>
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#features" class="hover:text-white transition-colors">Platform Features</a></li>
                        <li><a href="#market-intel" class="hover:text-white transition-colors">Market Intelligence</a></li>
                        <li><a href="#whatsapp-demo" class="hover:text-white transition-colors">WhatsApp AI Demo</a></li>
                        <li><a href="#impact" class="hover:text-white transition-colors">Impact & Statistics</a></li>
                    </ul>
                </div>

                <!-- Col 3: Supported Regions -->
                <div>
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Coverage Hubs</h4>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li>Kigali City Markets</li>
                        <li>Eastern Province (Nyagatare, Kayonza)</li>
                        <li>Northern Province (Musanze)</li>
                        <li>Southern Province (Huye, Ruhango)</li>
                    </ul>
                </div>

                <!-- Col 4: Contact & Social -->
                <div>
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider mb-4">Connect</h4>
                    <p class="text-xs text-slate-400 mb-4">Kigali Innovation City, Rwanda</p>
                    <div class="flex gap-4 text-lg">
                        <a href="#" class="hover:text-hinga-500 transition-colors"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="hover:text-hinga-500 transition-colors"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://wa.me/" class="hover:text-hinga-500 transition-colors"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

            </div>

            <div class="border-t border-slate-900 pt-6 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 gap-4">
                <p>&copy; <?php echo date('Y'); ?> HingaSmart AI. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-slate-400">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-400">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Simple JS for Mobile Menu Toggle -->
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>