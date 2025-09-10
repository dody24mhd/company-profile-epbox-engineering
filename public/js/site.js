// Hide page loader on full load
window.addEventListener('load', function () {
    const loader = document.getElementById('page-loader');
    if (loader) {
        loader.classList.add('hidden');
        setTimeout(() => {
            if (loader && loader.parentNode) loader.parentNode.removeChild(loader);
        }, 350);
    }
});

// Navbar scroll effect
window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Mobile menu toggle with animation
document.getElementById('menu-toggle').addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    const button = this;

    menu.classList.toggle('hidden');
    button.classList.toggle('active');

    if (!menu.classList.contains('hidden')) {
        setTimeout(() => menu.classList.add('show'), 10);
    } else {
        menu.classList.remove('show');
    }
});

// Active link highlighting
const navLinks = document.querySelectorAll('.nav-link');
const sections = document.querySelectorAll('section[id]');

function highlightActiveSection() {
    const scrollPos = window.scrollY + 100;

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id');

        if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${sectionId}`) {
                    link.classList.add('active');
                }
            });
        }
    });
}

window.addEventListener('scroll', highlightActiveSection);
highlightActiveSection(); // Run on page load

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        if (targetId === '#') return;

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 80,
                behavior: 'smooth'
            });

            // Close mobile menu if open
            const mobileMenu = document.getElementById('mobile-menu');
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        }
    });
});

// Chat box function
function scrollToContact() {
    const contactSection = document.querySelector('#contact');
    if (contactSection) {
        window.scrollTo({
            top: contactSection.offsetTop - 80,
            behavior: 'smooth'
        });
    }
}

// Toggle chat popup
function toggleChat() {
    const popup = document.getElementById('chatPopup');
    popup.classList.toggle('show');
}

// Send message function
function sendMessage() {
    const message = document.getElementById('chatMessage').value;
    if (message.trim()) {
        // Here you can add actual chat functionality
        alert('Thank you for your message! We will get back to you soon.');
        document.getElementById('chatMessage').value = '';
        toggleChat();
    }
}

// Close popup when clicking outside
document.addEventListener('click', function (event) {
    const popup = document.getElementById('chatPopup');
    const chatBox = document.querySelector('.chat-box');

    if (!popup || !chatBox) return;

    if (!popup.contains(event.target) && !chatBox.contains(event.target)) {
        popup.classList.remove('show');
    }
});

// Contact modal controls (moved from Blade)
function openContactModal(e) {
    if (e) {
        e.preventDefault();
    }
    var modal = document.getElementById('contactModal');
    var backdrop = document.getElementById('contactBackdrop');
    var panel = document.getElementById('contactPanel');
    if (modal) {
        modal.classList.remove('hidden');
        requestAnimationFrame(function () {
            if (backdrop) {
                backdrop.classList.remove('opacity-0');
                backdrop.classList.add('opacity-100');
            }
            if (panel) {
                panel.classList.remove('opacity-0', 'translate-y-4', 'scale-95');
                panel.classList.add('opacity-100', 'translate-y-0', 'scale-100');
            }
        });
    }
}

function closeContactModal() {
    var modal = document.getElementById('contactModal');
    var backdrop = document.getElementById('contactBackdrop');
    var panel = document.getElementById('contactPanel');
    if (modal) {
        if (backdrop) {
            backdrop.classList.remove('opacity-100');
            backdrop.classList.add('opacity-0');
        }
        if (panel) {
            panel.classList.remove('opacity-100', 'translate-y-0', 'scale-100');
            panel.classList.add('opacity-0', 'translate-y-4', 'scale-95');
        }
        setTimeout(function () {
            modal.classList.add('hidden');
        }, 300);
    }
}

document.addEventListener('keydown', function (evt) {
    if (evt.key === 'Escape') {
        closeContactModal();
    }
});

// About Us Section Interactivity
function toggleExpandable() {
    const expandedContent = document.getElementById('expandedContent');
    const expandText = document.getElementById('expandText');
    const expandIcon = document.getElementById('expandIcon');

    if (!expandedContent || !expandText || !expandIcon) return;

    expandedContent.classList.toggle('hidden');
    expandText.textContent = expandedContent.classList.contains('hidden') ? 'Read More' : 'Read Less';
    expandIcon.classList.toggle('fa-chevron-down');
    expandIcon.classList.toggle('fa-chevron-up');
}

// Image gallery functionality
function changeImage(src) {
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.image-gallery-container div');

    if (!mainImage) return;

    mainImage.src = src;
    thumbnails.forEach(thumb => {
        thumb.classList.remove('border-blue-500');
        thumb.classList.add('border-white');
    });

    // Highlight the clicked thumbnail
    thumbnails.forEach(thumb => {
        if (thumb.querySelector('img') && thumb.querySelector('img').src === src) {
            thumb.classList.remove('border-white');
            thumb.classList.add('border-blue-500');
        }
    });
}

// Tooltip functionality
function showTooltip(event, text) {
    const tooltip = document.getElementById('tooltip');
    if (!tooltip) return;

    tooltip.textContent = text;
    tooltip.style.left = `${event.clientX + 10}px`;
    tooltip.style.top = `${event.clientY - tooltip.offsetHeight - 10}px`;
    tooltip.style.opacity = '1';
    tooltip.style.pointerEvents = 'auto';
}

function hideTooltip() {
    const tooltip = document.getElementById('tooltip');
    if (!tooltip) return;

    tooltip.style.opacity = '0';
    tooltip.style.pointerEvents = 'none';
}

// Add tooltip event listeners
document.addEventListener('DOMContentLoaded', function () {
    const features = document.querySelectorAll('.feature-item');

    features.forEach(feature => {
        feature.addEventListener('mouseenter', (event) => {
            const tooltipText = feature.getAttribute('data-tooltip');
            showTooltip(event, tooltipText);
        });

        feature.addEventListener('mouseleave', hideTooltip);
    });
});

// Value Details Modal
function showValueDetails(valueType) {
    const valueModal = document.getElementById('valueModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalContent = document.getElementById('modalContent');

    let title = '';
    let details = '';

    switch (valueType) {
        case 'innovation':
            title = 'Innovation';
            details = `
                <div class="space-y-4">
                    <p>Our commitment to innovation drives us to continuously develop cutting-edge control panel technologies and solutions.</p>
                    <ul class="list-disc list-inside space-y-2 text-sm">
                        <li>Advanced PLC programming techniques</li>
                        <li>State-of-the-art HMI integration</li>
                        <li>Innovative control system architecture design</li>
                        <li>Future-ready technology implementation</li>
                    </ul>
                    <p class="text-blue-400 font-semibold">We stay at the forefront of technological advancements to ensure our products are not only reliable but also adaptable to future industry needs.</p>
                </div>
            `;
            break;
        case 'quality':
            title = 'Quality';
            details = `
                <div class="space-y-4">
                    <p>Quality is at the heart of everything we do. We maintain rigorous manufacturing and testing processes.</p>
                    <ul class="list-disc list-inside space-y-2 text-sm">
                        <li>ISO 9001 certified quality management system</li>
                        <li>Rigorous testing and validation procedures</li>
                        <li>Comprehensive quality control protocols</li>
                        <li>Continuous improvement processes</li>
                    </ul>
                    <p class="text-blue-400 font-semibold">Our commitment to quality ensures reliable, safe, and durable control panels that exceed industry standards.</p>
                </div>
            `;
            break;
        case 'customer':
            title = 'Customer Focus';
            details = `
                <div class="space-y-4">
                    <p>Customer satisfaction is our top priority. We build long-term partnerships through exceptional service.</p>
                    <ul class="list-disc list-inside space-y-2 text-sm">
                        <li>24/7 technical support availability</li>
                        <li>Global service network coverage</li>
                        <li>Customized solutions for unique needs</li>
                        <li>Proactive customer relationship management</li>
                    </ul>
                    <p class="text-blue-400 font-semibold">Our global network ensures that wherever you are, we are just a call away with prompt response to your needs.</p>
                </div>
            `;
            break;
    }

    if (!valueModal || !modalTitle || !modalContent) return;

    modalTitle.textContent = title;
    modalContent.innerHTML = details;
    valueModal.classList.remove('opacity-0', 'pointer-events-none');
}

function closeValueModal() {
    const valueModal = document.getElementById('valueModal');
    if (!valueModal) return;

    valueModal.classList.add('opacity-0', 'pointer-events-none');
}

// Animated counter functionality
function animateCounter() {
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };

        updateCounter();
    });
}

// Close modal when clicking outside
document.addEventListener('click', function (event) {
    const valueModal = document.getElementById('valueModal');
    if (!valueModal) return;

    if (event.target === valueModal) {
        closeValueModal();
    }
});

// About page counters (.about-counter)
document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.about-counter');
    if (!counters.length) return;

    const animateAboutCounters = () => {
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target')) || 0;
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;
            const update = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(update);
                } else {
                    counter.textContent = target;
                }
            };
            update();
        });
    };

    const countersObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateAboutCounters();
                obs.disconnect();
            }
        });
    }, { threshold: 0.2 });

    counters.forEach(c => countersObserver.observe(c));
});

// Animated counters
let countersAnimated = false;

function animateCounter() {
    if (countersAnimated) return;

    const counters = document.querySelectorAll('.counter');
    const speed = 2000; // Animation duration in milliseconds

    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / (speed / 16); // 60fps
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                counter.textContent = target + (counter.getAttribute('data-target') === '100' ? '%' : '+');
                clearInterval(timer);
            } else {
                counter.textContent = Math.floor(current) + (counter.getAttribute('data-target') === '100' ? '%' : '+');
            }
        }, 16);
    });

    countersAnimated = true;
}

// Trigger counter animation when About Us section is visible
const aboutSection = document.getElementById('about');
if (aboutSection) {
    const aboutObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !countersAnimated) {
                animateCounter();
            }
        });
    }, { threshold: 0.5 });

    aboutObserver.observe(aboutSection);
}

// Hero Slider functionality
let currentSlide = 0;
let slides = document.querySelectorAll('.hero-slide');
let dots = document.querySelectorAll('.slider-dot');
let totalSlides = slides.length;
let slideInterval;

// Slide content data
const slideData = [
    {
        title: 'Professional <span class="text-blue-300">Panel Manufacturing</span><br>& Control System Solutions',
        description: 'Reliable, custom‑built control panels engineered for performance and compliance — from concept to commissioning.',
        buttons: [
            { text: 'Get a Quote', href: '/contact', primary: true },
            { text: 'Our Expertise', href: '#about', primary: false }
        ]
    },
    {
        title: 'Advanced <span class="text-blue-300">Industrial Automation</span><br>& Smart Control Systems',
        description: 'PLC/SCADA integration, secure industrial networking, and turnkey delivery for mission‑critical operations.',
        buttons: [
            { text: 'See Services', href: '#services', primary: true },
            { text: 'Industries', href: '#industries', primary: false }
        ]
    },
    {
        title: 'Custom <span class="text-blue-300">Engineering Solutions</span><br>& Quality Manufacturing',
        description: 'ISO 9001:2015 quality, ATEX/offshore compliance, and responsive support — beyond boundaries, we command control.',
        buttons: [
            { text: 'View Projects', href: '/portfolio', primary: true },
            { text: 'Talk to Expert', href: '/contact', primary: false }
        ]
    }
];

function showSlide(index) {
    if (!slides[index] || !dots[index]) return;

    // Remove active class from all slides and dots
    slides.forEach(slide => {
        slide.classList.remove('active');
        slide.classList.remove('fade-in');
        slide.classList.add('fade-out');
    });
    dots.forEach(dot => dot.classList.remove('active'));

    // Add active class to current slide and dot with smooth transition
    setTimeout(() => {
        slides[index].classList.remove('fade-out');
        slides[index].classList.add('fade-in');
        slides[index].classList.add('active');
        dots[index].classList.add('active');
    }, 100);

    // Update hero content simultaneously with slide change
    const slideSpecificContents = document.querySelectorAll('.hero-content .hero-content-slide');
    if (slideSpecificContents && slideSpecificContents.length === totalSlides) {
        slideSpecificContents.forEach((el, i) => {
            if (i === index) {
                el.classList.add('active');
            } else {
                el.classList.remove('active');
            }
        });
    } else {
        updateHeroContent(index);
    }

    // Add per-slide enter animation
    addInteractiveAnimations();

    // Trigger a soft fade on hero content
    const heroContent = document.querySelector('.hero-content');
    if (heroContent) {
        heroContent.classList.remove('soft-fade');
        void heroContent.offsetWidth; // reflow to restart animation
        heroContent.classList.add('soft-fade');
    }

    currentSlide = index;
}

function updateHeroContent(slideIndex) {
    const heroContent = document.querySelector('.hero-content');
    const heroTitle = document.getElementById('hero-title');
    const heroDescription = document.getElementById('hero-description');
    const heroButtons = document.getElementById('hero-buttons');

    if (!heroContent || !heroTitle || !heroDescription || !heroButtons) return;

    const data = slideData[slideIndex];

    // Immediate update (avoid flicker)
    heroTitle.innerHTML = data.title;
    heroDescription.textContent = data.description;

    // Update buttons
    heroButtons.innerHTML = data.buttons.map(button => {
        const buttonClass = button.primary
            ? 'bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold transition shadow-lg'
            : 'bg-transparent border-2 border-blue-500 hover:bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold transition';
        return `<a href="${button.href}" class="${buttonClass}">${button.text}</a>`;
    }).join('');

    // Optional light animation can be applied here if needed
}

function addInteractiveAnimations() {
    const heroTitle = document.getElementById('hero-title');
    const heroDescription = document.getElementById('hero-description');
    const heroButtons = document.getElementById('hero-buttons');

    if (!heroTitle || !heroDescription || !heroButtons) return;

    // Reset animations
    heroTitle.style.animation = 'none';
    heroDescription.style.animation = 'none';
    heroButtons.style.animation = 'none';

    // Trigger reflow
    void heroTitle.offsetWidth;
    void heroDescription.offsetWidth;
    void heroButtons.offsetWidth;

    // Random animation selection for variety
    const animations = ['slideInFromLeft', 'slideInFromRight', 'slideInFromBottom', 'fadeInScale'];
    const titleAnim = animations[Math.floor(Math.random() * animations.length)];
    const descAnim = animations[Math.floor(Math.random() * animations.length)];
    const buttonAnim = animations[Math.floor(Math.random() * animations.length)];

    // Add staggered animations with variety
    heroTitle.style.animation = `${titleAnim} 0.8s ease-out forwards`;
    heroDescription.style.animation = `${descAnim} 0.8s ease-out 0.2s forwards`;
    heroButtons.style.animation = `${buttonAnim} 0.8s ease-out 0.4s forwards`;

    // Add interactive particle effect
    addParticleEffect();
}

function addParticleEffect() {
    const heroContent = document.querySelector('.hero-content');
    if (!heroContent) return;

    // Create particles
    for (let i = 0; i < 5; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.cssText = `
            position: absolute;
            width: 4px;
            height: 4px;
            background: #1E90FF;
            border-radius: 50%;
            pointer-events: none;
            animation: particleFloat 2s ease-out forwards;
            left: ${Math.random() * 100}%;
            top: ${Math.random() * 100}%;
        `;
        heroContent.appendChild(particle);

        // Remove particle after animation
        setTimeout(() => {
            if (particle.parentNode) {
                particle.parentNode.removeChild(particle);
            }
        }, 2000);
    }
}

function nextSlide() {
    const next = (currentSlide + 1) % totalSlides;
    showSlide(next);
}

function goToSlide(index) {
    showSlide(index);
    // Reset the automatic timer when manually navigating
    resetAutoSlide();
}

function startAutoSlide() {
    // Clear any existing interval
    if (slideInterval) {
        clearInterval(slideInterval);
    }
    // Start automatic sliding every 6 seconds
    if (totalSlides > 0) {
        slideInterval = setInterval(nextSlide, 6000);
    }
}

function resetAutoSlide() {
    // Clear current interval and restart
    if (slideInterval) {
        clearInterval(slideInterval);
    }
    // Restart quickly for responsive feel
    setTimeout(startAutoSlide, 500);
}

// Initialize automatic slider when page loads
document.addEventListener('DOMContentLoaded', function () {
    // Re-query in case DOM was not ready when script parsed
    slides = document.querySelectorAll('.hero-slide');
    dots = document.querySelectorAll('.slider-dot');
    totalSlides = slides.length;

    if (totalSlides > 0) {
        // Ensure first slide state
        showSlide(0);
        updateHeroContent(0);
        startAutoSlide();

        // Add interactive hover effects
        addHeroHoverEffects();

        // Initial enter animation
        addInteractiveAnimations();
    }
});

function addHeroHoverEffects() {
    const heroContent = document.querySelector('.hero-content');
    if (!heroContent) return;

    heroContent.addEventListener('mouseenter', function () {
        // Pause auto-slide on hover
        if (slideInterval) {
            clearInterval(slideInterval);
        }

        // Add subtle glow effect
        this.style.textShadow = '0 0 20px rgba(30, 144, 255, 0.3)';
    });

    heroContent.addEventListener('mouseleave', function () {
        // Resume auto-slide when mouse leaves
        startAutoSlide();

        // Remove glow effect
        this.style.textShadow = 'none';
    });

    // Add click effect for buttons
    const buttons = heroContent.querySelectorAll('a');
    buttons.forEach(button => {
        button.addEventListener('click', function (e) {
            // Create ripple effect
            const ripple = document.createElement('span');
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.3);
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
            `;

            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';

            this.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
}

