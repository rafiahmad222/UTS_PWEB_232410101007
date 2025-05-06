<footer class="{{ request()->routeIs('login') ? 'bg-transparent text-gray-800' : 'bg-gray-500 text-white' }} py-2 font-['Tuffy']">
    <div class="{{ request()->routeIs('dashboard') ? 'container mx-auto text-left px-1' : 'container mx-auto text-center' }}">
        <p>&copy; {{ date('Y') }} Hidroponik Jember. All rights reserved.</p>
        @if (!request()->routeIs('dashboard'))
            <p>Follow us on:
                <a href="#" class="text-blue-900 hover:underline">Facebook</a>,
                <a href="#" class="text-blue-900 hover:underline">Twitter</a>,
                <a href="#" class="text-blue-900 hover:underline">Instagram</a>
            </p>
        @endif
    </div>
</footer>
