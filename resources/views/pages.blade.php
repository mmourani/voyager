<?php $page= TCG\Voyager\Models\Page::first(); ?>
@can('browse',$page)
    you can browse pages
@endcan