// Manual navigation with arrow keys
document.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowLeft') {
        const prev = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(prev);
        resetAutoSlide();
    } else if (e.key === 'ArrowRight') {
        nextSlide();
        resetAutoSlide();
    }
});

// Navbar Downloads dropdown - Hover functions
function showNavDownloadsMenu() {
    const menu = document.getElementById('navDownloadsMenu');
    if (!menu) return;
    menu.classList.remove('hidden');
}

function hideNavDownloadsMenu() {
    const menu = document.getElementById('navDownloadsMenu');
    if (!menu) return;
    menu.classList.add('hidden');
}

// Navbar Downloads dropdown - Click function (for mobile compatibility)
function toggleNavDownloadsMenu(event) {
    event.stopPropagation();
    const menu = document.getElementById('navDownloadsMenu');
    if (!menu) return;

    menu.classList.toggle('hidden');
}

// Navbar Industries dropdown - Hover functions
function showNavIndustriesMenu() {
    const menu = document.getElementById('navIndustriesMenu');
    if (!menu) return;
    menu.classList.remove('hidden');
}

function hideNavIndustriesMenu() {
    const menu = document.getElementById('navIndustriesMenu');
    if (!menu) return;
    menu.classList.add('hidden');
}

// Navbar Industries dropdown - Click function (for mobile compatibility)
function toggleNavIndustriesMenu(event) {
    event.stopPropagation();
    const menu = document.getElementById('navIndustriesMenu');
    if (!menu) return;
    menu.classList.toggle('hidden');
}

