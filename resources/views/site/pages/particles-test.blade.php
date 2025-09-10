@extends('site.layouts.app')
@section('title','Particles Test | Epbox Engineering')
@section('content')
<section class="relative min-h-screen pt-24 overflow-hidden">
	<!-- particles.js container -->
	<div id="particles-js" class="absolute inset-0"></div>

	<!-- stats - count particles -->
	<div class="count-particles"> <span class="js-count-particles">--</span> particles </div>

	<!-- Content overlay (optional) -->
	<div class="relative z-10 max-w-3xl mx-auto text-center mt-24 px-6">
		<h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Particles.js Modeling Test</h1>
		<p class="text-gray-200">This page demonstrates the particles.js configuration with hover and click interactions.</p>
	</div>

	<!-- Inline styles specific to this page -->
	<style>
		/* ---- reset ---- */
		canvas { display: block; vertical-align: bottom; }
		/* ---- particles.js container ---- */
		#particles-js { position: absolute; width: 100%; height: 100%; background-color: #0b1b3a; background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; }
		/* ---- stats.js ---- */
		.count-particles { background: #000022; position: absolute; top: 48px; left: 0; width: 100px; color: #13E8E9; font-size: .8em; text-align: left; text-indent: 8px; line-height: 18px; padding: 4px 0; font-family: Helvetica, Arial, sans-serif; font-weight: bold; z-index: 20; }
		.js-count-particles { font-size: 1.1em; }
	</style>

	<!-- particles.js lib -->
	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
	<!-- stats.js lib -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/stats.js/r17/Stats.min.js"></script>

	<script>
		// ---- particles.js config ----
		particlesJS("particles-js", {
			"particles": {
				"number": { "value": 380, "density": { "enable": true, "value_area": 800 } },
				"color": { "value": "#ffffff" },
				"shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" }, "polygon": { "nb_sides": 5 } },
				"opacity": { "value": 0.5, "random": false, "anim": { "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false } },
				"size": { "value": 3, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } },
				"line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 },
				"move": { "enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false, "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } }
			},
			"interactivity": {
				"detect_on": "canvas",
				"events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": true, "mode": "push" }, "resize": true },
				"modes": {
					"grab": { "distance": 140, "line_linked": { "opacity": 1 } },
					"bubble": { "distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3 },
					"repulse": { "distance": 200, "duration": 0.4 },
					"push": { "particles_nb": 4 },
					"remove": { "particles_nb": 2 }
				}
			},
			"retina_detect": true
		});

		// ---- stats.js config ----
		var count_particles, stats, update;
		stats = new Stats();
		stats.setMode(0);
		stats.domElement.style.position = 'absolute';
		stats.domElement.style.left = '0px';
		stats.domElement.style.top = '0px';
		stats.domElement.style.zIndex = '20';
		document.body.appendChild(stats.domElement);
		count_particles = document.querySelector('.js-count-particles');
		update = function() {
			stats.begin();
			stats.end();
			if (window.pJSDom && window.pJSDom[0] && window.pJSDom[0].pJS && window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
				count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
			}
			requestAnimationFrame(update);
		};
		requestAnimationFrame(update);
	</script>
</section>
@endsection

