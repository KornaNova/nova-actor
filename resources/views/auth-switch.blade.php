@env('local')
    <div id="auth_switch_modal" class="as-modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h5>Auth Switch</h5>
            </div>
            <div class="modal-body">
                <ul>
                    @foreach(config('laravel-auth-switch.accounts') as $key=>$u)
                        <li>

                            <a href="{{ route('login-as',$key) }}">
                                <div class="as-block">
                                    @if(auth()->check() && auth()->user()>email == $u['username'])
                                        <div class="as-online"></div>@endif
                                    {{ $u['name'] }}
                                    <p>{{ $u['username'] }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <button id="asb" class="as-btn" title="Auth Switch">
        <img alt="svgImg"
             src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iMjQiIGhlaWdodD0iMjQiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIHRyYW5zZm9ybT0iIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtbGluZWNhcD0iYnV0dCIgc3Ryb2tlLWxpbmVqb2luPSJtaXRlciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSIiIHN0cm9rZS1kYXNob2Zmc2V0PSIwIiBmb250LWZhbWlseT0ibm9uZSIgZm9udC13ZWlnaHQ9Im5vbmUiIGZvbnQtc2l6ZT0ibm9uZSIgdGV4dC1hbmNob3I9Im5vbmUiIHN0eWxlPSJtaXgtYmxlbmQtbW9kZTogbm9ybWFsIj48cGF0aCBkPSJNMCwxNzJ2LTE3MmgxNzJ2MTcyeiIgZmlsbD0ibm9uZSI+PC9wYXRoPjxwYXRoIGQ9IiIgZmlsbD0ibm9uZSI+PC9wYXRoPjxnIGZpbGw9IiNmZmZmZmYiPjxwYXRoIGQ9Ik04Niw3LjE2NjY3Yy0yMy44MjA2MywwIC00MywxOS4xNzkzNyAtNDMsNDN2Ny4xNjY2N2MtNy44ODMzMywwIC0xNC4zMzMzMyw2LjQ1IC0xNC4zMzMzMywxNC4zMzMzM3Y3MS42NjY2N2MwLDcuODgzMzMgNi40NSwxNC4zMzMzMyAxNC4zMzMzMywxNC4zMzMzM2g4NmM3Ljg4MzMzLDAgMTQuMzMzMzMsLTYuNDUgMTQuMzMzMzMsLTE0LjMzMzMzdi03MS42NjY2N2MwLC03Ljg4MzMzIC02LjQ1LC0xNC4zMzMzMyAtMTQuMzMzMzMsLTE0LjMzMzMzdi03LjE2NjY3YzAsLTIzLjgyMDYzIC0xOS4xNzkzNiwtNDMgLTQzLC00M3pNODYsMjEuNWMxNi4zMTI3LDAgMjguNjY2NjcsMTIuMzUzOTcgMjguNjY2NjcsMjguNjY2Njd2Ny4xNjY2N2gtNTcuMzMzMzN2LTcuMTY2NjdjMCwtMTYuMzEyNyAxMi4zNTM5NywtMjguNjY2NjcgMjguNjY2NjcsLTI4LjY2NjY3ek04Niw5My4xNjY2N2M3Ljg4MzMzLDAgMTQuMzMzMzMsNi40NSAxNC4zMzMzMywxNC4zMzMzM2MwLDcuODgzMzMgLTYuNDUsMTQuMzMzMzMgLTE0LjMzMzMzLDE0LjMzMzMzYy03Ljg4MzMzLDAgLTE0LjMzMzMzLC02LjQ1IC0xNC4zMzMzMywtMTQuMzMzMzNjMCwtNy44ODMzMyA2LjQ1LC0xNC4zMzMzMyAxNC4zMzMzMywtMTQuMzMzMzN6Ij48L3BhdGg+PC9nPjwvZz48L2c+PC9zdmc+"/>
    </button>
    <script>
        var modal = document.getElementById("auth_switch_modal");
        var btn = document.getElementById("asb");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function () {
            modal.style.display = "block";
            btn.style.display = "none";
        }

        span.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
                btn.style.display = "block";
            }
        }
    </script>

    <style>
        .as-btn {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            background-color: black;
            color: whitesmoke;
            position: fixed;
            right: 0;
            bottom: 0;
            z-index: 99999;
            border: none;
        }

        /* The Modal (background) */
        .as-modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
            -webkit-animation-name: fadeIn; /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s
        }

        .modal-body .as-block {
            color: white;
            cursor: pointer;
            padding: 6px;
        }

        .modal-body li {
            list-style: none;
        }

        .modal-body .as-block:hover {
            background-color: #23b727;
            border-radius: 8px;
        }

        .as-modal a {
            text-decoration: none;
            color: white;
        }

        /* Modal Content */
        .modal-content {
            position: fixed;
            bottom: 0;
            right: 0;
            background-color: black;
            width: 300px;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-name: slideIn;
            animation-duration: 0.4s
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 8px 16px;
            background-color: black;
            color: white;
        }

        .modal-body {
            padding: 8px;
            max-height: 80vh;
            overflow: auto;
        }

        .as-online {
            width: 10px;
            height: 10px;
            background-color: green;
            border-radius: 50%;
            display: inline-block;
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }
            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }
            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }
    </style>

@endenv