// Close navbar industries dropdown when clicking outside
document.addEventListener('click', function (event) {
    const btn = document.getElementById('navIndustriesBtn');
    const menu = document.getElementById('navIndustriesMenu');
    if (!btn || !menu) return;
    if (!btn.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.add('hidden');
    }
});

// Mobile industries submenu toggle
document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('mobileIndustriesBtn');
    const menu = document.getElementById('mobileIndustriesMenu');
    if (!btn || !menu) return;
    btn.addEventListener('click', function () {
        menu.classList.toggle('hidden');
    });
});

// Close navbar downloads dropdown when clicking outside
document.addEventListener('click', function (event) {
    const btn = document.getElementById('navDownloadsBtn');
    const menu = document.getElementById('navDownloadsMenu');
    if (!btn || !menu) return;

    if (!btn.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.add('hidden');
    }
});

// Image gallery functionality
const mainImage = document.getElementById('mainImage');
const imageGalleryContainer = document.querySelector('.image-gallery-container');
const thumbnails = document.querySelectorAll('.image-thumbnail');
const sliderIndicators = document.querySelectorAll('.slider-indicator');

// Image array for auto-slider
const images = [
    '/img/logo_login.jpg',
    '/img/aboutus/aboutus2.jpg',
    '/img/aboutus/aboutus3.jpg'
];

