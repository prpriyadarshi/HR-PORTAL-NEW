<!-- resources/views/livewire/leave-pending.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/livewire@2.5.4/dist/livewire.min.css" integrity="sha256-DzZTFikYq5+/3b7JsJgR5bzMnTzjJl6Mz7G9N1P0hjE=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/livewire@2.5.4/dist/livewire.min.js" integrity="sha256-c3hehce8/qlsE/5jJFb+BZYCGi49pMIVtTlyr5Lo7L8=" crossorigin="anonymous"></script>

    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-FfRiP3sof5LkXjL1dDPpDvDNqp6vlS9b33w7O5KGiS5+1JhQsNLzM53eMutq6uO1p0l69uzg56tsLIR7lq8f+Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <livewire:styles/>
</head>
<body>
    <!-- resources/views/livewire/sick-leave.blade.php -->
    <!-- resources/views/livewire/sick-leave.blade.php -->

    <div>
        <select wire:model="selectedOption" @change="showMessage">
            <option value="" disabled selected>Select an option</option>
            <option value="loss">Loss</option>
            <option value="sick">Sick</option>
        </select>

        @if ($message)
            <div class="message-container">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>

    @livewireScripts
</body>
</html>
