<div class="bg-blue-gray-50" x-data="initApp()" x-init="initDatabase()">

<div class="hide-print flex flex-row h-screen antialiased text-blue-gray-800">
    <!-- left sidebar -->
    @include('rickodev::livewire.left-sidebar')
    <!-- page content -->
    <livewire:rickodev::product-grid></livewire:rickodev::product-grid>
    <!-- modal first time -->
    @include('rickodev::livewire.receipt')
    <!-- modal receipt -->
</div>

</div>
