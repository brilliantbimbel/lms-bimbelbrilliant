<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MaterisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('materis')->delete();
        
        \DB::table('materis')->insert(array (
            0 => 
            array (
                'id' => 6,
                'user_id' => 2,
                'kelas_id' => 2,
                'judul' => 'Pertumbuhan dan Perkembangan',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!doctype html>
<html lang="id">
 <head><script>window["__codeletBootstrap__"]=JSON.parse(\'{"A":"A","B":"20260806-23-d6f2a7a","C":{"Abril Fatface":"YACgEZbkUVE,0","Alfa Slab One":"YACgEYS9sJU,0","Anton":"YACgEcYqQ-A,0","Archivo":"YAHO2-t-jNE,0","Arial":"YAGyDvJ_4Ts,0","Bebas Neue":"YACgESME5ew,0","Bricolage Grotesque":"YAFyMcdwzpc,0","Canva Sans":"YAFLd8sKbwc,2","Caveat":"YALBs2ploWQ,0","Comic Sans MS":"YAHO2VMiyZo,0","Cormorant Garamond":"YAFdJhX-538,0","Courier New":"YAGzXiGs0_8,0","DM Sans":"YAD1aU3sLnI,0","DM Serif Display":"YAD1aYG82rc,0","Forum":"YACgEcnnqB4,0","Fraunces":"YAEul-FRQw4,0","Georgia":"YAGzXkO0pEM,0","Helvetica Neue":"YAFcf6CtJfI,0","Impact":"YAFcfnjI7Vk,0","Inter":"YAFdJvSyp_k,3","Iowan Old Style":"YAGNIFa8j9o,0","Jacques Francois":"YAHO2a5g66Q,0","JetBrains Mono":"YAFdJksXcAk,0","Libre Baskerville":"YACgEUFdPdA,0","Manrope":"YAHO2b2feC4,0","Merriweather":"YACgEXvHxxs,0","Montserrat":"YADLjI9qxTA,0","Nunito":"YACgEX8C5Gg,0","Oleo Script":"YACgEQQ14jI,0","Phantom Sans":"YAHO2E8Pb88,0","Playfair Display":"YACgEYmuCJE,0","Poppins":"YAFdJjbTu24,1","Press Start 2P":"YAFyGr-8pmQ,0","Quicksand":"YADWjpfPmdk,0","Raleway":"YACgEVg3xZg,0","Segoe UI":"YAHNdRD1Klw,0","Source Sans 3":"YAG4lO1Mj10,0","Spectral":"YAHO2rVUHIM,0","Times New Roman":"YAGzXW3gftg,0","Times":"YAGzXW3gftg,0","Ubuntu":"YACgERDU--Q,0","Work Sans":"YAGXhLOKv44,0","Yellowtail":"YACgEYG4kG4,0","ui-monospace":"YADlN8CFZ8Q,0","ui-sans-serif":"YACkoN-xg4g,0"}}\');</script><script src="/_sdk/7949ff62d67710d5.telemetry_sdk.js" integrity="sha512-KIvXA82Di44YY/RH9/63A9MuTuavYgDFG8PfErJn7Wli4K0LAOk+coo/aPXk3+ZNL96nHh9VYD4PE+fLes+laQ=="></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pertumbuhan dan Perkembangan | IPA Kelas 9</title>
  <script src="https://cdn.tailwindcss.com/3.4.17"></script>
  <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&amp;family=Fraunces:opsz,wght@9..144,600;9..144,700&amp;display=swap" rel="stylesheet">
  <style>
    :root { --navy:#123047; --ink:#18313c; --cream:#f7f4e9; --paper:#fffdf6; --leaf:#326b4b; --gold:#e4a92d; --coral:#d5674c; --line:#d8ddd0; }
    * { box-sizing:border-box; }
    html { scroll-behavior:smooth; }
    body { width:100%; margin:0; font-family:"DM Sans",sans-serif; color:var(--ink); background:var(--cream); }
    .app-shell { width:100%; min-height:100%; background:radial-gradient(circle at 8% 4%,rgba(228,169,45,.2),transparent 23rem),radial-gradient(circle at 94% 13%,rgba(50,107,75,.15),transparent 27rem),var(--cream); }
    .display-font { font-family:"Fraunces",serif; }
    .tab-btn { border:1px solid transparent; color:#42606b; transition:.2s ease; }
    .tab-btn:hover,.tab-btn:focus-visible { color:var(--navy); background:var(--paper); outline:none; }
    .tab-btn.active { background:var(--navy); border-color:var(--navy); color:#fff; box-shadow:0 8px 20px rgba(18,48,71,.18); }
    .tab-panel { display:none; }
    .tab-panel.active { display:block; animation:rise .35s ease both; }
    @keyframes rise { from { opacity:0; transform:translateY(10px); } to { opacity:1; transform:translateY(0); } }
    .lesson-card { background:rgba(255,253,246,.91); border:1px solid var(--line); box-shadow:0 14px 35px rgba(30,53,46,.07); }
    .fact-number { font-family:"Fraunces",serif; color:var(--gold); font-size:2.25rem; line-height:1; }
    .mini-label { letter-spacing:.14em; text-transform:uppercase; font-size:.72rem; font-weight:800; }
    .image-frame { overflow:hidden; border-radius:1.5rem; box-shadow:0 18px 38px rgba(18,48,71,.16); }
    .image-frame img { width:100%; height:100%; object-fit:cover; transition:transform .5s ease; }
    .image-frame:hover img { transform:scale(1.04); }
    .quiz-option { width:100%; display:flex; align-items:flex-start; gap:.8rem; padding:1rem; text-align:left; border:1px solid #d5ddd3; border-radius:1rem; background:var(--paper); transition:.2s ease; }
    .quiz-option:hover,.quiz-option:focus-visible { border-color:var(--leaf); background:#f0f7ee; outline:3px solid rgba(50,107,75,.16); }
    .quiz-option.selected { border-color:var(--navy); background:#e8f0f2; box-shadow:inset 0 0 0 1px var(--navy); }
    .option-letter { display:grid; place-items:center; flex:0 0 auto; width:1.75rem; height:1.75rem; border-radius:50%; background:#e7ece8; color:var(--navy); font-size:.8rem; font-weight:800; }
    .quiz-option.selected .option-letter { background:var(--navy); color:#fff; }
    .hidden-view { display:none !important; }
    .result-item.correct { border-left:4px solid #3d8558; }
    .result-item.incorrect { border-left:4px solid #d5674c; }
    @media(max-width:640px) { .tab-btn { font-size:.82rem; padding:.7rem .85rem; } }
  </style>
  <script src="/_sdk/0e8d3a91e1c6f495.data_sdk.js" type="text/javascript" integrity="sha512-c00oDoGjsMgluCLLEyVl3suwEkgjOGGplVFbsilUoBg4aMKNmsL3mwsc9r0dPn95qiSZyjBousQXgROkAW7p/w=="></script>
  <script src="/_sdk/04cc6185e046f597.resizing_sdk.js" type="text/javascript" integrity="sha512-CiE/G92aQF0nxneFg1kdOvXih8sQ1Z2a2QI3+r/WvzJwQqH6+IyB3iL07OkJmpm3ABAaf07+FnqWny98f5sR6w=="></script>
  <script src="/_sdk/fef09cb5f5b2424b.editing_sdk.js" integrity="sha512-PbmCvZWt+xecnQll4ofK5HTtTS+pGwwY1xn9+p49qHgEHml+uvyc0o1f2Eltkd4t324iwgnf7acUjfnKHkik1w=="></script>
 </head>
 <body data-template-id="__page-root">
  <div class="app-shell">
   <header data-template-id="header-section" class="canva-header w-full border-b border-[#d8ddd0] bg-[#fffdf6]/85 backdrop-blur">
    <div class="mx-auto flex w-full max-w-7xl flex-col gap-5 px-5 py-6 md:flex-row md:items-center md:justify-between md:px-8">
     <div>
      <p class="mini-label text-[#326b4b]">Media Pembelajaran Interaktif</p>
      <h1 data-template-id="page-title" class="canva-text display-font mt-1 text-3xl font-bold text-[#123047] md:text-4xl">Pertumbuhan dan Perkembangan</h1>
     </div>
     <div data-template-id="class-badge" class="canva-tag inline-flex w-fit items-center gap-2 rounded-full bg-[#e5f0e6] px-4 py-2 text-sm font-bold text-[#25533b]">
      <i data-lucide="leaf" class="h-4 w-4"></i> <span>IPA Kelas 9</span>
     </div>
    </div>
   </header>
   <nav aria-label="Navigasi materi" class="w-full px-5 pt-6 md:px-8">
    <div class="mx-auto flex w-full max-w-7xl gap-2 overflow-x-auto rounded-2xl border border-[#d8ddd0] bg-[#fffdf6]/80 p-2">
     <button data-template-id="tab-home" class="canva-button tab-btn active whitespace-nowrap rounded-xl px-4 py-3 text-sm font-bold" type="button" data-tab="home" aria-selected="true"><i data-lucide="house" class="mr-1 inline h-4 w-4"></i> Beranda</button> <button data-template-id="tab-human" class="canva-button tab-btn whitespace-nowrap rounded-xl px-4 py-3 text-sm font-bold" type="button" data-tab="human" aria-selected="false"><i data-lucide="users" class="mr-1 inline h-4 w-4"></i> Manusia</button> <button data-template-id="tab-animal" class="canva-button tab-btn whitespace-nowrap rounded-xl px-4 py-3 text-sm font-bold" type="button" data-tab="animal" aria-selected="false"><i data-lucide="bug" class="mr-1 inline h-4 w-4"></i> Hewan</button> <button data-template-id="tab-plant" class="canva-button tab-btn whitespace-nowrap rounded-xl px-4 py-3 text-sm font-bold" type="button" data-tab="plant" aria-selected="false"><i data-lucide="sprout" class="mr-1 inline h-4 w-4"></i> Tumbuhan</button> <button data-template-id="tab-quiz" class="canva-button tab-btn whitespace-nowrap rounded-xl px-4 py-3 text-sm font-bold" type="button" data-tab="quiz" aria-selected="false"><i data-lucide="brain-circuit" class="mr-1 inline h-4 w-4"></i> Latihan HOTS</button>
    </div>
   </nav>
   <main class="mx-auto w-full max-w-7xl px-5 pb-14 pt-7 md:px-8">
    <section id="home" class="tab-panel active" aria-labelledby="home-title">
     <div class="grid gap-8 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
      <div>
       <p class="mini-label text-[#d5674c]">IPA Terpadu • Kelas IX</p>
       <h2 id="home-title" class="display-font mt-3 max-w-3xl text-3xl font-bold text-[#123047] md:text-4xl">Memahami perubahan hidup, dari sel hingga makhluk hidup dewasa.</h2>
       <p class="mt-5 max-w-2xl text-lg leading-8 text-[#42606b]">Pelajari bagaimana manusia, hewan, dan tumbuhan bertambah ukuran, berubah bentuk, serta mencapai kematangan fungsi melalui proses pertumbuhan dan perkembangan.</p>
       <div class="mt-7 grid gap-3 sm:grid-cols-2">
        <article data-template-id="growth-card" class="canva-card lesson-card rounded-2xl p-5">
         <p class="fact-number">01</p>
         <h3 class="mt-3 text-lg font-bold text-[#123047]">Pertumbuhan</h3>
         <p class="mt-2 leading-6 text-[#42606b]">Perubahan ukuran, massa, volume, atau jumlah sel yang dapat diukur.</p>
        </article>
        <article data-template-id="development-card" class="canva-card lesson-card rounded-2xl p-5">
         <p class="fact-number">02</p>
         <h3 class="mt-3 text-lg font-bold text-[#123047]">Perkembangan</h3>
         <p class="mt-2 leading-6 text-[#42606b]">Perubahan menuju kematangan struktur dan fungsi makhluk hidup.</p>
        </article>
       </div>
      </div>
      <div class="relative">
       <div class="image-frame aspect-[4/3]"><img data-template-id="hero-image" class="canva-image" loading="lazy">
       </div>
       <div data-template-id="hero-note" class="canva-banner absolute -bottom-4 -left-2 max-w-[16rem] rounded-2xl bg-[#123047] p-4 text-white shadow-xl sm:-left-5">
        <p class="text-sm font-semibold leading-6">Tumbuh bukan sekadar bertambah tinggi—makhluk hidup juga berkembang menjadi semakin matang.</p>
       </div>
      </div>
     </div>
     <section class="mt-14" aria-labelledby="goal-title">
      <p class="mini-label text-[#326b4b]">Target Belajar</p>
      <h2 id="goal-title" class="display-font mt-1 text-2xl font-bold text-[#123047]">Setelah belajar, kamu mampu ...</h2>
      <div class="mt-5 grid gap-4 md:grid-cols-3">
       <article data-template-id="goal-card-one" class="canva-card lesson-card rounded-2xl p-6"><i data-lucide="search" class="mb-4 h-7 w-7 text-[#d5674c]"></i>
        <h3 class="font-bold text-[#123047]">Membedakan konsep</h3>
        <p class="mt-2 leading-6 text-[#42606b]">Menjelaskan perbedaan pertumbuhan yang terukur dan perkembangan yang mengarah pada kematangan.</p>
       </article>
       <article data-template-id="goal-card-two" class="canva-card lesson-card rounded-2xl p-6"><i data-lucide="git-compare" class="mb-4 h-7 w-7 text-[#326b4b]"></i>
        <h3 class="font-bold text-[#123047]">Menganalisis faktor</h3>
        <p class="mt-2 leading-6 text-[#42606b]">Menghubungkan faktor internal dan eksternal dengan proses tumbuh makhluk hidup.</p>
       </article>
       <article data-template-id="goal-card-three" class="canva-card lesson-card rounded-2xl p-6"><i data-lucide="lightbulb" class="mb-4 h-7 w-7 text-[#e4a92d]"></i>
        <h3 class="font-bold text-[#123047]">Menerapkan pengetahuan</h3>
        <p class="mt-2 leading-6 text-[#42606b]">Menggunakan konsep untuk menjelaskan peristiwa pertumbuhan di kehidupan sehari-hari.</p>
       </article>
      </div>
     </section>
    </section>
    <section id="human" class="tab-panel" aria-labelledby="human-title">
     <div class="grid gap-8 lg:grid-cols-[.9fr_1.1fr] lg:items-center">
      <div class="image-frame aspect-[4/3]"><img data-template-id="human-image" class="canva-image" loading="lazy">
      </div>
      <div>
       <p class="mini-label text-[#d5674c]">01 • Manusia</p>
       <h2 id="human-title" class="display-font mt-2 text-3xl font-bold text-[#123047]">Pertumbuhan manusia berlangsung seiring kematangan fungsi tubuh.</h2>
       <p class="mt-4 leading-7 text-[#42606b]">Manusia mengalami perubahan sejak bayi hingga lanjut usia. Pertumbuhan tampak pada pertambahan tinggi dan massa tubuh, sedangkan perkembangan tampak pada kemampuan bergerak, berpikir, berbahasa, hingga kematangan reproduksi.</p>
       <div data-template-id="human-note" class="canva-banner mt-5 rounded-2xl border border-[#d5e5d8] bg-[#edf6ee] p-4 text-[#25533b]">
        <p class="font-semibold">Ingat:</p>
        <p class="mt-1 leading-6">Setiap individu tumbuh dengan kecepatan berbeda. Perbedaan dipengaruhi gen, hormon, gizi, kesehatan, istirahat, dan lingkungan.</p>
       </div>
      </div>
     </div>
     <section class="mt-10" aria-labelledby="human-stage-title">
      <h3 id="human-stage-title" class="display-font text-2xl font-bold text-[#123047]">Tahapan penting kehidupan manusia</h3>
      <div class="mt-5 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
       <article data-template-id="stage-one-card" class="canva-card lesson-card rounded-2xl p-5">
        <p class="mini-label text-[#326b4b]">Tahap 01</p>
        <h4 class="mt-2 font-bold text-[#123047]">Masa anak-anak</h4>
        <p class="mt-2 text-sm leading-6 text-[#42606b]">Pertambahan tinggi dan berat cepat; kemampuan motorik dan bahasa berkembang.</p>
       </article>
       <article data-template-id="stage-two-card" class="canva-card lesson-card rounded-2xl p-5">
        <p class="mini-label text-[#326b4b]">Tahap 02</p>
        <h4 class="mt-2 font-bold text-[#123047]">Masa remaja</h4>
        <p class="mt-2 text-sm leading-6 text-[#42606b]">Terjadi pubertas, lonjakan pertumbuhan, serta kematangan organ reproduksi.</p>
       </article>
       <article data-template-id="stage-three-card" class="canva-card lesson-card rounded-2xl p-5">
        <p class="mini-label text-[#326b4b]">Tahap 03</p>
        <h4 class="mt-2 font-bold text-[#123047]">Masa dewasa</h4>
        <p class="mt-2 text-sm leading-6 text-[#42606b]">Fungsi tubuh telah matang dan kemampuan fisik umumnya berada pada kondisi optimal.</p>
       </article>
       <article data-template-id="stage-four-card" class="canva-card lesson-card rounded-2xl p-5">
        <p class="mini-label text-[#326b4b]">Tahap 04</p>
        <h4 class="mt-2 font-bold text-[#123047]">Masa lanjut usia</h4>
        <p class="mt-2 text-sm leading-6 text-[#42606b]">Beberapa fungsi tubuh menurun secara alami sehingga perlu pola hidup sehat.</p>
       </article>
      </div>
     </section>
    </section>
    <section id="animal" class="tab-panel" aria-labelledby="animal-title">
     <div class="grid gap-8 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
      <div>
       <p class="mini-label text-[#d5674c]">02 • Hewan</p>
       <h2 id="animal-title" class="display-font mt-2 text-3xl font-bold text-[#123047]">Hewan dapat berkembang melalui metamorfosis atau perkembangan langsung.</h2>
       <p class="mt-4 leading-7 text-[#42606b]">Pada beberapa hewan, bentuk tubuh muda sangat berbeda dengan dewasanya. Rangkaian perubahan bentuk ini disebut metamorfosis. Hewan lain, seperti kucing dan ayam, mengalami perkembangan langsung.</p>
       <div data-template-id="animal-note" class="canva-panel mt-6 rounded-2xl border border-[#d8ddd0] bg-[#fffdf6] p-5">
        <h3 class="font-bold text-[#123047]">Kunci analisis</h3>
        <p class="mt-2 leading-6 text-[#42606b]">Perhatikan ada atau tidaknya tahap pupa serta kemiripan anak dengan induknya untuk menentukan jenis perkembangan hewan.</p>
       </div>
      </div>
      <div class="image-frame aspect-[4/3]"><img data-template-id="animal-image" class="canva-image" loading="lazy">
      </div>
     </div>
     <div class="mt-10 grid gap-5 lg:grid-cols-3">
      <article data-template-id="animal-card-perfect" class="canva-card lesson-card rounded-2xl p-6">
       <h3 class="font-bold text-[#123047]">Metamorfosis sempurna</h3>
       <p class="mt-2 leading-6 text-[#42606b]">Bentuk larva sangat berbeda dari imago. Contoh: kupu-kupu, nyamuk, dan lalat.</p>
       <p class="mt-4 rounded-xl bg-[#f1f4ee] p-3 text-sm font-semibold text-[#326b4b]">Telur → larva → pupa → imago</p>
      </article>
      <article data-template-id="animal-card-incomplete" class="canva-card lesson-card rounded-2xl p-6">
       <h3 class="font-bold text-[#123047]">Metamorfosis tidak sempurna</h3>
       <p class="mt-2 leading-6 text-[#42606b]">Nimfa menyerupai hewan dewasa, tetapi belum memiliki organ yang lengkap. Contoh: belalang dan kecoa.</p>
       <p class="mt-4 rounded-xl bg-[#f1f4ee] p-3 text-sm font-semibold text-[#326b4b]">Telur → nimfa → imago</p>
      </article>
      <article data-template-id="animal-card-direct" class="canva-card lesson-card rounded-2xl p-6">
       <h3 class="font-bold text-[#123047]">Perkembangan langsung</h3>
       <p class="mt-2 leading-6 text-[#42606b]">Anak memiliki bentuk mirip induknya dan tumbuh hingga mencapai ukuran serta kematangan dewasa.</p>
       <p class="mt-4 rounded-xl bg-[#f1f4ee] p-3 text-sm font-semibold text-[#326b4b]">Anak mirip induk, ukuran belum sama.</p>
      </article>
     </div>
    </section>
    <section id="plant" class="tab-panel" aria-labelledby="plant-title">
     <div class="grid gap-8 lg:grid-cols-[.9fr_1.1fr] lg:items-center">
      <div class="image-frame aspect-[4/3]"><img data-template-id="plant-image" class="canva-image" loading="lazy">
      </div>
      <div>
       <p class="mini-label text-[#d5674c]">03 • Tumbuhan</p>
       <h2 id="plant-title" class="display-font mt-2 text-3xl font-bold text-[#123047]">Tumbuhan tumbuh dari biji, lalu berkembang hingga menghasilkan keturunan.</h2>
       <p class="mt-4 leading-7 text-[#42606b]">Pertumbuhan tumbuhan dimulai dari perkecambahan. Selanjutnya, jaringan meristem membantu pertambahan panjang maupun diameter. Perkembangan tampak saat tumbuhan membentuk bunga, buah, dan biji.</p>
       <div data-template-id="plant-note" class="canva-banner mt-5 rounded-2xl bg-[#326b4b] p-5 text-white">
        <p class="font-bold">Syarat perkecambahan</p>
        <p class="mt-1 leading-6 text-[#e4f1e4]">Biji memerlukan air, oksigen, dan suhu yang sesuai. Cahaya dibutuhkan setelah kecambah mulai membentuk klorofil dan berfotosintesis.</p>
       </div>
      </div>
     </div>
     <section class="mt-10" aria-labelledby="plant-process-title">
      <h3 id="plant-process-title" class="display-font text-2xl font-bold text-[#123047]">Urutan sederhana perkembangan tumbuhan</h3>
      <div class="mt-5 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
       <article data-template-id="plant-step-one" class="canva-card lesson-card rounded-2xl p-5">
        <p class="fact-number">1</p>
        <h4 class="mt-2 font-bold text-[#123047]">Biji</h4>
        <p class="mt-2 text-sm leading-6 text-[#42606b]">Mengandung embrio dan cadangan makanan untuk memulai kehidupan baru.</p>
       </article>
       <article data-template-id="plant-step-two" class="canva-card lesson-card rounded-2xl p-5">
        <p class="fact-number">2</p>
        <h4 class="mt-2 font-bold text-[#123047]">Perkecambahan</h4>
        <p class="mt-2 text-sm leading-6 text-[#42606b]">Embrio tumbuh; akar lembaga muncul lebih dahulu untuk menyerap air dan mineral.</p>
       </article>
       <article data-template-id="plant-step-three" class="canva-card lesson-card rounded-2xl p-5">
        <p class="fact-number">3</p>
        <h4 class="mt-2 font-bold text-[#123047]">Vegetatif</h4>
        <p class="mt-2 text-sm leading-6 text-[#42606b]">Akar, batang, dan daun berkembang untuk menunjang fotosintesis serta penyerapan bahan.</p>
       </article>
       <article data-template-id="plant-step-four" class="canva-card lesson-card rounded-2xl p-5">
        <p class="fact-number">4</p>
        <h4 class="mt-2 font-bold text-[#123047]">Generatif</h4>
        <p class="mt-2 text-sm leading-6 text-[#42606b]">Tumbuhan membentuk bunga, buah, dan biji sebagai bagian dari reproduksi.</p>
       </article>
      </div>
     </section>
    </section>
    <section id="quiz" class="tab-panel" aria-labelledby="quiz-title">
     <div id="quiz-start" class="mx-auto max-w-3xl text-center">
      <p class="mini-label text-[#d5674c]">Evaluasi Interaktif</p>
      <h2 id="quiz-title" class="display-font mt-2 text-3xl font-bold text-[#123047]">Latihan HOTS: Pertumbuhan dan Perkembangan</h2>
      <p class="mx-auto mt-4 max-w-2xl leading-7 text-[#42606b]">Terdapat 25 soal analitis. Bacalah setiap peristiwa dengan cermat, pilih jawaban terbaik, lalu lihat pembahasanmu di akhir latihan.</p>
      <div class="mt-7 grid gap-4 text-left sm:grid-cols-3">
       <div data-template-id="quiz-stat-one" class="canva-card lesson-card rounded-2xl p-5"><strong class="block text-2xl text-[#123047]">25</strong><span class="text-sm text-[#42606b]">soal analitis</span>
       </div>
       <div data-template-id="quiz-stat-two" class="canva-card lesson-card rounded-2xl p-5"><strong class="block text-2xl text-[#123047]">4</strong><span class="text-sm text-[#42606b]">pilihan jawaban</span>
       </div>
       <div data-template-id="quiz-stat-three" class="canva-card lesson-card rounded-2xl p-5"><strong class="block text-2xl text-[#123047]">100</strong><span class="text-sm text-[#42606b]">skor maksimal</span>
       </div>
      </div><button data-template-id="start-quiz-button" id="start-quiz" class="canva-button mt-8 inline-flex items-center gap-2 rounded-xl bg-[#123047] px-6 py-4 font-bold text-white shadow-lg transition hover:-translate-y-0.5 hover:bg-[#214b62] focus:outline-none focus:ring-4 focus:ring-[#e4a92d]/40" type="button"><i data-lucide="play" class="h-5 w-5"></i> Mulai Latihan</button>
     </div>
     <div id="quiz-player" class="hidden-view mx-auto max-w-3xl">
      <div class="mb-5 flex items-center justify-between gap-4">
       <p id="question-counter" class="text-sm font-bold text-[#326b4b]" aria-live="polite"></p>
       <div class="h-2 w-44 overflow-hidden rounded-full bg-[#dfe6df]">
        <div id="progress-bar" class="h-full rounded-full bg-[#326b4b] transition-all duration-300"></div>
       </div>
      </div>
      <article class="lesson-card rounded-3xl p-5 sm:p-8">
       <p class="mini-label text-[#d5674c]">Analisis dan Penalaran</p>
       <h3 id="question-text" class="display-font mt-3 text-2xl leading-snug text-[#123047]"></h3>
       <div id="options-list" class="mt-6 space-y-3"></div>
      </article>
      <div class="mt-6 flex flex-wrap items-center justify-between gap-3">
       <button data-template-id="previous-button" id="prev-question" class="canva-button rounded-xl border border-[#cbd7ce] bg-[#fffdf6] px-5 py-3 font-bold text-[#123047]" type="button">← Sebelumnya</button> <button data-template-id="next-button" id="next-question" class="canva-button rounded-xl bg-[#123047] px-5 py-3 font-bold text-white" type="button">Berikutnya →</button> <button data-template-id="finish-button" id="finish-quiz" class="canva-button hidden-view rounded-xl bg-[#326b4b] px-5 py-3 font-bold text-white" type="button">Lihat Hasil ✓</button>
      </div>
      <p id="quiz-message" class="mt-4 text-center text-sm font-medium text-[#a74831]" aria-live="polite"></p>
     </div>
     <div id="quiz-result" class="hidden-view mx-auto max-w-4xl">
      <div data-template-id="result-panel" class="canva-panel rounded-3xl bg-[#123047] p-7 text-center text-white sm:p-10">
       <p class="mini-label text-[#e4a92d]">Hasil Belajarmu</p>
       <h2 class="display-font mt-2 text-3xl font-bold">Kerja bagus, kamu sudah menyelesaikan latihan!</h2>
       <div id="score-number" class="display-font mt-4 text-6xl text-[#f4c657]" aria-live="polite"></div>
       <p id="score-summary" class="mt-3 text-[#d8e6e6]" aria-live="polite"></p><button data-template-id="restart-button" id="restart-quiz" class="canva-button mt-7 rounded-xl bg-[#e4a92d] px-6 py-3 font-bold text-[#17323e]" type="button">↻ Ulangi Latihan</button>
      </div>
      <section class="mt-8" aria-labelledby="review-title">
       <h3 id="review-title" class="display-font text-2xl font-bold text-[#123047]">Tinjau jawaban dan pembahasan</h3>
       <div id="review-list" class="mt-4 space-y-3"></div>
      </section>
     </div>
    </section>
   </main>
   <footer data-template-id="footer-section" class="canva-footer w-full border-t border-[#d8ddd0] bg-[#fffdf6]/75 px-5 py-6 text-center md:px-8">
    <p class="text-sm text-[#42606b]">Media Pembelajaran IPA Kelas 9 • Belajar dengan mengamati, menganalisis, dan menyimpulkan.</p>
   </footer>
  </div>
  <script>
    const tabs = document.querySelectorAll(".tab-btn");
    const panels = document.querySelectorAll(".tab-panel");

    tabs.forEach(tab => {
      tab.addEventListener("click", () => {
        tabs.forEach(item => { item.classList.remove("active"); item.setAttribute("aria-selected", "false"); });
        panels.forEach(panel => panel.classList.remove("active"));
        tab.classList.add("active");
        tab.setAttribute("aria-selected", "true");
        document.getElementById(tab.dataset.tab).classList.add("active");
      });
    });

    const questions = [
      {q:"Dua remaja memiliki usia sama. Remaja A memperoleh gizi seimbang dan tidur cukup, sedangkan Remaja B sering melewatkan makan. Prediksi yang tepat adalah ...",o:["A tumbuh lebih lambat karena keturunan selalu dominan","B berpotensi mengalami hambatan pertumbuhan karena kebutuhan nutrisi dan istirahat tidak terpenuhi","Keduanya pasti memiliki tinggi badan sama","A akan berhenti berkembang lebih cepat"],a:1,e:"Gizi dan istirahat adalah faktor luar yang mendukung pertumbuhan serta perkembangan tubuh."},
      {q:"Tinggi tanaman kacang hijau bertambah dari 8 cm menjadi 15 cm. Perubahan tersebut merupakan pertumbuhan karena ...",o:["terjadi perubahan fungsi organ","dapat diukur secara kuantitatif","selalu dapat kembali ke ukuran awal","menunjukkan kematangan reproduksi"],a:1,e:"Pertumbuhan bersifat kuantitatif, misalnya pertambahan tinggi, massa, atau volume."},
      {q:"Seekor ulat berubah menjadi kepompong lalu kupu-kupu. Jenis perkembangan tersebut adalah ...",o:["perkembangan langsung","metamorfosis tidak sempurna","metamorfosis sempurna","fragmentasi"],a:2,e:"Metamorfosis sempurna melalui tahap telur, larva, pupa, lalu imago."},
      {q:"Perkecambahan biji dapat berlangsung di tempat gelap, tetapi kecambah membutuhkan cahaya terutama untuk ...",o:["menghasilkan klorofil dan melakukan fotosintesis","menggantikan fungsi air","mengubah akar menjadi bunga","menghentikan pembelahan sel"],a:0,e:"Cahaya diperlukan untuk pembentukan klorofil dan menunjang fotosintesis."},
      {q:"Pernyataan yang tepat untuk membedakan pertumbuhan dan perkembangan adalah ...",o:["pertumbuhan bersifat kualitatif, perkembangan kuantitatif","pertumbuhan dapat diukur, perkembangan menunjukkan kematangan fungsi","keduanya hanya terjadi pada tumbuhan","perkembangan selalu menambah tinggi tubuh"],a:1,e:"Pertumbuhan dapat diukur, sedangkan perkembangan berkaitan dengan kematangan struktur dan fungsi."},
      {q:"Seorang siswa mengamati dua tanaman sejenis. Tanaman di pot A mendapat air cukup, sedangkan pot B jarang disiram. Faktor yang paling berbeda adalah ...",o:["faktor internal berupa gen","faktor eksternal berupa ketersediaan air","jumlah kromosom","jenis jaringan meristem"],a:1,e:"Air adalah faktor eksternal penting untuk pertumbuhan tumbuhan."},
      {q:"Anak ayam menetas dan bentuk tubuhnya mirip induknya, hanya lebih kecil. Peristiwa ini disebut ...",o:["metamorfosis sempurna","metamorfosis tidak sempurna","perkembangan langsung","regenerasi"],a:2,e:"Pada perkembangan langsung, anak menyerupai induknya tetapi belum dewasa."},
      {q:"Seorang remaja mulai mengalami perubahan suara dan pertumbuhan rambut pada bagian tertentu. Perubahan ini terutama berkaitan dengan ...",o:["fase perkecambahan","pubertas dan kerja hormon","metamorfosis","fotosintesis"],a:1,e:"Pubertas dipengaruhi hormon dan menandai kematangan fungsi reproduksi."},
      {q:"Biji yang diletakkan pada kapas basah tumbuh, sedangkan biji pada kapas kering tidak tumbuh. Kesimpulan terbaik adalah ...",o:["biji selalu memerlukan cahaya","air diperlukan dalam proses perkecambahan","kapas adalah sumber makanan biji","akar tidak membutuhkan air"],a:1,e:"Air diperlukan agar biji dapat mengaktifkan metabolisme saat berkecambah."},
      {q:"Jika jumlah sel pada ujung akar bertambah akibat pembelahan sel, proses yang terjadi adalah ...",o:["pertumbuhan","pembuahan","penyerbukan","penuaan"],a:0,e:"Pembelahan sel menambah jumlah sel dan mendukung pertumbuhan."},
      {q:"Tahap yang tidak terdapat pada metamorfosis tidak sempurna adalah ...",o:["telur","nimfa","pupa","imago"],a:2,e:"Metamorfosis tidak sempurna tidak melalui tahap pupa."},
      {q:"Tanaman yang kekurangan mineral menunjukkan pertumbuhan lambat. Hal ini membuktikan bahwa mineral berfungsi sebagai ...",o:["faktor penghambat mutlak","bahan pendukung pertumbuhan","pengganti cahaya","hasil fotosintesis"],a:1,e:"Mineral dibutuhkan tumbuhan sebagai nutrisi untuk mendukung pertumbuhan."},
      {q:"Mengapa pertumbuhan dikatakan irreversibel?",o:["dapat terjadi berulang setiap hari","tidak dapat kembali ke keadaan ukuran semula","hanya terjadi pada hewan","selalu dipengaruhi cahaya"],a:1,e:"Pertumbuhan berupa pertambahan ukuran yang tidak kembali seperti semula."},
      {q:"Seorang bayi belajar duduk, berjalan, dan berbicara. Contoh tersebut paling tepat menunjukkan ...",o:["perkembangan","pertumbuhan kuantitatif","metamorfosis sempurna","perkecambahan"],a:0,e:"Kemampuan motorik dan bahasa menggambarkan perkembangan fungsi."},
      {q:"Urutan yang benar pada metamorfosis kupu-kupu adalah ...",o:["telur–pupa–larva–imago","telur–larva–pupa–imago","larva–telur–imago–pupa","nimfa–pupa–imago"],a:1,e:"Kupu-kupu mengalami metamorfosis sempurna: telur, larva, pupa, imago."},
      {q:"Tanaman tumbuh condong ke arah cahaya. Respons tersebut menunjukkan bahwa cahaya berperan sebagai ...",o:["faktor internal","rangsangan lingkungan","hasil pertumbuhan","cadangan makanan"],a:1,e:"Cahaya merupakan rangsangan dari lingkungan yang memengaruhi arah pertumbuhan."},
      {q:"Berikut yang paling tepat menjadi contoh perkembangan pada tumbuhan adalah ...",o:["batang bertambah panjang","akar bertambah banyak","munculnya bunga","massa daun bertambah"],a:2,e:"Pembentukan bunga menunjukkan tumbuhan memasuki kematangan reproduksi."},
      {q:"Seorang siswa menyimpulkan bahwa semua perubahan ukuran tubuh adalah perkembangan. Perbaikan yang tepat adalah ...",o:["perubahan ukuran adalah pertumbuhan","perkembangan hanya terjadi pada manusia","pertumbuhan tidak dapat diukur","perkembangan selalu mengurangi ukuran"],a:0,e:"Pertambahan ukuran, massa, dan volume termasuk pertumbuhan."},
      {q:"Kucing dan anak kucing memiliki bentuk tubuh yang serupa. Ini menjadi bukti bahwa kucing mengalami ...",o:["metamorfosis sempurna","metamorfosis tidak sempurna","perkembangan langsung","pembelahan biner"],a:2,e:"Anak kucing bentuknya mirip induknya sehingga termasuk perkembangan langsung."},
      {q:"Mengapa biji memerlukan oksigen saat berkecambah?",o:["untuk respirasi menghasilkan energi","untuk menghasilkan bunga","untuk menggantikan air","untuk mengubah biji menjadi tanah"],a:0,e:"Oksigen digunakan dalam respirasi untuk menyediakan energi bagi pertumbuhan embrio."},
      {q:"Salah satu faktor internal yang memengaruhi pertumbuhan makhluk hidup adalah ...",o:["suhu","air","gen","cahaya"],a:2,e:"Gen merupakan faktor dari dalam tubuh yang memengaruhi sifat pertumbuhan."},
      {q:"Hormon pada tumbuhan berperan penting karena dapat ...",o:["mengatur proses pertumbuhan","menggantikan semua mineral","menghasilkan tanah","menghentikan fotosintesis"],a:0,e:"Hormon membantu mengatur berbagai proses pertumbuhan dan perkembangan tumbuhan."},
      {q:"Seorang anak berolahraga teratur, makan bergizi, dan cukup tidur. Kebiasaan tersebut terutama mendukung ...",o:["pertumbuhan yang optimal","metamorfosis sempurna","pembentukan pupa","perkecambahan"],a:0,e:"Pola hidup sehat mendukung pertumbuhan dan perkembangan manusia secara optimal."},
      {q:"Pada belalang, bentuk nimfa mirip dengan belalang dewasa tetapi sayapnya belum sempurna. Kesimpulannya adalah ...",o:["belalang mengalami metamorfosis sempurna","belalang mengalami metamorfosis tidak sempurna","belalang berkembang langsung","belalang tidak mengalami perkembangan"],a:1,e:"Belalang melalui telur, nimfa, dan imago sehingga metamorfosisnya tidak sempurna."},
      {q:"Seorang petani membandingkan tanaman yang tumbuh di tanah subur dan tanah tandus. Variabel yang paling mungkin menjelaskan perbedaan pertumbuhan adalah ...",o:["ketersediaan unsur hara","warna pot","nama tanaman","urutan penyiraman saja"],a:0,e:"Tanah subur memiliki unsur hara yang lebih mendukung pertumbuhan tanaman."}
    ];

    let currentQuestion = 0;
    let answers = Array(questions.length).fill(null);

    const startView = document.getElementById("quiz-start");
    const playerView = document.getElementById("quiz-player");
    const resultView = document.getElementById("quiz-result");
    const questionText = document.getElementById("question-text");
    const optionsList = document.getElementById("options-list");
    const counter = document.getElementById("question-counter");
    const progressBar = document.getElementById("progress-bar");
    const prevButton = document.getElementById("prev-question");
    const nextButton = document.getElementById("next-question");
    const finishButton = document.getElementById("finish-quiz");
    const message = document.getElementById("quiz-message");

    function renderQuestion() {
      const item = questions[currentQuestion];
      counter.textContent = `Soal ${currentQuestion + 1} dari ${questions.length}`;
      progressBar.style.width = `${((currentQuestion + 1) / questions.length) * 100}%`;
      questionText.textContent = item.q;
      optionsList.innerHTML = "";

      item.o.forEach((option, index) => {
        const button = document.createElement("button");
        const selected = answers[currentQuestion] === index;
        button.type = "button";
        button.className = `quiz-option${selected ? " selected" : ""}`;
        button.setAttribute("aria-pressed", String(selected));
        button.innerHTML = `<span class="option-letter">${String.fromCharCode(65 + index)}</span><span>${option}</span>`;
        button.addEventListener("click", () => {
          answers[currentQuestion] = index;
          message.textContent = "";
          renderQuestion();
        });
        optionsList.appendChild(button);
      });

      prevButton.style.visibility = currentQuestion === 0 ? "hidden" : "visible";
      const finalQuestion = currentQuestion === questions.length - 1;
      nextButton.classList.toggle("hidden-view", finalQuestion);
      finishButton.classList.toggle("hidden-view", !finalQuestion);
    }

    function startQuiz() {
      currentQuestion = 0;
      startView.classList.add("hidden-view");
      resultView.classList.add("hidden-view");
      playerView.classList.remove("hidden-view");
      message.textContent = "";
      renderQuestion();
    }

    function finishQuiz() {
      const unanswered = answers.filter(answer => answer === null).length;
      if (unanswered > 0) {
        message.textContent = `Masih ada ${unanswered} soal yang belum dijawab. Lengkapi semua jawaban terlebih dahulu.`;
        return;
      }

      const correct = answers.reduce((total, answer, index) => total + (answer === questions[index].a ? 1 : 0), 0);
      const score = Math.round((correct / questions.length) * 100);
      playerView.classList.add("hidden-view");
      resultView.classList.remove("hidden-view");
      document.getElementById("score-number").textContent = score;
      document.getElementById("score-summary").textContent = `Kamu menjawab benar ${correct} dari ${questions.length} soal.`;

      const reviewList = document.getElementById("review-list");
      reviewList.innerHTML = "";
      questions.forEach((item, index) => {
        const correctAnswer = answers[index] === item.a;
        const article = document.createElement("article");
        article.className = `result-item ${correctAnswer ? "correct" : "incorrect"} rounded-r-2xl border border-[#d8ddd0] bg-[#fffdf6] p-5`;
        article.innerHTML = `<p class="font-bold text-[#123047]">${index + 1}. ${item.q}</p>
          <p class="mt-2 text-sm ${correctAnswer ? "text-[#326b4b]" : "text-[#a74831]"}">${correctAnswer ? "✓ Jawabanmu benar." : `Jawaban benar: ${item.o[item.a]}`}</p>
          <p class="mt-2 text-sm leading-6 text-[#42606b]"><strong>Pembahasan:</strong> ${item.e}</p>`;
        reviewList.appendChild(article);
      });
    }

    document.getElementById("start-quiz").addEventListener("click", startQuiz);
    prevButton.addEventListener("click", () => {
      if (currentQuestion > 0) {
        currentQuestion--;
        message.textContent = "";
        renderQuestion();
      }
    });
    nextButton.addEventListener("click", () => {
      if (answers[currentQuestion] === null) {
        message.textContent = "Pilih satu jawaban sebelum melanjutkan.";
        return;
      }
      currentQuestion++;
      message.textContent = "";
      renderQuestion();
    });
    finishButton.addEventListener("click", finishQuiz);
    document.getElementById("restart-quiz").addEventListener("click", () => {
      answers = Array(questions.length).fill(null);
      startQuiz();
    });

    lucide.createIcons();
  </script>
 </body>
</html>',
                'created_at' => '2026-08-22 00:24:13',
                'updated_at' => '2026-08-22 22:47:55',
                'mapel' => 'IPA',
                'kategori_modul' => 'modul',
            ),
            1 => 
            array (
                'id' => 7,
                'user_id' => 2,
                'kelas_id' => 2,
                'judul' => 'Sistem Kordinasi',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Pembelajaran IPA Kelas 9: Sistem Koordinasi Manusia</title>
    <style>
        :root {
            --primary: #0284c7;
            --primary-dark: #0369a1;
            --secondary: #0d9488;
            --accent: #f59e0b;
            --bg-base: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: \'Segoe UI\', system-ui, -apple-system, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            line-height: 1.6;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 2rem;
            margin-bottom: 8px;
            font-weight: 800;
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }

        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        nav {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: center;
            gap: 8px;
            padding: 10px;
            flex-wrap: wrap;
        }

        nav button {
            background: transparent;
            border: none;
            padding: 8px 16px;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-muted);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        nav button:hover, nav button.active {
            background: #e0f2fe;
            color: var(--primary);
        }

        .container {
            max-width: 900px;
            margin: 25px auto;
            padding: 0 15px;
        }

        .section {
            display: none;
            animation: fadeIn 0.4s ease-in-out;
        }

        .section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .card h2 {
            font-size: 1.4rem;
            color: #0f172a;
            margin-bottom: 16px;
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 8px;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 16px;
        }

        .info-box {
            padding: 16px;
            border-radius: 10px;
            border-left: 5px solid var(--primary);
            background: #f8fafc;
        }

        .info-box.hormon {
            border-left-color: var(--secondary);
        }

        .info-box.indera {
            border-left-color: var(--accent);
        }

        .info-box h3 {
            margin-bottom: 8px;
            color: #0f172a;
            font-size: 1.1rem;
        }

        .intro-box {
            background: #f0f9ff;
            border: 1px solid #bae6fd;
            border-radius: 10px;
            padding: 18px;
            margin-bottom: 20px;
        }

        .intro-box h3 {
            color: #0369a1;
            margin-bottom: 8px;
        }

        /* Interactive Simulator */
        .sim-toggle {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .sim-btn {
            padding: 8px 16px;
            border: 2px solid var(--primary);
            background: white;
            color: var(--primary);
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .sim-btn.active {
            background: var(--primary);
            color: white;
        }

        .sim-display {
            background: #f8fafc;
            border: 1px dashed #cbd5e1;
            padding: 18px;
            border-radius: 10px;
            font-size: 1rem;
            line-height: 1.7;
        }

        .path-step {
            display: inline-block;
            background: #e0f2fe;
            color: #0369a1;
            padding: 4px 10px;
            border-radius: 6px;
            font-weight: 600;
            margin: 4px;
        }

        /* Quiz Styles */
        .quiz-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 16px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .question-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #0f172a;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option-btn {
            text-align: left;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option-btn:hover {
            border-color: #93c5fd;
            background: #f0f9ff;
        }

        .option-btn.correct {
            border-color: var(--success);
            background: #ecfdf5;
            color: #065f46;
            font-weight: 600;
        }

        .option-btn.wrong {
            border-color: var(--danger);
            background: #fef2f2;
            color: #991b1b;
            font-weight: 600;
        }

        .quiz-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .score-box {
            text-align: center;
            padding: 30px 20px;
        }

        .score-circle {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 800;
            margin: 0 auto 15px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <header>
        <div class="badge">IPA Kelas 9 SMP/MTs</div>
        <h1>Sistem Koordinasi Manusia</h1>
        <p>Sistem Saraf, Sistem Hormon (Endokrin), dan Alat Indera</p>
    </header>

    <nav>
        <button class="active" onclick="switchTab(\'saraf\')">🧠 Sistem Saraf</button>
        <button onclick="switchTab(\'hormon\')">🧪 Sistem Hormon</button>
        <button onclick="switchTab(\'indera\')">👁️ Alat Indera</button>
        <button onclick="switchTab(\'simulasi\')">⚡ Simulasi Gerak</button>
        <button onclick="switchTab(\'latihan\')">📝 10 Soal Latihan</button>
    </nav>

    <div class="container">

        <!-- TAB 1: SISTEM SARAF & PENJELASAN UMUM -->
        <div id="saraf" class="section active">
            <div class="card">
                <h2>📌 Apa itu Sistem Koordinasi?</h2>
                <div class="intro-box">
                    <h3>💡 Pengertian Sistem Koordinasi</h3>
                    <p><strong>Sistem koordinasi</strong> adalah sistem organ tubuh yang berfungsi menerima rangsangan (*stimulus*), mengolahnya, dan mengatur atau mengendalikan seluruh aktivitas kerja organ tubuh secara serasi, cepat, dan teratur agar tubuh bekerja dengan harmonis (mencapai *homeostasis*).</p>
                    <br>
                    <strong>Tiga Komponen Utama Sistem Koordinasi:</strong>
                    <ul style="margin-left: 20px; margin-top: 6px;">
                        <li><strong>Alat Indera (Reseptor):</strong> Penerima rangsangan dari lingkungan sekitar.</li>
                        <li><strong>Sistem Saraf:</strong> Mengirim, mengolah, dan merespons impuls listrik dengan sangat cepat.</li>
                        <li><strong>Sistem Hormon / Endokrin:</strong> Mengatur fungsi organ tubuh melalui zat kimia (hormon) secara berangsur-angsur.</li>
                    </ul>
                </div>

                <h2>🧠 Sistem Saraf</h2>
                <p style="margin-bottom: 15px;">Sistem saraf bertindak sebagai jaringan komunikasi tubuh yang bekerja mengirimkan sinyal/impuls listrik dalam hitungan milidetik.</p>
                
                <div class="grid-2">
                    <div class="info-box">
                        <h3>1. Sel Saraf (Neuron)</h3>
                        <p>Unit terkecil penyusun sistem saraf. Terdiri dari:</p>
                        <ul style="margin-left: 18px; margin-top: 6px;">
                            <li><strong>Dendrit:</strong> Menerima impuls dari sel lain.</li>
                            <li><strong>Badan Sel:</strong> Mengolah impuls.</li>
                            <li><strong>Akson (Neurit):</strong> Meneruskan impuls ke sel berikutnya.</li>
                        </ul>
                    </div>

                    <div class="info-box">
                        <h3>2. Pembagian Sistem Saraf</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Saraf Pusat:</strong> Otak (otak besar, otak kecil, batang otak) dan Sumsum Tulang Belakang.</li>
                            <li><strong>Saraf Tepi:</strong> Membawa impuls dari dan ke sistem saraf pusat.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 2: SISTEM HORMON -->
        <div id="hormon" class="section">
            <div class="card">
                <h2>🧪 Sistem Hormon (Endokrin)</h2>
                <p style="margin-bottom: 15px;">Sistem hormon menghasilkan senyawa kimia (hormon) yang disekresikan langsung ke pembuluh darah untuk mengatur kerja organ tubuh secara berangsur-angsur.</p>
                
                <div class="grid-2">
                    <div class="info-box hormon">
                        <h3>Kelenjar Utama & Hormonnya</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Pituitari (Hipofisis):</strong> Kelenjar induk (Master of Glands).</li>
                            <li><strong>Tiroid:</strong> Menghasilkan Tiroksin (pengatur metabolisme).</li>
                            <li><strong>Pankreas:</strong> Menghasilkan Insulin (menurunkan kadar gula darah) dan Glukagon.</li>
                            <li><strong>Adrenal:</strong> Menghasilkan Adrenalin (memacu detak jantung saat stres/bahaya).</li>
                        </ul>
                    </div>

                    <div class="info-box hormon">
                        <h3>Perbedaan Saraf vs Hormon</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Saraf:</strong> Respon sangat cepat, hantaran melalui neuron, respon singkat.</li>
                            <li><strong>Hormon:</strong> Respon lebih lambat, hantaran melalui pembuluh darah, efek berlangsung lama.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 3: ALAT INDERA -->
        <div id="indera" class="section">
            <div class="card">
                <h2>👁️ Alat Indera (Reseptor)</h2>
                <p style="margin-bottom: 15px;">Manusia memiliki 5 alat indera (Pancaindra) sebagai penerima rangsang dari luar (reseptor):</p>
                
                <div class="grid-2">
                    <div class="info-box indera">
                        <h3>Pancaindra & Reseptornya</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Mata (Melihat):</strong> Fotoreseptor (Sensitif terhadap cahaya - Retina).</li>
                            <li><strong>Telinga (Mendengar):</strong> Fonoreseptor (Sensitif terhadap gelombang suara - Organ Korti).</li>
                            <li><strong>Hidung (Membau):</strong> Olfaktori (Sensitif terhadap gas/kimia).</li>
                            <li><strong>Lidah (Mengecap):</strong> Kemoreseptor (Sensitif terhadap rasa larutan).</li>
                            <li><strong>Kulit (Meraba):</strong> Tangoreseptor (Sensitif terhadap tekanan, suhu, nyeri).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 4: SIMULASI GERAK -->
        <div id="simulasi" class="section">
            <div class="card">
                <h2>⚡ Jalur Penghantaran Impuls</h2>
                <p style="margin-bottom: 15px;">Pilih jenis gerakan di bawah ini untuk melihat bagaimana jalur aliran impuls listrik dalam tubuh kita berjalan:</p>

                <div class="sim-toggle">
                    <button class="sim-btn active" onclick="setSim(\'sadar\')">🧠 Gerak Sadar (Contoh: Menulis)</button>
                    <button class="sim-btn" onclick="setSim(\'refleks\')">⚡ Gerak Refleks (Contoh: Menyentuh Wajan Panas)</button>
                </div>

                <div class="sim-display" id="sim-text">
                    <strong>Jalur Gerak Sadar:</strong><br>
                    <span class="path-step">Rangsang</span> ➔ 
                    <span class="path-step">Reseptor (Indera)</span> ➔ 
                    <span class="path-step">Saraf Sensorik</span> ➔ 
                    <span class="path-step">🧠 Otak Besar</span> ➔ 
                    <span class="path-step">Saraf Motorik</span> ➔ 
                    <span class="path-step">Efektor (Otot)</span>
                </div>
            </div>
        </div>

        <!-- TAB 5: LATIHAN SOAL -->
        <div id="latihan" class="section">
            <div class="card" id="quiz-card">
                <div class="quiz-progress">
                    <span id="q-count">Soal 1 dari 10</span>
                    <span id="score-display">Skor: 0</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" id="progress-fill"></div>
                </div>

                <div>
                    <div class="question-title" id="question-text">Memuat soal...</div>
                    <div class="options-list" id="options-container"></div>
                </div>

                <div class="quiz-nav">
                    <button class="btn" id="prev-btn" onclick="prevQuestion()" disabled>← Sebelumnya</button>
                    <button class="btn" id="next-btn" onclick="nextQuestion()">Selanjutnya →</button>
                </div>
            </div>

            <div class="card score-box" id="result-card" style="display: none;">
                <h2>🎉 Latihan Selesai!</h2>
                <p style="margin-bottom: 15px; color: var(--text-muted);">Berikut adalah hasil evaluasi Anda:</p>
                <div class="score-circle" id="final-score">0</div>
                <p id="score-feedback" style="font-size: 1.05rem; margin-bottom: 20px;"></p>
                <button class="btn" onclick="restartQuiz()">🔄 Ulangi Latihan</button>
            </div>
        </div>

    </div>

    <footer>
        Media Pembelajaran Interaktif IPA Kelas 9 • Kurikulum Merdeka
    </footer>

    <script>
        function switchTab(tabId) {
            document.querySelectorAll(\'.section\').forEach(sec => sec.classList.remove(\'active\'));
            document.querySelectorAll(\'nav button\').forEach(btn => btn.classList.remove(\'active\'));
            
            document.getElementById(tabId).classList.add(\'active\');
            event.target.classList.add(\'active\');
        }

        function setSim(type) {
            const btns = document.querySelectorAll(\'.sim-btn\');
            btns.forEach(b => b.classList.remove(\'active\'));
            const textDisplay = document.getElementById(\'sim-text\');

            if (type === \'sadar\') {
                btns[0].classList.add(\'active\');
                textDisplay.innerHTML = "<strong>Jalur Gerak Sadar:</strong><br><span class=\'path-step\'>Rangsang</span> ➔ <span class=\'path-step\'>Reseptor (Indera)</span> ➔ <span class=\'path-step\'>Saraf Sensorik</span> ➔ <span class=\'path-step\'>🧠 Otak Besar</span> ➔ <span class=\'path-step\'>Saraf Motorik</span> ➔ <span class=\'path-step\'>Efektor (Otot)</span>";
            } else {
                btns[1].classList.add(\'active\');
                textDisplay.innerHTML = "<strong>Jalur Gerak Refleks:</strong><br><span class=\'path-step\'>Rangsang</span> ➔ <span class=\'path-step\'>Reseptor (Indera)</span> ➔ <span class=\'path-step\'>Saraf Sensorik</span> ➔ <span class=\'path-step\'>⚡ Sumsum Tulang Belakang</span> ➔ <span class=\'path-step\'>Saraf Motorik</span> ➔ <span class=\'path-step\'>Efektor (Otot)</span>";
            }
        }

        // 10 SOAL LATIHAN IPA KELAS 9
        const questions = [
            {
                q: "1. Bagian dari sel saraf (neuron) yang berfungsi untuk menerima impuls dari sel lain dan membawanya menuju badan sel adalah...",
                options: ["A. Akson", "B. Dendrit", "C. Selubung Mielin", "D. Nodus Ranvier"],
                ans: 1
            },
            {
                q: "2. Pusat koordinasi utama untuk gerak sadar dan proses berpikir manusia berada di...",
                options: ["A. Otak Kecil", "B. Otak Besar", "C. Sumsum Tulang Belakang", "D. Sumsum Lanjutan"],
                ans: 1
            },
            {
                q: "3. Perbedaan utama urutan hantaran impuls pada gerak refleks dibandingkan gerak sadar adalah impuls refleks tidak diolah di...",
                options: ["A. Reseptor", "B. Saraf Sensorik", "C. Otak", "D. Saraf Motorik"],
                ans: 2
            },
            {
                q: "4. Hormon yang diproduksi oleh pankreas dan berfungsi untuk menurunkan kadar gula dalam darah adalah...",
                options: ["A. Adrenalin", "B. Tiroksin", "C. Insulin", "D. Estrogen"],
                ans: 2
            },
            {
                q: "5. Ketika seseorang terkejut atau dalam keadaan bahaya, jantungnya berdetak kencang akibat pengaruh kerja hormon...",
                options: ["A. Adrenalin", "B. Insulin", "C. Testosteron", "D. Tiroksin"],
                ans: 0
            },
            {
                q: "6. Sel-sel reseptor pada indera penglihatan (mata) yang sensitif terhadap cahaya terletak pada bagian...",
                options: ["A. Kornea", "B. Lensa", "C. Retina", "D. Pupil"],
                ans: 2
            },
            {
                q: "7. Jenis reseptor yang terdapat pada organ pendengaran (telinga) untuk menerima gelombang suara dinamakan...",
                options: ["A. Fotoreseptor", "B. Kemoreseptor", "C. Fonoreseptor", "D. Termoreseptor"],
                ans: 2
            },
            {
                q: "8. Bagian otak yang berfungsi menjaga keseimbangan tubuh dan koordinasi posisi otot adalah...",
                options: ["A. Otak Besar", "B. Otak Kecil", "C. Hipotalamus", "D. Batang Otak"],
                ans: 1
            },
            {
                q: "9. Saraf yang membawa impuls dari reseptor (alat indera) menuju ke sistem saraf pusat disebut saraf...",
                options: ["A. Motorik", "B. Sensorik", "C. Konektor", "D. Otonom"],
                ans: 1
            },
            {
                q: "10. Kelenjar yang dijuluki sebagai \'Master of Glands\' karena mampu mengatur kerja kelenjar hormon lainnya adalah kelenjar...",
                options: ["A. Tiroid", "B. Adrenal", "C. Pituitari (Hipofisis)", "D. Pankreas"],
                ans: 2
            }
        ];

        let currentQ = 0;
        let userAnswers = new Array(questions.length).fill(null);

        function renderQuestion() {
            const q = questions[currentQ];
            document.getElementById(\'q-count\').innerText = `Soal ${currentQ + 1} dari ${questions.length}`;
            document.getElementById(\'question-text\').innerText = q.q;
            
            // Progress Bar
            const fill = ((currentQ + 1) / questions.length) * 100;
            document.getElementById(\'progress-fill\').style.width = fill + \'%\';

            // Options Handler
            const optsContainer = document.getElementById(\'options-container\');
            optsContainer.innerHTML = \'\';

            const chosenAns = userAnswers[currentQ];

            q.options.forEach((opt, idx) => {
                const btn = document.createElement(\'button\');
                btn.className = \'option-btn\';
                btn.innerText = opt;

                // Hanya menandai opsi pilihan pengguna
                if (chosenAns !== null && idx === chosenAns) {
                    if (chosenAns === q.ans) {
                        btn.classList.add(\'correct\'); // Hijau jika benar
                    } else {
                        btn.classList.add(\'wrong\');   // Merah jika salah
                    }
                }

                btn.onclick = () => selectOption(idx);
                optsContainer.appendChild(btn);
            });

            document.getElementById(\'prev-btn\').disabled = currentQ === 0;
            
            if (currentQ === questions.length - 1) {
                document.getElementById(\'next-btn\').innerText = \'Lihat Hasil 🏆\';
            } else {
                document.getElementById(\'next-btn\').innerText = \'Selanjutnya →\';
            }

            updateScore();
        }

        function selectOption(idx) {
            if (userAnswers[currentQ] !== null) return;
            userAnswers[currentQ] = idx;
            renderQuestion();
        }

        function nextQuestion() {
            if (currentQ < questions.length - 1) {
                currentQ++;
                renderQuestion();
            } else {
                showResult();
            }
        }

        function prevQuestion() {
            if (currentQ > 0) {
                currentQ--;
                renderQuestion();
            }
        }

        function updateScore() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const score = Math.round((correctCount / questions.length) * 100);
            document.getElementById(\'score-display\').innerText = `Skor: ${score}`;
        }

        function showResult() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const finalScore = Math.round((correctCount / questions.length) * 100);

            document.getElementById(\'quiz-card\').style.display = \'none\';
            document.getElementById(\'result-card\').style.display = \'block\';
            document.getElementById(\'final-score\').innerText = finalScore;

            let feedback = "";
            if (finalScore === 100) feedback = "Sempurna! Kamu memahami konsep Sistem Koordinasi dengan sangat baik!";
            else if (finalScore >= 80) feedback = "Sangat Baik! Pemahamanmu sudah sangat memadai.";
            else if (finalScore >= 60) feedback = "Cukup Baik. Pelajari lagi bagian sistem saraf dan hormon ya!";
            else feedback = "Tetap semangat! Ulangi membaca materi pada tab Sistem Saraf dan Hormon lalu coba lagi.";

            document.getElementById(\'score-feedback\').innerText = feedback;
        }

        function restartQuiz() {
            currentQ = 0;
            userAnswers = new Array(questions.length).fill(null);
            document.getElementById(\'quiz-card\').style.display = \'block\';
            document.getElementById(\'result-card\').style.display = \'none\';
            renderQuestion();
        }

        // Initialize
        renderQuestion();
    </script>
</body>
</html>',
                'created_at' => '2026-08-22 02:48:32',
                'updated_at' => '2026-08-22 22:48:02',
                'mapel' => 'IPA',
                'kategori_modul' => 'modul',
            ),
            2 => 
            array (
                'id' => 9,
                'user_id' => 2,
                'kelas_id' => 3,
                'judul' => 'Hakikat Ilmu Sains dan Metode Ilmiah',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Pembelajaran IPA Kelas 7: Hakikat Ilmu Sains dan Metode Ilmiah</title>
    <style>
        :root {
            --primary: #0284c7;
            --primary-dark: #0369a1;
            --secondary: #0d9488;
            --accent: #f59e0b;
            --bg-base: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: \'Segoe UI\', system-ui, -apple-system, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            line-height: 1.6;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 1.8rem;
            margin-bottom: 8px;
            font-weight: 800;
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }

        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        nav {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: center;
            gap: 6px;
            padding: 10px;
            flex-wrap: wrap;
        }

        nav button {
            background: transparent;
            border: none;
            padding: 8px 12px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-muted);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        nav button:hover, nav button.active {
            background: #e0f2fe;
            color: var(--primary);
        }

        .container {
            max-width: 900px;
            margin: 25px auto;
            padding: 0 15px;
        }

        .section {
            display: none;
            animation: fadeIn 0.4s ease-in-out;
        }

        .section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .card h2 {
            font-size: 1.3rem;
            color: #0f172a;
            margin-bottom: 16px;
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 8px;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
        }

        .info-box {
            padding: 16px;
            border-radius: 10px;
            border-left: 5px solid var(--primary);
            background: #f8fafc;
        }

        .info-box.lab { border-left-color: var(--secondary); }
        .info-box.ukur { border-left-color: var(--accent); }

        .info-box h3 {
            margin-bottom: 8px;
            color: #0f172a;
            font-size: 1.05rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            text-align: left;
            padding: 10px 12px;
            border-bottom: 1px solid var(--border-color);
            font-size: 0.95rem;
        }

        th {
            background-color: #f1f5f9;
            color: #334155;
            font-weight: 700;
        }

        /* Interactive Simulator */
        .sim-toggle {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .sim-btn {
            padding: 8px 16px;
            border: 2px solid var(--primary);
            background: white;
            color: var(--primary);
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .sim-btn.active {
            background: var(--primary);
            color: white;
        }

        .sim-display {
            background: #f8fafc;
            border: 1px dashed #cbd5e1;
            padding: 18px;
            border-radius: 10px;
            font-size: 0.98rem;
            line-height: 1.7;
        }

        .path-step {
            display: inline-block;
            background: #e0f2fe;
            color: #0369a1;
            padding: 4px 10px;
            border-radius: 6px;
            font-weight: 600;
            margin: 4px;
        }

        /* Quiz Styles */
        .quiz-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 16px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .question-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #0f172a;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option-btn {
            text-align: left;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option-btn:hover {
            border-color: #93c5fd;
            background: #f0f9ff;
        }

        .option-btn.correct {
            border-color: var(--success);
            background: #ecfdf5;
            color: #065f46;
            font-weight: 600;
        }

        .option-btn.wrong {
            border-color: var(--danger);
            background: #fef2f2;
            color: #991b1b;
            font-weight: 600;
        }

        .quiz-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .score-box {
            text-align: center;
            padding: 30px 20px;
        }

        .score-circle {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 800;
            margin: 0 auto 15px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <header>
        <div class="badge">IPA Kelas 7 • Kurikulum Merdeka</div>
        <h1>Hakikat Ilmu Sains dan Metode Ilmiah</h1>
        <p>Mengenal Cabang Sains, Alat Lab, Percobaan, Pengukuran & Pelaporan</p>
    </header>

    <nav>
        <button class="active" onclick="switchTab(\'sains\')">🔬 A. Apa Itu Sains?</button>
        <button onclick="switchTab(\'lab\')">🥼 B. Laboratorium IPA</button>
        <button onclick="switchTab(\'merancang\')">📋 C. Merancang Percobaan</button>
        <button onclick="switchTab(\'pengukuran\')">📏 D. Pengukuran</button>
        <button onclick="switchTab(\'pelaporan\')">📊 E. Pelaporan Hasil</button>
        <button onclick="switchTab(\'latihan\')">📝 10 Soal Latihan</button>
    </nav>

    <div class="container">

        <!-- SUBBAB A: APA ITU SAINS -->
        <div id="sains" class="section active">
            <div class="card">
                <h2>🔬 A. Apa Itu Sains?</h2>
                <p style="margin-bottom: 15px;"><strong>Sains</strong> adalah ilmu pengetahuan sistematis tentang alam dan dunia fisik yang diperoleh melalui pengamatan dan percobaan.</p>
                
                <div class="grid-2">
                    <div class="info-box">
                        <h3>Cabang-Cabang Utama Ilmu Sains</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Biologi:</strong> Ilmu tentang makhluk hidup (zoologi, botani, mikrobiologi).</li>
                            <li><strong>Fisika:</strong> Ilmu tentang gejala alam, energi, dan sifat benda (mekanika, optik).</li>
                            <li><strong>Kimia:</strong> Ilmu tentang zat, materi, dan perubahannya.</li>
                            <li><strong>Geologi:</strong> Ilmu tentang bumi, batuan, dan strukturnya.</li>
                            <li><strong>Astronomi:</strong> Ilmu tentang benda-benda langit dan alam semesta.</li>
                            <li><strong>Ekologi:</strong> Ilmu tentang interaksi makhluk hidup dengan lingkungannya.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUBBAB B: LABORATORIUM IPA -->
        <div id="lab" class="section">
            <div class="card">
                <h2>🥼 B. Laboratorium IPA</h2>
                <p style="margin-bottom: 15px;">Laboratorium IPA adalah tempat melakukan percobaan ilmiah. Di laboratorium, kita harus menjaga keselamatan kerja.</p>
                
                <div class="grid-2">
                    <div class="info-box lab">
                        <h3>Alat-Alat Laboratorium Umum</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Gelas Kimia (Beaker Glass):</strong> Menampung cairan.</li>
                            <li><strong>Tabung Reaksi:</strong> Tempat mereaksikan zat kimia skala kecil.</li>
                            <li><strong>Gelas Ukur:</strong> Mengukur volume zat cair secara presisi.</li>
                            <li><strong>Pipet Tetes:</strong> Memindahkan cairan dalam jumlah sangat sedikit.</li>
                            <li><strong>Mikroskop:</strong> Mengamati benda mikroskopis yang sangat kecil.</li>
                        </ul>
                    </div>

                    <div class="info-box lab">
                        <h3>Simbol Bahaya Zat Kimia</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Mudah Terbakar (Flammable):</strong> Jauhkan dari sumber api (contoh: alkohol).</li>
                            <li><strong>Beracun (Toxic):</strong> Jangan dihirup atau tertelan (contoh: merkuri).</li>
                            <li><strong>Korosif (Corrosive):</strong> Merusak kulit/logam (contoh: asam pekat).</li>
                            <li><strong>Mudah Meledak (Explosive):</strong> Hindari benturan dan panas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUBBAB C: MERANCANG PERCOBAAN -->
        <div id="merancang" class="section">
            <div class="card">
                <h2>📋 C. Merancang Percobaan (Metode Ilmiah)</h2>
                <p style="margin-bottom: 15px;">Metode ilmiah adalah langkah kerja sistematis yang digunakan para ilmuwan untuk memecahkan masalah.</p>

                <div class="grid-2">
                    <div class="info-box">
                        <h3>Langkah-Langkah Metode Ilmiah</h3>
                        <ol style="margin-left: 18px;">
                            <li>Pengamatan / Observasi</li>
                            <li>Merumuskan Masalah (Pertanyaan)</li>
                            <li>Membuat Hipotesis (Dugaan Sementara)</li>
                            <li>Merancang & Performing Percobaan</li>
                            <li>Menganalisis Data</li>
                            <li>Menarik Kesimpulan</li>
                        </ol>
                    </div>

                    <div class="info-box">
                        <h3>Variabel Percobaan</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Variabel Bebas:</strong> Faktor yang diubah-ubah / sengaja dibedakan.</li>
                            <li><strong>Variabel Terikat:</strong> Faktor yang diukur / diamati sebagai hasil.</li>
                            <li><strong>Variabel Kontrol:</strong> Faktor yang dibuat sama / dipertahankan tetap.</li>
                        </ul>
                    </div>
                </div>

                <div style="margin-top: 20px;">
                    <h3>⚡ Simulasi Penentuan Variabel Percobaan</h3>
                    <p style="margin-bottom: 10px; font-size: 0.95rem;">Contoh Percobaan: <em>"Pengaruh jumlah pupuk terhadap tinggi tanaman jagung."</em></p>
                    <div class="sim-toggle">
                        <button class="sim-btn active" onclick="setSimVar(\'bebas\')">Variabel Bebas</button>
                        <button class="sim-btn" onclick="setSimVar(\'terikat\')">Variabel Terikat</button>
                        <button class="sim-btn" onclick="setSimVar(\'kontrol\')">Variabel Kontrol</button>
                    </div>
                    <div class="sim-display" id="sim-var-text">
                        <strong>Variabel Bebas:</strong> Jumlah/dosis pupuk yang diberikan (sengaja dibedakan pada tiap tanaman, misalnya 5g, 10g, 15g).
                    </div>
                </div>
            </div>
        </div>

        <!-- SUBBAB D: PENGUKURAN -->
        <div id="pengukuran" class="section">
            <div class="card">
                <h2>📏 D. Pengukuran</h2>
                <p style="margin-bottom: 15px;"><strong>Pengukuran</strong> adalah kegiatan membandingkan suatu besaran yang diukur dengan besaran sejenis yang dipakai sebagai satuan.</p>

                <div style="overflow-x: auto;">
                    <table>
                        <thead>
                            <tr>
                                <th>Besaran Pokok</th>
                                <th>Satuan SI</th>
                                <th>Alat Ukur Standar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Panjang</td>
                                <td>Meter (m)</td>
                                <td>Mistar, Jangka Sorong, Mikrometer Sekrup</td>
                            </tr>
                            <tr>
                                <td>Massa</td>
                                <td>Kilogram (kg)</td>
                                <td>Neraca / Timbangan Digital</td>
                            </tr>
                            <tr>
                                <td>Waktu</td>
                                <td>Sekon / Detik (s)</td>
                                <td>Stopwatch</td>
                            </tr>
                            <tr>
                                <td>Suhu</td>
                                <td>Kelvin (K)</td>
                                <td>Termometer</td>
                            </tr>
                            <tr>
                                <td>Kuat Arus Listrik</td>
                                <td>Ampere (A)</td>
                                <td>Amperemeter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SUBBAB E: PELAPORAN HASIL PERCOBAAN -->
        <div id="pelaporan" class="section">
            <div class="card">
                <h2>📊 E. Pelaporan Hasil Percobaan</h2>
                <p style="margin-bottom: 15px;">Setelah melakukan percobaan, data harus diolah dan disajikan secara sistematis dalam bentuk laporan ilmiah.</p>

                <div class="grid-2">
                    <div class="info-box ukur">
                        <h3>Penyajian Data Percobaan</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Tabel Data:</strong> Menyusun data pengamatan secara rapi berdasar variabel.</li>
                            <li><strong>Grafik:</strong> Memudahkan membaca hubungan antara variabel bebas (sumbu X) dan variabel terikat (sumbu Y).</li>
                        </ul>
                    </div>

                    <div class="info-box ukur">
                        <h3>Sistematika Laporan Ilmiah</h3>
                        <ol style="margin-left: 18px;">
                            <li>Judul Percobaan</li>
                            <li>Tujuan Percobaan</li>
                            <li>Hipotesis & Alat Bahan</li>
                            <li>Prosedur Kerja & Data Pengamatan</li>
                            <li>Pembahasan & Kesimpulan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB LATIHAN SOAL -->
        <div id="latihan" class="section">
            <div class="card" id="quiz-card">
                <div class="quiz-progress">
                    <span id="q-count">Soal 1 dari 10</span>
                    <span id="score-display">Skor: 0</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" id="progress-fill"></div>
                </div>

                <div>
                    <div class="question-title" id="question-text">Memuat soal...</div>
                    <div class="options-list" id="options-container"></div>
                </div>

                <div class="quiz-nav">
                    <button class="btn" id="prev-btn" onclick="prevQuestion()" disabled>← Sebelumnya</button>
                    <button class="btn" id="next-btn" onclick="nextQuestion()">Selanjutnya →</button>
                </div>
            </div>

            <div class="card score-box" id="result-card" style="display: none;">
                <h2>🎉 Latihan Selesai!</h2>
                <p style="margin-bottom: 15px; color: var(--text-muted);">Berikut adalah hasil evaluasi Anda:</p>
                <div class="score-circle" id="final-score">0</div>
                <p id="score-feedback" style="font-size: 1.05rem; margin-bottom: 20px;"></p>
                <button class="btn" onclick="restartQuiz()">🔄 Ulangi Latihan</button>
            </div>
        </div>

    </div>

    <footer>
        Media Pembelajaran Interaktif IPA Kelas 7 • Kurikulum Merdeka
    </footer>

    <script>
        function switchTab(tabId) {
            document.querySelectorAll(\'.section\').forEach(sec => sec.classList.remove(\'active\'));
            document.querySelectorAll(\'nav button\').forEach(btn => btn.classList.remove(\'active\'));
            
            document.getElementById(tabId).classList.add(\'active\');
            event.target.classList.add(\'active\');
        }

        function setSimVar(type) {
            const btns = document.querySelectorAll(\'.sim-btn\');
            btns.forEach(b => b.classList.remove(\'active\'));
            const textDisplay = document.getElementById(\'sim-var-text\');

            if (type === \'bebas\') {
                btns[0].classList.add(\'active\');
                textDisplay.innerHTML = "<strong>Variabel Bebas:</strong> Jumlah/dosis pupuk yang diberikan (faktor yang sengaja dibedakan pada tiap tanaman, misalnya 5g, 10g, 15g).";
            } else if (type === \'terikat\') {
                btns[1].classList.add(\'active\');
                textDisplay.innerHTML = "<strong>Variabel Terikat:</strong> Tinggi pertumbuhan tanaman jagung (faktor yang diukur sebagai akibat dari pemberian pupuk).";
            } else {
                btns[2].classList.add(\'active\');
                textDisplay.innerHTML = "<strong>Variabel Kontrol:</strong> Jenis tanah, jumlah air penyiraman, jenis pot, dan intensitas cahaya matahari (faktor yang dibuat sama agar percobaan adil).";
            }
        }

        // 10 SOAL LATIHAN IPA KELAS 7
        const questions = [
            {
                q: "1. Cabang ilmu sains yang mempelajari tentang makhluk hidup dan kehidupannya dinamakan...",
                options: ["A. Fisika", "B. Biologi", "C. Kimia", "D. Geologi"],
                ans: 1
            },
            {
                q: "2. Alat laboratorium IPA yang digunakan untuk mengukur volume cairan secara teliti adalah...",
                options: ["A. Tabung Reaksi", "B. Gelas Kimia", "C. Gelas Ukur", "D. Pipet Tetes"],
                ans: 2
            },
            {
                q: "3. Dugaan sementara atau jawaban sementara terhadap rumusan masalah penelitian dinamakan...",
                options: ["A. Observasi", "B. Hipotesis", "C. Kesimpulan", "D. Variabel"],
                ans: 1
            },
            {
                q: "4. Dalam suatu penelitian, variabel yang sengaja diubah-ubah oleh peneliti untuk dilihat pengaruhnya disebut...",
                options: ["A. Variabel Bebas", "B. Variabel Terikat", "C. Variabel Kontrol", "D. Variabel Tetap"],
                ans: 0
            },
            {
                q: "5. Kelompok besaran di bawah ini yang semuanya merupakan Besaran Pokok adalah...",
                options: ["A. Panjang, Massa, dan Waktu", "B. Luas, Volume, dan Kecepatan", "C. Massa, Gaya, dan Percepatan", "D. Panjang, Volume, dan Suhu"],
                ans: 0
            },
            {
                q: "6. Satuan Internasional (SI) untuk besaran suhu adalah...",
                options: ["A. Celsius", "B. Reamur", "C. Fahrenheit", "D. Kelvin"],
                ans: 3
            },
            {
                q: "7. Alat yang paling tepat digunakan untuk mengukur diameter dalam sebuah pipa dengan ketelitian tinggi adalah...",
                options: ["A. Mistar Plastik", "B. Meteran Pita", "C. Jangka Sorong", "D. Neraca Ohaus"],
                ans: 2
            },
            {
                q: "8. Simbol gambar tengkorak pada wadah bahan kimia di laboratorium menandakan bahwa zat tersebut bersifat...",
                options: ["A. Mudah Terbakar", "B. Beracun (Toxic)", "C. Korosif", "D. Mudah Meledak"],
                ans: 1
            },
            {
                q: "9. Pada grafik laporan penelitian, variabel bebas biasanya diletakkan pada sumbu...",
                options: ["A. Sumbu Horisontal (X)", "B. Sumbu Vertikal (Y)", "C. Sumbu Diagonal", "D. Bebas di mana saja"],
                ans: 0
            },
            {
                q: "10. Langkah pertama yang dilakukan seorang ilmuwan dalam metode ilmiah sebelum merumuskan masalah adalah...",
                options: ["A. Menarik kesimpulan", "B. Melakukan pengamatan / observasi", "C. Merancang grafik", "D. Menguji hipotesis"],
                ans: 1
            }
        ];

        let currentQ = 0;
        let userAnswers = new Array(questions.length).fill(null);

        function renderQuestion() {
            const q = questions[currentQ];
            document.getElementById(\'q-count\').innerText = `Soal ${currentQ + 1} dari ${questions.length}`;
            document.getElementById(\'question-text\').innerText = q.q;
            
            // Progress Bar
            const fill = ((currentQ + 1) / questions.length) * 100;
            document.getElementById(\'progress-fill\').style.width = fill + \'%\';

            // Options Handler
            const optsContainer = document.getElementById(\'options-container\');
            optsContainer.innerHTML = \'\';

            const chosenAns = userAnswers[currentQ];

            q.options.forEach((opt, idx) => {
                const btn = document.createElement(\'button\');
                btn.className = \'option-btn\';
                btn.innerText = opt;

                // Indikator Benar/Salah langsung pada pilihan pengguna
                if (chosenAns !== null && idx === chosenAns) {
                    if (chosenAns === q.ans) {
                        btn.classList.add(\'correct\'); // Hijau
                    } else {
                        btn.classList.add(\'wrong\');   // Merah
                    }
                }

                btn.onclick = () => selectOption(idx);
                optsContainer.appendChild(btn);
            });

            document.getElementById(\'prev-btn\').disabled = currentQ === 0;
            
            if (currentQ === questions.length - 1) {
                document.getElementById(\'next-btn\').innerText = \'Lihat Hasil 🏆\';
            } else {
                document.getElementById(\'next-btn\').innerText = \'Selanjutnya →\';
            }

            updateScore();
        }

        function selectOption(idx) {
            if (userAnswers[currentQ] !== null) return;
            userAnswers[currentQ] = idx;
            renderQuestion();
        }

        function nextQuestion() {
            if (currentQ < questions.length - 1) {
                currentQ++;
                renderQuestion();
            } else {
                showResult();
            }
        }

        function prevQuestion() {
            if (currentQ > 0) {
                currentQ--;
                renderQuestion();
            }
        }

        function updateScore() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const score = Math.round((correctCount / questions.length) * 100);
            document.getElementById(\'score-display\').innerText = `Skor: ${score}`;
        }

        function showResult() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const finalScore = Math.round((correctCount / questions.length) * 100);

            document.getElementById(\'quiz-card\').style.display = \'none\';
            document.getElementById(\'result-card\').style.display = \'block\';
            document.getElementById(\'final-score\').innerText = finalScore;

            let feedback = "";
            if (finalScore === 100) feedback = "Sempurna! Kamu memahami Hakikat Sains dan Metode Ilmiah dengan sangat baik!";
            else if (finalScore >= 80) feedback = "Sangat Baik! Pemahamanmu mengenai materi dasar Sains sudah kuat.";
            else if (finalScore >= 60) feedback = "Cukup Baik. Pelajari lagi bagian variabel percobaan dan pengukuran ya!";
            else feedback = "Tetap semangat! Ulangi membaca materi pada tab Percobaan & Pengukuran lalu coba lagi.";

            document.getElementById(\'score-feedback\').innerText = feedback;
        }

        function restartQuiz() {
            currentQ = 0;
            userAnswers = new Array(questions.length).fill(null);
            document.getElementById(\'quiz-card\').style.display = \'block\';
            document.getElementById(\'result-card\').style.display = \'none\';
            renderQuestion();
        }

        // Initialize
        renderQuestion();
    </script>
</body>
</html>',
                'created_at' => '2026-08-22 04:14:49',
                'updated_at' => '2026-08-22 22:47:43',
                'mapel' => 'IPA',
                'kategori_modul' => 'modul',
            ),
            3 => 
            array (
                'id' => 10,
                'user_id' => 2,
                'kelas_id' => 3,
                'judul' => 'Latihan TO Hakikat Ilmu Sains dan Metode Ilmiah',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tryout 40 Soal: Hakikat Ilmu Sains dan Metode Ilmiah</title>
    <style>
        :root {
            --primary: #0284c7;
            --primary-dark: #0369a1;
            --bg-base: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: \'Segoe UI\', system-ui, -apple-system, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            line-height: 1.6;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
            color: white;
            padding: 35px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 1.8rem;
            margin-bottom: 8px;
            font-weight: 800;
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
        }

        .container {
            max-width: 850px;
            margin: 30px auto;
            padding: 0 15px;
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .quiz-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .question-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #0f172a;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option-btn {
            text-align: left;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option-btn:hover {
            border-color: #93c5fd;
            background: #f0f9ff;
        }

        .option-btn.selected {
            border-color: var(--primary);
            background: #e0f2fe;
            color: var(--primary-dark);
            font-weight: 600;
        }

        .quiz-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 24px;
        }

        .btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .score-box {
            text-align: center;
            padding: 30px 20px;
        }

        .score-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 auto 20px;
        }

        /* Review Section Styles */
        .review-section {
            margin-top: 30px;
            text-align: left;
        }

        .review-card {
            background: #f8fafc;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .review-card.is-correct {
            border-left: 5px solid var(--success);
        }

        .review-card.is-wrong {
            border-left: 5px solid var(--danger);
        }

        .review-q {
            font-weight: 600;
            margin-bottom: 8px;
            color: #0f172a;
        }

        .review-ans {
            font-size: 0.95rem;
            margin-bottom: 4px;
        }

        .text-correct { color: var(--success); font-weight: 600; }
        .text-wrong { color: var(--danger); font-weight: 600; }

        .explanation-box {
            margin-top: 8px;
            padding: 10px 14px;
            background: #ffffff;
            border-radius: 6px;
            font-size: 0.9rem;
            color: #334155;
            border: 1px dashed #cbd5e1;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Tryout Hakikat Ilmu Sains dan Metode Ilmiah</h1>
        <p>40 Soal Pilihan Ganda • IPA Kelas 7 • Pembahasan di Akhir Sesi</p>
    </header>

    <div class="container">
        <div class="card" id="quiz-card">
            <div class="quiz-progress">
                <span id="q-count">Soal 1 dari 40</span>
                <span id="answered-count">Terjawab: 0 / 40</span>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" id="progress-fill"></div>
            </div>

            <div>
                <div class="question-title" id="question-text">Memuat soal...</div>
                <div class="options-list" id="options-container"></div>
            </div>

            <div class="quiz-nav">
                <button class="btn" id="prev-btn" onclick="prevQuestion()" disabled>← Sebelumnya</button>
                <button class="btn" id="next-btn" onclick="nextQuestion()">Selanjutnya →</button>
            </div>
        </div>

        <!-- HASIL & PEMBAHASAN -->
        <div class="card score-box" id="result-card" style="display: none;">
            <h2>🎉 Tryout Selesai!</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted);">Berikut adalah skor hasil ujian Anda:</p>
            <div class="score-circle" id="final-score">0</div>
            <p id="score-feedback" style="font-size: 1.1rem; margin-bottom: 25px;"></p>
            
            <button class="btn" onclick="restartQuiz()">🔄 Ulangi Tryout</button>

            <div class="review-section">
                <h3 style="margin-bottom: 16px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">📖 Pembahasan Lengkap 40 Soal</h3>
                <div id="review-container"></div>
            </div>
        </div>
    </div>

    <footer>
        Media Pembelajaran IPA • Hakikat Ilmu Sains dan Metode Ilmiah
    </footer>

    <script>
        const questions = [
            {
                q: "1. Cabang ilmu sains yang mempelajari tentang fenomena alam, energi, dan sifat-sifat materi tak hidup adalah...",
                options: ["A. Biologi", "B. Fisika", "C. Geologi", "D. Astronomi"],
                ans: 1,
                exp: "Fisika adalah cabang sains yang berfokus pada fenomena alam fisik, materi, energi, serta interaksinya."
            },
            {
                q: "2. Seorang ilmuwan yang mendalami tentang struktur lapisan bumi, batuan, dan fosil bekerja dalam cabang sains...",
                options: ["A. Ekologi", "B. Geologi", "C. Botani", "D. Kimia"],
                ans: 1,
                exp: "Geologi mempelajari bumi, pembentukannya, struktur batuan, serta fosil penyusun lapisan tanah."
            },
            {
                q: "3. Cabang ilmu biologi yang khusus mempelajari kehidupan mikroorganisme seperti bakteri dan virus adalah...",
                options: ["A. Zoologi", "B. Mikrobiologi", "C. Botani", "D. Entimologi"],
                ans: 1,
                exp: "Mikrobiologi fokus meneliti organisme mikroskopis seperti bakteri, virus, dan mikroba."
            },
            {
                q: "4. Alat laboratorium IPA yang berfungsi untuk mencampur dan memanaskan cairan dalam jumlah kecil adalah...",
                options: ["A. Gelas Ukur", "B. Tabung Reaksi", "C. Pipet Tetes", "D. Neraca Ohaus"],
                ans: 1,
                exp: "Tabung reaksi digunakan untuk mereaksikan, mengocok, atau memanaskan zat kimia dalam volume kecil."
            },
            {
                q: "5. Alat laboratorium yang berfungsi khusus untuk memindahkan cairan dalam volume sangat sedikit tetes demi tetes adalah...",
                options: ["A. Gelas Kimia", "B. Labu Erlenmeyer", "C. Pipet Tetes", "D. Corong Kaca"],
                ans: 2,
                exp: "Pipet tetes berfungsi mengambil dan memindahkan cairan dengan tingkat volume sangat kecil berupa tetesan."
            },
            {
                q: "6. Simbol bahaya pada bahan kimia berupa gambar \'api menyala\' menandakan bahwa bahan tersebut...",
                options: ["A. Mudah Meledak", "B. Mudah Terbakar (Flammable)", "C. Beracun", "D. Korosif"],
                ans: 1,
                exp: "Simbol api menunjukkan bahan mudah terbakar sehingga harus dijauhkan dari sumber percikan api atau panas."
            },
            {
                q: "7. Bahan kimia yang dapat merusak jaringan kulit manusia atau mengikis logam memiliki simbol bahaya...",
                options: ["A. Toxic", "B. Corrosive (Korosif)", "C. Flammable", "D. Explosive"],
                ans: 1,
                exp: "Simbol korosif (cairan menetes merusak tangan/logam) menandakan bahan asam/basa pekat yang mengikis jaringan."
            },
            {
                q: "8. Langkah awal dalam prosedur metode ilmiah yang dilakukan sebelum merumuskan masalah adalah...",
                options: ["A. Merancang Percobaan", "B. Observasi / Pengamatan", "C. Menarik Kesimpulan", "D. Membuat Hipotesis"],
                ans: 1,
                exp: "Observasi atau pengamatan adalah langkah paling awal untuk menemukan fenomena/gejala yang menarik untuk diteliti."
            },
            {
                q: "9. Jawaban sementara atau dugaan ilmiah terhadap rumusan masalah yang masih harus diuji kebenarannya dinamakan...",
                options: ["A. Teori", "B. Hipotesis", "C. Data", "D. Variabel"],
                ans: 1,
                exp: "Hipotesis adalah anggapan atau dugaan sementara yang didasarkan pada teori dan perlu dibuktikan lewat eksperimen."
            },
            {
                q: "10. Dalam suatu eksperimen, faktor atau variabel yang sengaja diubah-ubah oleh peneliti disebut...",
                options: ["A. Variabel Bebas", "B. Variabel Terikat", "C. Variabel Kontrol", "D. Variabel Pengganggu"],
                ans: 0,
                exp: "Variabel bebas (independen) adalah variabel yang sengaja dimanipulasi atau dibedakan perlakuan untuk dilihat efeknya."
            },
            {
                q: "11. Hasil pengukuran atau perubahan yang diamati sebagai akibat dari perubahan variabel bebas dinamakan...",
                options: ["A. Variabel Bebas", "B. Variabel Terikat", "C. Variabel Kontrol", "D. Variabel Tetap"],
                ans: 1,
                exp: "Variabel terikat (dependen) adalah variabel yang diukur, diamati, atau dicatat sebagai respon dari perlakuan variabel bebas."
            },
            {
                q: "12. Faktor-faktor yang dipertahankan sama selama penelitian agar percobaan berjalan secara adil dinamakan...",
                options: ["A. Variabel Bebas", "B. Variabel Terikat", "C. Variabel Kontrol", "D. Variabel Acak"],
                ans: 2,
                exp: "Variabel kontrol adalah semua faktor yang dibuat konstan/sama pada seluruh kelompok sampel agar hasil eksperimen valid."
            },
            {
                q: "13. Seorang siswa meneliti pengaruh jenis air (sumur, sungai, teh) terhadap pertumbuhan tinggi tanaman. Jenis air merupakan...",
                options: ["A. Variabel Terikat", "B. Variabel Bebas", "C. Variabel Kontrol", "D. Hipotesis"],
                ans: 1,
                exp: "Jenis air adalah perlakuan yang sengaja dibedakan (dimanipulasi), sehingga berkedudukan sebagai variabel bebas."
            },
            {
                q: "14. Pada percobaan di atas (Soal No. 13), tinggi tanaman jagung yang diukur setiap hari dinamakan...",
                options: ["A. Variabel Bebas", "B. Variabel Terikat", "C. Variabel Kontrol", "D. Rumusan Masalah"],
                ans: 1,
                exp: "Tinggi tanaman adalah hasil respon yang diukur dan dicatat, sehingga berkedudukan sebagai variabel terikat."
            },
            {
                q: "15. Pengukuran didefinisikan sebagai kegiatan...",
                options: [
                    "A. Menghitung jumlah benda tanpa alat",
                    "B. Membandingkan suatu besaran dengan besaran sejenis yang ditetapkan sebagai satuan",
                    "C. Mengira-ngira panjang benda dengan jengkal",
                    "D. Mengubah bentuk materi menjadi satuan baku"
                ],
                ans: 1,
                exp: "Pengukuran adalah membandingkan nilai besaran suatu objek dengan alat ukur baku yang dijadikan acuan satuan."
            },
            {
                q: "16. Besaran yang satuannya telah ditetapkan terlebih dahulu dan tidak diturunkan dari besaran lain disebut...",
                options: ["A. Besaran Turunan", "B. Besaran Pokok", "C. Besaran Vektor", "D. Besaran Skalar"],
                ans: 1,
                exp: "Besaran pokok adalah besaran utama yang satuannya didefinisikan secara internasional (SI) tanpa diturunkan."
            },
            {
                q: "17. Berikut ini yang seluruhnya merupakan contoh Besaran Pokok dalam Sistem Internasional (SI) adalah...",
                options: [
                    "A. Panjang, Massa, Waktu, Suhu",
                    "B. Luas, Volume, Massa, Kecepatan",
                    "C. Kecepatan, Gaya, Berat, Energi",
                    "D. Panjang, Volume, Waktu, Kuat Arus"
                ],
                ans: 0,
                exp: "7 Besaran Pokok SI: Panjang, Massa, Waktu, Suhu, Kuat Arus, Intensitas Cahaya, dan Jumlah Zat."
            },
            {
                q: "18. Satuan Internasional (SI) standar untuk besaran Waktu adalah...",
                options: ["A. Jam", "B. Menit", "C. Sekon (Detik)", "D. Hari"],
                ans: 2,
                exp: "Dalam standar SI, besaran waktu dinyatakan dalam sekon/detik (s)."
            },
            {
                q: "19. Satuan Internasional (SI) baku untuk besaran Suhu adalah...",
                options: ["A. Degree Celsius (°C)", "B. Kelvin (K)", "C. Fahrenheit (°F)", "D. Reamur (°R)"],
                ans: 1,
                exp: "Satuan SI standar untuk suhu adalah Kelvin (K), bukan Celsius."
            },
            {
                q: "20. Besaran yang diturunkan dari perpaduan dua atau lebih besaran pokok dinamakan...",
                options: ["A. Besaran Vektor", "B. Besaran Pokok", "C. Besaran Turunan", "D. Besaran Baku"],
                ans: 2,
                exp: "Besaran turunan dirumuskan dari penggabungan besaran-besaran pokok (contoh: Luas = Panjang x Lebar)."
            },
            {
                q: "21. Kelompok besaran berikut yang semuanya termasuk Besaran Turunan adalah...",
                options: [
                    "A. Massa, Panjang, Luas",
                    "B. Luas, Volume, Kecepatan, Gaya",
                    "C. Waktu, Suhu, Kuat Arus",
                    "D. Volume, Panjang, Kecepatan"
                ],
                ans: 1,
                exp: "Luas (m²), Volume (m³), Kecepatan (m/s), dan Gaya (N) adalah contoh besaran turunan."
            },
            {
                q: "22. Alat ukur yang paling tepat dan teliti untuk mengukur ketebalan selembar kertas atau kawat tipis adalah...",
                options: ["A. Mistar Plastik", "B. Meteran Pita", "C. Jangka Sorong", "D. Mikrometer Sekrup"],
                ans: 3,
                exp: "Mikrometer sekrup memiliki ketelitian hingga 0,01 mm sehingga sangat cocok mengukur benda sangat tipis."
            },
            {
                q: "23. Jangka sorong merupakan alat ukur panjang yang memiliki tingkat ketelitian sebesar...",
                options: ["A. 1 cm", "B. 1 mm", "C. 0,1 mm (0,01 cm)", "D. 0,01 mm"],
                ans: 2,
                exp: "Jangka sorong memiliki ketelitian umum 0,1 mm (atau 0,01 cm), lebih teliti dibanding mistar (1 mm)."
            },
            {
                q: "24. Mengukur massa benda berukuran sedang di laboratorium IPA biasanya menggunakan alat...",
                options: ["A. Neraca Ohaus / Timbangan Digital", "B. Dinamometer", "C. Barometer", "D. Higrometer"],
                ans: 0,
                exp: "Neraca Ohaus (lengan) atau neraca digital digunakan untuk mengukur massa benda di lab."
            },
            {
                q: "25. Pengukuran menggunakan anggota tubuh seperti jengkal, depa, atau langkah kaki menghasilkan nilai yang berbeda-beda. Satuan ini disebut...",
                options: ["A. Satuan Baku", "B. Satuan Tidak Baku", "C. Satuan Internasional", "D. Satuan SI"],
                ans: 1,
                exp: "Jengkal dan depa adalah satuan tidak baku karena ukurannya bervariasi tergantung fisik masing-masing orang."
            },
            {
                q: "26. Pengamatan yang dilakukan menggunakan pancaindra tanpa menghasilkan angka/data kuantitatif disebut pengamatan...",
                options: ["A. Kuantitatif", "B. Kualitatif", "C. Sistematis", "D. Terukur"],
                ans: 1,
                exp: "Pengamatan kualitatif menggambarkan ciri/sifat objek lewat indera (seperti warna, bau, rasa) tanpa perhitungan angka."
            },
            {
                q: "27. Contoh data pengamatan kuantitatif dari suatu percobaan adalah...",
                options: [
                    "A. Larutan berubah warna menjadi merah tua",
                    "B. Tercium bau menyengat seperti amonia",
                    "C. Suhu air naik sebesar 15 °C",
                    "D. Permukaan daun terasa kasar"
                ],
                ans: 2,
                exp: "Data kuantitatif dinyatakan dalam bentuk angka presisi hasil pengukuran (contoh: naik 15 °C)."
            },
            {
                q: "28. Pada pelaporan hasil percobaan, variabel bebas umumnya diletakkan pada sumbu grafik bagian...",
                options: ["A. Sumbu Miring", "B. Sumbu Horisontal / Mendatar (Sumbu X)", "C. Sumbu Vertikal / Tegak (Sumbu Y)", "D. Sumbu Z"],
                ans: 1,
                exp: "Standar grafik penelitian menempatkan variabel bebas pada sumbu X (horisontal) dan variabel terikat pada sumbu Y (vertikal)."
            },
            {
                q: "29. Bagian laporan penelitian yang berisi pernyataan ringkas yang menjawab rumusan masalah berdasarkan hasil analisis dinamakan...",
                options: ["A. Hipotesis", "B. Prosedur Kerja", "C. Pembahasan", "D. Kesimpulan"],
                ans: 3,
                exp: "Kesimpulan adalah ikhtisar ringkas yang membuktikan apakah hipotesis diterima atau ditolak berdasar data."
            },
            {
                q: "30. Sikap ilmiah yang wajib dimiliki seorang peneliti saat hasil percobaannya tidak sesuai dengan hipotesis adalah...",
                options: [
                    "A. Mengubah data percobaan agar sesuai hipotesis",
                    "B. Jujur melaporkan data apa adanya dan mengevaluasi penyebabnya",
                    "C. Membuang data dan menghentikan penelitian",
                    "D. Menyalahkan alat laboratorium"
                ],
                ans: 1,
                exp: "Jujur dan obyektif adalah sikap ilmiah utama. Data harus dilaporkan asli meski tidak sesuai hipotesis."
            },
            {
                q: "31. Besaran massa jenis benda merupakan turunan dari besaran pokok...",
                options: ["A. Massa dan Panjang (Volume)", "B. Massa dan Waktu", "C. Panjang dan Suhu", "D. Gaya dan Luas"],
                ans: 0,
                exp: "Massa jenis (ρ = m/V) dirumuskan dari massa (kg) dibagi volume/panjang pangkat tiga (m³)."
            },
            {
                q: "32. Volume batu yang bentuknya tidak beraturan dapat diukur secara presisi menggunakan alat...",
                options: ["A. Mikrometer Sekrup", "B. Gelas Ukur berisi air", "C. Mistar Ukur", "D. Jangka Sorong"],
                ans: 1,
                exp: "Benda tak beraturan diukur volumenya lewat metode celup/perpindahan volume air di dalam gelas ukur."
            },
            {
                q: "33. Nilai 2,5 kilometer (km) jika dikonversikan ke dalam Satuan Internasional (Meter) bernilai...",
                options: ["A. 25 m", "B. 250 m", "C. 2.500 m", "D. 25.000 m"],
                ans: 2,
                exp: "1 km = 1.000 m, maka 2,5 km x 1.000 = 2.500 meter."
            },
            {
                q: "34. Massa benda sebesar 500 gram jika dikonversikan ke dalam satuan SI (Kilogram) bernilai...",
                options: ["A. 5 kg", "B. 0,5 kg", "C. 0,05 kg", "D. 50 kg"],
                ans: 1,
                exp: "1 kg = 1.000 gram, sehingga 500 gram / 1.000 = 0,5 kg."
            },
            {
                q: "35. Cabang sains yang meneliti tentang reaksi kimia dalam tubuh makhluk hidup dinamakan...",
                options: ["A. Geofisika", "B. Biokimia", "C. Astrofisika", "D. Ekologi"],
                ans: 1,
                exp: "Biokimia gabungan antara Biologi dan Kimia yang mempelajari proses-proses kimia di dalam sel makhluk hidup."
            },
            {
                q: "36. Jika di laboratorium terjadi tumpahan bahan kimia asam mengenai kulit, tindakan pertama yang benar adalah...",
                options: [
                    "A. Membiarkannya kering sendiri",
                    "B. Membilas kulit dengan air mengalir dalam jumlah banyak",
                    "C. Menggosok dengan kain kering",
                    "D. Memoles minyak goreng"
                ],
                ans: 1,
                exp: "Pertolongan pertama tumpahan kimia korosif adalah segera membilas area terinfeksi dengan air bersih mengalir."
            },
            {
                q: "37. Benda pemanas di laboratorium yang menggunakan bahan bakar spiritus dinamakan...",
                options: ["A. Pembakar Spiritus (Bunsen)", "B. Kaki Tiga", "C. Kawat Kasa", "D. Erlenmeyer"],
                ans: 0,
                exp: "Pembakar spiritus/bunsen digunakan sebagai sumber kalor utama untuk memanaskan larutan di laboratorium."
            },
            {
                q: "38. Fungsi kawat kasa yang dilapisi asbes pada saat memanaskan gelas kimia di atas kaki tiga adalah...",
                options: [
                    "A. Mempercepat api padam", "B. Menyebarkan panas api agar merata dan mencegah gelas pecah",
                    "C. Mencegah asap keluar", "D. Memperbesar nyala api"
                ],
                ans: 1,
                exp: "Kawat kasa membagi/meratakan distribusi panas dari api bunsen agar tidak langsung menumpuk pada satu titik gelas."
            },
            {
                q: "39. Urutan penulisan laporan penelitian ilmiah secara kronologis yang benar adalah...",
                options: [
                    "A. Judul - Tujuan - Hipotesis - Alat Bahan - Prosedur - Data - Kesimpulan",
                    "B. Kesimpulan - Judul - Hipotesis - Data - Prosedur",
                    "C. Hipotesis - Judul - Prosedur - Data - Kesimpulan",
                    "D. Alat Bahan - Judul - Kesimpulan - Data"
                ],
                ans: 0,
                exp: "Sistematika standar: Judul -> Tujuan -> Hipotesis -> Alat/Bahan -> Prosedur -> Data/Pembahasan -> Kesimpulan."
            },
            {
                q: "40. Mengapa ilmuwan perlu mempublikasikan laporan hasil penelitiannya?",
                options: [
                    "A. Agar terkenal di media sosial",
                    "B. Supaya hasil penelitian dapat diuji ulang dan bermanfaat bagi perkembangan sains",
                    "C. Hanya untuk memenuhi tugas sekolah",
                    "D. Agar ilmuwan lain tidak bisa meneliti topik sama"
                ],
                ans: 1,
                exp: "Publikasi memungkinkan hasil percobaan diverifikasi, diuji ulang oleh ilmuwan lain, dan dimanfaatkan luas."
            }
        ];

        let currentQ = 0;
        let userAnswers = new Array(questions.length).fill(null);

        function renderQuestion() {
            const q = questions[currentQ];
            document.getElementById(\'q-count\').innerText = `Soal ${currentQ + 1} dari ${questions.length}`;
            document.getElementById(\'question-text\').innerText = q.q;
            
            // Calculate answered progress
            const answeredNum = userAnswers.filter(a => a !== null).length;
            document.getElementById(\'answered-count\').innerText = `Terjawab: ${answeredNum} / ${questions.length}`;

            // Progress Bar
            const fill = ((currentQ + 1) / questions.length) * 100;
            document.getElementById(\'progress-fill\').style.width = fill + \'%\';

            // Options Handler
            const optsContainer = document.getElementById(\'options-container\');
            optsContainer.innerHTML = \'\';

            const chosenAns = userAnswers[currentQ];

            q.options.forEach((opt, idx) => {
                const btn = document.createElement(\'button\');
                btn.className = \'option-btn\';
                btn.innerText = opt;

                // Menandai opsi yang dipilih pengguna tanpa membocorkan kunci
                if (chosenAns !== null && idx === chosenAns) {
                    btn.classList.add(\'selected\');
                }

                btn.onclick = () => selectOption(idx);
                optsContainer.appendChild(btn);
            });

            document.getElementById(\'prev-btn\').disabled = currentQ === 0;
            
            if (currentQ === questions.length - 1) {
                document.getElementById(\'next-btn\').innerText = \'Lihat Hasil 🏆\';
            } else {
                document.getElementById(\'next-btn\').innerText = \'Selanjutnya →\';
            }
        }

        function selectOption(idx) {
            userAnswers[currentQ] = idx;
            renderQuestion();
        }

        function nextQuestion() {
            if (currentQ < questions.length - 1) {
                currentQ++;
                renderQuestion();
            } else {
                showResult();
            }
        }

        function prevQuestion() {
            if (currentQ > 0) {
                currentQ--;
                renderQuestion();
            }
        }

        function showResult() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const finalScore = Math.round((correctCount / questions.length) * 100);

            document.getElementById(\'quiz-card\').style.display = \'none\';
            document.getElementById(\'result-card\').style.display = \'block\';
            document.getElementById(\'final-score\').innerText = finalScore;

            let feedback = "";
            if (finalScore === 100) feedback = "Sempurna! Kamu menguasai materi Hakikat Sains & Metode Ilmiah dengan sangat luar biasa!";
            else if (finalScore >= 80) feedback = "Sangat Baik! Pemahamanmu mengenai sains dan metode ilmiah sudah sangat kuat.";
            else if (finalScore >= 60) feedback = "Cukup Baik. Pelajari lagi bagian variabel percobaan dan pengukuran di bawah ini.";
            else feedback = "Jangan berkecil hati! Pelajari pembahasan di bawah ini dan coba lagi ya.";

            document.getElementById(\'score-feedback\').innerText = feedback;

            // Generate Review Section
            const reviewContainer = document.getElementById(\'review-container\');
            reviewContainer.innerHTML = \'\';

            questions.forEach((q, idx) => {
                const userChoice = userAnswers[idx];
                const isCorrect = userChoice === q.ans;

                const card = document.createElement(\'div\');
                card.className = `review-card ${isCorrect ? \'is-correct\' : \'is-wrong\'}`;

                const userText = userChoice !== null ? q.options[userChoice] : "Tidak Dijawab";
                const correctText = q.options[q.ans];

                card.innerHTML = `
                    <div class="review-q">${q.q}</div>
                    <div class="review-ans">
                        <strong>Jawaban Anda:</strong> 
                        <span class="${isCorrect ? \'text-correct\' : \'text-wrong\'}">${userText}</span>
                        ${isCorrect ? \' (BENAR)\' : \' (SALAH)\'}
                    </div>
                    ${!isCorrect ? `<div class="review-ans"><strong>Kunci Jawaban:</strong> <span class="text-correct">${correctText}</span></div>` : \'\'}
                    <div class="explanation-box">💡 <strong>Pembahasan:</strong> ${q.exp}</div>
                `;

                reviewContainer.appendChild(card);
            });
        }

        function restartQuiz() {
            currentQ = 0;
            userAnswers = new Array(questions.length).fill(null);
            document.getElementById(\'quiz-card\').style.display = \'block\';
            document.getElementById(\'result-card\').style.display = \'none\';
            renderQuestion();
        }

        // Initialize
        renderQuestion();
    </script>
</body>
</html>',
                'created_at' => '2026-08-22 04:26:27',
                'updated_at' => '2026-08-23 14:34:38',
                'mapel' => 'IPA',
                'kategori_modul' => 'latihan',
            ),
            4 => 
            array (
                'id' => 11,
                'user_id' => 2,
                'kelas_id' => 2,
                'judul' => 'Latihan TO Sistem Kordinasi',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tryout 40 Soal: Sistem Koordinasi Manusia</title>
    <style>
        :root {
            --primary: #0284c7;
            --primary-dark: #0369a1;
            --bg-base: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: \'Segoe UI\', system-ui, -apple-system, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            line-height: 1.6;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
            color: white;
            padding: 35px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 2rem;
            margin-bottom: 8px;
            font-weight: 800;
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
        }

        .container {
            max-width: 850px;
            margin: 30px auto;
            padding: 0 15px;
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .quiz-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .question-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #0f172a;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option-btn {
            text-align: left;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option-btn:hover {
            border-color: #93c5fd;
            background: #f0f9ff;
        }

        .option-btn.selected {
            border-color: var(--primary);
            background: #e0f2fe;
            color: var(--primary-dark);
            font-weight: 600;
        }

        .quiz-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 24px;
        }

        .btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .score-box {
            text-align: center;
            padding: 30px 20px;
        }

        .score-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 auto 20px;
        }

        /* Review Section Styles */
        .review-section {
            margin-top: 30px;
            text-align: left;
        }

        .review-card {
            background: #f8fafc;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .review-card.is-correct {
            border-left: 5px solid var(--success);
        }

        .review-card.is-wrong {
            border-left: 5px solid var(--danger);
        }

        .review-q {
            font-weight: 600;
            margin-bottom: 8px;
            color: #0f172a;
        }

        .review-ans {
            font-size: 0.95rem;
            margin-bottom: 4px;
        }

        .text-correct { color: var(--success); font-weight: 600; }
        .text-wrong { color: var(--danger); font-weight: 600; }

        .explanation-box {
            margin-top: 8px;
            padding: 10px 14px;
            background: #ffffff;
            border-radius: 6px;
            font-size: 0.9rem;
            color: #334155;
            border: 1px dashed #cbd5e1;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Tryout Sistem Koordinasi Manusia</h1>
        <p>40 Soal Pilihan Ganda • Pembahasan Lengkap di Akhir Sesi</p>
    </header>

    <div class="container">
        <div class="card" id="quiz-card">
            <div class="quiz-progress">
                <span id="q-count">Soal 1 dari 40</span>
                <span id="answered-count">Terjawab: 0 / 40</span>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" id="progress-fill"></div>
            </div>

            <div>
                <div class="question-title" id="question-text">Memuat soal...</div>
                <div class="options-list" id="options-container"></div>
            </div>

            <div class="quiz-nav">
                <button class="btn" id="prev-btn" onclick="prevQuestion()" disabled>← Sebelumnya</button>
                <button class="btn" id="next-btn" onclick="nextQuestion()">Selanjutnya →</button>
            </div>
        </div>

        <!-- HASIL & PEMBAHASAN -->
        <div class="card score-box" id="result-card" style="display: none;">
            <h2>🎉 Tryout Selesai!</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted);">Berikut adalah skor hasil ujian Anda:</p>
            <div class="score-circle" id="final-score">0</div>
            <p id="score-feedback" style="font-size: 1.1rem; margin-bottom: 25px;"></p>
            
            <button class="btn" onclick="restartQuiz()">🔄 Ulangi Tryout</button>

            <div class="review-section">
                <h3 style="margin-bottom: 16px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">📖 Pembahasan Lengkap 40 Soal</h3>
                <div id="review-container"></div>
            </div>
        </div>
    </div>

    <footer>
        Media Pembelajaran IPA • Sistem Koordinasi Manusia
    </footer>

    <script>
        const questions = [
            {
                q: "1. Komponen sel saraf yang berfungsi membawa impuls hasil olahan dari badan sel menuju ke sel saraf lainnya adalah...",
                options: ["A. Dendrit", "B. Akson (Neurit)", "C. Nodus Ranvier", "D. Sel Schwann"],
                ans: 1,
                exp: "Akson atau neurit berfungsi menghantarkan impuls meninggalkan badan sel menuju sel saraf lain atau sel efektor."
            },
            {
                q: "2. Bagian otak besar yang berfungsi sebagai pusat penglihatan manusia terletak pada lobus...",
                options: ["A. Frontalis", "B. Parietalis", "C. Oksipitalis", "D. Temporalis"],
                ans: 2,
                exp: "Lobus oksipitalis terletak di bagian belakang otak besar dan berfungsi khusus sebagai pusat penerima serta pengolah rangsang penglihatan."
            },
            {
                q: "3. Ketika menyentuh benda panas, tangan kita secara spontan ditarik. Jalur aliran impuls pada gerak refleks tersebut adalah...",
                options: [
                    "A. Reseptor - Saraf Sensorik - Otak - Saraf Motorik - Efektor",
                    "B. Reseptor - Saraf Motorik - Sumsum Tulang Belakang - Saraf Sensorik - Efektor",
                    "C. Reseptor - Saraf Sensorik - Sumsum Tulang Belakang - Saraf Motorik - Efektor",
                    "D. Efektor - Saraf Sensorik - Sumsum Tulang Belakang - Saraf Motorik - Reseptor"
                ],
                ans: 2,
                exp: "Gerak refleks melewati lengkung refleks: Reseptor -> Saraf Sensorik -> Sumsum Tulang Belakang (sebagai pusat refleks) -> Saraf Motorik -> Efektor."
            },
            {
                q: "4. Kelenjar endokrin yang dijuluki sebagai \'Master of Glands\' karena mampu menghasilkan hormon pembina kelenjar lainnya adalah kelenjar...",
                options: ["A. Tiroid", "B. Adrenal", "C. Pituitari (Hipofisis)", "D. Pankreas"],
                ans: 2,
                exp: "Kelenjar Hipofisis/Pituitari disebut Master of Glands karena memproduksi bermacam-macam hormon yang mengatur kerja kelenjar endokrin lainnya."
            },
            {
                q: "5. Kekurangan hormon insulin yang diproduksi oleh pankreas akan menyebabkan gangguan kesehatan berupa...",
                options: ["A. Diabetes Insipidus", "B. Diabetes Melitus", "C. Gigantisme", "D. Kretinisme"],
                ans: 1,
                exp: "Insulin berfungsi menurunkan kadar gula darah. Kekurangan insulin menyebabkan glukosa darah menumpuk, memicu Diabetes Melitus."
            },
            {
                q: "6. Bagian mata yang berfungsi mengatur jumlah cahaya yang masuk ke dalam bola mata dengan cara membesar atau mengecil adalah...",
                options: ["A. Kornea", "B. Pupil", "C. Retina", "D. Sklera"],
                ans: 1,
                exp: "Pupil adalah celah di tengah iris yang diameternya diatur oleh otot iris untuk menyesuaikan intensitas cahaya masuk."
            },
            {
                q: "7. Fotoreseptor pada retina mata yang paling peka terhadap cahaya redup/remang-remang serta tidak dapat membedakan warna adalah...",
                options: ["A. Sel Batang (Basilus)", "B. Sel Kerucut (Konus)", "C. Bintik Kuning", "D. Bintik Buta"],
                ans: 0,
                exp: "Sel batang peka pada cahaya remang-remang dan persepsi hitam-putih, sedangkan sel kerucut peka terhadap cahaya terang dan warna."
            },
            {
                q: "8. Bagian telinga tengah yang berfungsi untuk menyeimbangkan tekanan udara antara telinga luar dan rongga mulut adalah...",
                options: ["A. Saluran Setengah Lingkaran", "B. Saluran Eustachius", "C. Koklea", "D. Membran Timpani"],
                ans: 1,
                exp: "Saluran Eustachius menghubungkan rongga telinga tengah dengan faring untuk menyepadankan tekanan udara."
            },
            {
                q: "9. Bagian telinga dalam yang berisi cairan dan organ Korti tempat reseptor pendengaran (fonoreseptor) berada adalah...",
                options: ["A. Koklea (Rumah Siput)", "B. Saluran Semisirkularis", "C. Martil (Malleus)", "D. Landasan (Incus)"],
                ans: 0,
                exp: "Koklea mengandung organ Korti dengan sel-sel rambut yang bertindak sebagai fonoreseptor pendengaran."
            },
            {
                q: "10. Area pada lidah yang paling sensitif terhadap rasa pahit terletak pada bagian...",
                options: ["A. Ujung depan", "B. Samping depan", "C. Samping belakang", "D. Pangkal belakang"],
                ans: 3,
                exp: "Pangkal lidah bagian belakang paling peka merespons sensasi rasa pahit."
            },
            {
                q: "11. Selubung lemak yang membungkus akson dan berfungsi mempercepat jalurnya impuls serta memberi nutrisi adalah...",
                options: ["A. Selubung Mielin", "B. Nodus Ranvier", "C. Sinapsis", "D. Neurotransmiter"],
                ans: 0,
                exp: "Selubung Mielin merupakan pembungkus akson berselang-seling yang berfungsi mempercepat hantaran sinyal saraf."
            },
            {
                q: "12. Celah sempit yang menghubungkan ujung akson suatu neuron dengan dendrit neuron berikutnya dinamakan...",
                options: ["A. Akson terminal", "B. Sinapsis", "C. Nodus Ranvier", "D. Ganglion"],
                ans: 1,
                exp: "Sinapsis adalah titik temu/celah penghubung antarujung sel saraf tempat penghantaran impuls zat kimia."
            },
            {
                q: "13. Zat kimia yang berfungsi menyeberangkan impuls listrik melintasi celah sinapsis dinamakan...",
                options: ["A. Hormon", "B. Neurotransmiter", "C. Enzim", "D. Antibodi"],
                ans: 1,
                exp: "Neurotransmiter (seperti Asetilkolin) dilepaskan oleh vesikel sinapsis untuk menghantarkan sinyal menyeberangi celah sinapsis."
            },
            {
                q: "14. Otak kecil (Cerebellum) memiliki fungsi vital bagi tubuh manusia, yaitu sebagai pusat...",
                options: ["A. Berpikir dan ingatan", "B. Keseimbangan dan koordinasi gerak otot", "C. Pengaturan suhu tubuh", "D. Denyut jantung dan pernapasan"],
                ans: 1,
                exp: "Cerebellum berfungsi mengkoordinasikan gerakan halus otot serta menjaga keseimbangan dan postur tubuh."
            },
            {
                q: "15. Bagian otak yang menjadi pusat pengendali denyut jantung, tekanan darah, dan pernapasan adalah...",
                options: ["A. Cerebrum", "B. Cerebellum", "C. Medulla Oblongata (Sumsum Lanjutan)", "D. Hipotalamus"],
                ans: 2,
                exp: "Medulla Oblongata mengatur refleks otonom vital seperti pernapasan, denyut jantung, dan tekanan darah."
            },
            {
                q: "16. Saraf otonom parasimpatis memiliki mekanisme kerja yang bertolak belakang dengan simpatis, contohnya...",
                options: ["A. Mempercepat denyut jantung", "B. Memperbesar pupil mata", "C. Memperlambat denyut jantung", "D. Mengurangi sekresi air liur"],
                ans: 2,
                exp: "Saraf simpatis bekerja memacu fungsi tubuh (saat stres/aktif), sedangkan parasimpatis memperlambat/menenangkan fungsi organ."
            },
            {
                q: "17. Hormon tiroksin dihasilkan oleh kelenjar tiroid dengan bantuan mineral penting yaitu...",
                options: ["A. Kalsium", "B. Zat Besi", "C. Yodium", "D. Natrium"],
                ans: 2,
                exp: "Yodium diperlukan oleh kelenjar tiroid untuk memproduksi hormon tiroksin penentu laju metabolisme tubuh."
            },
            {
                q: "18. Seseorang yang memproduksi hormon pertumbuhan (GH) secara berlebihan pada masa dewasa akan mengalami...",
                options: ["A. Gigantisme", "B. Akromegali", "C. Kretinisme", "D. Morbus Basedow"],
                ans: 1,
                exp: "Kelebihan GH saat anak-anak memicu Gigantisme, sedangkan jika terjadi pada usia dewasa memicu Akromegali (pembesaran tulang ujung)."
            },
            {
                q: "19. Hormon yang dilepaskan saat dalam ancaman bahaya untuk memacu detak jantung dan frekuensi napas adalah...",
                options: ["A. Estrogen", "B. Adrenalin (Epinefrin)", "C. Oksitosin", "D. Progesteron"],
                ans: 1,
                exp: "Hormon adrenalin diproduksi oleh kelenjar adrenal saat stres atau situasi darurat untuk menyiapkan tubuh bereaksi."
            },
            {
                q: "20. Hormon yang berperan merangsang pematangan sel telur dan memicu ciri kelamin sekunder pada wanita adalah...",
                options: ["A. Testosteron", "B. Progesteron dan Estrogen", "C. Prolaktin", "D. Aldosteron"],
                ans: 1,
                exp: "Estrogen dan Progesteron dihasilkan oleh ovarium untuk mengatur siklus reproduksi dan ciri fisik wanita."
            },
            {
                q: "21. Kelainan mata miopi (rabun jauh) terjadi karena bayangan jatuh di depan retina. Kondisi ini dikoreksi dengan kacamata berlensa...",
                options: ["A. Cekung (Negatif)", "B. Cembung (Positif)", "C. Silindris", "D. Ganda"],
                ans: 0,
                exp: "Miopi dibantu oleh kacamata berlensa cekung (konkaf/negatif) agar bayangan tepat terfokus jatuh di permukaan retina."
            },
            {
                q: "22. Bintik buta pada retina mata tidak dapat mendeteksi cahaya karena pada area tersebut tidak terdapat...",
                options: ["A. Pembuluh darah", "B. Sel-sel fotoreseptor", "C. Kornea", "D. Lensa"],
                ans: 1,
                exp: "Bintik buta adalah tempat keluarnya berkas saraf optik menuju otak, sehingga tidak memiliki sel fotoreseptor (batang & kerucut)."
            },
            {
                q: "23. Tiga tulang pendengaran pada telinga tengah yang urut dari luar ke dalam adalah...",
                options: ["A. Martil - Landasan - Sanggurdi", "B. Sanggurdi - Landasan - Martil", "C. Landasan - Martil - Sanggurdi", "D. Martil - Sanggurdi - Landasan"],
                ans: 0,
                exp: "Urutan osikel pendengaran dari luar ke dalam adalah Malleus (Martil), Incus (Landasan), dan Stapes (Sanggurdi)."
            },
            {
                q: "24. Tiga saluran setengah lingkaran (kanalis semisirkularis) pada telinga dalam berfungsi untuk...",
                options: ["A. Mendengar suara nada tinggi", "B. Menjaga keseimbangan tubuh", "C. Mengarahkan gelombang suara", "D. Memproduksi minyak serumen"],
                ans: 1,
                exp: "Kanalis semisirkularis berisi cairan endolimfa yang berfungsi sebagai alat keseimbangan dinamis tubuh."
            },
            {
                q: "25. Reseptor pada hidung yang peka terhadap zat kimia berwujud gas disebut sel...",
                options: ["A. Fotoreseptor", "B. Olfaktori", "C. Gustatori", "D. Tangoreseptor"],
                ans: 1,
                exp: "Sel Olfaktori di rongga hidung atas berfungsi sebagai kemoreseptor zat berbau berwujud gas."
            },
            {
                q: "26. Bintil-bintil kecil pada permukaan lidah yang mengandung tunas pengecap dinamakan...",
                options: ["A. Papila", "B. Vili", "C. Silia", "D. Alveolus"],
                ans: 0,
                exp: "Papila adalah tonjolan-tonjolan pada permukaan lidah tempat berkumpulnya kuncup/tunas pengecap."
            },
            {
                q: "27. Reseptor kulit yang khusus menerima rangsangan berupa tekanan kuat adalah reseptor korpuskel...",
                options: ["A. Meissner", "B. Pacini", "C. Ruffini", "D. Krause"],
                ans: 1,
                exp: "Korpuskel Pacini peka terhadap tekanan kuat/dalam, Meissner peka sentuhan halus, Ruffini peka panas, dan Krause peka dingin."
            },
            {
                q: "28. Perbedaan utama antara kerja sistem saraf dan sistem hormon berada pada...",
                options: [
                    "A. Saraf merespons cepat; Hormon merespons lambat",
                    "B. Saraf lewat darah; Hormon lewat neuron",
                    "C. Saraf bertarget luas; Hormon bertarget sempit",
                    "D. Saraf menggunakan zat kimia; Hormon menggunakan listrik murni"
                ],
                ans: 0,
                exp: "Sistem saraf bekerja memicu respons secara cepat via sinyal listrik sel saraf, sedangkan sistem hormon bekerja lambat via pembuluh darah."
            },
            {
                q: "29. Penderita hipermetropi (rabun dekat) mengalami kesulitan melihat benda dekat karena bayangan jatuh di...",
                options: ["A. Depan retina", "B. Belakang retina", "C. Tepat pada bintik buta", "D. Kornea mata"],
                ans: 1,
                exp: "Hipermetropi terjadi karena bola mata terlalu pendek/lensa terlalu pipih, memicu bayangan terfokus jatuh di belakang retina."
            },
            {
                q: "30. Hormon Parathormon (PTH) bekerja antagonis dengan Kalsitonin dalam mengatur kadar...",
                options: ["A. Gula darah", "B. Kalsium dalam darah", "C. Yodium", "D. Air dalam tubuh"],
                ans: 1,
                exp: "Kalsitonin (dari tiroid) menurunkan kalsium darah, sedangkan Parathormon (dari paratiroid) meningkatkan kadar kalsium darah."
            },
            {
                q: "31. Sumsum tulang belakang (Medulla Spinalis) terlindungi secara kokoh di dalam rongga...",
                options: ["A. Tengkorak", "B. Ruas tulang belakang", "C. Tulang rusuk", "D. Tulang pinggul"],
                ans: 1,
                exp: "Otak dilindungi oleh tengkorak, sedangkan sumsum tulang belakang dilindungi oleh ruas-ruas tulang belakang (vertebrae)."
            },
            {
                q: "32. Bagian otak besar yang berperan penting dalam proses pendengaran dan penerjemahan bahasa adalah lobus...",
                options: ["A. Frontalis", "B. Temporalis", "C. Parietalis", "D. Oksipitalis"],
                ans: 1,
                exp: "Lobus temporalis terletak di samping otak (dekat telinga) yang berfungsi mengolah sinyal pendengaran dan memori suara."
            },
            {
                q: "33. Penyakit degeneratif yang ditandai dengan penurunan daya ingat secara bertahap akibat hilangnya neuron otak adalah...",
                options: ["A. Parkinson", "B. Alzheimer", "C. Meningitis", "D. Stroke"],
                ans: 1,
                exp: "Alzheimer ditandai dengan penurunan fungsi kognitif dan memori, sedangkan Parkinson ditandai dengan kemunduran koordinasi motorik (gemetar)."
            },
            {
                q: "34. Radang pada selaput pembungkus otak (meninges) yang disebabkan oleh infeksi mikroorganisme disebut...",
                options: ["A. Meningitis", "B. Neuritis", "C. Hidrosefalus", "D. Amnesia"],
                ans: 0,
                exp: "Meningitis adalah peradangan pada selaput meninges pembungkus sistem saraf pusat akibat bakteri/virus."
            },
            {
                q: "35. Kelenjar yang hanya aktif pada masa kanak-kanak untuk membentuk sistem kekebalan tubuh adalah kelenjar...",
                options: ["A. Tiroid", "B. Timus", "C. Pineal", "D. Gonad"],
                ans: 1,
                exp: "Kelenjar Timus berperan penting dalam mematangkan sel limfosit T untuk sistem imun pada usia anak-anak."
            },
            {
                q: "36. Hormon ADH (Antidiuretic Hormone) yang dihasilkan oleh hipofisis belakang berfungsi untuk...",
                options: ["A. Menyerap kembali air di ginjal", "B. Memacu pertumbuhan tulang", "C. Merangsang sekresi ASI", "D. Mengatur gula darah"],
                ans: 0,
                exp: "ADH mengatur tingkat reabsorpsi air pada tubulus ginjal untuk mengontrol konsentrasi dan volume urine."
            },
            {
                q: "37. Gelombang suara yang ditangkap daun telinga akan digetarkan pertama kali oleh struktur...",
                options: ["A. Membran Timpani (Gendang Telinga)", "B. Tulang Sanggurdi", "C. Koklea", "D. Tingkap Oval"],
                ans: 0,
                exp: "Gelombang getaran suara pertama kali menumbuk dan menggetarkan Membran Timpani sebelum diteruskan ke tulang pendengaran."
            },
            {
                q: "38. Penderita astigmatisme (mata silindris) mengalami pandangan kabur akibat ketidakrataan pada...",
                options: ["A. Kornea atau Lensa mata", "B. Saraf Optik", "C. Otak Besar", "D. Iris Mata"],
                ans: 0,
                exp: "Astigmatisme disebabkan oleh kelengkungan kornea/lensa mata yang tidak seragam, sehingga berkas cahaya terbias acak."
            },
            {
                q: "39. Ketidakmampuan membedakan warna-warna tertentu akibat kelainan genetik pada sel kerucut dinamakan...",
                options: ["A. Katarak", "B. Glaukoma", "C. Buta Warna", "D. Presbiopi"],
                ans: 2,
                exp: "Buta warna terjadi akibat tidak berfungsinya satu atau lebih pigmen pada sel kerucut (konus) retina secara genetik."
            },
            {
                q: "40. Reseptor kulit yang sangat peka merespons suhu dingin adalah korpuskel...",
                options: ["A. Pacini", "B. Meissner", "C. Krause", "D. Ruffini"],
                ans: 2,
                exp: "Korpuskel Krause bertindak sebagai termoreseptor dingin, sedangkan Korpuskel Ruffini peka terhadap rangsang panas."
            }
        ];

        let currentQ = 0;
        let userAnswers = new Array(questions.length).fill(null);

        function renderQuestion() {
            const q = questions[currentQ];
            document.getElementById(\'q-count\').innerText = `Soal ${currentQ + 1} dari ${questions.length}`;
            document.getElementById(\'question-text\').innerText = q.q;
            
            // Calculate answered progress
            const answeredNum = userAnswers.filter(a => a !== null).length;
            document.getElementById(\'answered-count\').innerText = `Terjawab: ${answeredNum} / ${questions.length}`;

            // Progress Bar
            const fill = ((currentQ + 1) / questions.length) * 100;
            document.getElementById(\'progress-fill\').style.width = fill + \'%\';

            // Options Handler
            const optsContainer = document.getElementById(\'options-container\');
            optsContainer.innerHTML = \'\';

            const chosenAns = userAnswers[currentQ];

            q.options.forEach((opt, idx) => {
                const btn = document.createElement(\'button\');
                btn.className = \'option-btn\';
                btn.innerText = opt;

                // Hanya menandai opsi yang dipilih tanpa membocorkan kunci
                if (chosenAns !== null && idx === chosenAns) {
                    btn.classList.add(\'selected\');
                }

                btn.onclick = () => selectOption(idx);
                optsContainer.appendChild(btn);
            });

            document.getElementById(\'prev-btn\').disabled = currentQ === 0;
            
            if (currentQ === questions.length - 1) {
                document.getElementById(\'next-btn\').innerText = \'Lihat Hasil 🏆\';
            } else {
                document.getElementById(\'next-btn\').innerText = \'Selanjutnya →\';
            }
        }

        function selectOption(idx) {
            userAnswers[currentQ] = idx;
            renderQuestion();
        }

        function nextQuestion() {
            if (currentQ < questions.length - 1) {
                currentQ++;
                renderQuestion();
            } else {
                showResult();
            }
        }

        function prevQuestion() {
            if (currentQ > 0) {
                currentQ--;
                renderQuestion();
            }
        }

        function showResult() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const finalScore = Math.round((correctCount / questions.length) * 100);

            document.getElementById(\'quiz-card\').style.display = \'none\';
            document.getElementById(\'result-card\').style.display = \'block\';
            document.getElementById(\'final-score\').innerText = finalScore;

            let feedback = "";
            if (finalScore === 100) feedback = "Sempurna! Anda menguasai seluruh materi Sistem Koordinasi dengan luar biasa!";
            else if (finalScore >= 80) feedback = "Sangat Baik! Pemahaman Anda mengenai Sistem Koordinasi sudah sangat kuat.";
            else if (finalScore >= 60) feedback = "Cukup Baik. Pelajari kembali materi yang salah pada bagian pembahasan di bawah.";
            else feedback = "Jangan berkecil hati! Pelajari kembali pembahasan di bawah dan coba lagi tryout ini.";

            document.getElementById(\'score-feedback\').innerText = feedback;

            // Generate Review Section
            const reviewContainer = document.getElementById(\'review-container\');
            reviewContainer.innerHTML = \'\';

            questions.forEach((q, idx) => {
                const userChoice = userAnswers[idx];
                const isCorrect = userChoice === q.ans;

                const card = document.createElement(\'div\');
                card.className = `review-card ${isCorrect ? \'is-correct\' : \'is-wrong\'}`;

                const userText = userChoice !== null ? q.options[userChoice] : "Tidak Dijawab";
                const correctText = q.options[q.ans];

                card.innerHTML = `
                    <div class="review-q">${q.q}</div>
                    <div class="review-ans">
                        <strong>Jawaban Anda:</strong> 
                        <span class="${isCorrect ? \'text-correct\' : \'text-wrong\'}">${userText}</span>
                        ${isCorrect ? \' (BENAR)\' : \' (SALAH)\'}
                    </div>
                    ${!isCorrect ? `<div class="review-ans"><strong>Kunci Jawaban:</strong> <span class="text-correct">${correctText}</span></div>` : \'\'}
                    <div class="explanation-box">💡 <strong>Pembahasan:</strong> ${q.exp}</div>
                `;

                reviewContainer.appendChild(card);
            });
        }

        function restartQuiz() {
            currentQ = 0;
            userAnswers = new Array(questions.length).fill(null);
            document.getElementById(\'quiz-card\').style.display = \'block\';
            document.getElementById(\'result-card\').style.display = \'none\';
            renderQuestion();
        }

        // Initialize
        renderQuestion();
    </script>
</body>
</html>',
                'created_at' => '2026-08-22 04:28:35',
                'updated_at' => '2026-08-23 14:34:23',
                'mapel' => 'IPA',
                'kategori_modul' => 'latihan',
            ),
            5 => 
            array (
                'id' => 12,
                'user_id' => 2,
                'kelas_id' => 4,
                'judul' => 'Materi Sistem Pencernaan',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Pembelajaran IPA Kelas 8: Makanan dan Sistem Pencernaan</title>
    <style>
        :root {
            --primary: #16a34a;
            --primary-dark: #15803d;
            --secondary: #0284c7;
            --accent: #f59e0b;
            --bg-base: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: \'Segoe UI\', system-ui, -apple-system, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            line-height: 1.6;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, #15803d 0%, #16a34a 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 2rem;
            margin-bottom: 8px;
            font-weight: 800;
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }

        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        nav {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: center;
            gap: 8px;
            padding: 10px;
            flex-wrap: wrap;
        }

        nav button {
            background: transparent;
            border: none;
            padding: 8px 16px;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-muted);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        nav button:hover, nav button.active {
            background: #dcfce7;
            color: var(--primary);
        }

        .container {
            max-width: 900px;
            margin: 25px auto;
            padding: 0 15px;
        }

        .section {
            display: none;
            animation: fadeIn 0.4s ease-in-out;
        }

        .section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .card h2 {
            font-size: 1.4rem;
            color: #0f172a;
            margin-bottom: 16px;
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 8px;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 16px;
        }

        .info-box {
            padding: 16px;
            border-radius: 10px;
            border-left: 5px solid var(--primary);
            background: #f8fafc;
        }

        .info-box.organ {
            border-left-color: var(--secondary);
        }

        .info-box.enzim {
            border-left-color: var(--accent);
        }

        .info-box h3 {
            margin-bottom: 8px;
            color: #0f172a;
            font-size: 1.1rem;
        }

        .intro-box {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 10px;
            padding: 18px;
            margin-bottom: 20px;
        }

        .intro-box h3 {
            color: #15803d;
            margin-bottom: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            text-align: left;
            padding: 10px 14px;
            border-bottom: 1px solid var(--border-color);
        }

        th {
            background-color: #f1f5f9;
            color: #334155;
            font-weight: 700;
        }

        /* Interactive Simulator */
        .sim-toggle {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .sim-btn {
            padding: 8px 16px;
            border: 2px solid var(--primary);
            background: white;
            color: var(--primary);
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .sim-btn.active {
            background: var(--primary);
            color: white;
        }

        .sim-display {
            background: #f8fafc;
            border: 1px dashed #cbd5e1;
            padding: 18px;
            border-radius: 10px;
            font-size: 1rem;
            line-height: 1.7;
        }

        .path-step {
            display: inline-block;
            background: #dcfce7;
            color: #15803d;
            padding: 4px 10px;
            border-radius: 6px;
            font-weight: 600;
            margin: 4px;
        }

        /* Quiz Styles */
        .quiz-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 16px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .question-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #0f172a;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option-btn {
            text-align: left;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option-btn:hover {
            border-color: #86efac;
            background: #f0fdf4;
        }

        .option-btn.correct {
            border-color: var(--success);
            background: #ecfdf5;
            color: #065f46;
            font-weight: 600;
        }

        .option-btn.wrong {
            border-color: var(--danger);
            background: #fef2f2;
            color: #991b1b;
            font-weight: 600;
        }

        .quiz-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .score-box {
            text-align: center;
            padding: 30px 20px;
        }

        .score-circle {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 800;
            margin: 0 auto 15px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <header>
        <div class="badge">IPA Kelas 8 SMP/MTs</div>
        <h1>Makanan dan Sistem Pencernaan</h1>
        <p>Nutrisi Makanan, Organ Pencernaan, dan Enzim Pencernaan</p>
    </header>

    <nav>
        <button class="active" onclick="switchTab(\'nutrisi\')">🥗 Nutrisi Makanan</button>
        <button onclick="switchTab(\'organ\')">🫀 Organ Pencernaan</button>
        <button onclick="switchTab(\'enzim\')">🧪 Enzim Pencernaan</button>
        <button onclick="switchTab(\'simulasi\')">⚡ Jalur Pencernaan</button>
        <button onclick="switchTab(\'latihan\')">📝 10 Soal Latihan</button>
    </nav>

    <div class="container">

        <!-- TAB 1: NUTRISI MAKANAN -->
        <div id="nutrisi" class="section active">
            <div class="card">
                <h2>📌 Pengertian & Nutrisi Makanan</h2>
                <div class="intro-box">
                    <h3>💡 Apa itu Pencernaan Makanan?</h3>
                    <p><strong>Pencernaan makanan</strong> adalah proses pemecahan molekul makanan yang kompleks menjadi molekul sederhana yang lebih kecil agar dapat diserap oleh tubuh sebagai sumber energi, bahan pertumbuhan, dan pengganti sel-sel rusak.</p>
                </div>

                <h2>🥗 Nutrisi (Zat Makanan) yang Dibutuhkan Tubuh</h2>
                <div class="grid-2">
                    <div class="info-box">
                        <h3>1. Karbohidrat</h3>
                        <p>Sumber energi utama tubuh. 1 gram karbohidrat menghasilkan ±4,1 kalori. Contoh: beras, jagung, gandum, kentang.</p>
                    </div>

                    <div class="info-box">
                        <h3>2. Protein</h3>
                        <p>Bahan pembangun sel, pertumbuhan, dan perbaikan jaringan rusak. Contoh: telur, daging, ikan, tahu, tempe.</p>
                    </div>

                    <div class="info-box">
                        <h3>3. Lemak</h3>
                        <p>Sumber energi cadangan dan pelarut vitamin A, D, E, K. 1 gram lemak menghasilkan ±9,3 kalori. Contoh: minyak, mentega, kacang-kacangan.</p>
                    </div>

                    <div class="info-box">
                        <h3>4. Vitamin, Mineral & Air</h3>
                        <p>Zat pengatur metabolisme tubuh dan pencegah berbagai penyakit (imunitas).</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 2: ORGAN PENCERNAAN -->
        <div id="organ" class="section">
            <div class="card">
                <h2>🫀 Saluran & Organ Pencernaan</h2>
                <p style="margin-bottom: 15px;">Sistem pencernaan terdiri dari **saluran pencernaan** (dilalui makanan) dan **organ tambahan** (penghasil kelenjar pencernaan).</p>

                <div class="grid-2">
                    <div class="info-box organ">
                        <h3>Saluran Utama Pencernaan</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Mulut:</strong> Pencernaan mekanis (gigi & lidah) dan kimiawi (enzim ptialin/amilase).</li>
                            <li><strong>Kerongkongan (Esofagus):</strong> Terjadi gerak peristaltik (meremas & mendorong makanan ke lambung).</li>
                            <li><strong>Lambung:</strong> Pencernaan mekanis (otot dinding lambung) dan kimiawi (HCl, Pepsin, Renin).</li>
                            <li><strong>Usus Halus (Intestinum):</strong> Tempat utama pencernaan kimiawi & penyerapan nutrisi (villi).</li>
                            <li><strong>Usus Besar (Kolon):</strong> Penyerapan air dan pembentukan feses dibantu bakteri <em>E. coli</em>.</li>
                            <li><strong>Anus:</strong> Muara pengeluaran sisa makanan (defekasi).</li>
                        </ul>
                    </div>

                    <div class="info-box organ">
                        <h3>Organ Tambahan (Kelenjar)</h3>
                        <ul style="margin-left: 18px;">
                            <li><strong>Hati (Hepar):</strong> Menghasilkan cairan empedu untuk mengemulsikan lemak.</li>
                            <li><strong>Kantung Empedu:</strong> Menyimpan cairan empedu sebelum dialirkan ke usus halus.</li>
                            <li><strong>Pankreas:</strong> Menghasilkan enzim amilase, tripsin, dan lipase.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 3: ENZIM PENCERNAAN -->
        <div id="enzim" class="section">
            <div class="card">
                <h2>🧪 Enzim Pencernaan Utama</h2>
                <p style="margin-bottom: 15px;">Enzim berperan memutus ikatan kimia zat makanan agar berubah menjadi molekul kecil yang siap diserap darah.</p>

                <div style="overflow-x: auto;">
                    <table>
                        <thead>
                            <tr>
                                <th>Organ Penghasil</th>
                                <th>Enzim / Zat</th>
                                <th>Fungsi / Peran Utama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Mulut</strong> (Kelenjar Ludah)</td>
                                <td>Ptialin (Amilase)</td>
                                <td>Mengubah amilum (karbohidrat) menjadi glukosa/maltosa.</td>
                            </tr>
                            <tr>
                                <td><strong>Lambung</strong></td>
                                <td>Asam Klorida (HCl)</td>
                                <td>Membunuh kuman & mengaktifkan pepsinogen menjadi pepsin.</td>
                            </tr>
                            <tr>
                                <td><strong>Lambung</strong></td>
                                <td>Pepsin</td>
                                <td>Mengubah protein menjadi pepton.</td>
                            </tr>
                            <tr>
                                <td><strong>Lambung</strong></td>
                                <td>Renin</td>
                                <td>Mengendapkan kasein (protein susu).</td>
                            </tr>
                            <tr>
                                <td><strong>Pankreas</strong></td>
                                <td>Amilase</td>
                                <td>Mengubah amilum menjadi glukosa.</td>
                            </tr>
                            <tr>
                                <td><strong>Pankreas</strong></td>
                                <td>Tripsin</td>
                                <td>Mengubah protein/pepton menjadi asam amino.</td>
                            </tr>
                            <tr>
                                <td><strong>Pankreas</strong></td>
                                <td>Lipase</td>
                                <td>Mengubah lemak menjadi asam lemak dan gliserol.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- TAB 4: SIMULASI JALUR -->
        <div id="simulasi" class="section">
            <div class="card">
                <h2>⚡ Jalur Perjalanan Makanan & Jenis Pencernaan</h2>
                <p style="margin-bottom: 15px;">Pilih bagian di bawah ini untuk melihat urutan perjalanan makanan atau jenis proses pencernaan yang terjadi:</p>

                <div class="sim-toggle">
                    <button class="sim-btn active" onclick="setSim(\'jalur\')">🍔 Alur Jalur Makanan</button>
                    <button class="sim-btn" onclick="setSim(\'jenis\')">⚙️ Mekanis vs Kimiawi</button>
                </div>

                <div class="sim-display" id="sim-text">
                    <strong>Urutan Saluran Pencernaan:</strong><br>
                    <span class="path-step">1. Mulut</span> ➔ 
                    <span class="path-step">2. Kerongkongan</span> ➔ 
                    <span class="path-step">3. Lambung</span> ➔ 
                    <span class="path-step">4. Usus Halus</span> ➔ 
                    <span class="path-step">5. Usus Besar</span> ➔ 
                    <span class="path-step">6. Anus</span>
                </div>
            </div>
        </div>

        <!-- TAB 5: LATIHAN SOAL -->
        <div id="latihan" class="section">
            <div class="card" id="quiz-card">
                <div class="quiz-progress">
                    <span id="q-count">Soal 1 dari 10</span>
                    <span id="score-display">Skor: 0</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" id="progress-fill"></div>
                </div>

                <div>
                    <div class="question-title" id="question-text">Memuat soal...</div>
                    <div class="options-list" id="options-container"></div>
                </div>

                <div class="quiz-nav">
                    <button class="btn" id="prev-btn" onclick="prevQuestion()" disabled>← Sebelumnya</button>
                    <button class="btn" id="next-btn" onclick="nextQuestion()">Selanjutnya →</button>
                </div>
            </div>

            <div class="card score-box" id="result-card" style="display: none;">
                <h2>🎉 Latihan Selesai!</h2>
                <p style="margin-bottom: 15px; color: var(--text-muted);">Berikut adalah hasil evaluasi Anda:</p>
                <div class="score-circle" id="final-score">0</div>
                <p id="score-feedback" style="font-size: 1.05rem; margin-bottom: 20px;"></p>
                <button class="btn" onclick="restartQuiz()">🔄 Ulangi Latihan</button>
            </div>
        </div>

    </div>

    <footer>
        Media Pembelajaran Interaktif IPA Kelas 8 • Kurikulum Merdeka
    </footer>

    <script>
        function switchTab(tabId) {
            document.querySelectorAll(\'.section\').forEach(sec => sec.classList.remove(\'active\'));
            document.querySelectorAll(\'nav button\').forEach(btn => btn.classList.remove(\'active\'));
            
            document.getElementById(tabId).classList.add(\'active\');
            event.target.classList.add(\'active\');
        }

        function setSim(type) {
            const btns = document.querySelectorAll(\'.sim-btn\');
            btns.forEach(b => b.classList.remove(\'active\'));
            const textDisplay = document.getElementById(\'sim-text\');

            if (type === \'jalur\') {
                btns[0].classList.add(\'active\');
                textDisplay.innerHTML = "<strong>Urutan Saluran Pencernaan:</strong><br><span class=\'path-step\'>1. Mulut</span> ➔ <span class=\'path-step\'>2. Kerongkongan</span> ➔ <span class=\'path-step\'>3. Lambung</span> ➔ <span class=\'path-step\'>4. Usus Halus</span> ➔ <span class=\'path-step\'>5. Usus Besar</span> ➔ <span class=\'path-step\'>6. Anus</span>";
            } else {
                btns[1].classList.add(\'active\');
                textDisplay.innerHTML = "<strong>Pencernaan Mekanis vs Kimiawi:</strong><br>• <strong>Mekanis:</strong> Mengubah ukuran fisik makanan menjadi lebih kecil (contoh: kunyahan gigi di mulut & remasan dinding lambung).<br>• <strong>Kimiawi:</strong> Mengubah molekul zat makanan dengan bantuan <em>enzim pencernaan</em> menjadi senyawa sederhana.";
            }
        }

        // 10 SOAL LATIHAN IPA KELAS 8
        const questions = [
            {
                q: "1. Enzim ptialin yang terdapat di dalam ludah mulut berfungsi untuk mengubah amilum menjadi...",
                options: ["A. Protein", "B. Glukosa/Maltosa", "C. Asam Lemak", "D. Asam Amino"],
                ans: 1
            },
            {
                q: "2. Gerakan meremas dan mendorong makanan pada dinding kerongkongan menuju lambung dinamakan gerak...",
                options: ["A. Amiloid", "B. Peristaltik", "C. Asimilasi", "D. Defekasi"],
                ans: 1
            },
            {
                q: "3. Zat asam pada lambung (HCl) berfungsi penting dalam proses pencernaan, yaitu...",
                options: ["A. Mengemulsikan lemak", "B. Membunuh kuman dan mengaktifkan pepsinogen", "C. Menyerap glukosa", "D. Memecah protein menjadi asam amino"],
                ans: 1
            },
            {
                q: "4. Organ pencernaan yang berfungsi utama dalam penyerapan air dan pembentukan feses dibantu bakteri E. coli adalah...",
                options: ["A. Usus Halus", "B. Lambung", "C. Usus Besar", "D. Hati"],
                ans: 2
            },
            {
                q: "5. Cairan empedu yang berfungsi mengemulsikan lemak diproduksi oleh organ...",
                options: ["A. Pankreas", "B. Hati", "C. Ginjal", "D. Lambung"],
                ans: 1
            },
            {
                q: "6. Enzim lipase yang dihasilkan oleh pankreas berfungsi untuk memecah molekul lemak menjadi...",
                options: ["A. Asam lemak dan gliserol", "B. Glukosa dan asam amino", "C. Pepton dan pektin", "D. Pepton dan glukosa"],
                ans: 0
            },
            {
                q: "7. Penyerapan sari-sari makanan hasil pencernaan paling banyak terjadi pada bagian usus halus, yaitu...",
                options: ["A. Usus Dua Belas Jari (Duodenum)", "B. Usus Kosong (Jejunum)", "C. Usus Penyerapan (Ileum)", "D. Usus Buntu (Apendiks)"],
                ans: 2
            },
            {
                q: "8. Zat makanan yang menghasilkan energi terbesar per gramnya (± 9,3 kalori/gram) adalah...",
                options: ["A. Karbohidrat", "B. Protein", "C. Lemak", "D. Vitamin"],
                ans: 2
            },
            {
                q: "9. Karbohidrat, protein, dan lemak tergolong dalam nutrisi yang dibutuhkan tubuh dalam jumlah besar yang disebut...",
                options: ["A. Mikronutrisi", "B. Makronutrisi", "C. Enzimatis", "D. Mineralke"],
                ans: 1
            },
            {
                q: "10. Penyakit radang selaput dinding lambung yang disebabkan tingginya asam lambung atau infeksi dinamakan...",
                options: ["A. Diare", "B. Maag (Gastritis)", "C. Sembelit (Konstipasi)", "D. Apenditis"],
                ans: 1
            }
        ];

        let currentQ = 0;
        let userAnswers = new Array(questions.length).fill(null);

        function renderQuestion() {
            const q = questions[currentQ];
            document.getElementById(\'q-count\').innerText = `Soal ${currentQ + 1} dari ${questions.length}`;
            document.getElementById(\'question-text\').innerText = q.q;
            
            // Progress Bar
            const fill = ((currentQ + 1) / questions.length) * 100;
            document.getElementById(\'progress-fill\').style.width = fill + \'%\';

            // Options Handler
            const optsContainer = document.getElementById(\'options-container\');
            optsContainer.innerHTML = \'\';

            const chosenAns = userAnswers[currentQ];

            q.options.forEach((opt, idx) => {
                const btn = document.createElement(\'button\');
                btn.className = \'option-btn\';
                btn.innerText = opt;

                // Hanya menandai opsi pilihan pengguna
                if (chosenAns !== null && idx === chosenAns) {
                    if (chosenAns === q.ans) {
                        btn.classList.add(\'correct\'); // Hijau jika benar
                    } else {
                        btn.classList.add(\'wrong\');   // Merah jika salah
                    }
                }

                btn.onclick = () => selectOption(idx);
                optsContainer.appendChild(btn);
            });

            document.getElementById(\'prev-btn\').disabled = currentQ === 0;
            
            if (currentQ === questions.length - 1) {
                document.getElementById(\'next-btn\').innerText = \'Lihat Hasil 🏆\';
            } else {
                document.getElementById(\'next-btn\').innerText = \'Selanjutnya →\';
            }

            updateScore();
        }

        function selectOption(idx) {
            if (userAnswers[currentQ] !== null) return;
            userAnswers[currentQ] = idx;
            renderQuestion();
        }

        function nextQuestion() {
            if (currentQ < questions.length - 1) {
                currentQ++;
                renderQuestion();
            } else {
                showResult();
            }
        }

        function prevQuestion() {
            if (currentQ > 0) {
                currentQ--;
                renderQuestion();
            }
        }

        function updateScore() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const score = Math.round((correctCount / questions.length) * 100);
            document.getElementById(\'score-display\').innerText = `Skor: ${score}`;
        }

        function showResult() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const finalScore = Math.round((correctCount / questions.length) * 100);

            document.getElementById(\'quiz-card\').style.display = \'none\';
            document.getElementById(\'result-card\').style.display = \'block\';
            document.getElementById(\'final-score\').innerText = finalScore;

            let feedback = "";
            if (finalScore === 100) feedback = "Sempurna! Kamu memahami materi Makanan dan Sistem Pencernaan dengan sangat baik!";
            else if (finalScore >= 80) feedback = "Sangat Baik! Pemahamanmu sudah sangat memadai.";
            else if (finalScore >= 60) feedback = "Cukup Baik. Pelajari lagi bagian organ dan enzim pencernaan ya!";
            else feedback = "Tetap semangat! Ulangi membaca materi pada tab Organ dan Enzim Pencernaan lalu coba lagi.";

            document.getElementById(\'score-feedback\').innerText = feedback;
        }

        function restartQuiz() {
            currentQ = 0;
            userAnswers = new Array(questions.length).fill(null);
            document.getElementById(\'quiz-card\').style.display = \'block\';
            document.getElementById(\'result-card\').style.display = \'none\';
            renderQuestion();
        }

        // Initialize
        renderQuestion();
    </script>
</body>
</html>',
                'created_at' => '2026-08-22 04:30:01',
                'updated_at' => '2026-08-22 22:47:10',
                'mapel' => 'IPA',
                'kategori_modul' => 'modul',
            ),
            6 => 
            array (
                'id' => 13,
                'user_id' => 2,
                'kelas_id' => 4,
                'judul' => 'Latihan TO Sistem Pencernaan',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tryout 40 Soal: Makanan dan Sistem Pencernaan</title>
    <style>
        :root {
            --primary: #16a34a;
            --primary-dark: #15803d;
            --bg-base: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: \'Segoe UI\', system-ui, -apple-system, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            line-height: 1.6;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, #15803d 0%, #16a34a 100%);
            color: white;
            padding: 35px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 2rem;
            margin-bottom: 8px;
            font-weight: 800;
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
        }

        .container {
            max-width: 850px;
            margin: 30px auto;
            padding: 0 15px;
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .quiz-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .question-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #0f172a;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option-btn {
            text-align: left;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option-btn:hover {
            border-color: #86efac;
            background: #f0fdf4;
        }

        .option-btn.selected {
            border-color: var(--primary);
            background: #dcfce7;
            color: var(--primary-dark);
            font-weight: 600;
        }

        .quiz-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 24px;
        }

        .btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .score-box {
            text-align: center;
            padding: 30px 20px;
        }

        .score-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 auto 20px;
        }

        /* Review Section Styles */
        .review-section {
            margin-top: 30px;
            text-align: left;
        }

        .review-card {
            background: #f8fafc;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .review-card.is-correct {
            border-left: 5px solid var(--success);
        }

        .review-card.is-wrong {
            border-left: 5px solid var(--danger);
        }

        .review-q {
            font-weight: 600;
            margin-bottom: 8px;
            color: #0f172a;
        }

        .review-ans {
            font-size: 0.95rem;
            margin-bottom: 4px;
        }

        .text-correct { color: var(--success); font-weight: 600; }
        .text-wrong { color: var(--danger); font-weight: 600; }

        .explanation-box {
            margin-top: 8px;
            padding: 10px 14px;
            background: #ffffff;
            border-radius: 6px;
            font-size: 0.9rem;
            color: #334155;
            border: 1px dashed #cbd5e1;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Tryout Makanan dan Sistem Pencernaan</h1>
        <p>40 Soal Pilihan Ganda • IPA Kelas 8 • Pembahasan di Akhir Sesi</p>
    </header>

    <div class="container">
        <div class="card" id="quiz-card">
            <div class="quiz-progress">
                <span id="q-count">Soal 1 dari 40</span>
                <span id="answered-count">Terjawab: 0 / 40</span>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" id="progress-fill"></div>
            </div>

            <div>
                <div class="question-title" id="question-text">Memuat soal...</div>
                <div class="options-list" id="options-container"></div>
            </div>

            <div class="quiz-nav">
                <button class="btn" id="prev-btn" onclick="prevQuestion()" disabled>← Sebelumnya</button>
                <button class="btn" id="next-btn" onclick="nextQuestion()">Selanjutnya →</button>
            </div>
        </div>

        <!-- HASIL & PEMBAHASAN -->
        <div class="card score-box" id="result-card" style="display: none;">
            <h2>🎉 Tryout Selesai!</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted);">Berikut adalah skor hasil ujian Anda:</p>
            <div class="score-circle" id="final-score">0</div>
            <p id="score-feedback" style="font-size: 1.1rem; margin-bottom: 25px;"></p>
            
            <button class="btn" onclick="restartQuiz()">🔄 Ulangi Tryout</button>

            <div class="review-section">
                <h3 style="margin-bottom: 16px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">📖 Pembahasan Lengkap 40 Soal</h3>
                <div id="review-container"></div>
            </div>
        </div>
    </div>

    <footer>
        Media Pembelajaran IPA • Makanan dan Sistem Pencernaan Manusia
    </footer>

    <script>
        const questions = [
            {
                q: "1. Nutrisi yang berfungsi sebagai sumber energi utama tubuh dan menghasilkan energi sebesar 4,1 kalori per gram adalah...",
                options: ["A. Protein", "B. Karbohidrat", "C. Lemak", "D. Vitamin"],
                ans: 1,
                exp: "Karbohidrat merupakan sumber energi utama bagi tubuh. Setiap 1 gram karbohidrat menghasilkan energi sebesar ±4,1 kalori."
            },
            {
                q: "2. Zat makanan yang berfungsi utama sebagai bahan pembangun sel, pertumbuhan, dan mengganti sel-sel tubuh yang rusak adalah...",
                options: ["A. Protein", "B. Karbohidrat", "C. Mineral", "D. Lemak"],
                ans: 0,
                exp: "Protein berfungsi sebagai zat pembangun tubuh, penyusun sel-sel baru, serta memperbaiki jaringan sel yang rusak."
            },
            {
                q: "3. Vitamin yang larut dalam lemak adalah...",
                options: ["A. Vitamin B dan C", "B. Vitamin A, D, E, dan K", "C. Vitamin B, C, dan D", "D. Vitamin A, B, dan C"],
                ans: 1,
                exp: "Vitamin dikelompokkan menjadi dua: larut dalam air (B dan C) serta larut dalam lemak (A, D, E, dan K)."
            },
            {
                q: "4. Enzim ptialin (amilase) yang diproduksi oleh kelenjar ludah di mulut berfungsi memecah...",
                options: ["A. Protein menjadi pepton", "B. Amilum menjadi glukosa/maltosa", "C. Lemak menjadi asam lemak", "D. Pepton menjadi asam amino"],
                ans: 1,
                exp: "Enzim ptialin (amilase) mengatalisis pemecahan amilum (karbohidrat kompleks) menjadi gula yang lebih sederhana (maltosa/glukosa)."
            },
            {
                q: "5. Gerak meremas dan mendorong makanan yang dilakukan oleh otot dinding kerongkongan menuju lambung disebut gerak...",
                options: ["A. Peristaltik", "B. Amiloid", "C. Filtrasi", "D. Osilasi"],
                ans: 0,
                exp: "Gerak peristaltik adalah gerakan kontraksi dan relaksasi bergantian otot polos dinding kerongkongan untuk mendorong bolus ke lambung."
            },
            {
                q: "6. Fungsi Asam Klorida (HCl) di dalam lambung adalah...",
                options: [
                    "A. Mengemulsikan lemak dan menetralkan racun",
                    "B. Membunuh kuman penyakit dan mengaktifkan pepsinogen menjadi pepsin",
                    "C. Memecah protein menjadi asam amino",
                    "D. Mengendapkan kasein susu"
                ],
                ans: 1,
                exp: "HCl menciptakan kondisi asam di lambung yang berfungsi membunuh bakteri jahat pada makanan serta mengaktifkan pepsinogen menjadi enzim pepsin."
            },
            {
                q: "7. Enzim di dalam lambung yang berfungsi untuk mengendapkan protein susu (kasein) adalah...",
                options: ["A. Pepsin", "B. Renin", "C. Tripsin", "D. Lipase"],
                ans: 1,
                exp: "Renin berfungsi khusus menggumpalkan/mengendapkan kasein yang terkandung di dalam susu."
            },
            {
                q: "8. Cairan empedu yang berfungsi mengemulsikan lemak diproduksi oleh organ...",
                options: ["A. Pankreas", "B. Hati (Hepar)", "C. Lambung", "D. Usus Besar"],
                ans: 1,
                exp: "Hati memproduksi cairan empedu yang disimpan di kantung empedu untuk ditumpahkan ke usus dua belas jari guna mengemulsikan lemak."
            },
            {
                q: "9. Organ pankreas menghasilkan tiga jenis enzim pencernaan utama, yaitu...",
                options: [
                    "A. Pepsin, Renin, dan HCl",
                    "B. Amilase, Tripsin, dan Lipase",
                    "C. Ptialin, Pepsin, dan Lipase",
                    "D. Renin, Tripsin, dan Amilase"
                ],
                ans: 1,
                exp: "Getah pankreas mengandung Amilase (memecah amilum), Tripsin (memecah protein/pepton), dan Lipase (memecah lemak)."
            },
            {
                q: "10. Bagian usus halus yang menjadi tempat utama penyerapan (absorbsi) sari-sari makanan ke dalam pembuluh darah adalah...",
                options: ["A. Duodenum", "B. Jejunum", "C. Ileum", "D. Apendiks"],
                ans: 2,
                exp: "Ileum (usus penyerapan) memiliki banyak lipatan jonjot usus (villi) yang memperluas permukaan untuk menyerap sari-sari makanan."
            },
            {
                q: "11. Kekurangan vitamin C dalam jangka panjang dapat menyebabkan penyakit...",
                options: ["A. Beri-beri", "B. Rakitis", "C. Skorbut (Sariawan/Gusi Berdarah)", "D. Rabun Dekat"],
                ans: 2,
                exp: "Defisiensi vitamin C memicu penyakit skorbut dengan gejala gusi berdarah, sariawan, dan luka yang lambat sembuh."
            },
            {
                q: "12. Kekurangan mineral Kalsium (Ca) dan Vitamin D pada masa pertumbuhan dapat mengakibatkan penyakit tulang yaitu...",
                options: ["A. Anemia", "B. Rakitis", "C. Goiter (Gondok)", "D. Marasmus"],
                ans: 1,
                exp: "Kalsium dan Vitamin D sangat dibutuhkan dalam pembentukan tulang. Kekurangannya pada anak-anak menyebabkan tulang membengkok (rakitis)."
            },
            {
                q: "13. Bahan makanan yang ditetesi reagen Lugol/Iodin berubah warna menjadi biru kehitaman. Hal ini menunjukkan bahan tersebut mengandung...",
                options: ["A. Glukosa", "B. Protein", "C. Amilum (Karbohidrat)", "D. Lemak"],
                ans: 2,
                exp: "Uji amilum menggunakan Lugol/Iodin ditandai dengan perubahan warna larutan menjadi biru tua / biru kehitaman."
            },
            {
                q: "14. Bahan makanan yang diuji dengan reagen Biuret berubah warna menjadi ungu. Hal ini menandakan makanan tersebut mengandung...",
                options: ["A. Protein", "B. Glukosa", "C. Lemak", "D. Vitamin C"],
                ans: 0,
                exp: "Reagen Biuret digunakan untuk menguji keberadaan ikatan peptida pada protein yang ditandai warna ungu."
            },
            {
                q: "15. Uji bahan makanan menggunakan reagen Benedict yang dipanaskan menghasilkan endapan berwarna merah bata. Hal ini membuktikan adanya...",
                options: ["A. Amilum", "B. Glukosa / Gula Pereduksi", "C. Lemak", "D. Protein"],
                ans: 1,
                exp: "Benedict digunakan untuk menguji gula sederhana (glukosa). Hasil positif ditandai warna hijau, kuning, hingga endapan merah bata."
            },
            {
                q: "16. Proses pencernaan mekanis pada manusia terutama terjadi di dua tempat, yaitu...",
                options: ["A. Kerongkongan dan Lambung", "B. Mulut dan Lambung", "C. Usus Halus dan Usus Besar", "D. Mulut dan Usus Halus"],
                ans: 1,
                exp: "Pencernaan mekanis terjadi di mulut (kunyahan gigi & lidah) serta di lambung (remasan otot dinding lambung)."
            },
            {
                q: "17. Gigi yang berfungsi untuk memotong makanan adalah...",
                options: ["A. Gigi Seri (Insisivus)", "B. Gigi Taring (Kaninus)", "C. Gigi Geraham Depan (Premolar)", "D. Gigi Geraham Belakang (Molar)"],
                ans: 0,
                exp: "Gigi seri berfungsi memotong makanan, gigi taring merobek/mencabik makanan, dan gigi geraham mengunyah/menglumat makanan."
            },
            {
                q: "18. Struktur berupa katup penutup pada pangkal tenggorokan yang mencegah makanan masuk ke saluran pernapasan saat menelan adalah...",
                options: ["A. Esofagus", "B. Epiglotis", "C. Trakea", "D. Faring"],
                ans: 1,
                exp: "Epiglotis akan menutup saluran pernapasan (trakea) secara otomatis saat menelan makanan agar bolus masuk ke esofagus."
            },
            {
                q: "19. Dinding lambung dilapisi oleh lapisan mukus (lendir) tebal yang berfungsi untuk...",
                options: [
                    "A. Membantu penyerapan vitamin K",
                    "B. Melindungi dinding lambung dari pengikisan asam klorida (HCl)",
                    "C. Menghancurkan serat makanan",
                    "D. Mengendapkan protein susu"
                ],
                ans: 1,
                exp: "Mukus melindungi jaringan epitel dinding lambung agar tidak rusak atau tererosi oleh keasaman tinggi HCl."
            },
            {
                q: "20. Usus halus terdiri dari tiga bagian dengan urutan yang benar dari awal hingga akhir adalah...",
                options: [
                    "A. Duodenum - Ileum - Jejunum",
                    "B. Duodenum - Jejunum - Ileum",
                    "C. Jejunum - Duodenum - Ileum",
                    "D. Ileum - Jejunum - Duodenum"
                ],
                ans: 1,
                exp: "Urutan usus halus: Usus 12 Jari (Duodenum) -> Usus Kosong (Jejunum) -> Usus Penyerapan (Ileum)."
            },
            {
                q: "21. Peran bakteri Escherichia coli (E. coli) di dalam usus besar adalah...",
                options: [
                    "A. Membusukkan sisa makanan dan membentuk vitamin K serta B12",
                    "B. Menghasilkan enzim lipase untuk cerna lemak",
                    "C. Menyerap glukosa dan protein",
                    "D. Menetralkan zat racun dari hati"
                ],
                ans: 0,
                exp: "Bakteri simbiosis E. coli membantu proses pembusukan sisa makanan menjadi feses dan menghasilkan vitamin K serta B12."
            },
            {
                q: "22. Gangguan pencernaan yang ditandai dengan feses menjadi sangat keras karena penyerapan air di usus besar berlebihan disebut...",
                options: ["A. Diare", "B. Sembelit (Konstipasi)", "C. Gastritis", "D. Ulkus"],
                ans: 1,
                exp: "Konstipasi/sembelit terjadi akibat usus besar menyerap terlalu banyak air dari sisa makanan sehingga feses menjadi keras dan sulit dikeluarkan."
            },
            {
                q: "23. Penyakit diare terjadi apabila saluran usus mengalami infeksi bakteri yang mengakibatkan...",
                options: [
                    "A. Lambung memproduksi terlalu banyak HCl",
                    "B. Penyerapan air pada usus besar sangat berkurang sehingga feses cair",
                    "C. Usus halus memproduksi enzim berlebih",
                    "D. Kantung empedu tersumbat"
                ],
                ans: 1,
                exp: "Infeksi diare memicu percepatan peristaltik usus besar sehingga air tidak sempat diserap dengan baik, menghasilkan feses yang cair."
            },
            {
                q: "24. Penyakit peradangan pada umbai cacing (usus buntu) akibat infeksi atau penyumbatan sisa makanan disebut...",
                options: ["A. Apendisitis", "B. Parotitis", "C. Gastritis", "D. Hepatitis"],
                ans: 0,
                exp: "Apendisitis adalah peradangan pada apendiks (umbai cacing/usus buntu)."
            },
            {
                q: "25. Pembengkakan pada pembuluh darah vena di sekitar daerah anus dinamakan...",
                options: ["A. Varises", "B. Hemoroid (Ambeien)", "C. Gastritis", "D. Kolitis"],
                ans: 1,
                exp: "Hemoroid atau ambeien adalah pelebaran/pembengkakan pembuluh darah vena pada area rektum dan anus."
            },
            {
                q: "26. Zat makanan yang menghasilkan energi tertinggi dibanding zat lain, yaitu sebesar ±9,3 kalori per gram adalah...",
                options: ["A. Karbohidrat", "B. Protein", "C. Lemak", "D. Air"],
                ans: 2,
                exp: "Lemak merupakan sumber energi cadangan terkonsentrasi yang menghasilkan ±9,3 kalori per gram."
            },
            {
                q: "27. Karbohidrat disimpan di dalam hati dan otot manusia dalam bentuk...",
                options: ["A. Glukosa", "B. Glikogen", "C. Maltosa", "D. Sukrosa"],
                ans: 1,
                exp: "Kelebihan glukosa darah akan diubah oleh hormon insulin menjadi glikogen (gula otot/hati) sebagai cadangan energi."
            },
            {
                q: "28. Protein nabati dapat diperoleh dari bahan makanan berikut, yaitu...",
                options: ["A. Daging sapi dan telur", "B. Tahu, tempe, dan kacang kedelai", "C. Ikan dan susu", "D. Keju dan mentega"],
                ans: 1,
                exp: "Protein nabati berasal dari tumbuh-tumbuhan, seperti kacang-kacangan, tahu, dan tempe."
            },
            {
                q: "29. Mineral yang dibutuhkan tubuh untuk pembentukan hemoglobin dalam sel darah merah adalah...",
                options: ["A. Kalsium (Ca)", "B. Zat Besi (Fe)", "C. Natrium (Na)", "D. Yodium (I)"],
                ans: 1,
                exp: "Zat Besi (Fe) merupakan komponen penyusun utama sel darah merah (hemoglobin) untuk mengikat oksigen."
            },
            {
                q: "30. Penyakit gondok disebabkan karena tubuh kekurangan mineral...",
                options: ["A. Yodium", "B. Fluor", "C. Kalsium", "D. Kalium"],
                ans: 0,
                exp: "Defisiensi yodium menghambat sintesis hormon tiroksin sehingga kelenjar tiroid membesar (gondok)."
            },
            {
                q: "31. Enzim tripsin yang diproduksi oleh pankreas berfungsi memecah pepton menjadi...",
                options: ["A. Asam lemak", "B. Asam amino", "C. Glukosa", "D. Gliserol"],
                ans: 1,
                exp: "Tripsin melanjutkan pencernaan protein dengan memecah pepton menjadi molekul paling sederhana yaitu asam amino."
            },
            {
                q: "32. Saluran pencernaan yang menghubungkan rongga mulut dengan lambung adalah...",
                options: ["A. Tenggorokan", "B. Kerongkongan (Esofagus)", "C. Usus Halus", "D. Bronkus"],
                ans: 1,
                exp: "Tenggorokan adalah saluran pernapasan, sedangkan kerongkongan (esofagus) adalah saluran pencernaan menuju lambung."
            },
            {
                q: "33. Bagian gigi yang melapisi mahkota gigi dan merupakan struktur paling keras pada tubuh manusia adalah...",
                options: ["A. Email", "B. Dentin (Tulang Gigi)", "C. Pulpa", "D. Semen gigi"],
                ans: 0,
                exp: "Email gigi adalah lapisan terluar mahkota gigi yang sangat keras pelindung dentin dan pulpa."
            },
            {
                q: "34. Kelenjar ludah (saliva) menghasilkan enzim ptialin dan juga berfungsi untuk...",
                options: [
                    "A. Mengemulsikan lemak makanan",
                    "B. Membasahi dan melumasi makanan agar mudah ditelan",
                    "C. Menyerap air dari sari makanan",
                    "D. Mengendapkan protein susu"
                ],
                ans: 1,
                exp: "Air liur mengandung mukus dan air yang melunakkan serta melumasi makanan menjadi bolus yang licin."
            },
            {
                q: "35. Pencernaan makanan pada usus dua belas jari (duodenum) dibantu oleh getah pencernaan dari organ...",
                options: ["A. Lambung dan Hati", "B. Hati dan Pankreas", "C. Ginjal dan Pankreas", "D. Usus Besar dan Hati"],
                ans: 1,
                exp: "Duodenum menerima muara saluran dari Hati (cairan empedu) dan Pankreas (enzim amilase, tripsin, lipase)."
            },
            {
                q: "36. Penyakit batu empedu disebabkan oleh pembekuan atau pengkristalan zat...",
                options: ["A. Kalsium dan Protein", "B. Kolesterol dan Garam Empedu", "C. Asam Urat", "D. Glukosa"],
                ans: 1,
                exp: "Batu empedu terbentuk ketika kolesterol atau bilirubin di dalam cairan empedu mengendap dan mengkristal."
            },
            {
                q: "37. Vitamin yang berperan penting dalam proses pembekuan darah saat terjadi luka adalah...",
                options: ["A. Vitamin A", "B. Vitamin C", "C. Vitamin E", "D. Vitamin K"],
                ans: 3,
                exp: "Vitamin K diperlukan oleh hati untuk memproduksi protrombin yang penting bagi pembekuan darah."
            },
            {
                q: "38. Bagian sistem pencernaan manusia yang tidak mengalami proses pencernaan kimiawi sama sekali adalah...",
                options: ["A. Mulut dan Lambung", "B. Kerongkongan dan Usus Besar", "C. Lambung dan Usus Halus", "D. Mulut dan Usus Halus"],
                ans: 1,
                exp: "Kerongkongan hanya melakukan gerak mekanis (peristaltik) dan usus besar hanya melakukan penyerapan air & pembusukan."
            },
            {
                q: "39. Radang kelenjar ludah di dekat telinga (parotis) akibat infeksi virus dinamakan penyakit...",
                options: ["A. Parotitis (Gondongan)", "B. Ulkus", "C. Diare", "D. Karies Gigi"],
                ans: 0,
                exp: "Parotitis (gondongan) adalah pembengkakan kelenjar parotis akibat infeksi Paramyxovirus."
            },
            {
                q: "40. Penyakit pembusukan jaringan keras gigi akibat asam hasil aktivitas bakteri dinamakan...",
                options: ["A. Gastritis", "B. Karies Gigi (Gigi Berlubang)", "C. Apendisitis", "D. Xerostomia"],
                ans: 1,
                exp: "Karies gigi terjadi ketika asam hasil fermentasi bakteri merusak lapisan email dan dentin gigi."
            }
        ];

        let currentQ = 0;
        let userAnswers = new Array(questions.length).fill(null);

        function renderQuestion() {
            const q = questions[currentQ];
            document.getElementById(\'q-count\').innerText = `Soal ${currentQ + 1} dari ${questions.length}`;
            document.getElementById(\'question-text\').innerText = q.q;
            
            // Calculate answered progress
            const answeredNum = userAnswers.filter(a => a !== null).length;
            document.getElementById(\'answered-count\').innerText = `Terjawab: ${answeredNum} / ${questions.length}`;

            // Progress Bar
            const fill = ((currentQ + 1) / questions.length) * 100;
            document.getElementById(\'progress-fill\').style.width = fill + \'%\';

            // Options Handler
            const optsContainer = document.getElementById(\'options-container\');
            optsContainer.innerHTML = \'\';

            const chosenAns = userAnswers[currentQ];

            q.options.forEach((opt, idx) => {
                const btn = document.createElement(\'button\');
                btn.className = \'option-btn\';
                btn.innerText = opt;

                // Menandai opsi yang dipilih pengguna tanpa membocorkan kunci
                if (chosenAns !== null && idx === chosenAns) {
                    btn.classList.add(\'selected\');
                }

                btn.onclick = () => selectOption(idx);
                optsContainer.appendChild(btn);
            });

            document.getElementById(\'prev-btn\').disabled = currentQ === 0;
            
            if (currentQ === questions.length - 1) {
                document.getElementById(\'next-btn\').innerText = \'Lihat Hasil 🏆\';
            } else {
                document.getElementById(\'next-btn\').innerText = \'Selanjutnya →\';
            }
        }

        function selectOption(idx) {
            userAnswers[currentQ] = idx;
            renderQuestion();
        }

        function nextQuestion() {
            if (currentQ < questions.length - 1) {
                currentQ++;
                renderQuestion();
            } else {
                showResult();
            }
        }

        function prevQuestion() {
            if (currentQ > 0) {
                currentQ--;
                renderQuestion();
            }
        }

        function showResult() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const finalScore = Math.round((correctCount / questions.length) * 100);

            document.getElementById(\'quiz-card\').style.display = \'none\';
            document.getElementById(\'result-card\').style.display = \'block\';
            document.getElementById(\'final-score\').innerText = finalScore;

            let feedback = "";
            if (finalScore === 100) feedback = "Sempurna! Kamu menguasai seluruh materi Makanan dan Sistem Pencernaan!";
            else if (finalScore >= 80) feedback = "Sangat Baik! Pemahamanmu mengenai nutrisi dan pencernaan sudah sangat kuat.";
            else if (finalScore >= 60) feedback = "Cukup Baik. Pelajari kembali materi yang salah pada bagian pembahasan di bawah.";
            else feedback = "Jangan berkecil hati! Pelajari pembahasan di bawah ini dan coba lagi ya.";

            document.getElementById(\'score-feedback\').innerText = feedback;

            // Generate Review Section
            const reviewContainer = document.getElementById(\'review-container\');
            reviewContainer.innerHTML = \'\';

            questions.forEach((q, idx) => {
                const userChoice = userAnswers[idx];
                const isCorrect = userChoice === q.ans;

                const card = document.createElement(\'div\');
                card.className = `review-card ${isCorrect ? \'is-correct\' : \'is-wrong\'}`;

                const userText = userChoice !== null ? q.options[userChoice] : "Tidak Dijawab";
                const correctText = q.options[q.ans];

                card.innerHTML = `
                    <div class="review-q">${q.q}</div>
                    <div class="review-ans">
                        <strong>Jawaban Anda:</strong> 
                        <span class="${isCorrect ? \'text-correct\' : \'text-wrong\'}">${userText}</span>
                        ${isCorrect ? \' (BENAR)\' : \' (SALAH)\'}
                    </div>
                    ${!isCorrect ? `<div class="review-ans"><strong>Kunci Jawaban:</strong> <span class="text-correct">${correctText}</span></div>` : \'\'}
                    <div class="explanation-box">💡 <strong>Pembahasan:</strong> ${q.exp}</div>
                `;

                reviewContainer.appendChild(card);
            });
        }

        function restartQuiz() {
            currentQ = 0;
            userAnswers = new Array(questions.length).fill(null);
            document.getElementById(\'quiz-card\').style.display = \'block\';
            document.getElementById(\'result-card\').style.display = \'none\';
            renderQuestion();
        }

        // Initialize
        renderQuestion();
    </script>
</body>
</html>',
                'created_at' => '2026-08-22 04:30:39',
                'updated_at' => '2026-08-23 14:34:12',
                'mapel' => 'IPA',
                'kategori_modul' => 'latihan',
            ),
            7 => 
            array (
                'id' => 14,
                'user_id' => 2,
                'kelas_id' => 3,
                'judul' => 'Latihan TO IPA : Hakikat Sains dan Metode Ilmiah',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tryout 40 Soal: Hakikat Ilmu Sains dan Metode Ilmiah</title>
    <style>
        :root {
            --primary: #0284c7;
            --primary-dark: #0369a1;
            --bg-base: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: \'Segoe UI\', system-ui, -apple-system, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            line-height: 1.6;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, #0369a1 0%, #0284c7 100%);
            color: white;
            padding: 35px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 1.8rem;
            margin-bottom: 8px;
            font-weight: 800;
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
        }

        .container {
            max-width: 850px;
            margin: 30px auto;
            padding: 0 15px;
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .quiz-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .question-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #0f172a;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option-btn {
            text-align: left;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option-btn:hover {
            border-color: #93c5fd;
            background: #f0f9ff;
        }

        .option-btn.selected {
            border-color: var(--primary);
            background: #e0f2fe;
            color: var(--primary-dark);
            font-weight: 600;
        }

        .quiz-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 24px;
        }

        .btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .score-box {
            text-align: center;
            padding: 30px 20px;
        }

        .score-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 auto 20px;
        }

        /* Review Section Styles */
        .review-section {
            margin-top: 30px;
            text-align: left;
        }

        .review-card {
            background: #f8fafc;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .review-card.is-correct {
            border-left: 5px solid var(--success);
        }

        .review-card.is-wrong {
            border-left: 5px solid var(--danger);
        }

        .review-q {
            font-weight: 600;
            margin-bottom: 8px;
            color: #0f172a;
        }

        .review-ans {
            font-size: 0.95rem;
            margin-bottom: 4px;
        }

        .text-correct { color: var(--success); font-weight: 600; }
        .text-wrong { color: var(--danger); font-weight: 600; }

        .explanation-box {
            margin-top: 8px;
            padding: 10px 14px;
            background: #ffffff;
            border-radius: 6px;
            font-size: 0.9rem;
            color: #334155;
            border: 1px dashed #cbd5e1;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Tryout Hakikat Ilmu Sains dan Metode Ilmiah</h1>
        <p>40 Soal Pilihan Ganda • IPA Kelas 7 • Pembahasan di Akhir Sesi</p>
    </header>

    <div class="container">
        <div class="card" id="quiz-card">
            <div class="quiz-progress">
                <span id="q-count">Soal 1 dari 40</span>
                <span id="answered-count">Terjawab: 0 / 40</span>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" id="progress-fill"></div>
            </div>

            <div>
                <div class="question-title" id="question-text">Memuat soal...</div>
                <div class="options-list" id="options-container"></div>
            </div>

            <div class="quiz-nav">
                <button class="btn" id="prev-btn" onclick="prevQuestion()" disabled>← Sebelumnya</button>
                <button class="btn" id="next-btn" onclick="nextQuestion()">Selanjutnya →</button>
            </div>
        </div>

        <!-- HASIL & PEMBAHASAN -->
        <div class="card score-box" id="result-card" style="display: none;">
            <h2>🎉 Tryout Selesai!</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted);">Berikut adalah skor hasil ujian Anda:</p>
            <div class="score-circle" id="final-score">0</div>
            <p id="score-feedback" style="font-size: 1.1rem; margin-bottom: 25px;"></p>
            
            <button class="btn" onclick="restartQuiz()">🔄 Ulangi Tryout</button>

            <div class="review-section">
                <h3 style="margin-bottom: 16px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">📖 Pembahasan Lengkap 40 Soal</h3>
                <div id="review-container"></div>
            </div>
        </div>
    </div>

    <footer>
        Media Pembelajaran IPA • Hakikat Ilmu Sains dan Metode Ilmiah
    </footer>

    <script>
        const questions = [
            {
                q: "1. Cabang ilmu sains yang mempelajari tentang fenomena alam, energi, dan sifat-sifat materi tak hidup adalah...",
                options: ["A. Biologi", "B. Fisika", "C. Geologi", "D. Astronomi"],
                ans: 1,
                exp: "Fisika adalah cabang sains yang berfokus pada fenomena alam fisik, materi, energi, serta interaksinya."
            },
            {
                q: "2. Seorang ilmuwan yang mendalami tentang struktur lapisan bumi, batuan, dan fosil bekerja dalam cabang sains...",
                options: ["A. Ekologi", "B. Geologi", "C. Botani", "D. Kimia"],
                ans: 1,
                exp: "Geologi mempelajari bumi, pembentukannya, struktur batuan, serta fosil penyusun lapisan tanah."
            },
            {
                q: "3. Cabang ilmu biologi yang khusus mempelajari kehidupan mikroorganisme seperti bakteri dan virus adalah...",
                options: ["A. Zoologi", "B. Mikrobiologi", "C. Botani", "D. Entimologi"],
                ans: 1,
                exp: "Mikrobiologi fokus meneliti organisme mikroskopis seperti bakteri, virus, dan mikroba."
            },
            {
                q: "4. Alat laboratorium IPA yang berfungsi untuk mencampur dan memanaskan cairan dalam jumlah kecil adalah...",
                options: ["A. Gelas Ukur", "B. Tabung Reaksi", "C. Pipet Tetes", "D. Neraca Ohaus"],
                ans: 1,
                exp: "Tabung reaksi digunakan untuk mereaksikan, mengocok, atau memanaskan zat kimia dalam volume kecil."
            },
            {
                q: "5. Alat laboratorium yang berfungsi khusus untuk memindahkan cairan dalam volume sangat sedikit tetes demi tetes adalah...",
                options: ["A. Gelas Kimia", "B. Labu Erlenmeyer", "C. Pipet Tetes", "D. Corong Kaca"],
                ans: 2,
                exp: "Pipet tetes berfungsi mengambil dan memindahkan cairan dengan tingkat volume sangat kecil berupa tetesan."
            },
            {
                q: "6. Simbol bahaya pada bahan kimia berupa gambar \'api menyala\' menandakan bahwa bahan tersebut...",
                options: ["A. Mudah Meledak", "B. Mudah Terbakar (Flammable)", "C. Beracun", "D. Korosif"],
                ans: 1,
                exp: "Simbol api menunjukkan bahan mudah terbakar sehingga harus dijauhkan dari sumber percikan api atau panas."
            },
            {
                q: "7. Bahan kimia yang dapat merusak jaringan kulit manusia atau mengikis logam memiliki simbol bahaya...",
                options: ["A. Toxic", "B. Corrosive (Korosif)", "C. Flammable", "D. Explosive"],
                ans: 1,
                exp: "Simbol korosif (cairan menetes merusak tangan/logam) menandakan bahan asam/basa pekat yang mengikis jaringan."
            },
            {
                q: "8. Langkah awal dalam prosedur metode ilmiah yang dilakukan sebelum merumuskan masalah adalah...",
                options: ["A. Merancang Percobaan", "B. Observasi / Pengamatan", "C. Menarik Kesimpulan", "D. Membuat Hipotesis"],
                ans: 1,
                exp: "Observasi atau pengamatan adalah langkah paling awal untuk menemukan fenomena/gejala yang menarik untuk diteliti."
            },
            {
                q: "9. Jawaban sementara atau dugaan ilmiah terhadap rumusan masalah yang masih harus diuji kebenarannya dinamakan...",
                options: ["A. Teori", "B. Hipotesis", "C. Data", "D. Variabel"],
                ans: 1,
                exp: "Hipotesis adalah anggapan atau dugaan sementara yang didasarkan pada teori dan perlu dibuktikan lewat eksperimen."
            },
            {
                q: "10. Dalam suatu eksperimen, faktor atau variabel yang sengaja diubah-ubah oleh peneliti disebut...",
                options: ["A. Variabel Bebas", "B. Variabel Terikat", "C. Variabel Kontrol", "D. Variabel Pengganggu"],
                ans: 0,
                exp: "Variabel bebas (independen) adalah variabel yang sengaja dimanipulasi atau dibedakan perlakuan untuk dilihat efeknya."
            },
            {
                q: "11. Hasil pengukuran atau perubahan yang diamati sebagai akibat dari perubahan variabel bebas dinamakan...",
                options: ["A. Variabel Bebas", "B. Variabel Terikat", "C. Variabel Kontrol", "D. Variabel Tetap"],
                ans: 1,
                exp: "Variabel terikat (dependen) adalah variabel yang diukur, diamati, atau dicatat sebagai respon dari perlakuan variabel bebas."
            },
            {
                q: "12. Faktor-faktor yang dipertahankan sama selama penelitian agar percobaan berjalan secara adil dinamakan...",
                options: ["A. Variabel Bebas", "B. Variabel Terikat", "C. Variabel Kontrol", "D. Variabel Acak"],
                ans: 2,
                exp: "Variabel kontrol adalah semua faktor yang dibuat konstan/sama pada seluruh kelompok sampel agar hasil eksperimen valid."
            },
            {
                q: "13. Seorang siswa meneliti pengaruh jenis air (sumur, sungai, teh) terhadap pertumbuhan tinggi tanaman. Jenis air merupakan...",
                options: ["A. Variabel Terikat", "B. Variabel Bebas", "C. Variabel Kontrol", "D. Hipotesis"],
                ans: 1,
                exp: "Jenis air adalah perlakuan yang sengaja dibedakan (dimanipulasi), sehingga berkedudukan sebagai variabel bebas."
            },
            {
                q: "14. Pada percobaan di atas (Soal No. 13), tinggi tanaman jagung yang diukur setiap hari dinamakan...",
                options: ["A. Variabel Bebas", "B. Variabel Terikat", "C. Variabel Kontrol", "D. Rumusan Masalah"],
                ans: 1,
                exp: "Tinggi tanaman adalah hasil respon yang diukur dan dicatat, sehingga berkedudukan sebagai variabel terikat."
            },
            {
                q: "15. Pengukuran didefinisikan sebagai kegiatan...",
                options: [
                    "A. Menghitung jumlah benda tanpa alat",
                    "B. Membandingkan suatu besaran dengan besaran sejenis yang ditetapkan sebagai satuan",
                    "C. Mengira-ngira panjang benda dengan jengkal",
                    "D. Mengubah bentuk materi menjadi satuan baku"
                ],
                ans: 1,
                exp: "Pengukuran adalah membandingkan nilai besaran suatu objek dengan alat ukur baku yang dijadikan acuan satuan."
            },
            {
                q: "16. Besaran yang satuannya telah ditetapkan terlebih dahulu dan tidak diturunkan dari besaran lain disebut...",
                options: ["A. Besaran Turunan", "B. Besaran Pokok", "C. Besaran Vektor", "D. Besaran Skalar"],
                ans: 1,
                exp: "Besaran pokok adalah besaran utama yang satuannya didefinisikan secara internasional (SI) tanpa diturunkan."
            },
            {
                q: "17. Berikut ini yang seluruhnya merupakan contoh Besaran Pokok dalam Sistem Internasional (SI) adalah...",
                options: [
                    "A. Panjang, Massa, Waktu, Suhu",
                    "B. Luas, Volume, Massa, Kecepatan",
                    "C. Kecepatan, Gaya, Berat, Energi",
                    "D. Panjang, Volume, Waktu, Kuat Arus"
                ],
                ans: 0,
                exp: "7 Besaran Pokok SI: Panjang, Massa, Waktu, Suhu, Kuat Arus, Intensitas Cahaya, dan Jumlah Zat."
            },
            {
                q: "18. Satuan Internasional (SI) standar untuk besaran Waktu adalah...",
                options: ["A. Jam", "B. Menit", "C. Sekon (Detik)", "D. Hari"],
                ans: 2,
                exp: "Dalam standar SI, besaran waktu dinyatakan dalam sekon/detik (s)."
            },
            {
                q: "19. Satuan Internasional (SI) baku untuk besaran Suhu adalah...",
                options: ["A. Degree Celsius (°C)", "B. Kelvin (K)", "C. Fahrenheit (°F)", "D. Reamur (°R)"],
                ans: 1,
                exp: "Satuan SI standar untuk suhu adalah Kelvin (K), bukan Celsius."
            },
            {
                q: "20. Besaran yang diturunkan dari perpaduan dua atau lebih besaran pokok dinamakan...",
                options: ["A. Besaran Vektor", "B. Besaran Pokok", "C. Besaran Turunan", "D. Besaran Baku"],
                ans: 2,
                exp: "Besaran turunan dirumuskan dari penggabungan besaran-besaran pokok (contoh: Luas = Panjang x Lebar)."
            },
            {
                q: "21. Kelompok besaran berikut yang semuanya termasuk Besaran Turunan adalah...",
                options: [
                    "A. Massa, Panjang, Luas",
                    "B. Luas, Volume, Kecepatan, Gaya",
                    "C. Waktu, Suhu, Kuat Arus",
                    "D. Volume, Panjang, Kecepatan"
                ],
                ans: 1,
                exp: "Luas (m²), Volume (m³), Kecepatan (m/s), dan Gaya (N) adalah contoh besaran turunan."
            },
            {
                q: "22. Alat ukur yang paling tepat dan teliti untuk mengukur ketebalan selembar kertas atau kawat tipis adalah...",
                options: ["A. Mistar Plastik", "B. Meteran Pita", "C. Jangka Sorong", "D. Mikrometer Sekrup"],
                ans: 3,
                exp: "Mikrometer sekrup memiliki ketelitian hingga 0,01 mm sehingga sangat cocok mengukur benda sangat tipis."
            },
            {
                q: "23. Jangka sorong merupakan alat ukur panjang yang memiliki tingkat ketelitian sebesar...",
                options: ["A. 1 cm", "B. 1 mm", "C. 0,1 mm (0,01 cm)", "D. 0,01 mm"],
                ans: 2,
                exp: "Jangka sorong memiliki ketelitian umum 0,1 mm (atau 0,01 cm), lebih teliti dibanding mistar (1 mm)."
            },
            {
                q: "24. Mengukur massa benda berukuran sedang di laboratorium IPA biasanya menggunakan alat...",
                options: ["A. Neraca Ohaus / Timbangan Digital", "B. Dinamometer", "C. Barometer", "D. Higrometer"],
                ans: 0,
                exp: "Neraca Ohaus (lengan) atau neraca digital digunakan untuk mengukur massa benda di lab."
            },
            {
                q: "25. Pengukuran menggunakan anggota tubuh seperti jengkal, depa, atau langkah kaki menghasilkan nilai yang berbeda-beda. Satuan ini disebut...",
                options: ["A. Satuan Baku", "B. Satuan Tidak Baku", "C. Satuan Internasional", "D. Satuan SI"],
                ans: 1,
                exp: "Jengkal dan depa adalah satuan tidak baku karena ukurannya bervariasi tergantung fisik masing-masing orang."
            },
            {
                q: "26. Pengamatan yang dilakukan menggunakan pancaindra tanpa menghasilkan angka/data kuantitatif disebut pengamatan...",
                options: ["A. Kuantitatif", "B. Kualitatif", "C. Sistematis", "D. Terukur"],
                ans: 1,
                exp: "Pengamatan kualitatif menggambarkan ciri/sifat objek lewat indera (seperti warna, bau, rasa) tanpa perhitungan angka."
            },
            {
                q: "27. Contoh data pengamatan kuantitatif dari suatu percobaan adalah...",
                options: [
                    "A. Larutan berubah warna menjadi merah tua",
                    "B. Tercium bau menyengat seperti amonia",
                    "C. Suhu air naik sebesar 15 °C",
                    "D. Permukaan daun terasa kasar"
                ],
                ans: 2,
                exp: "Data kuantitatif dinyatakan dalam bentuk angka presisi hasil pengukuran (contoh: naik 15 °C)."
            },
            {
                q: "28. Pada pelaporan hasil percobaan, variabel bebas umumnya diletakkan pada sumbu grafik bagian...",
                options: ["A. Sumbu Miring", "B. Sumbu Horisontal / Mendatar (Sumbu X)", "C. Sumbu Vertikal / Tegak (Sumbu Y)", "D. Sumbu Z"],
                ans: 1,
                exp: "Standar grafik penelitian menempatkan variabel bebas pada sumbu X (horisontal) dan variabel terikat pada sumbu Y (vertikal)."
            },
            {
                q: "29. Bagian laporan penelitian yang berisi pernyataan ringkas yang menjawab rumusan masalah berdasarkan hasil analisis dinamakan...",
                options: ["A. Hipotesis", "B. Prosedur Kerja", "C. Pembahasan", "D. Kesimpulan"],
                ans: 3,
                exp: "Kesimpulan adalah ikhtisar ringkas yang membuktikan apakah hipotesis diterima atau ditolak berdasar data."
            },
            {
                q: "30. Sikap ilmiah yang wajib dimiliki seorang peneliti saat hasil percobaannya tidak sesuai dengan hipotesis adalah...",
                options: [
                    "A. Mengubah data percobaan agar sesuai hipotesis",
                    "B. Jujur melaporkan data apa adanya dan mengevaluasi penyebabnya",
                    "C. Membuang data dan menghentikan penelitian",
                    "D. Menyalahkan alat laboratorium"
                ],
                ans: 1,
                exp: "Jujur dan obyektif adalah sikap ilmiah utama. Data harus dilaporkan asli meski tidak sesuai hipotesis."
            },
            {
                q: "31. Besaran massa jenis benda merupakan turunan dari besaran pokok...",
                options: ["A. Massa dan Panjang (Volume)", "B. Massa dan Waktu", "C. Panjang dan Suhu", "D. Gaya dan Luas"],
                ans: 0,
                exp: "Massa jenis (ρ = m/V) dirumuskan dari massa (kg) dibagi volume/panjang pangkat tiga (m³)."
            },
            {
                q: "32. Volume batu yang bentuknya tidak beraturan dapat diukur secara presisi menggunakan alat...",
                options: ["A. Mikrometer Sekrup", "B. Gelas Ukur berisi air", "C. Mistar Ukur", "D. Jangka Sorong"],
                ans: 1,
                exp: "Benda tak beraturan diukur volumenya lewat metode celup/perpindahan volume air di dalam gelas ukur."
            },
            {
                q: "33. Nilai 2,5 kilometer (km) jika dikonversikan ke dalam Satuan Internasional (Meter) bernilai...",
                options: ["A. 25 m", "B. 250 m", "C. 2.500 m", "D. 25.000 m"],
                ans: 2,
                exp: "1 km = 1.000 m, maka 2,5 km x 1.000 = 2.500 meter."
            },
            {
                q: "34. Massa benda sebesar 500 gram jika dikonversikan ke dalam satuan SI (Kilogram) bernilai...",
                options: ["A. 5 kg", "B. 0,5 kg", "C. 0,05 kg", "D. 50 kg"],
                ans: 1,
                exp: "1 kg = 1.000 gram, sehingga 500 gram / 1.000 = 0,5 kg."
            },
            {
                q: "35. Cabang sains yang meneliti tentang reaksi kimia dalam tubuh makhluk hidup dinamakan...",
                options: ["A. Geofisika", "B. Biokimia", "C. Astrofisika", "D. Ekologi"],
                ans: 1,
                exp: "Biokimia gabungan antara Biologi dan Kimia yang mempelajari proses-proses kimia di dalam sel makhluk hidup."
            },
            {
                q: "36. Jika di laboratorium terjadi tumpahan bahan kimia asam mengenai kulit, tindakan pertama yang benar adalah...",
                options: [
                    "A. Membiarkannya kering sendiri",
                    "B. Membilas kulit dengan air mengalir dalam jumlah banyak",
                    "C. Menggosok dengan kain kering",
                    "D. Memoles minyak goreng"
                ],
                ans: 1,
                exp: "Pertolongan pertama tumpahan kimia korosif adalah segera membilas area terinfeksi dengan air bersih mengalir."
            },
            {
                q: "37. Benda pemanas di laboratorium yang menggunakan bahan bakar spiritus dinamakan...",
                options: ["A. Pembakar Spiritus (Bunsen)", "B. Kaki Tiga", "C. Kawat Kasa", "D. Erlenmeyer"],
                ans: 0,
                exp: "Pembakar spiritus/bunsen digunakan sebagai sumber kalor utama untuk memanaskan larutan di laboratorium."
            },
            {
                q: "38. Fungsi kawat kasa yang dilapisi asbes pada saat memanaskan gelas kimia di atas kaki tiga adalah...",
                options: [
                    "A. Mempercepat api padam", "B. Menyebarkan panas api agar merata dan mencegah gelas pecah",
                    "C. Mencegah asap keluar", "D. Memperbesar nyala api"
                ],
                ans: 1,
                exp: "Kawat kasa membagi/meratakan distribusi panas dari api bunsen agar tidak langsung menumpuk pada satu titik gelas."
            },
            {
                q: "39. Urutan penulisan laporan penelitian ilmiah secara kronologis yang benar adalah...",
                options: [
                    "A. Judul - Tujuan - Hipotesis - Alat Bahan - Prosedur - Data - Kesimpulan",
                    "B. Kesimpulan - Judul - Hipotesis - Data - Prosedur",
                    "C. Hipotesis - Judul - Prosedur - Data - Kesimpulan",
                    "D. Alat Bahan - Judul - Kesimpulan - Data"
                ],
                ans: 0,
                exp: "Sistematika standar: Judul -> Tujuan -> Hipotesis -> Alat/Bahan -> Prosedur -> Data/Pembahasan -> Kesimpulan."
            },
            {
                q: "40. Mengapa ilmuwan perlu mempublikasikan laporan hasil penelitiannya?",
                options: [
                    "A. Agar terkenal di media sosial",
                    "B. Supaya hasil penelitian dapat diuji ulang dan bermanfaat bagi perkembangan sains",
                    "C. Hanya untuk memenuhi tugas sekolah",
                    "D. Agar ilmuwan lain tidak bisa meneliti topik sama"
                ],
                ans: 1,
                exp: "Publikasi memungkinkan hasil percobaan diverifikasi, diuji ulang oleh ilmuwan lain, dan dimanfaatkan luas."
            }
        ];

        let currentQ = 0;
        let userAnswers = new Array(questions.length).fill(null);

        function renderQuestion() {
            const q = questions[currentQ];
            document.getElementById(\'q-count\').innerText = `Soal ${currentQ + 1} dari ${questions.length}`;
            document.getElementById(\'question-text\').innerText = q.q;
            
            // Calculate answered progress
            const answeredNum = userAnswers.filter(a => a !== null).length;
            document.getElementById(\'answered-count\').innerText = `Terjawab: ${answeredNum} / ${questions.length}`;

            // Progress Bar
            const fill = ((currentQ + 1) / questions.length) * 100;
            document.getElementById(\'progress-fill\').style.width = fill + \'%\';

            // Options Handler
            const optsContainer = document.getElementById(\'options-container\');
            optsContainer.innerHTML = \'\';

            const chosenAns = userAnswers[currentQ];

            q.options.forEach((opt, idx) => {
                const btn = document.createElement(\'button\');
                btn.className = \'option-btn\';
                btn.innerText = opt;

                // Menandai opsi yang dipilih pengguna tanpa membocorkan kunci
                if (chosenAns !== null && idx === chosenAns) {
                    btn.classList.add(\'selected\');
                }

                btn.onclick = () => selectOption(idx);
                optsContainer.appendChild(btn);
            });

            document.getElementById(\'prev-btn\').disabled = currentQ === 0;
            
            if (currentQ === questions.length - 1) {
                document.getElementById(\'next-btn\').innerText = \'Lihat Hasil 🏆\';
            } else {
                document.getElementById(\'next-btn\').innerText = \'Selanjutnya →\';
            }
        }

        function selectOption(idx) {
            userAnswers[currentQ] = idx;
            renderQuestion();
        }

        function nextQuestion() {
            if (currentQ < questions.length - 1) {
                currentQ++;
                renderQuestion();
            } else {
                showResult();
            }
        }

        function prevQuestion() {
            if (currentQ > 0) {
                currentQ--;
                renderQuestion();
            }
        }

        function showResult() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const finalScore = Math.round((correctCount / questions.length) * 100);

            document.getElementById(\'quiz-card\').style.display = \'none\';
            document.getElementById(\'result-card\').style.display = \'block\';
            document.getElementById(\'final-score\').innerText = finalScore;

            let feedback = "";
            if (finalScore === 100) feedback = "Sempurna! Kamu menguasai materi Hakikat Sains & Metode Ilmiah dengan sangat luar biasa!";
            else if (finalScore >= 80) feedback = "Sangat Baik! Pemahamanmu mengenai sains dan metode ilmiah sudah sangat kuat.";
            else if (finalScore >= 60) feedback = "Cukup Baik. Pelajari lagi bagian variabel percobaan dan pengukuran di bawah ini.";
            else feedback = "Jangan berkecil hati! Pelajari pembahasan di bawah ini dan coba lagi ya.";

            document.getElementById(\'score-feedback\').innerText = feedback;

            // Generate Review Section
            const reviewContainer = document.getElementById(\'review-container\');
            reviewContainer.innerHTML = \'\';

            questions.forEach((q, idx) => {
                const userChoice = userAnswers[idx];
                const isCorrect = userChoice === q.ans;

                const card = document.createElement(\'div\');
                card.className = `review-card ${isCorrect ? \'is-correct\' : \'is-wrong\'}`;

                const userText = userChoice !== null ? q.options[userChoice] : "Tidak Dijawab";
                const correctText = q.options[q.ans];

                card.innerHTML = `
                    <div class="review-q">${q.q}</div>
                    <div class="review-ans">
                        <strong>Jawaban Anda:</strong> 
                        <span class="${isCorrect ? \'text-correct\' : \'text-wrong\'}">${userText}</span>
                        ${isCorrect ? \' (BENAR)\' : \' (SALAH)\'}
                    </div>
                    ${!isCorrect ? `<div class="review-ans"><strong>Kunci Jawaban:</strong> <span class="text-correct">${correctText}</span></div>` : \'\'}
                    <div class="explanation-box">💡 <strong>Pembahasan:</strong> ${q.exp}</div>
                `;

                reviewContainer.appendChild(card);
            });
        }

        function restartQuiz() {
            currentQ = 0;
            userAnswers = new Array(questions.length).fill(null);
            document.getElementById(\'quiz-card\').style.display = \'block\';
            document.getElementById(\'result-card\').style.display = \'none\';
            renderQuestion();
        }

        // Initialize
        renderQuestion();
    </script>
</body>
</html>',
                'created_at' => '2026-08-22 09:04:14',
                'updated_at' => '2026-08-23 14:33:59',
                'mapel' => 'IPA',
                'kategori_modul' => 'latihan',
            ),
            8 => 
            array (
                'id' => 15,
                'user_id' => 2,
                'kelas_id' => 2,
                'judul' => 'Bentuk Akar',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!doctype html>
<html lang="id">
 <head><script>window["__codeletBootstrap__"]=JSON.parse(\'{"A":"A","B":"20260807-05-4dc3575","C":{"Abril Fatface":"YACgEZbkUVE,0","Alfa Slab One":"YACgEYS9sJU,0","Anton":"YACgEcYqQ-A,0","Archivo":"YAHO2-t-jNE,0","Arial":"YAGyDvJ_4Ts,0","Bebas Neue":"YACgESME5ew,0","Bricolage Grotesque":"YAFyMcdwzpc,0","Canva Sans":"YAFLd8sKbwc,2","Caveat":"YALBs2ploWQ,0","Comic Sans MS":"YAHO2VMiyZo,0","Cormorant Garamond":"YAFdJhX-538,0","Courier New":"YAGzXiGs0_8,0","DM Sans":"YAD1aU3sLnI,0","DM Serif Display":"YAD1aYG82rc,0","Forum":"YACgEcnnqB4,0","Fraunces":"YAEul-FRQw4,0","Georgia":"YAGzXkO0pEM,0","Helvetica Neue":"YAFcf6CtJfI,0","Impact":"YAFcfnjI7Vk,0","Inter":"YAFdJvSyp_k,3","Iowan Old Style":"YAGNIFa8j9o,0","Jacques Francois":"YAHO2a5g66Q,0","JetBrains Mono":"YAFdJksXcAk,0","Libre Baskerville":"YACgEUFdPdA,0","Manrope":"YAHO2b2feC4,0","Merriweather":"YACgEXvHxxs,0","Montserrat":"YADLjI9qxTA,0","Nunito":"YACgEX8C5Gg,0","Oleo Script":"YACgEQQ14jI,0","Phantom Sans":"YAHO2E8Pb88,0","Playfair Display":"YACgEYmuCJE,0","Poppins":"YAFdJjbTu24,1","Press Start 2P":"YAFyGr-8pmQ,0","Quicksand":"YADWjpfPmdk,0","Raleway":"YACgEVg3xZg,0","Segoe UI":"YAHNdRD1Klw,0","Source Sans 3":"YAG4lO1Mj10,0","Spectral":"YAHO2rVUHIM,0","Times New Roman":"YAGzXW3gftg,0","Times":"YAGzXW3gftg,0","Ubuntu":"YACgERDU--Q,0","Work Sans":"YAGXhLOKv44,0","Yellowtail":"YACgEYG4kG4,0","ui-monospace":"YADlN8CFZ8Q,0","ui-sans-serif":"YACkoN-xg4g,0"}}\');</script><script src="/_sdk/7949ff62d67710d5.telemetry_sdk.js" integrity="sha512-KIvXA82Di44YY/RH9/63A9MuTuavYgDFG8PfErJn7Wli4K0LAOk+coo/aPXk3+ZNL96nHh9VYD4PE+fLes+laQ=="></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembelajaran Bentuk Akar Kelas 9</title>
  <script src="https://cdn.tailwindcss.com/3.4.17"></script>
  <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&amp;family=Fraunces:opsz,wght@9..144,600;9..144,700&amp;display=swap" rel="stylesheet">
  <style>
    :root {
      --ink: #18333b;
      --muted: #5e7479;
      --paper: #f7f3e9;
      --cream: #fffdf7;
      --teal: #0e7775;
      --teal-dark: #075956;
      --aqua: #d8f1e7;
      --yellow: #f6c858;
      --coral: #e66852;
      --line: #d8ded6;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      min-height: calc(100 * min(var(--vh, 1vh), 1vh));
      font-family: "DM Sans", sans-serif;
      color: var(--ink);
      overflow: hidden;
      background: var(--paper);
    }

    .app-shell {
      width: 100%;
      min-height: calc(100 * min(var(--vh, 1vh), 1vh));
      padding: clamp(14px, 2.2vw, 30px);
      position: relative;
      overflow: hidden;
      background:
        radial-gradient(circle at 9% 12%, rgba(246, 200, 88, .35) 0 5%, transparent 5.2%),
        radial-gradient(circle at 93% 86%, rgba(14, 119, 117, .12) 0 13%, transparent 13.2%),
        var(--paper);
    }

    .grain {
      position: absolute;
      inset: 0;
      opacity: .15;
      pointer-events: none;
      background-image: radial-gradient(#164448 0.7px, transparent 0.7px);
      background-size: 7px 7px;
      mix-blend-mode: multiply;
    }

    .learning-frame {
      width: min(1120px, 100%);
      height: calc(100 * min(var(--vh, 1vh), 1vh) - clamp(28px, 4.4vw, 60px));
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      position: relative;
      z-index: 1;
      animation: rise-in .55s ease both;
    }

    .hero-line {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      margin-bottom: 16px;
      flex-shrink: 0;
    }

    .kicker {
      display: inline-flex;
      gap: 7px;
      align-items: center;
      color: var(--teal-dark);
      font-size: 11px;
      letter-spacing: .13em;
      text-transform: uppercase;
      font-weight: 700;
    }

    .kicker-dot {
      width: 9px;
      height: 9px;
      border-radius: 50%;
      background: var(--yellow);
      box-shadow: 0 0 0 4px rgba(246, 200, 88, .25);
    }

    h1, h2, h3, p { margin-top: 0; }

    .title {
      font-family: "Fraunces", serif;
      line-height: .95;
      letter-spacing: -.045em;
      margin: 5px 0 0;
      font-size: clamp(30px, 4vw, 48px);
    }

    .class-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 9px 12px;
      border: 1px solid rgba(14, 119, 117, .25);
      border-radius: 999px;
      background: rgba(255, 253, 247, .72);
      color: var(--teal-dark);
      font-size: 12px;
      font-weight: 700;
      white-space: nowrap;
    }

    .tab-bar {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      padding: 5px;
      gap: 5px;
      border: 1px solid var(--line);
      border-radius: 15px;
      background: rgba(255,253,247,.76);
      flex-shrink: 0;
    }

    .tab-button {
      display: flex;
      min-width: 0;
      justify-content: center;
      align-items: center;
      gap: 7px;
      border: 0;
      border-radius: 10px;
      padding: 10px 9px;
      background: transparent;
      color: var(--muted);
      cursor: pointer;
      font: 600 13px "DM Sans", sans-serif;
      transition: .2s ease;
    }

    .tab-button svg { width: 16px; height: 16px; flex-shrink: 0; }
    .tab-button:hover { background: #eef1e9; color: var(--ink); }
    .tab-button.active { background: var(--teal); color: white; box-shadow: 0 5px 12px rgba(7,89,86,.22); }

    .content-card {
      min-height: 0;
      flex: 1;
      margin-top: 14px;
      padding: clamp(18px, 3vw, 33px);
      background: rgba(255,253,247,.9);
      border: 1px solid rgba(216,222,214,.95);
      border-radius: 22px;
      box-shadow: 0 18px 40px rgba(22,68,72,.09);
      overflow: hidden;
      position: relative;
    }

    .panel {
      height: 100%;
      display: none;
      animation: fade .26s ease both;
    }

    .panel.active { display: flex; flex-direction: column; }

    .section-top {
      display: flex;
      justify-content: space-between;
      gap: 25px;
      align-items: flex-start;
    }

    .section-title {
      font-family: "Fraunces", serif;
      font-size: clamp(23px, 2.5vw, 32px);
      letter-spacing: -.035em;
      line-height: 1.02;
      margin-bottom: 7px;
    }

    .section-intro {
      color: var(--muted);
      line-height: 1.5;
      max-width: 670px;
      margin-bottom: 0;
    }

    .topic-stamp {
      color: var(--teal-dark);
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .1em;
      text-transform: uppercase;
      border-bottom: 2px solid var(--yellow);
      padding-bottom: 5px;
      white-space: nowrap;
    }

    .lesson-grid {
      display: grid;
      grid-template-columns: 1.1fr .9fr;
      gap: 16px;
      margin-top: clamp(16px, 2.6vw, 26px);
      flex: 1;
      min-height: 0;
    }

    .lesson-block {
      border: 1px solid var(--line);
      border-radius: 16px;
      padding: clamp(15px, 2vw, 21px);
      overflow: hidden;
    }

    .lesson-block.aqua { background: var(--aqua); border-color: #c2e5d7; }
    .lesson-block.soft { background: #fffaf0; }

    .lesson-block h3 {
      font-family: "Fraunces", serif;
      font-size: 19px;
      letter-spacing: -.02em;
      margin-bottom: 9px;
    }

    .lesson-block p, .lesson-block li {
      color: #405b61;
      line-height: 1.48;
      font-size: 14px;
    }

    .lesson-block ul { margin: 10px 0 0; padding-left: 19px; }
    .lesson-block li + li { margin-top: 6px; }

    .formula {
      padding: 12px 14px;
      border-left: 3px solid var(--teal);
      border-radius: 0 10px 10px 0;
      background: rgba(255,255,255,.67);
      color: var(--teal-dark);
      font-size: clamp(16px, 2vw, 21px);
      font-family: Georgia, serif;
      font-weight: 700;
      letter-spacing: .015em;
      margin: 12px 0;
    }

    .example {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-top: 12px;
      padding: 12px;
      border-radius: 11px;
      background: rgba(255,255,255,.65);
    }

    .example-icon {
      flex-shrink: 0;
      display: grid;
      place-items: center;
      width: 27px;
      height: 27px;
      border-radius: 8px;
      background: var(--yellow);
      color: #614a00;
    }

    .example p { margin: 1px 0 0; font-weight: 600; }

    .property-list { display: grid; gap: 8px; }

    .property-item {
      display: flex;
      gap: 10px;
      align-items: center;
      padding: 9px 10px;
      border-radius: 10px;
      background: rgba(255,255,255,.57);
      font-size: 14px;
      color: #405b61;
      font-weight: 600;
    }

    .property-number {
      width: 22px;
      height: 22px;
      display: grid;
      place-items: center;
      border-radius: 50%;
      background: var(--teal);
      color: white;
      font-size: 11px;
      font-weight: 700;
      flex-shrink: 0;
    }

    .quiz-panel { justify-content: space-between; }

    .quiz-header {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      align-items: flex-start;
    }

    .quiz-meta {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }

    .level-pill {
      padding: 6px 10px;
      border-radius: 999px;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
    }

    .level-mudah { background: #e2f4dd; color: #277141; }
    .level-sedang { background: #fff0c8; color: #8a5b00; }
    .level-sulit { background: #fde1dc; color: #a23a2a; }

    .progress-wrap { width: min(235px, 30vw); }

    .progress-caption {
      display: flex;
      justify-content: space-between;
      gap: 8px;
      color: var(--muted);
      font-size: 12px;
      margin-bottom: 6px;
    }

    .progress-track {
      height: 7px;
      border-radius: 99px;
      background: #e7ebe4;
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      width: 5%;
      border-radius: inherit;
      background: var(--teal);
      transition: width .3s ease;
    }

    .quiz-workspace {
      display: grid;
      grid-template-columns: 1fr .8fr;
      gap: 25px;
      align-items: center;
      flex: 1;
      min-height: 0;
      padding: 13px 0;
    }

    .question-number {
      color: var(--teal);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .1em;
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .question-text {
      font-family: "Fraunces", serif;
      font-size: clamp(23px, 3vw, 35px);
      letter-spacing: -.035em;
      line-height: 1.13;
      margin-bottom: 0;
    }

    .question-note {
      color: var(--muted);
      font-size: 13px;
      margin: 13px 0 0;
      line-height: 1.45;
    }

    .answers {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
    }

    .answer-button {
      min-height: 72px;
      text-align: left;
      border: 1px solid var(--line);
      border-radius: 13px;
      padding: 12px;
      cursor: pointer;
      color: var(--ink);
      background: #fffefa;
      font: 600 15px "DM Sans", sans-serif;
      display: flex;
      gap: 10px;
      align-items: center;
      transition: transform .15s ease, border-color .15s ease, background .15s ease;
    }

    .answer-button:hover:not(:disabled) {
      transform: translateY(-2px);
      border-color: var(--teal);
      background: #f3fbf6;
    }

    .answer-button:disabled { cursor: default; }

    .option-letter {
      width: 26px;
      height: 26px;
      display: grid;
      place-items: center;
      flex-shrink: 0;
      border-radius: 50%;
      background: #edf0ea;
      color: var(--muted);
      font-size: 12px;
    }

    .answer-button.selected { border-color: var(--teal); background: #e8f6ef; }
    .answer-button.correct { border-color: #2e934d; background: #ddf2df; color: #216f38; }
    .answer-button.incorrect { border-color: #cf5848; background: #fbe4df; color: #a23a2a; }

    .feedback {
      min-height: 39px;
      padding: 10px 12px;
      margin-top: 12px;
      border-radius: 10px;
      color: #405b61;
      background: #f0f2ed;
      font-size: 13px;
      line-height: 1.35;
    }

    .feedback.good { background: #ddf2df; color: #216f38; }
    .feedback.bad { background: #fbe4df; color: #943629; }

    .quiz-footer {
      display: flex;
      justify-content: space-between;
      gap: 12px;
      align-items: center;
    }

    .question-dots {
      display: flex;
      gap: 5px;
      flex-wrap: wrap;
      max-width: 56%;
    }

    .question-dot {
      width: 19px;
      height: 19px;
      padding: 0;
      border: 1px solid #ccd4cc;
      border-radius: 50%;
      background: white;
      color: var(--muted);
      font: 700 9px "DM Sans", sans-serif;
      cursor: pointer;
    }

    .question-dot.current {
      background: var(--teal);
      color: white;
      border-color: var(--teal);
    }

    .question-dot.answered {
      border-color: #79b18a;
      color: #267142;
    }

    .quiz-actions { display: flex; gap: 8px; }

    .control-button {
      border: 1px solid var(--line);
      padding: 9px 13px;
      border-radius: 10px;
      background: white;
      color: var(--ink);
      cursor: pointer;
      font: 700 13px "DM Sans", sans-serif;
      display: inline-flex;
      gap: 6px;
      align-items: center;
    }

    .control-button:hover:not(:disabled) {
      border-color: var(--teal);
      color: var(--teal-dark);
    }

    .control-button:disabled {
      opacity: .4;
      cursor: not-allowed;
    }

    .result-card {
      display: none;
      height: 100%;
      align-items: center;
      justify-content: center;
      text-align: center;
      background: radial-gradient(circle at 50% 40%, #e4f5e7, transparent 48%);
    }

    .result-card.visible {
      display: flex;
      animation: fade .3s ease both;
    }

    .result-inner { max-width: 510px; }

    .score-circle {
      width: 120px;
      height: 120px;
      margin: 0 auto 16px;
      display: grid;
      place-items: center;
      border: 8px solid var(--yellow);
      border-radius: 50%;
      color: var(--teal-dark);
      background: #fffdf7;
      font: 700 32px "Fraunces", serif;
    }

    .result-inner h2 {
      font-family: "Fraunces", serif;
      font-size: 34px;
      letter-spacing: -.04em;
      margin-bottom: 8px;
    }

    .result-inner p {
      color: var(--muted);
      line-height: 1.5;
      margin-bottom: 19px;
    }

    .retry-button {
      border: 0;
      border-radius: 10px;
      padding: 11px 16px;
      cursor: pointer;
      color: white;
      background: var(--teal);
      font: 700 14px "DM Sans", sans-serif;
    }

    .retry-button:hover { background: var(--teal-dark); }

    button:focus-visible {
      outline: 3px solid rgba(246,200,88,.85);
      outline-offset: 3px;
    }

    @keyframes rise-in {
      from { opacity: 0; transform: translateY(12px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fade {
      from { opacity: 0; transform: translateY(4px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 680px) {
      body { overflow: auto; }

      .app-shell {
        min-height: auto;
        padding: 10px;
      }

      .learning-frame {
        height: auto;
        min-height: calc(100 * min(var(--vh, 1vh), 1vh) - 20px);
      }

      .hero-line { margin-bottom: 10px; }
      .class-badge { padding: 7px 9px; font-size: 10px; }
      .tab-button { padding: 9px 5px; font-size: 11px; }
      .tab-button svg { display: none; }
      .content-card { margin-top: 10px; padding: 17px; border-radius: 17px; min-height: 620px; }
      .topic-stamp { display: none; }
      .lesson-grid, .quiz-workspace { grid-template-columns: 1fr; gap: 11px; }
      .lesson-grid { overflow: auto; }
      .lesson-block { padding: 13px; }
      .quiz-workspace { align-content: center; }
      .question-text { font-size: 24px; }
      .answer-button { min-height: 52px; font-size: 13px; }
      .quiz-header { gap: 8px; }
      .progress-wrap { width: 120px; }
      .question-dots { max-width: 50%; }
      .question-dot { width: 16px; height: 16px; font-size: 8px; }
      .control-button span { display: none; }
      .control-button { padding: 9px; }
    }

    @media (max-height: 650px) and (min-width: 681px) {
      .hero-line { margin-bottom: 9px; }
      .title { font-size: 30px; }
      .tab-button { padding: 7px; }
      .content-card { margin-top: 9px; padding: 18px 24px; }
      .lesson-grid { margin-top: 14px; }
      .lesson-block { padding: 14px; }
      .lesson-block p, .lesson-block li { font-size: 13px; }
      .formula { padding: 9px 12px; margin: 8px 0; }
      .example { margin-top: 8px; padding: 9px; }
    }
  </style>
  <script src="/_sdk/0e8d3a91e1c6f495.data_sdk.js" type="text/javascript" integrity="sha512-c00oDoGjsMgluCLLEyVl3suwEkgjOGGplVFbsilUoBg4aMKNmsL3mwsc9r0dPn95qiSZyjBousQXgROkAW7p/w=="></script>
  <script src="/_sdk/571d88ca352bbccf.editing_sdk.js" type="text/javascript" integrity="sha512-jpVzCgOJfgU8ETK2cVi9ukdjrZIqXjCspYqy9afx1TyeJ4jZxisBmh2SIlonXgbaxCv9M5yrk3WY4wZKWDC3Ig=="></script>
  <script src="/_sdk/04cc6185e046f597.resizing_sdk.js" type="text/javascript" integrity="sha512-CiE/G92aQF0nxneFg1kdOvXih8sQ1Z2a2QI3+r/WvzJwQqH6+IyB3iL07OkJmpm3ABAaf07+FnqWny98f5sR6w=="></script>
 </head>
 <body data-template-id="__page-root">
  <div class="app-shell">
   <div class="grain" aria-hidden="true"></div>
   <main class="learning-frame" aria-label="Media pembelajaran bentuk akar">
    <header class="hero-line">
     <div>
      <div class="kicker"><span class="kicker-dot"></span> <span>Matematika Kelas 9</span>
      </div>
      <h1 class="title">Bentuk Akar</h1>
     </div>
     <div class="class-badge"><i data-lucide="book-open" aria-hidden="true" style="width:15px;height:15px"></i> Belajar • Berlatih • Kuasai
     </div>
    </header>
    <nav class="tab-bar" aria-label="Navigasi materi"><button type="button" class="tab-button active" data-tab="pengertian" aria-selected="true"> <i data-lucide="lightbulb" aria-hidden="true"></i> <span>Pengertian</span> </button> <button type="button" class="tab-button" data-tab="operasi" aria-selected="false"> <i data-lucide="calculator" aria-hidden="true"></i> <span>Operasi Hitung</span> </button> <button type="button" class="tab-button" data-tab="sederhana" aria-selected="false"> <i data-lucide="sparkles" aria-hidden="true"></i> <span>Menyederhanakan</span> </button> <button type="button" class="tab-button" data-tab="latihan" aria-selected="false"> <i data-lucide="pencil-line" aria-hidden="true"></i> <span>Latihan Soal</span> </button>
    </nav>
    <section class="content-card">
     <section id="pengertian" class="panel active" aria-labelledby="pengertian-title">
      <div class="section-top">
       <div>
        <h2 id="pengertian-title" class="section-title">Memahami bentuk akar</h2>
        <p class="section-intro">Bentuk akar digunakan untuk menyatakan akar dari bilangan yang bukan merupakan kuadrat sempurna.</p>
       </div><span class="topic-stamp">Dasar Konsep</span>
      </div>
      <div class="lesson-grid">
       <article class="lesson-block aqua">
        <h3>Apa itu bentuk akar?</h3>
        <p>Akar kuadrat dari a adalah bilangan yang jika dikalikan dengan dirinya sendiri menghasilkan a. Simbol akar kuadrat ditulis dengan √.</p>
        <div class="formula">
         √a = b, karena b² = a
        </div>
        <div class="example">
         <div class="example-icon"><i data-lucide="check" aria-hidden="true" style="width:16px"></i>
         </div>
         <p>Contoh: √64 = 8 karena 8 × 8 = 64.</p>
        </div>
       </article>
       <article class="lesson-block soft">
        <h3>Sifat dasar bentuk akar</h3>
        <div class="property-list">
         <div class="property-item">
          <span class="property-number">1</span><span>√a × √b = √(a × b)</span>
         </div>
         <div class="property-item">
          <span class="property-number">2</span><span>√a ÷ √b = √(a ÷ b), dengan b ≠ 0</span>
         </div>
         <div class="property-item">
          <span class="property-number">3</span><span>√(a²) = a, untuk a ≥ 0</span>
         </div>
         <div class="property-item">
          <span class="property-number">4</span><span>a√b dan c√b adalah suku sejenis.</span>
         </div>
        </div>
       </article>
      </div>
     </section>
     <section id="operasi" class="panel" aria-labelledby="operasi-title">
      <div class="section-top">
       <div>
        <h2 id="operasi-title" class="section-title">Operasi hitung bentuk akar</h2>
        <p class="section-intro">Penjumlahan dan pengurangan hanya dapat dilakukan pada bentuk akar yang sejenis.</p>
       </div><span class="topic-stamp">Hitung Cermat</span>
      </div>
      <div class="lesson-grid">
       <article class="lesson-block aqua">
        <h3>Tambah &amp; kurang</h3>
        <p>Gabungkan hanya koefisien dari bentuk akar dengan angka di dalam akar yang sama.</p>
        <div class="formula">
         a√b ± c√b = (a ± c)√b
        </div>
        <div class="example">
         <div class="example-icon">
          <i data-lucide="plus" aria-hidden="true" style="width:16px"></i>
         </div>
         <p>2√7 + 5√7 = 7√7</p>
        </div>
        <div class="example">
         <div class="example-icon">
          <i data-lucide="minus" aria-hidden="true" style="width:16px"></i>
         </div>
         <p>8√3 − 3√3 = 5√3</p>
        </div>
       </article>
       <article class="lesson-block soft">
        <h3>Kali &amp; bagi</h3>
        <p>Kalikan atau bagi bilangan di dalam akar, kemudian sederhanakan hasilnya bila memungkinkan.</p>
        <div class="formula">
         √a × √b = √(a × b)
        </div>
        <div class="example">
         <div class="example-icon">
          <i data-lucide="x" aria-hidden="true" style="width:16px"></i>
         </div>
         <p>√3 × √12 = √36 = 6</p>
        </div>
        <div class="formula">
         √a ÷ √b = √(a ÷ b), b ≠ 0
        </div>
        <div class="example">
         <div class="example-icon">
          <i data-lucide="divide" aria-hidden="true" style="width:16px"></i>
         </div>
         <p>√48 ÷ √3 = √16 = 4</p>
        </div>
       </article>
      </div>
     </section>
     <section id="sederhana" class="panel" aria-labelledby="sederhana-title">
      <div class="section-top">
       <div>
        <h2 id="sederhana-title" class="section-title">Menyederhanakan bentuk akar</h2>
        <p class="section-intro">Carilah faktor kuadrat sempurna terbesar dari bilangan di dalam akar.</p>
       </div><span class="topic-stamp">Strategi Cepat</span>
      </div>
      <div class="lesson-grid">
       <article class="lesson-block aqua">
        <h3>Tiga langkah sederhana</h3>
        <ol class="mt-3 space-y-2 pl-5 text-sm text-slate-700">
         <li>Faktorkan bilangan di dalam akar.</li>
         <li>Pisahkan faktor kuadrat sempurna dan faktor sisanya.</li>
         <li>Keluarkan akar dari faktor kuadrat sempurna.</li>
        </ol>
        <div class="example">
         <div class="example-icon">
          <i data-lucide="arrow-right" aria-hidden="true" style="width:16px"></i>
         </div>
         <p>√72 = √(36 × 2) = √36 × √2 = 6√2</p>
        </div>
       </article>
       <article class="lesson-block soft">
        <h3>Ingat kuadrat sempurna</h3>
        <p>Bilangan ini sering membantu saat menyederhanakan bentuk akar.</p>
        <div class="grid grid-cols-3 gap-2 mt-3 text-center">
         <div class="rounded-lg bg-white/70 p-2">
          <span class="block font-bold text-teal-800">4</span><span class="text-xs text-slate-500">2²</span>
         </div>
         <div class="rounded-lg bg-white/70 p-2">
          <span class="block font-bold text-teal-800">9</span><span class="text-xs text-slate-500">3²</span>
         </div>
         <div class="rounded-lg bg-white/70 p-2">
          <span class="block font-bold text-teal-800">16</span><span class="text-xs text-slate-500">4²</span>
         </div>
         <div class="rounded-lg bg-white/70 p-2">
          <span class="block font-bold text-teal-800">25</span><span class="text-xs text-slate-500">5²</span>
         </div>
         <div class="rounded-lg bg-white/70 p-2">
          <span class="block font-bold text-teal-800">36</span><span class="text-xs text-slate-500">6²</span>
         </div>
         <div class="rounded-lg bg-white/70 p-2">
          <span class="block font-bold text-teal-800">49</span><span class="text-xs text-slate-500">7²</span>
         </div>
        </div>
        <div class="example">
         <div class="example-icon">
          <i data-lucide="sparkles" aria-hidden="true" style="width:16px"></i>
         </div>
         <p>Contoh: √75 = √(25 × 3) = 5√3</p>
        </div>
       </article>
      </div>
     </section>
     <section id="latihan" class="panel quiz-panel" aria-labelledby="quiz-title">
      <div id="quiz-area" class="h-full flex flex-col justify-between">
       <div class="quiz-header">
        <div>
         <div class="quiz-meta">
          <h2 id="quiz-title" class="section-title mb-0">Uji pemahamanmu</h2><span id="level-pill" class="level-pill level-mudah">Mudah</span>
         </div>
         <p class="section-intro mt-2">Kerjakan 20 soal dari level mudah hingga sulit.</p>
        </div>
        <div class="progress-wrap" aria-label="Kemajuan latihan">
         <div class="progress-caption"><span>Kemajuan</span> <strong id="progress-number">1/20</strong>
         </div>
         <div class="progress-track">
          <div id="progress-fill" class="progress-fill"></div>
         </div>
        </div>
       </div>
       <div class="quiz-workspace">
        <div>
         <div id="question-number" class="question-number">
          Soal 01
         </div>
         <h3 id="question-text" class="question-text"></h3>
         <p id="question-note" class="question-note"></p>
        </div>
        <div>
         <div id="answers" class="answers" aria-label="Pilihan jawaban"></div>
         <div id="feedback" class="feedback" aria-live="polite">
          Pilih satu jawaban terbaik.
         </div>
        </div>
       </div>
       <div class="quiz-footer">
        <div id="question-dots" class="question-dots" aria-label="Pilih nomor soal"></div>
        <div class="quiz-actions"><button id="previous-button" type="button" class="control-button" aria-label="Soal sebelumnya"> <i data-lucide="arrow-left" aria-hidden="true" style="width:16px"></i> <span>Kembali</span> </button> <button id="next-button" type="button" class="control-button" aria-label="Soal berikutnya"> <span id="next-label">Berikutnya</span> <i data-lucide="arrow-right" aria-hidden="true" style="width:16px"></i> </button>
        </div>
       </div>
      </div>
      <div id="result-card" class="result-card">
       <div class="result-inner">
        <div id="score-circle" class="score-circle">
         0%
        </div>
        <h2>Latihan selesai!</h2>
        <p id="result-description"></p><button id="retry-button" class="retry-button" type="button">Ulangi latihan</button>
       </div>
      </div>
     </section>
    </section>
   </main>
  </div>
  <script>
    const quizQuestions = [
      { level: "Mudah", q: "Nilai dari √49 adalah ...", options: ["5", "6", "7", "8"], answer: 2, note: "Ingat: carilah bilangan yang jika dikuadratkan menghasilkan 49." },
      { level: "Mudah", q: "Bentuk akar dari 81 adalah ...", options: ["√9", "√18", "√81", "√64"], answer: 2, note: "81 merupakan bilangan kuadrat sempurna." },
      { level: "Mudah", q: "Hasil dari √25 + √9 adalah ...", options: ["5", "6", "8", "34"], answer: 2, note: "Hitung masing-masing akar terlebih dahulu." },
      { level: "Mudah", q: "Hasil dari √36 − √16 adalah ...", options: ["2", "4", "6", "20"], answer: 0, note: "√36 = 6 dan √16 = 4." },
      { level: "Mudah", q: "Nilai dari √(4 × 9) adalah ...", options: ["6", "13", "36", "2"], answer: 0, note: "Gunakan sifat √a × √b = √(a × b)." },
      { level: "Mudah", q: "Manakah yang merupakan bentuk akar paling sederhana?", options: ["√12", "√18", "√20", "√3"], answer: 3, note: "Bilangan di dalam akar tidak boleh memiliki faktor kuadrat sempurna selain 1." },
      { level: "Mudah", q: "Hasil dari 2√5 + 3√5 adalah ...", options: ["5√5", "6√5", "5√10", "√25"], answer: 0, note: "Suku sejenis memiliki bentuk akar yang sama." },
      { level: "Sedang", q: "Bentuk sederhana dari √12 adalah ...", options: ["2√3", "3√2", "6√2", "4√3"], answer: 0, note: "12 = 4 × 3, dan √4 = 2." },
      { level: "Sedang", q: "Bentuk sederhana dari √45 adalah ...", options: ["3√5", "5√3", "9√5", "15"], answer: 0, note: "45 = 9 × 5." },
      { level: "Sedang", q: "Hasil dari 4√2 − √2 adalah ...", options: ["3", "3√2", "4√2", "√2"], answer: 1, note: "Kurangkan koefisien dari suku sejenis." },
      { level: "Sedang", q: "Hasil dari √8 × √2 adalah ...", options: ["2", "4", "√16", "8"], answer: 1, note: "√8 × √2 = √16." },
      { level: "Sedang", q: "Hasil dari √75 ÷ √3 adalah ...", options: ["√25", "5", "25", "5√3"], answer: 1, note: "√75 ÷ √3 = √25." },
      { level: "Sedang", q: "Bentuk sederhana dari 3√8 adalah ...", options: ["3√2", "6√2", "8√3", "24√2"], answer: 1, note: "√8 = 2√2, lalu kalikan dengan 3." },
      { level: "Sedang", q: "Hasil dari √27 + √12 adalah ...", options: ["5√3", "√39", "7√3", "3√39"], answer: 0, note: "Sederhanakan kedua bentuk akar dahulu." },
      { level: "Sulit", q: "Hasil dari 2√18 + √8 − √50 adalah ...", options: ["2√2", "3√2", "4√2", "5√2"], answer: 0, note: "√18 = 3√2, √8 = 2√2, dan √50 = 5√2." },
      { level: "Sulit", q: "Bentuk sederhana dari √(72/2) adalah ...", options: ["6", "3√2", "6√2", "√70"], answer: 0, note: "Sederhanakan nilai di dalam akar terlebih dahulu." },
      { level: "Sulit", q: "Hasil dari (√5 + √2)(√5 − √2) adalah ...", options: ["3", "7", "√3", "5 − 2√10"], answer: 0, note: "Gunakan pola (a + b)(a − b) = a² − b²." },
      { level: "Sulit", q: "Jika x = √48 dan y = √27, maka x − y = ...", options: ["√21", "√3", "√75", "7√3"], answer: 1, note: "√48 = 4√3 dan √27 = 3√3." },
      { level: "Sulit", q: "Nilai dari √200 − 2√8 adalah ...", options: ["6√2", "8√2", "10√2", "12√2"], answer: 1, note: "√200 = 10√2 dan 2√8 = 4√2." },
      { level: "Sulit", q: "Hasil sederhana dari (3√2)(2√6) adalah ...", options: ["6√12", "12√3", "6√3", "12√2"], answer: 1, note: "Kalikan koefisien dan akar: 6√12, lalu sederhanakan." }
    ];

    let currentQuestion = 0;
    let answers = Array(quizQuestions.length).fill(null);

    const tabs = document.querySelectorAll(".tab-button");
    const panels = document.querySelectorAll(".panel");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((item) => {
          item.classList.remove("active");
          item.setAttribute("aria-selected", "false");
        });

        panels.forEach((panel) => panel.classList.remove("active"));

        tab.classList.add("active");
        tab.setAttribute("aria-selected", "true");
        document.getElementById(tab.dataset.tab).classList.add("active");
      });
    });

    function levelClass(level) {
      if (level === "Mudah") return "level-mudah";
      if (level === "Sedang") return "level-sedang";
      return "level-sulit";
    }

    function renderQuestionDots() {
      const dots = document.getElementById("question-dots");
      dots.innerHTML = "";

      quizQuestions.forEach((question, index) => {
        const dot = document.createElement("button");
        dot.type = "button";
        dot.className = "question-dot";
        dot.textContent = index + 1;
        dot.setAttribute("aria-label", "Soal " + (index + 1));

        if (index === currentQuestion) dot.classList.add("current");
        if (answers[index] !== null) dot.classList.add("answered");

        dot.addEventListener("click", () => {
          currentQuestion = index;
          renderQuiz();
        });

        dots.appendChild(dot);
      });
    }

    function renderQuiz() {
      const question = quizQuestions[currentQuestion];
      const selected = answers[currentQuestion];
      const answered = selected !== null;

      document.getElementById("question-number").textContent = "Soal " + String(currentQuestion + 1).padStart(2, "0");
      document.getElementById("question-text").textContent = question.q;
      document.getElementById("question-note").textContent = question.note;
      document.getElementById("progress-number").textContent = (currentQuestion + 1) + "/" + quizQuestions.length;
      document.getElementById("progress-fill").style.width = ((currentQuestion + 1) / quizQuestions.length * 100) + "%";

      const pill = document.getElementById("level-pill");
      pill.textContent = question.level;
      pill.className = "level-pill " + levelClass(question.level);

      const answersContainer = document.getElementById("answers");
      answersContainer.innerHTML = "";

      question.options.forEach((option, optionIndex) => {
        const button = document.createElement("button");
        const letter = String.fromCharCode(65 + optionIndex);

        button.type = "button";
        button.className = "answer-button";
        button.innerHTML = \'<span class="option-letter">\' + letter + \'</span><span>\' + option + \'</span>\';

        if (answered) {
          button.disabled = true;

          if (optionIndex === question.answer) {
            button.classList.add("correct");
          }

          if (optionIndex === selected && optionIndex !== question.answer) {
            button.classList.add("incorrect");
          }

          if (optionIndex === selected && optionIndex === question.answer) {
            button.classList.add("selected");
          }
        }

        button.addEventListener("click", () => selectAnswer(optionIndex));
        answersContainer.appendChild(button);
      });

      const feedback = document.getElementById("feedback");
      feedback.className = "feedback";

      if (!answered) {
        feedback.textContent = "Pilih satu jawaban terbaik.";
      } else if (selected === question.answer) {
        feedback.textContent = "Benar! Kamu sudah memahami konsep pada soal ini.";
        feedback.classList.add("good");
      } else {
        feedback.textContent = "Belum tepat. Perhatikan kembali petunjuk kecil di bawah pertanyaan.";
        feedback.classList.add("bad");
      }

      document.getElementById("previous-button").disabled = currentQuestion === 0;
      document.getElementById("next-label").textContent =
        currentQuestion === quizQuestions.length - 1 ? "Lihat Hasil" : "Berikutnya";

      renderQuestionDots();
    }

    function selectAnswer(optionIndex) {
      if (answers[currentQuestion] !== null) return;

      answers[currentQuestion] = optionIndex;
      renderQuiz();
    }

    document.getElementById("previous-button").addEventListener("click", () => {
      if (currentQuestion > 0) {
        currentQuestion -= 1;
        renderQuiz();
      }
    });

    document.getElementById("next-button").addEventListener("click", () => {
      if (currentQuestion < quizQuestions.length - 1) {
        currentQuestion += 1;
        renderQuiz();
      } else {
        showResults();
      }
    });

    function showResults() {
      const correctCount = answers.reduce((total, answer, index) => {
        return total + (answer === quizQuestions[index].answer ? 1 : 0);
      }, 0);

      const score = Math.round((correctCount / quizQuestions.length) * 100);

      document.getElementById("score-circle").textContent = score + "%";

      let message = "Jangan menyerah. Pelajari kembali materi lalu coba lagi.";
      if (score >= 80) {
        message = "Hebat, kamu sudah menguasai materi bentuk akar!";
      } else if (score >= 60) {
        message = "Bagus! Ulangi bagian yang masih terasa menantang.";
      }

      document.getElementById("result-description").textContent =
        "Kamu menjawab benar " + correctCount + " dari " + quizQuestions.length + " soal. " + message;

      document.getElementById("quiz-area").style.display = "none";
      document.getElementById("result-card").classList.add("visible");
    }

    document.getElementById("retry-button").addEventListener("click", () => {
      currentQuestion = 0;
      answers = Array(quizQuestions.length).fill(null);

      document.getElementById("result-card").classList.remove("visible");
      document.getElementById("quiz-area").style.display = "flex";

      renderQuiz();
    });

    document.addEventListener("DOMContentLoaded", () => {
      lucide.createIcons();
      renderQuiz();
    });
  </script>
 </body>
</html>',
                'created_at' => '2026-08-23 13:48:38',
                'updated_at' => '2026-08-23 13:48:38',
                'mapel' => 'Matematika',
                'kategori_modul' => 'modul',
            ),
            9 => 
            array (
                'id' => 16,
                'user_id' => 2,
                'kelas_id' => 2,
                'judul' => 'Latihan Soal Bentuk Akar',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tryout Online Matematika - Bentuk Akar</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --bg: #f1f5f9;
            --card-bg: #ffffff;
            --text: #1e293b;
            --border: #cbd5e1;
            --easy: #10b981;
            --medium: #f59e0b;
            --hots: #ef4444;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        header {
            background-color: var(--primary);
            color: white;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 24px;
        }

        header h1 {
            font-size: 1.6rem;
            margin-bottom: 6px;
        }

        .quiz-card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .level-badge {
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }

        .easy { background-color: var(--easy); }
        .medium { background-color: var(--medium); }
        .hots { background-color: var(--hots); }

        .question-text {
            font-size: 1.1rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .options-grid {
            display: grid;
            gap: 10px;
        }

        .option-btn {
            background-color: #fff;
            border: 2px solid var(--border);
            border-radius: 8px;
            padding: 12px 16px;
            text-align: left;
            cursor: pointer;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
        }

        .option-btn:hover {
            background-color: #f8fafc;
            border-color: var(--primary);
        }

        .option-btn.selected {
            background-color: #eff6ff;
            border-color: var(--primary);
            font-weight: bold;
        }

        .option-prefix {
            font-weight: bold;
            color: var(--primary);
        }

        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background: white;
            padding: 16px 24px;
            border-radius: 12px;
            border: 1px solid var(--border);
        }

        .submit-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 24px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: var(--primary-hover);
        }

        .result-box {
            display: none;
            background: white;
            border-radius: 12px;
            padding: 24px;
            text-align: center;
            margin-top: 20px;
            border: 1px solid var(--border);
        }

        .correct {
            border-color: #10b981 !important;
            background-color: #ecfdf5 !important;
        }

        .incorrect {
            border-color: #ef4444 !important;
            background-color: #fef2f2 !important;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Tryout Online Matematika</h1>
        <p>Materi: Bentuk Akar (Kelas 9)</p>
    </header>

    <form id="quizForm">
        <div id="questionsContainer"></div>

        <div class="action-bar">
            <span id="answeredCount">Terjawab: 0 / 20</span>
            <button type="button" class="submit-btn" onclick="checkAnswers()">Selesaikan Tryout</button>
        </div>
    </form>

    <div id="resultBox" class="result-box">
        <h2>Hasil Tryout Anda</h2>
        <h1 id="finalScore" style="font-size: 3rem; color: var(--primary); margin: 10px 0;">0</h1>
        <p>Benar: <strong id="correctCount" style="color: #10b981;">0</strong> | Salah: <strong id="wrongCount" style="color: #ef4444;">0</strong></p>
        <button onclick="location.reload()" style="margin-top: 15px; padding: 8px 16px; cursor: pointer;">Ulangi Tryout</button>
    </div>
</div>

<script>
    const questions = [
        // MUDAH (1-7)
        { level: "easy", levelName: "Mudah", question: "1. Nilai dari √144 adalah ...", options: ["12", "14", "16", "24"], answer: 0 },
        { level: "easy", levelName: "Mudah", question: "2. Bentuk sederhana dari √75 adalah ...", options: ["3√5", "5√3", "25√3", "15√5"], answer: 1 },
        { level: "easy", levelName: "Mudah", question: "3. Hasil penjumlahan dari √12 + √27 adalah ...", options: ["5√3", "6√3", "√39", "5√6"], answer: 0 },
        { level: "easy", levelName: "Mudah", question: "4. Hasil perkalian √8 × √3 adalah ...", options: ["2√6", "4√6", "2√3", "6√2"], answer: 0 },
        { level: "easy", levelName: "Mudah", question: "5. Nilai dari √180 ÷ √5 adalah ...", options: ["5", "6", "8", "36"], answer: 1 },
        { level: "easy", levelName: "Mudah", question: "6. Bentuk sederhana dari 4√5 + 2√5 - 3√5 adalah ...", options: ["3", "3√5", "9√5", "5√5"], answer: 1 },
        { level: "easy", levelName: "Mudah", question: "7. Hasil dari (2√3)² adalah ...", options: ["6", "12", "18", "36"], answer: 1 },

        // SEDANG (8-14)
        { level: "medium", levelName: "Sedang", question: "8. Hasil sederhana dari √32 - 2√50 + 3√18 adalah ...", options: ["3√2", "4√2", "5√2", "6√2"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "9. Hasil perkalian √6 × (√2 + √8) adalah ...", options: ["6√3", "2√3", "4√3", "8√3"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "10. Hasil dari 2√3 × 5√6 adalah ...", options: ["30√2", "10√18", "15√2", "30√3"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "11. Jika √80 - √45 = p√5, maka nilai p adalah ...", options: ["1", "2", "3", "7"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "12. Bentuk sederhana dari 3√8 + √50 - 2√18 adalah ...", options: ["5√2", "6√2", "7√2", "4√2"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "13. Hasil dari (√7 + √2)(√7 - √2) adalah ...", options: ["5", "9", "14", "3"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "14. Nilai dari √200 ÷ √8 adalah ...", options: ["5", "25", "10", "5√2"], answer: 0 },

        // HOTS (15-20) - Fokus: Pengertian, Sifat Dasar, Operasi Hitung & Penyederhanaan
        { level: "hots", levelName: "HOTS", question: "15. Jika a = √12 dan b = √27, maka nilai sederhana dari (a + b)² adalah ...", options: ["75", "45", "125", "225"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "16. Bentuk sederhana dari √(8 + 2√15) adalah ...", options: ["√5 + √3", "√5 - √3", "√6 + √2", "√8 + √3"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "17. Diketahui segitiga siku-siku dengan panjang sisi tegak √18 cm dan √32 cm. Panjang hipotenusa (sisi miring) segitiga tersebut adalah ... cm", options: ["5√2", "7√2", "10", "√50"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "18. Bentuk sederhana dari (3√2 + 2√3)(3√2 - 2√3) adalah ...", options: ["6", "12", "18", "30"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "19. Sebuah kubus memiliki panjang rusuk 2√3 cm. Volume kubus tersebut adalah ... cm³", options: ["24√3", "16√3", "24", "12√3"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "20. Hasil dari √[ 12 + √[ 12 + √[ 12 + ... ] ] ] adalah ...", options: ["3", "4", "6", "12"], answer: 1 }
    ];

    const userAnswers = new Array(questions.length).fill(null);

    function renderQuestions() {
        const container = document.getElementById(\'questionsContainer\');
        container.innerHTML = \'\';

        questions.forEach((q, index) => {
            const card = document.createElement(\'div\');
            card.className = \'quiz-card\';
            const labels = [\'A\', \'B\', \'C\', \'D\'];
            
            let optionsHTML = \'\';
            q.options.forEach((opt, optIndex) => {
                optionsHTML += `
                    <button type="button" class="option-btn" id="q${index}_opt${optIndex}" onclick="selectOption(${index}, ${optIndex})">
                        <span class="option-prefix">${labels[optIndex]}.</span>
                        <span>${opt}</span>
                    </button>
                `;
            });

            card.innerHTML = `
                <div class="question-header">
                    <strong>Soal ${index + 1} dari 20</strong>
                    <span class="level-badge ${q.level}">${q.levelName}</span>
                </div>
                <div class="question-text">${q.question}</div>
                <div class="options-grid">${optionsHTML}</div>
            `;
            container.appendChild(card);
        });
    }

    function selectOption(qIndex, optIndex) {
        userAnswers[qIndex] = optIndex;
        for (let i = 0; i < 4; i++) {
            const btn = document.getElementById(`q${qIndex}_opt${i}`);
            if (btn) btn.classList.remove(\'selected\');
        }
        document.getElementById(`q${qIndex}_opt${optIndex}`).classList.add(\'selected\');
        document.getElementById(\'answeredCount\').innerText = `Terjawab: ${userAnswers.filter(a => a !== null).length} / ${questions.length}`;
    }

    function checkAnswers() {
        let correctCount = 0;
        questions.forEach((q, index) => {
            const selected = userAnswers[index];
            for (let i = 0; i < 4; i++) {
                const btn = document.getElementById(`q${index}_opt${i}`);
                btn.onclick = null;
                if (i === q.answer) btn.classList.add(\'correct\');
                if (selected === i && i !== q.answer) btn.classList.add(\'incorrect\');
            }
            if (selected === q.answer) correctCount++;
        });

        document.getElementById(\'finalScore\').innerText = Math.round((correctCount / questions.length) * 100);
        document.getElementById(\'correctCount\').innerText = correctCount;
        document.getElementById(\'wrongCount\').innerText = questions.length - correctCount;
        document.getElementById(\'resultBox\').style.display = \'block\';
        window.scrollTo({ top: document.body.scrollHeight, behavior: \'smooth\' });
    }

    window.onload = renderQuestions;
</script>

</body>
</html>',
                'created_at' => '2026-08-23 14:38:26',
                'updated_at' => '2026-08-23 14:38:26',
                'mapel' => 'Matematika',
                'kategori_modul' => 'latihan',
            ),
            10 => 
            array (
                'id' => 17,
                'user_id' => 2,
                'kelas_id' => 4,
                'judul' => 'Bentuk Aljabar',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi & Latihan Bentuk Aljabar Kelas 8</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --text: #1e293b;
            --border: #cbd5e1;
            --easy: #10b981;
            --medium: #f59e0b;
            --hots: #ef4444;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        header {
            background-color: var(--primary);
            color: white;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 24px;
        }

        header h1 {
            font-size: 1.8rem;
            margin-bottom: 6px;
        }

        .section-card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .section-card h2 {
            color: var(--primary);
            margin-bottom: 12px;
            border-bottom: 2px solid var(--border);
            padding-bottom: 6px;
        }

        .section-card h3 {
            margin: 14px 0 8px 0;
            color: #334155;
        }

        ul, ol {
            margin-left: 20px;
            margin-bottom: 12px;
        }

        .quiz-card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 16px;
            border: 1px solid var(--border);
        }

        .question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .level-badge {
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }

        .easy { background-color: var(--easy); }
        .medium { background-color: var(--medium); }
        .hots { background-color: var(--hots); }

        .question-text {
            font-size: 1.05rem;
            margin-bottom: 16px;
            font-weight: 600;
        }

        .options-grid {
            display: grid;
            gap: 10px;
        }

        .option-btn {
            background-color: #fff;
            border: 2px solid var(--border);
            border-radius: 8px;
            padding: 10px 14px;
            text-align: left;
            cursor: pointer;
            font-size: 0.98rem;
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
        }

        .option-btn:hover {
            background-color: #f1f5f9;
            border-color: var(--primary);
        }

        .option-btn.selected {
            background-color: #eff6ff;
            border-color: var(--primary);
            font-weight: bold;
        }

        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background: white;
            padding: 16px 24px;
            border-radius: 12px;
            border: 1px solid var(--border);
        }

        .submit-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 24px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: var(--primary-hover);
        }

        .result-box {
            display: none;
            background: white;
            border-radius: 12px;
            padding: 24px;
            text-align: center;
            margin-top: 20px;
            border: 1px solid var(--border);
        }

        .correct {
            border-color: #10b981 !important;
            background-color: #ecfdf5 !important;
        }

        .incorrect {
            border-color: #ef4444 !important;
            background-color: #fef2f2 !important;
        }

        .example-box {
            background-color: #f1f5f9;
            padding: 10px 14px;
            border-left: 4px solid var(--primary);
            margin: 10px 0;
            border-radius: 0 6px 6px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Matematika Kelas 8</h1>
        <p>Materi Pembelajaran & Latihan Soal: Bentuk Aljabar</p>
    </header>

    <!-- MATERI BAGIAN 1 -->
    <div class="section-card">
        <h2>1. Pengertian Bentuk Aljabar</h2>
        <p><strong>Bentuk Aljabar</strong> adalah ekspresi matematika yang memuat gabungan antara angka (konstanta) dan huruf (variabel) yang dihubungkan oleh operasi hitung.</p>
        
        <h3>Unsur-unsur Aljabar:</h3>
        <ul>
            <li><strong>Variabel (Peubah):</strong> Simbol/huruf yang mewakili nilai yang belum diketahui (contoh: x, y, a, b).</li>
            <li><strong>Koefisien:</strong> Angka yang melekat dan mengalikan variabel (contoh: pada 5x, koefisiennya adalah 5).</li>
            <li><strong>Konstanta:</strong> Nilai berupa angka tetap yang tidak memiliki variabel (contoh: pada 3x + 7, konstantanya adalah 7).</li>
            <li><strong>Suku:</strong> Bagian dari bentuk aljabar yang dipisahkan oleh tanda + atau - .
                <ul>
                    <li>Suku Sejenis: Suku yang memiliki variabel dan pangkat variabel yang sama (contoh: 3x dan 5x).</li>
                    <li>Suku Tak Sejenis: Suku yang variabel atau pangkatnya berbeda (contoh: 3x dan 3y, atau 2x dan 2x²).</li>
                </ul>
            </li>
        </ul>
        <div class="example-box">
            <strong>Contoh:</strong> Pada aljabar 4x² - 3x + 8
            <br>• Variabel: x² dan x
            <br>• Koefisien x² adalah 4, koefisien x adalah -3
            <br>• Konstanta: 8
        </div>
    </div>

    <!-- MATERI BAGIAN 2 -->
    <div class="section-card">
        <h2>2. Sifat-Sifat Dasar Operasi Aljabar</h2>
        <p>Operasi aljabar memanfaatkan sifat-sifat dasar aritmatika berikut:</p>
        <ul>
            <li><strong>Sifat Komutatif:</strong>
                <br>• a + b = b + a
                <br>• a × b = b × a
            </li>
            <li><strong>Sifat Asosiatif:</strong>
                <br>• (a + b) + c = a + (b + c)
                <br>• (a × b) × c = a × (b × c)
            </li>
            <li><strong>Sifat Distributif (Penyebaran):</strong>
                <br>• a(b + c) = ab + ac
                <br>• a(b - c) = ab - ac
                <br>• (a + b)(c + d) = ac + ad + bc + bd
            </li>
        </ul>
    </div>

    <!-- MATERI BAGIAN 3 -->
    <div class="section-card">
        <h2>3. Operasi Hitung Bentuk Aljabar</h2>
        
        <h3>A. Penjumlahan dan Pengurangan</h3>
        <p>Hanya dapat dilakukan pada <strong>suku-suku yang sejenis</strong> dengan cara menjumlahkan/mengurangkan koefisiennya.</p>
        <div class="example-box">
            Contoh: (5x + 3y) + (2x - 7y) = (5 + 2)x + (3 - 7)y = 7x - 4y
        </div>

        <h3>B. Perkalian</h3>
        <p>Perkalian berlaku untuk semua suku. Gunakan sifat pangkat: aᵐ × aⁿ = aᵐ⁺ⁿ.</p>
        <div class="example-box">
            Contoh: 3x(2x + 4) = (3x × 2x) + (3x × 4) = 6x² + 12x
        </div>

        <h3>C. Pembagian</h3>
        <p>Sederhanakan dengan membagi koefisien dan mengurangi pangkat variabel sejenis: aᵐ ÷ aⁿ = aᵐ⁻ⁿ.</p>
        <div class="example-box">
            Contoh: 12x³y² ÷ 4xy = (12 ÷ 4) · x³⁻¹ · y²⁻¹ = 3x²y
        </div>
    </div>

    <!-- LATIHAN SOAL -->
    <div class="section-card">
        <h2>Latihan Soal Tryout (20 Soal)</h2>
        <p>Pilih salah satu jawaban yang paling tepat untuk setiap soal berikut.</p>
        <br>

        <form id="quizForm">
            <div id="questionsContainer"></div>

            <div class="action-bar">
                <span id="answeredCount">Terjawab: 0 / 20</span>
                <button type="button" class="submit-btn" onclick="checkAnswers()">Periksa Jawaban</button>
            </div>
        </form>

        <div id="resultBox" class="result-box">
            <h2>Hasil Latihan Anda</h2>
            <h1 id="finalScore" style="font-size: 3rem; color: var(--primary); margin: 10px 0;">0</h1>
            <p>Benar: <strong id="correctCount" style="color: #10b981;">0</strong> | Salah: <strong id="wrongCount" style="color: #ef4444;">0</strong></p>
            <button onclick="location.reload()" style="margin-top: 15px; padding: 8px 16px; cursor: pointer;">Ulangi Latihan</button>
        </div>
    </div>
</div>

<script>
    const questions = [
        // MUDAH (1-7)
        { level: "easy", levelName: "Mudah", question: "1. Koefisien x pada bentuk aljabar 3x² - 7x + 5 adalah ...", options: ["3", "-7", "7", "5"], answer: 1 },
        { level: "easy", levelName: "Mudah", question: "2. Konstanta dari bentuk aljabar 2x² - 5x - 9 adalah ...", options: ["2", "-5", "-9", "9"], answer: 2 },
        { level: "easy", levelName: "Mudah", question: "3. Suku-suku yang sejenis dari 3x + 2y - 5x + 8y adalah ...", options: ["3x dan 2y", "3x dan -5x", "2y dan -5x", "3x dan 8y"], answer: 1 },
        { level: "easy", levelName: "Mudah", question: "4. Hasil penjumlahan dari 4x + 3x adalah ...", options: ["7x²", "7x", "12x", "12x²"], answer: 1 },
        { level: "easy", levelName: "Mudah", question: "5. Hasil dari (5x - 2) + (3x + 7) adalah ...", options: ["8x + 5", "8x - 5", "2x + 9", "8x + 9"], answer: 0 },
        { level: "easy", levelName: "Mudah", question: "6. Hasil perkalian 4(2a - 3b) adalah ...", options: ["8a - 3b", "8a - 12b", "6a - 7b", "8a + 12b"], answer: 1 },
        { level: "easy", levelName: "Mudah", question: "7. Bentuk sederhana dari 12x³ ÷ 3x adalah ...", options: ["4x²", "4x³", "9x²", "4x"], answer: 0 },

        // SEDANG (8-14)
        { level: "medium", levelName: "Sedang", question: "8. Bentuk sederhana dari (7x - 4y) - (3x - 8y) adalah ...", options: ["4x - 12y", "4x + 4y", "4x - 4y", "10x - 12y"], answer: 1 },
        { level: "medium", levelName: "Sedang", question: "9. Hasil dari (2x + 3)(x - 5) adalah ...", options: ["2x² - 7x - 15", "2x² + 7x - 15", "2x² - 13x - 15", "2x² - 7x + 15"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "10. Bentuk kuadrat dari (3x - 2)² adalah ...", options: ["9x² - 4", "9x² + 4", "9x² - 12x + 4", "9x² - 6x + 4"], answer: 2 },
        { level: "medium", levelName: "Sedang", question: "11. Hasil sederhana dari 3(x + 4) - 2(2x - 1) adalah ...", options: ["-x + 14", "-x + 10", "x + 14", "-x - 10"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "12. Hasil dari 12a²b³ ÷ 3ab² adalah ...", options: ["4ab", "4a²b", "4a", "4b"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "13. Hasil pembagian (15a²b - 10ab²) ÷ 5ab adalah ...", options: ["3a - 2b", "3a + 2b", "3a² - 2b²", "5a - 2b"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "14. Jika x = 3 dan y = -2, nilai dari 2x² - 3xy adalah ...", options: ["0", "18", "36", "30"], answer: 3 },

        // HOTS (15-20)
        { level: "hots", levelName: "HOTS", question: "15. Sebuah persegi panjang memiliki panjang (3x + 2) cm dan lebar (2x - 1) cm. Luas persegi panjang tersebut adalah ... cm²", options: ["6x² + x - 2", "6x² - x - 2", "6x² + 7x + 2", "5x² + 1"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "16. Keliling sebuah segitiga adalah (10x - 4) cm. Jika panjang dua sisinya adalah (3x + 1) cm dan (2x + 5) cm, panjang sisi ketiga adalah ... cm", options: ["5x - 10", "5x + 2", "5x - 8", "15x + 2"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "17. Bentuk sederhana dari 2(3x - 2y) - 3(x + 4y) + 5y adalah ...", options: ["3x - 11y", "3x - 9y", "3x + 11y", "3x - 19y"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "18. Jika A = 2x² - 3x + 5 dan B = x² + 4x - 2, maka bentuk sederhana dari 2A - B adalah ...", options: ["3x² - 10x + 12", "3x² - 2x + 8", "3x² - 10x + 8", "4x² - 10x + 12"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "19. Diketahui umur Budi (2x + 3) tahun dan umur Andi (x - 1) tahun. Jika selisih umur mereka 9 tahun, maka umur Budi sebenarnya adalah ... tahun", options: ["17", "11", "15", "19"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "20. Bentuk sederhana dari (2 / x) + (3 / (x + 1)) adalah ...", options: ["(5x + 2) / (x² + x)", "(5x + 2) / (2x + 1)", "5 / (x² + x)", "(5x + 3) / (x² + x)"], answer: 0 }
    ];

    const userAnswers = new Array(questions.length).fill(null);

    function renderQuestions() {
        const container = document.getElementById(\'questionsContainer\');
        container.innerHTML = \'\';

        questions.forEach((q, index) => {
            const card = document.createElement(\'div\');
            card.className = \'quiz-card\';
            const labels = [\'A\', \'B\', \'C\', \'D\'];
            
            let optionsHTML = \'\';
            q.options.forEach((opt, optIndex) => {
                optionsHTML += `
                    <button type="button" class="option-btn" id="q${index}_opt${optIndex}" onclick="selectOption(${index}, ${optIndex})">
                        <strong>${labels[optIndex]}.</strong>
                        <span>${opt}</span>
                    </button>
                `;
            });

            card.innerHTML = `
                <div class="question-header">
                    <strong>Soal ${index + 1} dari 20</strong>
                    <span class="level-badge ${q.level}">${q.levelName}</span>
                </div>
                <div class="question-text">${q.question}</div>
                <div class="options-grid">${optionsHTML}</div>
            `;
            container.appendChild(card);
        });
    }

    function selectOption(qIndex, optIndex) {
        userAnswers[qIndex] = optIndex;
        for (let i = 0; i < 4; i++) {
            const btn = document.getElementById(`q${qIndex}_opt${i}`);
            if (btn) btn.classList.remove(\'selected\');
        }
        document.getElementById(`q${qIndex}_opt${optIndex}`).classList.add(\'selected\');
        document.getElementById(\'answeredCount\').innerText = `Terjawab: ${userAnswers.filter(a => a !== null).length} / ${questions.length}`;
    }

    function checkAnswers() {
        let correctCount = 0;
        questions.forEach((q, index) => {
            const selected = userAnswers[index];
            for (let i = 0; i < 4; i++) {
                const btn = document.getElementById(`q${index}_opt${i}`);
                btn.onclick = null;
                if (i === q.answer) btn.classList.add(\'correct\');
                if (selected === i && i !== q.answer) btn.classList.add(\'incorrect\');
            }
            if (selected === q.answer) correctCount++;
        });

        document.getElementById(\'finalScore\').innerText = Math.round((correctCount / questions.length) * 100);
        document.getElementById(\'correctCount\').innerText = correctCount;
        document.getElementById(\'wrongCount\').innerText = questions.length - correctCount;
        document.getElementById(\'resultBox\').style.display = \'block\';
        window.scrollTo({ top: document.body.scrollHeight, behavior: \'smooth\' });
    }

    window.onload = renderQuestions;
</script>

</body>
</html>',
                'created_at' => '2026-08-23 15:07:23',
                'updated_at' => '2026-08-23 15:07:23',
                'mapel' => 'Matematika',
                'kategori_modul' => 'modul',
            ),
            11 => 
            array (
                'id' => 18,
                'user_id' => 2,
                'kelas_id' => 4,
                'judul' => 'Latihan Soal Bentuk Aljabar',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tryout Bentuk Aljabar (10 Soal)</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --text: #1e293b;
            --border: #cbd5e1;
            --easy: #10b981;
            --medium: #f59e0b;
            --hots: #ef4444;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        header {
            background-color: var(--primary);
            color: white;
            padding: 24px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 24px;
        }

        header h1 {
            font-size: 1.8rem;
            margin-bottom: 6px;
        }

        .section-card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            border: 1px solid var(--border);
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .section-card h2 {
            color: var(--primary);
            margin-bottom: 12px;
            border-bottom: 2px solid var(--border);
            padding-bottom: 6px;
        }

        .quiz-card {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 16px;
            border: 1px solid var(--border);
        }

        .question-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .level-badge {
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.8rem;
            font-weight: bold;
            color: white;
            text-transform: uppercase;
        }

        .easy { background-color: var(--easy); }
        .medium { background-color: var(--medium); }
        .hots { background-color: var(--hots); }

        .question-text {
            font-size: 1.05rem;
            margin-bottom: 16px;
            font-weight: 600;
        }

        .options-grid {
            display: grid;
            gap: 10px;
        }

        .option-btn {
            background-color: #fff;
            border: 2px solid var(--border);
            border-radius: 8px;
            padding: 10px 14px;
            text-align: left;
            cursor: pointer;
            font-size: 0.98rem;
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
        }

        .option-btn:hover {
            background-color: #f1f5f9;
            border-color: var(--primary);
        }

        .option-btn.selected {
            background-color: #eff6ff;
            border-color: var(--primary);
            font-weight: bold;
        }

        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            background: white;
            padding: 16px 24px;
            border-radius: 12px;
            border: 1px solid var(--border);
        }

        .submit-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 24px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: var(--primary-hover);
        }

        .result-box {
            display: none;
            background: white;
            border-radius: 12px;
            padding: 24px;
            text-align: center;
            margin-top: 20px;
            border: 1px solid var(--border);
        }

        .correct {
            border-color: #10b981 !important;
            background-color: #ecfdf5 !important;
        }

        .incorrect {
            border-color: #ef4444 !important;
            background-color: #fef2f2 !important;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>Matematika Kelas 8</h1>
        <p>Tryout Ringkas: Bentuk Aljabar (10 Soal)</p>
    </header>

    <div class="section-card">
        <h2>Latihan Soal Tryout</h2>
        <p>Pilih salah satu jawaban yang paling tepat untuk setiap soal di bawah ini.</p>
        <br>

        <form id="quizForm">
            <div id="questionsContainer"></div>

            <div class="action-bar">
                <span id="answeredCount">Terjawab: 0 / 10</span>
                <button type="button" class="submit-btn" onclick="checkAnswers()">Periksa Jawaban</button>
            </div>
        </form>

        <div id="resultBox" class="result-box">
            <h2>Hasil Tryout Anda</h2>
            <h1 id="finalScore" style="font-size: 3rem; color: var(--primary); margin: 10px 0;">0</h1>
            <p>Benar: <strong id="correctCount" style="color: #10b981;">0</strong> | Salah: <strong id="wrongCount" style="color: #ef4444;">0</strong></p>
            <button onclick="location.reload()" style="margin-top: 15px; padding: 8px 16px; cursor: pointer;">Ulangi Tryout</button>
        </div>
    </div>
</div>

<script>
    const questions = [
        // MUDAH (1-3)
        { level: "easy", levelName: "Mudah", question: "1. Koefisien dari x pada bentuk aljabar 4x² - 9x + 6 adalah ...", options: ["4", "-9", "9", "6"], answer: 1 },
        { level: "easy", levelName: "Mudah", question: "2. Konstanta dari bentuk aljabar 3a² - 2a - 12 adalah ...", options: ["3", "-2", "-12", "12"], answer: 2 },
        { level: "easy", levelName: "Mudah", question: "3. Hasil penjumlahan dari (6x - 3y) + (2x + 8y) adalah ...", options: ["8x + 5y", "8x - 5y", "4x + 5y", "8x + 11y"], answer: 0 },

        // SEDANG (4-7)
        { level: "medium", levelName: "Sedang", question: "4. Bentuk sederhana dari (8x - 5y) - (3x - 9y) adalah ...", options: ["5x - 14y", "5x + 4y", "5x - 4y", "11x - 14y"], answer: 1 },
        { level: "medium", levelName: "Sedang", question: "5. Hasil perkalian dari (3x + 2)(x - 4) adalah ...", options: ["3x² - 10x - 8", "3x² + 10x - 8", "3x² - 14x - 8", "3x² - 10x + 8"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "6. Hasil dari 18a³b² ÷ 6ab adalah ...", options: ["3a²b", "3ab²", "3a²", "3ab"], answer: 0 },
        { level: "medium", levelName: "Sedang", question: "7. Jika x = 4 dan y = -3, nilai dari 3x² - 2xy adalah ...", options: ["24", "72", "24 + 24", "48"], answer: 1 },

        // HOTS (8-10)
        { level: "hots", levelName: "HOTS", question: "8. Sebuah persegi panjang memiliki panjang (4x + 3) cm dan lebar (2x - 1) cm. Luas persegi panjang tersebut adalah ... cm²", options: ["8x² + 2x - 3", "8x² - 2x - 3", "8x² + 10x + 3", "6x² + 2"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "9. Keliling sebuah segitiga adalah (12x - 6) cm. Jika panjang dua sisinya adalah (4x + 2) cm dan (3x + 1) cm, panjang sisi ketiga adalah ... cm", options: ["5x - 9", "5x - 3", "5x + 9", "19x - 3"], answer: 0 },
        { level: "hots", levelName: "HOTS", question: "10. Bentuk sederhana dari 3(2x - 3y) - 2(x + 4y) + 10y adalah ...", options: ["4x - 7y", "4x - 9y", "4x + 7y", "4x - 19y"], answer: 0 }
    ];

    const userAnswers = new Array(questions.length).fill(null);

    function renderQuestions() {
        const container = document.getElementById(\'questionsContainer\');
        container.innerHTML = \'\';

        questions.forEach((q, index) => {
            const card = document.createElement(\'div\');
            card.className = \'quiz-card\';
            const labels = [\'A\', \'B\', \'C\', \'D\'];
            
            let optionsHTML = \'\';
            q.options.forEach((opt, optIndex) => {
                optionsHTML += `
                    <button type="button" class="option-btn" id="q${index}_opt${optIndex}" onclick="selectOption(${index}, ${optIndex})">
                        <strong>${labels[optIndex]}.</strong>
                        <span>${opt}</span>
                    </button>
                `;
            });

            card.innerHTML = `
                <div class="question-header">
                    <strong>Soal ${index + 1} dari 10</strong>
                    <span class="level-badge ${q.level}">${q.levelName}</span>
                </div>
                <div class="question-text">${q.question}</div>
                <div class="options-grid">${optionsHTML}</div>
            `;
            container.appendChild(card);
        });
    }

    function selectOption(qIndex, optIndex) {
        userAnswers[qIndex] = optIndex;
        for (let i = 0; i < 4; i++) {
            const btn = document.getElementById(`q${qIndex}_opt${i}`);
            if (btn) btn.classList.remove(\'selected\');
        }
        document.getElementById(`q${qIndex}_opt${optIndex}`).classList.add(\'selected\');
        document.getElementById(\'answeredCount\').innerText = `Terjawab: ${userAnswers.filter(a => a !== null).length} / ${questions.length}`;
    }

    function checkAnswers() {
        let correctCount = 0;
        questions.forEach((q, index) => {
            const selected = userAnswers[index];
            for (let i = 0; i < 4; i++) {
                const btn = document.getElementById(`q${index}_opt${i}`);
                btn.onclick = null;
                if (i === q.answer) btn.classList.add(\'correct\');
                if (selected === i && i !== q.answer) btn.classList.add(\'incorrect\');
            }
            if (selected === q.answer) correctCount++;
        });

        document.getElementById(\'finalScore\').innerText = Math.round((correctCount / questions.length) * 100);
        document.getElementById(\'correctCount\').innerText = correctCount;
        document.getElementById(\'wrongCount\').innerText = questions.length - correctCount;
        document.getElementById(\'resultBox\').style.display = \'block\';
        window.scrollTo({ top: document.body.scrollHeight, behavior: \'smooth\' });
    }

    window.onload = renderQuestions;
</script>

</body>
</html>',
                'created_at' => '2026-08-23 15:10:06',
                'updated_at' => '2026-08-23 15:10:06',
                'mapel' => 'Matematika',
                'kategori_modul' => 'latihan',
            ),
            12 => 
            array (
                'id' => 19,
                'user_id' => 2,
                'kelas_id' => 3,
                'judul' => 'Faktor Bilangan',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Pembelajaran Matematika Kelas 7: Faktor Bilangan & Faktorisasi Prima</title>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #0891b2;
            --accent: #f59e0b;
            --bg-base: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: \'Segoe UI\', system-ui, -apple-system, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            line-height: 1.6;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, #4338ca 0%, #4f46e5 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 1.8rem;
            margin-bottom: 8px;
            font-weight: 800;
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }

        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        nav {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: center;
            gap: 6px;
            padding: 10px;
            flex-wrap: wrap;
        }

        nav button {
            background: transparent;
            border: none;
            padding: 8px 12px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-muted);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        nav button:hover, nav button.active {
            background: #e0e7ff;
            color: var(--primary);
        }

        .container {
            max-width: 900px;
            margin: 25px auto;
            padding: 0 15px;
        }

        .section {
            display: none;
            animation: fadeIn 0.4s ease-in-out;
        }

        .section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .card h2 {
            font-size: 1.3rem;
            color: #0f172a;
            margin-bottom: 16px;
            border-bottom: 2px solid #f1f5f9;
            padding-bottom: 8px;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
        }

        .info-box {
            padding: 16px;
            border-radius: 10px;
            border-left: 5px solid var(--primary);
            background: #f8fafc;
        }

        .info-box.prima { border-left-color: var(--secondary); }
        .info-box.persekutuan { border-left-color: var(--accent); }

        .info-box h3 {
            margin-bottom: 8px;
            color: #0f172a;
            font-size: 1.05rem;
        }

        /* Calculator Tool */
        .calc-box {
            background: #f0f3ff;
            border: 1px solid #c7d2fe;
            padding: 20px;
            border-radius: 10px;
            margin-top: 15px;
        }

        .calc-input-group {
            display: flex;
            gap: 10px;
            margin-top: 10px;
            flex-wrap: wrap;
        }

        .calc-input {
            padding: 10px 14px;
            border: 2px solid var(--border-color);
            border-radius: 8px;
            font-size: 1rem;
            flex: 1;
            min-width: 150px;
        }

        .calc-btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .calc-result {
            margin-top: 15px;
            padding: 12px;
            background: white;
            border-radius: 8px;
            font-weight: 600;
            color: var(--primary-dark);
            border: 1px solid #e0e7ff;
        }

        /* Quiz Styles */
        .quiz-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 16px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .question-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #0f172a;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option-btn {
            text-align: left;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option-btn:hover {
            border-color: #a5b4fc;
            background: #f5f3ff;
        }

        .option-btn.correct {
            border-color: var(--success);
            background: #ecfdf5;
            color: #065f46;
            font-weight: 600;
        }

        .option-btn.wrong {
            border-color: var(--danger);
            background: #fef2f2;
            color: #991b1b;
            font-weight: 600;
        }

        .quiz-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .score-box {
            text-align: center;
            padding: 30px 20px;
        }

        .score-circle {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 800;
            margin: 0 auto 15px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <header>
        <div class="badge">Matematika Kelas 7 </div>
        <h1>Faktor Bilangan & Faktorisasi Prima</h1>
        <p>Mengenal Konsep Faktor, Faktor Persekutuan, Bilangan Prima, dan Faktorisasi Prima</p>
    </header>

    <nav>
        <button class="active" onclick="switchTab(\'faktor\')">🔢 Faktor Bilangan</button>
        <button onclick="switchTab(\'persekutuan\')">🤝 Faktor Persekutuan</button>
        <button onclick="switchTab(\'prima\')">⭐ Faktorisasi Prima</button>
        <button onclick="switchTab(\'kalkulator\')">🧮 Tool Interaktif</button>
        <button onclick="switchTab(\'latihan\')">📝 10 Soal Latihan</button>
    </nav>

    <div class="container">

        <!-- TAB 1: FAKTOR BILANGAN -->
        <div id="faktor" class="section active">
            <div class="card">
                <h2>📌 Apa itu Faktor Bilangan?</h2>
                <p style="margin-bottom: 15px;"><strong>Faktor bilangan</strong> adalah semua bilangan bulat positif yang dapat membagi habis bilangan tersebut tanpa menyisakan sisa pembagian.</p>
                
                <div class="grid-2">
                    <div class="info-box">
                        <h3>Contoh 1: Faktor dari 12</h3>
                        <p>Cari pasangan perkalian yang menghasilkan 12:</p>
                        <ul style="margin-left: 18px; margin-top: 6px;">
                            <li>1 × 12 = 12</li>
                            <li>2 × 6 = 12</li>
                            <li>3 × 4 = 12</li>
                        </ul>
                        <p style="margin-top: 8px;">Jadi, <strong>Faktor dari 12</strong> adalah: <br><strong>1, 2, 3, 4, 6, 12</strong></p>
                    </div>

                    <div class="info-box">
                        <h3>Contoh 2: Faktor dari 20</h3>
                        <p>Cari pasangan perkalian yang menghasilkan 20:</p>
                        <ul style="margin-left: 18px; margin-top: 6px;">
                            <li>1 × 20 = 20</li>
                            <li>2 × 10 = 20</li>
                            <li>4 × 5 = 20</li>
                        </ul>
                        <p style="margin-top: 8px;">Jadi, <strong>Faktor dari 20</strong> adalah: <br><strong>1, 2, 4, 5, 10, 20</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 2: FAKTOR PERSEKUTUAN -->
        <div id="persekutuan" class="section">
            <div class="card">
                <h2>🤝 Faktor Persekutuan</h2>
                <p style="margin-bottom: 15px;"><strong>Faktor persekutuan</strong> adalah faktor-faktor yang bernilai sama dari dua bilangan atau lebih.</p>

                <div class="grid-2">
                    <div class="info-box persekutuan">
                        <h3>Mencari Faktor Persekutuan dari 12 dan 18</h3>
                        <p>Langkah-langkahnya:</p>
                        <ul style="margin-left: 18px; margin-top: 6px;">
                            <li>Faktor dari 12: <strong>1</strong>, <strong>2</strong>, <strong>3</strong>, 4, <strong>6</strong>, 12</li>
                            <li>Faktor dari 18: <strong>1</strong>, <strong>2</strong>, <strong>3</strong>, <strong>6</strong>, 9, 18</li>
                        </ul>
                        <p style="margin-top: 8px;">Faktor yang bernilai sama (persekutuan) adalah: <br><strong>1, 2, 3, dan 6</strong></p>
                    </div>

                    <div class="info-box persekutuan">
                        <h3>Mencari Faktor Persekutuan dari 15 dan 25</h3>
                        <p>Langkah-langkahnya:</p>
                        <ul style="margin-left: 18px; margin-top: 6px;">
                            <li>Faktor dari 15: <strong>1</strong>, 3, <strong>5</strong>, 15</li>
                            <li>Faktor dari 25: <strong>1</strong>, <strong>5</strong>, 25</li>
                        </ul>
                        <p style="margin-top: 8px;">Faktor yang bernilai sama (persekutuan) adalah: <br><strong>1 dan 5</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 3: FAKTOR PRIMA & FAKTORISASI -->
        <div id="prima" class="section">
            <div class="card">
                <h2>⭐ Faktor Prima & Faktorisasi Prima</h2>
                
                <div class="grid-2">
                    <div class="info-box prima">
                        <h3>1. Bilangan Prima & Faktor Prima</h3>
                        <p><strong>Bilangan prima</strong> adalah bilangan positif yang hanya memiliki 2 faktor (1 dan dirinya sendiri). Contoh: 2, 3, 5, 7, 11, 13, 17, dst.</p>
                        <p style="margin-top: 8px;"><strong>Faktor prima</strong> adalah faktor-faktor dari suatu bilangan yang berbentuk bilangan prima.</p>
                        <p style="margin-top: 4px;">Contoh: Faktor dari 12 adalah 1, 2, 3, 4, 6, 12. Maka faktor primanya adalah <strong>2 dan 3</strong>.</p>
                    </div>

                    <div class="info-box prima">
                        <h3>2. Faktorisasi Prima</h3>
                        <p>Mengubah suatu bilangan menjadi bentuk perkalian dari bilangan-bilangan prima (dapat dicari menggunakan <strong>Pohon Faktor</strong>).</p>
                        <p style="margin-top: 8px;">Contoh Faktorisasi Prima dari 24:</p>
                        <ul style="margin-left: 18px;">
                            <li>24 ÷ 2 = 12</li>
                            <li>12 ÷ 2 = 6</li>
                            <li>6 ÷ 2 = 3</li>
                            <li>24 = 2 × 2 × 2 × 3 = <strong>2³ × 3</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 4: TOOL KALKULATOR INTERAKTIF -->
        <div id="kalkulator" class="section">
            <div class="card">
                <h2>🧮 Kalkulator Faktor & Faktorisasi Prima</h2>
                <p>Masukkan sebuah angka di bawah ini untuk melihat daftar faktor bilangan dan bentuk faktorisasi primanya secara otomatis:</p>

                <div class="calc-box">
                    <label style="font-weight:600;">Masukkan Bilangan Bulat Positif:</label>
                    <div class="calc-input-group">
                        <input type="number" id="calcInput" class="calc-input" placeholder="Contoh: 36" min="1">
                        <button class="calc-btn" onclick="hitungFaktor()">Proses</button>
                    </div>

                    <div class="calc-result" id="calcResult">
                        Hasil akan muncul di sini...
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 5: LATIHAN SOAL -->
        <div id="latihan" class="section">
            <div class="card" id="quiz-card">
                <div class="quiz-progress">
                    <span id="q-count">Soal 1 dari 10</span>
                    <span id="score-display">Skor: 0</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" id="progress-fill"></div>
                </div>

                <div>
                    <div class="question-title" id="question-text">Memuat soal...</div>
                    <div class="options-list" id="options-container"></div>
                </div>

                <div class="quiz-nav">
                    <button class="btn" id="prev-btn" onclick="prevQuestion()" disabled>← Sebelumnya</button>
                    <button class="btn" id="next-btn" onclick="nextQuestion()">Selanjutnya →</button>
                </div>
            </div>

            <div class="card score-box" id="result-card" style="display: none;">
                <h2>🎉 Latihan Selesai!</h2>
                <p style="margin-bottom: 15px; color: var(--text-muted);">Berikut adalah hasil evaluasi Anda:</p>
                <div class="score-circle" id="final-score">0</div>
                <p id="score-feedback" style="font-size: 1.05rem; margin-bottom: 20px;"></p>
                <button class="btn" onclick="restartQuiz()">🔄 Ulangi Latihan</button>
            </div>
        </div>

    </div>

    <footer>
        Media Pembelajaran Interaktif Matematika Kelas 7 • Faktor Bilangan - bimbel brilliant
    </footer>

    <script>
        function switchTab(tabId) {
            document.querySelectorAll(\'.section\').forEach(sec => sec.classList.remove(\'active\'));
            document.querySelectorAll(\'nav button\').forEach(btn => btn.classList.remove(\'active\'));
            
            document.getElementById(tabId).classList.add(\'active\');
            event.target.classList.add(\'active\');
        }

        function hitungFaktor() {
            const input = document.getElementById(\'calcInput\').value;
            const num = parseInt(input);
            const resBox = document.getElementById(\'calcResult\');

            if (isNaN(num) || num <= 0) {
                resBox.innerText = "Mohon masukkan bilangan bulat positif yang valid!";
                return;
            }

            // Hitung faktor
            let faktor = [];
            for (let i = 1; i <= num; i++) {
                if (num % i === 0) {
                    faktor.push(i);
                }
            }

            // Hitung faktorisasi prima
            let temp = num;
            let primeFactors = [];
            let d = 2;
            while (temp > 1) {
                while (temp % d === 0) {
                    primeFactors.push(d);
                    temp /= d;
                }
                d++;
                if (d * d > temp) {
                    if (temp > 1) {
                        primeFactors.push(temp);
                        break;
                    }
                }
            }

            // Format faktorisasi prima
            let counts = {};
            primeFactors.forEach(x => { counts[x] = (counts[x] || 0) + 1; });
            let formattedPrime = Object.keys(counts).map(p => {
                return counts[p] > 1 ? `${p}<sup>${counts[p]}</sup>` : `${p}`;
            }).join(\' × \');

            if (num === 1) formattedPrime = "1 (bukan bilangan prima)";

            resBox.innerHTML = `
                • <strong>Faktor dari ${num}:</strong> <br><span style="color:#4f46e5;">${faktor.join(\', \')}</span> (Total: ${faktor.length} faktor)<br><br>
                • <strong>Faktorisasi Prima:</strong> <br><span style="color:#0891b2;">${formattedPrime}</span>
            `;
        }

        // 10 SOAL LATIHAN MATEMATIKA KELAS 7
        const questions = [
            {
                q: "1. Semua bilangan bulat positif yang dapat membagi habis suatu bilangan dinamakan...",
                options: ["A. Kelipatan bilangan", "B. Faktor bilangan", "C. Bilangan rasional", "D. Sisa pembagian"],
                ans: 1
            },
            {
                q: "2. Di antara pilihan berikut, manakah yang merupakan faktor lengkap dari 15?",
                options: ["A. 1, 3, 5, 15", "B. 1, 2, 3, 5, 15", "C. 3, 5, 10, 15", "D. 1, 5, 15, 30"],
                ans: 0
            },
            {
                q: "3. Banyaknya faktor positif dari bilangan 18 adalah...",
                options: ["A. 4", "B. 5", "C. 6", "D. 8"],
                ans: 2
            },
            {
                q: "4. Kelompok bilangan berikut yang seluruhnya merupakan bilangan prima adalah...",
                options: ["A. 2, 3, 5, 9", "B. 2, 3, 5, 7", "C. 1, 3, 5, 7", "D. 3, 5, 7, 15"],
                ans: 1
            },
            {
                q: "5. Faktor prima dari bilangan 30 adalah...",
                options: ["A. 2, 3, 5", "B. 1, 2, 3, 5", "C. 2, 3, 10", "D. 3, 5, 6"],
                ans: 0
            },
            {
                q: "6. Bentuk faktorisasi prima dari bilangan 36 yang benar adalah...",
                options: ["A. 2² × 3", "B. 2 × 3²", "C. 2² × 3²", "D. 2³ × 3"],
                ans: 2
            },
            {
                q: "7. Faktor persekutuan dari bilangan 12 dan 16 adalah...",
                options: ["A. 1, 2, 4", "B. 1, 2, 3, 4", "C. 1, 4, 8", "D. 2, 4, 6"],
                ans: 0
            },
            {
                q: "8. Faktorisasi prima dari 40 adalah...",
                options: ["A. 2² × 5", "B. 2³ × 5", "C. 2 × 5²", "D. 2² × 10"],
                ans: 1
            },
            {
                q: "9. Di antara bilangan 12, 15, 17, dan 20, manakah yang tergolong sebagai bilangan prima?",
                options: ["A. 12", "B. 15", "C. 17", "D. 20"],
                ans: 2
            },
            {
                q: "10. Faktor persekutuan dari bilangan 18 dan 24 adalah...",
                options: ["A. 1, 2, 3, 6", "B. 1, 2, 3, 4, 6", "C. 1, 3, 6, 9", "D. 2, 3, 6, 12"],
                ans: 0
            }
        ];

        let currentQ = 0;
        let userAnswers = new Array(questions.length).fill(null);

        function renderQuestion() {
            const q = questions[currentQ];
            document.getElementById(\'q-count\').innerText = `Soal ${currentQ + 1} dari ${questions.length}`;
            document.getElementById(\'question-text\').innerText = q.q;
            
            // Progress Bar
            const fill = ((currentQ + 1) / questions.length) * 100;
            document.getElementById(\'progress-fill\').style.width = fill + \'%\';

            // Options Handler
            const optsContainer = document.getElementById(\'options-container\');
            optsContainer.innerHTML = \'\';

            const chosenAns = userAnswers[currentQ];

            q.options.forEach((opt, idx) => {
                const btn = document.createElement(\'button\');
                btn.className = \'option-btn\';
                btn.innerText = opt;

                // Indikator Benar/Salah langsung pada pilihan pengguna
                if (chosenAns !== null && idx === chosenAns) {
                    if (chosenAns === q.ans) {
                        btn.classList.add(\'correct\'); // Hijau
                    } else {
                        btn.classList.add(\'wrong\');   // Merah
                    }
                }

                btn.onclick = () => selectOption(idx);
                optsContainer.appendChild(btn);
            });

            document.getElementById(\'prev-btn\').disabled = currentQ === 0;
            
            if (currentQ === questions.length - 1) {
                document.getElementById(\'next-btn\').innerText = \'Lihat Hasil 🏆\';
            } else {
                document.getElementById(\'next-btn\').innerText = \'Selanjutnya →\';
            }

            updateScore();
        }

        function selectOption(idx) {
            if (userAnswers[currentQ] !== null) return;
            userAnswers[currentQ] = idx;
            renderQuestion();
        }

        function nextQuestion() {
            if (currentQ < questions.length - 1) {
                currentQ++;
                renderQuestion();
            } else {
                showResult();
            }
        }

        function prevQuestion() {
            if (currentQ > 0) {
                currentQ--;
                renderQuestion();
            }
        }

        function updateScore() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const score = Math.round((correctCount / questions.length) * 100);
            document.getElementById(\'score-display\').innerText = `Skor: ${score}`;
        }

        function showResult() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const finalScore = Math.round((correctCount / questions.length) * 100);

            document.getElementById(\'quiz-card\').style.display = \'none\';
            document.getElementById(\'result-card\').style.display = \'block\';
            document.getElementById(\'final-score\').innerText = finalScore;

            let feedback = "";
            if (finalScore === 100) feedback = "Sempurna! Kamu memahami materi Faktor Bilangan dan Faktorisasi Prima dengan sangat baik!";
            else if (finalScore >= 80) feedback = "Sangat Baik! Pemahamanmu mengenai materi faktor dan faktorisasi prima sudah kuat.";
            else if (finalScore >= 60) feedback = "Cukup Baik. Pelajari lagi cara mencari faktor persekutuan dan faktorisasi prima ya!";
            else feedback = "Tetap semangat! Ulangi membaca materi pada tab Faktor Bilangan dan Faktorisasi Prima lalu coba lagi.";

            document.getElementById(\'score-feedback\').innerText = feedback;
        }

        function restartQuiz() {
            currentQ = 0;
            userAnswers = new Array(questions.length).fill(null);
            document.getElementById(\'quiz-card\').style.display = \'block\';
            document.getElementById(\'result-card\').style.display = \'none\';
            renderQuestion();
        }

        // Initialize
        renderQuestion();
    </script>
</body>
</html>',
                'created_at' => '2026-08-23 15:45:50',
                'updated_at' => '2026-08-23 15:52:50',
                'mapel' => 'Matematika',
                'kategori_modul' => 'modul',
            ),
            13 => 
            array (
                'id' => 20,
                'user_id' => 2,
                'kelas_id' => 3,
                'judul' => 'Latihan Faktor Bilangan',
                'deskripsi' => NULL,
                'tipe' => 'html',
                'file_path' => NULL,
                'url_video' => NULL,
                'konten_html' => '<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tryout Matematika Kelas 7: Faktor Bilangan & Faktorisasi Prima - Bimbel Brilliant</title>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --bg-base: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --success: #10b981;
            --danger: #ef4444;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: \'Segoe UI\', system-ui, -apple-system, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-base);
            color: var(--text-main);
            line-height: 1.6;
            padding-bottom: 60px;
        }

        header {
            background: linear-gradient(135deg, #4338ca 0%, #4f46e5 100%);
            color: white;
            padding: 35px 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        header h1 {
            font-size: 1.8rem;
            margin-bottom: 8px;
            font-weight: 800;
        }

        header p {
            font-size: 1rem;
            opacity: 0.9;
        }

        .container {
            max-width: 850px;
            margin: 30px auto;
            padding: 0 15px;
        }

        .card {
            background: var(--card-bg);
            border-radius: var(--radius);
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
        }

        .quiz-progress {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .question-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #0f172a;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option-btn {
            text-align: left;
            padding: 12px 16px;
            border: 2px solid var(--border-color);
            background: white;
            border-radius: 8px;
            font-size: 0.98rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .option-btn:hover {
            border-color: #a5b4fc;
            background: #f5f3ff;
        }

        .option-btn.selected {
            border-color: var(--primary);
            background: #e0e7ff;
            color: var(--primary-dark);
            font-weight: 600;
        }

        .quiz-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 24px;
        }

        .btn {
            padding: 10px 20px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: var(--primary-dark);
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .score-box {
            text-align: center;
            padding: 30px 20px;
        }

        .score-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 auto 20px;
        }

        /* Review Section Styles */
        .review-section {
            margin-top: 30px;
            text-align: left;
        }

        .review-card {
            background: #f8fafc;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .review-card.is-correct {
            border-left: 5px solid var(--success);
        }

        .review-card.is-wrong {
            border-left: 5px solid var(--danger);
        }

        .review-q {
            font-weight: 600;
            margin-bottom: 8px;
            color: #0f172a;
        }

        .review-ans {
            font-size: 0.95rem;
            margin-bottom: 4px;
        }

        .text-correct { color: var(--success); font-weight: 600; }
        .text-wrong { color: var(--danger); font-weight: 600; }

        .explanation-box {
            margin-top: 8px;
            padding: 10px 14px;
            background: #ffffff;
            border-radius: 6px;
            font-size: 0.9rem;
            color: #334155;
            border: 1px dashed #cbd5e1;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-muted);
            font-size: 0.9rem;
            border-top: 1px solid var(--border-color);
            margin-top: 40px;
            background: #ffffff;
        }

        footer strong {
            color: var(--primary);
        }
    </style>
</head>
<body>

    <header>
        <h1>Tryout Matematika Kelas 7</h1>
        <p>25 Soal Pilihan Ganda: Faktor Bilangan & Faktorisasi Prima • Pembahasan di Akhir Sesi</p>
    </header>

    <div class="container">
        <div class="card" id="quiz-card">
            <div class="quiz-progress">
                <span id="q-count">Soal 1 dari 25</span>
                <span id="answered-count">Terjawab: 0 / 25</span>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" id="progress-fill"></div>
            </div>

            <div>
                <div class="question-title" id="question-text">Memuat soal...</div>
                <div class="options-list" id="options-container"></div>
            </div>

            <div class="quiz-nav">
                <button class="btn" id="prev-btn" onclick="prevQuestion()" disabled>← Sebelumnya</button>
                <button class="btn" id="next-btn" onclick="nextQuestion()">Selanjutnya →</button>
            </div>
        </div>

        <!-- HASIL & PEMBAHASAN -->
        <div class="card score-box" id="result-card" style="display: none;">
            <h2>🎉 Tryout Selesai!</h2>
            <p style="margin-bottom: 20px; color: var(--text-muted);">Berikut adalah skor hasil ujian Anda:</p>
            <div class="score-circle" id="final-score">0</div>
            <p id="score-feedback" style="font-size: 1.1rem; margin-bottom: 25px;"></p>
            
            <button class="btn" onclick="restartQuiz()">🔄 Ulangi Tryout</button>

            <div class="review-section">
                <h3 style="margin-bottom: 16px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">📖 Pembahasan Lengkap 25 Soal</h3>
                <div id="review-container"></div>
            </div>
        </div>
    </div>

    <footer>
        Media Pembelajaran Matematika • Ditulis & Dipersembahkan oleh <strong>Bimbel Brilliant</strong>
    </footer>

    <script>
        const questions = [
            {
                q: "1. Semua bilangan bulat positif yang dapat membagi habis suatu bilangan tanpa sisa dinamakan...",
                options: ["A. Kelipatan bilangan", "B. Faktor bilangan", "C. Bilangan rasional", "D. Sisa pembagian"],
                ans: 1,
                exp: "Faktor bilangan adalah semua bilangan yang membagi habis suatu bilangan tanpa sisa."
            },
            {
                q: "2. Di antara kelompok bilangan berikut, manakah yang merupakan faktor lengkap dari 12?",
                options: ["A. 1, 2, 3, 4, 6, 12", "B. 1, 2, 3, 6, 12", "C. 2, 3, 4, 6", "D. 1, 2, 4, 6, 12"],
                ans: 0,
                exp: "Pasangan perkalian 12 adalah: 1x12, 2x6, 3x4. Jadi faktornya 1, 2, 3, 4, 6, 12."
            },
            {
                q: "3. Banyaknya faktor positif dari bilangan 20 adalah...",
                options: ["A. 4", "B. 5", "C. 6", "D. 8"],
                ans: 2,
                exp: "Faktor dari 20 adalah 1, 2, 4, 5, 10, dan 20. Total ada 6 faktor."
            },
            {
                q: "4. Di antara pilihan berikut, manakah bilangan yang BUKAN merupakan faktor dari 36?",
                options: ["A. 4", "B. 8", "C. 9", "D. 12"],
                ans: 1,
                exp: "36 tidak habis dibagi 8 (36 ÷ 8 = 4 bersisa 4)."
            },
            {
                q: "5. Bilangan bulat positif yang hanya memiliki tepat dua faktor (yaitu 1 dan dirinya sendiri) dinamakan...",
                options: ["A. Bilangan genap", "B. Bilangan ganjil", "C. Bilangan prima", "D. Bilangan komposit"],
                ans: 2,
                exp: "Bilangan prima adalah bilangan yang hanya memiliki dua faktor, yaitu 1 dan bilangan itu sendiri."
            },
            {
                q: "6. Manakah di antara kelompok berikut yang semuanya merupakan bilangan prima?",
                options: ["A. 2, 3, 5, 9", "B. 2, 3, 5, 7", "C. 1, 3, 5, 7", "D. 3, 5, 7, 15"],
                ans: 1,
                exp: "2, 3, 5, dan 7 semuanya bilangan prima. (9 dan 15 bukan bilangan prima, 1 bukan bilangan prima)."
            },
            {
                q: "7. Bilangan prima terkecil dan merupakan satu-satunya bilangan prima berstatus genap adalah...",
                options: ["A. 0", "B. 1", "C. 2", "D. 3"],
                ans: 2,
                exp: "2 adalah bilangan prima terkecil dan satu-satunya bilangan prima yang genap."
            },
            {
                q: "8. Di antara bilangan 15, 21, 23, dan 27, manakah yang tergolong sebagai bilangan prima?",
                options: ["A. 15", "B. 21", "C. 23", "D. 27"],
                ans: 2,
                exp: "23 hanya habis dibagi 1 dan 23, sehingga tergolong bilangan prima."
            },
            {
                q: "9. Faktor-faktor dari bilangan 30 yang berbentuk bilangan prima adalah...",
                options: ["A. 2, 3, 5", "B. 1, 2, 3, 5", "C. 2, 3, 10", "D. 3, 5, 6"],
                ans: 0,
                exp: "Faktor dari 30 adalah 1, 2, 3, 5, 6, 10, 15, 30. Yang merupakan bilangan prima adalah 2, 3, dan 5."
            },
            {
                q: "10. Pasangan faktor prima dari bilangan 42 adalah...",
                options: ["A. 2, 3, 5", "B. 2, 3, 7", "C. 3, 5, 7", "D. 2, 6, 7"],
                ans: 1,
                exp: "Faktorisasi 42 = 2 x 3 x 7, jadi faktor primanya adalah 2, 3, dan 7."
            },
            {
                q: "11. Mengubah suatu bilangan menjadi bentuk perkalian dari bilangan-bilangan prima dinamakan...",
                options: ["A. Pengurangan berulang", "B. Faktorisasi prima", "C. Kelipatan persekutuan", "D. Penjumlahan prima"],
                ans: 1,
                exp: "Faktorisasi prima adalah cara menyatakan bilangan dalam bentuk perkalian faktor-faktor primanya."
            },
            {
                q: "12. Bentuk faktorisasi prima dari bilangan 24 yang benar adalah...",
                options: ["A. 2² × 3", "B. 2³ × 3", "C. 2 × 3²", "D. 2² × 6"],
                ans: 1,
                exp: "24 ÷ 2 = 12; 12 ÷ 2 = 6; 6 ÷ 2 = 3. Maka 24 = 2³ × 3."
            },
            {
                q: "13. Bentuk faktorisasi prima dari bilangan 36 adalah...",
                options: ["A. 2² × 3²", "B. 2³ × 3", "C. 2 × 3³", "D. 4 × 9"],
                ans: 0,
                exp: "36 ÷ 2 = 18; 18 ÷ 2 = 9; 9 ÷ 3 = 3. Maka 36 = 2² × 3²."
            },
            {
                q: "14. Bentuk faktorisasi prima dari 50 adalah...",
                options: ["A. 2² × 5", "B. 2 × 5²", "C. 2² × 5²", "D. 5 × 10"],
                ans: 1,
                exp: "50 ÷ 2 = 25; 25 ÷ 5 = 5. Maka 50 = 2 × 5²."
            },
            {
                q: "15. Bentuk 2³ × 5 merupakan faktorisasi prima dari bilangan...",
                options: ["A. 30", "B. 40", "C. 50", "D. 60"],
                ans: 1,
                exp: "2³ × 5 = 8 × 5 = 40."
            },
            {
                q: "16. Bentuk 2 × 3² × 5 merupakan faktorisasi prima dari bilangan...",
                options: ["A. 60", "B. 72", "C. 90", "D. 120"],
                ans: 2,
                exp: "2 × 3² × 5 = 2 × 9 × 5 = 90."
            },
            {
                q: "17. Faktor-faktor yang bernilai sama dari dua bilangan atau lebih dinamakan...",
                options: ["A. Faktor persekutuan", "B. Kelipatan persekutuan", "C. Faktor prima", "D. Faktorisasi"],
                ans: 0,
                exp: "Faktor persekutuan adalah faktor yang sama dari dua bilangan atau lebih."
            },
            {
                q: "18. Faktor persekutuan dari bilangan 12 dan 18 adalah...",
                options: ["A. 1, 2, 3, 6", "B. 1, 2, 4, 6", "C. 1, 3, 6, 9", "D. 2, 3, 6, 12"],
                ans: 0,
                exp: "Faktor 12: 1, 2, 3, 4, 6, 12. Faktor 18: 1, 2, 3, 6, 9, 18. Yang sama: 1, 2, 3, 6."
            },
            {
                q: "19. Faktor persekutuan dari bilangan 15 dan 25 adalah...",
                options: ["A. 1, 3, 5", "B. 1, 5", "C. 1, 5, 25", "D. 5, 15"],
                ans: 1,
                exp: "Faktor 15: 1, 3, 5, 15. Faktor 25: 1, 5, 25. Yang sama: 1 dan 5."
            },
            {
                q: "20. Banyaknya faktor persekutuan dari bilangan 16 dan 24 adalah...",
                options: ["A. 3", "B. 4", "C. 5", "D. 6"],
                ans: 1,
                exp: "Faktor 16: 1, 2, 4, 8, 16. Faktor 24: 1, 2, 3, 4, 6, 8, 12, 24. Faktor persekutuannya: 1, 2, 4, 8 (ada 4)."
            },
            {
                q: "21. Jika A = 2² × 3 × 5, nilai dari A adalah...",
                options: ["A. 30", "B. 45", "C. 60", "D. 90"],
                ans: 2,
                exp: "A = 4 × 3 × 5 = 60."
            },
            {
                q: "22. Manakah bilangan di bawah ini yang memiliki faktorisasi prima 2⁴ × 3?",
                options: ["A. 24", "B. 36", "C. 48", "D. 64"],
                ans: 2,
                exp: "2⁴ × 3 = 16 × 3 = 48."
            },
            {
                q: "23. Jumlah seluruh faktor positif dari bilangan 6 (termasuk 1 dan 6) adalah...",
                options: ["A. 8", "B. 10", "C. 12", "D. 14"],
                ans: 2,
                exp: "Faktor dari 6 adalah 1, 2, 3, 6. Jumlahnya = 1 + 2 + 3 + 6 = 12."
            },
            {
                q: "24. Banyaknya faktor dari bilangan 32 adalah...",
                options: ["A. 4", "B. 5", "C. 6", "D. 8"],
                ans: 2,
                exp: "Faktor dari 32 adalah 1, 2, 4, 8, 16, 32. Total ada 6 faktor."
            },
            {
                q: "25. Bentuk faktorisasi prima dari 100 adalah...",
                options: ["A. 2² × 5²", "B. 2³ × 5", "C. 2 × 5³", "D. 4 × 25"],
                ans: 0,
                exp: "100 ÷ 2 = 50; 50 ÷ 2 = 25; 25 ÷ 5 = 5. Maka 100 = 2² × 5²."
            }
        ];

        let currentQ = 0;
        let userAnswers = new Array(questions.length).fill(null);

        function renderQuestion() {
            const q = questions[currentQ];
            document.getElementById(\'q-count\').innerText = `Soal ${currentQ + 1} dari ${questions.length}`;
            document.getElementById(\'question-text\').innerText = q.q;
            
            // Calculate answered progress
            const answeredNum = userAnswers.filter(a => a !== null).length;
            document.getElementById(\'answered-count\').innerText = `Terjawab: ${answeredNum} / ${questions.length}`;

            // Progress Bar
            const fill = ((currentQ + 1) / questions.length) * 100;
            document.getElementById(\'progress-fill\').style.width = fill + \'%\';

            // Options Handler
            const optsContainer = document.getElementById(\'options-container\');
            optsContainer.innerHTML = \'\';

            const chosenAns = userAnswers[currentQ];

            q.options.forEach((opt, idx) => {
                const btn = document.createElement(\'button\');
                btn.className = \'option-btn\';
                btn.innerText = opt;

                // Menandai opsi yang dipilih pengguna tanpa membocorkan kunci
                if (chosenAns !== null && idx === chosenAns) {
                    btn.classList.add(\'selected\');
                }

                btn.onclick = () => selectOption(idx);
                optsContainer.appendChild(btn);
            });

            document.getElementById(\'prev-btn\').disabled = currentQ === 0;
            
            if (currentQ === questions.length - 1) {
                document.getElementById(\'next-btn\').innerText = \'Lihat Hasil 🏆\';
            } else {
                document.getElementById(\'next-btn\').innerText = \'Selanjutnya →\';
            }
        }

        function selectOption(idx) {
            userAnswers[currentQ] = idx;
            renderQuestion();
        }

        function nextQuestion() {
            if (currentQ < questions.length - 1) {
                currentQ++;
                renderQuestion();
            } else {
                showResult();
            }
        }

        function prevQuestion() {
            if (currentQ > 0) {
                currentQ--;
                renderQuestion();
            }
        }

        function showResult() {
            let correctCount = 0;
            userAnswers.forEach((ans, idx) => {
                if (ans === questions[idx].ans) correctCount++;
            });
            const finalScore = Math.round((correctCount / questions.length) * 100);

            document.getElementById(\'quiz-card\').style.display = \'none\';
            document.getElementById(\'result-card\').style.display = \'block\';
            document.getElementById(\'final-score\').innerText = finalScore;

            let feedback = "";
            if (finalScore === 100) feedback = "Sempurna! Kamu menguasai materi Faktor Bilangan dan Faktorisasi Prima!";
            else if (finalScore >= 80) feedback = "Sangat Baik! Pemahamanmu mengenai faktor dan faktorisasi prima sudah sangat kuat.";
            else if (finalScore >= 60) feedback = "Cukup Baik. Pelajari kembali materi yang salah pada bagian pembahasan di bawah.";
            else feedback = "Jangan berkecil hati! Pelajari pembahasan di bawah ini dan coba lagi ya.";

            document.getElementById(\'score-feedback\').innerText = feedback;

            // Generate Review Section
            const reviewContainer = document.getElementById(\'review-container\');
            reviewContainer.innerHTML = \'\';

            questions.forEach((q, idx) => {
                const userChoice = userAnswers[idx];
                const isCorrect = userChoice === q.ans;

                const card = document.createElement(\'div\');
                card.className = `review-card ${isCorrect ? \'is-correct\' : \'is-wrong\'}`;

                const userText = userChoice !== null ? q.options[userChoice] : "Tidak Dijawab";
                const correctText = q.options[q.ans];

                card.innerHTML = `
                    <div class="review-q">${q.q}</div>
                    <div class="review-ans">
                        <strong>Jawaban Anda:</strong> 
                        <span class="${isCorrect ? \'text-correct\' : \'text-wrong\'}">${userText}</span>
                        ${isCorrect ? \' (BENAR)\' : \' (SALAH)\'}
                    </div>
                    ${!isCorrect ? `<div class="review-ans"><strong>Kunci Jawaban:</strong> <span class="text-correct">${correctText}</span></div>` : \'\'}
                    <div class="explanation-box">💡 <strong>Pembahasan:</strong> ${q.exp}</div>
                `;

                reviewContainer.appendChild(card);
            });
        }

        function restartQuiz() {
            currentQ = 0;
            userAnswers = new Array(questions.length).fill(null);
            document.getElementById(\'quiz-card\').style.display = \'block\';
            document.getElementById(\'result-card\').style.display = \'none\';
            renderQuestion();
        }

        // Initialize
        renderQuestion();
    </script>
</body>
</html>',
                'created_at' => '2026-08-23 15:56:41',
                'updated_at' => '2026-08-23 15:56:41',
                'mapel' => 'Matematika',
                'kategori_modul' => 'latihan',
            ),
        ));
        
        
    }
}