let currentImageIndex = 0;
let autoSliderInterval;

function changeImage(src, index = null) {
    if (!mainImage) return;

    // Add slide-in animation
    mainImage.classList.remove('slide-in');
    void mainImage.offsetWidth; // Trigger reflow
    mainImage.classList.add('slide-in');

    // Update main image
    mainImage.src = src;

    // Update current index
    if (index !== null) {
        currentImageIndex = index;
    } else {
        currentImageIndex = images.indexOf(src);
    }

    // Update active thumbnail
    thumbnails.forEach((thumb, i) => {
        thumb.classList.remove('active');
        if (i === currentImageIndex) {
            thumb.classList.add('active');
        }
    });

    // Update active indicator
    sliderIndicators.forEach((indicator, i) => {
        indicator.classList.remove('active');
        if (i === currentImageIndex) {
            indicator.classList.add('active');
        }
    });

    // Reset auto-slider
    startAutoSlider();
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    changeImage(images[currentImageIndex]);
}

function startAutoSlider() {
    // Clear existing interval
    if (autoSliderInterval) {
        clearInterval(autoSliderInterval);
    }

    // Start new interval (change image every 4 seconds)
    autoSliderInterval = setInterval(nextImage, 4000);
}

function stopAutoSlider() {
    if (autoSliderInterval) {
        clearInterval(autoSliderInterval);
    }
}

