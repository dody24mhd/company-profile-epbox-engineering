@extends('site.layouts.app')
@section('title','Privacy Policy | EPBOX ENGINEERING PTE. LTD')
@section('content')
<!-- Hero: match About style -->
<section class="about-hero pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 relative fade-section">
    <style>
        /* Improve justified text spacing with hyphenation */
        .justify-tidy { text-align: justify; text-justify: inter-word; hyphens: auto; -webkit-hyphens: auto; -ms-hyphens: auto; word-spacing: normal; }
    </style>
    <div class="interactive-bg">
        <div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
        <div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
        <div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
    </div>
    <!-- Particles Canvas Layer for Privacy Hero -->
    <canvas id="privacyParticles" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:1">
        Your browser doesn't support Canvas.
    </canvas>
    <div class="max-w-7xl mx-auto relative z-10 text-center mb-6">
        <h1 class="text-3xl md:text-5xl font-bold mb-2 section-title uppercase">Privacy Policy</h1>
        <div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto"></div>
        <div class="mt-2 text-sm">
            <a href="{{ route('site.terms') }}" class="text-blue-400 hover:text-blue-300">See Terms of Service</a>
        </div>
    </div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="max-w-3xl mx-auto">
            <div class="lg:min-h-[20rem]">
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-3 sm:p-6 rounded-lg">
                    <!-- Accordion container -->
                    <div id="privacyAccordion" class="space-y-4">
                        <!-- Intro + PDPA (merged, closed by default) -->
                        <div id="item-intro" class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'intro')">
                                <span class="font-semibold text-white">Introduction & PDPA Compliance</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-intro" class="px-5 pb-6 text-gray-300 space-y-4 justify-tidy hidden">
                                <p>EPBOX ENGINEERING (“we”, “our”, or “us”) is committed to protecting the privacy of visitors to our website. This Privacy Policy explains how we collect, use, and safeguard information when you interact with our website. By accessing or using our website, you agree to the terms of this Privacy Policy.</p>
                                <p>We comply with Singapore’s Personal Data Protection Act 2012 (PDPA). You may withdraw consent to the collection, use, or disclosure of your personal data at any time by contacting us. We will process such requests in line with statutory requirements and our internal governance procedures.</p>
                            </div>
                        </div>

                        <!-- Collect + Use (merged) -->
                        <div class="rounded-lg border border-white/20 bg-gray-900/40" id="item-data">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'data')">
                                <span class="font-semibold text-white">Information We Collect & How We Use It</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-data" class="px-6 pt-2 pb-7 text-gray-300 space-y-5 justify-tidy hidden">
                                <p>We collect data you provide directly and information gathered automatically to deliver services, improve communications, and maintain a secure, reliable experience.</p>
                                <ul class="list-disc ml-7 mt-1 space-y-3">
                                    <li>Personal details you submit (name, email, phone, company) via contact and download forms.</li>
                                    <li>Download‑related inputs (e.g., catalog requests) to follow up with relevant opportunities.</li>
                                    <li>Non‑personal analytics (IP, browser, cookies) to monitor performance and usability.</li>
                                </ul>
                                <p class="mt-2">We use this information to respond to inquiries, process requests, improve our website and services, and—only with your consent—send updates or promotional materials.</p>
                            </div>
                        </div>

                        <!-- Sharing + Security + Rights (merged) -->
                        <div class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'safeguards')">
                                <span class="font-semibold text-white">Data Sharing, Security & Your Rights</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-safeguards" class="px-5 pb-6 text-gray-300 space-y-4 justify-tidy hidden">
                                <p>We do not sell, trade, or rent personal information. Where sharing is necessary, data is disclosed only to trusted partners or service providers bound by confidentiality and data protection obligations, and strictly for business purposes.</p>
                                <p>We implement reasonable technical and organizational measures to protect personal data against unauthorized access, alteration, disclosure, or destruction. These safeguards include access controls, network security, encryption where appropriate, and staff awareness protocols.</p>
                                <p>You have the right to access your personal data, request corrections or deletion, and withdraw consent for its use. To exercise these rights, please contact us; we will respond within a reasonable period and in accordance with PDPA requirements.</p>
                            </div>
                        </div>

                        <!-- AI -->
                        <div class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'ai')">
                                <span class="font-semibold text-white">Chatbot & Artificial Intelligence Usage</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-ai" class="px-5 pb-6 text-gray-300 space-y-4 justify-tidy hidden">
                                <p>Our website includes an AI-powered chatbot designed to assist visitors with inquiries and provide information. While using the chatbot, you may provide personal details (such as your name, email, or company). These details will be processed in compliance with the Personal Data Protection Act (PDPA) of Singapore and used solely for communication and service purposes. The chatbot may use third-party AI services, and in such cases, reasonable measures are taken to ensure your data is protected.</p>
                            </div>
                        </div>

                        <!-- Cookies -->
                        <div class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'cookies')">
                                <span class="font-semibold text-white">Cookies & Analytics</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-cookies" class="px-5 pb-6 text-gray-300 space-y-4 justify-tidy hidden">
                                <p>We may use lightweight analytics to understand site performance and usage. You can control cookies through your browser settings.</p>
                            </div>
                        </div>

                        <!-- Updates -->
                        <div class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'updates')">
                                <span class="font-semibold text-white">Policy Updates</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-updates" class="px-5 pb-6 text-gray-300 space-y-4 justify-tidy hidden">
                                <p>This Privacy Policy may be updated periodically. Any changes will be posted on this page with the latest revision date.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sr-only" aria-live="polite"></div>
    </section>
