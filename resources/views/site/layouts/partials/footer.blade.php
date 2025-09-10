<!-- Footer -->
<footer class="bg-gray-900 py-12 px-6 text-gray-400">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">
                    <a href="{{ route('site.home') }}" class="inline-flex items-center">
                        <img src="{{ asset('img/logo2.png') }}" alt="EPBOX ENGINEERING" class="h-12 w-auto object-cover object-center" loading="lazy">
                    </a>
                </h3>
                <p class="mb-4">
                    Specialized manufacturer of control panels and control panel systems for industrial
                    applications.
                </p>
                <div class="flex space-x-4">
                    <a href="https://linkedin.com/company/epbox-engineering" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="https://twitter.com/epbox_engineering" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="https://facebook.com/epboxengineering" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="https://youtube.com/@epboxengineering" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Services</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('site.services') }}" class="hover:text-blue-400 transition-colors">Control Panel Manufacturing</a></li>
                    <li><a href="{{ route('site.services') }}" class="hover:text-blue-400 transition-colors">Control Panel Systems Design</a></li>
                    <li><a href="{{ route('site.services') }}" class="hover:text-blue-400 transition-colors">Panel Integration & SCADA</a></li>
                    <li><a href="{{ route('site.services') }}" class="hover:text-blue-400 transition-colors">Panel Installation</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Company</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('site.about') }}" class="hover:text-blue-400 transition-colors">About Us</a></li>
                    <li><a href="{{ route('site.portfolio.index') }}" class="hover:text-blue-400 transition-colors">Projects</a></li>
                    <li><a href="{{ route('site.blog') }}" class="hover:text-blue-400 transition-colors">Blog</a></li>
                    <li><a href="#downloads" class="hover:text-blue-400 transition-colors">Downloads</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Contact Information</h3>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-map-marker-alt mr-2 text-blue-400"></i>
                        Jl. Industri No. 123, Jakarta
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-phone mr-2 text-blue-400"></i>
                        <a href="tel:+6221-1234-5678" class="text-gray-300 hover:text-blue-400 transition-colors">+62 21-1234-5678</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope mr-2 text-blue-400"></i>
                        <a href="mailto:info@epbox.com" class="text-gray-300 hover:text-blue-400 transition-colors">info@epbox.com</a>
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-clock mr-2 text-blue-400"></i>
                        Mon-Fri: 8:00 AM - 5:00 PM
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-6 border-t border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">
                <p class="text-center md:text-left text-sm">
                    © {{ date('Y') }} Epbox Engineering. All rights reserved.
                </p>
                <div class="flex space-x-4 text-sm">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>