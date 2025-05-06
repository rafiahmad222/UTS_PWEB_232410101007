@props(['username'])
<div class="w-64 bg-[#DDEB9D] h-screen font-['Comic_Relief']">
    <div class="mt-4 mb-4 flex justify-center">
        <img src="{{ asset('images/Logo_AgroMart.png') }}" alt="Logo Hidroponik Jember" class="w-28 h-auto">
    </div>
    <ul class="space-y-4 p-4">
        <li>
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="flex items-center p-2 font-bold text-lg text-[#626F47] hover:text-[#CBA35C] hover:scale-110 transition-transform duration-300">
                <img src="{{ asset('images/icon_dashboard.png') }}" alt="Dashboard Icon" class="w-6 h-6 mr-2">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('profile', ['username' => $username]) }}" class="flex items-center p-2 font-bold text-lg text-[#626F47] hover:text-[#CBA35C] hover:scale-110 transition-transform duration-300">
                <img src="{{ asset('images/icon_profile.png') }}" alt="Profile Icon" class="w-6 h-6 mr-2">
                Profile
            </a>
        </li>
        <li>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="flex items-center p-2 font-bold text-lg text-[#626F47] hover:text-[#CBA35C] hover:scale-110 transition-transform duration-300">
                <img src="{{ asset('images/icon_pengelolaan.png') }}" alt="Pengelolaan Icon" class="w-7 h-7 mr-1">
                Pengelolaan
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}" class="flex items-center p-2 font-bold text-lg text-red-600 hover:text-red-800 hover:scale-110 transition-transform duration-300">
                <img src="{{ asset('images/icon_logout.png') }}" alt="Logout Icon" class="w-6 h-6 mr-2">
                Logout
            </a>
        </li>
    </ul>
</div>