<script>
function toggleAccordion(e, id){ if(e&&e.preventDefault) e.preventDefault(); const panel=document.getElementById('panel-'+id); const item=document.getElementById('item-'+id); if(!panel) return; const expanded = !panel.classList.contains('hidden'); panel.classList.toggle('hidden'); const btn = item ? item.querySelector('button') : null; if(btn){ btn.setAttribute('aria-expanded', (!expanded).toString()); }
}
function openAccordion(e, id){ if(e&&e.preventDefault) e.preventDefault(); const panel=document.getElementById('panel-'+id); const item=document.getElementById('item-'+id); if(!panel) return; panel.classList.remove('hidden'); const btn = item ? item.querySelector('button') : null; if(btn){ btn.setAttribute('aria-expanded','true'); }
    const anchor = document.getElementById(id); if(anchor){ anchor.scrollIntoView({behavior:'smooth', block:'start'}); }
}
</script>
<script>
// Simple particles for Privacy hero (matches home vibe)
(function(){
    const canvas = document.getElementById('privacyParticles');
    if(!canvas) return;
    const ctx = canvas.getContext('2d');
    let width, height, particles = [], rafId;

    function resize(){
        width = canvas.clientWidth; height = canvas.clientHeight;
        const dpr = window.devicePixelRatio || 1;
        canvas.width = Math.floor(width * dpr);
        canvas.height = Math.floor(height * dpr);
        ctx.setTransform(dpr,0,0,dpr,0,0);
    }

    function createParticles(count){
        particles = Array.from({length: count}, ()=>({
            x: Math.random()*width,
            y: Math.random()*height,
            vx: (Math.random()-0.5)*0.8,
            vy: (Math.random()-0.5)*0.8,
            r: Math.random()*2 + 1,
            alpha: Math.random()*0.6 + 0.2
        }));
    }

    function step(){
        ctx.clearRect(0,0,width,height);
        // draw lines
        for(let i=0;i<particles.length;i++){
            const p = particles[i];
            for(let j=i+1;j<particles.length;j++){
                const q = particles[j];
                const dx=p.x-q.x, dy=p.y-q.y, dist = Math.hypot(dx,dy);
                if(dist < 120){
                    ctx.strokeStyle = `rgba(59,130,246,${(120-dist)/120 * 0.25})`;
                    ctx.lineWidth = 1;
                    ctx.beginPath(); ctx.moveTo(p.x,p.y); ctx.lineTo(q.x,q.y); ctx.stroke();
                }
            }
        }
        // draw particles
        for(const p of particles){
            p.x += p.vx; p.y += p.vy;
            if(p.x<0||p.x>width) p.vx*=-1;
            if(p.y<0||p.y>height) p.vy*=-1;
            ctx.fillStyle = `rgba(148,163,184,${p.alpha})`;
            ctx.beginPath(); ctx.arc(p.x,p.y,p.r,0,Math.PI*2); ctx.fill();
        }
        rafId = requestAnimationFrame(step);
    }

    function init(){
        resize();
        createParticles(Math.min(Math.floor((width*height)/20000), 80));
        cancelAnimationFrame(rafId); step();
    }

    window.addEventListener('resize', init);
    // delay init until after fonts load and layout settles
    setTimeout(init, 50);
})();
</script>
@endsection
