@props([
    'type'=>'info',
    'message'=>'',
    'dismissible'=>false,
    'autoDismiss'=>false, //alert verdwijnt automatisch
    'dismissTime'=>3000,
])

@php
    $alertTypes=[
         'success' => 'bg-green-100 text-green-800 border-green-500',
         'danger' => 'bg-red-100 text-red-800 border-red-500',
         'warning' => 'bg-yellow-100 text-yellow-800 border-yellow-500',
         'info' => 'bg-blue-100 text-blue-800 border-blue-500',
];
    $classes = $alertTypes[$type] ?? $alertTypes['info'];
@endphp

<div x-data="{ show: true, init() {
        if ({{ $autoDismiss ? 'true' : 'false' }}) {
            setTimeout(() => this.show = false, {{ $dismissTime }});
        }
    }}"
     x-show="show"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform scale-90"
     x-transition:enter-end="opacity-100 transform scale-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 transform scale-100"
     x-transition:leave-end="opacity-0 transform scale-90"
     class="p-4 border-l-4 rounded-md {{ $classes }} relative">
    <div class="flex items-center justify-between">
        <span>{{ $message }}</span>
        @if($dismissible)
            <button type="button" class="text-gray-600 hover:text-gray-900 focus:outline-none" @click="show = false">
                &times;
            </button>
        @endif
    </div>
</div>




