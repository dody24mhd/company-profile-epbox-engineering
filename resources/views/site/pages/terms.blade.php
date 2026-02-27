@extends('site.layouts.app')
@section('title','Terms of Service | EPBOX ENGINEERING PTE. LTD')
@section('content')
<!-- Hero: match About/Privacy style -->
<section class="about-hero pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 relative fade-section">
    <div class="interactive-bg">
        <div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
        <div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
        <div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
    </div>
    <!-- Particles Canvas Layer for Terms Hero -->
    <canvas id="termsParticles" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:1">
        Your browser doesn't support Canvas.
    </canvas>
    <div class="max-w-7xl mx-auto relative z-10 text-center mb-6">
        <h1 class="text-3xl md:text-5xl font-bold mb-2 section-title uppercase">Terms of Service</h1>
        <div class="w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto"></div>
        <div class="mt-2 text-sm">
            <a href="{{ route('site.privacy') }}" class="text-blue-400 hover:text-blue-300">See Privacy Policy</a>
        </div>
    </div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="max-w-3xl mx-auto">
            <div class="lg:min-h-[20rem]">
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 p-3 sm:p-6 rounded-lg">
                    <!-- Accordion container (Terms) -->
                    <div id="termsAccordion" class="space-y-4">
                        <!-- Introduction, Use of Website & User Responsibilities (merged) -->
                        <div id="item-use" class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'use')">
                                <span class="font-semibold text-white">Introduction, Use of Website & User Responsibilities</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-use" class="px-5 pt-10 pb-8 text-gray-300 space-y-5 text-justify hidden">
                                <p class="mb-3">These Terms of Service govern your use of EPBOX ENGINEERING’s website and associated materials or services. By accessing or using the site, you agree to comply with lawful, responsible practices: do not misuse features, disrupt operations, or attempt unauthorized access. Content is provided "as is" for general information and may change without notice. Avoid abusive or unlawful activity, do not bypass security or access non‑public resources, and respect any usage limits or technical restrictions. You remain responsible for the accuracy of information you provide and for safeguarding any accounts or credentials used to access our services.</p>
                            </div>
                        </div>

                        <!-- Intellectual Property & Disclaimers (merged) -->
                        <div id="item-ip" class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'ip')">
                                <span class="font-semibold text-white">Intellectual Property & Disclaimers</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-ip" class="px-5 pt-5 pb-6 text-gray-300 space-y-4 text-justify hidden">
                                <p>All content, trademarks, logos, and materials on the site are owned by EPBOX ENGINEERING or its licensors. You may not copy, modify, distribute, or create derivative works without prior written consent.</p>
                                <p>To the maximum extent permitted by law, we disclaim all warranties and are not liable for any indirect, incidental, or consequential damages arising from your use of the site.</p>
                            </div>
                        </div>

                        <!-- Third-Party Links -->
                        <div id="item-links" class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'links')">
                                <span class="font-semibold text-white">Third‑Party Links</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-links" class="px-5 pt-5 pb-6 text-gray-300 space-y-4 text-justify hidden">
                                <p>Third‑party websites linked from our site are not controlled by EPBOX ENGINEERING. We are not responsible for their content, policies, or practices.</p>
                            </div>
                        </div>

                        <!-- Governing Law & Jurisdiction -->
                        <div id="item-law" class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'law')">
                                <span class="font-semibold text-white">Governing Law & Jurisdiction</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-law" class="px-5 pt-5 pb-6 text-gray-300 space-y-4 text-justify hidden">
                                <p>These Terms are governed by the laws of Singapore. Any disputes will be subject to the exclusive jurisdiction of the courts of Singapore.</p>
                            </div>
                        </div>

                        <!-- Changes to Terms -->
                        <div id="item-updates" class="rounded-lg border border-white/20 bg-gray-900/40">
                            <button class="w-full text-left px-5 py-5 flex items-center justify-between" aria-expanded="false" onclick="toggleAccordion(event,'updates')">
                                <span class="font-semibold text-white">Changes to Terms</span>
                                <i class="fas fa-chevron-down text-gray-400"></i>
                            </button>
                            <div id="panel-updates" class="px-5 pt-5 pb-6 text-gray-300 space-y-4 text-justify hidden">
                                <p>We may update these Terms from time to time. Any changes will be posted on this page with the latest revision date.</p>
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
// Simple particles for Terms hero (matches Privacy/Home vibe)
(function(){
    const canvas = document.getElementById('termsParticles');
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
    setTimeout(init, 50);
})();
</script>
@endsection
