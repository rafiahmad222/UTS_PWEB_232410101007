@props(['username'])
<nav class="font-['Comic_Relief'] bg-[#DDEB9D] shadow-md p-4 flex justify-between items-center">
    <div class="flex items-center">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="flex items-center">
            <img src="{{ asset('images/Logo_AgroMart.png') }}" alt="Logo" class="w-20 inline-block ml-2">
        </a>
        <ul class="flex space-x-4 ml-6">
            <li>
                <a href="{{ route('dashboard', ['username' => $username]) }}" class="font-bold text-lg text-[#626F47] hover:text-[#CBA35C]">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('profile', ['username' => $username]) }}" class="font-bold text-lg text-[#626F47] hover:text-[#CBA35C] {{ request()->is('profile') ? 'border-b-2 border-[#626F47] py-1 ' : '' }}">
                    Profile
                </a>
            </li>
            <li>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="font-bold text-lg text-[#626F47] hover:text-[#CBA35C] {{ request()->is('pengelolaan') ? 'border-b-2 border-[#626F47] py-1 ' : '' }}">
                    Pengelolaan
                </a>
            </li>
        </ul>
    </div>
    <div class="flex items-center">
        <a href="{{ route('logout') }}" class="font-semibold text-lg text-red-600 hover:text-red-800 mr-4">Logout</a>
    </div>
</nav>
