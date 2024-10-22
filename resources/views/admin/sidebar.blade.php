<div class="card account-nav border-0 shadow mb-4 mb-lg-0">
    <div class="card-body p-0">
        <ul class="list-group list-group-flush ">
            <li class="list-group-item d-flex justify-content-between p-3">
                <a href="{{ route('admin.companies') }}">Companies</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <a href="#">Jobs</a>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href=" {{ route('logout') }} " onclick="event.preventDefault(); this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
            </li>


        </ul>
    </div>
</div>
