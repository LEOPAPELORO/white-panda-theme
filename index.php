<!doctype html>
<html lang="es" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>White Panda — Tissue Arquitectónico</title>
  <meta name="description" content="Pañuelos faciales 100% de fibra de bambú, 2 capas, para hotelería, corporativos e instituciones en México." />
  
  <!-- Preconnects y preloads de rendimiento -->
  <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="image" href="https://whitepanda.mx/wp-content/uploads/2026/09/Logo-secundario-10-1-scaled.png" fetchpriority="high">
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Cormorant+Garamond:ital@1&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
  <noscript>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Cormorant+Garamond:ital@1&display=swap" rel="stylesheet">
  </noscript>

  <!-- Tailwind CSS (data-no-optimize="1" impide que LiteSpeed Cache retrase su ejecución) -->
  <script data-no-optimize="1" src="https://cdn.tailwindcss.com/3.4.17"></script>

  <script data-no-optimize="1">
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            linen: { DEFAULT: '#EDECE7', light: '#FAF9F5', soft: '#E4E2DC', border: '#D5D3CB' },
            sage: { DEFAULT: '#D1D4CB', light: '#DCE0D7', dark: '#B8BDB0' },
            taupe: { DEFAULT: '#7C7974', dark: '#63605B', light: '#94918B' },
            charcoal: { DEFAULT: '#2B2A28', soft: '#4C4C48', muted: '#6E6D68' },
            bamboo: { DEFAULT: '#A4907C', dark: '#887464' },
            cube: { DEFAULT: '#C8C8D4' }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
            mono: ['"JetBrains Mono"', 'monospace'],
            serif: ['"Cormorant Garamond"', 'serif'],
          }
        }
      }
    };
    (function() {
      function dismissPreloader() {
        var loader = document.getElementById('sitePreloader');
        if (loader && !loader.classList.contains('preloader-hidden')) {
          loader.classList.add('preloader-hidden');
          setTimeout(function() {
            if (loader.parentNode) loader.style.display = 'none';
          }, 550);
        }
      }
      if (document.readyState === 'complete') {
        setTimeout(dismissPreloader, 200);
      } else {
        window.addEventListener('load', function() {
          setTimeout(dismissPreloader, 200);
        });
        setTimeout(dismissPreloader, 650);
      }
    })();
  </script>

  <style>
    /* Cortina de Entrada / Preloader elegante */
    #sitePreloader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      width: 100vw;
      height: 100vh;
      background-color: #EDECE7;
      z-index: 999999;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      opacity: 1;
      visibility: visible;
      transition: opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.5s ease;
      pointer-events: all;
    }
    #sitePreloader.preloader-hidden {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
    }
    .preloader-brand {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      transform: translateY(0);
      transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }
    #sitePreloader.preloader-hidden .preloader-brand {
      transform: translateY(-8px);
    }
    .preloader-logo {
      height: 40px;
      max-height: 40px;
      width: auto;
      object-fit: contain;
      margin-bottom: 1.25rem;
      display: block;
    }
    .preloader-line {
      width: 52px;
      height: 2px;
      background: rgba(43, 42, 40, 0.12);
      border-radius: 9999px;
      overflow: hidden;
      position: relative;
    }
    .preloader-line-inner {
      position: absolute;
      top: 0;
      bottom: 0;
      left: -50%;
      width: 50%;
      background: #2B2A28;
      border-radius: 9999px;
      animation: preloader-sweep 1.1s cubic-bezier(0.4, 0, 0.2, 1) infinite;
    }
    @keyframes preloader-sweep {
      0% { left: -50%; width: 30%; }
      50% { left: 25%; width: 55%; }
      100% { left: 105%; width: 25%; }
    }

    /* Regla global absoluta contra hipervínculos azules */
    a, a:link, a:visited {
      color: inherit;
      text-decoration: none;
    }

    /* Botones oscuros y CTAs (blindados contra :visited y temas de WordPress) */
    .btn-dark,
    a.btn-dark,
    a.bg-charcoal,
    button.bg-charcoal {
      background-color: #2B2A28 !important;
      color: #FAF9F5 !important;
    }
    .btn-dark:link,
    .btn-dark:visited,
    a.btn-dark:link,
    a.btn-dark:visited,
    a.bg-charcoal:link,
    a.bg-charcoal:visited {
      background-color: #2B2A28 !important;
      color: #FAF9F5 !important;
    }
    .btn-dark *,
    a.btn-dark *,
    a.bg-charcoal * {
      color: #FAF9F5 !important;
    }
    .btn-dark .arrow-slide,
    a.bg-charcoal .arrow-slide {
      color: #FAF9F5 !important;
    }

    /* Botones claros y botón de cotización */
    .btn-light,
    a.btn-light,
    a.btn-light:link,
    a.btn-light:visited,
    #submitQuoteBtn {
      background-color: #FAF9F5 !important;
      color: #2B2A28 !important;
    }
    .btn-light *,
    #submitQuoteBtn * {
      color: #2B2A28 !important;
    }

    /* Header y Barra de Navegación 100% blindados en CSS */
    header {
      position: fixed !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      height: 5rem !important;
      z-index: 50 !important;
      background-color: rgba(237, 236, 231, 0.95) !important;
      backdrop-filter: blur(24px) !important;
      -webkit-backdrop-filter: blur(24px) !important;
      border-bottom: 1px solid rgba(43, 42, 40, 0.06) !important;
    }
    header > div {
      max-width: 1440px !important;
      margin-left: auto !important;
      margin-right: auto !important;
      height: 5rem !important;
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      padding-left: 1.5rem !important;
      padding-right: 1.5rem !important;
    }
    header img {
      height: 36px !important;
      max-height: 36px !important;
      width: auto !important;
      object-fit: contain !important;
    }
    header nav {
      display: none !important;
    }
    @media (min-width: 768px) {
      header nav {
        display: flex !important;
        align-items: center !important;
        gap: 2.25rem !important;
      }
    }
    header nav a,
    header nav a:link,
    header nav a:visited {
      display: inline-block !important;
      background: transparent !important;
      background-color: transparent !important;
      color: rgba(43, 42, 40, 0.7) !important;
      font-size: 0.75rem !important;
      font-weight: 600 !important;
      letter-spacing: 0.1em !important;
      text-transform: uppercase !important;
      padding: 0 !important;
      border-radius: 0 !important;
      box-shadow: none !important;
      text-decoration: none !important;
      transition: color 0.2s ease !important;
    }
    header nav a:hover,
    header nav a:active {
      color: #2B2A28 !important;
      background: transparent !important;
      background-color: transparent !important;
    }
    header a.btn-shine,
    header a.btn-shine:link,
    header a.btn-shine:visited {
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      background-color: #2B2A28 !important;
      color: #FAF9F5 !important;
      padding: 0.625rem 1.5rem !important;
      border-radius: 9999px !important;
      font-size: 11px !important;
      font-weight: 700 !important;
      letter-spacing: 0.1em !important;
      text-transform: uppercase !important;
      text-decoration: none !important;
      box-shadow: 0 4px 12px rgba(43, 42, 40, 0.15) !important;
    }
    #navTotal.hidden {
      display: none !important;
    }
    #navTotal.grid {
      display: grid !important;
    }

    /* Pre-Tailwind Layout Lock — Proporciones y dimensiones fijas instantáneas */
    #heroContainer {
      position: relative;
      width: 100%;
      max-width: 1680px;
      margin-left: auto;
      margin-right: auto;
      min-height: 600px;
      height: 88vh;
      max-height: 900px;
      border-radius: 2.25rem;
      display: flex;
      align-items: center;
      overflow: hidden;
      background-color: #D1D4CB;
    }
    @media (min-width: 768px) {
      #heroContainer {
        border-radius: 3rem;
      }
    }
    #heroContainer > div:first-child {
      position: absolute;
      inset: 0;
      z-index: 0;
      overflow: hidden;
    }
    #heroBgImg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }
    #heroGlassCard {
      position: relative;
      z-index: 10;
      width: 100%;
      max-width: 36rem;
    }
    @media (min-width: 640px) {
      #heroGlassCard {
        margin-left: 2.5rem;
      }
    }
    @media (min-width: 768px) {
      #heroGlassCard {
        margin-left: 4rem;
      }
    }
    @media (min-width: 1024px) {
      #heroGlassCard {
        margin-left: 5rem;
      }
    }

    /* Tarjetas de Producto fijas (evita saltos al cargar imágenes) */
    .product-stage {
      min-height: 360px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }
    @media (min-width: 640px) {
      .product-stage {
        min-height: 400px;
      }
    }
    .product-card {
      display: flex;
      flex-direction: column;
      border-radius: 2rem;
    }

    :root {
      --bg-linen: #EDECE7;
      --ink-dark: #2B2A28;
      --ease: cubic-bezier(0.16, 1, 0.3, 1);
      color-scheme: light;
    }
    body {
      background-color: var(--bg-linen);
      color: var(--ink-dark);
      font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    ::selection { background: #2B2A28; color: #FAF9F5; }
    :focus-visible { outline: 2px solid #2B2A28; outline-offset: 3px; }

    .gutter { padding-left: max(1.5rem, env(safe-area-inset-left, 0px)); padding-right: max(1.5rem, env(safe-area-inset-right, 0px)); }
    @media (min-width: 640px) { .gutter { padding-left: max(2.5rem, env(safe-area-inset-left, 0px)); padding-right: max(2.5rem, env(safe-area-inset-right, 0px)); } }

    .reveal { transform: translateY(14px); transition: transform 0.65s var(--ease), opacity 0.65s var(--ease); opacity: 0; }
    .reveal.active { transform: translateY(0); opacity: 1; }
    .reveal-delay-1 { transition-delay: 0.08s; }

    .glass-panel { background: rgba(250, 249, 245, 0.68); backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); border: 1px solid rgba(255, 255, 255, 0.55); }
    .glass-card-subtle {
      background: rgba(255, 255, 255, 0.52);
      backdrop-filter: blur(18px); -webkit-backdrop-filter: blur(18px);
      border: 1px solid rgba(255, 255, 255, 0.75);
      box-shadow: 0 16px 40px -18px rgba(43, 42, 40, 0.07), inset 0 1px 0 0 rgba(255, 255, 255, 0.85);
      transition: transform 0.55s var(--ease), box-shadow 0.55s var(--ease), background 0.45s var(--ease), border-color 0.45s;
    }
    .glass-card-subtle:hover {
      background: rgba(255, 255, 255, 0.78);
      border-color: rgba(255, 255, 255, 1);
      transform: translateY(-6px);
      box-shadow: 0 30px 60px -20px rgba(43, 42, 40, 0.16), inset 0 1px 0 0 rgba(255, 255, 255, 1);
    }

    .btn-shine { position: relative; overflow: hidden; isolation: isolate; }
    .btn-shine::after {
      content: ""; position: absolute; inset: 0; z-index: -1;
      background: linear-gradient(110deg, transparent 30%, rgba(255,255,255,0.35) 50%, transparent 70%);
      transform: translateX(-120%); transition: transform 0.8s var(--ease);
    }
    .btn-shine:hover::after { transform: translateX(120%); }
    .arrow-slide { transition: transform 0.4s var(--ease); display: inline-block; }
    a:hover > .arrow-slide, button:hover > .arrow-slide, .group:hover .arrow-slide { transform: translateX(4px); }

    .product-card {
      --rx: 0deg; --ry: 0deg; --mx: 50%; --my: 30%; --lift: 0px;
      position: relative;
      background: rgba(255, 255, 255, 0.72);
      backdrop-filter: blur(22px); -webkit-backdrop-filter: blur(22px);
      border: 1px solid rgba(255, 255, 255, 0.85);
      box-shadow: 0 18px 45px -18px rgba(43, 42, 40, 0.08), inset 0 1px 0 0 rgba(255, 255, 255, 0.9);
      border-radius: 2rem;
      transform: perspective(1100px) rotateX(var(--rx)) rotateY(var(--ry)) translateY(var(--lift));
      transform-style: preserve-3d;
      transition: transform 0.6s var(--ease), box-shadow 0.6s var(--ease), border-color 0.4s;
      overflow: hidden;
    }
    .product-card.is-tilting { transition: transform 0.12s linear, box-shadow 0.6s var(--ease), border-color 0.4s; }
    .product-card::before {
      content: ""; position: absolute; inset: 0; z-index: 5; pointer-events: none; opacity: 0;
      background: radial-gradient(420px circle at var(--mx) var(--my), rgba(255,255,255,0.55), transparent 45%);
      transition: opacity 0.4s var(--ease);
    }
    .product-card:hover, .product-card.card-selected { --lift: -8px; box-shadow: 0 40px 70px -24px rgba(43, 42, 40, 0.22), inset 0 1px 0 0 rgba(255, 255, 255, 1); border-color: rgba(43, 42, 40, 0.14); }
    .product-card:hover::before { opacity: 1; }
    .product-card.card-selected { border-color: rgba(43, 42, 40, 0.55); }

    .product-stage { position: relative; background: rgba(255, 255, 255, 0.65); transition: background-color 0.55s var(--ease); overflow: hidden; }
    .product-stage .halo { position: absolute; left: 50%; top: 55%; width: 70%; aspect-ratio: 1; transform: translate(-50%, -50%) scale(0.6); border-radius: 50%; background: radial-gradient(circle, rgba(255,255,255,0.95), rgba(255,255,255,0) 65%); opacity: 0; transition: transform 0.8s var(--ease), opacity 0.6s; pointer-events: none; }
    .product-card:hover .halo, .product-card.card-selected .halo { opacity: 1; transform: translate(-50%, -50%) scale(1); }
    .product-img { position: relative; z-index: 2; transition: transform 0.8s var(--ease), filter 0.6s ease; filter: drop-shadow(0 24px 30px rgba(43, 42, 40, 0.13)); }
    .product-card:hover .product-img, .product-card.card-selected .product-img { transform: scale(1.09) translateY(-8px) rotate(-1.5deg); filter: drop-shadow(0 38px 38px rgba(43, 42, 40, 0.22)); }
    .product-stage .floor { position: absolute; left: 22%; right: 22%; bottom: 12%; height: 18px; border-radius: 50%; background: radial-gradient(ellipse, rgba(43,42,40,0.22), transparent 70%); filter: blur(4px); transition: transform 0.8s var(--ease), opacity 0.6s; }
    .product-card:hover .floor { transform: scaleX(0.82); opacity: 0.6; }

    /* Efecto de cambio sutil de fondo en Catálogo */
    .product-card[data-tone="cube"]:hover .product-stage, .product-card[data-tone="cube"].card-selected .product-stage { background-color: rgba(231, 231, 240, 0.9); }
    .product-card[data-tone="flat"]:hover .product-stage, .product-card[data-tone="flat"].card-selected .product-stage { background-color: rgba(226, 229, 222, 0.92); }
    .product-card[data-tone="pocket"]:hover .product-stage, .product-card[data-tone="pocket"].card-selected .product-stage { background-color: rgba(234, 231, 224, 0.92); }

    .product-info-box { position: relative; background: rgba(255, 255, 255, 0.62); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border-top: 1px solid rgba(255, 255, 255, 0.8); transition: background 0.45s var(--ease); }
    .product-card:hover .product-info-box, .product-card.card-selected .product-info-box { background: rgba(250, 249, 245, 0.92); }

    .spec-reveal { display: grid; grid-template-rows: 0fr; opacity: 0; transition: grid-template-rows 0.6s var(--ease), opacity 0.45s var(--ease), margin 0.6s var(--ease); margin-top: 0; }
    .spec-reveal > div { overflow: hidden; }
    .product-card:hover .spec-reveal, .product-card.card-selected .spec-reveal, .product-card:focus-within .spec-reveal { grid-template-rows: 1fr; opacity: 1; margin-top: 1.25rem; }
    .spec-row { display: flex; justify-content: space-between; gap: 1rem; padding: 0.4rem 0; border-top: 1px solid rgba(43,42,40,0.08); font-size: 11px; }
    .spec-row dt { color: rgba(43,42,40,0.6); }
    .spec-row dd { margin: 0; color: #2B2A28; font-weight: 600; text-align: right; }
    .hover-hint { transition: opacity 0.3s; }
    .product-card:hover .hover-hint, .product-card.card-selected .hover-hint { opacity: 0; }

    .space-card { transition: transform 0.6s var(--ease), box-shadow 0.6s var(--ease), background 0.45s; }
    .space-card:hover { transform: translateY(-8px); box-shadow: 0 36px 70px -26px rgba(43, 42, 40, 0.28); }
    .space-media { position: relative; overflow: hidden; border-radius: 1.6rem; }
    .space-media img { width: 100%; height: 100%; object-fit: cover; object-position: 50% 80%; transform: scale(1.02); transition: transform 1.2s var(--ease), filter 0.8s; filter: saturate(0.9); }
    .space-card:hover .space-media img { transform: scale(1.1); filter: saturate(1.05); }
    .space-media::after { content: ""; position: absolute; inset: 0; background: linear-gradient(to top, rgba(43,42,40,0.18), transparent 45%); opacity: 0; transition: opacity 0.6s; }
    .space-card:hover .space-media::after { opacity: 1; }
    .space-card .fmt-pill { transition: background 0.4s, color 0.4s, transform 0.4s var(--ease); }
    .space-card:hover .fmt-pill { background: #2B2A28; color: #FAF9F5; }

    .bento-card .big { transition: transform 0.7s var(--ease), letter-spacing 0.7s var(--ease); display: inline-block; transform-origin: left bottom; }
    .bento-card:hover .big { transform: scale(1.08); letter-spacing: -0.04em; }
    .bento-card .dot { transition: transform 0.6s var(--ease); }
    .bento-card:hover .dot { transform: scale(2.4); }

    #heroBgImg { object-fit: cover; object-position: center; }

    .glass-panel-dark { background: rgba(43, 42, 40, 0.65); backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); border: 1px solid rgba(255, 255, 255, 0.1); }

    /* Sliders minimalistas Oscuros */
    input[type="range"].wp-slider-dark { -webkit-appearance: none; appearance: none; width: 100%; height: 4px; border-radius: 4px; outline: none; background: linear-gradient(to right, #FAF9F5 0%, #FAF9F5 var(--fill, 10%), rgba(250,249,245,0.2) var(--fill, 10%)); }
    input[type="range"].wp-slider-dark::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 24px; height: 24px; border-radius: 50%; background: #FAF9F5; box-shadow: 0 2px 10px rgba(0,0,0,0.3); cursor: pointer; transition: transform 0.2s ease; }
    input[type="range"].wp-slider-dark::-moz-range-thumb { width: 24px; height: 24px; border: 0; border-radius: 50%; background: #FAF9F5; cursor: pointer; }
    input[type="range"].wp-slider-dark::-webkit-slider-thumb:hover { transform: scale(1.15); }

    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

    @media (hover: none) {
      .spec-reveal { grid-template-rows: 1fr; opacity: 1; margin-top: 1.25rem; }
      .hover-hint { display: none; }
    }
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { transition: none !important; animation: none !important; }
      .reveal { transform: none; opacity: 1; }
      html { scroll-behavior: auto; }
    }
  </style>
  <?php wp_head(); ?>
</head>
<body class="antialiased">

  <!-- Cortina de Bienvenida / Preloader Ultra-Smooth con Logo Oficial -->
  <div id="sitePreloader" aria-hidden="true">
    <div class="preloader-brand">
      <img src="https://whitepanda.mx/wp-content/uploads/2026/09/Logo-secundario-10-1-scaled.png" alt="White Panda" width="180" height="40" class="preloader-logo" fetchpriority="high" decoding="sync" />
      <div class="preloader-line">
        <div class="preloader-line-inner"></div>
      </div>
    </div>
  </div>

  <header class="fixed inset-x-0 z-40 bg-linen/85 backdrop-blur-xl border-b border-charcoal/5 transition-all duration-300" style="top: env(safe-area-inset-top, 0px)">
    <div class="max-w-[1440px] mx-auto gutter h-20 flex items-center justify-between">
      <a href="#" class="block hover:opacity-80 transition-opacity">
        <img src="https://whitepanda.mx/wp-content/uploads/2026/09/Logo-secundario-10-1-scaled.png" alt="White Panda" width="160" height="36" style="height: 36px; max-height: 36px; width: auto; object-fit: contain;" class="h-9 w-auto object-contain" />
      </a>
      <nav class="hidden md:flex items-center gap-9 text-xs font-semibold tracking-widest text-charcoal/70 uppercase">
        <a href="#filosofia" class="hover:text-charcoal transition-colors">Filosofía</a>
        <a href="#catalogo" class="hover:text-charcoal transition-colors">Productos</a>
        <a href="#sectores" class="hover:text-charcoal transition-colors">Espacios</a>
        <a href="#bambu" class="hover:text-charcoal transition-colors">Materia Prima</a>
        <a href="#cotizador" class="hover:text-charcoal transition-colors">Cotización B2B</a>
      </nav>
      <a href="#cotizador" class="btn-shine btn-dark inline-flex items-center justify-center gap-2 bg-charcoal text-linen-light px-5 sm:px-6 py-2.5 rounded-full text-[11px] font-bold tracking-widest uppercase hover:scale-105 transition-transform" style="background-color: #2B2A28 !important; color: #FAF9F5 !important;">
        <span style="color: #FAF9F5 !important;">Cotizar</span> <span id="navTotal" class="hidden min-w-[22px] h-[22px] px-1.5 rounded-full bg-linen-light text-charcoal place-items-center text-[11px]">0</span>
      </a>
    </div>
  </header>

  <section class="pt-24 pb-10 px-3 sm:px-6 lg:px-8">
    <div id="heroContainer" class="relative w-full max-w-[1680px] mx-auto min-h-[650px] md:h-[88vh] max-h-[900px] rounded-[2.25rem] md:rounded-[3rem] flex items-center overflow-hidden shadow-2xl border border-white/60">
      <div class="absolute inset-0 z-0 overflow-hidden bg-sage">
        <img id="heroBgImg" src="https://whitepanda.mx/wp-content/uploads/2026/09/PORTADA-WP.png" alt="Pañuelos White Panda de bambú sobre piedra" fetchpriority="high" decoding="async" class="w-full h-full object-cover object-center" />
        <div class="absolute inset-0 bg-gradient-to-r from-charcoal/25 via-charcoal/5 to-transparent pointer-events-none"></div>
      </div>

      <div id="heroGlassCard" class="relative z-10 w-full max-w-xl mx-4 sm:mx-10 md:ml-16 lg:ml-20 transition-transform duration-300 ease-out">
        <div class="glass-panel p-8 sm:p-10 md:p-12 rounded-[2.25rem] text-left shadow-2xl">
          <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-white/75 border border-white/90 mb-6 shadow-sm">
            <span class="font-serif italic text-lg text-charcoal/80 leading-none">竹</span>
            <span class="text-[11px] font-mono uppercase tracking-[0.18em] text-charcoal/80 font-semibold">Bamboo Facial Tissues</span>
          </div>
          <h1 class="text-4xl sm:text-5xl lg:text-[56px] font-bold text-charcoal tracking-tighter leading-[1.05] mb-5" style="text-wrap: balance">El detalle que lo cambia todo.</h1>
          <p class="text-base sm:text-lg text-charcoal/75 font-medium mb-8 leading-relaxed">
            Pañuelos faciales 100% de fibra de bambú, en doble capa. El estándar neutro para hotelería, corporativos y espacios exigentes.
          </p>
          <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5">
            <a href="#catalogo" class="btn-shine btn-dark group px-7 py-4 rounded-full bg-charcoal text-[#FAF9F5] font-semibold text-xs uppercase tracking-wider text-center hover:scale-105 transition-transform shadow-md" style="background-color: #2B2A28 !important; color: #FAF9F5 !important;">
              <span style="color: #FAF9F5 !important;">Explorar colección</span> <span class="arrow-slide" style="color: #FAF9F5 !important;">→</span>
            </a>
            <a href="#cotizador" class="btn-light px-7 py-4 rounded-full bg-white/80 text-charcoal border border-white font-semibold text-xs uppercase tracking-wider text-center hover:bg-white hover:scale-[1.03] transition-all" style="color: #2B2A28 !important;">
              Solicitar muestras
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="filosofia" class="py-24 md:py-32 gutter relative overflow-hidden">
    <div class="absolute left-1/4 top-12 w-96 h-96 rounded-full bg-white/70 blur-3xl pointer-events-none"></div>
    <div class="absolute right-10 bottom-10 w-80 h-80 rounded-full bg-sage/60 blur-3xl pointer-events-none"></div>
    <div class="max-w-[1380px] mx-auto relative z-10">
      <div class="max-w-3xl mx-auto text-center mb-16 md:mb-20 reveal">
        <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full glass-card-subtle mb-5">
          <span class="w-1.5 h-1.5 rounded-full bg-charcoal"></span>
          <span class="text-[11px] font-mono uppercase tracking-[0.2em] text-charcoal/80 font-semibold">01 · Perspectiva</span>
        </div>
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-charcoal tracking-tighter leading-[1.06] mb-6">Rediseñamos lo cotidiano.</h2>
        <p class="text-lg sm:text-xl text-charcoal/65 font-normal leading-relaxed">Un empaque sobrio y neutro que respeta y eleva el interiorismo de tus espacios.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 reveal reveal-delay-1">
        <div class="glass-card-subtle group rounded-[2rem] p-8 sm:p-10 text-center">
          <div class="w-14 h-14 rounded-2xl bg-charcoal text-linen-light flex items-center justify-center mx-auto mb-6 text-2xl font-serif italic shadow-md transition-transform duration-500 group-hover:rotate-[-8deg] group-hover:scale-110">竹</div>
          <h3 class="text-xl font-bold text-charcoal tracking-tight mb-2.5">100% fibra de bambú</h3>
          <p class="text-sm text-charcoal/65 leading-relaxed">Doble capa, suave al contacto con el rostro y resistente al uso diario.</p>
        </div>
        <div class="glass-card-subtle group rounded-[2rem] p-8 sm:p-10 text-center">
          <div class="w-14 h-14 rounded-2xl bg-sage/80 text-charcoal flex items-center justify-center mx-auto mb-6 text-xs font-mono font-bold tracking-wider border border-white transition-all duration-500 group-hover:bg-charcoal group-hover:text-linen-light group-hover:scale-110">B2B</div>
          <h3 class="text-xl font-bold text-charcoal tracking-tight mb-2.5">Diseño sobrio</h3>
          <p class="text-sm text-charcoal/65 leading-relaxed">Cajas sin gráficos invasivos, listas para exhibirse directamente en el espacio.</p>
        </div>
        <div class="glass-card-subtle group rounded-[2rem] p-8 sm:p-10 text-center">
          <div class="w-14 h-14 rounded-2xl bg-cube/55 text-charcoal flex items-center justify-center mx-auto mb-6 text-xs font-mono font-bold tracking-wider border border-white transition-all duration-500 group-hover:bg-charcoal group-hover:text-linen-light group-hover:scale-110">MX</div>
          <h3 class="text-xl font-bold text-charcoal tracking-tight mb-2.5">Suministro continuo</h3>
          <p class="text-sm text-charcoal/65 leading-relaxed">Abastecimiento programado por caja master, con distribución nacional en México.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="catalogo" class="py-20 md:py-28 gutter relative">
    <div class="absolute inset-x-0 top-1/3 h-96 bg-gradient-to-r from-cube/20 via-white/50 to-sage/30 blur-3xl pointer-events-none"></div>
    <div class="max-w-[1440px] mx-auto relative z-10">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-14 md:mb-16 gap-6 reveal">
        <div>
          <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full glass-card-subtle mb-5">
            <span class="w-1.5 h-1.5 rounded-full bg-charcoal"></span>
            <span class="text-[11px] font-mono uppercase tracking-[0.2em] text-charcoal/80 font-semibold">02 · Colección B2B</span>
          </div>
          <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-charcoal tracking-tighter leading-[1.05]">Tres formatos.<br>Cero distracciones.</h2>
        </div>
        <p class="text-sm sm:text-base text-charcoal/65 max-w-md leading-relaxed">Pasa el cursor para ver la ficha técnica completa. Selecciónalo para integrarlo a tu cotización.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start reveal reveal-delay-1">

        <!-- PRODUCTO 1: CUBE -->
        <article class="product-card flex flex-col cursor-pointer group" data-tone="cube" data-slider="sliderCube" tabindex="0" aria-label="Pañuelo Facial Cube">
          <div class="product-stage h-[360px] sm:h-[400px] flex items-center justify-center p-4">
            <div class="absolute top-5 left-6 right-6 flex items-center justify-between z-10">
              <span class="px-3 py-1 rounded-full bg-linen/80 backdrop-blur-md text-[10px] font-mono uppercase tracking-widest text-charcoal/70 font-medium border border-white">01 · Formato cúbico</span>
              <span class="select-indicator px-3 py-1 rounded-full bg-linen/90 text-[10px] font-mono font-semibold text-charcoal transition-colors">WPC36</span>
            </div>
            <span class="halo"></span><span class="floor"></span>
            <img src="https://whitepanda.mx/wp-content/uploads/2026/10/WHITEPANDA-WPC36-1.webp" alt="Pañuelo Facial Cube WPC36" loading="lazy" decoding="async" class="product-img w-[82%] h-[82%] object-contain object-center mt-4" />
          </div>
          <div class="product-info-box p-8 sm:p-9 flex-1 flex flex-col">
            <div>
              <div class="flex items-center justify-between text-[11px] font-mono uppercase tracking-widest text-charcoal/50 mb-2">
                <span>Caja lavanda</span><span>2 capas · 20×19 cm</span>
              </div>
              <h3 class="text-3xl font-bold text-charcoal tracking-tight mb-3">Cube.</h3>
              <p class="text-sm text-charcoal/65 leading-relaxed">Pañuelos faciales elaborados con 100% fibra de bambú, de 2 capas y en color blanco natural. Ideal para el hogar, oficinas, hoteles y espacios de atención al cliente.</p>
              
              <div class="spec-reveal"><div>
                <dl class="pt-2">
                  <div class="spec-row"><dt>Material</dt><dd>100% fibra de bambú</dd></div>
                  <div class="spec-row"><dt>Hoja</dt><dd>20 × 19 cm</dd></div>
                  <div class="spec-row"><dt>Contenido</dt><dd>36 cubos por cartón</dd></div>
                  <div class="spec-row"><dt>Dimensión cartón</dt><dd>34 × 34 × 45 cm</dd></div>
                  <div class="spec-row"><dt>Peso bruto</dt><dd>5.1 kg</dd></div>
                  <div class="spec-row"><dt>Atributos</dt><dd>Biodegradable · Sin cloro</dd></div>
                </dl>
              </div></div>
            </div>
            <div class="pt-6 mt-7 border-t border-charcoal/10 flex items-center justify-between gap-4">
              <button type="button" data-quick="sliderCube" class="group/btn inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-charcoal hover:opacity-70 transition-opacity">
                <span>+ Cotizar caja master</span><span class="arrow-slide">→</span>
              </button>
              <span class="text-[11px] font-mono text-charcoal/45"><span class="hover-hint">Ver ficha ↑</span></span>
            </div>
          </div>
        </article>

        <!-- PRODUCTO 2: FLAT -->
        <article class="product-card flex flex-col cursor-pointer group" data-tone="flat" data-slider="sliderFlat" tabindex="0" aria-label="Pañuelo Facial Flat">
          <div class="product-stage h-[360px] sm:h-[400px] flex items-center justify-center p-3">
            <div class="absolute top-5 left-6 right-6 flex items-center justify-between z-10">
              <span class="px-3 py-1 rounded-full bg-linen/80 backdrop-blur-md text-[10px] font-mono uppercase tracking-widest text-charcoal/70 font-medium border border-white">02 · Formato ejecutivo</span>
              <span class="select-indicator px-3 py-1 rounded-full bg-linen/90 text-[10px] font-mono font-semibold text-charcoal transition-colors">WPC72</span>
            </div>
            <span class="halo"></span><span class="floor"></span>
            <img src="https://whitepanda.mx/wp-content/uploads/2026/10/WHITEPANDA-WPC72-1.webp" alt="Pañuelo Facial Flat WPC72" loading="lazy" decoding="async" class="product-img w-[90%] h-[86%] object-contain object-center mt-4" />
          </div>
          <div class="product-info-box p-8 sm:p-9 flex-1 flex flex-col">
            <div>
              <div class="flex items-center justify-between text-[11px] font-mono uppercase tracking-widest text-charcoal/50 mb-2">
                <span>Caja piedra</span><span>90 hojas · 2 capas</span>
              </div>
              <h3 class="text-3xl font-bold text-charcoal tracking-tight mb-3">Flat.</h3>
              <p class="text-sm text-charcoal/65 leading-relaxed">Pañuelos faciales de 100% fibra de bambú. Su caja rectangular de formato compacto contiene 90 hojas y es ideal para habitaciones, oficinas, hoteles y áreas de servicio.</p>
              
              <div class="spec-reveal"><div>
                <dl class="pt-2">
                  <div class="spec-row"><dt>Material</dt><dd>100% fibra de bambú</dd></div>
                  <div class="spec-row"><dt>Hoja</dt><dd>20 × 19 cm</dd></div>
                  <div class="spec-row"><dt>Cajilla</dt><dd>21 × 11 × 5 cm (90 hojas)</dd></div>
                  <div class="spec-row"><dt>Contenido</dt><dd>72 cajas por cartón</dd></div>
                  <div class="spec-row"><dt>Dimensión cartón</dt><dd>46 × 32 × 65 cm</dd></div>
                  <div class="spec-row"><dt>Peso bruto</dt><dd>9.85 kg</dd></div>
                </dl>
              </div></div>
            </div>
            <div class="pt-6 mt-7 border-t border-charcoal/10 flex items-center justify-between gap-4">
              <button type="button" data-quick="sliderFlat" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-charcoal hover:opacity-70 transition-opacity">
                <span>+ Cotizar caja master</span><span class="arrow-slide">→</span>
              </button>
              <span class="text-[11px] font-mono text-charcoal/45"><span class="hover-hint">Ver ficha ↑</span></span>
            </div>
          </div>
        </article>

        <!-- PRODUCTO 3: POCKET -->
        <article class="product-card flex flex-col cursor-pointer group" data-tone="pocket" data-slider="sliderPocket" tabindex="0" aria-label="Pañuelo Facial Pocket">
          <div class="product-stage h-[360px] sm:h-[400px] flex items-center justify-center p-3">
            <div class="absolute top-5 left-6 right-6 flex items-center justify-between z-10">
              <span class="px-3 py-1 rounded-full bg-linen/80 backdrop-blur-md text-[10px] font-mono uppercase tracking-widest text-charcoal/70 font-medium border border-white">03 · Formato amenidad</span>
              <span class="select-indicator px-3 py-1 rounded-full bg-linen/90 text-[10px] font-mono font-semibold text-charcoal transition-colors">WPP24</span>
            </div>
            <span class="halo"></span><span class="floor"></span>
            <img src="https://whitepanda.mx/wp-content/uploads/2026/10/WHITEPANDA-WPP24-1.webp" alt="Pañuelo Facial Pocket WPP24" loading="lazy" decoding="async" class="product-img w-[90%] h-[86%] object-contain object-center mt-4" />
          </div>
          <div class="product-info-box p-8 sm:p-9 flex-1 flex flex-col">
            <div>
              <div class="flex items-center justify-between text-[11px] font-mono uppercase tracking-widest text-charcoal/50 mb-2">
                <span>Blanco natural</span><span>15 hojas · 2 capas</span>
              </div>
              <h3 class="text-3xl font-bold text-charcoal tracking-tight mb-3">Pocket.</h3>
              <p class="text-sm text-charcoal/65 leading-relaxed">Cada pocket contiene 15 hojas de 20×20 cm. Su presentación portátil es ideal para uso personal, viajes, amenidades y establecimientos de hospitalidad.</p>
              
              <div class="spec-reveal"><div>
                <dl class="pt-2">
                  <div class="spec-row"><dt>Material</dt><dd>100% fibra de bambú</dd></div>
                  <div class="spec-row"><dt>Hoja</dt><dd>20 × 20 cm</dd></div>
                  <div class="spec-row"><dt>Paquete</dt><dd>8 pockets (15 hojas c/u)</dd></div>
                  <div class="spec-row"><dt>Contenido</dt><dd>24 paquetes por cartón</dd></div>
                  <div class="spec-row"><dt>Dimensión cartón</dt><dd>32 × 22 × 42 cm</dd></div>
                  <div class="spec-row"><dt>Peso bruto</dt><dd>4 kg</dd></div>
                </dl>
              </div></div>
            </div>
            <div class="pt-6 mt-7 border-t border-charcoal/10 flex items-center justify-between gap-4">
              <button type="button" data-quick="sliderPocket" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-charcoal hover:opacity-70 transition-opacity">
                <span>+ Cotizar caja master</span><span class="arrow-slide">→</span>
              </button>
              <span class="text-[11px] font-mono text-charcoal/45"><span class="hover-hint">Ver ficha ↑</span></span>
            </div>
          </div>
        </article>

      </div>
    </div>
  </section>

  <section id="sectores" class="py-24 md:py-32 bg-sage/60 border-y border-charcoal/5 relative overflow-hidden">
    <div class="max-w-[1440px] mx-auto gutter mb-14 reveal">
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
        <div>
          <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-linen-light/70 border border-charcoal/10 mb-5">
            <span class="w-1.5 h-1.5 rounded-full bg-charcoal"></span>
            <span class="text-[11px] font-mono uppercase tracking-[0.2em] text-charcoal/80 font-semibold">03 · Aplicaciones</span>
          </div>
          <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-charcoal tracking-tighter leading-[1.08]">Donde la experiencia<br>del espacio importa.</h2>
        </div>
        <div class="flex flex-col sm:flex-row sm:items-center gap-6">
          <p class="text-sm text-charcoal/65 max-w-xs leading-relaxed">Desliza para ver cómo cada formato se integra en distintos entornos profesionales.</p>
          <div class="flex items-center gap-3">
            <button type="button" onclick="scrollSectoresCarousel(-1)" class="w-12 h-12 rounded-full bg-linen-light/80 border border-charcoal/10 flex items-center justify-center text-charcoal hover:bg-charcoal hover:text-linen-light hover:scale-105 transition-all duration-300 shadow-sm" aria-label="Anterior">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button type="button" onclick="scrollSectoresCarousel(1)" class="w-12 h-12 rounded-full bg-linen-light/80 border border-charcoal/10 flex items-center justify-center text-charcoal hover:bg-charcoal hover:text-linen-light hover:scale-105 transition-all duration-300 shadow-sm" aria-label="Siguiente">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M9 5l7 7-7 7"></path></svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="relative w-full reveal reveal-delay-1">
      <div id="carousel-sectores" onscroll="updateSectoresProgress()" class="flex gap-6 sm:gap-8 overflow-x-auto snap-x snap-mandatory hide-scrollbar pb-10 pt-2" style="padding-left: max(1.5rem, calc((100vw - 1440px) / 2 + 2.5rem)); padding-right: max(1.5rem, calc((100vw - 1440px) / 2 + 2.5rem)); scroll-padding-left: max(1.5rem, calc((100vw - 1440px) / 2 + 2.5rem));">

        <!-- 01 Hotelería -->
        <article class="space-card snap-start shrink-0 w-[300px] sm:w-[370px] glass-card-subtle rounded-[2.25rem] p-3 flex flex-col group">
          <div class="space-media h-[240px] sm:h-[260px]">
            <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=800&q=80" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=800&q=80';" alt="Suite de hotel" loading="lazy" />
            <span class="absolute top-4 left-4 px-3.5 py-1.5 rounded-full bg-white/80 backdrop-blur border border-white text-[10px] font-mono uppercase tracking-[0.18em] text-charcoal/75 font-medium">Hospitality · Suite</span>
            <span class="absolute top-3 right-5 text-3xl font-serif italic text-white/90 drop-shadow">01</span>
          </div>
          <div class="p-5 sm:p-7 flex-1 flex flex-col">
            <h3 class="text-2xl font-bold text-charcoal tracking-tight mb-2">Hotelería & Suites</h3>
            <p class="text-sm text-charcoal/65 leading-relaxed">Tocadores de habitación, burós de suite y baños de cortesía.</p>
            <div class="pt-5 mt-auto border-t border-charcoal/10 flex items-center justify-between" style="margin-top: 1.5rem">
              <div><span class="block text-[10px] font-mono uppercase tracking-widest text-charcoal/45 mb-1">Formato sugerido</span><span class="fmt-pill inline-block px-3 py-1 rounded-full bg-white/80 text-xs font-bold text-charcoal">Cube WPC36 · Pocket WPP24</span></div>
              <a href="#cotizador" data-quick="sliderCube" class="w-10 h-10 rounded-full bg-white/70 border border-charcoal/15 flex items-center justify-center text-charcoal group-hover:bg-charcoal group-hover:text-white transition-all" aria-label="Cotizar para hotelería"><span class="arrow-slide">→</span></a>
            </div>
          </div>
        </article>

        <!-- 02 Corporativos -->
        <article class="space-card snap-start shrink-0 w-[300px] sm:w-[370px] glass-card-subtle rounded-[2.25rem] p-3 flex flex-col group">
          <div class="space-media h-[240px] sm:h-[260px]">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" alt="Mesa de sala de juntas" loading="lazy" />
            <span class="absolute top-4 left-4 px-3.5 py-1.5 rounded-full bg-white/80 backdrop-blur border border-white text-[10px] font-mono uppercase tracking-[0.18em] text-charcoal/75 font-medium">Salas de consejo</span>
            <span class="absolute top-3 right-5 text-3xl font-serif italic text-white/90 drop-shadow">02</span>
          </div>
          <div class="p-5 sm:p-7 flex-1 flex flex-col">
            <h3 class="text-2xl font-bold text-charcoal tracking-tight mb-2">Corporativos & Oficinas</h3>
            <p class="text-sm text-charcoal/65 leading-relaxed">Mesas de juntas, despachos directivos y recepciones.</p>
            <div class="pt-5 mt-auto border-t border-charcoal/10 flex items-center justify-between" style="margin-top: 1.5rem">
              <div><span class="block text-[10px] font-mono uppercase tracking-widest text-charcoal/45 mb-1">Formato sugerido</span><span class="fmt-pill inline-block px-3 py-1 rounded-full bg-white/80 text-xs font-bold text-charcoal">Flat WPC72 · Alta capacidad</span></div>
              <a href="#cotizador" data-quick="sliderFlat" class="w-10 h-10 rounded-full bg-white/70 border border-charcoal/15 flex items-center justify-center text-charcoal group-hover:bg-charcoal group-hover:text-white transition-all" aria-label="Cotizar para corporativos"><span class="arrow-slide">→</span></a>
            </div>
          </div>
        </article>

        <!-- 03 Restaurantes -->
        <article class="space-card snap-start shrink-0 w-[300px] sm:w-[370px] glass-card-subtle rounded-[2.25rem] p-3 flex flex-col group">
          <div class="space-media h-[240px] sm:h-[260px]">
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=800&q=80" alt="Barra de restaurante" loading="lazy" />
            <span class="absolute top-4 left-4 px-3.5 py-1.5 rounded-full bg-white/80 backdrop-blur border border-white text-[10px] font-mono uppercase tracking-[0.18em] text-charcoal/75 font-medium">Gastronomía · Autor</span>
            <span class="absolute top-3 right-5 text-3xl font-serif italic text-white/90 drop-shadow">03</span>
          </div>
          <div class="p-5 sm:p-7 flex-1 flex flex-col">
            <h3 class="text-2xl font-bold text-charcoal tracking-tight mb-2">Restaurantes & Lounges</h3>
            <p class="text-sm text-charcoal/65 leading-relaxed">Tocadores, barras y recepciones de restaurantes de diseño.</p>
            <div class="pt-5 mt-auto border-t border-charcoal/10 flex items-center justify-between" style="margin-top: 1.5rem">
              <div><span class="block text-[10px] font-mono uppercase tracking-widest text-charcoal/45 mb-1">Formato sugerido</span><span class="fmt-pill inline-block px-3 py-1 rounded-full bg-white/80 text-xs font-bold text-charcoal">Cube WPC36 · Flat WPC72</span></div>
              <a href="#cotizador" data-quick="sliderCube" class="w-10 h-10 rounded-full bg-white/70 border border-charcoal/15 flex items-center justify-center text-charcoal group-hover:bg-charcoal group-hover:text-white transition-all" aria-label="Cotizar para restaurantes"><span class="arrow-slide">→</span></a>
            </div>
          </div>
        </article>

        <!-- 04 Consultorios & Spas -->
        <article class="space-card snap-start shrink-0 w-[300px] sm:w-[370px] glass-card-subtle rounded-[2.25rem] p-3 flex flex-col group">
          <div class="space-media h-[240px] sm:h-[260px]">
            <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?auto=format&fit=crop&w=800&q=80" alt="Cabina de spa" loading="lazy" />
            <span class="absolute top-4 left-4 px-3.5 py-1.5 rounded-full bg-white/80 backdrop-blur border border-white text-[10px] font-mono uppercase tracking-[0.18em] text-charcoal/75 font-medium">Wellness · Clínicas</span>
            <span class="absolute top-3 right-5 text-3xl font-serif italic text-white/90 drop-shadow">04</span>
          </div>
          <div class="p-5 sm:p-7 flex-1 flex flex-col">
            <h3 class="text-2xl font-bold text-charcoal tracking-tight mb-2">Consultorios & Spas</h3>
            <p class="text-sm text-charcoal/65 leading-relaxed">Cabinas, consultorios y clínicas privadas.</p>
            <div class="pt-5 mt-auto border-t border-charcoal/10 flex items-center justify-between" style="margin-top: 1.5rem">
              <div><span class="block text-[10px] font-mono uppercase tracking-widest text-charcoal/45 mb-1">Formato sugerido</span><span class="fmt-pill inline-block px-3 py-1 rounded-full bg-white/80 text-xs font-bold text-charcoal">Cube WPC36 · Suavidad 2 capas</span></div>
              <a href="#cotizador" data-quick="sliderCube" class="w-10 h-10 rounded-full bg-white/70 border border-charcoal/15 flex items-center justify-center text-charcoal group-hover:bg-charcoal group-hover:text-white transition-all" aria-label="Cotizar para consultorios"><span class="arrow-slide">→</span></a>
            </div>
          </div>
        </article>

        <!-- 05 Retail -->
        <article class="space-card snap-start shrink-0 w-[300px] sm:w-[370px] glass-card-subtle rounded-[2.25rem] p-3 flex flex-col group">
          <div class="space-media h-[240px] sm:h-[260px]">
            <img src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?auto=format&fit=crop&w=800&q=80" alt="Tienda boutique" loading="lazy" />
            <span class="absolute top-4 left-4 px-3.5 py-1.5 rounded-full bg-white/80 backdrop-blur border border-white text-[10px] font-mono uppercase tracking-[0.18em] text-charcoal/75 font-medium">Boutique · Amenidad</span>
            <span class="absolute top-3 right-5 text-3xl font-serif italic text-white/90 drop-shadow">05</span>
          </div>
          <div class="p-5 sm:p-7 flex-1 flex flex-col">
            <h3 class="text-2xl font-bold text-charcoal tracking-tight mb-2">Retail Especializado</h3>
            <p class="text-sm text-charcoal/65 leading-relaxed">Kits de bienvenida, congresos y concept stores.</p>
            <div class="pt-5 mt-auto border-t border-charcoal/10 flex items-center justify-between" style="margin-top: 1.5rem">
              <div><span class="block text-[10px] font-mono uppercase tracking-widest text-charcoal/45 mb-1">Formato sugerido</span><span class="fmt-pill inline-block px-3 py-1 rounded-full bg-white/80 text-xs font-bold text-charcoal">Pocket WPP24 · Portátil</span></div>
              <a href="#cotizador" data-quick="sliderPocket" class="w-10 h-10 rounded-full bg-white/70 border border-charcoal/15 flex items-center justify-center text-charcoal group-hover:bg-charcoal group-hover:text-white transition-all" aria-label="Cotizar para retail"><span class="arrow-slide">→</span></a>
            </div>
          </div>
        </article>

        <!-- 06 Mayoreo -->
        <article class="space-card snap-start shrink-0 w-[300px] sm:w-[370px] glass-card-subtle rounded-[2.25rem] p-3 flex flex-col group">
          <div class="space-media h-[240px] sm:h-[260px]">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80" alt="Almacén de distribución" loading="lazy" />
            <span class="absolute top-4 left-4 px-3.5 py-1.5 rounded-full bg-white/80 backdrop-blur border border-white text-[10px] font-mono uppercase tracking-[0.18em] text-charcoal/75 font-medium">Abasto · HORECA</span>
            <span class="absolute top-3 right-5 text-3xl font-serif italic text-white/90 drop-shadow">06</span>
          </div>
          <div class="p-5 sm:p-7 flex-1 flex flex-col">
            <h3 class="text-2xl font-bold text-charcoal tracking-tight mb-2">Distribución Mayoreo</h3>
            <p class="text-sm text-charcoal/65 leading-relaxed">Caja master y tarima para distribuidores y operadores HORECA.</p>
            <div class="pt-5 mt-auto border-t border-charcoal/10 flex items-center justify-between" style="margin-top: 1.5rem">
              <div><span class="block text-[10px] font-mono uppercase tracking-widest text-charcoal/45 mb-1">Formato sugerido</span><span class="fmt-pill inline-block px-3 py-1 rounded-full bg-white/80 text-xs font-bold text-charcoal">3 formatos · Tarima</span></div>
              <a href="#cotizador" class="w-10 h-10 rounded-full bg-white/70 border border-charcoal/15 flex items-center justify-center text-charcoal group-hover:bg-charcoal group-hover:text-white transition-all" aria-label="Cotizar mayoreo"><span class="arrow-slide">→</span></a>
            </div>
          </div>
        </article>

      </div>

      <div class="max-w-[1440px] mx-auto gutter mt-2 flex items-center justify-between gap-6">
        <div class="w-full max-w-xs h-1 bg-charcoal/10 rounded-full overflow-hidden">
          <div id="sectores-progress-bar" class="h-full bg-charcoal rounded-full transition-all duration-300" style="width: 33%;"></div>
        </div>
        <span id="sectores-counter" class="text-[11px] font-mono uppercase tracking-widest text-charcoal/50">01 — 06 · Espacios</span>
      </div>
    </div>
  </section>

  <section id="bambu" class="py-24 md:py-32 gutter relative overflow-hidden">
    <div class="absolute right-1/4 top-16 w-96 h-96 rounded-full bg-sage/50 blur-3xl pointer-events-none"></div>
    <div class="absolute left-12 bottom-12 w-80 h-80 rounded-full bg-white/70 blur-3xl pointer-events-none"></div>
    <div class="max-w-[1440px] mx-auto relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end mb-16 reveal">
        <div class="lg:col-span-7">
          <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full glass-card-subtle mb-5">
            <span class="w-1.5 h-1.5 rounded-full bg-bamboo"></span>
            <span class="text-[11px] font-mono uppercase tracking-[0.2em] text-charcoal/80 font-semibold">04 · Por qué bambú</span>
          </div>
          <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-charcoal tracking-tighter leading-[1.05]">Una materia prima que<br>cambia el estándar.</h2>
        </div>
        <div class="lg:col-span-5 lg:pl-8 lg:border-l lg:border-charcoal/15">
          <p class="text-lg sm:text-xl font-medium text-charcoal tracking-tight leading-snug mb-2">Una elección de origen vegetal para una operación más consciente.</p>
          <p class="text-sm text-charcoal/60 leading-relaxed">Suavidad y resistencia en cada hoja.</p>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 reveal reveal-delay-1">
        <div class="bento-card glass-card-subtle rounded-[2rem] p-8 flex flex-col justify-between min-h-[270px]">
          <div class="flex items-center justify-between"><span class="text-[10px] font-mono uppercase tracking-[0.2em] text-charcoal/50 font-semibold">01 / Fibra</span><span class="dot w-2 h-2 rounded-full bg-charcoal/20"></span></div>
          <div class="my-6"><div class="big text-5xl sm:text-6xl font-bold text-charcoal tracking-tighter leading-none mb-3">100%</div><h3 class="text-lg font-bold text-charcoal tracking-tight">Fibra de bambú</h3></div>
          <p class="text-xs text-charcoal/65 leading-relaxed pt-4 border-t border-charcoal/10">Toda la línea se elabora con fibra de bambú en doble capa.</p>
        </div>
        <div class="bento-card glass-card-subtle rounded-[2rem] p-8 flex flex-col justify-between min-h-[270px]">
          <div class="flex items-center justify-between"><span class="text-[10px] font-mono uppercase tracking-[0.2em] text-charcoal/50 font-semibold">02 / Ciclo</span><span class="dot w-2 h-2 rounded-full bg-sage-dark"></span></div>
          <div class="my-6"><div class="big text-5xl sm:text-6xl font-bold text-charcoal tracking-tighter leading-none mb-3">BIO</div><h3 class="text-lg font-bold text-charcoal tracking-tight">Biodegradable</h3></div>
          <p class="text-xs text-charcoal/65 leading-relaxed pt-4 border-t border-charcoal/10">Una fibra de origen vegetal para una operación más responsable.</p>
        </div>
        <div class="bento-card glass-card-subtle rounded-[2rem] p-8 flex flex-col justify-between min-h-[270px]">
          <div class="flex items-center justify-between"><span class="text-[10px] font-mono uppercase tracking-[0.2em] text-charcoal/50 font-semibold">03 / Regeneración</span><span class="dot w-2 h-2 rounded-full bg-bamboo"></span></div>
          <div class="my-6"><div class="big text-5xl sm:text-6xl font-bold text-charcoal tracking-tighter leading-none mb-3">∞</div><h3 class="text-lg font-bold text-charcoal tracking-tight">Crecimiento continuo</h3></div>
          <p class="text-xs text-charcoal/65 leading-relaxed pt-4 border-t border-charcoal/10">El bambú puede regenerarse desde su raíz tras la cosecha, según la especie y el manejo del cultivo.</p>
        </div>
        <div class="bento-card glass-card-subtle rounded-[2rem] p-8 flex flex-col justify-between min-h-[270px]">
          <div class="flex items-center justify-between"><span class="text-[10px] font-mono uppercase tracking-[0.2em] text-charcoal/50 font-semibold">04 / Proceso</span><span class="dot w-2 h-2 rounded-full bg-cube"></span></div>
          <div class="my-6"><div class="big text-5xl sm:text-6xl font-bold text-charcoal tracking-tighter leading-none mb-3">0</div><h3 class="text-lg font-bold text-charcoal tracking-tight">Cloro elemental</h3></div>
          <p class="text-xs text-charcoal/65 leading-relaxed pt-4 border-t border-charcoal/10">Hoja blanco natural, sin blanqueo con cloro elemental.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="cotizador" class="py-32 bg-charcoal text-white relative overflow-hidden">
    <div class="absolute -right-20 top-20 text-[400px] font-serif text-white/5 select-none pointer-events-none leading-none" aria-hidden="true">竹</div>
    <div class="max-w-6xl mx-auto gutter relative z-10 reveal">
      <div class="text-center max-w-3xl mx-auto mb-20">
        <h2 class="text-4xl md:text-6xl font-bold tracking-tighter mb-6">Configura tu operación.</h2>
        <p class="text-lg text-white/60">Ajusta el volumen en cajas master y solicita una propuesta de nuestro equipo comercial en México.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
        <div class="space-y-10">
          <div>
            <div class="flex justify-between items-end mb-3">
              <label for="sliderCube" class="text-lg font-semibold">Cube <span class="text-white/45 font-mono text-sm">WPC36 · 36 cubos/cartón</span></label>
              <span id="valCube" class="text-2xl font-bold font-mono">0</span>
            </div>
            <input id="sliderCube" type="range" min="0" max="50" value="0" class="wp-slider-dark" aria-label="Cantidad de cajas master Cube"/>
          </div>
          <div>
            <div class="flex justify-between items-end mb-3">
              <label for="sliderFlat" class="text-lg font-semibold">Flat <span class="text-white/45 font-mono text-sm">WPC72 · 72 cajillas/cartón</span></label>
              <span id="valFlat" class="text-2xl font-bold font-mono">0</span>
            </div>
            <input id="sliderFlat" type="range" min="0" max="50" value="0" class="wp-slider-dark" aria-label="Cantidad de cajas master Flat"/>
          </div>
          <div>
            <div class="flex justify-between items-end mb-3">
              <label for="sliderPocket" class="text-lg font-semibold">Pocket <span class="text-white/45 font-mono text-sm">WPP24 · 24 paquetes/cartón</span></label>
              <span id="valPocket" class="text-2xl font-bold font-mono">0</span>
            </div>
            <input id="sliderPocket" type="range" min="0" max="50" value="0" class="wp-slider-dark" aria-label="Cantidad de cajas master Pocket"/>
          </div>
          <div class="pt-8 border-t border-white/10 flex justify-between items-center">
            <span class="text-white/60 uppercase tracking-widest text-xs font-bold">Volumen mensual estimado</span>
            <span id="totalMastersText" class="text-4xl font-bold tabular-nums">0 cajas</span>
          </div>

          <!-- Botón de WhatsApp destacado + Datos de contacto -->
          <div class="pt-2 space-y-5">
            <a href="https://api.whatsapp.com/send?phone=523323481484&text=%C2%A1Hola%20Papel%20Oro!%20Necesito%20ayuda..." target="_blank" rel="noopener noreferrer" class="btn-shine group flex items-center justify-between gap-4 w-full p-4 sm:px-6 sm:py-4 rounded-2xl bg-[#25D366]/15 hover:bg-[#25D366]/25 border border-[#25D366]/40 text-white transition-all duration-300 shadow-lg">
              <div class="flex items-center gap-4">
                <span class="w-11 h-11 rounded-xl bg-[#25D366] text-charcoal flex items-center justify-center shrink-0 shadow-md group-hover:scale-105 transition-transform">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.126.556 4.124 1.535 5.865l-1.535 5.603 5.756-1.509c1.693.924 3.633 1.451 5.699 1.451 6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12z"/>
                  </svg>
                </span>
                <div class="text-left">
                  <span class="block text-[10px] font-mono uppercase tracking-widest text-[#25D366] font-bold">Atención inmediata B2B · WhatsApp</span>
                  <span class="text-base sm:text-lg font-bold tracking-tight text-white">+52 33 2348 1484</span>
                </div>
              </div>
              <span class="px-3.5 py-1.5 rounded-full bg-[#25D366] text-charcoal text-[11px] font-bold uppercase tracking-wider shrink-0">Escribir <span class="arrow-slide">→</span></span>
            </a>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm pt-1">
              <div class="p-3.5 rounded-xl bg-white/5 border border-white/10">
                <span class="block text-[10px] font-mono uppercase tracking-widest text-white/45 mb-1">Correo directo</span>
                <a href="mailto:ventas@papeloro.com.mx" class="font-semibold hover:text-white/80 select-all break-all underline decoration-white/30">ventas@papeloro.com.mx</a>
              </div>
              <div class="p-3.5 rounded-xl bg-white/5 border border-white/10">
                <span class="block text-[10px] font-mono uppercase tracking-widest text-white/45 mb-1">Horario de atención</span>
                <span class="font-semibold">Lunes a Viernes · 9:00–18:30 h</span>
              </div>
            </div>
          </div>
        </div>

        <div class="glass-panel-dark p-8 md:p-10 rounded-3xl">
          <form id="b2bQuoteForm" action="https://formsubmit.co/ventas@papeloro.com.mx" method="POST" class="space-y-6" novalidate>
            <input type="hidden" name="_subject" id="q-subject" value="Nueva cotización B2B — White Panda México">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="Volumen_Solicitado" id="q-volumen-hidden" value="0 cajas master">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
              <div><label for="q-nombre" class="block text-xs font-bold uppercase tracking-wider text-white/50 mb-2">Nombre *</label><input id="q-nombre" name="Nombre" type="text" required autocomplete="name" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:outline-none focus:border-white/40 transition-colors"/></div>
              <div><label for="q-empresa" class="block text-xs font-bold uppercase tracking-wider text-white/50 mb-2">Empresa / Hotel *</label><input id="q-empresa" name="Empresa" type="text" required autocomplete="organization" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:outline-none focus:border-white/40 transition-colors"/></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
              <div><label for="q-correo" class="block text-xs font-bold uppercase tracking-wider text-white/50 mb-2">Correo corporativo *</label><input id="q-correo" name="email" type="email" required autocomplete="email" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:outline-none focus:border-white/40 transition-colors"/></div>
              <div><label for="q-tel" class="block text-xs font-bold uppercase tracking-wider text-white/50 mb-2">Teléfono / WhatsApp *</label><input id="q-tel" name="Telefono" type="tel" required autocomplete="tel" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:outline-none focus:border-white/40 transition-colors"/></div>
            </div>
            <div>
              <label for="q-sector" class="block text-xs font-bold uppercase tracking-wider text-white/50 mb-2">Sector</label>
              <select id="q-sector" name="Sector" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:outline-none focus:border-white/40 transition-colors">
                <option class="text-charcoal">Hotelería & Hospitality</option>
                <option class="text-charcoal">Corporativo & Oficinas</option>
                <option class="text-charcoal">Restaurante & Food Service</option>
                <option class="text-charcoal">Institucional & Educación</option>
                <option class="text-charcoal">Retail especializado</option>
                <option class="text-charcoal">Distribución & Mayoreo</option>
              </select>
            </div>
            <div>
              <label for="q-ciudad" class="block text-xs font-bold uppercase tracking-wider text-white/50 mb-2">Ciudad y frecuencia de entrega</label>
              <input id="q-ciudad" name="Ciudad_y_Frecuencia" type="text" placeholder="Ej. CDMX / Guadalajara / Cancún — Mensual" class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/25 focus:outline-none focus:border-white/40 transition-colors"/>
            </div>
            <p id="formError" class="hidden text-sm text-[#F2D2C4]" role="alert">Completa nombre, empresa, correo y teléfono para enviar tu solicitud.</p>
            <button id="submitQuoteBtn" type="submit" class="btn-shine group w-full py-4 rounded-full bg-linen-light text-charcoal font-bold text-xs uppercase tracking-widest hover:scale-[1.02] transition-transform shadow-lg">Solicitar cotización B2B <span class="arrow-slide">→</span></button>
          </form>
          <div id="quoteSuccessBox" class="hidden py-10 text-center space-y-5" role="status">
            <div class="w-14 h-14 rounded-full bg-[#25D366]/20 text-[#25D366] border border-[#25D366]/40 flex items-center justify-center mx-auto text-2xl">✓</div>
            <h3 class="text-2xl font-bold tracking-tight">Solicitud enviada a ventas@papeloro.com.mx</h3>
            <p id="quoteSummary" class="text-sm text-white/65 max-w-sm mx-auto leading-relaxed">Nuestro equipo comercial te contactará con la propuesta y el envío de muestras.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2">
              <a id="quoteMailtoFallback" href="mailto:ventas@papeloro.com.mx" class="px-5 py-2.5 rounded-full bg-white/10 hover:bg-white/20 text-xs font-semibold uppercase tracking-wider text-white transition-colors">Abrir en mi cliente de correo ✉</a>
              <a href="https://api.whatsapp.com/send?phone=523323481484&text=%C2%A1Hola%20Papel%20Oro!%20Necesito%20ayuda..." target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 rounded-full bg-[#25D366] text-charcoal text-xs font-bold uppercase tracking-wider hover:scale-105 transition-transform">Confirmar por WhatsApp →</a>
            </div>
            <div class="pt-3">
              <button onclick="resetQuoteForm()" type="button" class="text-[10px] font-bold uppercase tracking-widest text-white/40 hover:text-white transition-colors border-b border-white/20 pb-1">
                Nueva cotización
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <a href="https://api.whatsapp.com/send?phone=523323481484&text=%C2%A1Hola%20Papel%20Oro!%20Necesito%20ayuda..." target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp a Papel Oro" class="fixed bottom-6 right-6 z-40 group flex items-center gap-3 bg-[#25D366] text-charcoal pl-4 pr-5 py-3.5 rounded-full shadow-2xl hover:scale-105 transition-all duration-300 border border-white/40">
    <svg class="w-6 h-6 fill-current shrink-0" viewBox="0 0 24 24" aria-hidden="true">
      <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12 0 2.126.556 4.124 1.535 5.865l-1.535 5.603 5.756-1.509c1.693.924 3.633 1.451 5.699 1.451 6.627 0 12-5.373 12-12 0-6.627-5.373-12-12-12z"/>
    </svg>
    <span class="text-xs font-bold uppercase tracking-wider">WhatsApp B2B</span>
  </a>

  <footer class="bg-charcoal text-white/50 border-t border-white/10 py-12 gutter">
    <div class="max-w-[1440px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-6 text-xs">
      <div class="flex items-center gap-3 flex-wrap justify-center">
        <span class="font-serif italic text-lg text-white/80">竹</span>
        <span class="font-mono uppercase tracking-widest text-white/80 font-semibold">White Panda México</span>
        <span class="text-white/30">·</span>
        <span>Pañuelos 100% fibra de bambú</span>
      </div>
      <div class="flex items-center gap-6 font-mono text-[11px] uppercase tracking-wider flex-wrap justify-center">
        <a href="#filosofia" class="hover:text-white transition-colors">Filosofía</a>
        <a href="#catalogo" class="hover:text-white transition-colors">Productos</a>
        <a href="#sectores" class="hover:text-white transition-colors">Espacios</a>
        <a href="#bambu" class="hover:text-white transition-colors">Bambú</a>
      </div>
      <div class="text-white/40 font-mono text-[11px] text-center">© 2026 White Panda · Parte de Grupo Papel Oro</div>
    </div>
  </footer>

  <script>
    (function () {
      var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

      /* 1. Revelado al hacer scroll */
      function reveal() {
        var els = document.querySelectorAll('.reveal:not(.active)');
        for (var i = 0; i < els.length; i++) if (els[i].getBoundingClientRect().top < window.innerHeight - 60) els[i].classList.add('active');
      }
      window.addEventListener('scroll', reveal, { passive: true });
      reveal();

      /* 3. Tarjetas de producto: inclinación 3D + luz + selección */
      document.querySelectorAll('.product-card').forEach(function (card) {
        if (!reduce && finePointer) {
          card.addEventListener('mousemove', function (e) {
            var r = card.getBoundingClientRect(); var x = (e.clientX - r.left) / r.width, y = (e.clientY - r.top) / r.height;
            card.classList.add('is-tilting');
            card.style.setProperty('--ry', ((x - 0.5) * 8).toFixed(2) + 'deg');
            card.style.setProperty('--rx', ((0.5 - y) * 6).toFixed(2) + 'deg');
            card.style.setProperty('--mx', (x * 100).toFixed(1) + '%');
            card.style.setProperty('--my', (y * 100).toFixed(1) + '%');
          });
          card.addEventListener('mouseleave', function () {
            card.classList.remove('is-tilting'); card.style.setProperty('--rx', '0deg'); card.style.setProperty('--ry', '0deg');
          });
        }
        function toggle() {
          var selected = card.classList.toggle('card-selected');
          card.setAttribute('aria-pressed', selected ? 'true' : 'false');
          var sliderId = card.getAttribute('data-slider');
          var s = sliderId ? document.getElementById(sliderId) : null;
          if (s) {
            if (selected && (parseInt(s.value, 10) || 0) === 0) {
              s.value = 5;
            } else if (!selected) {
              s.value = 0;
            }
            updateQuoteCalc();
          }
        }
        card.addEventListener('click', function (e) { if (e.target.closest('[data-quick]')) return; toggle(); });
        card.addEventListener('keydown', function (e) { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); toggle(); } });
      });

      /* 4. Calculadora B2B */
      function updateQuoteCalc() {
        var total = 0;
        [['sliderCube', 'valCube'], ['sliderFlat', 'valFlat'], ['sliderPocket', 'valPocket']].forEach(function (p) {
          var s = document.getElementById(p[0]); var v = parseInt(s.value, 10) || 0; total += v;
          document.getElementById(p[1]).textContent = v;
          s.style.setProperty('--fill', (v / parseInt(s.max, 10) * 100) + '%');
          var card = document.querySelector('.product-card[data-slider="' + p[0] + '"]');
          if (card) {
            card.classList.toggle('card-selected', v > 0);
            card.setAttribute('aria-pressed', v > 0 ? 'true' : 'false');
          }
        });
        document.getElementById('totalMastersText').textContent = total + (total === 1 ? ' caja' : ' cajas');
        var navBadge = document.getElementById('navTotal');
        navBadge.textContent = total;
        if (total > 0) {
          navBadge.classList.remove('hidden');
          navBadge.classList.add('grid');
        } else {
          navBadge.classList.add('hidden');
          navBadge.classList.remove('grid');
        }
      }
      ['sliderCube', 'sliderFlat', 'sliderPocket'].forEach(function (id) { document.getElementById(id).addEventListener('input', updateQuoteCalc); });
      
      // Conectar botones "+ Cotizar caja master" del catálogo
      document.querySelectorAll('[data-quick]').forEach(function (b) {
        b.addEventListener('click', function (e) {
          e.preventDefault(); e.stopPropagation();
          var s = document.getElementById(b.getAttribute('data-quick'));
          if (s) {
            s.value = Math.min(50, (parseInt(s.value, 10) || 0) + 5); 
            updateQuoteCalc();
            document.getElementById('cotizador').scrollIntoView({ behavior: reduce ? 'auto' : 'smooth' });
          }
        });
      });

      /* 5. Carrusel de espacios */
      window.scrollSectoresCarousel = function (dir) {
        var track = document.getElementById('carousel-sectores'); 
        var card = track.querySelector('article');
        if(track && card) track.scrollBy({ left: dir * (card.getBoundingClientRect().width + 32), behavior: reduce ? 'auto' : 'smooth' });
      };
      window.updateSectoresProgress = function () {
        var track = document.getElementById('carousel-sectores'), bar = document.getElementById('sectores-progress-bar');
        if(!track || !bar) return;
        var max = track.scrollWidth - track.clientWidth; var p = max > 0 ? track.scrollLeft / max : 1;
        bar.style.width = Math.max(18, p * 100) + '%';
        var cards = track.querySelectorAll('article'); var idx = Math.min(cards.length, Math.round(p * (cards.length - 1)) + 1);
        document.getElementById('sectores-counter').textContent = String(idx).padStart(2, '0') + ' — 06 · Espacios';
      };
      if(document.getElementById('carousel-sectores')) {
        window.updateSectoresProgress();
      }

      /* 6. Formulario B2B funcional hacia ventas@papeloro.com.mx */
      document.getElementById('b2bQuoteForm').addEventListener('submit', function (e) {
        e.preventDefault();
        var ids = ['q-nombre', 'q-empresa', 'q-correo', 'q-tel']; 
        var ok = ids.every(function (id) { return document.getElementById(id).value.trim(); });
        document.getElementById('formError').classList.toggle('hidden', ok);
        if (!ok) return;
        
        var nombre = document.getElementById('q-nombre').value.trim();
        var empresa = document.getElementById('q-empresa').value.trim();
        var correo = document.getElementById('q-correo').value.trim();
        var tel = document.getElementById('q-tel').value.trim();
        var sector = document.getElementById('q-sector').value;
        var ciudad = document.getElementById('q-ciudad').value.trim() || 'Por definir';
        var c = document.getElementById('sliderCube').value;
        var f = document.getElementById('sliderFlat').value;
        var p = document.getElementById('sliderPocket').value;
        var totalCajas = (parseInt(c, 10) || 0) + (parseInt(f, 10) || 0) + (parseInt(p, 10) || 0);

        var desglose = 'Cube (WPC36): ' + c + ' cajas | Flat (WPC72): ' + f + ' cajas | Pocket (WPP24): ' + p + ' cajas (Total: ' + totalCajas + ' cajas master)';
        document.getElementById('q-volumen-hidden').value = desglose;
        document.getElementById('q-subject').value = 'Cotización B2B White Panda — ' + empresa + ' (' + totalCajas + ' cajas)';

        var mailSubject = encodeURIComponent('Cotización B2B White Panda — ' + empresa);
        var mailBody = encodeURIComponent(
          'Hola equipo de Papel Oro / White Panda,\n\n' +
          'Solicito una cotización B2B con los siguientes datos:\n\n' +
          '• Nombre: ' + nombre + '\n' +
          '• Empresa / Hotel: ' + empresa + '\n' +
          '• Correo: ' + correo + '\n' +
          '• Teléfono / WhatsApp: ' + tel + '\n' +
          '• Sector: ' + sector + '\n' +
          '• Ciudad y frecuencia: ' + ciudad + '\n\n' +
          'Volumen estimado en cajas master:\n' +
          '• Cube (WPC36): ' + c + ' cajas\n' +
          '• Flat (WPC72): ' + f + ' cajas\n' +
          '• Pocket (WPP24): ' + p + ' cajas\n' +
          '• Total mensual estimado: ' + totalCajas + ' cajas master\n'
        );
        var mailtoUrl = 'mailto:ventas@papeloro.com.mx?subject=' + mailSubject + '&body=' + mailBody;
        document.getElementById('quoteMailtoFallback').setAttribute('href', mailtoUrl);

        var btn = document.getElementById('submitQuoteBtn');
        var originalBtnHtml = btn.innerHTML;
        btn.disabled = true;
        btn.textContent = 'Enviando solicitud...';

        var formData = new FormData(document.getElementById('b2bQuoteForm'));
        fetch('https://formsubmit.co/ajax/ventas@papeloro.com.mx', {
          method: 'POST',
          headers: { 'Accept': 'application/json' },
          body: formData
        }).catch(function () {
          // Si el navegador bloquea la petición externa, abrimos el cliente de correo directamente hacia ventas@papeloro.com.mx
          window.location.href = mailtoUrl;
        }).finally(function () {
          btn.disabled = false;
          btn.innerHTML = originalBtnHtml;
          document.getElementById('quoteSummary').textContent = 'Se registró tu solicitud para ' + empresa + ' (' + desglose + '). Enviamos la notificación a ventas@papeloro.com.mx.';
          document.getElementById('b2bQuoteForm').style.opacity = '0';
          setTimeout(function () {
            document.getElementById('b2bQuoteForm').classList.add('hidden');
            var successBox = document.getElementById('quoteSuccessBox');
            successBox.classList.remove('hidden');
            successBox.style.opacity = '1';
          }, 250);
        });
      });

      window.resetQuoteForm = function() {
        document.getElementById('b2bQuoteForm').reset();
        document.getElementById('sliderCube').value = 0;
        document.getElementById('sliderFlat').value = 0;
        document.getElementById('sliderPocket').value = 0;
        updateQuoteCalc();
        
        var successBox = document.getElementById('quoteSuccessBox');
        successBox.style.opacity = '0';
        setTimeout(() => {
          successBox.classList.add('hidden');
          document.getElementById('b2bQuoteForm').classList.remove('hidden');
          setTimeout(() => document.getElementById('b2bQuoteForm').style.opacity = '1', 50);
        }, 300);
      };

      updateQuoteCalc();
    })();
  </script>

  <?php wp_footer(); ?>
</body>
</html>