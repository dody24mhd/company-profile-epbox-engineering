@extends('site.layouts.app')
@section('title','Contact Us | EPBOX ENGINEERING PTE. LTD')
@section('meta_description','Contact EPBOX ENGINEERING PTE LTD – Get quotes and expert support for control panels and industrial automation solutions.')
@section('content')

<!-- Hero Section -->
<section class="contact-hero pt-24 sm:pt-32 pb-16 sm:pb-20 px-4 sm:px-6 gradient-bg relative overflow-hidden fade-section">
    <div class="interactive-bg">
        <div class="w-16 h-16 top-20 left-10 animate-pulse"></div>
        <div class="w-24 h-24 top-1/2 right-20 animate-pulse delay-1000"></div>
        <div class="w-12 h-12 bottom-20 left-1/4 animate-pulse delay-500"></div>
    </div>

    <!-- Particles Canvas Layer for Contact Hero -->
    <canvas id="contactParticles" class="absolute inset-0 w-full h-full pointer-events-none" style="z-index:1">
        Your browser doesn't support Canvas.
    </canvas>
    <div class="max-w-7xl mx-auto relative z-10 text-center">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6"
            style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">GET IN <span
                class="text-blue-300">TOUCH</span></h1>
        <div class="w-24 sm:w-32 h-1 bg-gradient-to-r from-blue-500 to-blue-600 mx-auto mb-4 sm:mb-6"></div>
        <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto"
            style="font-family: 'Roboto', sans-serif; font-weight: 300; letter-spacing: 0.3px;">Ready to transform your
            industrial operations? Contact our expert team for personalized automation solutions and control panel
            systems tailored to your specific needs.</p>
    </div>
</section>

<!-- Contact Form & Info removed: form will appear next to maps below -->

<!-- Office Locations & Maps -->
<section class="py-12 sm:py-12 px-4 sm:px-6 gradient-bg relative overflow-hidden fade-section">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-500 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-40 h-40 bg-cyan-500 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-400 rounded-full blur-2xl animate-pulse delay-500"></div>
    </div>

	<div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-8">
            <h2 class="text-3xl md:text-4xl lg:text-4xl font-bold mb-4 section-title"
                style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">CONNECT WITH US</h2>
            <div class="w-32 h-1 bg-white mx-auto mb-4"></div>
        </div>
        <div class="grid lg:grid-cols-2 gap-6 sm:gap-8 items-start">
            <!-- Left column: stacked office maps -->
            <div class="space-y-8">
                <!-- Singapore Office -->
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-none overflow-hidden">
                    <div class="h-64 w-full">
                        <iframe class="w-full h-full" style="border:0" loading="lazy" allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps?q=1+Sunview+Road+Eco-Tech%40sunview+Singapore+627615&output=embed"></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white mb-2">Singapore</h3>
                        <p class="text-gray-300 text-sm">1 Sunview Road Eco-Tech@Sunview Singapore 627615</p>
                    </div>
                </div>
                <!-- Batam Office -->
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-none overflow-hidden">
                    <div class="h-64 w-full">
                        <iframe class="w-full h-full" style="border:0" loading="lazy" allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps?q=Warna+Jaya+Business+Park,+Jl.+Jend.+Sudirman,+Taman+Baloi,+Kec.+Batam+Kota,+Kota+Batam,+Kepulauan+Riau+29444&output=embed"></iframe>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white mb-2">Batam, Indonesia</h3>
                        <p class="text-gray-300 text-sm">Warna Jaya Business Park, Jl. Jend. Sudirman, Taman Baloi, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29444</p>
                    </div>
                </div>
            </div>

            <!-- Right column: centered contact form -->
            <div class="flex items-start md:items-center">
                <div class="w-full max-w-xl mx-auto bg-white/5 backdrop-blur-sm border border-white/10 rounded-none p-6 md:p-7 lg:p-8 shadow-lg shadow-blue-900/10">
				<h2 class="text-2xl md:text-3xl font-bold mb-2 text-white" style="font-family: 'Roboto', sans-serif; font-weight: 900; letter-spacing: 0.5px;">Send Us a Message</h2>
				<p class="text-gray-300 mb-6">Office Hours: Monday-Friday 8AM-6PM, Saturday 8AM-12PM (GMT+8)</p>
				<p class="text-sm text-gray-400 mb-6"></p>

                    <!-- Contact Information (above form) -->
                    <div class="mb-8 pb-6 border-b border-white/10">
                        <h3 class="text-xl font-bold text-white mb-4">Contact Information</h3>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                                <span>
                                    <strong class="text-white">Singapore Office</strong><br>
                                    1 Sunview Road Eco-Tech@Sunview, Singapore 627615
                                </span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt text-blue-400 mt-1 mr-3"></i>
                                <span>
                                    <strong class="text-white">Batam Office</strong><br>
                                    Warna Jaya Business Park blok A1-06, Batam, Kepulauan Riau
                                </span>
                            </li>
                            <li class="flex items-start"><i class="fas fa-phone text-blue-400 mt-1 mr-3"></i><span><a href="tel:+6582829835" class="hover:text-blue-400">+65 8282 9835</a> / <a href="tel:+6281170088989" class="hover:text-blue-400">+62 811 7008 8989</a></span></li>
                            <li class="flex items-start"><i class="fas fa-envelope text-blue-400 mt-1 mr-3"></i><a href="mailto:sales@epbox-engg.com" class="hover:text-blue-400">sales@epbox-engg.com</a></li>
                        </ul>
                    </div>

				<form method="POST" action="{{ route('contact.store') }}" class="grid md:grid-cols-2 gap-4 md:gap-5" id="contactForm">
					@csrf
                    <!-- Honeypot field -->
                    <div class="hidden" aria-hidden="true">
                        <label for="contact_website">Website</label>
                        <input id="contact_website" type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>
                    <!-- reCAPTCHA v3 token holder -->
                    <input type="hidden" name="recaptcha_token" id="recaptcha_token">
					<div>
						<label for="contact_name" class="block mb-2 text-gray-300">Full Name</label>
						<input id="contact_name" type="text" name="name" required autocomplete="name" class="w-full px-4 py-3 bg-gray-900/70 border border-gray-700/60 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="Your Name">
					</div>
					<div>
						<label for="contact_email" class="block mb-2 text-gray-300">Email Address</label>
						<input id="contact_email" type="email" name="email" required autocomplete="email" class="w-full px-4 py-3 bg-gray-900/70 border border-gray-700/60 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="your@email.com">
					</div>
					<div>
						<label for="contact_company" class="block mb-2 text-gray-300">Company</label>
						<input id="contact_company" type="text" name="company" autocomplete="organization" class="w-full px-4 py-3 bg-gray-900/70 border border-gray-700/60 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="Company Name">
					</div>
					<div>
						<label for="contact_phone" class="block mb-2 text-gray-300">Phone</label>
						<input id="contact_phone" type="tel" name="phone" autocomplete="tel" class="w-full px-4 py-3 bg-gray-900/70 border border-gray-700/60 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="+[country code] number">
						<p class="mt-1 text-xs text-gray-400">Include country code, e.g., +65 1234 5678</p>
					</div>
					<div class="md:col-span-2">
						<label for="contact_message" class="block mb-2 text-gray-300">Leave a Message        </label>
						<textarea id="contact_message" name="message" rows="6" required class="w-full px-4 py-3 bg-gray-900/70 border border-gray-700/60 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-gray-400" placeholder="Please write your message here"></textarea>
					</div>
					<div class="md:col-span-2 flex justify-end">
                            <button type="submit" class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-none transition duration-300">Send Request</button>
					</div>
				</form>

				<!-- Alerts -->
				<div class="hidden mt-4 rounded-lg border border-green-500/30 bg-green-500/10 text-green-300 px-4 py-3" id="contactSuccess">Your message has been sent. We'll be in touch soon.</div>
				<div class="hidden mt-4 rounded-lg border border-red-500/30 bg-red-500/10 text-red-300 px-4 py-3" id="contactError">Something went wrong. Please try again.</div>


                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA section removed per request -->