// Start auto-slider on page load
document.addEventListener('DOMContentLoaded', function () {
    if (!mainImage || !imageGalleryContainer) {
        return;
    }
    startAutoSlider();

    // Pause auto-slider on hover
    imageGalleryContainer.addEventListener('mouseenter', stopAutoSlider);
    imageGalleryContainer.addEventListener('mouseleave', startAutoSlider);

    // Add click events to slider indicators
    sliderIndicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            changeImage(images[index], index);
        });
    });
});

// Fade in animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function (entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

// Observe all fade sections
document.querySelectorAll('.fade-section').forEach(section => {
    observer.observe(section);
});

// Initialize fade sections on page load
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.fade-section').forEach(section => {
        if (section.getBoundingClientRect().top < window.innerHeight) {
            section.classList.add('visible');
        }
    });
});

// Project Gallery Filter (Portfolio page)
document.addEventListener('DOMContentLoaded', function () {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('#project-gallery .project-card');
    if (!filterButtons.length || !projectCards.length) return;

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            const filter = button.getAttribute('data-filter');
            projectCards.forEach(card => {
                const show = filter === 'all' || card.getAttribute('data-category') === filter;
                card.style.display = show ? 'block' : 'none';
                if (show) {
                    card.style.animation = 'fadeIn 0.5s ease-in-out';
                }
            });
        });
    });
});

