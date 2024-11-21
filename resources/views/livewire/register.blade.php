<div>
    <form wire:submit.prevent="register" class="p-4" formnovalidate>
        <table>
        <tr>
            <th class="text-left pr-4">名前</th>
            <td>
                <input type="text" wire:model="name" class="rounded border-gray-300">
                @error('name')
                    <p class="text-red-900 text-bold text-sm">{{ $message }}</p>
                @enderror
            </td>
        </tr>
        <tr>
            <th class="text-left pr-4">メールアドレス</th>
            <td>
                <input type="email" wire:model="email" class="rounded border-gray-300">
                @error('email')
                    <p class="text-red-900 text-bold text-sm">{{ $message }}</p>
                @enderror
            </td>
        </tr>
        <tr>
            <th class="text-left pr-4">パスワード</th>
            <td>
                <input type="password" wire:model="password" class="rounded border-gray-300">
                @error('password')
                    <p class="text-red-900 text-bold text-sm">{{ $message }}</p>
                @enderror
            </td>
        </tr>
        <tr><td></td><td><button class="p-2 px-16 bg-gray-50 rounded border">登録する</button></td></tr>
    </table>
    </form>
</div>