@endsection

@include('site.components.chatbot')

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const successAlert = document.getElementById('contactSuccess');
    const errorAlert = document.getElementById('contactError');
    
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault(); // Prevent default form submission
        
        // Hide any existing alerts
        successAlert.classList.add('hidden');
        errorAlert.classList.add('hidden');
        
        // Get form data
        const formData = new FormData(contactForm);
        const name = formData.get('name');
        const email = formData.get('email');
        
        // Simple validation
        if (!name || !email) {
            showError('Please fill in all required fields.');
            return;
        }
        
        // Show loading state
        const submitButton = contactForm.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.textContent = 'Sending...';
        submitButton.disabled = true;
        
        // Acquire reCAPTCHA v3 token before submit (if site key is configured)
        try {
            if (window.grecaptcha && '{{ config('services.recaptcha.site_key') }}') {
                const token = await grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', { action: 'contact' });
                const tokenInput = document.getElementById('recaptcha_token');
                if (tokenInput) tokenInput.value = token;
            }
        } catch (err) {
            console.warn('reCAPTCHA token fetch failed', err);
        }

        // Send AJAX request
        fetch(contactForm.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showSuccess(data.message);
                contactForm.reset();
            } else {
                showError(data.message || 'Something went wrong. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showError('Something went wrong. Please try again.');
        })
        .finally(() => {
            // Reset button
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        });
    });
    
    function showSuccess(message) {
        successAlert.textContent = message;
        successAlert.classList.remove('hidden');
        errorAlert.classList.add('hidden');
        
        // Scroll to success message
        successAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Hide success message after 5 seconds
        setTimeout(() => {
            successAlert.classList.add('hidden');
        }, 5000);
    }
    
    function showError(message) {
        errorAlert.textContent = message;
        errorAlert.classList.remove('hidden');
        successAlert.classList.add('hidden');
        
        // Scroll to error message
        errorAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Hide error message after 5 seconds
        setTimeout(() => {
            errorAlert.classList.add('hidden');
        }, 5000);
    }
});
</script>
<!-- Load reCAPTCHA v3 if site key configured -->
@if (config('services.recaptcha.site_key'))
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}" defer></script>
@endif
@endpush