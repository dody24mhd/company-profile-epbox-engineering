@extends('site.layouts.app')
@section('title','Three.js City Test | Epbox Engineering')
@section('content')
<section class="relative min-h-screen overflow-hidden">
    <div id="app"></div>

    <div class="controls">
        <div class="control-group">
            <label>Camera Y Rotation: <span class="value" id="rotateYVal">0°</span></label>
            <input type="range" id="rotateY" min="-180" max="180" step="1" value="0">
        </div>
        <div class="control-group">
            <label>Camera X Rotation: <span class="value" id="rotateXVal">-5°</span></label>
            <input type="range" id="rotateX" min="-25" max="20" step="1" value="-5">
        </div>
        <div class="control-group">
            <label>City Scale: <span class="value" id="cityScaleVal">100%</span></label>
            <input type="range" id="cityScale" min="50" max="150" step="5" value="100">
        </div>
        <div class="control-group">
            <label>Moon Azimuth: <span class="value" id="moonAzVal">45°</span></label>
            <input type="range" id="moonAz" min="0" max="360" step="1" value="45">
        </div>
        <div class="control-group">
            <label>Moon Elevation: <span class="value" id="moonElVal">32°</span></label>
            <input type="range" id="moonEl" min="5" max="85" step="1" value="32">
        </div>
    </div>

    <div class="help">
        <strong>Controls:</strong><br>
        • Drag to rotate view<br>
        • Scroll to zoom<br>
        • Arrow keys: move moon<br>
        • R: toggle auto-rotate
    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
            font-family: 'Courier New', monospace;
        }

        #app {
            width: 100vw;
            height: 100vh;
            background: radial-gradient(1200px 600px at 50% 120%, #0b1b3a 0%, #060d1a 60%, #040914 100%);
        }

        .controls {
            position: fixed;
            top: 20px;
            left: 20px;
            background: rgba(10, 15, 25, 0.85);
            backdrop-filter: blur(8px);
            padding: 20px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #e0e6ed;
            font-size: 12px;
            max-width: 280px;
            z-index: 100;
        }

        .control-group {
            margin-bottom: 15px;
        }

        .control-group:last-child {
            margin-bottom: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #9ca3af;
            font-weight: bold;
        }

        input[type="range"] {
            width: 100%;
            height: 4px;
            background: #374151;
            outline: none;
            border-radius: 2px;
            margin-bottom: 5px;
        }

        input[type="range"]::-webkit-slider-thumb {
            appearance: none;
            width: 14px;
            height: 14px;
            background: #60a5fa;
            cursor: pointer;
            border-radius: 50%;
        }

        input[type="range"]::-moz-range-thumb {
            width: 14px;
            height: 14px;
            background: #60a5fa;
            cursor: pointer;
            border-radius: 50%;
            border: none;
        }

        .value {
            color: #60a5fa;
            font-weight: bold;
        }

        .help {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgba(10, 15, 25, 0.85);
            backdrop-filter: blur(8px);
            padding: 15px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #9ca3af;
            font-size: 11px;
            max-width: 220px;
            z-index: 100;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <script>
        (function() {
            const container = document.getElementById('app');
            const scene = new THREE.Scene();
            scene.fog = new THREE.Fog(0x051022, 80, 450);

            const renderer = new THREE.WebGLRenderer({
                antialias: true
            });
            renderer.setPixelRatio(window.devicePixelRatio);
            renderer.setSize(container.clientWidth, container.clientHeight);
            renderer.setClearColor(0x040a18);
            container.appendChild(renderer.domElement);

            const camera = new THREE.PerspectiveCamera(55, container.clientWidth / container.clientHeight, 0.1, 2000);
            camera.position.set(0, 45, 140);

            // City group
            const city = new THREE.Group();
            scene.add(city);

            // Ground
            const groundGeo = new THREE.PlaneGeometry(1000, 1000);
            const groundMat = new THREE.MeshPhongMaterial({
                color: 0x0b1f3a,
                shininess: 5,
                side: THREE.DoubleSide
            });
            const ground = new THREE.Mesh(groundGeo, groundMat);
            ground.rotation.x = -Math.PI / 2;
            ground.position.y = -1;
            ground.receiveShadow = true;
            scene.add(ground);

            // City buildings
            const buildingMat = new THREE.MeshStandardMaterial({
                color: 0x1f3b64,
                metalness: 0.6,
                roughness: 0.35
            });
            const emissiveMat = new THREE.MeshStandardMaterial({
                color: 0x13233f,
                emissive: 0x2a87ff,
                emissiveIntensity: 0.25,
                metalness: 0.2,
                roughness: 0.6
            });
            const rng = (min, max) => Math.random() * (max - min) + min;
            const grid = 18;
            const spacing = 10;
            for (let i = -grid; i <= grid; i++) {
                for (let j = -grid; j <= grid; j++) {
                    if (Math.random() < 0.2) continue; // gaps
                    const w = rng(4, 6);
                    const d = rng(4, 6);
                    const h = rng(6, 42);
                    const geo = new THREE.BoxGeometry(w, h, d);
                    const mat = Math.random() > 0.7 ? emissiveMat : buildingMat;
                    const mesh = new THREE.Mesh(geo, mat);
                    mesh.position.set(i * spacing + rng(-1, 1), h / 2, j * spacing + rng(-1, 1));
                    city.add(mesh);
                }
            }

            // Lights
            const ambient = new THREE.AmbientLight(0x0f1f3d, 0.6);
            scene.add(ambient);

            const dirLight = new THREE.DirectionalLight(0x9ecbff, 1.0);
            dirLight.position.set(80, 120, 40);
            dirLight.castShadow = false;
            scene.add(dirLight);

            // Moon (as emissive sphere) + helper group to position by az/el
            const moonGroup = new THREE.Group();
            scene.add(moonGroup);
            const moonGeo = new THREE.SphereGeometry(6, 32, 32);
            const moonMat = new THREE.MeshStandardMaterial({
                color: 0xdfefff,
                emissive: 0xbcd8ff,
                emissiveIntensity: 0.9,
                roughness: 0.4,
                metalness: 0.1
            });
            const moon = new THREE.Mesh(moonGeo, moonMat);
            moonGroup.add(moon);

            // Secondary light to simulate moonlight direction
            const moonLight = new THREE.PointLight(0xbfdcff, 1.4, 600, 2);
            moonGroup.add(moonLight);

            // Camera orbit state
            let camRotY = 0; // deg
            let camRotX = -5; // deg
            let camDist = 140;
            let cityScale = 1.0;
            let autoRotate = false;

            // Controls: sliders
            const elRotY = document.getElementById('rotateY');
            const elRotYVal = document.getElementById('rotateYVal');
            const elRotX = document.getElementById('rotateX');
            const elRotXVal = document.getElementById('rotateXVal');
            const elCityScale = document.getElementById('cityScale');
            const elCityScaleVal = document.getElementById('cityScaleVal');
            const elMoonAz = document.getElementById('moonAz');
            const elMoonAzVal = document.getElementById('moonAzVal');
            const elMoonEl = document.getElementById('moonEl');
            const elMoonElVal = document.getElementById('moonElVal');

            function updateCamera() {
                const ry = THREE.Math.degToRad(camRotY);
                const rx = THREE.Math.degToRad(camRotX);
                const x = camDist * Math.sin(ry) * Math.cos(rx);
                const z = camDist * Math.cos(ry) * Math.cos(rx);
                const y = camDist * Math.sin(rx);
                camera.position.set(x, y, z);
                camera.lookAt(0, 12, 0);
            }

            function updateMoon() {
                const az = THREE.Math.degToRad(parseFloat(elMoonAz.value));
                const el = THREE.Math.degToRad(parseFloat(elMoonEl.value));
                const r = 160;
                const x = r * Math.cos(el) * Math.cos(az);
                const z = r * Math.cos(el) * Math.sin(az);
                const y = r * Math.sin(el);
                moonGroup.position.set(x, y, z);
                moon.lookAt(0, 0, 0);
                // also point directional light to city
                dirLight.position.set(x, y, z);
                dirLight.target.position.set(0, 20, 0);
                scene.add(dirLight.target);
            }

            // Slider bindings
            elRotY.addEventListener('input', () => {
                camRotY = parseFloat(elRotY.value);
                elRotYVal.textContent = camRotY + '°';
                updateCamera();
            });
            elRotX.addEventListener('input', () => {
                camRotX = parseFloat(elRotX.value);
                elRotXVal.textContent = camRotX + '°';
                updateCamera();
            });
            elCityScale.addEventListener('input', () => {
                cityScale = parseFloat(elCityScale.value) / 100;
                elCityScaleVal.textContent = Math.round(cityScale * 100) + '%';
                city.scale.setScalar(cityScale);
            });
            elMoonAz.addEventListener('input', () => {
                elMoonAzVal.textContent = elMoonAz.value + '°';
                updateMoon();
            });
            elMoonEl.addEventListener('input', () => {
                elMoonElVal.textContent = elMoonEl.value + '°';
                updateMoon();
            });

            // Mouse drag to orbit
            let dragging = false;
            let lastX = 0,
                lastY = 0;
            container.addEventListener('mousedown', (e) => {
                dragging = true;
                lastX = e.clientX;
                lastY = e.clientY;
            });
            window.addEventListener('mouseup', () => dragging = false);
            window.addEventListener('mousemove', (e) => {
                if (!dragging) return;
                const dx = e.clientX - lastX;
                const dy = e.clientY - lastY;
                camRotY += dx * 0.2;
                camRotX += -dy * 0.15;
                camRotX = Math.max(-80, Math.min(80, camRotX));
                elRotY.value = camRotY;
                elRotYVal.textContent = Math.round(camRotY) + '°';
                elRotX.value = camRotX;
                elRotXVal.textContent = Math.round(camRotX) + '°';
                updateCamera();
                lastX = e.clientX;
                lastY = e.clientY;
            });

            // Scroll to zoom
            container.addEventListener('wheel', (e) => {
                e.preventDefault();
                camDist += e.deltaY * 0.1;
                camDist = Math.max(60, Math.min(260, camDist));
                updateCamera();
            }, {
                passive: false
            });

            // Arrow keys to move moon; R toggles auto-rotate
            window.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    elMoonAz.value = (parseFloat(elMoonAz.value) - 3 + 360) % 360;
                    elMoonAz.dispatchEvent(new Event('input'));
                }
                if (e.key === 'ArrowRight') {
                    elMoonAz.value = (parseFloat(elMoonAz.value) + 3) % 360;
                    elMoonAz.dispatchEvent(new Event('input'));
                }
                if (e.key === 'ArrowUp') {
                    elMoonEl.value = Math.min(85, parseFloat(elMoonEl.value) + 2);
                    elMoonEl.dispatchEvent(new Event('input'));
                }
                if (e.key === 'ArrowDown') {
                    elMoonEl.value = Math.max(5, parseFloat(elMoonEl.value) - 2);
                    elMoonEl.dispatchEvent(new Event('input'));
                }
                if (e.key.toLowerCase() === 'r') {
                    autoRotate = !autoRotate;
                }
            });

            // Stars background
            (function makeStars() {
                const starGeo = new THREE.BufferGeometry();
                const starCount = 1200;
                const positions = new Float32Array(starCount * 3);
                for (let i = 0; i < starCount; i++) {
                    const r = 900 * (0.7 + Math.random() * 0.3);
                    const theta = Math.random() * Math.PI * 2;
                    const phi = Math.acos(2 * Math.random() - 1);
                    positions[i * 3 + 0] = r * Math.sin(phi) * Math.cos(theta);
                    positions[i * 3 + 1] = r * Math.cos(phi);
                    positions[i * 3 + 2] = r * Math.sin(phi) * Math.sin(theta);
                }
                starGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
                const starMat = new THREE.PointsMaterial({
                    color: 0x9cc9ff,
                    size: 1.2,
                    sizeAttenuation: true,
                    transparent: true,
                    opacity: 0.9
                });
                scene.add(new THREE.Points(starGeo, starMat));
            })();

            function onResize() {
                const w = container.clientWidth,
                    h = container.clientHeight;
                camera.aspect = w / h;
                camera.updateProjectionMatrix();
                renderer.setSize(w, h);
            }
            window.addEventListener('resize', onResize);

            // init values
            updateCamera();
            updateMoon();

            function animate() {
                requestAnimationFrame(animate);
                if (autoRotate) {
                    camRotY += 0.1;
                    elRotY.value = camRotY;
                    elRotYVal.textContent = Math.round(camRotY) + '°';
                    updateCamera();
                }
                renderer.render(scene, camera);
            }
            animate();
        })();
    </script>
</section>
@endsection