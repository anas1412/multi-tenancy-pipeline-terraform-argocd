<div>
    <x-mary-modal wire:model="MessagesModal" persistent class="backdrop-blur" >
        <div class="p-4">
            <h2 class="text-xl font-bold mb-4">Messages</h2>
            <ul class="space-y-2">
                @foreach(range(1,8) as $i)
                    <li class="flex items-center">
                        <div class="w-8 h-8 rounded-full bg-gray-300 mr-3"></div>
                        <div>
                            <div class="font-medium">Sender Name {{ $i }}</div>
                            <div class="text-sm text-gray-600">Dummy message content {{ $i }}</div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="mt-4 text-right">
                <x-mary-button label="Cancel" @click="$wire.MessagesModal = false" />
            </div>
        </div>
    </x-mary-modal>

    <x-mary-button label="Messages" icon="o-envelope" class="btn-ghost btn-sm" responsive badge="8" badge-classes="!badge-warning" @click="$wire.MessagesModal = true" />
</div>