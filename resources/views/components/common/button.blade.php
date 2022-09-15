<button {{ $attributes->merge(['class' => 'flex shrink-0 items-center rounded-[4px] pt-[0.8rem] pb-[0.8rem] pl-8 pr-[2.4rem] mr-4 mb-4']) }}>
    {{ $icon }}
    <div class="w-4"></div>
    <span class="text-[1.6rem] font-bold">{{ $label }}</span>
</button>