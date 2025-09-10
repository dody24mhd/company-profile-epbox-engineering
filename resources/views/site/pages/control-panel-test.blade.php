@extends('site.layouts.app')
@section('title','Control Panel 3D Test | Epbox Engineering')
@section('content')
<section class="relative min-h-screen overflow-hidden">
	<div id="app"></div>

	<div class="controls">
		<div class="control-group">
			<label>Camera Y Rotation: <span class="value" id="rotateYVal">0°</span></label>
			<input type="range" id="rotateY" min="-180" max="180" step="1" value="0">
		</div>
		<div class="control-group">
			<label>Camera X Rotation: <span class="value" id="rotateXVal">-10°</span></label>
			<input type="range" id="rotateX" min="-45" max="30" step="1" value="-10">
		</div>
		<div class="control-group">
			<label>Door Angle: <span class="value" id="doorAngleVal">0°</span></label>
			<input type="range" id="doorAngle" min="0" max="110" step="1" value="0">
		</div>
		<div class="control-group">
			<label>Indicator Brightness: <span class="value" id="indBrightVal">80%</span></label>
			<input type="range" id="indBright" min="0" max="100" step="5" value="80">
		</div>
		<div class="control-group">
			<label>Conveyor Speed: <span class="value" id="convSpeedVal">1.0x</span></label>
			<input type="range" id="convSpeed" min="0" max="300" step="10" value="100">
		</div>
	</div>

	<div class="help">
		<strong>Controls:</strong><br>
		• Drag to rotate view<br>
		• Scroll to zoom<br>
		• R: toggle auto-rotate
	</div>

	<style>
		* { margin: 0; padding: 0; box-sizing: border-box; }
		body { overflow: hidden; font-family: 'Courier New', monospace; }
		#app { width: 100vw; height: 100vh; background: radial-gradient(900px 600px at 50% 120%, #0b1b3a 0%, #060d1a 60%, #040914 100%); }
		.controls { position: fixed; top: 20px; left: 20px; background: rgba(10,15,25,0.85); backdrop-filter: blur(8px); padding: 20px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1); color: #e0e6ed; font-size: 12px; max-width: 280px; z-index: 100; }
		.control-group { margin-bottom: 15px; }
		.control-group:last-child { margin-bottom: 0; }
		label { display: block; margin-bottom: 5px; color: #9ca3af; font-weight: bold; }
		input[type="range"] { width: 100%; height: 4px; background: #374151; outline: none; border-radius: 2px; margin-bottom: 5px; }
		input[type="range"]::-webkit-slider-thumb { appearance: none; width: 14px; height: 14px; background: #60a5fa; cursor: pointer; border-radius: 50%; }
		input[type="range"]::-moz-range-thumb { width: 14px; height: 14px; background: #60a5fa; cursor: pointer; border-radius: 50%; border: none; }
		.value { color: #60a5fa; font-weight: bold; }
		.help { position: fixed; bottom: 20px; right: 20px; background: rgba(10,15,25,0.85); backdrop-filter: blur(8px); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); color: #9ca3af; font-size: 11px; max-width: 240px; z-index: 100; }
	</style>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

	<script>
		(function(){
			const container = document.getElementById('app');
			const scene = new THREE.Scene();
			scene.fog = new THREE.Fog(0x051022, 80, 450);

			const renderer = new THREE.WebGLRenderer({ antialias: true });
			renderer.setPixelRatio(window.devicePixelRatio);
			renderer.setSize(container.clientWidth, container.clientHeight);
			renderer.setClearColor(0x040a18);
			container.appendChild(renderer.domElement);

			const camera = new THREE.PerspectiveCamera(55, container.clientWidth / container.clientHeight, 0.1, 2000);
			camera.position.set(0, 30, 120);

			// Ground
			const groundGeo = new THREE.PlaneGeometry(600, 300);
			const groundMat = new THREE.MeshPhongMaterial({ color: 0x0b1f3a, shininess: 5, side: THREE.DoubleSide });
			const ground = new THREE.Mesh(groundGeo, groundMat);
			ground.rotation.x = -Math.PI / 2;
			ground.position.y = -1;
			scene.add(ground);

			// Control Panel line (3 cabinets)
			const line = new THREE.Group();
			scene.add(line);

			const steel = new THREE.MeshStandardMaterial({ color: 0x9aa3ad, metalness: 0.8, roughness: 0.35 });
			const darkSteel = new THREE.MeshStandardMaterial({ color: 0x5f6b78, metalness: 0.7, roughness: 0.45 });
			const plastic = new THREE.MeshStandardMaterial({ color: 0x1b2b45, metalness: 0.2, roughness: 0.8 });
			const glass = new THREE.MeshPhysicalMaterial({ color: 0x0d1b2a, metalness: 0, roughness: 0.2, transmission: 0.4, transparent: true, opacity: 0.7 });

			function createCabinet(x){
				const group = new THREE.Group();
				group.position.set(x, 0, 0);
				// body
				const body = new THREE.Mesh(new THREE.BoxGeometry(30, 60, 20), steel);
				body.position.y = 30;
				group.add(body);
				// base plinth
				const base = new THREE.Mesh(new THREE.BoxGeometry(32, 4, 22), darkSteel);
				base.position.y = 2;
				group.add(base);
				// door (hinged)
				const doorPivot = new THREE.Group();
				doorPivot.position.set(15.5, 30, 10.01); // right edge front
				const door = new THREE.Mesh(new THREE.BoxGeometry(31, 58, 0.6), glass);
				door.position.set(-15.5, 0, 0);
				doorPivot.add(door);
				// door handle (rod + knob)
				const handleMat = new THREE.MeshStandardMaterial({ color: 0xd7dee5, metalness: 0.8, roughness: 0.3 });
				const handleRod = new THREE.Mesh(new THREE.CylinderGeometry(0.5, 0.5, 10, 20), handleMat);
				handleRod.rotation.z = Math.PI/2;
				handleRod.position.set(-2.5, 0, 0.4);
				door.add(handleRod);
				const handleKnob = new THREE.Mesh(new THREE.CylinderGeometry(1.2, 1.2, 1.2, 24), handleMat);
				handleKnob.rotation.x = Math.PI/2;
				handleKnob.position.set(-7, 0, 0.4);
				door.add(handleKnob);
				// hinges
				const hingeMat = new THREE.MeshStandardMaterial({ color: 0x9199a3, metalness: 0.7, roughness: 0.4 });
				[20, 0, -20].forEach((y)=>{
					const hinge = new THREE.Mesh(new THREE.BoxGeometry(1.2, 4, 1), hingeMat);
					hinge.position.set(15.3, y, -0.4);
					group.add(hinge);
				});
				// HMI screen on door
				const hmi = new THREE.Mesh(new THREE.BoxGeometry(12, 9, 0.4), new THREE.MeshStandardMaterial({ color: 0x0b203a, emissive: 0x104a8e, emissiveIntensity: 0.2, roughness: 0.5 }));
				hmi.position.set(-8, 10, 0.35);
				door.add(hmi);
				// nameplate
				const nameplate = new THREE.Mesh(new THREE.BoxGeometry(10, 2, 0.3), new THREE.MeshStandardMaterial({ color: 0xbfc5cc, metalness: 0.6, roughness: 0.3 }));
				nameplate.position.set(-6, 25, 0.35);
				door.add(nameplate);
				// louvers (vent slots)
				const louverMat = new THREE.MeshStandardMaterial({ color: 0x6b7785, metalness: 0.5, roughness: 0.5 });
				for (let i=0;i<5;i++){
					const slot = new THREE.Mesh(new THREE.BoxGeometry(14, 0.4, 0.3), louverMat);
					slot.position.set(-8, -10 - i*3, 0.35);
					door.add(slot);
				}
				group.add(doorPivot);
				// inner racks
				for(let i=0;i<6;i++){
					const mod = new THREE.Mesh(new THREE.BoxGeometry(24, 6, 14), plastic);
					mod.position.set(0, 10 + i*8, 0);
					group.add(mod);
				}
				// indicator lights (R, Y, G)
				const indGroup = new THREE.Group();
				const colors = [0xff4757, 0xffd166, 0x2ed573];
				colors.forEach((c, idx)=>{
					const bulb = new THREE.Mesh(new THREE.SphereGeometry(1.6, 16, 16), new THREE.MeshStandardMaterial({ color: c, emissive: c, emissiveIntensity: 0.8, roughness: 0.4 }));
					bulb.position.set(-8 + idx*8, 61.5, 10.5);
					indGroup.add(bulb);
				});
				group.add(indGroup);
				// gland plate with cable glands (bottom)
				const glandPlate = new THREE.Mesh(new THREE.BoxGeometry(26, 0.8, 1), darkSteel);
				glandPlate.position.set(0, 4.5, -10.6);
				group.add(glandPlate);
				for(let i=0;i<6;i++){
					const gland = new THREE.Mesh(new THREE.CylinderGeometry(0.8, 0.8, 1.2, 16), new THREE.MeshStandardMaterial({ color: 0xc9d3dc, metalness: 0.8, roughness: 0.25 }));
					gland.rotation.x = Math.PI/2;
					gland.position.set(-10 + i*4, 5, -11.1);
					group.add(gland);
				}
				return { group, doorPivot, indGroup };
			}

			const cabinets = [
				createCabinet(-40),
				createCabinet(0),
				createCabinet(40)
			];
			cabinets.forEach(c=> line.add(c.group));

			// Buttons panel
			const panel = new THREE.Group();
			const panelPlate = new THREE.Mesh(new THREE.BoxGeometry(60, 6, 2), steel);
			panelPlate.position.set(0, 10, 26);
			panel.add(panelPlate);
			for(let i=0;i<8;i++){
				const btn = new THREE.Mesh(new THREE.CylinderGeometry(1.4, 1.4, 1.6, 24), new THREE.MeshStandardMaterial({ color: 0x60a5fa, emissive: 0x1e90ff, emissiveIntensity: 0.5 }));
				btn.rotation.x = Math.PI/2;
				btn.position.set(-24 + i*7, 12, 25);
				panel.add(btn);
			}
			// selector switches (rotary)
			for(let i=0;i<3;i++){
				const bezel = new THREE.Mesh(new THREE.CylinderGeometry(1.6, 1.6, 0.8, 24), new THREE.MeshStandardMaterial({ color: 0x2f3b4a, roughness: 0.7 }));
				bezel.rotation.x = Math.PI/2;
				bezel.position.set(-10 + i*10, 15, 25.5);
				panel.add(bezel);
				const knob = new THREE.Mesh(new THREE.BoxGeometry(0.6, 2.2, 0.6), new THREE.MeshStandardMaterial({ color: 0x9fb7d0, metalness: 0.3, roughness: 0.6 }));
				knob.position.set(-10 + i*10, 16, 25.6);
				panel.add(knob);
			}
			// emergency stop
			const estopBase = new THREE.Mesh(new THREE.CylinderGeometry(2.2, 2.2, 0.8, 32), new THREE.MeshStandardMaterial({ color: 0xffd54f, roughness: 0.6 }));
			estopBase.rotation.x = Math.PI/2;
			estopBase.position.set(24, 15, 25.6);
			panel.add(estopBase);
			const estop = new THREE.Mesh(new THREE.CylinderGeometry(2.4, 2.4, 1.6, 32), new THREE.MeshStandardMaterial({ color: 0xff3b30, emissive: 0x7a0c06, emissiveIntensity: 0.2 }));
			estop.rotation.x = Math.PI/2;
			estop.position.set(24, 16.2, 25.8);
			panel.add(estop);
			scene.add(panel);

			// Conveyor with moving crates
			const conveyor = new THREE.Mesh(new THREE.BoxGeometry(160, 2, 18), darkSteel);
			conveyor.position.set(0, 6, -40);
			scene.add(conveyor);
			const crates = [];
			for(let i=0;i<6;i++){
				const crate = new THREE.Mesh(new THREE.BoxGeometry(8, 6, 8), new THREE.MeshStandardMaterial({ color: 0x8fa7bf, metalness: 0.3, roughness: 0.6 }));
				crate.position.set(-70 + i*28, 9, -40);
				scene.add(crate);
				crates.push(crate);
			}

			// Lights
			const ambient = new THREE.AmbientLight(0x0f1f3d, 0.7);
			scene.add(ambient);
			const area = new THREE.DirectionalLight(0x9ecbff, 1.0);
			area.position.set(70, 120, 60);
			scene.add(area);

			// Camera orbit state
			let camRotY = 0; // deg
			let camRotX = -10; // deg
			let camDist = 140;
			let autoRotate = false;

			// UI refs
			const elRotY = document.getElementById('rotateY');
			const elRotYVal = document.getElementById('rotateYVal');
			const elRotX = document.getElementById('rotateX');
			const elRotXVal = document.getElementById('rotateXVal');
			const elDoor = document.getElementById('doorAngle');
			const elDoorVal = document.getElementById('doorAngleVal');
			const elBright = document.getElementById('indBright');
			const elBrightVal = document.getElementById('indBrightVal');
			const elConv = document.getElementById('convSpeed');
			const elConvVal = document.getElementById('convSpeedVal');

			function updateCamera(){
				const ry = THREE.Math.degToRad(camRotY);
				const rx = THREE.Math.degToRad(camRotX);
				const x = camDist * Math.sin(ry) * Math.cos(rx);
				const z = camDist * Math.cos(ry) * Math.cos(rx);
				const y = camDist * Math.sin(rx);
				camera.position.set(x, y, z);
				camera.lookAt(0, 20, 0);
			}

			function updateDoors(){
				const deg = parseFloat(elDoor.value);
				elDoorVal.textContent = deg + '°';
				const rad = THREE.Math.degToRad(deg);
				cabinets.forEach(c => { c.doorPivot.rotation.y = -rad; });
			}

			function updateIndicators(){
				const intensity = parseFloat(elBright.value)/100 * 1.2;
				elBrightVal.textContent = Math.round((intensity/1.2)*100) + '%';
				cabinets.forEach(c => {
					c.indGroup.children.forEach(mesh => { mesh.material.emissiveIntensity = intensity; });
				});
			}

			let convSpeed = 1.0;
			function updateConveyor(){
				convSpeed = parseFloat(elConv.value)/100; // 0..3
				elConvVal.textContent = convSpeed.toFixed(1) + 'x';
			}

			// Bind sliders
			elRotY.addEventListener('input', ()=>{ camRotY = parseFloat(elRotY.value); elRotYVal.textContent = camRotY + '°'; updateCamera(); });
			elRotX.addEventListener('input', ()=>{ camRotX = parseFloat(elRotX.value); elRotXVal.textContent = camRotX + '°'; updateCamera(); });
			elDoor.addEventListener('input', updateDoors);
			elBright.addEventListener('input', updateIndicators);
			elConv.addEventListener('input', updateConveyor);

			// Mouse drag orbit
			let dragging=false,lastX=0,lastY=0;
			container.addEventListener('mousedown', (e)=>{ dragging=true; lastX=e.clientX; lastY=e.clientY; });
			window.addEventListener('mouseup', ()=> dragging=false);
			window.addEventListener('mousemove', (e)=>{
				if(!dragging) return;
				const dx=e.clientX-lastX, dy=e.clientY-lastY;
				camRotY += dx*0.2; camRotX += -dy*0.15; camRotX = Math.max(-80, Math.min(80, camRotX));
				elRotY.value = camRotY; elRotYVal.textContent = Math.round(camRotY)+'°';
				elRotX.value = camRotX; elRotXVal.textContent = Math.round(camRotX)+'°';
				updateCamera(); lastX=e.clientX; lastY=e.clientY;
			});

			// Scroll zoom
			container.addEventListener('wheel', (e)=>{ e.preventDefault(); camDist += e.deltaY*0.1; camDist = Math.max(60, Math.min(240, camDist)); updateCamera(); }, { passive:false });

			// R toggles auto-rotate
			window.addEventListener('keydown', (e)=>{ if (e.key.toLowerCase()==='r') autoRotate=!autoRotate; });

			function onResize(){
				const w = container.clientWidth, h = container.clientHeight;
				camera.aspect = w / h; camera.updateProjectionMatrix();
				renderer.setSize(w, h);
			}
			window.addEventListener('resize', onResize);

			// init
			updateCamera(); updateDoors(); updateIndicators(); updateConveyor();

			function animate(time){
				requestAnimationFrame(animate);
				if (autoRotate) { camRotY += 0.1; elRotY.value = camRotY; elRotYVal.textContent = Math.round(camRotY)+'°'; updateCamera(); }
				// move crates along conveyor
				const speed = 0.2 * convSpeed;
				crates.forEach((c,i)=>{
					c.position.x += speed;
					if (c.position.x > 85) c.position.x = -85;
				});
				renderer.render(scene, camera);
			}
			requestAnimationFrame(animate);
		})();
	</script>
</section>
@endsection

