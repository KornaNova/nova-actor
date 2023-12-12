<div>
    <button onclick="document.getElementById('amod').showModal();" title="Act as"
        class="floating-right-bottom-btn text-white  shadow  focus:ring bg-primary-500 hover:bg-primary-400 active:bg-primary-600 inline-flex items-center font-bold px-4 h-9 text-sm shrink-0 h-9 px-4 focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring inline-flex items-center font-bold">
        <svg fill="white" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 299.196 299.196" xml:space="preserve">
            <g>
                <path d="M101.833,91.468c-4.882-4.882-4.882-12.796,0-17.678c3.915-3.915,9.781-4.682,14.469-2.316
  c4.495-7.917,11.674-13.995,20.423-17.098c4.113-1.459,8.411-2.199,12.774-2.199c7.024,0,13.906,1.934,19.902,5.593
  c1.78,1.086,3.645,2.177,5.584,3.27V27.843c0-5.351-2.384-10.359-6.539-13.738c-4.164-3.386-9.556-4.705-14.789-3.607
  c-18.029,3.77-41.526,5.845-66.164,5.845s-48.135-2.075-66.164-5.845c-1.214-0.254-2.437-0.379-3.65-0.379
  c-4.024,0-7.948,1.375-11.142,3.974C2.382,17.47,0,22.482,0,27.843v92.63c0,44.46,33.335,81.281,76.323,86.782
  c-0.817-14.212,1.207-28.581,6.123-42.396l3.408-9.578c-6.281,0.383-12.452,2.963-17.241,7.752c-4.881,4.881-12.797,4.881-17.678,0
  c-4.882-4.882-4.882-12.796,0-17.678c11.885-11.885,28.163-16.756,43.655-14.626l12.438-34.957
  C105.186,94.514,103.445,93.08,101.833,91.468z M71.95,91.468c-6.775,6.775-15.784,10.507-25.366,10.507
  c-9.583,0-18.592-3.731-25.367-10.507c-4.882-4.882-4.882-12.796,0-17.678c4.881-4.881,12.797-4.881,17.678,0
  c4.241,4.241,11.139,4.239,15.378,0c4.881-4.881,12.797-4.881,17.678,0C76.832,78.672,76.832,86.587,71.95,91.468z" />
                <path d="M296.544,127.725c-2.847-4.684-7.654-7.85-13.084-8.592c-17.524-2.393-40.144-8.091-64.195-16.649
  c-24.051-8.558-45.186-18.428-60.283-27.642c-2.89-1.764-6.176-2.665-9.483-2.665c-2.05,0-4.109,0.346-6.087,1.048
  c-5.169,1.834-9.233,5.901-11.071,11.068l-31.052,87.27c-16.291,45.785,7.619,96.108,53.404,112.398
  c9.75,3.469,19.706,5.115,29.495,5.115c36.179,0,70.081-22.484,82.903-58.519l31.052-87.27
  C299.98,138.124,299.391,132.408,296.544,127.725z M131.629,151.079c-2.963-6.235-0.31-13.692,5.926-16.654
  c8.655-4.113,18.394-4.608,27.421-1.396c9.027,3.213,16.264,9.748,20.376,18.403c2.963,6.235,0.31,13.692-5.926,16.654
  c-1.731,0.823-3.558,1.213-5.355,1.213c-4.676,0-9.159-2.635-11.299-7.139c-1.247-2.623-3.44-4.605-6.177-5.578
  c-2.736-0.975-5.688-0.823-8.311,0.423C142.049,159.97,134.591,157.315,131.629,151.079z M208.213,242.594
  c-7.141,3.393-14.681,5-22.105,5c-19.349,0-37.936-10.901-46.776-29.509c-2.963-6.235-0.31-13.691,5.926-16.654
  c6.235-2.964,13.692-0.31,16.654,5.926c6.318,13.297,22.275,18.975,35.573,12.657c6.236-2.963,13.692-0.31,16.654,5.926
  C217.102,232.175,214.448,239.631,208.213,242.594z M255.378,195.11c-1.731,0.823-3.558,1.213-5.355,1.213
  c-4.676,0-9.159-2.635-11.299-7.139c-2.574-5.416-9.073-7.729-14.489-5.155c-6.233,2.965-13.691,0.311-16.654-5.926
  c-2.963-6.235-0.31-13.692,5.926-16.654c17.864-8.489,39.309-0.861,47.798,17.007C264.267,184.691,261.613,192.148,255.378,195.11z
  " />
            </g>
        </svg>
    </button>
    <dialog id="amod" class="dark:bg-gray-800 dark:text-gray-400 bg-white ">
        <div class="dialog-body ">
            <div class="flex justify-between">
                <h6 class="text-xl p-2">Act as</h6>
                <button onclick="document.getElementById('amod').close();">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <ul class="users">
                @foreach ($users as $user)
                    <li class="hover:bg-gray-50 dark:hover:bg-gray-800 p-2 cursor-pointer flex justify-between border-b dark:hover:text-gray-300"
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
                                    Acting</span>
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
        border-radius: 50px;
        text-align: center;
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
