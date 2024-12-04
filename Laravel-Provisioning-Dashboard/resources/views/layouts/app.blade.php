<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
 
    {{-- The navbar with `sticky` and `full-width` --}}
    <x-mary-nav sticky full-width>
 
        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-mary-icon name="o-bars-3" class="cursor-pointer" />
            </label>
 
            {{-- Brand --}}
            <x-mary-icon name="o-cloud" class="h-10" />
            <div class="ml-3 text-2xl">Provisboard</div>
        </x-slot:brand>
 
        {{-- Right side actions --}}
        <x-slot:actions>
            <x-mary-button icon="o-user-plus" link="###" tooltip-left="Provision a new Tenant" class="btn-sm btn-outline " responsive/>
            <livewire:messages-component />
            <livewire:notification-component />
            <x-mary-theme-toggle darkTheme="dracula" lightTheme="cupcake" />
            
        </x-slot:actions>
    </x-mary-nav>

    

    {{-- The main content with `full-width` --}}
    <x-mary-main with-nav full-width>
        <x-mary-alert title="You have 10 messages" icon="o-exclamation-triangle" />
 
        {{-- This is a sidebar that works also as a drawer on small screens --}}
        {{-- Notice the `main-drawer` reference here --}}
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200">
 
           
            {{-- Activates the menu item when a route matches the `link` property --}}
            <x-mary-menu activate-by-route>
            <x-mary-menu-separator icon="o-sparkles"/>
                <x-mary-menu-item title="Home" icon="o-home" link="dashboard" />
                <x-mary-menu-sub title="Tenants" icon="o-user-group"  open>
                    <x-mary-menu-item title="Provision a Tenant" icon="o-user-plus" link="####" badge="+" badge-classes="float-right"/>
                    <x-mary-menu-item title="List of Tenants" icon="o-users" link="####" badge="14" badge-classes="float-right"/>
                </x-mary-menu-sub>
                <x-mary-menu-item title="Schedule" icon="o-calendar-date-range" link="###" badge="2" badge-classes="!badge-warning" />
                <x-mary-menu-item title="Messages" icon="o-envelope" link="###" />
                <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-mary-menu-item title="Users" icon="o-user" link="####" />
                    <x-mary-menu-item title="Archives" icon="o-archive-box" link="####" />
                </x-mary-menu-sub>
                
            </x-mary-menu>
            {{-- Added this div for sticky bottom --}}
            <div class="fixed bottom-12 w-full">    
             {{-- User --}}
                @if($user = auth()->user())
                    <x-mary-menu-separator />
                    <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover>
                        <x-slot:avatar>
                            <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="w-8 h-8 rounded-full" >
                        </x-slot:avatar>
                        <x-slot:actions>
                            <x-mary-button icon="o-cog-6-tooth" class="btn-circle btn-ghost btn-xs" tooltip-left="profile" no-wire-navigate link="/profile" />
                            <x-mary-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff" link="/logout" />
                        </x-slot:actions>
                    </x-mary-list-item>                
                @endif
            </div>
 
        </x-slot:sidebar>
 
        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>
        
    </x-mary-main>
 
    {{--  TOAST area --}}
    <x-mary-toast />
    {{-- Theme toggle --}}
    <x-mary-theme-toggle class="hidden" />
</body>
</html>
