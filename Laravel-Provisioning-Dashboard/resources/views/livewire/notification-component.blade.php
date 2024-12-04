<div>
    <x-mary-drawer wire:model="showNotificationsDrawer" class="w-80 lg:w-96 shadow-xl rounded-lg" right>
        <div class="p-4">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Notifications</h2>
            <div class="space-y-2">
                @forelse($notifications ?? [] as $notification)
                    <div class="flex items-center space-x-4">
                        <div class="bg-blue-500 rounded-full p-2 text-white">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div>
                            <p class="text-gray-800 font-medium">{{ $notification['title'] ?? 'Untitled Notification' }}</p>
                            <p class="text-gray-600 text-sm">{{ $notification['message'] ?? 'No message available' }}</p>
                            <p class="text-gray-500 text-xs">{{ $notification['time'] ?? 'N/A' }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-600 text-center">No notifications yet.</p>
                @endforelse
            </div>
            <div class="mt-4 text-right">
                <x-mary-button label="Mark all as read" wire:click="markAllAsRead()" class="btn-ghost btn-sm" />
                <x-mary-button label="Close" @click="$wire.showNotificationsDrawer = false" />
            </div>
        </div>
    </x-mary-drawer>

    <x-mary-button label="Notifications" icon="o-bell" wire:click="$toggle('showNotificationsDrawer')" class="btn-ghost btn-sm" :badge="$unreadNotificationsCount ?? 0" :badge-classes="'bg-orange-500'" />
</div>