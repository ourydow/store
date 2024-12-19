<?php

use Livewire\Volt\Component;
use App\Livewire\Actions\Logout;

new class extends Component {
    /**
         * Log the current user out of the application.
         */
         public function logout(Logout $logout): void
            {

                $this->redirect('/', navigate: true);
                $logout();
            }
}; ?>

<div>
    <button type='button' wire:click="logout"
            class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-yellow-500">
            <ion-icon class="w-4 h-4 md hydrated" name="body-outline" role="img" aria-label="body outline"></ion-icon>
            <span class="ml-4">
                Se deconnecter
            </span>
        </button>
</div>
