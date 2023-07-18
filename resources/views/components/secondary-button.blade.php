<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-rifleGreen border-none font-semibold text-xs text-white uppercase tracking-widest shadow-sm focus:outline-none focus:ring-2 focus:ring-rifleGreen focus:ring-offset-1 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