// Industries page: animate stats counters
document.addEventListener('DOMContentLoaded', function () {
    const stats = document.querySelectorAll('.stats-counter');
    if (!stats.length) return;

    const animateStats = () => {
        stats.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target')) || 0;
            const duration = 1500;
            const increment = target / (duration / 16);
            let current = 0;
            const update = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(update);
                } else {
                    counter.textContent = target;
                }
            };
            update();
        });
    };

    const statsObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateStats();
                obs.disconnect();
            }
        });
    }, { threshold: 0.3 });

    stats.forEach(s => statsObserver.observe(s));
});

// Interactions: Supported Platforms badges (Services page)
document.addEventListener('DOMContentLoaded', function () {
    const container = document.querySelector('.platform-badges');
    if (!container) return;
    const badges = Array.from(container.querySelectorAll('span'));

    badges.forEach(badge => {
        // hover effect via inline styles to avoid extra CSS
        badge.addEventListener('mouseenter', () => {
            badge.style.boxShadow = '0 6px 18px rgba(30,144,255,0.25)';
            badge.style.transform = 'translateY(-2px)';
            badge.style.transition = 'all 160ms ease';
        });
        badge.addEventListener('mouseleave', () => {
            badge.style.boxShadow = 'none';
            badge.style.transform = 'none';
        });
        // click toggle active
        badge.addEventListener('click', () => {
            const isActive = badge.classList.contains('active');
            badges.forEach(b => { b.classList.remove('active'); b.style.borderColor = 'rgba(96,165,250,0.3)'; b.style.backgroundColor = 'rgba(59,130,246,0.10)'; });
            if (!isActive) {
                badge.classList.add('active');
                badge.style.borderColor = 'rgba(96,165,250,0.8)';
                badge.style.backgroundColor = 'rgba(59,130,246,0.18)';
            }
        });
        // tooltip title fallback using data attribute
        const name = badge.getAttribute('data-platform');
        if (name && !badge.title) badge.title = name + ' platform';
    });
});

