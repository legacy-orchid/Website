<div class="row">

    <nav aria-label="pagination">
        <ul class="pager">
            @if($previousPage)
                <li class="previous">
                    <a href="@url($previousPage)">
                        <span aria-hidden="true">&larr;</span> Newer posts
                    </a>
                </li>
            @endif

            @if($nextPage)
                <li class="next">
                    <a href="@url($nextPage)">
                        <span aria-hidden="true">&rarr;</span> Previous posts
                    </a>
                </li>
            @endif

        </ul>
    </nav>

</div>


