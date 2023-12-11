<div>
    <button onclick="document.getElementById('amod').showModal();"
        class="floating-right-bottom-btn shrink-0 h-9 px-4 focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring text-white dark:text-gray-800 inline-flex items-center font-bold shadow rounded focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring bg-primary-500 hover:bg-primary-400 active:bg-primary-600 text-white dark:text-gray-800 inline-flex items-center font-bold px-4 h-9 text-sm shrink-0 h-9 px-4 focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring text-white dark:text-gray-800 inline-flex items-center font-bold">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
        </svg>
    </button>
    <dialog id="amod">
        <div class="dialog-body">
            <div class="flex justify-between">
                <h6 class="text-xl p-2">Login as</h6>
                <button onclick="document.getElementById('amod').close();">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="users">
                @foreach ($users as $user)
                    <li class="hover:bg-gray-50 p-2 cursor-pointer flex justify-between border-b"
                        onclick="window.location.href = '{{ url($user['url']) }}' ">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <span>{{ $user['name'] }}</span><br>
                                <small>{{ $user['username'] }}</small>
                            </div>
                        </div>

                        @if ($user['active'])
                            <div>
                                <span
                                    class="inline-flex items-center whitespace-nowrap min-h-6 px-2 rounded-full uppercase text-xs font-bold bg-green-100 text-green-600 dark:bg-green-500 dark:text-green-900 mt-1">
                                    Active</span>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </dialog>
</div>

<style>
    .floating-right-bottom-btn {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        /* background-color: #0C9; */
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        box-shadow: 2px 2px 3px #999;
    }


    dialog::backdrop {
        background-color: black;
        opacity: 0.4;
    }

    dialog {
        padding: 0;
        border: 0;
        border-radius: 0.6rem;
    }

    .dialog-body {
        min-width: 400px;
        padding: 15px;
    }
</style>
