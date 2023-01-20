@if (session()->has('success'))
<div x-data="{ show:true }" 
    x-init="setTimeout(() => show = false, 2500)"
    x-show = "show"
    class="w-25 text-center bg-secondary text-white py-2 px-3 rounded-pill mt-1 fixed-top">
    <h5>{{ session('success') }}</h5>
</div>
@endif