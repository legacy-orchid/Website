<div class="row">

    <nav aria-label="pagination">
        <ul class="pager">
            @if($previousPage)
                <li class="previous">
                    <a href="@url($previousPage)">
                        <i class="icon-arrow-left" aria-hidden="true"></i> Предыдущее
                    </a>
                </li>
            @endif

            @if($nextPage)
                <li class="next">
                    <a href="@url($nextPage)">
                        <i class="icon-arrow-right" aria-hidden="true"></i> Новое
                    </a>
                </li>
            @endif

        </ul>
    </nav>

</div>