// ===== Hero particles canvas (random animation) =====
document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('heroParticles');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let W, H;
    let balls = [];
    const BALL_NUM = 30;
    const R = 2;
    const alphaF = 0.03;
    const linkWidth = 0.8;
    const distLimit = 260;
    const mouseBall = { x: 0, y: 0, vx: 0, vy: 0, r: 0, type: 'mouse' };
    const hero = document.getElementById('home');

    function setSize() {
        W = canvas.width = canvas.clientWidth;
        H = canvas.height = canvas.clientHeight;
    }
    setSize();
    window.addEventListener('resize', setSize);

    const rand = (min, max) => Math.random() * (max - min) + min;
    const item = arr => arr[Math.floor(Math.random() * arr.length)];
    const side = len => Math.ceil(Math.random() * len);
    function speed(pos) {
        const min = -1, max = 1;
        if (pos === 'top') return [rand(min, max), rand(0.1, max)];
        if (pos === 'right') return [rand(min, -0.1), rand(min, max)];
        if (pos === 'bottom') return [rand(min, max), rand(min, -0.1)];
        return [rand(0.1, max), rand(min, max)];
    }
    function randomBall() {
        const pos = item(['top', 'right', 'bottom', 'left']);
        const s = speed(pos);
        if (pos === 'top') return { x: side(W), y: -R, vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
        if (pos === 'right') return { x: W + R, y: side(H), vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
        if (pos === 'bottom') return { x: side(W), y: H + R, vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
        return { x: -R, y: side(H), vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
    }
    function renderBalls() {
        balls.forEach(b => {
            if (b.type) return;
            // light blue particles
            ctx.fillStyle = `rgba(80,180,255,${b.alpha})`;
            ctx.beginPath();
            ctx.arc(b.x, b.y, R, 0, Math.PI * 2);
            ctx.closePath();
            ctx.fill();
        });
    }
    function updateBalls() {
        const next = [];
        balls.forEach(b => {
            b.x += b.vx; b.y += b.vy;
            if (b.x > -50 && b.x < W + 50 && b.y > -50 && b.y < H + 50) next.push(b);
            b.phase += alphaF; b.alpha = Math.abs(Math.cos(b.phase));
        });
        balls = next;
    }
    const dist = (a, b) => Math.hypot(a.x - b.x, a.y - b.y);
    function renderLines() {
        for (let i = 0; i < balls.length; i++) {
            for (let j = i + 1; j < balls.length; j++) {
                const f = dist(balls[i], balls[j]) / distLimit;
                if (f < 1) {
                    // light blue lines
                    ctx.strokeStyle = `rgba(80,180,255,${(1 - f) * 0.8})`;
                    ctx.lineWidth = linkWidth;
                    ctx.beginPath();
                    ctx.moveTo(balls[i].x, balls[i].y);
                    ctx.lineTo(balls[j].x, balls[j].y);
                    ctx.stroke();
                    ctx.closePath();
                }
            }
        }
    }
    function addIfFew() { if (balls.length < BALL_NUM) balls.push(randomBall()); }
    function render() {
        ctx.clearRect(0, 0, W, H);
        renderBalls();
        renderLines();
        updateBalls();
        addIfFew();
        requestAnimationFrame(render);
    }
    function initBalls(n) {
        balls = []; for (let i = 0; i < n; i++) balls.push({ x: side(W), y: side(H), vx: speed('top')[0], vy: speed('top')[1], r: R, alpha: 1, phase: rand(0, 10) });
    }
    initBalls(BALL_NUM); render();

    // mouse follow: listen on hero section so canvas can stay pointer-events:none
    if (hero) {
        hero.addEventListener('mouseenter', () => { if (!balls.includes(mouseBall)) balls.push(mouseBall); });
        hero.addEventListener('mouseleave', () => { balls = balls.filter(b => !b.type); });
        hero.addEventListener('mousemove', e => {
            const rect = canvas.getBoundingClientRect();
            mouseBall.x = e.clientX - rect.left;
            mouseBall.y = e.clientY - rect.top;
        });
    }
});

// About hero particles
document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('aboutParticles');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let W, H;
    let balls = [];
    const BALL_NUM = 24;
    const R = 2;
    const alphaF = 0.03;
    const linkWidth = 0.8;
    const distLimit = 220;
    const mouseBall = { x: 0, y: 0, vx: 0, vy: 0, r: 0, type: 'mouse' };
    const aboutHero = document.querySelector('.about-hero');

    function setSize() {
        W = canvas.width = canvas.clientWidth;
        H = canvas.height = canvas.clientHeight;
    }
    setSize();
    window.addEventListener('resize', setSize);

    const rand = (min, max) => Math.random() * (max - min) + min;
    const item = arr => arr[Math.floor(Math.random() * arr.length)];
    const side = len => Math.ceil(Math.random() * len);
    function speed(pos) {
        const min = -1, max = 1;
        if (pos === 'top') return [rand(min, max), rand(0.1, max)];
        if (pos === 'right') return [rand(min, -0.1), rand(min, max)];
        if (pos === 'bottom') return [rand(min, max), rand(min, -0.1)];
        return [rand(0.1, max), rand(min, max)];
    }
    function randomBall() {
        const pos = item(['top', 'right', 'bottom', 'left']);
        const s = speed(pos);
        if (pos === 'top') return { x: side(W), y: -R, vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
        if (pos === 'right') return { x: W + R, y: side(H), vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
        if (pos === 'bottom') return { x: side(W), y: H + R, vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
        return { x: -R, y: side(H), vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
    }
    function renderBalls() {
        balls.forEach(b => {
            if (b.type) return;
            ctx.fillStyle = `rgba(80,180,255,${b.alpha})`;
            ctx.beginPath();
            ctx.arc(b.x, b.y, R, 0, Math.PI * 2);
            ctx.closePath();
            ctx.fill();
        });
    }
    function updateBalls() {
        const next = [];
        balls.forEach(b => {
            b.x += b.vx; b.y += b.vy;
            if (b.x > -50 && b.x < W + 50 && b.y > -50 && b.y < H + 50) next.push(b);
            b.phase += alphaF; b.alpha = Math.abs(Math.cos(b.phase));
        });
        balls = next;
    }
    const dist = (a, b) => Math.hypot(a.x - b.x, a.y - b.y);
    function renderLines() {
        for (let i = 0; i < balls.length; i++) {
            for (let j = i + 1; j < balls.length; j++) {
                const f = dist(balls[i], balls[j]) / distLimit;
                if (f < 1) {
                    ctx.strokeStyle = `rgba(80,180,255,${(1 - f) * 0.8})`;
                    ctx.lineWidth = linkWidth;
                    ctx.beginPath();
                    ctx.moveTo(balls[i].x, balls[i].y);
                    ctx.lineTo(balls[j].x, balls[j].y);
                    ctx.stroke();
                    ctx.closePath();
                }
            }
        }
    }
    function addIfFew() { if (balls.length < BALL_NUM) balls.push(randomBall()); }
    function render() {
        ctx.clearRect(0, 0, W, H);
        renderBalls();
        renderLines();
        updateBalls();
        addIfFew();
        requestAnimationFrame(render);
    }
    function initBalls(n) {
        balls = []; for (let i = 0; i < n; i++) balls.push({ x: side(W), y: side(H), vx: speed('top')[0], vy: speed('top')[1], r: R, alpha: 1, phase: rand(0, 10) });
    }
    initBalls(BALL_NUM); render();

    if (aboutHero) {
        aboutHero.addEventListener('mouseenter', () => { if (!balls.includes(mouseBall)) balls.push(mouseBall); });
        aboutHero.addEventListener('mouseleave', () => { balls = balls.filter(b => !b.type); });
        aboutHero.addEventListener('mousemove', e => {
            const rect = canvas.getBoundingClientRect();
            mouseBall.x = e.clientX - rect.left;
            mouseBall.y = e.clientY - rect.top;
        });
    }
});

// Services hero particles
document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('servicesParticles');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let W, H;
    let balls = [];
    const BALL_NUM = 26;
    const R = 2;
    const alphaF = 0.03;
    const linkWidth = 0.8;
    const distLimit = 220;
    const mouseBall = { x: 0, y: 0, vx: 0, vy: 0, r: 0, type: 'mouse' };
    const hero = document.querySelector('.services-hero');

    function setSize() {
        W = canvas.width = canvas.clientWidth;
        H = canvas.height = canvas.clientHeight;
    }
    setSize();
    window.addEventListener('resize', setSize);

    const rand = (min, max) => Math.random() * (max - min) + min;
    const item = arr => arr[Math.floor(Math.random() * arr.length)];
    const side = len => Math.ceil(Math.random() * len);
    function speed(pos) {
        const min = -1, max = 1;
        if (pos === 'top') return [rand(min, max), rand(0.1, max)];
        if (pos === 'right') return [rand(min, -0.1), rand(min, max)];
        if (pos === 'bottom') return [rand(min, max), rand(min, -0.1)];
        return [rand(0.1, max), rand(min, max)];
    }
    function randomBall() {
        const pos = item(['top', 'right', 'bottom', 'left']);
        const s = speed(pos);
        if (pos === 'top') return { x: side(W), y: -R, vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
        if (pos === 'right') return { x: W + R, y: side(H), vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
        if (pos === 'bottom') return { x: side(W), y: H + R, vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
        return { x: -R, y: side(H), vx: s[0], vy: s[1], r: R, alpha: 1, phase: rand(0, 10) };
    }
    function renderBalls() {
        balls.forEach(b => {
            if (b.type) return;
            ctx.fillStyle = `rgba(80,180,255,${b.alpha})`;
            ctx.beginPath();
            ctx.arc(b.x, b.y, R, 0, Math.PI * 2);
            ctx.closePath();
            ctx.fill();
        });
    }
    function updateBalls() {
        const next = [];
        balls.forEach(b => {
            b.x += b.vx; b.y += b.vy;
            if (b.x > -50 && b.x < W + 50 && b.y > -50 && b.y < H + 50) next.push(b);
            b.phase += alphaF; b.alpha = Math.abs(Math.cos(b.phase));
        });
        balls = next;
    }
    const dist = (a, b) => Math.hypot(a.x - b.x, a.y - b.y);
    function renderLines() {
        for (let i = 0; i < balls.length; i++) {
            for (let j = i + 1; j < balls.length; j++) {
                const f = dist(balls[i], balls[j]) / distLimit;
                if (f < 1) {
                    ctx.strokeStyle = `rgba(80,180,255,${(1 - f) * 0.8})`;
                    ctx.lineWidth = linkWidth;
                    ctx.beginPath();
                    ctx.moveTo(balls[i].x, balls[i].y);
                    ctx.lineTo(balls[j].x, balls[j].y);
                    ctx.stroke();
                    ctx.closePath();
                }
            }
        }
    }
    function addIfFew() { if (balls.length < BALL_NUM) balls.push(randomBall()); }
    function render() {
        ctx.clearRect(0, 0, W, H);
        renderBalls();
        renderLines();
        updateBalls();
        addIfFew();
        requestAnimationFrame(render);
    }
    function initBalls(n) {
        balls = []; for (let i = 0; i < n; i++) balls.push({ x: side(W), y: side(H), vx: speed('top')[0], vy: speed('top')[1], r: R, alpha: 1, phase: rand(0, 10) });
    }
    initBalls(BALL_NUM); render();

    if (hero) {
        hero.addEventListener('mouseenter', () => { if (!balls.includes(mouseBall)) balls.push(mouseBall); });
        hero.addEventListener('mouseleave', () => { balls = balls.filter(b => !b.type); });
        hero.addEventListener('mousemove', e => {
            const rect = canvas.getBoundingClientRect();
            mouseBall.x = e.clientX - rect.left;
            mouseBall.y = e.clientY - rect.top;
        });
    }
});
