<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Add a New Task') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Please add you task') }}
        </p>
    </header>
    <form method="post" action="{{ route('tasks.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <div>
            <x-input-label for="name" :value="__('Task Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"  />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="status" :value="__('Task Status')" />
            <select name="status" id="status" class="mt-1 block w-full" required>
                <option value="pending">Pending</option>
                <option value="done">Done</option>
            </select>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>